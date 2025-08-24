<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        $users = User::where('is_admin', true)->get();
        return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return view('admin.users.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => true,
            'email_verified_at' => now(),
        ]);

        return redirect()->route('admin.users.index')->with('success', 'کاربر ادمین با موفقیت ایجاد شد.');
    }

    public function edit(User $user)
    {
        if (!$user->is_admin) {
            return redirect()->route('admin.users.index')->with('error', 'فقط کاربران ادمین قابل ویرایش هستند.');
        }
        return view('admin.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        if (!$user->is_admin) {
            return redirect()->route('admin.users.index')->with('error', 'فقط کاربران ادمین قابل ویرایش هستند.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
        ];

        if ($request->filled('password')) {
            $data['password'] = Hash::make($request->password);
        }

        $user->update($data);

        return redirect()->route('admin.users.index')->with('success', 'کاربر ادمین با موفقیت به‌روزرسانی شد.');
    }

    public function destroy(User $user)
    {
        if (!$user->is_admin) {
            return redirect()->route('admin.users.index')->with('error', 'فقط کاربران ادمین قابل حذف هستند.');
        }

        if (auth()->id() === $user->id) {
            return redirect()->route('admin.users.index')->with('error', 'نمی‌توانید حساب خودتان را حذف کنید.');
        }

        $user->delete();
        return redirect()->route('admin.users.index')->with('success', 'کاربر ادمین با موفقیت حذف شد.');
    }
}
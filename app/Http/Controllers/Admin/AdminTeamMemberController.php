<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TeamMember;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AdminTeamMemberController extends Controller
{
    public function index()
    {
        $teamMembers = TeamMember::query()->latest()->get();
        return view('admin.team-members.index', compact('teamMembers'));
    }

    public function create()
    {
        return view('admin.team-members.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'telegram' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = Str::slug($request->name) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $data['image'] = $file->storeAs('team-members', $filename, 'public');
        }

        TeamMember::create($data);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'عضو تیم با موفقیت ایجاد شد.');
    }

    public function show(TeamMember $teamMember)
    {
        return view('admin.team-members.show', compact('teamMember'));
    }

    public function edit(TeamMember $teamMember)
    {
        return view('admin.team-members.edit', compact('teamMember'));
    }

    public function update(Request $request, TeamMember $teamMember)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'bio' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
            'linkedin' => 'nullable|url|max:255',
            'github' => 'nullable|url|max:255',
            'telegram' => 'nullable|url|max:255',
            'instagram' => 'nullable|url|max:255',
            'is_active' => 'boolean',
        ]);

        $data = $request->all();
        if ($request->hasFile('image')) {
            if ($teamMember->image) {
                Storage::disk('public')->delete($teamMember->image);
            }
            $file = $request->file('image');
            $filename = Str::slug($request->name) . '-' . time() . '.' . $file->getClientOriginalExtension();
            $data['image'] = $file->storeAs('team-members', $filename, 'public');
        }

        $teamMember->update($data);

        return redirect()->route('admin.team-members.index')
            ->with('success', 'عضو تیم با موفقیت به‌روزرسانی شد.');
    }

    public function destroy(TeamMember $teamMember)
    {
        if ($teamMember->image) {
            Storage::disk('public')->delete($teamMember->image);
        }
        $teamMember->delete();

        return redirect()->route('admin.team-members.index')
            ->with('success', 'عضو تیم با موفقیت حذف شد.');
    }
}
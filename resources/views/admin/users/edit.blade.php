@extends('layouts.admin')
@section('title', 'ویرایش کاربر ادمین')
@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">ویرایش کاربر ادمین</h2>
        <form action="{{ route('admin.users.update', $user) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">نام</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $user->name) }}">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email">ایمیل</label>
                <input type="email" name="email" id="email" class="form-control" required value="{{ old('email', $user->email) }}">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="password">رمز عبور (اختیاری)</label>
                <input type="password" name="password" id="password" class="form-control">
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">تکرار رمز عبور</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> به‌روزرسانی کاربر</button>
        </form>
    </div>
</section>
@endsection
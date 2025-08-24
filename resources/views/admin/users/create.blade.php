@extends('layouts.admin')
@section('title', 'ایجاد کاربر ادمین')
@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">ایجاد کاربر ادمین جدید</h2>
        <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="form-group">
                <label for="name">نام</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
                @error('name') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="email">ایمیل</label>
                <input type="email" name="email" id="email" class="form-control" required value="{{ old('email') }}">
                @error('email') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="password">رمز عبور</label>
                <input type="password" name="password" id="password" class="form-control" required>
                @error('password') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="password_confirmation">تکرار رمز عبور</label>
                <input type="password" name="password_confirmation" id="password_confirmation" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> ایجاد کاربر</button>
        </form>
    </div>
</section>
@endsection
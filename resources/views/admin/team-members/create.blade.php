@extends('layouts.admin')

@section('title', 'افزودن عضو تیم')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">افزودن عضو جدید</h2>
        <form action="{{ route('admin.team-members.store') }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            <div class="form-group">
                <label for="name" class="block text-sm font-medium text-gray-700">نام</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="position" class="block text-sm font-medium text-gray-700">موقعیت</label>
                <input type="text" name="position" id="position" class="form-control" required value="{{ old('position') }}">
                @error('position')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio" class="block text-sm font-medium text-gray-700">بیوگرافی</label>
                <textarea name="bio" id="bio" class="form-control" rows="4">{{ old('bio') }}</textarea>
                @error('bio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image" class="block text-sm font-medium text-gray-700">تصویر</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="linkedin" class="block text-sm font-medium text-gray-700">لینکدین</label>
                <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin') }}">
                @error('linkedin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="github" class="block text-sm font-medium text-gray-700">گیتهاب</label>
                <input type="url" name="github" id="github" class="form-control" value="{{ old('github') }}">
                @error('github')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="telegram" class="block text-sm font-medium text-gray-700">تلگرام</label>
                <input type="url" name="telegram" id="telegram" class="form-control" value="{{ old('telegram') }}">
                @error('telegram')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="instagram" class="block text-sm font-medium text-gray-700">اینستاگرام</label>
                <input type="url" name="instagram" id="instagram" class="form-control" value="{{ old('instagram') }}">
                @error('instagram')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="is_active" class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', 1) ? 'checked' : '' }} class="mr-2">
                    <span class="text-sm font-medium text-gray-700">فعال</span>
                </label>
                @error('is_active')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> ذخیره</button>
        </form>
    </div>
</section>
@endsection
@extends('layouts.admin')

@section('title', 'ویرایش عضو تیم')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">ویرایش عضو تیم</h2>
        <form action="{{ route('admin.team-members.update', $teamMember) }}" method="POST" enctype="multipart/form-data" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="block text-sm font-medium text-gray-700">نام</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $teamMember->name) }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="position" class="block text-sm font-medium text-gray-700">موقعیت</label>
                <input type="text" name="position" id="position" class="form-control" required value="{{ old('position', $teamMember->position) }}">
                @error('position')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="bio" class="block text-sm font-medium text-gray-700">بیوگرافی</label>
                <textarea name="bio" id="bio" class="form-control" rows="4">{{ old('bio', $teamMember->bio) }}</textarea>
                @error('bio')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image" class="block text-sm font-medium text-gray-700">تصویر</label>
                <input type="file" name="image" id="image" class="form-control" accept="image/*">
                @if ($teamMember->image)
                    <img src="{{ $teamMember->image_url }}" alt="{{ $teamMember->name }}" class="w-32 h-32 object-cover rounded-full mt-2">
                @else
                    <p class="text-gray-600 mt-2">بدون تصویر</p>
                @endif
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="linkedin" class="block text-sm font-medium text-gray-700">لینکدین</label>
                <input type="url" name="linkedin" id="linkedin" class="form-control" value="{{ old('linkedin', $teamMember->linkedin) }}">
                @error('linkedin')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="github" class="block text-sm font-medium text-gray-700">گیتهاب</label>
                <input type="url" name="github" id="github" class="form-control" value="{{ old('github', $teamMember->github) }}">
                @error('github')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="telegram" class="block text-sm font-medium text-gray-700">تلگرام</label>
                <input type="url" name="telegram" id="telegram" class="form-control" value="{{ old('telegram', $teamMember->telegram) }}">
                @error('telegram')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="instagram" class="block text-sm font-medium text-gray-700">اینستاگرام</label>
                <input type="url" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $teamMember->instagram) }}">
                @error('instagram')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="is_active" class="flex items-center">
                    <input type="checkbox" name="is_active" id="is_active" value="1" {{ old('is_active', $teamMember->is_active) ? 'checked' : '' }} class="mr-2">
                    <span class="text-sm font-medium text-gray-700">فعال</span>
                </label>
                @error('is_active')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> به‌روزرسانی</button>
        </form>
    </div>
</section>
@endsection
@extends('layouts.admin')

@section('title', 'افزودن مقاله جدید')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">افزودن مقاله جدید</h2>
        <form action="{{ route('admin.blog.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="icon">آیکون</label>
                <input type="text" name="icon" id="icon" class="form-control" value="{{ old('icon') }}">
                @error('icon')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="date">تاریخ</label>
                <input type="date" name="date" id="date" class="form-control" value="{{ old('date') }}">
                @error('date')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="excerpt">خلاصه</label>
                <textarea name="excerpt" id="excerpt" class="form-control" rows="4">{{ old('excerpt') }}</textarea>
                @error('excerpt')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="content">محتوا</label>
                <textarea name="content" id="content" class="form-control" rows="8" required>{{ old('content') }}</textarea>
                @error('content')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="category_id">دسته‌بندی</label>
                <select name="category_id" id="category_id" class="form-control">
                    <option value="">بدون دسته‌بندی</option>
                    @foreach ($categories as $category)
                        <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
                @error('category_id')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="author">نویسنده</label>
                <input type="text" name="author" id="author" class="form-control" required value="{{ old('author') }}">
                @error('author')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> ذخیره مقاله</button>
        </form>
    </div>
</section>
@endsection
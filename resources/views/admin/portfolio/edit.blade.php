@extends('layouts.admin')
@section('title', 'ویرایش نمونه‌کار')
@section('content')
<div class="container">
    <h2>ویرایش نمونه‌کار</h2>
    <form method="POST" action="{{ route('admin.portfolio.update', $portfolio) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">عنوان</label>
            <input type="text" name="title" id="title" value="{{ $portfolio->title }}" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="icon">آیکون</label>
            <input type="text" name="icon" id="icon" value="{{ $portfolio->icon }}" required>
            @error('icon') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="description">توضیحات</label>
            <textarea name="description" id="description" required>{{ $portfolio->description }}</textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="tags">تگ‌ها (جدا شده با کاما)</label>
            <input type="text" name="tags" id="tags" value="{{ implode(',', $portfolio->tags) }}" required>
            @error('tags') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">به‌روزرسانی</button>
    </form>
</div>
@endsection
@extends('layouts.admin')
@section('title', 'افزودن مقاله')
@section('content')
<div class="container">
    <h2>افزودن مقاله جدید</h2>
    <form method="POST" action="{{ route('admin.blog.store') }}">
        @csrf
        <div>
            <label for="title">عنوان</label>
            <input type="text" name="title" id="title" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="icon">آیکون (کلاس Font Awesome)</label>
            <input type="text" name="icon" id="icon" required>
            @error('icon') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="date">تاریخ</label>
            <input type="date" name="date" id="date" required>
            @error('date') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="excerpt">خلاصه</label>
            <textarea name="excerpt" id="excerpt" required></textarea>
            @error('excerpt') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="content">محتوا</label>
            <textarea name="content" id="content" required></textarea>
            @error('content') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">ذخیره</button>
    </form>
</div>
@endsection
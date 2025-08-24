@extends('layouts.admin')
@section('title', 'ویرایش مقاله')
@section('content')
<div class="container">
    <h2>ویرایش مقاله</h2>
    <form method="POST" action="{{ route('admin.blog.update', $post) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">عنوان</label>
            <input type="text" name="title" id="title" value="{{ $post->title }}" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="icon">آیکون</label>
            <input type="text" name="icon" id="icon" value="{{ $post->icon }}" required>
            @error('icon') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="date">تاریخ</label>
            <input type="date" name="date" id="date" value="{{ $post->date }}" required>
            @error('date') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="excerpt">خلاصه</label>
            <textarea name="excerpt" id="excerpt" required>{{ $post->excerpt }}</textarea>
            @error('excerpt') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="content">محتوا</label>
            <textarea name="content" id="content" required>{{ $post->content }}</textarea>
            @error('content') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">به‌روزرسانی</button>
    </form>
</div>
@endsection
@extends('layouts.admin')
@section('title', 'افزودن خدمت')
@section('content')
<div class="container">
    <h2>افزودن خدمت جدید</h2>
    <form method="POST" action="{{ route('admin.services.store') }}">
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
            <label for="description">توضیحات</label>
            <textarea name="description" id="description" required></textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">ذخیره</button>
    </form>
</div>
@endsection
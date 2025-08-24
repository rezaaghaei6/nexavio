@extends('layouts.admin')
@section('title', 'ویرایش خدمت')
@section('content')
<div class="container">
    <h2>ویرایش خدمت</h2>
    <form method="POST" action="{{ route('admin.services.update', $service) }}">
        @csrf
        @method('PUT')
        <div>
            <label for="title">عنوان</label>
            <input type="text" name="title" id="title" value="{{ $service->title }}" required>
            @error('title') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="icon">آیکون</label>
            <input type="text" name="icon" id="icon" value="{{ $service->icon }}" required>
            @error('icon') <span class="error">{{ $message }}</span> @enderror
        </div>
        <div>
            <label for="description">توضیحات</label>
            <textarea name="description" id="description" required>{{ $service->description }}</textarea>
            @error('description') <span class="error">{{ $message }}</span> @enderror
        </div>
        <button type="submit" class="btn btn-primary">به‌روزرسانی</button>
    </form>
</div>
@endsection
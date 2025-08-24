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
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="content">محتوا</label>
                <textarea name="content" id="content" class="form-control" rows="8" required>{{ old('content') }}</textarea>
                @error('content') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="author">نویسنده</label>
                <input type="text" name="author" id="author" class="form-control" required value="{{ old('author') }}">
                @error('author') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> ذخیره مقاله</button>
        </form>
    </div>
</section>
@endsection
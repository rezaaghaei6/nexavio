@extends('layouts.admin')
@section('title', 'ویرایش مقاله')
@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">ویرایش مقاله</h2>
        <form action="{{ route('admin.blog.update', ['blog' => $post->id]) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" name="title" id="title" class="form-control" required value="{{ old('title', $post->title) }}">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="content">محتوا</label>
                <textarea name="content" id="content" class="form-control" rows="8" required>{{ old('content', $post->content) }}</textarea>
                @error('content') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="author_id">نویسنده</label>
                <select name="author_id" id="author_id" class="form-control" required>
                    @foreach($users as $user)
                        <option value="{{ $user->id }}" {{ old('author_id', $post->author_id) == $user->id ? 'selected' : '' }}>{{ $user->name }}</option>
                    @endforeach
                </select>
                @error('author_id') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> به‌روزرسانی مقاله</button>
        </form>
    </div>
</section>
@endsection
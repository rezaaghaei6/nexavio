@extends('layouts.admin')
@section('title', 'ویرایش خدمت')
@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">ویرایش خدمت</h2>
        <form action="{{ route('admin.services.update', $service) }}" method="POST" class="space-y-6">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" name="title" id="title" class="form-control" required value="{{ old('title', $service->title) }}">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="icon">آیکون (کلاس Font Awesome)</label>
                <input type="text" name="icon" id="icon" class="form-control" placeholder="مثال: fas fa-cogs" value="{{ old('icon', $service->icon) }}">
                @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">توضیحات</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description', $service->description) }}</textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tags">برچسب‌ها (جدا شده با کاما)</label>
                <input type="text" name="tags" id="tags" class="form-control" placeholder="مثال: Laravel, PHP, Web" value="{{ old('tags', implode(',', $service->tags ?? [])) }}">
                @error('tags') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> به‌روزرسانی خدمت</button>
        </form>
    </div>
</section>
@endsection
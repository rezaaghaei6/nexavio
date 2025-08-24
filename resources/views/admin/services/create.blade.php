@extends('layouts.admin')
@section('title', 'افزودن خدمت جدید')
@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">افزودن خدمت جدید</h2>
        <form action="{{ route('admin.services.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="form-group">
                <label for="title">عنوان</label>
                <input type="text" name="title" id="title" class="form-control" required value="{{ old('title') }}">
                @error('title') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="icon">آیکون (کلاس Font Awesome)</label>
                <input type="text" name="icon" id="icon" class="form-control" placeholder="مثال: fas fa-cogs" value="{{ old('icon') }}">
                @error('icon') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="description">توضیحات</label>
                <textarea name="description" id="description" class="form-control" rows="5" required>{{ old('description') }}</textarea>
                @error('description') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <div class="form-group">
                <label for="tags">برچسب‌ها (جدا شده با کاما)</label>
                <input type="text" name="tags" id="tags" class="form-control" placeholder="مثال: Laravel, PHP, Web" value="{{ old('tags') }}">
                @error('tags') <span class="text-danger">{{ $message }}</span> @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> ذخیره خدمت</button>
        </form>
    </div>
</section>
@endsection
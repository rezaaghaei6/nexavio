@extends('layouts.admin')

@section('title', 'ویرایش دسته‌بندی')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">ویرایش دسته‌بندی</h2>
        <form action="{{ route('admin.categories.update', ['category' => $category->id]) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">نام دسته‌بندی</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name', $category->name) }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> به‌روزرسانی دسته‌بندی</button>
        </form>
    </div>
</section>
@endsection
@extends('layouts.admin')

@section('title', 'افزودن دسته‌بندی جدید')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">افزودن دسته‌بندی جدید</h2>
        <form action="{{ route('admin.categories.store') }}" method="POST" class="space-y-6">
            @csrf
            <div class="form-group">
                <label for="name">نام دسته‌بندی</label>
                <input type="text" name="name" id="name" class="form-control" required value="{{ old('name') }}">
                @error('name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary w-full"><i class="fas fa-save"></i> ذخیره دسته‌بندی</button>
        </form>
    </div>
</section>
@endsection
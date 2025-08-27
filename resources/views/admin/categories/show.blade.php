@extends('layouts.admin')

@section('title', 'نمایش دسته‌بندی')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">جزئیات دسته‌بندی</h2>
        <div class="space-y-4">
            <div>
                <strong class="text-primary-color">نام دسته‌بندی:</strong> {{ $category->name }}
            </div>
            <div>
                <strong class="text-primary-color">تاریخ ایجاد:</strong> {{ $category->created_at->format('Y-m-d H:i:s') }}
            </div>
            <div>
                <strong class="text-primary-color">آخرین به‌روزرسانی:</strong> {{ $category->updated_at->format('Y-m-d H:i:s') }}
            </div>
        </div>
        <div class="mt-6 space-x-2">
            <a href="{{ route('admin.categories.index') }}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> بازگشت به لیست</a>
            <a href="{{ route('admin.categories.edit', ['category' => $category->id]) }}" class="btn btn-warning"><i class="fas fa-edit"></i> ویرایش</a>
        </div>
    </div>
</section>
@endsection
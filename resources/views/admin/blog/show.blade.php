@extends('layouts.admin')

@section('title', 'نمایش مقاله')

@section('content')
<section class="section">
    <div class="container mx-auto max-w-lg">
        <h2 class="section-title">جزئیات مقاله</h2>
        <div class="space-y-4">
            <div>
                <strong class="text-primary-color">عنوان:</strong> {{ $post->title }}
            </div>
            <div>
                <strong class="text-primary-color">آیکون:</strong> {{ $post->icon ?? 'بدون آیکون' }}
            </div>
            <div>
                <strong class="text-primary-color">تاریخ:</strong>
                @if ($post->date)
                    {{ \Carbon\Carbon::parse($post->date)->format('Y-m-d') }}
                @else
                    بدون تاریخ
                @endif
            </div>
            <div>
                <strong class="text-primary-color">خلاصه:</strong> {{ $post->excerpt ?? 'بدون خلاصه' }}
            </div>
            <div>
                <strong class="text-primary-color">محتوا:</strong> {{ $post->content ?? 'بدون محتوا' }}
            </div>
            <div>
                <strong class="text-primary-color">دسته‌بندی:</strong> {{ $post->category_name }}
            </div>
            <div>
                <strong class="text-primary-color">نویسنده:</strong> {{ $post->author ?? 'بدون نویسنده' }}
            </div>
        </div>
        <div class="mt-6 space-x-2">
            <a href="{{ route('admin.blog.index') }}" class="btn btn-primary"><i class="fas fa-arrow-right"></i> بازگشت به لیست</a>
            <a href="{{ route('admin.blog.edit', $post->id) }}" class="btn btn-warning"><i class="fas fa-edit"></i> ویرایش</a>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')

@section('title', 'مقالات')

@section('content')
<section class="blog py-12" id="blog">
    <div class="container mx-auto px-4">

        {{-- Section Header --}}
        <div class="section-header text-center mb-12">
            <h2 class="text-3xl font-bold text-primary-color mb-2">آخرین مقالات</h2>
            <p class="text-gray-600 text-lg">
                آخرین اخبار، آموزش‌ها و نکات تخصصی در زمینه برنامه‌نویسی و فناوری
            </p>
        </div>

        {{-- Blog Posts --}}
        @if($posts->count() === 1)
            {{-- نمایش ویژه برای تنها یک مقاله --}}
            @php $post = $posts->first(); @endphp
            <div class="max-w-5xl mx-auto bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row hover:shadow-2xl transition">

                {{-- تصویر مقاله --}}
                @if($post->image)
                    <div class="md:w-1/2">
                        <img src="{{ asset('storage/' . $post->image) }}" 
                             alt="{{ $post->title }}" 
                             class="w-full h-80 md:h-full object-cover">
                    </div>
                @endif

                {{-- متن مقاله --}}
                <div class="p-8 md:w-1/2 flex flex-col justify-between">
                    
                    {{-- دسته‌بندی + آیکون --}}
                    @if($post->category)
                        <div class="flex items-center mb-4 text-primary-color">
                            {{-- نمونه با Heroicons یا Lucide --}}
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21H5a2 2 0 01-2-2V7a2 2 0 012-2h5l2-2h7a2 2 0 012 2v12a2 2 0 01-2 2z" />
                            </svg>
                            <span class="font-medium">{{ $post->category->name }}</span>
                        </div>
                    @endif

                    {{-- عنوان --}}
                    <h3 class="text-2xl font-bold text-gray-800 mb-3">{{ $post->title }}</h3>

                    {{-- توضیحات کوتاه --}}
                    <p class="text-gray-600 leading-relaxed mb-6">
                        {{ Str::limit(strip_tags($post->excerpt ?? $post->content), 200) }}
                    </p>

                    {{-- دکمه ادامه مطلب --}}
                    <a href="{{ route('public.blog.show', $post->slug ?? $post->id) }}" 
                       class="inline-block px-5 py-3 rounded-lg font-medium text-white bg-primary-color hover:bg-primary-dark transition self-start">
                        ادامه مطلب →
                    </a>
                </div>
            </div>

        @elseif($posts->count() > 1)
            {{-- گرید چند مقاله --}}
            <div class="blog-grid grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @foreach($posts as $post)
                    @include('components.blog-card', ['post' => $post])
                @endforeach
            </div>
        @else
            {{-- بدون مقاله --}}
            <p class="text-center text-gray-500">هیچ مقاله‌ای موجود نیست.</p>
        @endif

        {{-- View All --}}
        @if($posts->count() > 0)
            <div class="text-center mt-12">
                <a href="{{ route('public.blog') }}" 
                   class="inline-block px-6 py-3 rounded-lg font-medium text-white bg-primary-color hover:bg-primary-dark transition">
                    مشاهده همه مقالات
                </a>
            </div>
        @endif

    </div>
</section>
@endsection

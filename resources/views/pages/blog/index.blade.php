@extends('layouts.app')
@section('title', 'مقالات')
@section('content')
<section class="blog" id="blog">
    <div class="blog-container">
        <div class="section-header scroll-reveal">
            <h2 class="section-title">آخرین مقالات</h2>
            <p class="section-subtitle">آخرین اخبار، آموزش‌ها و نکات تخصصی در زمینه برنامه‌نویسی و فناوری</p>
        </div>
        <div class="blog-grid">
            @foreach($posts as $post)
                @include('components.blog-card', ['post' => $post])
            @endforeach
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('public.blog') }}" class="btn btn-primary">مشاهده همه مقالات</a>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')
@section('title', $post->title)
@section('content')
<section class="blog">
    <div class="blog-container">
        <div class="blog-card">
            <div class="blog-image">
                <i class="{{ $post->icon }}"></i>
            </div>
            <div class="blog-content">
                <div class="blog-date">{{ $post->date }}</div>
                <h3 class="blog-title">{{ $post->title }}</h3>
                <p>{!! $post->content !!}</p>
                <a href="{{ route('public.blog') }}" class="read-more">بازگشت به مقالات</a>
            </div>
        </div>
    </div>
</section>
@endsection
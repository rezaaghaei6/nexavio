@props(['post'])
<div class="blog-card scroll-reveal">
    <div class="blog-image">
        <i class="{{ $post->icon }}"></i>
    </div>
    <div class="blog-content">
        <div class="blog-date">{{ $post->date }}</div>
        <h3 class="blog-title">{{ $post->title }}</h3>
        <p class="blog-excerpt">{{ $post->excerpt }}</p>
        <a href="{{ route('blog.show', $post) }}" class="read-more">
            ادامه مطلب
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
</div>
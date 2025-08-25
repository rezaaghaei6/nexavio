<div class="blog-card bg-white rounded-lg shadow-md p-6 hover:shadow-lg transition">
    <div class="blog-content">
        <div class="blog-date">{{ $post->created_at->format('Y-m-d') }}</div>
        <h3 class="blog-title">{{ $post->title }}</h3>
        <p class="blog-excerpt">{{ Str::limit($post->content, 100) }}</p>
        <a href="{{ route('public.blog.show', $post) }}" class="read-more">
            ادامه مطلب
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
</div>
@props(['portfolio'])
<div class="portfolio-card scroll-reveal">
    <div class="portfolio-image">
        <i class="{{ $portfolio->icon }}"></i>
    </div>
    <div class="portfolio-content">
        <h3 class="portfolio-title">{{ $portfolio->title }}</h3>
        <p class="portfolio-description">{{ $portfolio->description }}</p>
        <div class="portfolio-tags">
            @foreach($portfolio->tags as $tag)
                <span class="tag">{{ $tag }}</span>
            @endforeach
        </div>
    </div>
</div>
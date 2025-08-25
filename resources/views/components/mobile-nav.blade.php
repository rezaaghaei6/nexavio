<nav class="mobile-bottom-nav">
    <div class="mobile-nav-container">
        <a href="{{ route('public.home') }}" class="mobile-nav-item active" data-section="home">
            <i class="fas fa-home"></i>
            <span>خانه</span>
        </a>
        <a href="{{ route('public.services') }}" class="mobile-nav-item" data-section="services">
            <i class="fas fa-cogs"></i>
            <span>خدمات</span>
        </a>
        <a href="{{ route('public.portfolio') }}" class="mobile-nav-item" data-section="portfolio">
            <i class="fas fa-briefcase"></i>
            <span>نمونه کارها</span>
        </a>
        <a href="{{ route('public.blog') }}" class="mobile-nav-item" data-section="blog">
            <i class="fas fa-newspaper"></i>
            <span>مقالات</span>
        </a>
        <a href="{{ route('public.about') }}" class="mobile-nav-item">
            <i class="fas fa-info-circle"></i>
            <span>درباره ما</span>
        </a>
        <a href="{{ route('public.contact') }}" class="mobile-nav-item">
            <i class="fas fa-phone"></i>
            <span>تماس</span>
        </a>
    </div>
</nav>
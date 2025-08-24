@extends('layouts.app')
@section('title', 'صفحه اصلی')
@section('content')
<section class="hero" id="home">
    <div class="hero-container">
        <h1 class="fade-in-up">نکساویو، آینده نرم‌افزار</h1>
        <p class="fade-in-up">ما در نکساویو، متخصص توسعه نرم‌افزارهای وب‌محور، برنامه‌نویسی و هوش مصنوعی هستیم. با تمرکز بر فریم‌ورک Laravel، راه‌حل‌های قدرتمند و نوآورانه ارائه می‌دهیم.</p>
        <div class="cta-buttons fade-in-up">
            <a href="{{ route('contact') }}" class="btn btn-primary">
                <i class="fas fa-rocket"></i> شروع پروژه
            </a>
            <a href="{{ route('portfolio') }}" class="btn btn-secondary">
                <i class="fas fa-eye"></i> مشاهده نمونه کارها
            </a>
        </div>
    </div>
</section>

<section class="stats">
    <div class="stats-container">
        <div class="stats-grid">
            @foreach($stats as $stat)
                <div class="stat-item scroll-reveal">
                    <div class="stat-number">{{ $stat['number'] }}</div>
                    <div class="stat-label">{{ $stat['label'] }}</div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<section class="services" id="services">
    <div class="services-container">
        <div class="section-header scroll-reveal">
            <h2 class="section-title">خدمات ما</h2>
            <p class="section-subtitle">ما با استفاده از جدیدترین تکنولوژی‌ها، راه‌حل‌های نوآورانه و کارآمد برای کسب‌وکار شما ارائه می‌دهیم</p>
        </div>
        <div class="services-grid">
            @foreach($services as $service)
                @include('components.service-card', ['service' => $service])
            @endforeach
        </div>
    </div>
</section>

<section class="portfolio" id="portfolio">
    <div class="portfolio-container">
        <div class="section-header scroll-reveal">
            <h2 class="section-title">نمونه کارهای ما</h2>
            <p class="section-subtitle">مجموعه‌ای از پروژه‌های موفق که با کیفیت بالا و تکنولوژی‌های مدرن توسعه داده‌ایم</p>
        </div>
        <div class="portfolio-grid">
            @foreach($portfolios as $portfolio)
                @include('components.portfolio-card', ['portfolio' => $portfolio])
            @endforeach
        </div>
        <div style="text-align: center; margin-top: 40px;">
            <a href="{{ route('contact') }}" class="btn btn-primary">مشاهده همه نمونه کارها</a>
        </div>
    </div>
</section>

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
            <a href="{{ route('blog') }}" class="btn btn-primary">مشاهده همه مقالات</a>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')
@section('title', 'نمونه کارها')
@section('content')
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
            <a href="{{ route('public.contact') }}" class="btn btn-primary">مشاهده همه نمونه کارها</a>
        </div>
    </div>
</section>
@endsection
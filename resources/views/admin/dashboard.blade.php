@extends('layouts.admin')
@section('title', 'داشبورد ادمین')
@section('content')
<section class="section">
    <div class="container mx-auto">
        <h2 class="section-title">داشبورد ادمین</h2>
        <p class="section-subtitle">خلاصه‌ای از فعالیت‌های شما</p>
        <div class="dashboard-stats">
            <div class="stat-card">
                <h3>{{ $services_count }}</h3>
                <p>خدمات</p>
            </div>
            <div class="stat-card">
                <h3>{{ $portfolios_count }}</h3>
                <p>نمونه‌کارها</p>
            </div>
            <div class="stat-card">
                <h3>{{ $posts_count }}</h3>
                <p>مقالات</p>
            </div>
        </div>
    </div>
</section>
@endsection
@extends('layouts.app')
@section('title', 'خدمات')
@section('content')
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
@endsection
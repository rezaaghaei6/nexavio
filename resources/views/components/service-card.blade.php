@props(['service'])
<div class="service-card scroll-reveal">
    <div class="service-icon">
        <i class="{{ $service->icon }}"></i>
    </div>
    <h3 class="service-title">{{ $service->title }}</h3>
    <p class="service-description">{{ $service->description }}</p>
</div>
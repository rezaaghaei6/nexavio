@extends('layouts.admin')
@section('title', 'داشبورد')
@section('content')
<div class="stats">
    <div class="stats-container">
        <div class="stats-grid">
            <div class="stat-item">
                <div class="stat-number">{{ $services_count }}</div>
                <div class="stat-label">خدمات</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">{{ $portfolios_count }}</div>
                <div class="stat-label">نمونه‌کارها</div>
            </div>
            <div class="stat-item">
                <div class="stat-number">{{ $posts_count }}</div>
                <div class="stat-label">مقالات</div>
            </div>
        </div>
    </div>
</div>
@endsection
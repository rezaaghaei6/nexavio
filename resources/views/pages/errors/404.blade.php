@extends('layouts.app')
@section('title', 'صفحه پیدا نشد')
@section('content')
<section class="hero">
    <div class="hero-container">
        <h1 class="fade-in-up">404 - صفحه پیدا نشد</h1>
        <p class="fade-in-up">صفحه‌ای که به دنبال آن هستید وجود ندارد.</p>
        <a href="{{ route('public.home') }}" class="btn btn-primary">بازگشت به صفحه اصلی</a>
    </div>
</section>
@endsection
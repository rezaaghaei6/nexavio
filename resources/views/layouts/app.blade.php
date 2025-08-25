<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nexavio - @yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">Nexavio</div>
            @include('components.nav-menu')
            <div class="nav-controls">
                <button class="theme-toggle" id="themeToggle">
                    <i class="fas fa-moon"></i>
                </button>
            </div>
        </nav>
    </header>

    @include('components.mobile-nav')

    @yield('content')

    <footer class="footer">
        <div class="footer-container">
            <div class="footer-grid">
                <div class="footer-section">
                    <h3>نکساویو</h3>
                    <p>ما در نکساویو، متخصص توسعه نرم‌افزارهای وب‌محور، برنامه‌نویسی و هوش مصنوعی هستیم. هدف ما ارائه بهترین راه‌حل‌های تکنولوژیکی برای کسب‌وکارها است.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-telegram"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-linkedin"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>
                </div>
                <div class="footer-section">
                    <h3>خدمات</h3>
                    <ul>
                        <li><a href="{{ route('public.services') }}">توسعه وب اپلیکیشن</a></li>
                        <li><a href="{{ route('public.services') }}">هوش مصنوعی</a></li>
                        <li><a href="{{ route('public.services') }}">API Development</a></li>
                        <li><a href="{{ route('public.services') }}">سیستم‌های املاک</a></li>
                        <li><a href="{{ route('public.services') }}">مشاوره فنی</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>لینک‌های مفید</h3>
                    <ul>
                        <li><a href="{{ route('public.about') }}">درباره ما</a></li>
                        <li><a href="{{ route('public.portfolio') }}">نمونه کارها</a></li>
                        <li><a href="{{ route('public.blog') }}">مقالات</a></li>
                        <li><a href="{{ route('public.contact') }}">تماس با ما</a></li>
                        <li><a href="#">حریم خصوصی</a></li>
                    </ul>
                </div>
                <div class="footer-section">
                    <h3>اطلاعات تماس</h3>
                    <p><i class="fas fa-map-marker-alt"></i> باکو، آذربایجان</p>
                    <p><i class="fas fa-phone"></i> +994 XX XXX XX XX</p>
                    <p><i class="fas fa-envelope"></i> info@nexavio.com</p>
                    <p><i class="fas fa-clock"></i> شنبه تا پنج‌شنبه: 9:00 - 18:00</p>
                </div>
            </div>
            <div class="footer-bottom">
                <p>&copy; 1403 نکساویو. تمامی حقوق محفوظ است.</p>
            </div>
        </div>
    </footer>
</body>
</html>
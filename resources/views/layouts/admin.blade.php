<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>پنل ادمین - @yield('title')</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <header class="header">
        <nav class="nav-container">
            <div class="logo">Nexavio Admin</div>
            <ul class="nav-menu">
                <li><a href="{{ route('admin.dashboard') }}">داشبورد</a></li>
                <li><a href="{{ route('admin.services.index') }}">خدمات</a></li>
                <li><a href="{{ route('admin.portfolio.index') }}">نمونه‌کارها</a></li>
                <li><a href="{{ route('admin.blog.index') }}">مقالات</a></li>
                <li><a href="{{ route('logout') }}">خروج</a></li>
            </ul>
        </nav>
    </header>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
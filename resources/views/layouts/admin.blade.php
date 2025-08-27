<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'پنل ادمین - Nexavio')</title>
    @vite(['resources/css/admin.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <div class="admin-container">
        <aside class="admin-sidebar" id="sidebar">
            <div class="sidebar-header">
                <h3 class="text-lg font-semibold text-primary-color">پنل ادمین</h3>
            </div>
            <ul class="nav-menu">
                <li>
                    <a href="{{ route('admin.dashboard') }}" class="{{ Route::is('admin.dashboard') ? 'active' : '' }}">
                        <i class="fas fa-tachometer-alt"></i> داشبورد
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.services.index') }}" class="{{ Route::is('admin.services.*') ? 'active' : '' }}">
                        <i class="fas fa-cogs"></i> خدمات
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.portfolio.index') }}" class="{{ Route::is('admin.portfolio.*') ? 'active' : '' }}">
                        <i class="fas fa-briefcase"></i> نمونه‌کارها
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.blog.index') }}" class="{{ Route::is('admin.blog.*') ? 'active' : '' }}">
                        <i class="fas fa-newspaper"></i> مقالات
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.categories.index') }}" class="{{ Route::is('admin.categories.*') ? 'active' : '' }}">
                        <i class="fas fa-folder"></i> دسته‌بندی‌ها
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.users.index') }}" class="{{ Route::is('admin.users.*') ? 'active' : '' }}">
                        <i class="fas fa-users"></i> کاربران ادمین
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.team-members.index') }}" class="{{ Route::is('admin.team-members.*') ? 'active' : '' }}">
                        <i class="fas fa-user-friends"></i> اعضای تیم
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.logs.index') }}" class="{{ Route::is('admin.logs.*') ? 'active' : '' }}">
                        <i class="fas fa-file-alt"></i> لاگ‌ها
                    </a>
                </li>
                <li>
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="nav-link"><i class="fas fa-sign-out-alt"></i> خروج</button>
                    </form>
                </li>
            </ul>
        </aside>

        <button class="sidebar-toggle" id="sidebar-toggle">
            <i class="fas fa-bars"></i>
        </button>

        <main class="admin-content" id="admin-content">
            @yield('content')
        </main>
    </div>

    <script>
        // Toggle sidebar
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebar = document.getElementById('sidebar');
        const content = document.getElementById('admin-content');

        sidebarToggle.addEventListener('click', () => {
            sidebar.classList.toggle('collapsed');
            content.classList.toggle('expanded');
            sidebarToggle.classList.toggle('collapsed');
        });
    </script>
</body>
</html>

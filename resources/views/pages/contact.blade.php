@extends('layouts.app')

@section('title', 'تماس با ما')

@section('content')
<!-- Page Header -->
<section class="page-header flex flex-col items-center justify-center text-center py-32 bg-gray-50 dark:bg-gray-800 transition-colors duration-300">
    <h1 class="text-5xl font-extrabold mb-4 text-gray-900 dark:text-white">تماس با ما</h1>
    <p class="text-lg text-gray-600 dark:text-gray-300 max-w-2xl">ما آماده پاسخگویی به سوالات و درخواست‌های شما هستیم. با ما در تماس باشید تا پروژه شما را شروع کنیم.</p>
</section>

<!-- Contact Content -->
<section class="contact-content flex flex-col items-center justify-center py-24 bg-white dark:bg-gray-900 transition-colors duration-300">
    <div class="contact-container max-w-3xl w-full px-6">
        <div class="contact-info flex flex-col items-center text-center space-y-8 bg-gray-50 dark:bg-gray-800 p-12 rounded-xl border border-gray-200 dark:border-gray-700 shadow-lg transition-all">
            <p class="text-gray-600 dark:text-gray-300 text-lg">ما در نکساویو، متخصص توسعه نرم‌افزارهای وب‌محور، برنامه‌نویسی و هوش مصنوعی هستیم. هدف ما ارائه بهترین راه‌حل‌های تکنولوژیکی برای کسب‌وکارها است.</p>
            
            <div class="contact-methods flex flex-col gap-6 w-full">
                <div class="contact-method flex flex-col items-center">
                    <i class="fas fa-map-marker-alt text-3xl text-primary-600 mb-2"></i>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">آدرس</h3>
                    <p class="text-gray-600 dark:text-gray-300">ایران</p>
                </div>

                <div class="contact-method flex flex-col items-center">
                    <i class="fas fa-phone text-3xl text-primary-600 mb-2"></i>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">تلفن</h3>
                    <div class="flex flex-col space-y-1">
                        <p class="text-gray-600 dark:text-gray-300">09383734295</p>
                        <p class="text-gray-600 dark:text-gray-300">09101740239</p>
                    </div>
                </div>

                <div class="contact-method flex flex-col items-center">
                    <i class="fas fa-envelope text-3xl text-primary-600 mb-2"></i>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">ایمیل</h3>
                    <p class="text-gray-600 dark:text-gray-300">nexaviogroup@gmail.com</p>
                </div>

                <div class="contact-method flex flex-col items-center">
                    <i class="fas fa-clock text-3xl text-primary-600 mb-2"></i>
                    <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-1">ساعات کاری</h3>
                    <p class="text-gray-600 dark:text-gray-300">شنبه تا پنج‌شنبه: 9:00 - 18:00</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- JS Section -->
@push('scripts')
<script>
    // Scroll reveal
    const observerOptions = { threshold: 0.1, rootMargin: '0px 0px -50px 0px' };
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => { if (entry.isIntersecting) entry.target.classList.add('revealed'); });
    }, observerOptions);
    document.querySelectorAll('.scroll-reveal').forEach(el => observer.observe(el));

    // Theme toggle
    const themeToggle = document.getElementById('themeToggle');
    const body = document.body;
    const currentTheme = localStorage.getItem('theme') || 'dark';
    if (currentTheme === 'light') { body.setAttribute('data-theme','light'); themeToggle.innerHTML = '<i class="fas fa-sun"></i>'; }
    else { themeToggle.innerHTML = '<i class="fas fa-moon"></i>'; }

    themeToggle.addEventListener('click', () => {
        if (body.getAttribute('data-theme') === 'light') {
            body.removeAttribute('data-theme'); themeToggle.innerHTML = '<i class="fas fa-moon"></i>'; localStorage.setItem('theme','dark');
        } else {
            body.setAttribute('data-theme','light'); themeToggle.innerHTML = '<i class="fas fa-sun"></i>'; localStorage.setItem('theme','light');
        }
    });
</script>
@endpush
@endsection

@extends('layouts.app')

@section('meta')
    <meta name="description" content="درباره نکساویو، شرکتی پیشرو در توسعه نرم‌افزار و هوش مصنوعی">
    <meta name="keywords" content="نکساویو, نرم‌افزار, هوش مصنوعی, لاراول">
@endsection

@section('title', 'درباره ما')

@section('content')
<!-- Page Header -->
<section class="page-header py-16 bg-gray-100 dark:bg-gray-900 transition-colors duration-300">
    <div class="page-header-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mb-4 animate-fade-in-up">درباره نکساویو</h1>
        <p class="text-lg md:text-xl text-gray-600 dark:text-gray-300 max-w-2xl mx-auto animate-fade-in-up-delay">داستان ما، ماموریت ما و تیمی که آینده فناوری را می‌سازد</p>
    </div>
</section>

<!-- About Content -->
<section class="about-content py-16">
    <div class="about-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="about-grid grid grid-cols-1 md:grid-cols-2 gap-10 lg:gap-16 items-center">
            <div class="about-text order-2 md:order-1">
                <h2 class="text-3xl font-bold text-primary-600 mb-6 animate-fade-in-up">کیستیم؟</h2>
                <p class="text-gray-700 dark:text-gray-300 mb-5 leading-relaxed animate-fade-in-up-delay">
                    نکساویو یک شرکت پیشرو در توسعه نرم‌افزار است که از سال ۱۴۰۰ با هدف ارائه راه‌حل‌های نوآورانه تکنولوژیکی تأسیس شد. ما در زمینه توسعه اپلیکیشن‌های وب‌محور، برنامه‌نویسی سفارشی و پیاده‌سازی سیستم‌های هوش مصنوعی تخصص داریم.
                </p>
                <p class="text-gray-700 dark:text-gray-300 mb-5 leading-relaxed animate-fade-in-up-delay">
                    با تکیه بر فریم‌ورک Laravel و بهره‌گیری از جدیدترین فناوری‌ها، به کسب‌وکارها کمک می‌کنیم تا در دنیای دیجیتال بدرخشند. تیم ما از متخصصان با تجربه و متعهد تشکیل شده که با شور و خلاقیت، بهترین راه‌حل‌ها را ارائه می‌دهند.
                </p>
                <p class="text-gray-700 dark:text-gray-300 leading-relaxed animate-fade-in-up-delay">
                    در حال حاضر، ما در حال توسعه یک اپلیکیشن API-محور برای شرکت Hominex در حوزه املاک و تبلیغات هستیم که نمونه‌ای از تعهد ما به کیفیت و نوآوری است.
                </p>
            </div>
            <div class="about-image order-1 md:order-2 flex justify-center">
                <img src="{{ asset('images/about-us.jpg') }}" alt="درباره نکساویو" class="w-full max-w-md h-auto rounded-xl shadow-lg object-cover transition-transform hover:scale-105 duration-300" loading="lazy">
            </div>
        </div>
    </div>
</section>

<!-- Vision & Mission -->
<section class="vision-mission py-16 bg-white dark:bg-gray-800 transition-colors duration-300">
    <div class="vm-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="vm-grid grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="vm-card bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center animate-fade-in-up">
                <div class="vm-icon text-4xl text-primary-600 mb-4">
                    <i class="fas fa-eye"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-3">چشم‌انداز ما</h3>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    تبدیل شدن به رهبر منطقه‌ای در توسعه نرم‌افزارهای وب و هوش مصنوعی با ارائه راه‌حل‌هایی که آینده کسب‌وکارها را بازتعریف می‌کند.
                </p>
            </div>
            <div class="vm-card bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center animate-fade-in-up-delay">
                <div class="vm-icon text-4xl text-primary-600 mb-4">
                    <i class="fas fa-bullseye"></i>
                </div>
                <h3 class="text-2xl font-semibold text-gray-900 dark:text-white mb-3">ماموریت ما</h3>
                <p class="text-gray-600 dark:text-gray-300 leading-relaxed">
                    ارائه راه‌حل‌های نرم‌افزاری نوآورانه، مقیاس‌پذیر و با کیفیت بالا که نیازهای واقعی مشتریان را برآورده کرده و به موفقیت پایدار آنها کمک کند.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Values Section -->
<section class="values py-16">
    <div class="values-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-header text-center mb-10 scroll-reveal">
            <h2 class="section-title text-3xl font-bold text-primary-600 mb-3">ارزش‌های ما</h2>
            <p class="section-subtitle text-gray-600 dark:text-gray-300 max-w-xl mx-auto">اصولی که در تمامی پروژه‌ها و تعاملات ما راهنما هستند</p>
        </div>
        <div class="values-grid grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="value-card bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center scroll-reveal">
                <div class="value-icon text-4xl text-primary-600 mb-4"><i class="fas fa-star"></i></div>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">کیفیت</h4>
                <p class="text-gray-600 dark:text-gray-300">تعهد به ارائه محصولات و خدماتی با بالاترین استانداردهای ممکن</p>
            </div>
            <div class="value-card bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center scroll-reveal">
                <div class="value-icon text-4xl text-primary-600 mb-4"><i class="fas fa-lightbulb"></i></div>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">نوآوری</h4>
                <p class="text-gray-600 dark:text-gray-300">پیشگام بودن در استفاده از فناوری‌های نوظهور</p>
            </div>
            <div class="value-card bg-gray-50 dark:bg-gray-700 p-6 rounded-xl shadow-md hover:shadow-lg transition-shadow duration-300 text-center scroll-reveal">
                <div class="value-icon text-4xl text-primary-600 mb-4"><i class="fas fa-users"></i></div>
                <h4 class="text-xl font-semibold text-gray-900 dark:text-white mb-2">همکاری</h4>
                <p class="text-gray-600 dark:text-gray-300">کار تیمی و تعامل نزدیک با مشتریان</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section class="team py-20 bg-gray-50 dark:bg-gray-900 transition-colors duration-300" id="team">
    <div class="team-container max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="section-header text-center mb-12 scroll-reveal">
            <h2 class="section-title text-4xl font-extrabold text-primary-600">تیم ما</h2>
            <p class="section-subtitle text-gray-600 dark:text-gray-300 mt-3 text-lg max-w-2xl mx-auto">
                تیمی از افراد بااستعداد و خلاق که با اشتیاق به ساخت آینده فناوری مشغول هستند
            </p>
        </div>
        @if($teamMembers->isNotEmpty())
            <div class="team-grid grid gap-8 justify-items-center" style="@if($teamMembers->count() === 1) grid-template-columns: minmax(280px, 1fr); align-items: center; justify-content: center; @else grid-template-columns: repeat(auto-fit, minmax(280px, 1fr)); @endif">
                @foreach ($teamMembers->where('is_active', true) as $member)
                    <div class="team-card bg-white dark:bg-gray-800 rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden scroll-reveal">
                        <!-- Team Avatar Frame -->
                        <div class="team-avatar-frame flex justify-center p-4">
                            <div class="team-avatar-border w-36 h-36 rounded-full bg-white shadow-md flex items-center justify-center">
                                @if($member->image_url)
                                    <img src="{{ asset($member->image_url) }}" alt="{{ $member->name }}" class="w-24 h-24 object-cover rounded-full border-2 border-white">
                                @else
                                    <i class="fas fa-user text-4rem text-gray-400"></i>
                                @endif
                            </div>
                        </div>
                        <!-- Info -->
                        <div class="team-info p-6 text-center">
                            <h3 class="team-name text-1.3rem font-semibold text-gray-900 dark:text-white mb-2">{{ $member->name }}</h3>
                            <p class="team-position text-primary-color font-medium mb-3">{{ $member->position }}</p>
                            <p class="team-bio text-gray-600 dark:text-gray-300 text-sm mb-4 line-clamp-3">{{ $member->bio ?? 'متخصص با تجربه در حوزه فناوری' }}</p>
                            <div class="team-social flex justify-center gap-3">
                                @foreach (['linkedin' => 'fa-brands fa-linkedin', 'github' => 'fa-brands fa-github', 'telegram' => 'fa-brands fa-telegram', 'instagram' => 'fa-brands fa-instagram'] as $social => $icon)
                                    @if($member->$social)
                                        <a href="{{ $member->$social }}" target="_blank" class="text-gray-600 dark:text-gray-300 hover:text-primary-color transition-colors duration-300">
                                            <i class="{{ $icon }} text-xl"></i>
                                        </a>
                                    @endif
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div style="text-align: center; margin-top: 40px;">
                <a href="#team" class="btn btn-primary">مشاهده همه اعضای تیم</a>
            </div>
        @else
            <p class="text-gray-600 dark:text-gray-300 text-center">در حال حاضر هیچ عضوی در تیم وجود ندارد.</p>
        @endif
    </div>
</section>
@endsection

<?php

namespace Database\Seeders;

use App\Models\Service;
use App\Models\Portfolio;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
            $this->call(AdminUserSeeder::class);

        // Services
        Service::create([
            'title' => 'توسعه وب اپلیکیشن',
            'icon' => 'fas fa-globe',
            'description' => 'طراحی و توسعه اپلیکیشن‌های وب مدرن و ریسپانسیو با استفاده از فریم‌ورک Laravel و تکنولوژی‌های روز دنیا',
        ]);
        Service::create([
            'title' => 'هوش مصنوعی',
            'icon' => 'fas fa-robot',
            'description' => 'پیاده‌سازی راه‌حل‌های هوش مصنوعی شامل یادگیری ماشین، پردازش زبان طبیعی و سیستم‌های هوشمند',
        ]);
        Service::create([
            'title' => 'API Development',
            'icon' => 'fas fa-mobile-alt',
            'description' => 'طراحی و توسعه API های قدرتمند، امن و مقیاس‌پذیر برای اتصال انواع پلتفرم‌ها و سرویس‌ها',
        ]);
        Service::create([
            'title' => 'سیستم‌های املاک',
            'icon' => 'fas fa-building',
            'description' => 'توسعه سیستم‌های جامع مدیریت املاک و تبلیغات برای شرکت Hominex با قابلیت‌های پیشرفته',
        ]);
        Service::create([
            'title' => 'مشاوره فنی',
            'icon' => 'fas fa-cogs',
            'description' => 'ارائه مشاوره تخصصی در زمینه معماری نرم‌افزار، انتخاب تکنولوژی مناسب و بهینه‌سازی سیستم‌ها',
        ]);
        Service::create([
            'title' => 'امنیت و پشتیبانی',
            'icon' => 'fas fa-shield-alt',
            'description' => 'پیاده‌سازی بهترین روش‌های امنیتی، نگهداری و پشتیبانی مستمر از سیستم‌های توسعه یافته',
        ]);

        // Portfolios
        Portfolio::create([
            'title' => 'سیستم مدیریت املاک Hominex',
            'icon' => 'fas fa-home',
            'description' => 'پلتفرم جامع مدیریت املاک و تبلیغات با قابلیت‌های پیشرفته جستجو، مدیریت کاربران و گزارش‌گیری',
            'tags' => ['Laravel', 'Vue.js', 'MySQL'],
        ]);
        Portfolio::create([
            'title' => 'فروشگاه آنلاین',
            'icon' => 'fas fa-shopping-cart',
            'description' => 'سیستم کامل فروشگاه اینترنتی با پنل مدیریت، درگاه پرداخت و سیستم مدیریت موجودی',
            'tags' => ['Laravel', 'React', 'Redis'],
        ]);
        Portfolio::create([
            'title' => 'سیستم تشخیص هوشمند',
            'icon' => 'fas fa-brain',
            'description' => 'پلتفرم هوش مصنوعی برای تشخیص و طبقه‌بندی تصاویر با استفاده از یادگیری عمیق',
            'tags' => ['Python', 'TensorFlow', 'API'],
        ]);

        // Posts
        Post::create([
            'title' => 'بهترین روش‌های توسعه API با Laravel',
            'icon' => 'fas fa-code',
            'date' => '2024-12-15',
            'excerpt' => 'در این مقاله با اصول طراحی API های قدرتمند و امن با Laravel آشنا شوید و یاد بگیرید چگونه API هایی بسازید که...',
            'content' => '<p>محتوای کامل مقاله درباره توسعه API با Laravel...</p>',
        ]);
        Post::create([
            'title' => 'مقدمه‌ای بر یادگیری ماشین در وب',
            'icon' => 'fas fa-robot',
            'date' => '2024-12-10',
            'excerpt' => 'کاربرد هوش مصنوعی در توسعه وب و نحوه پیاده‌سازی الگوریتم‌های یادگیری ماشین در پروژه‌های Laravel...',
            'content' => '<p>محتوای کامل مقاله درباره یادگیری ماشین...</p>',
        ]);
        Post::create([
            'title' => 'امنیت در اپلیکیشن‌های وب مدرن',
            'icon' => 'fas fa-shield-alt',
            'date' => '2024-12-05',
            'excerpt' => 'راهکارها و بهترین روش‌های امنیتی برای محافظت از اپلیکیشن‌های وب در برابر تهدیدات سایبری مدرن...',
            'content' => '<p>محتوای کامل مقاله درباره امنیت وب...</p>',
        ]);
    }
}
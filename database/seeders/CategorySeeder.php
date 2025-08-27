<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run()
    {
        // ایجاد دسته‌بندی‌ها
        $category1 = Category::create(['name' => 'فناوری']);
        $category2 = Category::create(['name' => 'آموزش']);

        // ایجاد مقالات با دسته‌بندی
        Post::create([
            'title' => 'مقاله فناوری ۱',
            'content' => 'محتوای مقاله فناوری ۱',
            'category_id' => $category1->id,
        ]);
        Post::create([
            'title' => 'مقاله آموزشی ۱',
            'content' => 'محتوای مقاله آموزشی ۱',
            'category_id' => $category2->id,
        ]);
        // مقاله بدون دسته‌بندی
        Post::create([
            'title' => 'مقاله بدون دسته‌بندی',
            'content' => 'محتوای مقاله بدون دسته‌بندی',
            'category_id' => null,
        ]);
    }
}
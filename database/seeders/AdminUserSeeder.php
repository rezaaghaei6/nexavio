<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::updateOrCreate(
            ['email' => 'admin@nexavio.com'], // اگر قبلاً وجود داشته باشه آپدیت میشه
            [
                'name' => 'Admin-nexavio',
                'password' => Hash::make('amir-reza-2025'), // پسورد رو اینجا تغییر بدید
                'is_admin' => true,
            ]
        );
    }
}

<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@transsense.com'],
            [
                'name' => 'Адміністратор',
                'email' => 'admin@transsense.com',
                'password' => Hash::make('admin123'),
                'email_verified_at' => now(),
            ]
        );

        $this->command->info('Адміністратори створені успішно!');
        $this->command->info('Логін: admin@transsense.com | Пароль: admin123');
        $this->command->info('Логін: admin@admin.com | Пароль: password');
    }
} 
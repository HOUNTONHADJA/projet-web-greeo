<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::create([
            'name' => 'Hospice ',
            'email' => 'hospice@gmail.com',
            'password' => bcrypt('12345678'),
            'role' => 'admin',
            'lastname' => 'DEDA',
            'email_verified_at' => now(),
        ]);
    }
}

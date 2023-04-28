<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "first_name" => "Super",
            "last_name" => "Admin",
            "email" => "admin@gmail.com",
            "password" => bcrypt(123456),
            "is_admin" => 1,
        ]);
    }
}

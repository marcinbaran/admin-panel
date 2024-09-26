<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'email' => 'admin@admin.admin',
            'password' => Hash::make('admin123'),
        ]);

        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            User::create([
                'first_name' => $faker->name,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make(time()),
            ]);
        }
    }
}

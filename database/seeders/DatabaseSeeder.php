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
        // User::factory(10)->create();

        User::create([
            'nama' => 'Administrator',
            'email' => 'Admin@gmail.com',
            'role' => '1',
            'status' => '1',
            'hp' => '0812345667',
            'password' => bcrypt('p@55word'),
        ]);
        User::create([
            'nama' => 'Eka Setiawan',
            'email' => 'ekasetiawan0301@gmail.com',
            'role' => '0',
            'status' => 1,
            'hp' => '085890044445',
            'password' => bcrypt('p@55word'),
        ]);
    }
}

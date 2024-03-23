<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         User::factory(100)->create();

//         \App\Models\User::factory()->create([
//             'name' => 'Test User',
//             'email' => '_test.blade.php@example.com',
//         ]);
//        \App\Models\Category\Category::factory(20)->create();
    }
}

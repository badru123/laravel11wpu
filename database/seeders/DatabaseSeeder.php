<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Post;
use App\Models\Category;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

    //    User::factory()->create([
    //        'name' => 'Test User',
    //        'email' => 'test@example.com',
    //      ]);
    $me = User::create([
        'name' => 'w24xcz',
        'username' => 'w24xcz',
        'email' => 'w24_xcz@edupb4k.com',
        'email_verified_at' => now(),
        'password' => Hash::make('password'),
        'remember_token' => Str::random(10)
        ]);
    Post::factory(100)->recycle([
        Category::factory(3)->create(),
        $me,
        User::factory(5)->create()
    ])->create();
    }
}

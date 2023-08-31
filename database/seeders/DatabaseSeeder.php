<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        User::factory(5)->create(); // Create 5 fake users
        Post::factory(20)->create(); // Create 20 fake posts
    }
}
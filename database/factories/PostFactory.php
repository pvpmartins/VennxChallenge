<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User; 
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        // Get an array of user IDs
        $userIds = User::pluck('id')->toArray();

        return [
            'title' => $this->faker->sentence,
            'description' => $this->faker->paragraph,
            'img_url' => $this->faker->imageUrl,
            'user_id' => $this->faker->randomElement($userIds), // Select a random user ID
        ];
    }
}

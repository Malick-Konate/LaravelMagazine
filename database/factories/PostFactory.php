<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    protected $model = Post::class;

    public function definition()
    {
        return [
            'author_id' => Author::factory(), // Automatically create an author
            'title' => $this->faker->sentence(),
            'content' => $this->faker->paragraph(5),
        ];
    }
}

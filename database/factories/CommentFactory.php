<?php

namespace Database\Factories;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    protected $model = Comment::class;

    public function definition()
    {
        return [
            'post_id' => Post::factory(), // Automatically create a post
            'commenter_name' => $this->faker->name(),
            'comment' => $this->faker->text(200),
        ];
    }
}

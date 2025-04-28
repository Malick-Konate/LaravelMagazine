<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Author;
use App\Models\Post;
use App\Models\Comment;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        Author::factory(10)->create()->each(function ($author) {
            $posts = Post::factory(rand(2,5))->create([
                'author_id' => $author->id,
            ]);

            foreach ($posts as $post) {
                Comment::factory(rand(1,3))->create([
                    'post_id' => $post->id,
                ]);
            }
        });
    }
}

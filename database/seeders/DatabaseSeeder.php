<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Tag::factory(10)->create();

        Post::factory(10)->create()->each(function ($post) {
            $post->tags()->attach([rand(1, 10), rand(1, 10)]);
        });

        Video::factory(10)->create()->each(function ($video) {
            $video->tags()->attach([rand(1, 10), rand(1, 10)]);
        });
    }
}

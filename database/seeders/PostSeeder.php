<?php

namespace Database\Seeders;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::create([
            'user_id' => 1,
            'title' => 'First Post',
            'short_content' => 'This is the body of the first post.',
            'content' => 'contents',
            'photo' => null
        ]);
        Post::create([
            'user_id' => 1,
            'title' => 'First Post',
            'short_content' => 'This is the body of the first post.',
            'content' => 'contents',
            'photo' => null
        ]);
    }
}

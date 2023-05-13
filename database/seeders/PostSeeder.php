<?php

namespace Database\Seeders;

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
            'title' => 'First Post',
            'short_content' => 'This is the body of the first post.',
            'content' => 'contents',
            'photo' => 'files/avatar.jpg'
        ]);
        Post::create([
            'title' => 'secont Post',
            'short_content' => 'This is the body of the first post.',
            'content' => 'contents',
            'photo' => 'files/avatar.jpg'
        ]);
        Post::create([
            'title' => 'third Post',
            'short_content' => 'This is the body of the first post.',
            'content' => 'contents',
            'photo' => 'files/avatar.jpg'
        ]);
        Post::create([
            'title' => 'Fourth Post',
            'short_content' => 'This is the body of the first post.',
            'content' => 'contents',
            'photo' => 'files/avatar.jpg'
        ]);
    }
}

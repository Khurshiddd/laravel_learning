<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['name' => 'Web design']);
        Category::create(['name' => 'Web dewelopment']);
        Category::create(['name' => 'Online Marketing']);
        Category::create(['name' => 'Keyword research']);
        Category::create(['name' => 'Email marketing']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Post::factory(10)->recycle( [
            Category::create([
                'name' => 'Web Design',
                'slug' => 'web-design',
                'color' => 'red'
            ]),
            Category::create([
                'name' => 'Data Structure',
                'slug' => 'Data-Structure',
                'color' => 'green'
            ]),
            Category::create([
                'name' => 'Machine Learning',
                'slug' => 'Machine-Learning',
                'color' => 'yellow'
            ]),
            Category::create([
                'name' => 'Project Management',
                'slug' => 'Project-Management',
                'color' => 'blue'
            ]),
            User::factory(5)->create()
        ])->create();

    }
}

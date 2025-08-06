<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'title' => 'cat 1',
            ],
            [
                'title' => 'cat 2',
            ],
            [
                'title' => 'cat 3',
            ],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        Category::factory()->count(10)->create();
    }
}

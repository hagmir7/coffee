<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(["name" => "Coffee drinks", "image" => "/fake/category/coffee.png" ]);
        Category::create(["name" => "Tea", "image" => "/fake/category/tea.png" ]);
        Category::create(["name" => "Bakery items", "image" => "/fake/category/bakery.png" ]);
        Category::create(["name" => "Sandwiches and Wraps", "image" => "/fake/category/sandwiches.png" ]);
        Category::create(["name" => "Smoothies and Juices", "image" => "/fake/category/smoothies.png" ]);
        Category::create(["name" => "Cold Beverages", "image" => "/fake/category/cold.png" ]);
        Category::create(["name" => "Snacks and Sweets", "image" => "/fake/category/snacks.png" ]);
    }
}

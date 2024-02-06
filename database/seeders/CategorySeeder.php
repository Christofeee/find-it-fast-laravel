<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Seed categories
        $categories = [
            ['name' => 'Smart Phones'],
            ['name' => 'Desktops'],
            ['name' => 'Laptops'],
        ];

        Category::insert($categories);
    }
}

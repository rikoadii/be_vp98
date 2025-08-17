<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name_category' => 'Company'],
            ['name_category' => 'Corporate'],
            ['name_category' => 'Entertainment'],
            ['name_category' => 'Community']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $descriptions = [
            'EVENT KONSEP',
            'EVENT PRODUCTION',
            '3D EVENT',
            'SHOW MANAGEMENT',
            'PRE EVENT MANAGEMENT PARTNER',
            'VIP & TALENT MANAGEMENT'
        ];

        return [
            'name_projects' => $this->faker->sentence(rand(4, 9), false),
            'location_projects' => $this->faker->address(),
            'description_projects' => $this->faker->randomElement($descriptions),
            'category_projects' => Category::factory(),
            'image' => 'project' . rand(1, 10) . '.png',
            'isMain' => $this->faker->boolean(20), // 20% chance of being true
        ];
    }
}

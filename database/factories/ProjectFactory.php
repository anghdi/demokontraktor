<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Project>
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
        return [
            'title' => fake()->unique()->words(3, true),
            'slug' => fn (array $attributes): string => Str::slug($attributes['title']),
            'location' => fake()->city(),
            'project_type' => fake()->randomElement(['Hunian', 'Renovasi', 'Komersial']),
            'description' => fake()->sentence(),
            'year' => fake()->year(),
            'cover_image' => 'https://images.unsplash.com/photo-1600566753190-17f0baa2a6c3',
            'is_featured' => false,
        ];
    }
}

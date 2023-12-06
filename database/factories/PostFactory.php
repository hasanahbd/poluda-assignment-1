<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title=$this->faker->sentence;
        $slug=Str::slug($title);
        return [
            'title' => $title,
            'slug' => $slug,
            'content' => $this->faker->paragraph(10),
            'image' => 'https://picsum.photos/900/400',
        ];
    }
}

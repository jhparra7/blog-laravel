<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this ->faker->sentence(),
            'slug' => $this ->faker->slug(),
            'description' => $this ->faker->paragraph(),
            'categoria' => $this ->faker->randomElement(['Desarrollo Web','Soport TI','Data Science'])
        ];
    }
}

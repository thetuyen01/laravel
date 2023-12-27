<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NhomLinhVuc>
 */
class NhomLinhVucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ten_nhom'=>$this->faker->text(),
            'created_at'=> now(),
            'updated_at'=> now()
        ];
    }
}
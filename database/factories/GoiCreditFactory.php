<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GoiCredit>
 */
class GoiCreditFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ten_goi'=>$this->faker->text(),
            'credit'=>$this->faker->numberBetween($min=10, $max=100),
            'so_tien'=>$this->faker->numberBetween($min=1000, $max =10000),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
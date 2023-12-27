<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\NguoiChoi>
 */
class NguoiChoiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->text(),
            'diem_cao_nhat'=>$this->faker->numberBetween($min = 0, $max = 10),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
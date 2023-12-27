<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CauHoiLuotChoi>
 */
class CauHoiLuotChoiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'luot_choi_id'=>\App\Models\LuotChoi::factory(),
            'cau_hoi_id'=>\App\Models\CauHoi::factory(),
            'phuong_an'=>$this->faker->text(),
            'diem'=>$this->faker->numberBetween($min=0, $max=10),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LuotChoi>
 */
class LuotChoiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nguoi_choi_id'=>\App\Models\NguoiChoi::factory(),
            'so_cau'=>$this->faker->numberBetween($min=50, $max =100),
            'diem'=>$this->faker->numberBetween($min=0, $max=10),
            'ngay_gio' => $this->faker->dateTime(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
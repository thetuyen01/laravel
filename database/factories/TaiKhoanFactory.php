<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TaiKhoan>
 */
class TaiKhoanFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'email'=>$this->faker->text(),
            'is_admin'=>$this->faker->numberBetween($min=0,$max=2),
            'password'=>$this->faker->text(),
            'nguoi_choi_id'=> \App\Models\NguoiChoi::factory(),
            'created_at'=> now(),
            'updated_at'=> now()
        ];
    }
}
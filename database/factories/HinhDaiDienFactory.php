<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\HinhDaiDien>
 */
class HinhDaiDienFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'tai_khoan_id'=>\App\Models\TaiKhoan::factory(),
            'image'=>$this->faker->text(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
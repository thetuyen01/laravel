<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LinhVuc>
 */
class LinhVucFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'ten_linh_vuc' => $this->faker->text(),
            'nhom_linh_vuc_id'=> \App\Models\NhomLinhVuc::factory(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\App;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CauHoi>
 */
class CauHoiFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'noi_dung'=>$this->faker->text(),
            'linh_vuc_id'=> \App\Models\LinhVuc::factory(),
            'phuong_an_a'=>$this->faker->text(),
            'phuong_an_b'=>$this->faker->text(),
            'phuong_an_c'=>$this->faker->text(),
            'phuong_an_d'=>$this->faker->text(),
            'dap_an'=>$this->faker->text(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
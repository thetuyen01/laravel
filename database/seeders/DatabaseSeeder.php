<?php

namespace Database\Seeders;

use App\Models\NguoiChoiGoiCredit;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            NhomLinhVucSeeder::class,
            LinhVucSeeder::class,
            CauHoiSeeder::class,
            NguoiChoiSeeder::class,
            LuotChoiSeeder::class,
            CauHoiLuotChoiSeeder::class,
            GoiCreditSeeder::class,
            NguoiChoiGoiCreditSeeder::class,
            TaiKhoanSeeder::class,
            HinhDaiDienSeeder::class
        ]);
    }
}
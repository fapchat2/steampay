<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 9; $i++) {
            DB::table('main')->insert([
                'game_name' => Str::random(20),
                'price' => rand(4, 20),
                'old_price' => rand(15, 50),
                'discount' => rand(15, 68),
            ]);
        }
    }
}            


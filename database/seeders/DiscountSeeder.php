<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
                for ($i = 0; $i < 10; $i++) {
                    DB::table('discounts')->insert([
                        'name' => Str::random(20),
                        'cost' => rand(1, 10),
                        'discount' => rand(15, 68),
                        'image_address' => "https://logowik.com/content/uploads/images/grand-theft-auto-v8194.jpg",
                    ]);
                }
    }
}

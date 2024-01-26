<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('Products')->insert([
            [
                'product_name' => 'iphone 15',
                'product_type' => 1,
                'price' => 59000,
                'created_at' => Carbon::now(),
            ],

            [
                'product_name' => 'sumsung s30',
                'product_type' => 2,
                'price' => 49000,
                'created_at' => Carbon::now(),
            ],

            [
                'product_name' => 'LG Smart TV',
                'product_type' => 3,
                'price' => 50900,
                'created_at' => Carbon::now(),
            ],

            [
                'product_name' => 'Apple TV',
                'product_type' => 4,
                'price' => 890000,
                'created_at' => Carbon::now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('users') ->insert([
            [
                "name" => "mawang",
                "password" => md5("123456"),
                "email" => "mawang@gmail.com",
                "addrees" => "tsu",
                "telephone" => "0987654321",

            ],
            [
                "name" => "punpun",
                "password" => md5("123456"),
                "email" => "punpun@gmail.com",
                "addrees" => "tsu",
                "telephone" => "091234567",

            ],
            [
                "name" => "simsim",
                "password" => md5("123456"),
                "email" => "simsim@gmail.com",
                "addrees" => "tsu",
                "telephone" => "0983654870",

            ],
        ]);
    }
}

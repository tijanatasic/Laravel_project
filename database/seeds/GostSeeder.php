<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 15; $i++) {
            DB::table('gost')->insert([
                'ime_gost' =>  Str::random(5) . " " . Str::random(7),
                'broj_telefona' =>  "06" . rand(1000000, 9999999),
            ]);
        }
    }
}

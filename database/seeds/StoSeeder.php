<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;



class StoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 0; $i < 30; $i++) {
            DB::table('sto')->insert([
                'broj_mesta' =>  rand(4, 6),
            ]);
        }
    }
}

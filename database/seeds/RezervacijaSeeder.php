<?php

use App\Sto;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class RezervacijaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('rezervacija')->insert([
                'timestamp_rezervacije' => rand(1616416072, 1619008072), // 22.3.2021 - 21.4.2021
                'gost_id' =>  $i,
                'sto_id' => $i * 2,
            ]);
            Sto::where('id', $i * 2)->update(['rezervisan' => true]);
        }
    }
}

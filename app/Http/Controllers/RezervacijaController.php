<?php

namespace App\Http\Controllers;

use App\Rezervacija;
use App\Sto;
use Illuminate\Http\Request;

class RezervacijaController extends Controller
{


    public function rezervisi(Request $request)
    {
        $gost_id = $request->input('gost_id');
        $sto_id = $request->input('sto_id');
        $timestamp_rezervacije = time();

        if (Rezervacija::insert([
            'gost_id' => $gost_id,
            'sto_id' => $sto_id,
            'timestamp_rezervacije' => $timestamp_rezervacije,
        ]))
            return response()->json([
                'mess' => 'Greska prilikom rezervacije!',
                'uspesanKod' => true
            ]);
    }

    public function get()
    {

        $rezervacije = Rezervacija::with('gost', 'sto')->get();
        return view('rezervacije', [
            'rezervacije' => $rezervacije
        ]);
    }
    public function brisanje(Request $request)
    {
        $id = $request->input('id');
        $sto_id = Rezervacija::find($id)->sto()->get()[0]->id;
        Sto::where('id', $sto_id)->update(['rezervisan' => false]);

        Rezervacija::find($id)->delete();


        return view('welcome');
    }
}

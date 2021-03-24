<?php

namespace App\Http\Controllers;

use App\Sto;
use Illuminate\Http\Request;

class StoController extends Controller
{
    public function fetchStolovi()
    {
        $stolovi = Sto::all();

        return response()->json([
            'stolovi' => $stolovi
        ]);
    }
    public function updateRezervisan(Request $request)
    {
        $sto_id = $request->input('sto_id');

        if (Sto::where('id', $sto_id)->update(['rezervisan' => true]))
            return response()->json([
                'mess' => 'Rezervisali ste sto, vidimo se!'
            ]);
    }
}

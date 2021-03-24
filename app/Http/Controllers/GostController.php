<?php

namespace App\Http\Controllers;

use App\Gost;
use Illuminate\Http\Request;

class GostController extends Controller
{

    public static function kreirajGosta(Request $request)
    {

        $ime_gost = $request->input('ime_gost');
        $broj_telefona = $request->input('broj_telefona');


        $id = Gost::insertGetId([
            'ime_gost' => $ime_gost,
            'broj_telefona' => $broj_telefona,
        ]);

        return response()->json([
            'gost_id' => $id
        ]);
    }
}

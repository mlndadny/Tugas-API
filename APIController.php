<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\movieapp;

class APIController extends Controller
{
    public function searchrental(Request $request)
    {
        $cari = $request->input('q');
        $rental = rentalps_580::where('nama', 'LIKE', "%$cari%")->get();

        if ($rental->isEmpty())
        {
            return response()->json([
                'success' => false,
                'data' => "Data Tidak Ditemukan"
            ], 404)->header('Access-Control-Allow-Origin','http://127.0.0.1:5500');
        }
        else
        {
            return response()->json([
                'success' => true,
                'data' => $rental
            ], 200)->header('Access-Control-Allow-Origin','http://127.0.0.1:5500');
        }
    }
}
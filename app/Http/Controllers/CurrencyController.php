<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CurrencyController extends Controller
{
    public function index(Request $request)
    {
        $date = Carbon::parse($request->get('date', now()))->format('d.m.Y');
        $response = Http::get("https://cbar.az/currencies/$date.xml");
        $response_string = json_encode(simplexml_load_string($response));
        $response_json = json_decode($response_string, true);
        return $response_json['ValType'][1]['Valute'];
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laundry;

class LaundryController extends Controller
{
    public function searchLaundry(Request $request)
    {
        $results = [];
        $trackingCode= $request->input('trackingCode');
        $results = Laundry::where('kode',$trackingCode)->get();
        return view('laundryTracking',['laundry' => $results]);
    }
}

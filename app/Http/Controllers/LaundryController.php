<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LaundryController extends Controller
{
    public function searchLaundry(Request $request)
    {
        $results = [];
        $trackingCode= $request->input('trackingCode');
        $results = User::where('email',$trackingCode)->get();
        return view('laundryTracking',['laundry' => $results]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class MountainsTripController extends Controller
{
    function sea_trips() {
        $mountain_trip = Trip::where('category_place', 'montagna')->get();
        return view('trips', ['mountain_trip' => $mountain_trip]);
    }
}

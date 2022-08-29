<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripsController extends Controller
{
    function trips($place) {
        $trips = Trip::where('category_place', $place)->get();
        // dd($trips);
        return view('trips', ['trips' => $trips, 'place' => $place]);
    }
}

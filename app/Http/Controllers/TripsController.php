<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class TripsController extends Controller
{
    function trips($place = 'I\'m a place var') {
        $trips = Trip::all();
        dd($trips);
        return view('trips', $trips);
    }
}

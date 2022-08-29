<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class SeaTripController extends Controller
{
    function sea_trips() {
        $sea_trip = Trip::where('category_place', 'mare')->get();
        return view('sea_trips', ['sea_trip' => $sea_trip]);
    }
}

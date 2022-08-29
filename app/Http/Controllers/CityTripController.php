<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Trip;

class CityTripController extends Controller
{
    function city_trips() {
        $city_trip = Trip::where('category_place', 'città')->get();
        return view('city_trips', ['city_trip' => $city_trip]);
    }
}
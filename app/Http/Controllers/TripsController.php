<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TripsController extends Controller
{
    function trips($place = 'I\'m a place var') {
        dd($place);
        return view('trips');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{  public function getCountiesByCountry($country)
    {
        $counties = County::where('country_id', $country)->get();
        return response()->json($counties);
    }
    

    public function getLocationsByCounty(Request $request)
    {
        $countyId = $request->input('county_id');
        $locations = Location::where('county_id', $countyId)->get();
        return response()->json($locations);
    }
}

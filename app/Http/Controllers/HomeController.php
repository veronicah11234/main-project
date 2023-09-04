<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\County;

class HomeController extends Controller
{
    public function index()
    {
        // $countries = Country::all();
        // $counties = County::all();

        // return view('home', compact('countries', 'counties'));
    }
}

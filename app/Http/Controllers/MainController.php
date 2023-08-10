<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Country;
use App\counties;
use App\City;

class MainController extends Controller
{
    public function index(){
    	$countries = Country::all()->pluck('country_name','country_id');
    	return view('welcome',compact('countries'));
    }
     public function getcounties($id){
        $counties= State::where('country_id',$id)->get();
        return response()->json(['counties' => $counties]);
   }
    
}
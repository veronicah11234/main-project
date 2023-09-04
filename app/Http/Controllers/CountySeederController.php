<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\County;

class CountySeederController extends Controller
{
    public function seed()
    {
        County::seedCounties();
        return "Counties data seeded successfully!";
    }
}

<?php
namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function index()
    {
        return view('book');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i',
            'message' => 'nullable|string',
        ]);

        Booking::create($validatedData);

        try {
            DB::connection()->getPdo();
            echo "Connected successfully to the database.";
        } catch (\Exception $e) {
            die("Could not connect to the database: " . $e->getMessage());
        }    }
}
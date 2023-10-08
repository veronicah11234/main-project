<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all(); // Assuming you want to fetch all payments.
        
        return view('payment.index', ['payments' => $payments]);
    }
    
}

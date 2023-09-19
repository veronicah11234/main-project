<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;


class PaymentController extends Controller
{
    public function index()
{
    $payments = Payment::all(); 

    return view('payments.index', ['payments' => $payments]);
}
}

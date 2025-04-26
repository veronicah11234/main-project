<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;
use Unicodeveloper\Paystack\Paystack;
use Illuminate\Support\Facades\Redirect;


class PaymentController extends Controller
{
    public function index()
    {
        $payments = Payment::all(); // Assuming you want to fetch all payments.
        
        return view('payment.index', ['payments' => $payments]);
    }

    public function redirectToGateway()
    {
        try {
            $paystack = new Paystack();

            // You can set payment details and other parameters here

            return $paystack->getAuthorizationUrl()->redirectNow();
        } catch (\Exception $e) {
            return Redirect::back()->withMessage(['msg' => 'The paystack token has expired. Please refresh the page and try again.', 'type' => 'error']);
        }
    }


    /**
     * Obtain Paystack payment information
     * @return void
     */
    public function handleGatewayCallback()
    {
        
$data = array(
    "amount" => 700 * 100,
    "reference" => '4g4g5485g8545jg8gj',
    "email" => 'user@mail.com',
    "currency" => "NGN",
    "orderID" => 23456,
);

return Paystack::getAuthorizationUrl($data)->redirectNow();
        $paymentDetails = Paystack::getPaymentData();

        dd($paymentDetails);
        // Now you have the payment details,
        // you can store the authorization_code in your db to allow for recurrent subscriptions
        // you can then redirect or do whatever you want
    }
    public function initiatePayment()
{
    $paystack = new Paystack();

    // You can set payment details and other parameters here

    // Initiate the payment and redirect the user to Paystack's payment page
    return redirect($paystack->getAuthorizationUrl());
}
    
    
}

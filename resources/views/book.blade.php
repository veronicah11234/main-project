<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <title>Booking Page</title>
    <style>
        /* Add your custom styles for the button */
.custom-button {
    background-color: #bdccdb;
    /* color: #fff;  */
    border: none; 
    padding: 5px 15px;
    font-size: 18px; 
    cursor: pointer; 
    transition: background-color 0.3s;
}

.custom-button:hover {
    background-color: #0056b3;
}

    </style>

</head>
<body>
    @include ("navbar")
    @if(session('success'))
        <div class="alert alert-success mt-4">
            {{ session('success') }}
        </div>
    @endif
    <div class="container">
        <h1 class="text-center mt-5">Booking Page</h1>
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="{{ route('booking.store') }}" method="POST" id="payment-form">
                    @csrf
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter your email">
                    </div>
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone</label>
                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Enter your phone number">
                    </div>
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount (USD)</label>
                        <input type="number" class="form-control" id="amount" name="amount" placeholder="Enter the payment amount">
                    </div>
                    <div class="mb-3">
                        <label for="payment-method" class="form-label">Payment Method</label>
                        <select class="form-select" id="payment-method" name="payment_method">
                            {{-- <option value="mpesa">M-Pesa</option> --}}
                            <option value="paypal">PayPal</option>
                        </select>
                        {{-- <button type="button" class="btn btn-lg btn-block custom-button" id="paystackButton">
                            <i class="fa fa-plus-circle"></i> Pay Now
                        </button> --}}
                    </div>
                    <div class="mb-3">
                        <label for="date" class="form-label">Date</label>
                        <input type="date" class="form-control" id="date" name="date">
                    </div>
                    <div class="mb-3">
                        <label for="time" class="form-label">Time</label>
                        <input type="time" class="form-control" id="time" name="time">
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" rows="4" placeholder="Enter your message"></textarea>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="button" class="btn btn-lg btn-block custom-button" id="paystackButton">
                            <i class="fa fa-plus-circle"></i> Pay Now
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://js.paystack.co/v1/inline.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- ... Your HTML code ... -->

    <script>
        document.getElementById('paystackButton').addEventListener('click', function() {
            var email = document.getElementById('email').value;
            var amount = document.getElementById('amount').value * 100; // Amount in kobo
            var ref = 'your_unique_transaction_reference'; // Replace with your own logic to generate a unique reference
    
            var handler = PaystackPop.setup({
                key: 'pk_test_62f12da573adae1eb669007d63532291dc0ad9b0',
                email: 'miriamwangui525@gmail.com',
                amount: 200,
                ref: ref,
                onClose: function() {
                    // Handle when the Paystack dialog is closed (e.g., the user cancels the payment)
                },
                callback: function(response) {
                    // Handle the response from Paystack, e.g., send it to your server for verification
                    if (response.status === 'success') {
                        // Payment was successful
                        window.location.href = '/payment-success'; // Redirect to a success page
                    } else {
                        // Payment failed
                        window.location.href = '/payment-failed'; // Redirect to a failure page
                    }
                }
            });
            handler.openIframe();
        });
    </script>


</body>
</html>

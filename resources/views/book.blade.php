<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
    <title>Booking Page</title>
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
                            <option value="mpesa">M-Pesa</option>
                            <option value="paypal">PayPal</option>
                        </select>
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
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://js.stripe.com/v3/"></script>
    <!-- ... Your HTML code ... -->

<!-- ... Your HTML code ... -->
{{-- 
<script>
    // Handle form submission.
    var form = document.getElementById('payment-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        var paymentMethod = document.getElementById('payment-method').value;

        if (paymentMethod === 'mpesa') {
            // Handle M-Pesa payment logic here.
            processMpesaPayment();
        } else if (paymentMethod === 'paypal') {
            // Handle PayPal payment logic here.
            processPayPalPayment();
        } else {
            // Handle other payment methods if needed.
        }
    });

    // Process M-Pesa Payment
    function processMpesaPayment() {
        // Implement your M-Pesa payment integration logic here.
        // After a successful payment, collect transaction details.
        var transactionDetails = {
            username: document.getElementById('username').value,
            email: document.getElementById('email').value,
            amount: document.getElementById('amount').value,
            date: document.getElementById('date').value,
            // Add more details as needed
        };

        // Generate a receipt based on transactionDetails.
        var mpesaReceipt = generateMpesaReceipt(transactionDetails);

        // Redirect to the M-Pesa receipt page with the receipt data.
        redirectToReceiptPage('mpesa_reciept', mpesaReceipt);
    }
    function redirectToReceiptPage(routeName, receiptData) {
    // Store receipt data in localStorage
    localStorage.setItem('receiptData', JSON.stringify(receiptData));

    // Redirect to the specified route
    window.location.href = route(routeName);
}


    // Process PayPal Payment
    function processPayPalPayment() {
        // Implement your PayPal payment integration logic here.
        // After a successful payment, collect transaction details.
        var transactionDetails = {
            username: document.getElementById('username').value,
            email: document.getElementById('email').value,
            amount: document.getElementById('amount').value,
            date: document.getElementById('date').value,
            // Add more details as needed
        };

        // Generate a receipt based on transactionDetails.
        var paypalReceipt = generatePayPalReceipt(transactionDetails);

        // Redirect to the PayPal receipt page with the receipt data.
        redirectToReceiptPage('paypal_reciept', paypalReceipt);
    }

    // Generate M-Pesa Receipt
    function generateMpesaReceipt(data) {
        // Implement logic to create an M-Pesa receipt based on data.
        // Use a template with placeholders for dynamic data.
        // Save the receipt data in your database.
        return 'M-Pesa Receipt Content';
    }

    // Generate PayPal Receipt
    function generatePayPalReceipt(data) {
        // Implement logic to create a PayPal receipt based on data.
        // Use a template with placeholders for dynamic data.
        // Save the receipt data in your database.
        return 'PayPal Receipt Content';
    }

    // Redirect to Receipt Page
    function redirectToReceiptPage(page, receiptData) {
        // Create a form to POST the receipt data to the receipt page.
        var form = document.createElement('form');
        form.method = 'POST';
        form.action = page;
        
        // Create an input field to hold the receipt data.
        var input = document.createElement('input');
        input.type = 'hidden';
        input.name = 'receiptData';
        input.value = receiptData;
        
        // Append the input field to the form.
        form.appendChild(input);
        
        // Submit the form to the receipt page.
        document.body.appendChild(form);
        form.submit();
    } --}}
{{-- </script> --}}


</body>
</html>

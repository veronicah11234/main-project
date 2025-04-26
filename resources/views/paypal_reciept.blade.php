<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayStack Payment Form</title>
    <!-- Add your CSS styles here for styling the form -->
    <style>
        /* Your custom styles go here */
        body {
            font-family: Arial, sans-serif;
        }
        .payment-form {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="payment-form">
        <h2>Make a Payment</h2>
        <form method="POST" action="{{ route('pay') }}" accept-charset="UTF-8" role="form">
            <div>
                <label for="product">Tour Name:</label>
                <input type="text" name="product" id="product" required>
            </div>

            <div>
                <label for="amount">Amount (₦):</label>
                <input type="number" name="amount" id="amount" required>
            </div>

            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" required>
            </div>


            <!-- Add more form fields if needed, e.g., quantity, currency, metadata, reference, split_code, split -->

            {{ csrf_field() }}

            <div>
                <button type="submit" class="btn btn-success btn-lg btn-block">
                    <i class="fa fa-plus-circle fa-lg"></i> Pay Now
                </button>
            </div>
        </form>
    </div>

    <script>
        // JavaScript code to populate receipt data from POST request
        document.addEventListener('DOMContentLoaded', function() {
            var receiptData = JSON.parse(localStorage.getItem('receiptData'));
            document.getElementById('username').textContent = receiptData.username;
            document.getElementById('email').textContent = receiptData.email;
            document.getElementById('amount').textContent = receiptData.amount;
            document.getElementById('date').textContent = receiptData.date;
            // Update other receipt details as needed
        });
    </script>
</body>
</html>

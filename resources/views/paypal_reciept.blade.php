<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PayPal Receipt</title>
    <!-- Add your CSS styles here for styling the receipt -->
    <style>
        /* Your custom styles go here */
        body {
            font-family: Arial, sans-serif;
        }
        .receipt {
            border: 1px solid #ccc;
            padding: 20px;
            max-width: 400px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="receipt">
        <h2>PayPal Receipt</h2>
        <p><strong>Username:</strong> <span id="username"></span></p>
        <p><strong>Email:</strong> <span id="email"></span></p>
        <p><strong>Amount:</strong> $<span id="amount"></span></p>
        <p><strong>Date:</strong> <span id="date"></span></p>
        <!-- Add more receipt details here -->
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

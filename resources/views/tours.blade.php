
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tour Details</title>
</head>
<body>
    <h1>Tour Details</h1>
    <p>Masai Mara, Lake Nakuru, Lake Naivasha and Amboseli</p>

    <div>
        <strong>Name:</strong> {{ $tours->name }}
    </div>

    <div>
        <strong>Price:</strong> ${{ number_format($tours->price, 2) }}
    </div>

    <div>
        <strong>Availability:</strong> {{ $tours->availability }}
    </div>
</body>
</html>
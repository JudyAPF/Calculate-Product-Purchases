@if($amountPaid < $finalPrice)
    return;
@endif
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .result {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            text-align: center;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            margin: 10px 0;
        }

        .final-price {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="result">
        <h1>Result</h1>
        <p><strong>Product Name:</strong> {{ $productName }}</p>
        <p><strong>Quantity:</strong> {{ $quantity }}</p>
        <p><strong>Price:</strong> {{ $price }}</p>
        @if($finalPrice > 100)
            <p><strong>Final Price:</strong> <span class="final-price">{{ $finalPrice }}</span></p>
        @else
            <p><strong>Final Price:</strong> {{ $finalPrice }}</p>
        @endif
        <p><strong>Change:</strong> {{ $change }}</p>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Form</title>
    <style>
        body {
            font-family: Poppins, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f2f2f2;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h1 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #00008b;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #0202cc;
        }

        .error {
            color: red;
            margin-bottom: 10px;
            text-align: center;
        }
    </style>
</head>

<body>
    <form action="{{ route('result') }}" method="post">
        @csrf
        @if(session('error'))
        <div class="error">{{ session('error') }}</div>
        @endif
        <h1>Product Form</h1>
        <label for="product_name">Product Purchased:</label>
        <input type="text" name="product_name" id="product_name" required><br>
        <label for="quantity">Quantity:</label>
        <input type="number" name="quantity" id="quantity" required><br>
        <label for="price">Price Per Product:</label>
        <input type="number" name="price" id="price" step="0.01" required><br>
        <label for="amount_paid">Amount Paid:</label>
        <input type="number" name="amount_paid" id="amount_paid" step="0.01" required><br>
        <button type="submit">Calculate</button>
    </form>
</body>

</html>

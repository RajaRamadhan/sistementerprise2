<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send Promotions</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-color: #f3f4f6;
        }

        .container {
            display: flex;
            background-color: #fff;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
            border-radius: 8px;
            overflow: hidden;
        }

        .sidebar {
            background-color: #f0f4ff;
            padding: 20px;
            width: 200px;
        }

        .sidebar h2 {
            margin-top: 0;
            color: #333;
        }

        .sidebar a {
            display: block;
            padding: 10px 0;
            color: #555;
            text-decoration: none;
            font-size: 16px;
        }

        .sidebar a.active {
            color: #5b5bff;
            font-weight: bold;
        }

        .main-content {
            padding: 30px;
            width: 300px;
        }

        .main-content h2 {
            margin-top: 0;
            font-size: 22px;
            color: #333;
        }

        label {
            font-size: 16px;
            color: #333;
            display: block;
            margin-bottom: 5px;
        }

        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 15px;
            border-radius: 5px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        button {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            background-color: #5b5bff;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #4a4acc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="sidebar">
            <h2>Customer Relationship Management</h2>
            <a href="#">Customers</a>
            <a href="{{ route('crm.promotions') }}">Promotions</a>
            <a href="#" class="active">Send Promotion</a>
        </div>
        <div class="main-content">
            <h2>Send Promotions</h2>
            <form method="POST" action="{{ route('send.promotion') }}">
                @csrf
                <label for="customer">Customer Name</label>
                <select id="customer" name="customer_id">
                    @foreach ($customers as $customer)
                        <option value="{{ $customer->id }}">{{ $customer->name }}</option>
                    @endforeach
                </select>

                <label for="promotion">Promotion Name</label>
                <select id="promotion" name="promotion_id">
                    @foreach ($promotions as $promotion)
                        <option value="{{ $promotion->id }}">{{ $promotion->name }}</option>
                    @endforeach
                </select>

                <button type="submit">Send Promotion</button>
            </form>
        </div>
    </div>
</body>
</html>

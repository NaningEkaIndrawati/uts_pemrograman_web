<!-- resources/views/orders/create.blade.php -->

<!DOCTYPE html>
<html>
<head>
    <title>Create Order</title>
</head>
<body>
    <h1>Create New Order</h1>

    <form method="POST" action="{{ route('orders.store') }}">
        @csrf
        <label for="product">Product:</label><br>
        <input type="text" id="product" name="product" required><br><br>

        <label for="quantity">Quantity:</label><br>
        <input type="number" id="quantity" name="quantity" required><br><br>

        <label for="customer">Customer:</label><br>
        <input type="text" id="customer" name="customer" required><br><br>

        <button type="submit">Create Order</button>
    </form>
</body>
</html>

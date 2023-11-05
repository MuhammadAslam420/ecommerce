<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
</head>

<body>
    <h1>Order Confirmation</h1>

    <p>Thank you for your order. We have received the following details:</p>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->firstname }}&nbsp;{{ $order->lastname }}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>Mobile:</strong> {{ $order->mobile }}</p>

    <h2>Order Items:</h2>

    <table>
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($order->items as $item)
                <tr>
                    <td>
                        <div>

                            <span>{{ $item->name }}</span>
                        </div>
                    </td>
                    <td>{{ $item->quantity }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <p><strong>Total Shipping Charges:</strong> {{ $order->shipping_charges }}</p>
    <p><strong>Total Discount:</strong> {{ $order->discount }}</p>
    <p><strong>Total Tax:</strong> {{ $order->tax }}</p>
    <p><strong>SubTotal:</strong> {{ $order->subtotal }}</p>
    <p><strong>Total Amount:</strong> {{ $order->total }}</p>

    <p>Thank you for shopping with us!</p>
</body>

</html>

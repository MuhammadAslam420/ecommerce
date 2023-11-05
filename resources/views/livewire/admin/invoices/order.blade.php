<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Order Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        /* Define your invoice styles here */
    </style>
</head>

<body>
    <h1>Order Invoice</h1>

    <p>Thank you for your order. We have received the following details:</p>

    <p><strong>Order ID:</strong> {{ $order->id }}</p>
    <p><strong>Customer Name:</strong> {{ $order->firstanme }}&nbsp;{{$order->lastname}}</p>
    <p><strong>Email:</strong> {{ $order->email }}</p>
    <p><strong>Mobile:</strong> {{ $order->mobile }}</p>

    <h2>Order Items:</h2>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Item Name</th>
                <th>Quantity</th>
                <th>Price</th>
            </tr>
        </thead>
        <tbody>
            @php
            $items=DB::table('order_items')->where('order_id',$order->id)->get();
            @endphp
            @foreach ($items as $item)
            @php
            $product=DB::table('products')->where('id',$item->product_id)->first();
            @endphp
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $item->qty }}</td>
                    <td>{{ $item->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <p><strong>Tax Amount:</strong> {{ $order->tax }}</p>
    <p><strong>Discount Amount:</strong> {{ $order->discount }}</p>
    <p><strong>Shipping Amount:</strong> {{ $order->shipping_charges }}</p>
    <p><strong>SubTotal Amount:</strong> {{ $order->subtotal }}</p>
    <p><strong>Total Amount:</strong> {{ $order->total }}</p>

    <p>Thank you for your purchase!</p>
</body>

</html>

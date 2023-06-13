<!DOCTYPE html>
<html>

<head>
    <title>Coffee Shop Invoice</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<style>
    body {
    font-family: Arial, sans-serif;
    font-size: 8pt;
    
}
td{
    border: 1px solid gray!important;
    padding: 20px

}
.invoice{
    border-radius: 0px 23px 0px 23px;background: #986846;
    text-align: center;
    padding: 12px 20px;

    color:white;
}

.title {
    position: absolute;
    top: 0;
    left: 13%;
    transform: translate(-50%, -50%);
}
.invoice-content{
    margin-top: 50px;
    margin-bottom: 20px;
}

.image {
    position: absolute;
    top: 0;
    left: 100%;
    transform: translate(-50%, -50%);
}

h1, h2, h3,h4, h5, h6 {
    margin: 4px 0;
    padding: 0;
}

table{
    width: 100%;
}

th,td{
    padding: 6px;
}
</style>

<body>
    <div class="container">
        <div class="header">
            <div class="title">
                <h3>Bilouar Coffee Shop </h3>
                <h6 style="text-align: center">New Belouar Coffee</h6>
            </div>
            <div>
                <img class="image" src="{{ public_path('assets/img/coffee.png') }}" width="60px" alt="">
            </div>

        </div>
        <h3 style="text-align: center"  class="invoice-content"><span class="invoice" >Invoice</span></h3>

        <h5>WiFi Password: <strong>Bilouar2023</strong></h5>
        <h5 class="mt-2">Server: <strong>{{ $order->server->first_name }} {{ $order->server->last_name }}</strong></h5>
        <h5>Table number: <strong>{{ $order->table_id }}</strong></h5>
        <table class="table table-bordered mt-4">
            <thead>
                <tr>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Subtotal</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($order->details as $item)
                <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>{{ $item->quantity }}</td>
                    <td> {{ $item->product->price }} MAD</td>
                    <td> {{ $item->total }} MAD</td>
                </tr>
                @endforeach
                <tr>
                    <td colspan="3" class="text-right"><strong>Total</strong></td>
                    <td> {{ $order->getTotal() }} MAD</td>
                </tr>
            </tbody>
        </table>
        <p class="text-right">Date: <strong>{{ date('Y-m-d') }}</strong></p>
    </div>
</body>
<script>
    // print()
</script>

</html>
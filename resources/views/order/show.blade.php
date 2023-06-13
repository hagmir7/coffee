@extends('layout.dash')



@section('content')
<div class="row">
    <div class="col-md-6">
        <h4>New Order</h4>
        <p class="mb-1">Manager : <strong>{{ $order->manager->first_name}} {{ $order->manager->last_name}}</strong> </p>
        <p class="mb-1">Server : <strong>{{ $order->server->first_name}} {{ $order->server->last_name}}</strong> </p>
        <p class="mt-1">Table number : <strong>{{ $order->table_id }}</strong> </p>
        <p>Total : <strong>{{ $order->getTotal() }} MAD</strong> </p>
     

        @if (count($order->details) > 0)
        <table class="table border">
          <thead class="border-0">
            <tr>
              <th scope="col">Product</th>
              <th scope="col">Quantity</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($order->details as $item)
            <tr class="border-end">
              <td class="border-end">{{ $item->product->name }}</td>
              <td class="border-end">{{ $item->quantity }}</td>
              <td class="border-end">{{ $item->total }} MAD</td>
            </tr>
            @endforeach
          </tbody>
        </table>
        <a href="{{ route('order.valid', $order->id ) }}" class="btn mb-2 w-100 btn-success">Valid</a>
        <a href="{{ route('order.cancel', $order->id ) }}" class="w-100 btn mb-2 btn-danger">Cancel</a>
        @else
            <h6 class="text-center my-5">No Products</h6>
        @endif




        




    </div>
   <div class="col-md-6 overflow-auto" style="max-height: 100vh; ">
    <form action="">
        <input type="search" class="form-control mb-2" placeholder="Search">
    </form>
    @foreach ($products as $product)
    <ul class="list-group" >
        <li class="list-group-item mb-2">
          <div class="row">
           <div class="col-4">
            <img src="{{ $product->images->first()->path }}" class="mr-3 w-100" alt="{{ $product->name }}">
           </div>
            <div class="col-8">
              <a href="#" class="text-dark font-weight-bold">{{ $product->name }}</a>
              <h6 class="text-primary">{{ $product->price }} MAD</h6>
              <form action="{{ route('order.add', [$order->id, $product->id] ) }}" method="POST">
                @csrf
                <div class="input-group mt-2" style="max-width: 200px;">
                    <input type="number" name="quantity" required class="form-control" value="1" min="1" max="10">
                    <div class="input-group-append">
                      <button class="btn btn-outline-success" type="submit">Add to Order</button>
                    </div>
                  </div>
              </form>
            </div>
          </div>
        </li>
      </ul>
    @endforeach
   </div>
</div>
@endsection
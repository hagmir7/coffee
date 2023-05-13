@extends('layout.dash')



@section('content')
<div class="row">
    <div class="col-md-6">
        <h4>New Order</h4>
        <p class="mb-1">Manager : <strong>{{ $order->manager->first_name}} {{ $order->manager->last_name}}</strong> </p>
        <p class="mb-1">Server : <strong>{{ $order->server->first_name}} {{ $order->server->last_name}}</strong> </p>
        <p>Total : <strong>{{ $order->getTotal()}} MAD</strong> </p>

        <ul class="list-group">
            @foreach ($order->details as $item)
            <li class="list-group-item d-flex justify-content-between align-items-center">
                {{ $item->product->name }}
                <span class="badge bg-primary rounded-pill">{{ $item->quantity }} Qty</span>
                <span class="badge bg-primary rounded-pill">{{ $item->total }} MAD</span>
            </li>   
            @endforeach
        </ul>


        <a href="" class="btn mb-2 w-100 btn-success">Valid</a>
        <a href="" class="w-100 btn mb-2 btn-danger">Cancel</a>




    </div>
   <div class="col-md-6 overflow-auto" style="max-height: 100vh; ">
    <form action="">
        <input type="search" class="form-control mb-2" placeholder="Search">
    </form>
    @foreach ($products as $product)
    <ul class="list-group" >
        <li class="list-group-item mb-2">
          <div class="media">
            <img src="https://via.placeholder.com/100x100" class="mr-3" alt="Product Image">
            <div class="media-body">
              <a href="#" class="text-dark font-weight-bold">Product Title</a>
              <form action="" method="post">
                <div class="input-group mt-2" style="max-width: 200px;">
                    <input type="number" class="form-control" value="1" min="1" max="10">
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
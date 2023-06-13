@extends('layout.dash')



@section('content')
<div class="row justify-content-center">
    <div class="row rounded dash col-md-9 text-white mt-2" style="background-color: #37517e;">
        <div class="col-md-3 col-6">
            <div>
                <p class="p-0 mt-2 m-0">Today orders</p>
                <h2 class="text-white">{{ $today }}</h2>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div>
                <p class="p-0 mt-2 m-0">Yestrday orders</p>
                <h2 class="text-white">{{ $yesterday }}</h2>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div>
                <p class="p-0 mt-2 m-0">Last 7 days</p>
                <h2 class="text-white">{{ $last7Days }}</h2>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div>
                <p class="p-0 mt-2 m-0">This Month</p>
                <h2 class="text-white">{{ $thisMonth }}</h2>
            </div>
        </div>
    </div>
</div>
<div class="row gap-2 justify-content-center mt-3">
    <div class="col-md-3 card p-3">
        <h5>Users</h5>
        <h4><i class="bi bi-person"></i> {{ $users->count() }}</h4>
    </div>
    <div class="col-md-3 card p-3">
        <h5>Contacts</h5>
        <h4><i class="bi bi-chat-left-dots"></i> {{ $contacts->count() }}</h4>
    </div>
    <div class="col-md-3 card p-3">
        <h5>Orders</h5>
        <h4><i class="bi bi-basket3"></i> {{ $orders->count() }}</h4>
    </div>
    <div class="col-md-3 card p-3">
        <h5>Products</h5>
        <h4><i class="bi bi-box2"></i> {{ $products->count() }}<h4>
    </div>
    <div class="col-md-3 card p-3">
        <h5>Categories</h5>
        <h4><i class="bi bi-tags"></i> {{ $categories->count() }}</h4>
    </div>

    <div class="col-12 d-flex justify-content-center p-3">
        <a href="#!" data-bs-toggle="modal" data-bs-target="#order">
            <div class="rounded-pill card py-4 px-5" style="background-color: #37517e;">
                <h3 class="text-white p-0 m-0"><i class="bi bi-patch-plus"></i></h3>
            </div>
        </a>
    </div>
</div>
  
  <!-- Modal -->
  <div class="modal" id="order" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="orderLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="orderLabel">Select Server</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form action="{{ route('order.create') }}" method="POST">
            @csrf
            <select name="server_id" id="" class="form-select" required>
                <option value="">Select Server</option>
                @foreach ($servers as $server)
                    <option value="{{ $server->id }}">{{ $server->first_name }} {{ $server->last_name }}</option>
                @endforeach
            </select>

            <select name="table_id" id="" class="form-select mt-3" required>
                <option value="">Select Table Number</option>
                @foreach ($tables as $table)
                    <option value="{{ $table->id }}">{{ $table->id }}</option>
                @endforeach
            </select>
            <button class="btn btn-success w-100 mt-2">Select and Create</button>
        </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

@endsection
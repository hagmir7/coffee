@extends('layout.dash')



@section('content')
<div class="row">
    @foreach ($products as $product)
    <ul class="list-group">
        <li class="list-group-item">
          <div class="media">
            <img src="https://via.placeholder.com/100x100" class="mr-3" alt="Product Image">
            <div class="media-body">
              <a href="#" class="text-dark font-weight-bold">Product Title</a>
              <div class="input-group mt-2" style="max-width: 200px;">
                <input type="number" class="form-control" value="1" min="1" max="10">
                <div class="input-group-append">
                  <button class="btn btn-outline-secondary" type="button">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
        </li>
      </ul>
      
    @endforeach
</div>
@endsection
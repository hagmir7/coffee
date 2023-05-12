@extends('layout.layout')


@section('content')
<!-- About Start -->
<div class="container-xxl py-5">
<!-- Product Description Section -->
<div class="container py-5">
    <div class="row justify-content-center">
      <div class="col-lg-4 ">
        <!-- Image Slideshow -->
        <div id="carouselExampleIndicators" class="carousel slide border" data-bs-ride="carousel">
          <div class="carousel-indicators">
            @foreach ($product->images as $image)
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="{{ $loop->index }}" class="{{ $loop->first ? 'active' : '' }}" aria-current="{{ $loop->first ? 'true' : 'false' }}" aria-label="Slide {{ $loop->index + 1 }}"></button>
            @endforeach
          </div>
          <div class="carousel-inner">
            @foreach ($product->images as $image)
              <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                <img src="{{ $image->path }}" id="zoom_04" class="d-block w-100" alt="{{ $product->name }}">
              </div>
            @endforeach
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true" style="filter:drop-shadow(8px 1px 1px black)"></span>
          </button>
          <button class="carousel-control-next"  type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" style="filter:drop-shadow(8px 1px 1px black)" aria-hidden="true"></span>
          </button>
        </div>
      </div>
      <div class="col-lg-6">
        <!-- Product Details -->
        <h1 class="fw-bold h3">{{ $product->name }}</h1>
        
        <h2 class="text-primary fw-bold">{{ $product->price }} MAD</h2>
        <h3 class="h5">{{ $product->category->name }}</h2>
        <p class="lead fs-6 my-4">{{ $product->description }}</p>


    </div>
  </div>
  

</div>
@endsection
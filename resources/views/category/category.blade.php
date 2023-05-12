@extends('layout.layout')


@section('content')
<div class="container-fluid hero-header bg-light py-5">
    <div class="container">
        <div class="row g-5 align-items-center pb-3">
            <h4 class="mt-3 p-0 text-primary">{{ $category->name }}</h4>
            @foreach ($products as $product)
            <div class="col-lg-3 p-1 mt-2">
                <div class="card border-0 shadow-sm rounded">
                    <div class="image-content">
                        <img src="{{ $product->images->first()?->path }}" width="100%" class="cover" alt="{{ $product->name }}">
                    </div>
                    <div class="p-2 border-top">
                        <h6>{{ $product->name }}</h6>
                        <p class="h3 text-end text-primary">12 MAD</p>
                        <a href="{{ route('product', $product->id) }}" class="btn btn-outline-primary w-100">See More</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col-12">
                {{ $products->links('vendor.pagination.bootstrap-5') }}
                @if($products->count() == 0)
                    <h5 class="text-center my-4">No Products in this Category</h5>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection
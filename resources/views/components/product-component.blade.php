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

@if( request()->path() == "product/list")
<div class="col-12">
    {{ $products->links('vendor.pagination.bootstrap-5') }}
</div>
@else
<div class="col-12">
    <a class="btn btn-outline-primary float-end rounded-pill" href="{{ route('product.list') }}">All Products <i class="bi bi-arrow-right"></i></a>
</div>  
@endif

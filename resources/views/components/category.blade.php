@foreach ($categories as $category)
<div class="col-6 col-lg-2 p-1 mt-2">
    <div class="card border-0 shadow-sm rounded">
        <div class="image-content">
            <img src="{{ $category->image }}" width="100%" class="cover" alt="{{ $category->name }}">
        </div>
        <div class="p-2 border-top">
            <h6>{{ $category->name }}</h6>
            <a href="{{ route("category", $category->id) }}" class="btn btn-outline-primary rounded-pill w-100">View Menu</a>
        </div>
    </div>
</div>
@endforeach


@if( request()->path() == "category/list")
<div class="col-12">
    {{ $categories->links('vendor.pagination.bootstrap-5') }}
</div>
@else
<div class="col-12">
    <a class="btn btn-outline-primary float-end rounded-pill" href="{{ route('category.list') }}">All Categories <i class="bi bi-arrow-right"></i></a>
</div>

@endif
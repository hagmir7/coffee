@extends('layout.dash')


@section('content')
<!-- About Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="row g-5 align-items-center d-flex justify-content-center">
            <div class="col-lg-10" data-wow-delay="0.1s">
                <h1 class="h3">Update Product</h1>
                @if ($errors->any())

                @foreach ($errors->all() as $error)
                <div class="alert alert-danger p-2 mb-1">{{ $error }}</div>
                @endforeach

                @endif
                <form action="{{ route('product.update.store', $product->id ) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6">
                            <label for="name">Name</label>
                            <input type="text" name="name" value="{{ $product->name }}" class="form-control mb-2" >
                            @error('name') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="price">Price</label>
                            <input type="text" name="price" value="{{ $product->price }}" class="form-control mb-2" >
                            @error('price') <span class="text-danger">{{$message}}</span> <br>@enderror

                            <label for="name">Category</label>
                            <select name="category_id" class="form-select mb-2">
                                <option value="">Select Category</option>
                                @foreach ($category as $caty)
                                @if ($caty->id == $product->category->id )
                                <option selected value="{{ $caty->id }}">{{ $caty->name }}</option>
                                @else
                                <option value="{{ $caty->id }}">{{ $caty->name }}</option>
                                @endif
                                @endforeach
                            </select>
                            @error('category') <span class="text-danger">{{$message}}</span> <br>@enderror
                           
                        </div>
                        <div class="col-md-6">
                        
                            <label for="images">Images</label>
                            <input type="file" accept="image/*" class="form-control mb-2" name="images[]" multiple>

                            {{-- Product Images --}}
                            <div class="row">
                                @foreach ($product->images as $image)
                                    <div class="col-4 item mb-1" >
                                        <a href="{{ $image->path }}"><img src="{{ $image->path }}" class="w-100 border" alt=""></a>
                                        <div class="item-description">
                                            <strong><a href="{{ route('image.delete', $image->id ) }}" onclick="return confirm('Are you sur you want to delete image?')" class="text-white">Delete</a></strong>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            @error('images') <span class="text-danger">{{$message}}</span> <br>@enderror
                            <label for="description">Description</label>
                            <textarea name="description" cols="30" rows="6"class="form-control mb-2">{{ $product->description }}</textarea>
                        </div>
                    </div>
                    <button class="btn btn-primary col-md-6">Update Product</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
@extends('layout.layout')


@section('content')
<div class="container-fluid hero-header bg-light">
    <div class="container">
        <div class="row g-5 align-items-center pb-3">
            <h4 class="mt-3 p-0 text-primary">Top Products</h4>
            <x-product-component />
        </div>
    </div>
</div>
@endsection
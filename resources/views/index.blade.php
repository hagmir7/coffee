@extends('layout.layout')


@section('content')

<div class="container-fluid hero-header bg-light py-5"
    style="background-image: url('/assets/img/hero.jpg');background-size: contain;">
    <div class="container py-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-6">
                <h1 class="display-4 mb-3 animated slideInDown text-white text-shadow">Bilour New Coffee</h1>
                <p class="animated slideInDown h3 text-white text-shadow">
                    We pride ourselves on our expertly crafted coffee blends. Our signature blend features beans from Colombia and Ethiopia.
                </p>
                <a href="/products" class="btn btn-primary py-3 px-4 animated slideInDown"> Our Prouducts </a>
                <a href="/categoreis" class="btn btn-primary py-3 px-4 animated slideInDown"> Our Catigoreis </a>
                <a href="/contact" class="btn btn-primary py-3 px-4 animated slideInDown"> Contact Us </a>
            </div>
            <div class="col-lg-6 animated fadeIn d-flex justify-content-center">
                <img class="img-fluid animated pulse infinite"
                    style="animation-duration: 3s; width: 70%; border-radius: 2rem" src="/assets/img/cover.png" alt="">
            </div>
        </div>
    </div>
</div>
<div class="container-fluid hero-header bg-light mb-5">
    <div class="container">
        <div class="row g-5 align-items-center">
            <h3 class="mt-3 p-0">Top Categories</h3>
            <x-caty-card />
            <x-caty-card />
            <x-caty-card />
            <x-caty-card />
            <x-caty-card />
            <x-caty-card />

        </div>
    </div>
</div>

<div class="container-fluid hero-header bg-light">
    <div class="container">
        <div class="row g-5 align-items-center">
            <h3 class="mt-3 p-0">Top Products</h3>
            <div class="col-lg-3 p-1 mt-2">
                <div class="card border-0 shadow-sm rounded">
                    <div class="image-content">
                        <img src="/assets/img/coffee.png" width="100%" class="cover" alt="Cola">
                    </div>
                    <div class="p-2 border-top">
                        <h6>Cola Drinks</h6>
                        <p class="h3 text-end">12 MAD</p>
                        <a href="#" class="btn btn-outline-primary w-100">See More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- About End -->
@endsection
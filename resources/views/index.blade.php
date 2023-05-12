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
                <a href="{{ route('product.list') }}" class="btn btn-primary py-3 px-4 animated slideInDown"> Our Prouducts </a>
                <a href="{{ route("category.list") }}" class="btn btn-primary py-3 px-4 animated slideInDown"> Our Catigoreis </a>
                <a href="{{ route('contact.create') }}" class="btn btn-primary py-3 px-4 animated slideInDown"> Contact Us </a>
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
            <h4 class="mt-3 p-0 text-primary">Top Categories</h4>
            <x-category />
        </div>
    </div>
</div>

<div class="container-fluid hero-header bg-light">
    <div class="container">
        <div class="row g-5 align-items-center pb-3">
            <h4 class="mt-3 p-0 text-primary">Top Products</h4>
            <x-product-component />
        </div>
    </div>
</div>



<div class="container-xxl bg-light py-5 my-5">
    <div class="container">
        <h4 class="text-primary">Where are We & Our Contacts</h4>
        <div class="row g-5">
            <div class="col-md-4  wow fadeIn" data-wow-delay="0.1s"
                style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
                <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, Fes, Morocco</p>
                <p><i class="fa fa-phone-alt me-3"></i>+212 649374839</p>
                <p><i class="fa fa-envelope me-3"></i>belouar@gmail.com</p>
            </div>
            <div class="col-md-8 card p-0 text-center wow fadeIn" data-wow-delay="0.5s" style="visibility: visible; animation-delay: 0.5s; animation-name: fadeIn;">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3307.5045708437174!2d-5.008070725101631!3d34.00525712021117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd9f8b651d8c4c75%3A0x958c4b4731da3704!2sCaf%C3%A9%20faraji!5e0!3m2!1sen!2sma!4v1683837551688!5m2!1sen!2sma" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </div>
    </div>
</div>
@endsection
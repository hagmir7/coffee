<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bilouar Coffee </title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="/assets/img/bilouar.png" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Roboto:wght@500;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="/assets/lib/animate/animate.min.css" rel="stylesheet">
    <link href="/assets/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="/assets/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10.16.6/dist/sweetalert2.all.min.js"></script>
</head>



<style>
    .card iframe {
        width: 100%
    }

    ;

    .text-shadow {
        text-shadow: 10px 11px 9px #51391f !important;
    }
</style>


<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" role="status"></div>
    </div>
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top p-0 px-4 px-lg-5 border-bottom">
        <a href="/" class="navbar-brand d-flex align-items-center">
            <h2 class="m-0 text-primary"><img class="img-fluid me-2" src="/assets/img/bilouar.png" alt=""
                    style="width: 45px;"></h2>
        </a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-4 py-lg-0">
                <a href="/" class="nav-item nav-link active">Home</a>
                <a href="/categoris" class="nav-item nav-link">Categories</a>
                <a href="/products" class="nav-item nav-link">Products</a>
                <a href="/contact" class="nav-item nav-link">Contatct Us</a>
            </div>
            <a href="{{ route('login')}} " class="btn btn-outline-primary mx-2">Login</a>
            <a href="{{ route('register')}} " class="btn btn-primary">Register</a>
        </div>
    </nav>
    <!-- Navbar End -->



    @yield('content')
    <!-- Footer Start -->
    <div class="container-fluid bg-light footer pt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-md-6">
                    <h1 class="text-primary mb-4"><img class="img-fluid me-2" src="/assets/img/bilouar.png" alt=""
                            style="width: 45px;"><span class="mt-2">BILOUAR New Coffee</span></h1>
                    <span>
                        BILOUAR New Coffee, we pride ourselves on our expertly crafted coffee blends. Our signature
                        blend features beans from Colombia and Ethiopia, resulting in a medium roast coffee with a
                        balanced flavor profile. With notes of chocolate and caramel, our coffee has a sweet aroma that
                        will tantalize your senses. The full-bodied taste of our coffee is complemented by a subtle
                        nuttiness and a smooth finish
                    </span>
                </div>
                <div class=" col-md-3">
                    <h5 class="mb-4">Quick links</h5>
                    <a class="btn btn-link" href="/">Home</a>
                    <a class="btn btn-link" href="/products">Products</a>
                    <a class="btn btn-link" href="/categories">Categories</a>
                    <a class="btn btn-link" href="/contact">Contact</a>
                </div>
                <div class="col-md-3">
                    <h5 class="mb-4">Suivez-nous</h5>
                    <div class="d-flex">
                        <a class="btn btn-square rounded-circle me-1" href="#">
                            <i class="fab fa-youtube"></i>
                        <a>
                        <a class="btn btn-square rounded-circle me-1" href="#">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                    </div>
                </div>



            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        Bilal & Anouar
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top">
        <i class="bi bi-arrow-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/lib/wow/wow.min.js"></script>
    <script src="/assets/lib/easing/easing.min.js"></script>
    <script src="/assets/lib/waypoints/waypoints.min.js"></script>
    <script src="/assets/lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="/assets/lib/counterup/counterup.min.js"></script>

    <!-- Template Javascript -->
    <script src="/assets/js/main.js"></script>


    @if(session()->has('message'))
    <script>
        Swal.fire({
            title: 'Succès!',
            text: '{{ session()->get('message') }}',
            icon: 'success',
            confirmButtonText: 'OK'
        })
    </script>
    @endif


</body>

</html>
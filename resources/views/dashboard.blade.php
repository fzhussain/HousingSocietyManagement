<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Dashboard - Housing Society</title>
    <meta content="" name="descriptison">
    <meta content="" name="keywords">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/icofont/icofont.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/venobox/venobox.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/owl.carousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/css/inner-page.css') }}">
    @livewireStyles
</head>

<body>

<div class="wrap">

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <div class="logo mr-auto">
                <h2 class="text-light" ><a href="{{ route('dashboard') }}" style="color: aliceblue;"><span>{{ Auth::user()->name }}'s Dashboard</span></a></h2>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
            </div>

            <nav class="nav-menu d-none d-lg-block">
                <ul>
                    <li><a href="#complaints">Complaints</a></li>
                    <li><a href="#fileAComplaint">File a Complaint</a></li>
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </nav><!-- .nav-menu -->

        </div>
    </header><!-- End Header -->

    <main id="main">

        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Hello, {{ Auth::user()->name }}!</h2>
                    <ol>
                        <li><a href="{{ route('home') }}">Home</a></li>
                        @if (Auth::user()->admin == 1)
                            <li><a href="{{ route('admin') }}">Go To Admin Panel</a></li>
                        @endif
                        <li>Dashboard</li>
                    </ol>
                </div>

            </div>
        </section><!-- End Breadcrumbs -->

        <section id="#" class="inner-page">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
                        <div class="card" data-aos="fade-up">

                            <div class="card-body">

                                <h5 class="card-title"><a href="">{{ Auth::user()->name }}</a></h5>
                                <p class="card-text">Address : {{ Auth::user()->soc_address }}</p>
                                <p class="card-text">Role : {{ Auth::user()->admin == 1 ? 'Secretary' : 'Residential Member' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 mt-5 mt-lg-0 d-flex align-items-stretch" >
                        <div class="card" data-aos="fade-up" data-aos-delay="300">

                            <div class="card-body">

                                <h5 class="card-title"><a href="">Notices</a></h5>
                                <livewire:notice-list />
                            </div>
                        </div>
                    </div>
                    <div id="complaints" class="col-lg-4 col-md-6 mt-5 mt-lg-0 d-flex align-items-stretch">
                        <div class="card" data-aos="fade-up" data-aos-delay="300">

                            <div class="card-body">

                                <h5 class="card-title"><a href="" >Complaints</a></h5>
                                @foreach($complaints->reverse() as $complaint)
                                    <p class="card-text"><ul><li>{{ $complaint->discription }}</li></ul></p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div  class="container contact" style="padding-bottom: 5%; padding-top: 10%;">
            <div class="section-title" data-aos="fade-down">
                <span>File a Complaint</span>
                <h2 id="fileAComplaint">File a Complaint</h2>
            </div>
            <livewire:complaint-form />
        </div>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer"></footer>



</div>


<a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


<script src="{{ asset('assets/vendor/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery.easing/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>
<script src="{{ asset('assets/vendor/jquery-sticky/jquery.sticky.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/venobox/venobox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/owl.carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js')}}"></script>
@livewireScripts
</body>

</html>

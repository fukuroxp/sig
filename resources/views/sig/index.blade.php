<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from themesbrand.com/softland/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Dec 2021 12:42:27 GMT -->
<head>
    <meta charset="utf-8" />
    <title>Softland</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Premium Bootstrap 4 Landing Page Template" />
    <meta name="keywords" content="bootstrap 4, premium, marketing, multipurpose" />
    <meta content="Themesbrand" name="author" />
    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('softlands/images/favicon.ico') }}" />
    <!-- css -->
    <link href="{{ asset('softlands/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- icon -->
    <link href="{{ asset('softlands/css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />

    <link href="{{ asset('softlands/css/style.min.css') }}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>
</head>
<style>
    #map { height: 500px; }
</style>
<body>
    <!-- STRAT NAVBAR -->
    <div id="navbar">
        <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark" id="main-menu">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo text-uppercase" href="/">
                    <img src="{{ asset('softlands/images/logo-light.png') }}" class="logo-light" alt="" height="22">
                    <img src="{{ asset('softlands/images/logo-dark.png') }}" class="logo-dark" alt="" height="22">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-center mx-auto" id="navbar-navlist">
                        <li class="nav-item">
                            <a data-scroll href="#home" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                                <a data-scroll href="#location" class="nav-link">Wisata Populer</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll href="#map" class="nav-link">Peta Surabaya</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll href="#add" class="nav-link">Tambah Lokasi</a>
                        </li>
                    </ul>
{{--                    <div class="nav-button">--}}
{{--                        <ul class="nav navbar-nav navbar-right">--}}
{{--                            <li>--}}
{{--                                <button type="button" class="btn btn-primary navbar-btn btn-rounded">Try it--}}
{{--                                    Free</button>--}}
{{--                            </li>--}}
{{--                        </ul>--}}
{{--                    </div>--}}
                </div>
            </div>
        </nav>
    </div>
    <!-- END NAVBAR -->

    <!--START HOME-->
    <section class="bg-home-2 section bg-lightan" id="home">
        <div class="bg-overlay-black"></div>
        <div class="container">

            <div class="row justify-content-center pt-5 mt-5">
                <div class="col-lg-8 text-center">
                    <h1 class="home-title text-white">Temukan Lokasi Wisata Di Surabaya</h1>
                    <p class="home-4-desc pt-4 text-white-50">Dan tambahkan lokasi wisata yang belum banyak orang tahu</p>

                    <div class="search-form mt-5">
                        <form action="#">
                            <input type="text" placeholder="Cari lokasi wisata">
                            <button type="submit" class="btn btn-primary btn-rounded">Cari</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
        </div>
    </section>

    <!--END HOME-->

    <div class="section p-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <hr>
                </div>
            </div>
        </div>
    </div>

    <!-- START SERVICES -->
    <section class="section bg-services" id="location">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-box text-center">
                        <h5 class="sub-title text-primary f-13 text-uppercase">Lokasi Wisata Populer</h5>
                        <h3 class="mt-2">Temukan Lokasi Wisatamu.</h3>
                    </div>
                </div>
            </div>

            <div class="row mt-5 pt-4">
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-xl-7">
                            <div class="mt-4 blog-img">
                                <img src="{{ asset('softlands/images/blog/img-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="blog-content mt-4">
                                <div class="d-flex">
                                    <div class="blog-lable">
                                    </div>

                                    <div class="blog-title ps-3">
                                        <h5 class="f-18">
                                            <a href="#" class="text-dark">Nama Loaksi</a>
                                        </h5>
                                    </div>
                                </div>

                                <p class="text-muted mt-2 mb-0"> Deskripsi loaksi..</p>

                                <div class="mt-2">
                                    <a href="#" class="text-primary">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-xl-7">
                            <div class="mt-4 blog-img">
                                <img src="{{ asset('softlands/images/blog/img-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="blog-content mt-4">
                                <div class="d-flex">
                                    <div class="blog-lable">
                                    </div>

                                    <div class="blog-title ps-3">
                                        <h5 class="f-18">
                                            <a href="#" class="text-dark">Nama Loaksi</a>
                                        </h5>
                                    </div>
                                </div>

                                <p class="text-muted mt-2 mb-0"> Deskripsi loaksi..</p>

                                <div class="mt-2">
                                    <a href="#" class="text-primary">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-xl-7">
                            <div class="mt-4 blog-img">
                                <img src="{{ asset('softlands/images/blog/img-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="blog-content mt-4">
                                <div class="d-flex">
                                    <div class="blog-lable">
                                    </div>

                                    <div class="blog-title ps-3">
                                        <h5 class="f-18">
                                            <a href="#" class="text-dark">Nama Loaksi</a>
                                        </h5>
                                    </div>
                                </div>

                                <p class="text-muted mt-2 mb-0"> Deskripsi loaksi..</p>

                                <div class="mt-2">
                                    <a href="#" class="text-primary">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <div class="row align-items-center">
                        <div class="col-xl-7">
                            <div class="mt-4 blog-img">
                                <img src="{{ asset('softlands/images/blog/img-1.jpg') }}" class="img-fluid" alt="">
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="blog-content mt-4">
                                <div class="d-flex">
                                    <div class="blog-lable">
                                    </div>

                                    <div class="blog-title ps-3">
                                        <h5 class="f-18">
                                            <a href="#" class="text-dark">Nama Loaksi</a>
                                        </h5>
                                    </div>
                                </div>

                                <p class="text-muted mt-2 mb-0"> Deskripsi loaksi..</p>

                                <div class="mt-2">
                                    <a href="#" class="text-primary">Read More <i class="mdi mdi-arrow-right"></i></a>
                                </div>



                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END HOW IT WORK -->

    <section class="section bg-contact pb-0 pt-5" id="map">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-box text-center">
                        <h5 class="sub-title text-primary f-13 text-uppercase">Peta</h5>
                    </div>
                </div>
            </div>
        </div>
        <div id="map"></div>
    </section>

    <!-- START CONTACT -->
    <section class="section bg-contact pb-0 pt-5" id="add">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-lg-7">
                    <div class="title-box text-center">
                        <h5 class="sub-title text-primary f-13 text-uppercase">Tambah Lokasi</h5>
                        <h3 class="mt-2">Tambhkan lokasi wisata yang kalian tahu</h3>
                        <p class="title-desc text-muted mt-3">Buat lokasi wisata yang masih sepi dan belum diketahui banyak orang jadi ramai</p>
                    </div>
                </div>
            </div>

            <div class="row contact-box">

                <div class="col-lg-12">
                    <div class="custom-form">
                        <form method="post" name="myForm" onsubmit="return validateForm()">
                            <p id="error-msg"></p>
                            <div id="simple-msg"></div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input name="name" id="name" type="text" class="form-control"
                                            placeholder="Nama">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <textarea name="comments" id="comments" rows="3" class="form-control"
                                                  placeholder="Alamat."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                            placeholder="Latitude" />
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mt-2">
                                        <input type="text" class="form-control" id="subject"
                                               placeholder="Longitude" />
                                    </div>
                                </div>
                            </div>
                            <div class="row mt-2">
                                <div class="col-lg-12 text-right">
                                    <input type="submit" id="submit" name="send"
                                        class="submitBnt btn btn-rounded btn-primary" value="Tambah">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END CONTACT -->

    <!-- START FOOTER -->
    <section class="bg-footer bg-lightan">
        <div class="container">

            <div class="row">
                <div class="col-lg-4">


                    <div class="mt-4">

                        <img src="{{ asset('softlands/images/logo-dark.png') }}" alt="" height="22">

                        <p class="text-muted mt-3 pt-1">In an ideal world this text wouldn’t exist, a client would
                            acknowledge
                            the importance of having web copy before the design starts.</p>

                        <div class="text-center footer-email mt-3">
                            <form action="#">
                                <input type="text" placeholder="Email Please">
                                <button type="submit" class="btn btn-primary">Send</button>
                            </form>
                        </div>

                        <div class="team-social mt-4">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-facebook"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-twitter"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-google"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-reset"><i class="mdi mdi-pinterest"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>


                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mt-4">
                                <h5 class="f-18">Support</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">Facebook Integration</a></li>
                                    <li><a href="#">Application</a></li>
                                    <li><a href="#">wordpress Program</a></li>
                                    <li><a href="#">Business Marketing</a></li>
                                </ul>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="mt-4 ps-0 ps-lg-5">
                                <h5 class="f-18">More Info</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Pricing</a></li>
                                    <li><a href="#">For Marketing</a></li>
                                    <li><a href="#">For CEOs</a></li>
                                    <li><a href="#">For Agencies</a></li>
                                    <li><a href="#">Our Apps</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="mt-4 ps-0 ps-lg-5">
                                <h5 class="f-18">Resources</h5>
                                <ul class="list-unstyled footer-link mt-3">
                                    <li><a href="#">Form validation</a></li>
                                    <li><a href="#">Pricacy Policy</a></li>
                                    <li><a href="#">Terms & Conditions</a></li>
                                    <li><a href="#">Design Defined</a></li>
                                    <li><a href="#">Marketplace</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>

            </div>

            <hr class="my-5">

            <div class="row">
                <div class="col-lg-12">
                    <p class="text-center text-muted mb-0 f-15">
                        2021 © Softland. Design by Themesbrand
                    </p>

                </div>

            </div>

        </div>
    </section>
    <!-- END FOOTER -->

    <!-- javascript -->
    <script src="{{ asset('softlands/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('softlands/js/smooth-scroll.polyfills.min.js') }}"></script>
    <script src="{{ asset('softlands/js/gumshoe.polyfills.min.js') }}"></script>
    <!-- unicons icon -->
    <script src="{{ asset('softlands/js/unicons.js') }}"></script>
    <!-- Contact Form  -->
    <script src="{{ asset('softlands/js/app.js') }}"></script>
<script>
    var map = L.map('map').setView([-7.250445, 112.768845], 13);

    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiZnVrdXJveHAiLCJhIjoiY2t4ZTYyeXh6M216eTJvcG16N2VjZDdpYSJ9.tye0SD-jTt_c714GMe_LcQ'
    }).addTo(map);
</script>
</body>


<!-- Mirrored from themesbrand.com/softland/layout/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 13 Dec 2021 12:42:33 GMT -->
</html>

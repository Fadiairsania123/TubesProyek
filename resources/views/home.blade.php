<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Top Food</title>

        <!-- CSS FILES -->
        <link rel="preconnect" href="https://fonts.googleapis.com">

        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-clean-work.css" rel="stylesheet">


    </head>

    <body>

        <header class="site-header">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex flex-wrap">
                        <p class="d-flex me-4 mb-0">
                            <i class="bi-house-fill me-2"></i>
                            Top Food
                        </p>

                        <p class="d-flex d-lg-block d-md-block d-none me-4 mb-0">
                            <i class="bi-clock-fill me-2"></i>
                            <strong class="me-2">Mon - Fri</strong> 8:00 AM - 5:30 PM
                        </p>
                        <form class="form-inline my-2 my-lg-0">
                            <input class="form-control form-control-sm" type="text" placeholder="masukkan alamat mu">
                          </form>
                        <p class="site-header-icon-wrap text-white d-flex mb-0 ms-auto">
                            <i class="site-header-icon bi-whatsapp me-2"></i>

                            <a href="tel: 0831-7649-7537" class="text-white">
                                0831-7649-7537
                            </a>
                        </p>
                    </div>

                </div>
            </div>
        </header>

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="index.html">
                    <img src="images/newlogo.png" class="logo img-fluid" alt="">

                    <span class="ms-2">TOP FOOD</span>
                </a>

                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item">
                            <a class="nav-link active" href="home">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about">About Us</a>
                        </li>

                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="services.html">Order</a></li>

                                <li><a class="dropdown-item" href="coming-soon.html">History</a></li>


                            </ul>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="contact">Contact</a>
                        </li>

                        <li class="nav-item ms-3 dropdown">
                            @if (Auth::user())
                            <a class="nav-link dropdown-toggle custom-btn custom-border-btn custom-btn-bg-white btn" >{{ Auth::user()->name }}</a>
                            <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                                <li><a class="dropdown-item" href="{{ route('logout') }}">Logout</a></li>
                            </ul>
                            @else
                            <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="{{route('login')}}">Login</a>
                            @endif
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <main>

            <section class="hero-section hero-section-full-height d-flex justify-content-center align-items-center">
                <div class=""></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-7 col-12 text-center mx-auto">
                            <h1 class="cd-headline rotate-1 text-white mb-4 pb-2">
                                <span>Beli apa ?</span>
                                <span class="cd-words-wrapper">
                                    <b class="is-visible">Makan</b>
                                    <b>Minum</b>
                                    <b>Snack</b>
                                </span>
                            </h1>

                            <a class="custom-btn btn button button--atlas smoothscroll me-3" href="#intro-section">
                                <span>Introduction</span>

                                <div class="marquee" aria-hidden="true">
                                    <div class="marquee__inner">
                                        <span>Introduction</span>
                                        <span>Introduction</span>
                                        <span>Introduction</span>
                                    </div>
                                </div>
                            </a>

                            <a class="custom-btn custom-border-btn custom-btn-bg-white btn button button--pan smoothscroll" href="#services-section">
                                <span>Explore Restaurant</span>
                            </a>
                        </div>

                    </div>
                </div>

                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 320"><path fill="#f0f8ff" fill-opacity="1" d="M0,224L40,229.3C80,235,160,245,240,250.7C320,256,400,256,480,240C560,224,640,192,720,176C800,160,880,160,960,138.7C1040,117,1120,75,1200,80C1280,85,1360,139,1400,165.3L1440,192L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z"></path></svg>
            </section>


    <!-- Resto -->
            <section class="services-section section-padding section-bg" id="services-section">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="mb-3">Mau Pilih Resto Apa?</h2> <br>
                        </div>

                        @foreach ($data as $item)

                        <div class="col-lg-6 col-12">
                            <div class="services-thumb">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-12">
                                        <div class="services-image-wrap">
                                            <a href="services-detail.html">
                                                <img src="{{ asset('resto/'.$item->image) }}" class="services-image img-fluid" alt="">

                                                {{-- <div class="services-icon-wrap">
                                                    <div class="d-flex justify-content-between align-items-center">
                                                        <p class="text-white mb-0">
                                                            <i class="bi-cash me-2"></i>
                                                            Promo
                                                        </p>

                                                        <p class="text-white mb-0">
                                                            <i class="bi-clock-fill me-2"></i>
                                                            20 mnt
                                                        </p>
                                                    </div>
                                                </div> --}}
                                            </a>
                                        </div>
                                    </div>

                                    <div class="col-lg-7 col-md-7 col-12 d-flex align-items-center">
                                        <div class="services-info mt-4 mt-lg-0 mt-md-0">
                                            <h5 class="services-title mb-1 mb-lg-2">
                                                <a class="services-title-link" href="services-detail.html">{{ $item->nama }}</a>
                                            </h5>

                                            <p>{{ $item->deskripsi }}</p>

                                            <div class="d-flex flex-wrap align-items-center">
                                                <div class="reviews-icons">
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star-fill"></i>
                                                    <i class="bi-star"></i>
                                                </div>

                                            </div>
                                            <a href="{{ route('detail',$item->id) }}" class="custom-btn btn button button--atlas mt-2 ms-auto">
                                                <span>Detail Resto</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>
            </section>

<!--ulasan-->
            <section class="testimonial-section section-padding section-bg">
                <div class="section-overlay"></div>

                <div class="container">
                    <div class="row">

                        <div class="col-lg-12 col-12 text-center">
                            <h2 class="text-white mb-4">Hot Deals Food!</h2>
                        </div>
                        <section class="partners-section">
                            <div class="container">
                                <div class="row justify-content-center align-items-center">

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food1.jpg" class="team-image img-fluid"><br>
                                        <p>Indonesia</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food2.jpg" class="team-image img-fluid"><br>
                                        <p>Jepang</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food3.jpg" class="team-image img-fluid"><br>
                                        <p>Korea</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food1.jpg" class="team-image img-fluid"><br>
                                        <p>China</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food2.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food3.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div> <br>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food1.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food2.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food3.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food1.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food2.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div>

                                    <div class="col-lg-2 col-md-5 col-8 mb-lg-0 mb-md-4">
                                        <img src="images/about/food1.jpg" class="team-image img-fluid"><br>
                                        <p>India</p>
                                    </div>
                                </div>
                            </div>
                        </section>





                            </div>
                        </div>

                    </div>
                </div>
            </section>

<!--kenapa-->
<section class="intro-section" id="intro-section">
                <div class="container">
                    <div class="row justify-content-lg-center align-items-center">

                        <div class="col-lg-6 col-12">
                            <h2 class="mb-4">Kenapa Harus TopFood ?</h2>

                            <p><b>Paling Cepat</b> -- Layanan antar makanan TopFood adalah yang tercepat dari semua layanan yang ada. </p>
                            <p><b>Banyak Pilihan Menu</b> --  Mulai dari menu makanan berat hingga makanan ringan, kami sediakan untuk memuaskan rasa lapar Anda.</p>
                            <p><b>Kemudahan Transaksi</b> --  Memesan makanan sekarang menjadi sangat mudah. Pembayaran juga bahkan lebih mudah lagi dengan adanya TopPay.</p>
                        </div>

                        <div class="col-lg-6 col-12 custom-block-wrap">
                            <img src="images/kurir1.jpg" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

<!--footer -->
        <footer class="site-footer">
            <div class="container">
                <div class="row">

                    <div class="col-lg-12 col-12 d-flex align-items-center mb-4 pb-2">
                        <div>
                            <img src="images/newlogo.png" class="logo img-fluid" alt="">
                        </div>

                        <ul class="footer-menu d-flex flex-wrap ms-5">
                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">About Us</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Reviews</a></li>

                            <li class="footer-menu-item"><a href="#" class="footer-menu-link">Contact</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                        <h5 class="site-footer-title mb-3">Pilihan</h5>

                        <ul class="footer-menu">
                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Drinks
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Snack
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Food
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Restaurant
                                </a>
                            </li>

                            <li class="footer-menu-item">
                                <a href="#" class="footer-menu-link">
                                    <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                                    Restaurant
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                        <h5 class="site-footer-title mb-3">Office</h5>

                        <p class="text-white d-flex mt-3 mb-2">
                            <i class="bi-geo-alt-fill me-2"></i>
                            Malang, Jawa Timur, Indonesia
                        </p>

                        <p class="text-white d-flex mb-2">
                            <i class="bi-telephone-fill me-2"></i>

                            <a href="tel: 110-220-9800" class="site-footer-link">
                                0831-7649-7537
                            </a>
                        </p>

                        <p class="text-white d-flex">
                            <i class="bi-envelope-fill me-2"></i>

                            <a href="mailto:info@company.com" class="site-footer-link">
                                TopFood@gmail.com
                            </a>
                        </p>

                        <ul class="social-icon mt-4">
                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-twitter"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-facebook"></span>
                                </a>
                            </li>

                            <li class="social-icon-item">
                                <a href="#" class="social-icon-link button button--skoll">
                                    <span></span>
                                    <span class="bi-instagram"></span>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                        <div class="featured-block">
                            <h5 class="text-white mb-3">Service Admin</h5>

                            <strong class="d-block text-white mb-1">Mon - Fri</strong>

                            <p class="text-white mb-3">8:00 AM - 5:30 PM</p>

                            <strong class="d-block text-white mb-1">Sat</strong>

                            <p class="text-white mb-0">6:00 AM - 2:30 PM</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="site-footer-bottom">
                <div class="container">
                    <div class="row">

                        <div class="col-lg-6 col-12">
                            <p class="copyright-text mb-0">Copyright © Top Food East 2023</p>
                        </div>

                        <div class="col-lg-6 col-12 text-end">
                            <p class="copyright-text mb-0">
                            // Designed by Kelompok 5 //</p>
                        </div>

                    </div>
                </div>
            </div>
        </footer>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/jquery.backstretch.min.js"></script>
        <script src="js/counter.js"></script>
        <script src="js/countdown.js"></script>
        <script src="js/init.js"></script>
        <script src="js/modernizr.js"></script>
        <script src="js/animated-headline.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>

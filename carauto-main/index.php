<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>SpeedX - Auto Collision Center</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="" name="keywords" />
    <meta content="" name="description" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon" />

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
        rel="stylesheet" />

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet" />

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Topbar Start -->
    <div class="container-fluid bg-light p-0">
        <div class="row` gx-0 d-none d-lg-flex">
            <div class="col-lg-7 px-5 text-start">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-map-marker-alt text-primary me-2"></small>
                    <small class="phone">181 Rutherford Road S Unit-11 Brampton, ON, L6W 3P4</small>
                </div>
                <!-- <div class="h-100 d-inline-flex align-items-center py-3">
                    <small class="far fa-clock text-primary me-2"></small>
                    <small>Mon - Fri : 09.00 AM - 09.00 PM</small>
                </div> -->
            </div>
            <div class="col-lg-5 px-5 text-end">
                <div class="h-100 d-inline-flex align-items-center py-3 me-4">
                    <small class="fa fa-phone-alt text-primary me-2"></small>
                    <small class="phone">416 277 9221</small>
                </div>
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-white text-primary me-1"
                        href="https://www.facebook.com/share/18kcemgUj2/" target="_blank"><i
                            class="fab fa-facebook-f"></i></a>
                    <!-- <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-twitter"></i></a> -->
                    <a class="btn btn-sm-square bg-white text-primary me-1"
                        href="https://www.tiktok.com/discover/speedx-auto-collision-brampton" target="_blank">
                        <i class="bi bi-tiktok"></i>
                    </a>
                    <a class="btn btn-sm-square bg-white text-primary me-0"
                        href="https://www.instagram.com/speedx_auto_collision?igsh=eTh4MHF2OTRqbW94" target="_blank">
                        <i class="fab fa-instagram"></i></a><i class="fa-brands fa-tiktok"></i>


                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5 ">

            <!-- <h2 class="m-0 text-primary"><i class="fa fa-car me-3"></i>CarServ</h2> -->

            <div class="logo">
                <img src="img/garage_latest.png" alt="speedx" class="img">
            </div>

        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.php" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About Us</a>
                <a href="service.html" class="nav-item nav-link">Our Services</a>
                <a href="contact.html" class="nav-item nav-link">Contact Us</a>
            </div>
            <a href="https://pixlbyte.info/index.php#booking" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Get
                A
                Quote<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5">
        <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/img104.jpeg" alt="Image" />
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">

                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">
                                        Auto Body Collision Center
                                    </h1>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <!-- <img class="img-fluid" src="img/carousel-.png" alt="" /> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/img100.jpeg" alt="Image" />
                    <div class="carousel-caption d-flex align-items-center">
                        <div class="container">
                            <div class="row align-items-center justify-content-center justify-content-lg-start">
                                <div class="col-10 col-lg-7 text-center text-lg-start">

                                    <h1 class="display-3 text-white mb-4 pb-3 animated slideInDown">
                                        Quality is Perfection </h1>
                                    <a href="https://pixlbyte.info/service.html"
                                        class="btn btn-primary py-3 px-5 animated slideInDown">Learn More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                                <div class="col-lg-5 d-none d-lg-flex animated zoomIn">
                                    <!-- <img class="img-fluid" src="img/carousel-2.png" alt="" /> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->
    <!-- //*************************************** -->




    <!-- Service Start -->
    <!-- <div class="container-xxl service py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="text-primary text-uppercase">// Our Services //</h6>
                <h1 class="mb-5">Explore Our Services</h1>
            </div>
            <div class="row g-4 wow fadeInUp" data-wow-delay="0.3s">
                <div class="col-lg-4">
                    <div class="nav w-100 nav-pills me-4">
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4 active"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-1" type="button">
                            <i class="fa fa-car-side fa-2x me-3"></i>
                            <h4 class="m-0">Collision Repair</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-2" type="button">
                            <i class="fa fa-car fa-2x me-3"></i>
                            <h4 class="m-0">Automobile Paint</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-4"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-3" type="button">
                            <i class="fa fa-cog fa-2x me-3"></i>
                            <h4 class="m-0">Auto Glass Repair</h4>
                        </button>
                        <button class="nav-link w-100 d-flex align-items-center text-start p-4 mb-0"
                            data-bs-toggle="pill" data-bs-target="#tab-pane-4" type="button">
                            <i class="fa fa-truck-pickup fa-2x me-3"></i>
                            <h4 class="m-0">Towing Service</h4>
                        </button>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="tab-content w-100">
                        <div class="tab-pane fade show active" id="tab-pane-1">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/service-1.jpg"
                                            style="object-fit: cover" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">
                                        15 Years Of Experience In Auto Servicing
                                    </h3>
                                    <p class="mb-4">
                                        We understand the whirlwind of emotions, stress, and uncertainty that follows an
                                        accident. That’s why we’ve tailored our services to offer more than just
                                        repairs. We aim to provide peace of mind, transparency, and a hassle-free
                                        experience from start to finish.
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Quality
                                        Servicing
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Expert
                                        Workers
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Modern
                                        Equipment
                                    </p>
                                    <a href="http://localhost:90/git/carauto-main/service.html"
                                        class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-2">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/img1.png"
                                            style="object-fit: cover" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">
                                        15 Years Of Experience In Auto Servicing
                                    </h3>
                                    <p class="mb-4">
                                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                                        lorem et sit, sed stet lorem sit clita duo justo magna
                                        dolore erat amet
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Quality
                                        Servicing
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Expert
                                        Workers
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Modern
                                        Equipment
                                    </p>
                                    <a href="http://localhost:90/git/carauto-main/service.html"
                                        class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-3">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px">
                                    <div class="position-relative h-100">
                                        <img class="position-absolute img-fluid w-100 h-100" src="img/img_glass.jpeg"
                                            style="object-fit: cover" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">
                                        15 Years Of Experience In Auto Servicing
                                    </h3>
                                    <p class="mb-4">
                                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                                        lorem et sit, sed stet lorem sit clita duo justo magna
                                        dolore erat amet
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Quality
                                        Servicing
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Expert
                                        Workers
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Modern
                                        Equipment
                                    </p>
                                    <a href="http://localhost:90/git/carauto-main/service.html"
                                        class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-pane-4">
                            <div class="row g-4">
                                <div class="col-md-6" style="min-height: 350px">
                                    <div class=" img-div position-relative h-100">
                                        <img class="img-fluid w-100 h-100" src="img/img_tow.jpeg" alt="" />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <h3 class="mb-3">
                                        15 Years Of Experience In Auto Servicing
                                    </h3>
                                    <p class="mb-4">
                                        Tempor erat elitr rebum at clita. Diam dolor diam ipsum
                                        sit. Aliqu diam amet diam et eos. Clita erat ipsum et
                                        lorem et sit, sed stet lorem sit clita duo justo magna
                                        dolore erat amet
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Quality
                                        Servicing
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Expert
                                        Workers
                                    </p>
                                    <p>
                                        <i class="fa fa-check text-success me-3"></i>Modern
                                        Equipment
                                    </p>
                                    <a href="http://localhost:90/git/carauto-main/service.html"
                                        class="btn btn-primary py-3 px-5 mt-3">Read More<i
                                            class="fa fa-arrow-right ms-3"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Service End -->

    <!-- ******************************************* -->

    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 pt-4" style="min-height: 400px">
                    <div class="position-relative h-100 wow fadeIn" data-wow-delay="0.1s">
                        <img class="position-absolute img-fluid w-100 h-100" src="img/img102.jpeg"
                            style="object-fit: cover" alt="" />
                        <div class="position-absolute top-0 end-0 mt-n4 me-n4 py-4 px-5"
                            style="background: rgba(0, 0, 0, 0.08)">
                            <h1 class="display-4 text-white mb-0">
                                15 <span class="fs-4">Years</span>
                            </h1>
                            <h4 class="text-white">Experience</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <h1 class="mb-4">
                        <span class="text-primary">SpeedX</span> Is The Best Place For
                        Your Auto Care
                    </h1>
                    <p class="mb-4">
                        SpeedX is the ultimate destination for all your auto care needs, offering top-notch services,
                        skilled technicians, premium parts, and outstanding customer service to ensure your vehicle
                        stays in perfect condition, safe, and running smoothly on every journey you take.
                    </p>
                    <div class="row g-4 mb-3 pb-3">
                        <div class="col-12 wow fadeIn" data-wow-delay="0.1s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px">
                                    <span class="fw-bold text-secondary">01</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Professional & Expert</h6>
                                    <span>Our team is professional and expert in delivering quality service.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.3s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px">
                                    <span class="fw-bold text-secondary">02</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Quality Servicing Center</h6>
                                    <span>We are your trusted, reliable, and quality servicing center always.</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                            <div class="d-flex">
                                <div class="bg-light d-flex flex-shrink-0 align-items-center justify-content-center mt-1"
                                    style="width: 45px; height: 45px">
                                    <span class="fw-bold text-secondary">03</span>
                                </div>
                                <div class="ps-3">
                                    <h6>Awards Winning Workers</h6>
                                    <span>Our award-winning workers deliver exceptional service with skill and
                                        dedication.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="https://pixlbyte.info/about.html" class="btn btn-primary py-3 px-5">Read
                        More<i class="fa fa-arrow-right ms-3"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Fact Start -->
    <!-- <div class="container-fluid fact bg-dark my-5 py-5">
      <div class="container">
        <div class="row g-4">
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.1s"
          >
            <i class="fa fa-check fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Years Experience</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.3s"
          >
            <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Expert Technicians</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.5s"
          >
            <i class="fa fa-users fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Satisfied Clients</p>
          </div>
          <div
            class="col-md-6 col-lg-3 text-center wow fadeIn"
            data-wow-delay="0.7s"
          >
            <i class="fa fa-car fa-2x text-white mb-3"></i>
            <h2 class="text-white mb-2" data-toggle="counter-up">1234</h2>
            <p class="text-white mb-0">Compleate Projects</p>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Fact End -->



    <div id="slideshow">

        <div class="text-center">
            <h1 class="mb-5">Our Work!</h1>
        </div>

        <div class="slideshow-container">

            <div class="mySlides div1">
                <img src="./attachments/IMG-20250406-WA0000.jpg" alt="">
            </div>

            <div class="mySlides div2">
                <img src="./attachments/IMG-20250406-WA0001.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0002.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0003.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0004.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0005.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0006.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0007.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0008.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0009.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0010.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0011.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0012.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0013.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0014.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0015.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0016.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0017.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0018.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0019.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0020.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0021.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0022.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0023.jpg" alt="">

            </div>

            <div class="mySlides div3">
                <img src="./attachments/IMG-20250406-WA0024.jpg" alt="">

            </div>

            <a onclick="plusSlides(-1)" class="prev">
                <i class="slider-btn">&#10094</i>
            </a>
            <a onclick=" plusSlides(1)" class="next"><i class="slider-btn">&#10095</i></a>


        </div>


    </div>







    <!-- Booking Start -->
    <div id=" booking" class="container-fluid bg-secondary booking my-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row gx-5">
                <div class="col-lg-6 py-5">
                    <div class="py-5">
                        <h1 class="text-white mb-4">
                            Certified and Award Winning Car Repair Service Provider
                        </h1>
                        <p class="text-white mb-0">
                            Looking for reliable collision repair nearby? Your search ends here. SpeedXin Brampton is
                            known for outstanding service and trusted reviews, making us the preferred choice for all
                            your auto repair needs—from minor dent fixes to detailed accident repair estimates. Our
                            expert frame repair technicians are ready to help.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bg-primary h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn"
                        data-wow-delay="0.6s">
                        <h1 class="text-white mb-4">Book For A Service</h1>
                        <form action="send.php" method="POST" enctype="multipart/form-data">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="name" id="name" required class="form-control border-0"
                                        placeholder="Your Name" style="height: 55px" />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="email" name="email" id="email" class="form-control border-0"
                                        placeholder="Your Email" style="height: 55px" />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="tel" name="tel" id="tel" maxlength="14" required
                                        class="form-control border-0" placeholder="Your Phone Number"
                                        style="height: 55px" />
                                </div>
                                <div class="col-12 col-sm-6">
                                    <input type="text" name="vehicle" id="vehicle" required
                                        class="form-control border-0" placeholder="Vehicles's Make and Model"
                                        style="height: 55px" />
                                </div>

                                <div class="col-12">
                                    <input type="file" id="image" name="image" class="form-control border-0"
                                        placeholder="Special Request"></input>
                                </div>

                                <div class="col-12 txtarea">
                                    <textarea name="message" id="message" class="form-control" style="height: 100px;"
                                        placeholder="Message"></textarea>
                                </div>

                                <div class=" col-12">
                                    <label id="file-label" for="image">
                                        <i class="icon-upload fa fa-upload me-1"></i>
                                        Upload Picture
                                    </label>

                                </div>

                                <div class=" col-12">
                                    <button class="btn btn-secondary w-100 py-3" id="btnSubmit" name="submitContact"
                                        type="submit">
                                        Book Now
                                    </button>
                                </div>

                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>
    <!-- Booking End -->

    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h1 class="mb-5">Our Expert Technicians</h1>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6  fadeInUp" data-wow-delay="0.1s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/img100.jpg" alt="m1" />
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/img100.jpg" alt="m1" />
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/img100.jpg" alt="m1" />
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="team-item">
                        <div class="position-relative overflow-hidden">
                            <img class="img-fluid" src="img/img100.jpg" alt="m1" />
                            <div class="team-overlay position-absolute start-0 top-0 w-100 h-100">
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-square mx-1" href=""><i class="fab fa-instagram"></i></a>
                            </div>
                        </div>
                        <div class="bg-light text-center p-4">
                            <h5 class="fw-bold mb-0">Full Name</h5>
                            <small>Designation</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Team End -->

    <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h1 class="mb-5">Our Clients Say!</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <div class="testimonial-item text-center">
                    <!-- <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-1.jpg"
                        style="width: 80px; height: 80px" /> -->
                    <h5 class="mb-2">Harjas Kaile</h5>
                    <!-- <p>Profession</p> -->
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">
                            "I took my RAM 1500 in for bodywork after getting rear ended, and the experience was great.
                            The team took care of everything, including the insurance paperwork, which made the whole
                            process easy and stress free for me."
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!-- <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px" /> -->
                    <h5 class="mb-2">Taranveer Gosal</h5>
                    <!-- <p>Profession</p> -->
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">
                            "I had my 2020 Honda CR-V repaired after a major collision, and the experience was
                            outstanding. They handled everything seamlessly, from 24/7 towing to working directly with
                            insurance companies, making a stressful situation incredibly easy."
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!-- <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px" /> -->
                    <h5 class="mb-2">Ravinder Randhawa</h5>
                    <!-- <p>Profession</p> -->
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">
                            I got my 2024 honda crv repaired from SpeedX auto collision , service is beyond imagination
                            very reasonable and professional service highly recommended if u got into accident or any
                            kind of body repair.
                        </p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <!-- <img class="bg-light rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px" /> -->
                    <h5 class="mb-2">Abhishek Saini</h5>
                    <!-- <p>Profession</p> -->
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">
                            I repaired jetta dent.
                            They worked very goods even their behaviour was so good with clients.
                            I recommend to all that visit to get your car repaired y certified technician.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2">
                        <i class="fa fa-map-marker-alt me-3"></i>181 Rutherford Road S Unit-11 Brampton, ON, L6W 3P4
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-phone-alt me-3"></i>+416 277 9221
                    </p>
                    <p class="mb-2">
                        <i class="fa fa-envelope me-3"></i>speedxautocollision@gmail.com
                    </p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-outline-light btn-social" href="https://www.facebook.com/share/18kcemgUj2/"
                            target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.tiktok.com/discover/speedx-auto-collision-brampton" target="_blank"><i
                                class="bi bi-tiktok"></i></a>
                        <a class="btn btn-outline-light btn-social"
                            href="https://www.instagram.com/speedx_auto_collision?igsh=eTh4MHF2OTRqbW94"
                            target="_blank"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Opening Hours</h4>
                    <h6 class="text-light">Monday - Friday:</h6>
                    <p class="mb-2">09.00 AM - 07.00 PM</p>
                    <h6 class="text-light">Saturday:</h6>
                    <p class="mb-2">09.00 AM - 05.00 PM</p>
                    <h6 class="text-light">Sunday:</h6>
                    <p class="mb-0">10.00 AM - 05.00 PM</p>
                </div>
                <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Services</h4>
                    <p class="">Collision Repair</p>
                    <p class="" href="">Automobile Paint</p>
                    <p class="" href="">Auto Glass Repair</p>
                    <p class="" href="">Car Washing</p>
                    <p class="" href="">Towing Service</p>
                </div>
                <!-- <div class="col-lg-4 col-md-6">
                    <h4 class="text-light mb-4">Newsletter</h4>
                    <p>Dolor amet sit justo amet elitr clita ipsum elitr est.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text"
                            placeholder="Your email" />
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">
                            SignUp
                        </button>
                    </div>
                </div> -->
            </div>
        </div>

    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>




    <!-- Template Javascript -->
    <script src="js/main.js"></script>

    <script>
    var msgTxt =
        "<?= $_SESSION['status'] ?? ''; ?>";

    if (msgTxt != '') {
        Swal.fire({
            title: 'Thank You!',
            text: msgTxt,
            icon: 'success',
            confirmButtonText: 'Back to Website !'
        });
        <?php unset($_SESSION['status']) ?>
    }
    </script>
</body>

</html>
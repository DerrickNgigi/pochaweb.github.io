<!DOCTYPE html>
<html lang="en">

<head>
    <title>Pocha254</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--  Essential META Tags -->

<meta property="og:title" content="Pocha254 Restaurant">
<meta property="og:description" content="Japanese Meals.">
<meta property="og:image" content="http://pochakenya.com">
<meta property="og:url" content="http://pochakenya.com">
<meta name="twitter:card" content="Pocha254">


<!--  Non-Essential, But Recommended -->

<meta property="og:site_name" content="Pocha254 Restaurant.">
<meta name="twitter:image:alt" content="Alt text for image">


<!--  Non-Essential, But Required for Analytics -->

<meta property="fb:app_id" content="your_app_id" />
<meta name="twitter:site" content="@website-username">

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Monoton&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Miss+Fajardose&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">


    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
<div class="py-1 bg-black top">
    <div class="container">
        <div class="row no-gutters d-flex align-items-start align-items-center px-md-0">
            <div class="col-lg-12 d-block">
                <div class="row d-flex">
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-phone2"></span></div>
                        <span class="text"></span>
                    </div>
                    <div class="col-md pr-4 d-flex topper align-items-center">
                        <div class="icon mr-2 d-flex justify-content-center align-items-center"><span
                                class="icon-paper-plane"></span></div>
                        <span class="text">info@pochakenya.com</span>
                    </div>
                    <div class="col-md-5 pr-4 d-flex topper align-items-center text-lg-right justify-content-end">
                        <p class="mb-0 register-link"><span>Open hours:</span> <span>Monday - Sunday</span>
                            <span>11:00AM - 9:00PM</span></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="{{''}}">Pocha254</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item {{ request()->is('/') ? 'active' : '' }}"><a href={{'/'}} class="nav-link">Home</a></li>
                <li class="nav-item {{ request()->is('about') ? 'active' : '' }}"><a href={{"/about"}} class="nav-link">About</a></li>
                <li class="nav-item {{ request()->is('menu') ? 'active' : '' }}"><a href={{'/menu'}} class="nav-link">Menu</a></li>
                <!-- <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li> -->
                <li class="nav-item {{ request()->is('contact') ? 'active' : '' }}"><a href={{'/contact'}} class="nav-link">Contact</a></li>
                <li class="nav-item cta"><a href={{'/reservation'}} class="nav-link">Reservation</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- END nav -->

@yield ('content')

<footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container-fluid px-md-5 px-3">
        <div class="row mb-5">
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Pocha</h2>
                    <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia,
                        there live the blind texts.</p>
                    <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                        <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Open Hours</h2>
                    <ul class="list-unstyled open-hours">
                        <li class="d-flex"><span>Monday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Tuesday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Wednesday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Thursday</span><span>9:00 - 24:00</span></li>
                        <li class="d-flex"><span>Friday</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex"><span>Saturday</span><span>9:00 - 02:00</span></li>
                        <li class="d-flex"><span>Sunday</span><span> 9:00 - 02:00</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Newsletter</h2>
                    <p>Far far away, behind the word mountains, far from the countries.</p>

                </div>
            </div>
            <div class="col-md-6 col-lg-3">
                <div class="ftco-footer-widget mb-4">
                    <h2 class="ftco-heading-2">Instagram</h2>
                    <div class="thumb d-sm-flex">
                        <a href="#" class="thumb-menu img" style="background-image: url(images/insta-1.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(images/insta-2.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(images/insta-3.jpg);">
                        </a>
                    </div>
                    <div class="thumb d-flex">
                        <a href="#" class="thumb-menu img" style="background-image: url(images/insta-4.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(images/insta-5.jpg);">
                        </a>
                        <a href="#" class="thumb-menu img" style="background-image: url(images/insta-6.jpg);">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 text-center">

                <p>
                    Copyright &copy;<script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved 
                </p>
            </div>
        </div>
    </div>
</footer>


<!-- loader -->
<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
        <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
        <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10"
                stroke="#F96D00" /></svg></div>


<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/jquery.timepicker.min.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

</body>

</html>
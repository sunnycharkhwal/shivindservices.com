<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>shivind services</title>
    <!-- bootstrap@5.0.0 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <!-- bootstrap@5.0.0 end-->
    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/70652ddcd3.js" crossorigin="anonymous"></script>
    <!-- fontawesome end -->
    <!-- my css -->
    <link rel="stylesheet" href="scss/index.css">
    <link rel="stylesheet" href="scss/res.css">
    <!-- my css end-->
</head>

<body>
    <div class="top_nav_main_div d-none d-xxl-block d-xl-block d-lg-block">
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-8 col-sm-12 col-12">
                <div class="top_nav_main_div_left">
                    <a href="mailto: abc@example.com"><i class="far fa-envelope"></i> <span>abc@example.com</span></a>
                    <p><i class="far fa-clock"></i> <span>open hours: mon - fri 8:00 <span>am</span> - 6:00 <span>
                                pm</span> </span></p>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-4 col-sm-12 col-12">
                <div class="top_nav_main_div_right">
                    <a href="tel:+4733378901"><i class="fas fa-phone"></i> <span>+4733378901</span></a>
                    <div class="top_nav_main_div_right_inner">
                        <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></span></a>
                        <a href="#" target="_blank"><i class="fab fa-twitter"></i></span></a>
                        <a href="#" target="_blank"><i class="fab fa-instagram"></i></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <span class="screen-darken"></span>
    <button data-trigger="navbar_main" class="d-lg-none btn btn-warning" type="button"> Show navbar </button>


    <!-- ============= COMPONENT ============== -->
    <nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <div class="offcanvas-header">
                <button class="btn-close float-end"></button>
            </div>
            <a class="navbar-brand" href="#">Logo</a>

            <ul class="navbar-nav" id="myDIV">
                <li class="nav-item "> <a class="nav-link" href="#">home </a> </li>
                <li class="nav-item "> <a class="nav-link" href="#">about us </a> </li>
                <li class="nav-item "> <a class="nav-link" href="#">contact us </a> </li>
                <li class="nav-item"><a class="nav-link" href="#"> Products
                        Services </a></li>
                <li class="nav-item"><a class="nav-link" href="#"> Professional Services </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Electric Charging Solution
                    </a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="#"> EV-Chargers</a></li>
                        <li><a class="dropdown-item" href="#">EV-Charger-Franchise</a></li>
                        <li><a class="dropdown-item" href="#"> Smart IOT & Telematics </a></li>
                    </ul>
                </li>

            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Demo</a></li>
            </ul>

        </div> <!-- container-fluid.// -->
    </nav>
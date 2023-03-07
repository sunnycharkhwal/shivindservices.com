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
    <div class="top_nav_main_div">
        <div class="row">
            <div class="col-6">
                <div>
                    <a href="mailto: abc@example.com"><i class="far fa-envelope"></i> abc@example.com</a>
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

            <ul class="navbar-nav">
                <li class="nav-item active"> <a class="nav-link" href="#">Demo </a> </li>
                <li class="nav-item"><a class="nav-link" href="#"> Demo </a></li>
                <li class="nav-item"><a class="nav-link" href="#"> Demo </a></li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> dropdown Hover me </a>
                    <ul class="dropdown-menu fade-up">
                        <li><a class="dropdown-item" href="#"> Demo item 1</a></li>
                        <li><a class="dropdown-item" href="#"> Demo item 2 </a></li>
                        <li><a class="dropdown-item" href="#"> Demo item 3 </a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">Demo</a></li>
            </ul>

        </div> <!-- container-fluid.// -->
    </nav>
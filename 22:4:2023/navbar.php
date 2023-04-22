<span class="screen-darken"></span>
<div class="d-lg-none">
    <div class="mobile_menu_div_top">
        <div class="row m-0">
            <div class="col-6"><img class="logo_mobile" src="img/logo.webp" alt="logo"></div>
            <div class="col-6 mobile_menu_div">
                <i class="fas fa-bars" data-trigger="navbar_main"></i>
            </div>
        </div>
    </div>
</div>

<!-- ============= COMPONENT ============== -->
<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg my_navbar">
    <div class="container-fluid">
        <div class="offcanvas-header">
            <button class="btn-close float-end"></button>
        </div>
        <a class="navbar-brand" href="/">
            <img class="logo" src="img/logo.webp" alt="logo">
        </a>

        <ul class="navbar-nav" id="myDIV">
            <li
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'nav_active' : 'nav-item my_nav_item'; ?>">
                <a class="nav-link" href="/">home </a>
            </li>
            <li
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'aboutus.php' ? 'nav_active' : 'nav-item my_nav_item'; ?>">
                <a class="nav-link" href="aboutus">about us </a>
            </li>
            <li
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'nav_active' : 'nav-item my_nav_item'; ?>">
                <a class="nav-link" href="contactus">contact us </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Products
                </a>
                <ul class="dropdown-menu fade-up">
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="index#it">
                            IT &amp; Non-IT Supplies</a></li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="ev_chargers">
                            EV-Chargers</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">E-Mobility
                </a>
                <ul class="dropdown-menu fade-up">
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="muver">
                            Muver</a></li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="hauler">
                            Hauler</a></li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="lftea">
                            LFTea</a></li>
                </ul>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services
                </a>
                <ul class="dropdown-menu fade-up">
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="index#ifm">Integrated
                            Facility
                            Management
                            Services</a></li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item"
                            href="index#consultancy">Professional
                            Consultancy
                            Services</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Electric Charging Solution
                </a>
                <ul class="dropdown-menu fade-up">


                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item"
                            href="ev_charger_franchise">EV-Charger-Franchisee</a>
                    </li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="smart_lot_telematics">
                            Smart IOT & Telematics
                        </a></li>

                </ul>
            </li>

        </ul>
        <ul class="navbar-nav ms-auto right_nav">
            <li class="nav-item"><a class="btn let_talk_btn" href="tel:+91 8980022288">let's Talk</a></li>
        </ul>

    </div> <!-- container-fluid.// -->
</nav>
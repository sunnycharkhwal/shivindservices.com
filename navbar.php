<span class="screen-darken"></span>
<button data-trigger="navbar_main" class="d-lg-none btn btn-warning" type="button"> Show navbar </button>


<!-- ============= COMPONENT ============== -->
<nav id="navbar_main" class="mobile-offcanvas navbar navbar-expand-lg my_navbar">
    <div class="container-fluid">
        <div class="offcanvas-header">
            <button class="btn-close float-end"></button>
        </div>
        <a class="navbar-brand" href="#">
            <img class="logo" src="img/logo.webp" alt="logo">
        </a>

        <ul class="navbar-nav" id="myDIV">
            <li
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'nav_active' : 'nav-item my_nav_item'; ?>">
                <a class="nav-link" href="#">home </a>
            </li>
            <li
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'aboutus.php' ? 'nav_active' : 'nav-item my_nav_item'; ?>">
                <a class="nav-link" href="#">about us </a>
            </li>
            <li
                class="<?php echo basename($_SERVER['PHP_SELF']) == 'contactus.php' ? 'nav_active' : 'nav-item my_nav_item'; ?>">
                <a class="nav-link" href="#">contact us </a>
            </li>
            <li class="nav-item my_nav_item">
                <a class="nav-link" href="#Products">Products</a>
            </li>
            <li class="nav-item my_nav_item">
                <a class="nav-link" href="#EVCharging">Electric Vehicles</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Services
                </a>
                <ul class="dropdown-menu fade-up">
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="#ifm">Integrated Facility
                            Management
                            Services</a></li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="#consultancy">Professional
                            Consultancy
                            Services</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown"> Electric Charging Solution
                </a>
                <ul class="dropdown-menu fade-up">
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="#"> EV-Chargers</a></li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="#">EV-Charger-Franchise</a>
                    </li>
                    <li class="my_nav_item my_nav_item_drop"><a class="dropdown-item" href="#"> Smart IOT & Telematics
                        </a></li>
                </ul>
            </li>

        </ul>
        <ul class="navbar-nav ms-auto right_nav">
            <li class="nav-item"><a class="btn let_talk_btn" href="#">let's Talk</a></li>
        </ul>

    </div> <!-- container-fluid.// -->
</nav>
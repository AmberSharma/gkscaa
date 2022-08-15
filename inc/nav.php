<?php
$directoryURI = $_SERVER['REQUEST_URI'];
$path = parse_url($directoryURI, PHP_URL_PATH);
$components = explode('/', $path);
$first_part = $components[1];
?>
<div class="nav-bar">
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
            <a href="#" class="navbar-brand">MENU</a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav mr-auto">
                    <a href="index.php" class="nav-item nav-link <?php if ($first_part=="" || $first_part == "index.php") {echo " active"; }?>">Home</a>
                    <a href="about.php" class="nav-item nav-link<?php if ($first_part == "about.php") {echo " active"; }?>">About</a>
                    <a href="service.php" class="nav-item nav-link <?php if ($first_part == "service.php") {echo " active"; }?>">Service</a>
                    <a href="vision.php" class="nav-item nav-link <?php if ($first_part == "vision.php") {echo " active"; }?>">Vision</a>

                    <!--                            <a href="price.html" class="nav-item nav-link">Price</a>-->
                    <!--                            <a href="location.html" class="nav-item nav-link">Washing Points</a>-->
                  <div class="nav-item dropdown">
                        <a href="#" class="nav-item nav-link <?php if (in_array($first_part, ["hotel.php", "industry.php", "misc.php"])) {echo " active"; }?>"
                           data-toggle="dropdown">Projects</a>
                        <div class="dropdown-menu">
                            <a href="hotel.php" class="dropdown-item">Hotels/Hospitals</a>
                            <a href="industry.php" class="dropdown-item">Industries</a>
                            <a href="misc.php" class="dropdown-item">Commercial/Residential</a>
<!--                            <a href="booking.html" class="dropdown-item">Schedule Booking</a>-->
                        </div>
                    </div>
                    <!--                            <a href="contact.html" class="nav-item nav-link">Contact</a>-->
                </div>
                <div class="ml-auto">
                    <a class="btn btn-custom" href="#">Get Appointment</a>
                </div>
            </div>
        </nav>
    </div>
</div>

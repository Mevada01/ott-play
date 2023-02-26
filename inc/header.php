<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="assets/css/bootstrap-modify.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/font-awesome.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
        integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
    <!-- <?php echo $headerData; ?> -->

    <!-- <link rel="stylesheet" href="assets/css/owl.theme.green.css">
    <link rel="stylesheet" href="assets/css/owl.theme.green.min.css"> -->
    <!-- <link rel="stylesheet" href="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"> -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"> -->
</head>

<body>
    <?php
    $homeActive = '';
    if ($pageId == 'home') {
        $homeActive = 'active';
    }
    $detailActive = '';
    if ($pageId == 'detail') {
        $detailActive = 'active';
    }
    $moviesActive = '';
    if ($pageId == 'movies' || $pageId == 'detail') {
        $moviesActive = 'active';
    }
    $loginActive = '';
    if ($pageId == 'login') {
        $Active = 'active';
    }
    $registerActive = '';
    if ($pageId == 'register') {
        $Active = 'active';
    }
    ?>
    <header class="main-header">
        <nav>
            <div class="left-items">
                <div class="logo">
                    <a href="/">
                        <img src="assets/img/icon.png" alt="">
                        <div class="icon-r-bx">
                            <div class="icon-r-ani">
                                <div class="icons-f"></div>
                                <div class="icons-b"></div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="nav-menu-items nav-items-hide">
                    <ul>
                        <li><a href="/" class="<?php echo $homeActive; ?>">Home</a></li>
                        <li><a href="">TV Shows</a></li>
                        <li><a href="/movies.php" class="<?php echo $moviesActive; ?>">Movies</a></li>
                        <li><a href="">Web Series</a></li>
                    </ul>
                </div>
            </div>
            <div class="right-items">
                <div class="search-bx">
                    <img src="assets/img/search-13-24.png" alt="" class="search-pb">
                    <input type="search" placeholder="Search for Movies, Shows, Channels etc.">
                </div>
                <div class="login">
                    <a href="/login.php">Login</a>
                </div>
                <div class="subp">
                    <a href="" class="d-flex">
                        <img src="assets/img/premium-quality.png" alt="">
                        Buy Plan</a>
                </div>
                <div>
                    <button class="navbar-toggler " type="button" data-bs-toggle="offcanvas"
                        data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
            </div>
        </nav>
        <div class="nav-menu-items nav-items-show">
            <ul>
                <li><a href="" class="<?php echo $homeActive; ?>">Home</a></li>
                <li><a href="">TV Shows</a></li>
                <li><a href="/movies.php"class="<?php echo $moviesActive; ?>">Movies</a></li>
                <li><a href="">Web Series</a></li>
            </ul>
        </div>
    </header>
    <div class="offcanvas offcanvas-end offcanvas-ends bg-prsnl" tabindex="-1" id="offcanvasDarkNavbar"
        aria-labelledby="offcanvasDarkNavbarLabel">
        <div class="offcanvas-header">
            <!-- <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Dark offcanvas</h5> -->
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                aria-label="Close"></button>
            <div class="logo-res">
                <a href="">
                    <img src="assets/img/logo.png" alt="">
                </a>
            </div>
        </div>
        <div class="side-prof">
            <div class="login lgn">
                <a href="">Login</a>
            </div>
            <div class="subp subphs">
                <a href="">
                    sign up for free</a>
            </div>
        </div>
        <div class="offcanvas-body scroll" style="padding: 0 15px !important;">
            <ul class="navbar-nav justify-content-end flex-grow-1">
                <div class="nav-item">
                    <a class="nav-link active brgr-menu-items" aria-current="page" href="#">Home</a>
                </div>
                <div class="accordion">
                    <a class="brgr-menu-items nav-collapse accordion-button bt collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#explore" aria-expanded="false"
                        aria-controls="panelsStayOpen-collapseOne">
                        Explore
                        <span class="down-icon"></span>
                    </a>
                    <div id="explore" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Tv Shows</a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Movies</a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Web Series</a>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <a class="brgr-menu-items nav-collapse accordion-button bt" type="button" data-bs-toggle="collapse"
                        data-bs-target="#plan" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Plan
                        <span class="down-icon"></span>
                    </a>
                    <div id="plan" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Buy Plan</a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Buy Have a prepaid code
                                ?</a>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <a class="brgr-menu-items nav-collapse accordion-button bt collapsed" type="button"
                        data-bs-toggle="collapse" data-bs-target="#setting" aria-expanded="true"
                        aria-controls="panelsStayOpen-collapseOne">
                        Settings
                        <span class="down-icon"></span>
                    </a>
                    <div id="setting" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Reset setting to
                                default </a>
                        </div>
                    </div>
                </div>
                <div class="accordion">
                    <a class="brgr-menu-items nav-collapse accordion-button bt" type="button" data-bs-toggle="collapse"
                        data-bs-target="#info" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                        Info
                        <span class="down-icon"></span>
                    </a>
                    <div id="info" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">About us </a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Help Center </a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Reset setting to
                                default </a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Content Redressal
                                Mechanism </a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Term of Use </a>
                            <a class="nav-link brgr-menu-items" aria-current="page" href="#">Privacy Policy </a>
                        </div>
                    </div>
                </div>
            </ul>
        </div>
    </div>
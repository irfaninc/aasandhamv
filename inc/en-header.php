<!doctype html>
<html lang="en">

<head>
    <title>Aasandha</title>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <link rel="icon" href="images/faviconV2.png" type="image/png">

    <!-- Bootstrap CSS v5.2.1 -->
    <link rel="stylesheet" href="https://cartzilla-html.createx.studio/assets/vendor/glightbox/glightbox.min.css">
    <link href="../css/bootstraptheme.min.css" rel="stylesheet" />
    <link href="../css/variables.css" rel="stylesheet" />
    <link href="../css/style.css" rel="stylesheet" />
    <link href="../css/cartzilla-icons.min.css" rel="stylesheet" />
</head>

<body class="bg-white">
    <div class="offcanvas offcanvas-top vh-100" id="searchBox" data-bs-backdrop="static" tabindex="-1" aria-modal="true" role="dialog" style="height: 100vh;">

        <!-- Close button at the top -->
        <div class="container offcanvas-header px-5 py-5">
            <button type="reset" class="btn-close fs-lg ms-auto" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <!-- Centered search input -->
        <div class="offcanvas-body d-flex justify-content-center align-items-center">
            <form class="container d-flex justify-content-center">
                <input type="search" class="form-control form-control-lg fs-lg border-0 border-bottom py-3 text-center"
                    placeholder="Search" data-autofocus="offcanvas" style="max-width: 600px;">
            </form>
        </div>
    </div>

    <section class="bg-aasandha-secondary">
        <div class="container position-relative d-flex justify-content-between z-1 py-2 px-4">
            <div class="nav">
                <a class="nav-link fs-xs p-0 text-white" href="#"><i class="ci-facebook animate-target pe-3"></i></a>
                <a class="nav-link fs-xs p-0 text-white" href="#"><i class="ci-x animate-target pe-3"></i></a>
                <a class="nav-link fs-xs p-0 text-white" href="#"><i class="ci-instagram animate-target pe-3"></i></a>
            </div>

            <ul class="nav gap-4">
                <li>
                    <a class="nav-link fs-xs p-0 text-white" href="#!"><i class="ci-phone animate-target pe-2"></i>1440</a>
                </li>
                <li>
                    <a class="nav-link fs-xs p-0 text-white" href="/aasandhamv/dv/dhivehi.php"><i class="ci-globe animate-target pe-2"></i>DV</a>
                </li>
            </ul>
        </div>
    </section>


    <!-- Navbar with offcanvas menu on screens smaller than 500px (xs) -->
    <header class="navbar navbar-expand-lg bg-transparent z-fixed p-0">
        <div class="container py-3">

            <!-- Navbar brand (Logo) -->
            <a class="navbar-brand" href="/aasandhamv/en/index.php">
                <span class="d-flex flex-shrink-0 text-primary me-2">
                    <img src="../images/AasandhaLogo.svg" alt="AasandhaLogo" width="60px">
                </span>
            </a>



            <!-- Offcanvas menu -->
            <div class="offcanvas offcanvas-end" id="navbarOffcanvas" tabindex="-1" aria-labelledby="navbarOffcanvasLabel">
                <div class="offcanvas-header">
                    <h5 class="offcanvas-title text-dark" id="navbarOffcanvasLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body pt-0">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Company
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/aasandhamv/en/about-us.php">About Us</a></li>
                                <li><a class="dropdown-item" href="/aasandhamv/en/directors.php">Directors</a></li>
                                <li><a class="dropdown-item" href="/aasandhamv/en/administration.php">Administration</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Tender</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                Media
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="/aasandhamv/en/gallery.php">Gallery</a></li>
                                <li class="dropend">
                                    <a class="dropdown-item dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        Sceme
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/aasandhamv/en/aasandha-scheme.php">Aasandha Scheme</a></li>
                                        <li><a class="dropdown-item" href="#">Vira</a></li>
                                        <li><a class="dropdown-item" href="#">Meranaa Scheme</a></li>
                                        <li><a class="dropdown-item" href="#">FAQ</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="#">Application Forms</a></li>
                                <li class="dropdown-divider">
                                    <hr>
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aasandhamv/en/downloads.php">Downloads</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/aasandhamv/en/contact-us.php">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div> <!--End Offcanvas -->


            <div class="d-flex align-items-center ms-auto">
                <!-- Search button -->
                <button type="button" class="btn btn-icon btn-lg fs-xl btn-outline-secondary border-0 rounded-circle animate-shake" data-bs-toggle="offcanvas" data-bs-target="#searchBox" aria-controls="searchBox" aria-label="Toggle search bar">
                    <i class="ci-search animate-target"></i>
                </button>

                <!-- Navbar toggler -->
                <button type="button" class="navbar-toggler" data-bs-toggle="offcanvas" data-bs-target="#navbarOffcanvas" aria-controls="navbarOffcanvas" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </header>
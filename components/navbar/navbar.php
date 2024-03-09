<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->

    <!-- online fonts start -->
    <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold"
        rel="stylesheet">
    <!-- online fonts end -->

    <!-- Goolge fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <!-- Goolge fonts end -->

    <!-- AOS  start-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS  end-->

 

    <style>
        .nav-group {
            position: fixed;
            top: 0%;
            width: 100%;
            z-index: 2;
            background-color: transparent;

        }

        .responsive-brand-item {
            color: #000066;
            font-family: "PF Din Stencil W01 Bold";
        }


        .nav-link,
        .outer-button,
        .offcanvas-button {
            font-family: "PF Din Stencil W01 Bold";
        }

        .nav-link-home {
            color: #000066;
        }

        .nav-link-about {
            color: #91CC00;
        }

        .nav-link-contact {
            color: #000066;
        }

        .tennis {
            color: #91CC00;
        }

        @media only screen and (min-width: 992px) {


            .navbar-nav-outer {
                list-style: none;
                display: flex;
                align-items: center;
                margin-left: auto;
            }

            .nav-item-outer {
                padding: 10px;
            }

            .carousel-content {
                width: 65%;
            }

        }

        @media only screen and (max-width: 992px) {


            .navbar-nav-outer {
                display: none;
            }

        }

        .navbar-brand {
            display: flex;
            align-items: center;
        }

        @media only screen and (max-width: 480px) {
            .brand-br {
                display: block;
            }
        }

        .navbar-toggler {
            background-color: #198754;
        }

        .change-navbg-onScroll-in {
            background-color: white;
            transition: all 1s ease-in;
        }

        .change-navbg-onScroll-out {
            background-color: transparent;
            transition: all 1s ease-in-out;
        }

        .navbar-nav {
            align-items: center;
        }
    </style>

       
       <script>
       
        
    </script>

</head>

<body>

    <!-- Navbar start -->
    <div class="nav-group navbar-dark" id="navbar">

        <nav class="navbar">
            <div class="container">
                <a href="" class="navbar-brand fs-4">
                    <img src="/project-holders-project-2/Images/logo.png" alt="Tennis court logo" width="70">
                    <span class="container responsive-brand-item">
                        Ampara District<span class="brand-br"><span class="tennis"> Tennis</span> Club</span>
                    </span>
                </a>

                <div class="navbar-nav-outer ">
                    <div class="nav-item-outer ">
                        <a href="/project-holders-project-2/index.php" class="nav-link nav-link-home active">HOME</a>
                    </div>
                    <div class="nav-item-outer">
                        <a href="/project-holders-project-2/page/AboutUs-page/About-us.php"
                            class="nav-link nav-link-about">ABOUT US</a>
                    </div>
                    <div class="nav-item-outer">
                        <a href="#" class="nav-link nav-link-contact">CONTACT</a>
                    </div>

                    <?php if (!isset($_SESSION['username'])): ?>
                        <div class="nav-item-outer">
                            <a href="/project-holders-project-2/page/login-and-signup-page/index.html"
                                class="nav-link nav-link-login">SIGN IN</a>
                        </div>
                        <div class="nav-item-outer">
                            <button type="button" class="btn btn-success outer-button"
                                onclick="window.location.href='/project-holders-project-2/page/login-and-signup-page/index.html'">SIGN
                                UP</button>
                        </div>
                    <?php endif; ?>

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#myNavBar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end offcan" tabindex="-1" id="myNavBar"
                    aria-labelledby="offcanvasNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">

                        <?php if (!isset($_SESSION['username'])): ?>
                            <div style="width: 100%; display: flex; align-items: center; justify-content: space-between;">

                                <a href="page/login-and-signup-page/index.html" class="nav-link nav-link-login">SIGN
                                    IN</a>
                                <button type="button" class="btn btn-success offcanvas-button"
                                    onclick="window.location.href='page/login-and-signup-page/index.html'">SIGN
                                    UP</button>

                            </div>
                        <?php endif; ?>

                        <form class="d-flex mt-1 search " role="search" style="width: 100%;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search"
                                id="search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>


                        <ul class="navbar-nav justify-content-end flex-grow-1">

                            <li class="nav-item ">
                                <a href="#" class="nav-link nav-link-home active">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="page/AboutUs-page/About-us.html" class="nav-link nav-link-about">ABOUT
                                    US</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link nav-link-contact">CONTACT</a>
                            </li>

                            <?php if (isset($_SESSION["username"])): ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                        aria-expanded="false">
                                        MEMBERSHIP
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Become a member</a></li>
                                        <li><a class="dropdown-item" href="#">Payment</a></li>
                                    </ul>

                                </li>
                            <?php endif; ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    COURTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">About
                                            courts we have</a></li>
                                    <li><a class="dropdown-item" href="#">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    TOURNAMENTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Enter Tournament</a></li>
                                    <li><a class="dropdown-item" href="#">Tournament Calendar</a></li>
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/Tournaments/Jus-De-Fruit-Tournaments/Jus-De-Fruit-Tournaments.html">Jus
                                            De Fruit Tournaments</a></li>
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/Tournaments/Concordance-Year-End-Tournaments/Concordance-Year-End-Tournaments.html">ADTC
                                            Year End Finals</a></li>
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/Tournaments/Inter-School-Tournaments/Inter-School-Tournaments.html">Inter
                                            School Tournaments</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    RANKING
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Player Profile</a></li>
                                    <li><a class="dropdown-item" href="#">ADTC Ranking</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    COACHES
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Register</a></li>
                                    <li><a class="dropdown-item" href="page/Find-a-coach/Find-a-coach-page.php">Find a
                                            Coach</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    SCHOOL TRAINING PROGRAMS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.html">About
                                            School Programs</a></li>
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.html">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    BEACH TENNIS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/Tournaments/Beach-tennis/Beach-tennis.html">About
                                            Beach Tennis</a></li>
                                    <li><a class="dropdown-item" href="#">Tournaments / Activities</a></li>
                                    <li><a class="dropdown-item dropdown"
                                            href="page/gallery-page/Tournaments/Beach-tennis/Beach-tennis.html">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    ACHIEVEMENTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.html">ADTC
                                            Achievements</a></li>
                                    <li><a class="dropdown-item"
                                            href="page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.html">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                    aria-expanded="false">
                                    FEDERATION
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">ADTC Committee</a></li>
                                    <li><a class="dropdown-item" href='/project-holders-project-2/index.php#adtcnews'
                                            id="clickme">ADTC News</a>
                                        <script src="/project-holders-project-2/components/navbar/navbar.js"></script>
                                    </li>

                                    <li><a class="dropdown-item dropdown" href="#">Image Gallery</a></li>

                                </ul>
                            </li>

                            <?php if (isset($_SESSION['username'])): ?>
                                <li class="nav-item ">
                                    <button type="button" class="btn btn-danger offcanvas-button"
                                        onclick="window.location.href='page/login-and-signup-page/log-out.php'">LOG
                                        OUT</button>
                                </li>
                            <?php endif; ?>


                        </ul>

                        <!-- visitor counter start -->
                        <div style="display:flex; justify-content:center;">
                            <a href='http://www.freevisitorcounters.com'>at www.freevisitorcounters.com</a>
                            <script type='text/javascript'
                                src='https://www.freevisitorcounters.com/auth.php?id=f588b368c8bb41d1c64b8cde849cedf3c6070209'></script>
                            <script type="text/javascript"
                                src="https://www.freevisitorcounters.com/en/home/counter/1155377/t/0"></script>
                        </div>
                        <!-- visitor counter end -->

                    </div>
                </div>
            </div>
        </nav>
    </div>


 
    <!-- Navbar end -->
</body>

</html>
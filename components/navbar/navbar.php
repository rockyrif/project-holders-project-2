<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>navbar</title>

    <style>
        .nav-group {
            position: fixed;
            top: 0%;
            width: 100%;
            z-index: 3;
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

        #install-button {
            height: 40px;
            border: 0;
            outline: 0;
            background: #3c00a0;
            color: #fff;
            cursor: pointer;
            width: 100%;
        }
    </style>


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
                        <a href="/project-holders-project-2/page/AboutUs-page/About-us.php" class="nav-link nav-link-about">ABOUT US</a>
                    </div>
                    <div class="nav-item-outer">
                        <a href="/project-holders-project-2/page/ContactUs-page/Contact-us.php" class="nav-link nav-link-contact">CONTACT</a>
                    </div>

                    <?php if (!isset($_SESSION['username'])) : ?>
                        <div class="nav-item-outer">
                            <a href="/project-holders-project-2/page/login-and-signup-page/index.html" class="nav-link nav-link-login">SIGN IN</a>
                        </div>
                        <div class="nav-item-outer">
                            <button type="button" class="btn btn-success outer-button" onclick="window.location.href='/project-holders-project-2/page/login-and-signup-page/index.html'">SIGN
                                UP</button>
                        </div>
                    <?php endif; ?>

                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#myNavBar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="offcanvas offcanvas-end offcan" tabindex="-1" id="myNavBar" aria-labelledby="offcanvasNavbarLabel">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                    </div>

                    <div class="install-button-div" style="list-style-type: none; display:flex; justify-content:center !important;">
                        <div style="width:100%">
                            <button id="install-button">Install as an App</button>
                        </div>
                    </div>

                    <script>
                        // Initialize deferredPrompt for use later to show browser install prompt.
                        let deferredPrompt;
                        var div = document.querySelector('.install-button-div');
                        var buttonInstall = document.querySelector('#install-button');
                        div.style.display = 'none';

                        window.addEventListener('beforeinstallprompt', (e) => {
                            // Prevent the mini-infobar from appearing on mobile
                            e.preventDefault();
                            // Stash the event so it can be triggered later.
                            deferredPrompt = e;


                            // Optionally, send analytics event that PWA install promo was shown.
                            console.log(`'beforeinstallprompt' event was fired.`);
                            div.style.display = 'block';


                            buttonInstall.addEventListener('click', async () => {
                                // Hide the app provided install promotion
                                div.style.display = 'none';
                                // Show the install prompt
                                deferredPrompt.prompt();
                                // Wait for the user to respond to the prompt
                                const {
                                    outcome
                                } = await deferredPrompt.userChoice;
                                // Optionally, send analytics event with outcome of user choice
                                console.log(`User response to the install prompt: ${outcome}`);
                                // We've used the prompt, and can't use it again, throw it away
                                deferredPrompt = null;
                            });

                        });
                    </script>

                    <div class="offcanvas-body">
                        <?php if (isset($_SESSION['username'])) : ?>
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="nav-item ">
                                    <a href="#" class="nav-link nav-link-home active">
                                        WELCOME
                                        <?= $_SESSION['username'] ?>
                                    </a>
                                </li>
                            </ul>
                        <?php endif; ?>

                        <?php if (isset($_SESSION['username'])) : ?>
                            <ul class="navbar-nav justify-content-end flex-grow-1">
                                <li class="nav-item ">
                                    <?php
                                    // Include database connection
                                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                                    $email = $_SESSION["email"];
                                    $sql = "SELECT member_id, id_prefix  FROM members WHERE email = '$email';";
                                    $result = mysqli_query($conn, $sql);
                                    mysqli_close($conn);
                                    $row = mysqli_fetch_assoc($result);
                                    ?>
                                    <a href="/project-holders-project-2/index.php" class="nav-link nav-link-home active">Your ID :
                                        <?= (isset($row["id_prefix"])) ? $row["id_prefix"] . '-' : ''; ?><?= (isset($row["member_id"])) ? $row["member_id"] : 'Please be a member'; ?>
                                    </a>
                                    <?php
                                    if (isset($row["member_id"])) {
                                        $_SESSION["id"] = $row["member_id"];
                                    }
                                    ?>
                                </li>
                            </ul>
                        <?php endif; ?>

                        <?php if (!isset($_SESSION['username'])) : ?>
                            <div style="width: 100%; display: flex; align-items: center; justify-content: space-between;">

                                <a href="/project-holders-project-2/page/login-and-signup-page/index.html" class="nav-link nav-link-login">SIGN
                                    IN</a>
                                <button type="button" class="btn btn-success offcanvas-button" onclick="window.location.href='/project-holders-project-2/page/login-and-signup-page/index.html'">SIGN
                                    UP</button>

                            </div>
                        <?php endif; ?>

                        <form class="d-flex mt-1 search " role="search" style="width: 100%;">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" id="search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>


                        <ul class="navbar-nav justify-content-end flex-grow-1">

                            <?php if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") : ?>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        ADMIN DASHBORD
                                    </a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/news/add-news.php">Add news</a></li>
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/members/admin-dashbord.php">Edit
                                                members</a></li>
                                        <li><a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ifUHRMPgKsO7NixgJilVabP3aFcOyKBQ4L3RwrKf6yM/edit?usp=sharing" target="_blank">Edit
                                                Feedback form</a></li>
                                        <li><a class="dropdown-item" href="https://calendar.google.com/calendar/u/0/r" target="_blank">Edit
                                                Calendar</a></li>
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/member-fees/member_fees.php" target="_blank">Edit
                                                Payment</a></li>

                                    </ul>

                                </li>
                            <?php endif; ?>

                            <li class="nav-item ">
                                <a href="/project-holders-project-2/index.php" class="nav-link nav-link-home active">HOME</a>
                            </li>
                            <li class="nav-item">
                                <a href="/project-holders-project-2/page/AboutUs-page/About-us.php" class="nav-link nav-link-about">ABOUT
                                    US</a>
                            </li>
                            <li class="nav-item">
                                <a href="/project-holders-project-2/page/ContactUs-page/Contact-us.php" class="nav-link nav-link-contact">CONTACT</a>
                            </li>

                            <?php if (isset($_SESSION["username"])) : ?>

                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                        MEMBERSHIP
                                    </a>
                                    <ul class="dropdown-menu">
                                        <?php if (!isset($_SESSION['id']) || $_SESSION['privilage'] == "admin") : ?>
                                            <li><a class="dropdown-item" href="/project-holders-project-2/page/become-member/add-new.php">Become a
                                                    member</a></li>
                                        <?php endif; ?>
                                        <?php if (isset($_SESSION['id'])) : ?>
                                            <li><a class="dropdown-item" href="/project-holders-project-2/page/payment/add-new.php">Payment</a></li>
                                        <?php endif; ?>
                                    </ul>

                                </li>

                            <?php endif; ?>

                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    COURTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/courts/courts.php">About
                                            courts we have</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/courts/courts.php">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TOURNAMENTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Enter Tournament</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/calender/calender.php">Tournament
                                            Calendar</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Jus-De-Fruit-Tournaments/Jus-De-Fruit-Tournaments.php">Jus
                                            De Fruit Tournaments</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Concordance-Year-End-Tournaments/Concordance-Year-End-Tournaments.php">ADTC
                                            Year End Finals</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Inter-School-Tournaments/Inter-School-Tournaments.php">Inter
                                            School Tournaments</a></li>

                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    RANKING
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Player Profile</a></li>
                                    <li><a class="dropdown-item" href="#">ADTC Ranking</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    COACHES
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Register</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/Find-a-coach/Find-a-coach-page.php">Find
                                            a
                                            Coach</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    SCHOOL TRAINING PROGRAMS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.php">About
                                            School Programs</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.php">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    BEACH TENNIS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Beach-tennis/Beach-tennis.php">About
                                            Beach Tennis</a></li>
                                    <li><a class="dropdown-item" href="#">Tournaments / Activities</a></li>
                                    <li><a class="dropdown-item dropdown" href="/project-holders-project-2/page/gallery-page/Tournaments/Beach-tennis/Beach-tennis.php">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    ACHIEVEMENTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/index.php#achievement-by-ADTC" id="achievement-by-ADTC-btn">ADTC
                                            Achievements</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.php">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    FEDERATION
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/adtc-committee/adtc-committee.php">ADTC
                                            Committee</a></li>
                                    <li><a class="dropdown-item" href='/project-holders-project-2/index.php#adtcnews' id="adtcnews-btn">ADTC News</a>

                                    </li>


                                    <li><a class="dropdown-item dropdown" href="/project-holders-project-2/index.php#gallery" id="gallery-btn">Image
                                            Gallery</a>

                                    </li>

                                </ul>
                                <script src="/project-holders-project-2/components/navbar/navbar.js"></script>
                            </li>

                            <?php if (isset($_SESSION['username'])) : ?>
                                <li class="nav-item mt-2">
                                    <button type="button" class="btn btn-danger offcanvas-button" onclick="window.location.href='/project-holders-project-2/page/login-and-signup-page/log-out.php'">LOG
                                        OUT</button>
                                </li>
                            <?php endif; ?>


                        </ul>



                    </div>
                </div>
            </div>
        </nav>
    </div>



    <!-- Navbar end -->
</body>

</html>
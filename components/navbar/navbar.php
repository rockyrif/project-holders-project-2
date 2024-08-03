<!-- visitor counter php logic start -->
<?php
$document_root = $_SERVER['DOCUMENT_ROOT'];

// File paths
$totalFile = $document_root . '/project-holders-project-2/visitor-counters/total_visits.txt';
$dailyFile = $document_root . '/project-holders-project-2/visitor-counters/daily_visits.txt';
$monthlyFile = $document_root . '/project-holders-project-2/visitor-counters/monthly_visits.txt';

// Load or initialize visit counters
$totalVisits = file_exists($totalFile) ? file_get_contents($totalFile) : 0;
$dailyVisits = file_exists($dailyFile) ? json_decode(file_get_contents($dailyFile), true) : [];
$monthlyVisits = file_exists($monthlyFile) ? json_decode(file_get_contents($monthlyFile), true) : [];

// Get current date information
$currentDay = date('Y-m-d');
$currentMonth = date('Y-m');

// Increment total visits
$totalVisits++;

// Check if the visitor has a 'counter' cookie set (to prevent counting multiple visits in a single day)
if (!isset($_COOKIE['counter'])) {
    // Increment daily visits
    if (!isset($dailyVisits[$currentDay])) {
        $dailyVisits[$currentDay] = 0;
    }
    $dailyVisits[$currentDay]++;

    // Increment monthly visits
    if (!isset($monthlyVisits[$currentMonth])) {
        $monthlyVisits[$currentMonth] = 0;
    }
    $monthlyVisits[$currentMonth]++;

    // Save the updated counters back to their respective files
    file_put_contents($totalFile, $totalVisits);
    file_put_contents($dailyFile, json_encode($dailyVisits));
    file_put_contents($monthlyFile, json_encode($monthlyVisits));



    // Set the cookie
    setcookie('counter', '1', (time() + 86400));
}

// Output the current counts
// echo "<h2>Total Visits: $totalVisits</h2>";
// echo "<h2>Today's Visits: " . $dailyVisits[$currentDay] . "</h2>";
// echo "<h2>This Month's Visits: " . $monthlyVisits[$currentMonth] . "</h2>";
?>
<!-- visitor counter php logic end -->
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

        .round-image-container {
            margin-top: 20px;
            width: 100%;
            /* Adjust width as needed */
            height: 100px;
            /* Adjust height as needed */



            /* Hide overflow content (if any) */

            /* Optional: Add a border */

            /* Optional: Add a shadow */

            display: flex;
            /* Use flexbox */
            justify-content: center;
            /* Center horizontally */
            align-items: center;
            /* Center vertically */
        }

        .flex-container {
            width: 100px;
            height: 100px;
            border-radius: 50%;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
            overflow: hidden;


        }

        .round-image-container .flex-container img {

            max-width: 100%;
            /* Make the image responsive */
            max-height: 100%;
            /* Make the image responsive */
            object-fit: cover;
            /* Scale the image while maintaining aspect ratio */
        }


        /* Loading screen styles */
        #loadingOverlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(255, 255, 255, 0.5);
            z-index: 9999;

            visibility: visible;
        }

        #loadingOverlay .loading-spinner {
            position: absolute;
            top: 50%;
            /* Position in the vertical center */
            left: 45%;
            /* Position in the horizontal center */

            /* Adjust centering */
            border: 8px solid #f3f3f3;
            border-radius: 50%;
            border-top: 8px solid #3498db;
            width: 60px;
            height: 60px;
            animation: spin 2s linear infinite;
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        .container-visitor-counter {
            font-family: Arial, sans-serif;
            text-align: center;
            padding: 60px;
        }

        .counter-box {
            padding: 10px;
            background-color: #f0f0f0;
            border: 1px solid #ccc;
            display: inline-block;
            margin: 10px;
            display: block;
        }

        /* h2 {
            color: #333;
        } */

        .count {
            font-size: 30px;
            color: #007BFF;
        }
    </style>


</head>

<body>

    <!-- Navbar start -->
    <!-- Loading screen start-->
    <div class="loading-overlay" id="loadingOverlay">
        <div class="loading-spinner"></div>
    </div>

    <script>
        // Function to hide loading overlay
        function hideLoadingOverlay() {
            console.log('Hiding loading overlay...'); // Log message
            // Pause execution here
            document.getElementById('loadingOverlay').style.display = 'none';
        }

        // Listen for window onload event to hide loading overlay
        window.onload = function() {
            console.log('Window onload event fired.'); // Log message
            // Pause execution here
            // Hide loading overlay when all resources are loaded
            hideLoadingOverlay();
            // if there are two window.onload fuction in a file check hideLoadingOverlay(); on other fuction
        };
    </script>
    <!-- Loading screen end-->



    <div class="nav-group navbar-dark" id="navbar">

        <nav class="navbar">
            <div class="container">
                <a href="" class="navbar-brand fs-4">
                    <img src="/project-holders-project-2/Images/logo.png" alt="Tennis court logo" width="70">
                    <span class="container responsive-brand-item">
                        Ampara District<span class="brand-br"><span class="tennis"> Tennis</span> Club</span>
                    </span>
                </a>

                <div class="navbar-nav-outer">
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
                            <a href="/project-holders-project-2/page/login-and-signup-page/index.php" class="nav-link nav-link-login">SIGN IN</a>
                        </div>
                        <div class="nav-item-outer">
                            <button type="button" class="btn btn-success outer-button" onclick="window.location.href='/project-holders-project-2/page/login-and-signup-page/index.php'">SIGN
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

                    <!-- install as an app start -->
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
                    <!-- install as an app end -->

                    <!-- profile pic start -->
                    <?php
                    // Include database connection
                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                    $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : '';
                    $sql = "SELECT profile_url  FROM members WHERE email = '$email';";
                    $result = mysqli_query($conn, $sql);
                    mysqli_close($conn);
                    $row = mysqli_fetch_assoc($result);
                    ?>

                    <?php if (isset($row['profile_url'])) { ?>
                        <div class="round-image-container">
                            <div class="flex-container">
                                <img src="/project-holders-project-2/<?= $row['profile_url'] ?>" alt="Image Description">
                            </div>
                        </div>
                    <?php } ?>
                    <!-- profile pic end -->

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

                        <?php
                        // Include database connection
                        include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                        $email = (isset($_SESSION["email"])) ? $_SESSION["email"] : '';
                        $sql = "SELECT member_id, id_prefix, payment_status FROM members WHERE email = '$email';";
                        $result = mysqli_query($conn, $sql);
                        $row = mysqli_fetch_assoc($result);
                        mysqli_close($conn);
                        ?>

                        <?php if (isset($_SESSION['username'])) : ?>
                            <?php
                            if (isset($row["member_id"])) {
                                $_SESSION["id"] = $row["member_id"];
                            }
                            ?>
                            <?php
                            if (isset($row['payment_status'])) {
                                $_SESSION["m.payment_status"] = $row["payment_status"];
                            }

                            ?>
                            <?php if (!isset($row['member_id']) || $row["payment_status"] == 'approved') { ?>
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="nav-item ">

                                        <a href="/project-holders-project-2/index.php" class="nav-link nav-link-home active">Your ID :
                                            <?= (isset($row["id_prefix"])) ? $row["id_prefix"] . '-' : ''; ?><?= (isset($row["member_id"])) ? $row["member_id"] : 'Please be a member'; ?>
                                        </a>
                                        <?php

                                        ?>
                                    </li>
                                </ul>
                            <?php
                            } elseif ($row["payment_status"] == 'rejected') {
                            ?>
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="nav-item ">
                                        <p href="#" class="nav-link nav-link-home active" style="text-align: center;">
                                            Your membership application is <span style="color: red;">rejected</span> please contact <span style="color: blue;">admin@adtennis.lk</span> from your registered email for enquries.
                                        </p>
                                    </li>
                                </ul>
                            <?php
                            } else {
                            ?>
                                <ul class="navbar-nav justify-content-end flex-grow-1">
                                    <li class="nav-item ">
                                        <a href="#" class="nav-link nav-link-home active" style="text-align: center;">
                                            Your membership details are currently <span>being checked</span>
                                        </a>
                                    </li>
                                </ul>
                            <?php
                            }
                            ?>
                        <?php endif; ?>

                        <?php if (!isset($_SESSION['username'])) : ?>
                            <div style="width: 100%; display: flex; align-items: center; justify-content: space-between;">

                                <a href="/project-holders-project-2/page/login-and-signup-page/index.php" class="nav-link nav-link-login">SIGN
                                    IN</a>
                                <button type="button" class="btn btn-success offcanvas-button" onclick="window.location.href='/project-holders-project-2/page/login-and-signup-page/index.php'">SIGN
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
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/admin-manager/admin-manager.php">Admin manager</a></li>
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/news/add-news.php">Add news</a></li>
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/members/admin-dashbord.php">Edit
                                                members</a></li>
                                        <li><a class="dropdown-item" href="https://docs.google.com/spreadsheets/d/1ifUHRMPgKsO7NixgJilVabP3aFcOyKBQ4L3RwrKf6yM/edit?usp=sharing" target="_blank">Edit
                                                Feedback form</a></li>

                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/member-fees/member_fees.php" target="_blank">Edit
                                                Payment</a></li>
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/add-gallery/add-gallery.php" target="_blank">Add
                                                Gallery</a></li>
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/tournament-schedule/tournament-schedule.php" target="_blank">Tournament Schedule</a></li>
                                        <li><a class="dropdown-item" href="/project-holders-project-2/page/admin-dashbord/tournament-application/tournament-application.php" target="_blank">Tournament Applicaton</a></li>

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



                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    MEMBERSHIP
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/about-membership/about-membership.php">About membership</a></li>
                                    <?php if (isset($_SESSION["username"])) : ?>
                                        <?php if (!isset($_SESSION['id']) || $_SESSION['privilage'] == "admin") : ?>
                                            <li><a class="dropdown-item" href="/project-holders-project-2/page/become-member/add-new.php">Become a
                                                    member</a></li>

                                        <?php endif; ?>



                                        <?php if (isset($row["payment_status"]) && $row["payment_status"] == 'approved' || $_SESSION['privilage'] == "admin") : ?>
                                            <li><a class="dropdown-item" href="/project-holders-project-2/page/payment/add-new.php">Payment</a></li>
                                        <?php endif; ?>
                                    <?php endif; ?>
                                </ul>

                            </li>



                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    COURTS
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/ADTC-Assets/courts.php">About
                                            courts we have</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/ADTC-Assets/courts.php">Image
                                            Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    TOURNAMENTS
                                </a>
                                <ul class="dropdown-menu">

                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/calender/calender.php">Tournament
                                            Calendar</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Jus-De-Fruit-Tournaments/Jus-De-Fruit-Tournaments.php">Jus
                                            De Fruit Tournament</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/ampara-district-ranking-tournament/ampara-district-ranking-tournament.php">
                                            Ranking Tournament</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Concordance-Year-End-Tournaments/Concordance-Year-End-Tournaments.php">Year-End Tournament</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Inter-School-Tournaments/Inter-School-Tournaments.php">Inter-School Tournaments
                                        </a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/gallery-page/Tournaments/Beach-tennis/Beach-tennis.php">Beach Tennis Tournament</a></li>

                                </ul>
                            </li>
                            <!-- <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    RANKING
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Player Profile</a></li>
                                    <li><a class="dropdown-item" href="#">ADTC Ranking</a></li>
                                </ul>
                            </li> -->
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    COACHING
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/Find-a-coach/Find-a-coach-page.php"> About Coaching
                                        </a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/downloads/New-Training-Time-Table-March-2024.pdf">Training schedule for schools</a></li>
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
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/founder-message/adtc-committee.php">ADTC
                                            Founder</a></li>
                                    <li><a class="dropdown-item" href="/project-holders-project-2/page/adtc-committee/adtc-committee.php">ADTC Committee</a></li>
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



                            <!-- visitor counter html start -->
                            <div class="container-visitor-counter">
                                <h1>Visitor Counter</h1>
                                <div class="counter-box">
                                    <h2>Total Visits</h2>
                                    <div class="count"><?php echo $totalVisits; ?></div>
                                </div>
                                <div class="counter-box">
                                    <h2>Today's Visits</h2>
                                    <div class="count"><?php echo $dailyVisits[$currentDay]; ?></div>
                                </div>
                                <div class="counter-box">
                                    <h2>This Month's Visits</h2>
                                    <div class="count"><?php echo $monthlyVisits[$currentMonth]; ?></div>
                                </div>
                            </div>
                            <!-- visitor counter html end -->


                        </ul>



                    </div>
                </div>
            </div>
        </nav>

        <!-- Aleart start -->
        <?php
        if (isset($_SESSION['response'])) {
            echo '<div id="alertContainer" class="alert alert-warning container alert-dismissible fade show" role="alert">
            ' . $_SESSION['response'] . '
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>';

            unset($_SESSION['response']);
        }
        ?>
        <script>
            // Automatically remove the alert after 4 seconds
            setTimeout(function() {
                var alertContainer = document.getElementById('alertContainer');
                if (alertContainer) {
                    alertContainer.remove();
                }
            }, 4000);
        </script>

        <!-- Aleart end -->
    </div>



    <!-- Navbar end -->
</body>

</html>
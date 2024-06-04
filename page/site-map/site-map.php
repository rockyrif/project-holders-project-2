<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    
    

    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->
    
    <link rel="stylesheet" href="style.css">

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
    /* Custom styles */
 
  </style>

   

</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
            include '../../components/navbar/navbar.php'; 
        ?>
        <!-- Navbar end -->

        <!-- home-section-site-map-start -->
        <div class="site-map">
            <div class="container">
                <p class="fs-4 site-map-tittle">Site Map</p>
                <div class="site-map-grid-container">
                    <div class="site-map-grid-item">
                        <p><a href="../../index.php">1. Home</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="../AboutUs-page/About-us.php">2. About us</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="#">3. Membershop</a></p>
                        <ul>
                            <li><a href="../about-membership/about-membership.php">About membership</a></li>
                            <li><a href="../become-member/add-new.php">Become a member</a></li>
                            <li><a href="../payment/add-new.php">Payment</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="../login-and-signup-page/index.php">4. Log in</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">5. Courts</a></p>
                        <ul>
                            <li><a href="../AboutUs-page/About-us.php">About courts we have</a></li>
                            <li><a href="../gallery-page/courts/courts.php">Image Gallery</a></li>
                        </ul>
                    </div>
                  
                    <div class="site-map-grid-item">
                        <p><a href="">6. Coaching</a></p>
                        <ul>
                            <li><a href="../Find-a-coach/Find-a-coach-page.php">About Coaching</a></li>
                            <li><a href="../../downloads/New-Training-Time-Table-March-2024.pdf">Training schedule for schools</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="#">7. School Training programs</a></p>
                        <ul>
                            <li><a href="../gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.php">About School Programs</a></li>
                            <li><a href="../gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.php">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">8. Beach Tennis</a></p>
                        <ul>
                            <li><a href="../gallery-page/Tournaments/Beach-tennis/Beach-tennis.php">About Beach Tennis</a></li>
                            <li><a href="../gallery-page/Tournaments/Beach-tennis/Beach-tennis.php">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">9. Achievements</a></p>
                        <ul>
                            <li><a href="../gallery-page/Achievement-by-ADTC/Achievement-by-ADTC.php">ADTC Achievements</a></li>
                            <li><a href="../gallery-page/Achievement-by-ADTC/Achievement-by-ADTC.php">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">10. Federation</a></p>
                        <ul>
                            <li><a href="../adtc-committee/adtc-committee.php">ADTC Committee</a></li>
                            <li><a href="../../index.php#adtcnews">ADTC News</a></li>
                            <li><a href="../../index.php#gallery">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">11. Tournaments</a></p>
                        <ul>
                            <li><a href="../calender/calender.php">Tournament Calendar</a></li>
                            <li><a href="#">Jus De Fruit Tournaments</a>
                                <ul>
                                    <li><a href="../gallery-page/Tournaments/Jus-De-Fruit-Tournaments/Jus-De-Fruit-Tournaments.php">About Jus De Fruit</a></li>
                                    <li><a href="../gallery-page/Tournaments/Jus-De-Fruit-Tournaments/Jus-De-Fruit-Tournaments.php">Image Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="#">ADTC Year End Finals</a>
                                <ul>
                                    <li><a href="../gallery-page/Tournaments/Concordance-Year-End-Tournaments/Concordance-Year-End-Tournaments.php">About ADTC Year End Finals</a></li>
                                    <li><a href="../gallery-page/Tournaments/Concordance-Year-End-Tournaments/Concordance-Year-End-Tournaments.php">Image Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="#">Inter School Tournaments</a>
                                <ul>
                                    <li><a href="../gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.php">About Inter School Tournaments</a></li>
                                    <li><a href="../gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.php">Image Gallery</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- home-section-site-map-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
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



</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
        include '../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->


        <div class="founder-msg">
            <!-- carousel start -->
            <div id="carouselExampleSlidesOnly" class="carousel slide section-one" data-bs-ride="carousel">


                <div class="carousel-inner">
                    <div class="carousel-item active img  img-1"  id="founder">
                        <div class="curousel-object">
                            <img alt="Tennis-bat-2" src="../../Images/home-page-carousal/Tennis-bat.gif">
                        </div>
                        <div class="content-flex-center">
                            <div class="carousal-content-and-indicator">
                                <div class="carousel-content carousel-content-4" data-aos="fade-up"
                                    data-aos-duration="1000">
                                    <div class="carousal-para-head">
                                        <div class="mb-3">
                                            <img alt="dig-sir" src="../../Images/home-page-carousal/dig-sir.jpg" height="150"
                                                style="border-radius: 100%;">
                                        </div>
                                        <h5 class="carousal-para-heading">Founder's Message</h5>
                                        <div class="carousal-para">
                                            <p>I am honored to welcome you to the Ampara District Tennis Club. Our
                                                commitment
                                                extends beyond law enforcement, it encompasses fostering a community
                                                united
                                                by
                                                the
                                                love of tennis. Join us in this endeavor, where the spirit of the game
                                                intertwines
                                                with the values of discipline, teamwork, and excellence. Together, let's
                                                make
                                                our
                                                tennis club a beacon of camaraderie and athletic achievement in Ampara
                                                District.

                                                <div class="name">Mr. H.A.N.K. Damayantha Wijaya Sri,</div> <div class="ocupation"> Founder & Deputy Inspector
                                                General of Police</div>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- carousel end -->
        </div>

    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
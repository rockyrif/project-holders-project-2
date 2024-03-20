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

        <!-- home-section-site-map-start -->
        <div class="site-map">
            <div class="container">
                <h3>Site Map</h3>
                <div class="site-map-grid-container">
                    <div class="site-map-grid-item">
                        <p><a href="">1. Home</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">2. About us</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">3. Register</a></p>
                        <ul>
                            <li><a href="">Application form</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">4. Log in</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">5. Courts</a></p>
                        <ul>
                            <li><a href="">About courts we have</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">6. Tournaments</a></p>
                        <ul>
                            <li><a href="">Enter Tournament</a></li>
                            <li><a href="">Tournament Calendar</a></li>
                            <li><a href="">Jus De Fruit Tournaments</a>
                                <ul>
                                    <li><a href="">About Jus De Fruit</a></li>
                                    <li><a href="">Image Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="">ADTC Year End Finals</a>
                                <ul>
                                    <li><a href="">About ADTC Year End Finals</a></li>
                                    <li><a href="">Image Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="">Inter School Tournaments</a>
                                <ul>
                                    <li><a href="">About Inter School Tournaments</a></li>
                                    <li><a href="">Image Gallery</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">7. Ranking</a></p>
                        <ul>
                            <li><a href="">Player Profile</a></li>
                            <li><a href="">ADTC Ranking</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">8. Coaches</a></p>
                        <ul>
                            <li><a href="">Register</a></li>
                            <li><a href="">Find a Coach</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">9. School Training programs</a></p>
                        <ul>
                            <li><a href="">About School Programs</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">10. Beach Tennis</a></p>
                        <ul>
                            <li><a href="">About Beach Tennis</a></li>
                            <li><a href="">Tournaments / Activities</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">11. Achievements</a></p>
                        <ul>
                            <li><a href="">ADTC Achievements</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">12. Federation</a></p>
                        <ul>
                            <li><a href="">ADTC Committee</a></li>
                            <li><a href="">ADTC News</a></li>
                            <li><a href="">Image Gallery</a></li>
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
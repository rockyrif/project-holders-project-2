<?php
session_start();
?>
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
    
    <link rel="stylesheet" href="../../common-css-and-js/style.css">

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
        include '../../../../components/navbar/navbar.php'; 
        ?>
        <!-- Navbar end -->

        <!-- moving images start -->
        <div id="carouselExampleAutoplaying" class="carousel slide aspect-ratio-256-81" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="gallary-tittle">
                        <div class="">Ampara District Ranking Tournament</div>
                    </div>
                    <div class="carousel-item active">
                        <img src="../../../../Images/moving-img/ampara-district-ranking-tournament/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../../Images/moving-img/ampara-district-ranking-tournament/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../../Images/moving-img/ampara-district-ranking-tournament/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../../Images/moving-img/ampara-district-ranking-tournament/4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../../../Images/moving-img/ampara-district-ranking-tournament/5.jpg" class="d-block w-100" alt="...">
                    </div>
                    
                    
                </div>
            </div>
            <!-- moving images end -->

        <!-- Achievement-by-ADTC-gallery-start -->
        <div class="section-two">

            <div class="gallary-info">
                <p data-aos="fade-up" data-aos-duration="2000">We'll have a Ranking Tournament every three months, working with the Sri Lanka Tennis Association. The first one was from March 29th to March 31st, 2024, at the Ampara District Tennis Courts. It's the start of many competitive events to show off talent in Sri Lanka's tennis community. Players from different places will compete, making it an exciting show of skill and sportsmanship. Working with the Sri Lanka Tennis Association means the tournament meets professional standards and gives new players a chance to shine. Events like this help tennis grow, bringing players and fans closer together.</p>
            </div>

            <div class="gallery">
                
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/2.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/3.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/4.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/5.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/6.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/7.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/8.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/9.jpg">
                </div>
                <!-- <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/10.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/ampara-district-ranking-tournament/11.jpg">
                </div> -->
                
            </div>

        </div>
        <!-- Achievement-by-ADTC-gallery-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
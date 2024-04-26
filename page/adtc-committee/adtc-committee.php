<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADTC Committee</title>

    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->

    <link rel="stylesheet" href="style.css">

    <!-- online fonts start -->
    <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold" rel="stylesheet">
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

        <!-- moving images start -->
        <div id="carouselExampleAutoplaying" class="carousel slide aspect-ratio-256-81" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="gallary-tittle">
                        <div class="">About Us</div>
                    </div>
                    <div class="carousel-item active">
                        <img src="../../Images/moving-img/adtc-founder/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/moving-img/adtc-founder/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/moving-img/adtc-founder/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    
                   

                </div>
            </div>
            <!-- moving images end -->

        <!-- adtc-committee-page-start -->
        <div class="adtc-committee">

            

            <div class="gallary-heading container">
                <p style="text-align: left;" data-aos="fade-up" data-aos-duration="2000">The Ampara District Tennis Club (ADTC) made its mark on the sporting scene in 2023, thanks to the visionary leadership of Deputy Inspector General of Police, Mr. H.A.N.K. Damayantha Wijaya Sri. With a mission to foster tennis excellence within the community, the club swiftly transformed into a vibrant nucleus for tennis aficionados across the region.</p>
            </div>


            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">

                <div class="image-container">

                    <img alt="Achievement-by-ADTC" src="../../Images/adtc-committee/1.jpg" class="image-button-container">

                    <p class="gallery-info">Mr. H.A.N.K. Damayantha Wijaya Sri<br>
                        <button type="button" class="btn btn-success gallery-button mt-1" onclick="window.location.href='../founder-msg/founder-msg.php'">Founder's Message</button>
                    </p>
                </div>

            </div>

            <br>

            <!-- <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Events</p>
            </div> -->

            <!-- <div class="gallery1" data-aos="fade-up" data-aos-duration="2000">
                <div class="committee-container">
                    <p class="committee-tittle">President</p>
                    <div class="image-container">
                        <img alt="Sachith-Jayarathna" src="../../Images/adtc-committee/3.jpg">
                        <p class="gallery-info">Sachith Jayarathna</p>
                    </div>
                </div>
                <div class="committee-container">
                    <p class="committee-tittle">Secretary</p>
                    <div class="image-container">
                        <img alt="Daminda-Ubayarathna" src="../../Images/adtc-committee/2.jpg">
                        <p class="gallery-info">Daminda Ubayarathna</p>
                    </div>
                </div>

            </div>

            <br>

            <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Treasurer</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">
                    <img alt="Pulasthi Dammika" src="../../Images/adtc-committee/4.jpg">

                    <p class="gallery-info">Pulasthi Dammika</p>
                </div>

            </div> -->

            <!-- <br>

            <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Executive Members</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>
                <div class="image-container">
                    <img alt="Beach-tennis" src="../../Images/adtc-committee/5.jpg">
                    <p class="gallery-info">name here</p>
                </div>

            </div> -->




        </div>
        <!-- adtc-committee-page-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
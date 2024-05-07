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

        <!-- Achievement-by-ADTC-gallery-start -->
        <div class="section-two">

            <div class="gallary-tittle1">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Achievement by ADTC</P>
            </div>

            <div class="gallary-info">
                <p data-aos="fade-up" data-aos-duration="2000">Uvidu, a second-year student at Ampara Kawantissa School,
                    reached a noteworthy achievement by clinching the second position in a competition held on
                    09/10/2023 in Negombo, Sri Lanka, for participants under 10 years old. Owidu etched his name in
                    history of Ampara by securing the first trophy for Ampara District from the Ampara District Tennis
                    Club.</p>
            </div>

            <div class="gallery">
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC/1.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC/2.webp">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC/3.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC/4.webp">
                </div>
                <!-- <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//5.webp">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//6.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//7.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//8.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//9.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//10.webp">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//11.webp">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//12.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//13.webp">
                </div> -->
                <!-- <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/14.webp">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/15.webp">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/16.webp">
                </div>
                <div class="grid-item">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/17.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/18.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/19.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/20.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/21.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/22.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/23.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/24.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement-by-ADTC/25.jpg">
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
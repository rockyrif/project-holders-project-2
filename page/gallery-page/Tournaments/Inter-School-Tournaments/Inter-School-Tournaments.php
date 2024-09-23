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
        include '../../../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->

        <!-- moving images start -->
        <div id="carouselExampleAutoplaying" class="carousel slide aspect-ratio-256-81" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="gallary-tittle">
                    <div class="">Inter School Tournaments</div>
                </div>
                <div class="carousel-item active">
                    <img src="../../../../Images/moving-img/inter-school-tournament/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../../Images/moving-img/inter-school-tournament/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../../../Images/moving-img/inter-school-tournament/3.jpg" class="d-block w-100" alt="...">
                </div>



            </div>
        </div>
        <!-- moving images end -->

        <!-- Achievement-by-ADTC-gallery-start -->
        <div class="section-two">



            <div class="gallary-info">
                <p data-aos="fade-up" data-aos-duration="2000">Currently, children in eleven schools are undergoing tennis coaching. The best way to promote
                    tennis is by holding tournaments. To achieve this goal, an inter-school tennis tournament was
                    established. This tournament is held every three months at the ADTC court premises and features
                    singles, doubles, and mixed categories. Trophies and certificates are awarded to the winners,
                    runners-up, and second runners-up. Additionally, all participants receive a certificate to motivate
                    them.<br><br>This initiative fosters cooperation among students from different schools, helping them form
                    strong bonds. It also encourages principals and staff to promote tennis in their respective schools.
                    Ultimately, this effort aims to develop national and international-level tennis players from Ampara.</p>
            </div>

            <div class="gallery">
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/1.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/2.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/3.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/4.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/5.jpg">
                </div>
                <!-- <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/6.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/7.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/8.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/9.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/10.jpg">
                </div> -->
                <!--<div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/11.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/12.jpg">
                </div> -->
                <!-- <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Tournaments/Inter-School-Tournaments/13.jpg">
                </div> -->
                <!-- <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/14.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/15.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/16.jpg">
                </div>
                <div class="grid-item">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/17.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/18.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/19.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/20.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/21.jpg">
                </div>
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/22.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/23.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/24.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../Images/gallary/Achievement by ADTC/25.jpg">
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
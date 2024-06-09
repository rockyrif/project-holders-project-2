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
                    <img src="../../Images/moving-img/about-us-moving-img/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-us-moving-img/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-us-moving-img/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-us-moving-img/4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!-- moving images end -->

        <!-- About-us-page-start -->
        <div class="about-us container">

            <div class="gallary-info">
                <p data-aos="fade-up" data-aos-duration="2000">
                    The Ampara District Tennis Club (ADTC) was established in 2023 under the guidance of Mr.
                    H.A.N.K. Damayantha Wijaya Sri, Deputy Inspector General of Police. ADTC has quickly
                    become one of the fastest-growing sports clubs in the country. Despite limited resources, ADTC
                    has successfully built nine tennis courts across the district.<br><br>
                    Harmony among communities is a widely discussed topic, today. Ampara is a district where
                    diverse communities coexist. Sport, particularly tennis, is a powerful tool for fostering racial
                    harmony. ADTC is committed to strengthening social cohesion through tennis across the island.<br><br>
                    ADTC aims to popularize tennis among all schools in the district, with the primary objective of
                    developing national and international level tennis players from Digamadulla. Our focus extends
                    beyond tennis development to include enhancing children's language proficiency, communication
                    skills, personality, and leadership qualities.<br><br>
                    In addition to promoting tennis, ADTC conducts outreach programs, community development
                    projects, health campaigns, and CSR initiatives to foster happiness and prosperity in the
                    community. Join us at ADTC, where we are dedicated to creating a vibrant, inclusive, and thriving
                    community through the love of tennis.

                </p>
            </div>

            <div class="gallery">
                <div class="image-container">
                    <iframe width="560" height="315" src="https://www.youtube.com/embed/L8onPTbUQCE?si=Mbx-4QaJxUz8MU2m&autoplay=1&rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../Images/gallary/ADTC-Assets/courts/7.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../Images/gallary/ADTC-Assets/courts/2.jpg">
                </div>

            </div>

        </div>
        <!-- About-us-page-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
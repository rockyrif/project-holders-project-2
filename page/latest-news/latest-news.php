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

        <!-- latest-news-page-start -->
        <div class="latest-news">

            <div class="gallary-tittle">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Latest News</P>
            </div>

            <div class="image">
                <div class="image-container mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <img src="../../Images/latest-news/2.jpg" alt="latest-news" width="300">
                </div>
            </div>

            <div class="gallary-info">
                <p data-aos="fade-up" data-aos-duration="2000">The Ampara District Tennis Club (ADTC) emerged on the
                    sporting landscape in 2023 under the visionary leadership of Deputy Inspector General of Police, Mr.
                    H.A.N.K. Damayantha Wijaya Sri. Founded with the purpose of promoting tennis within the community,
                    the club quickly evolved into a dynamic hub for tennis enthusiasts in the region. The ADTC is
                    committed to preventing drug addiction among young individuals by redirecting their focus and energy
                    towards playing tennis. The Ampara District Tennis Club endeavors to promote harmony within society
                    by organizing inclusive tennis events that unite diverse community members. By emphasizing values
                    such as teamwork, respect, and fair play, the club aims to create a positive environment where
                    individuals from varied backgrounds come together through their mutual passion for tennis.
                    Implementing outreach programs, tennis clinics, and community events will additionally strengthen
                    social bonds, fostering understanding and cooperation among residents of the Ampara
                    district.<br><br>

                    Despite initial resource limitations, the ADTC demonstrated resilience and commitment, achieving
                    remarkable strides in a short period. With a focus on inclusivity, skill development, and community
                    engagement, the Ampara District Tennis Club has become a pivotal force, uniting individuals
                    passionate about tennis and contributing to the overall sporting vibrancy of the community.. </p>
            </div>


        </div>
        <!-- latest-news-page-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
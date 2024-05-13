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
                <p data-aos="fade-up" data-aos-duration="2000">The Ampara District Tennis Club (ADTC) started in 2023 with Deputy Inspector General of Police, Mr. H.A.N.K. Damayantha Wijaya Sri, leading the way. It was founded to promote tennis in the community and quickly became a popular spot for tennis lovers in the region. The club aims to bring people together through inclusive tennis events that promote harmony in society. By focusing on values like teamwork, respect, and fair play, the club creates a positive environment where people from different backgrounds connect through their shared love for tennis. Outreach programs, tennis clinics, and community events will also help strengthen social bonds, fostering understanding and cooperation among residents of the Ampara district.<br><br>

                Even though the ADTC had few resources at the start, it kept going strong and made impressive progress fast. By welcoming everyone, helping people get better at tennis, and getting the community involved, the Ampara District Tennis Club has become really important. It brings together tennis fans and makes the sports scene in the community more exciting. </p>
            </div>

            <div class="gallery">
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../Images/gallary/ADTC-Assets/courts/7.jpg">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../Images/gallary/ADTC-Assets/courts/2.jpg">
                </div> 
                <!--
                <div class="image-container tall">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//3.webp">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000"
                        src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC//4.webp">
                </div>
                <div class="image-container tall">
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
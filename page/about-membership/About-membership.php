<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About membership</title>



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
                    <div class="">About Membership</div>
                </div>
                <div class="carousel-item active">
                    <img src="../../Images/moving-img/about-membership/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-membership/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-membership/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-membership/4.jpg" class="d-block w-100" alt="...">
                </div>


            </div>
        </div>
        <!-- moving images end -->

        <!-- About-us-page-start -->
        <div class="about-membership container">

            <div class="gallary-info">
                <p data-aos="fade-up" data-aos-duration="2000" style="font-family: Arial, sans-serif;">
                <h1 style=" font-weight: bold;">Membership</h1><br>
                <p><span style=" font-weight: bold;">Welcome to Ampara District Tennis Club (ADTC) Membership information page.</span> </p>
                <p style=" font-weight: bold;">The Ampara District Tennis Club’s purposes are:</p>
                <ul>
                    <li>To provide a safe, well-maintained environment where tennis can be played.</li>
                    <li>To provide quality tennis playing opportunities for players of all ages, genders, cultures, and abilities.</li>
                    <li>To encourage tennis participation among children of all ages and abilities.</li>
                    <li>To arrange social activities for the enjoyment of members of the association.</li>
                    <li>To do such things incidental to the above which the association or the committee may consider desirable in the interests of the association and its members.</li>
                </ul>
                <p><u>We offer Adult and Junior memberships.</u></p>
                <p>Note: Lighting access is now available with all of the above membership options by default. You don't need to pay anything extra.</p>
                <hr>
                <h2>Benefits & Features</h2>
                <ul>
                    <li>Membership of ADTC is necessary to participate in competitions.</li>
                    <li>Membership also entitles players to use lighting after sunset.</li>
                    <li>Membership with ADTC allows you to enjoy other benefits and coverage from Tennis Club (please contact us for more details).</li>
                    <li>Please note that guest fees and lights usage charges are additional to membership fees which you can select as extras when subscribing.</li>
                </ul>
                <p><strong>Paying for ADTC membership using Bank Transfer</strong></p>
                <p>If you prefer to pay for your membership using bank transfer, please send us an email at <a href="mailto:amparatennisclub2@gmail.com">amparatennisclub2@gmail.com</a> and we will help you with the process.</p>
                <p>If you have any inquiries regarding membership you may contact us by following methods:</p>
                <ol>
                    <li>Email us with your inquiry at <a href="mailto:amparatennisclub2@gmail.com">amparatennisclub2@gmail.com</a> and we will get back to you as soon as we can.</li>
                    <li>Send us an instant message on Facebook Messenger: <a href="#">[Insert Facebook Messenger link here]</a></li>
                </ol>
                </p>
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
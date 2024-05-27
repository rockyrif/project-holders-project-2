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

                <p>Welcome to the Ampara District Tennis Club (ADTC) Membership Information Page.</p>

                <h5>What ADTC Offers:</h5>
                <ul>
                    <li>A safe, well-maintained environment for playing tennis.</li>
                    <li>Quality tennis opportunities for players of all ages, genders, cultures, and abilities.</li>
                    <li>Social and recreational activities for members.</li>
                    <li>Pathways for national and international level achievements.</li>
                </ul>

                <h5>Our Mission:</h5>
                <p>ADTC aims to promote and popularize tennis among both children and adult players.</p>

                <h5>Membership Fees:</h5>
                <p>Membership fees are utilized for following requirements:</p>
                <ul>
                    <li>Court maintenance</li>
                    <li>Coaches' payments</li>
                    <li>Tournament arrangements</li>
                    <li>Support for talented players facing financial challenges</li>
                </ul>
                <p>The membership fee is periodically reviewed and set by the committee. Current fees are as follows:</p>
                <ul>
                    <li>Adult Players: 2500/= per month</li>
                    <li>Kid Players: 2000/= per month</li>
                    <li>Under the lights: 1000/= per hour</li>
                    <li>Guest Players: 500/= per hour</li>
                </ul>

                <h5>Payment Information:</h5>
                <p>Membership fees can be conveniently paid directly to the bank. After completing the transaction, kindly attach the payment slip to the receipt or upload it to our system using the following link: <a href="https://adtennis.lk/project-holders-project-2/page/become-member/add-new.php">Click here to upload your payment slip</a>.</p>

                <h5>Bank Details:</h5>
                <ul>
                    <li>Bank Name: Sampath Bank</li>
                    <li>Branch: Ampara</li>
                    <li>Account Name: Ampara District Tennis Club</li>
                    <li>Current Account Number: 006260000568</li>
                    <li>Savings Account Number: 106626100819</li>

                </ul>

                <p>Thank you for being a part of ADTC, where we strive to make tennis accessible and enjoyable for everyone.</p>
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
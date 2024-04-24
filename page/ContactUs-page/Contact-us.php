<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>



    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->

    <link rel="stylesheet" href="style.css">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300..700&display=swap');
    </style>

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
        <div data-aos="fade-up" data-aos-duration="2000">


            <!-- moving images start -->

            <div id="carouselExampleAutoplaying" class="carousel slide aspect-ratio-256-81" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="gallary-tittle">
                        <div class="">Contact Us</div>
                    </div>
                    <div class="carousel-item active">
                        <img src="../../Images/moving-img/contact-us-mooving-img/1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/moving-img/contact-us-mooving-img/2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/moving-img/contact-us-mooving-img/3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/moving-img/contact-us-mooving-img/4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="../../Images/moving-img/contact-us-mooving-img/5.jpg" class="d-block w-100" alt="...">
                    </div>

                </div>
            </div>

            <!-- moving images end -->

            <!-- contact-us-page-start -->
            <div class="contact-us">

                <div class="submit-request container">

                    <h5>Please fill up the following information:</h5>
                    <div class="line mb-3"></div>
                    <form action="" method="POST" name="Feedback-form">
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Name" name="Name" required>

                        </div>
                        <div class="mb-3">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email" name="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputmobile1" aria-describedby="mobileHelp" placeholder="Mobile No" name="Mobile-No" required>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="Comments" required></textarea>
                            <label for="floatingTextarea2">Message</label>
                        </div>

                        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                        <Script src="index.js"></Script>
                    </form>






                </div>

                <div class="map-container">
                    <div class="width" style="width: 50%;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.0417778416195!2d81.66277307770997!3d7.295221200000008!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ae51959aaee4eaf%3A0x2084c6c84470156d!2sAmpara%20District%20Tennis%20Courts%20Complex!5e0!3m2!1sen!2slk!4v1713784527880!5m2!1sen!2slk" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                    <div class="width width2" style="width: 50%; padding-left:30px; display:flex; align-items:center;">
                        <div>
                            Ampara District Tennis Courts Complex <br>
                            077 757 0347 <br>
                            <a href="https://maps.app.goo.gl/cx7XoBwFaE8puGHHA" target="_blank" style="font-weight: bold;">GET DIRECTION</a>
                        </div>
                    </div>
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
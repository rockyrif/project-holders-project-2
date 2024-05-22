<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Find a coach</title>

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
                    <div class="">About Coaching</div>
                </div>
                <div class="carousel-item active">
                    <img src="../../Images/moving-img/about-coaching/1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-coaching/2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-coaching/3.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-coaching/4.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="../../Images/moving-img/about-coaching/5.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
        </div>
        <!-- moving images end -->

        <!-- find-a-coach-page-start -->
        <div class="find-a-coach">

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="coach-background">
                    <div  style="font-family: Arial, sans-serif;">
                        <h1>Professional tennis coaching available:</h1>
                        <p>ADTC offers professional coaching sessions to enhance your tennis skills. We conduct the
                            following coaching sessions on weekdays and weekends:
                        </p>
                        <ul>
                            <li>Group Coaching: Free of charge.
                            </li>
                            <li>Individual Coaching: 1000/= per hour.
                            </li>
                        </ul>
                        <p >Our experienced coaches are dedicated to helping you reach your full potential on the court.
                            Whether you prefer group sessions or one-on-one coaching, we are here to support your tennis
                            journey.
                        </p>
                    </div>
                </div>
                <div style="width:350px; margin-bottom:10px;">
                    <form action="" method="POST" name="Feedback-form">
                        <h4>Book Online</h4>
                        <p>I want to know more about the program</p>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp" placeholder="Your Name" name="Name" required>

                        </div>
                        <div class="mb-3" style="width:100% !important;">
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your Email" name="Email" required>
                        </div>
                        <div class="mb-3">
                            <input type="text" class="form-control" id="exampleInputmobile1" aria-describedby="mobileHelp" placeholder="Your Mobile No" name="Mobile-No" required>
                        </div>
                        <div class="form-floating mb-3">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px" name="Comments" required></textarea>
                            <label for="floatingTextarea2">Your Message</label>
                        </div>

                        <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                        <Script src="index.js"></Script>
                    </form>
                </div>






            </div>




        </div>
        <!-- find-a-coach-page-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
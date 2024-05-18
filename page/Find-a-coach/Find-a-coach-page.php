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
                    <div class="content">
                        <h4 style=" font-weight: bold;">Professional tennis coaching available:</h4>
                        <p>ADTC coaching team cater to all levels of players, from beginners (of all ages) to competition players.
                        </p>
                        <p>Equipment is supplied.
                        </p>
                        <p class="fs-5" style="text-decoration: underline;">Coaching is available as follows
                        </p>
                        <ul>
                            <li>Week Days and Week Nights
                            </li>
                            <li>Weekends and Weekends Nights
                            </li>
                            <li> Individual or Group</li>
                        </ul>
                        <p class="fs-5">If you are interested in joining the coaching program please contact:
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
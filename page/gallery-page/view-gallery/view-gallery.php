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

    <link rel="stylesheet" href="../common-css-and-js/style.css">

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
        include '../../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->

        <!-- Achievement-by-ADTC-gallery-start -->
        <div class="section-two">

            <?php

            $id = $_GET['id'];

            include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
            $sql = "SELECT * FROM gallery WHERE id=$id;";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            $row = mysqli_fetch_assoc($result)
            ?>

            <div class="gallary-tittle1">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000"><?= $row['tittle'] ?></P>
            </div>

            <div class="gallary-info">
                <p data-aos="fade-up" data-aos-duration="2000"><?= $row['description'] ?></p>
            </div>

            <div class="gallery">
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../<?= $row['thumbnail'] ?>">
                </div>
                <div class="image-container">
                    <img data-aos="fade-up" data-aos-duration="2000" src="../../../../Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC/2.webp">
                </div>    
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
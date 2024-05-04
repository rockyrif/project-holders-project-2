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
        include '../../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->
        <div class="add-gallery container ">
            <div class="text-center mb-4">
                <h3>Add Gallery</h3>
                <p class="text-muted">Complete the form below to add a new Gallery</p>
            </div>

            <div class="form-container">
                <div class="form">
                    <form action="">
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Category</option>
                            <option value="achievement-by-adtc">Achievement by ADTC</option>
                            <option value="school-tennis-training-programs">School Tennis Training programs</option>
                            <option value="tournaments">Tournaments</option>
                            <option value="courts">Courts</option>
                        </select>
                    </form>
                </div>
            </div>
        </div>



    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
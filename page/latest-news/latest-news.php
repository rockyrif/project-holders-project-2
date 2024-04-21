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

    <!-- Font Awesome start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome end-->



</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
        include '../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->

        <!-- latest-news-page-start -->
        <div class="latest-news" data-aos="fade-up" data-aos-duration="2000">

            <div class="gallary-tittle">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Latest News</P>
            </div>

            <?php
            $id = $_GET['id'];
            include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
            $sql = "SELECT * FROM news WHERE news_id = '$id';";
            $result = mysqli_query($conn, $sql);
            mysqli_close($conn);
            $row = mysqli_fetch_assoc($result);
            ?>

            <div class="image">
                <div class="image-container mb-4" data-aos="fade-up" data-aos-duration="2000">
                    <img src="../../<?= $row['pic_path']; ?>" alt="latest-news" width="300">
                </div>
            </div>
            <div class="container">
                <div class="gallary-info">
                    <p data-aos="fade-up" data-aos-duration="2000"><?= $row['description']; ?></p>
                </div>

                <div style="display: flex; justify-content: space-between;">
                    <div>
                    <p >By: <?= $row['publisher']; ?></p>
                    </div>
                    <div>
                    <p ><?= $row['date']; ?></p>
                    </div>
                </div>

                <?php if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") { ?>
                    <div style="display:flex; justify-content:center; " >
                        <div style="margin-bottom: 20px;">
                            <button type="button" class="btn btn-danger" onclick="confirmDelete(<?php echo $row['news_id']; ?>)">Delete</button>

                            <script>
                                function confirmDelete(newsId) {
                                    if (confirm("Are you sure you want to delete this item?")) {
                                        window.location.href = "delete.php?id=" + newsId;
                                    }
                                }
                            </script>
                        </div>
                    </div>
                <?php } ?>
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
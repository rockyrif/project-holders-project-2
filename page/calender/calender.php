<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tournament Calendar</title>



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

        <!-- About-us-page-start -->
        <div class="calender-body container">

            <div class="tittle">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Tournament Calendar</P>
            </div>

            <?php
            // Include the database connection file
            include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

            // Define the SQL query
            $sql = "SELECT * FROM tournament_schedule ORDER BY id DESC;";

            // Execute the query
            $result = mysqli_query($conn, $sql);

            // Check if the query was successful
            if (!$result) {
                die("Query failed: " . mysqli_error($conn));
            }

            // Fetch all rows and close the connection
            $rows = [];
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    $rows[] = $row;
                }
            }

            // Free result set
            mysqli_free_result($result);

            // Close the database connection
            mysqli_close($conn);


            function formatString($str)
            {
                // Replace underscores with spaces
                $str = str_replace('_', ' ', $str);

                // Capitalize the first letter of the string
                $str = ucfirst($str);

                return $str;
            }
            function formatString2($str)
            {
                // Replace underscores with spaces


                // Capitalize the first letter of the strin

                return $str;
            }
            ?>

            <div class="card-container">
                <?php foreach ($rows as $row) {

                ?>
                    <div class="card">
                        <div class="card-body">
                            <img src="../../Images/logo.png" alt="Logo" class="card-logo">
                            <h2 class="card-title"><?= $row['name'] ?></h2>
                            <span class="card-status <?= formatString2($row['state']) ?>"><?= formatString($row['state']) ?></span>
                            <p class="card-subtitle">Ampara District Tennis Club</p>
                            <ul class="card-details">

                                <li> Start Date - <?= $row['start_date'] ?></li>
                                <li> End date - <?= $row['end_date'] ?></li>
                                <li> Age Categories - <?= $row['age_category[]'] ?></li>
                                <li> Type - <?= $row['type'] ?></li>

                            </ul>
                            <?php
                            if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
                            ?>
                                <div class="crud">
                                    <a href="delete.php?id=<?= $row['id'] ?>" style="color: black;" onclick="return confirmDelete();"><i class="fa-solid fa-trash fs-5" style="margin-right: 5px;"></i></a>
                                    <a href="edit.php?id=<?= $row['id'] ?>" style="color: black;"><i class="fa-solid fa-pen-to-square fs-5 "></i></a>
                                </div>
                                <script>
                                    function confirmDelete() {
                                        return confirm("Are you sure you want to delete this record?");
                                    }
                                </script>
                            <?php } ?>
                        </div>
                    </div>
                <?php } ?>
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
<?php
session_start();
$version = date('Ymd');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gallery</title>

    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->

    <link rel="stylesheet" href="../common-css-and-js/style.css?v=<?= $version; ?>">

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

    <style>
        @media only screen and (max-width: 575.98px) {

            /* max-width for small devices and below */
            .width {
                width: 100% !important;
            }
        }
    </style>

</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
        include '../../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->

        <!-- picture upload ui -->
        <div style="padding-top: 93px;">
            <div style=" display:flex; justify-content:center; ">
                <?php
                if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
                ?>
                    <div>
                        <?php $id = $_GET['id']; ?>
                        <form action="add.php?id=<?php echo $id; ?>" method="post" enctype="multipart/form-data" style="width:100%; min-width:300px;">
                            <label for="formFile" class="form-label">Upload Pictures:</label>

                            <div class="d-flex flex-column flex-sm-row mb-3 col-sm-12">
                                <div class="mb-3 me-2">
                                    <input class="form-control" type="file" id="picture" name="picture[]" accept=".jpg, .jpeg, .png" multiple required>
                                </div>
                                <div class="mb-3 me-2 ">
                                    <button type="submit" class="btn btn-success w-100" name="submit">Add</button>
                                </div>
                                <div class="mb-3 me-2 ">
                                    <button onclick="window.location.href='edit-gallery/edit-gallery.php?id=<?=$id?>'; return false;" type="submit" class="btn btn-success w-100" name="submit">Edit</button>
                                </div>
                                <div class="mb-3 me-2 ">
                                    <a href="../../../index.php" class="btn btn-danger w-100">Cancel</a>
                                </div>
                                <div class="mb-3 me-2">
                                    <?php
                                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                                    if (isset($id) && is_numeric($id)) {
                                        // Prepare the SQL statement
                                        $stmt = $conn->prepare("SELECT * FROM gallery WHERE id = ?");
                                        $stmt->bind_param("i", $id);

                                        // Execute the statement
                                        if ($stmt->execute()) {
                                            // Bind the result variables
                                            $stmt->bind_result($id, $column1, $column2, $column3, $column4); // Adjust this based on your table columns

                                            // Fetch the result
                                            if ($stmt->fetch()) {
                                                $row = [
                                                    'id' => $id,
                                                    'category' => $column1,
                                                    'tittle' => $column2,
                                                    'description' => $column3,
                                                    'thumbnail' => $column4,
                                                ];
                                                // Process $row here as needed
                                            } else {
                                                // Handle case where no record was found
                                                error_log("No record found with id: " . $id);
                                                // Optionally set an error response or message here
                                            }
                                            // Close the statement
                                            $stmt->close();

                                            // Close the connection
                                            $conn->close();
                                        } else {
                                            // Handle execution error
                                            error_log("Error executing query: " . $stmt->error);
                                            // Optionally set an error response or message here
                                        }
                                    } else {
                                        // Handle invalid ID
                                        error_log("Invalid ID provided.");
                                        // Optionally set an error response or message here
                                        // Example: header('Location: error_page.php'); exit;
                                    }

                                    // Directory path
                                    $tittle = $row['tittle'];
                                    $tittle = strtolower(preg_replace('/\s+/', '-', $tittle));
                                    $directory = "../../../Images/gallary/{$row['category']}/" . $tittle . "/";
                                    ?>

                                    <a href="delete_all.php?directory=<?= htmlspecialchars($directory) ?>&id=<?= htmlspecialchars($id) ?>" class="btn btn-danger w-100">Delete All</a>


                                </div>
                            </div>

                        </form>
                    </div>
                <?php } else {

                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                    $id = $_GET['id'];
                    if (isset($id) && is_numeric($id)) {
                        // Prepare the SQL statement
                        $stmt = $conn->prepare("SELECT * FROM gallery WHERE id = ?");
                        $stmt->bind_param("i", $id);

                        // Execute the statement
                        if ($stmt->execute()) {
                            // Bind the result variables
                            $stmt->bind_result($id, $column1, $column2, $column3, $column4); // Adjust this based on your table columns

                            // Fetch the result
                            if ($stmt->fetch()) {
                                $row = [
                                    'id' => $id,
                                    'category' => $column1,
                                    'tittle' => $column2,
                                    'description' => $column3,
                                    'thumbnail' => $column4,
                                ];
                                // Process $row here as needed
                            } else {
                                // Handle case where no record was found
                                error_log("No record found with id: " . $id);
                                // Optionally set an error response or message here
                            }

                            // Close the statement
                            $stmt->close();

                            // Close the connection
                            $conn->close();
                       
                        }
                    }
                } ?>
            </div>

            <!-- Image input form end -->



            <!-- ADTC-gallery-start -->
            <div class="section-two" style="margin-top: 0px;">



                <div class="gallary-tittle1" style="padding-top: 0px !important;">
                    <P class="fs-4" data-aos="fade-up" data-aos-duration="2000"><?= $row['tittle'] ?></P>
                </div>

                <div class="gallary-info">
                    <p data-aos="fade-up" data-aos-duration="2000"><?= $row['description'] ?></p>
                </div>

                <div class="gallery">

                    <div class="image-container">
                        <img data-aos="fade-up" data-aos-duration="2000" src="../../../<?= $row['thumbnail'] ?>">
                    </div>


                    <?php
                    // Directory path
                    $tittle = $row['tittle'];
                    $tittle = strtolower(preg_replace('/\s+/', '-', $tittle));
                    $directory = "../../../Images/gallary/{$row['category']}/" . $tittle . "/";

                    // Get all files in the directory
                    $files = scandir($directory);

                    // Remove "." and ".." from the list
                    $files = array_diff($files, array('.', '..'));

                    // Loop through each file
                    foreach ($files as $file) {
                        // Check if the file is not "1.jpg"
                        if ($file != '1.jpg') {
                            // Output the image HTML
                            echo '<div class="image-container" style="position: relative;">';
                            echo '<img data-aos="fade-up" data-aos-duration="2000" src="' . $directory . $file . '">';
                            echo '<div style="position: absolute; top:10px; right:10px;">';
                            if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
                                echo '<a href="delete_pic.php?directory=' . $directory . '&file=' . $file . '&id=' . $id . '" class="link-danger"><i class="fa-solid fa-trash fs-5"></i></a>';
                            }
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                    ?>

                </div>

            </div>
        </div>
        <!-- ADTC-gallery-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
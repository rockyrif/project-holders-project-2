<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {

    $id = $_GET['id'];


    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    // Prepare the SQL statement
    $sql = "SELECT * FROM gallery WHERE id = ?";
    $stmt = $conn->prepare($sql);

    // Bind the parameter
    $stmt->bind_param('i', $id);

    // Execute the query
    $stmt->execute();

    // Bind the result variables
    $stmt->bind_result($id, $category1, $tittle1, $description1, $thumbnail1);

    // Fetch the data
    if ($stmt->fetch()) {
        // The variables $category1, $tittle1, $description1, and $thumbnail1 now hold the fetched data
   
    }

    // Close the statement
    $stmt->close();

    // Optional: Close the connection if you're done
    $conn->close();



    if (isset($_POST["submit"])) {

        $category = (isset($_POST['category'])) ? $_POST['category'] : '';
        $tittle = (isset($_POST['tittle'])) ? $_POST['tittle'] : '';
        $tittle_path = strtolower(preg_replace('/\s+/', '-', $tittle));
        $description = $_POST['description'];

        // rename folder name to new tittle name start
        $path = "../../../../Images/gallary/" . $category1 . "/";

        // Combine the path with the folder name to get the full path
        $oldFolderPath = $path . strtolower(preg_replace('/\s+/', '-', $tittle1));
        $newFolderPath = $path . $tittle_path;

        // Check if the folder exists
        if (is_dir($oldFolderPath)) {
            // Rename the folder
            rename($oldFolderPath, $newFolderPath);
        }
        // rename folder name to new tittle name end

        $picture_upload_path = "../../../../Images/gallary/" . $category . "/" .  $tittle . "/1.jpg";




        $directory = "../../../../Images/gallary/" . $category . "/" . $tittle_path;
        $databse_thumbnail_path = "Images/gallary/" . $category1 . "/" . $tittle_path . "/1.jpg";



        include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

        // Initialize the SQL query and parameters array
        $sql = "UPDATE gallery SET tittle = ?, description = ?, thumbnail = ?";
        $params = [$tittle, $description,$databse_thumbnail_path];
        $types = 'sss';


        // Append the WHERE clause
        $sql .= " WHERE id = ?";
        $params[] = $id;
        $types .= 'i';

        // echo $sql;

        // Prepare and execute the statement
        $stmt = $conn->prepare($sql);
        $stmt->bind_param($types, ...$params);
        $stmt->execute();


        $stmt->close();
        $conn->close();

        $_SESSION['response'] = "Gallery updated successfully. view here";
        header('Location: ../../../../index.php#section-two');
        exit;
    }

?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Add Gallery</title>



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
            include '../../../../components/navbar/navbar.php';
            ?>
            <!-- Navbar end -->
            <div class="add-gallery container ">
                <div class="text-center mb-4">
                    <h3>Add Gallery</h3>
                    <p class="text-muted">Complete the form below to edit Gallery content</p>
                </div>

                <div class="container d-flex justify-content-center">

                    <form action="edit-gallery.php?id=<?= $id ?>" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">

                        <div class="mb-3">
                            <label class="form-label">Tittle:</label>
                            <input type="text" value="<?= $tittle1 ?>" class="form-control" name="tittle" placeholder="Tittle of your event" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description:</label><br>
                            <textarea id="description" class="form-control" name="description" rows="4" cols="50"><?= htmlspecialchars($description1); ?></textarea>
                        </div>

                        <div class="mb-3">
                            <button type="submit" class="btn btn-success" name="submit">Update</button>
                            <a href="../../../../index.php" class="btn btn-danger ">Cancel</a>
                        </div>
                    </form>

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
<?php } else {
    header("Location: ../../../index.php");
} ?>
<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {

    if (isset($_POST["submit"])) {

        $category = (isset($_POST['category'])) ? $_POST['category'] : '';
        $tittle = (isset($_POST['tittle'])) ? $_POST['tittle'] : '';
        $tittle_path = strtolower(preg_replace('/\s+/', '-', $tittle));
        $description = $_POST['description'];

        if (isset($_FILES['thumbnail'])) {
            $picture_upload_path = "../../../Images/gallary/" . $category . "/" . $tittle_path . "/1.jpg";

            $allowed_extensions = array('jpg', 'jpeg', 'png');
            $file_extension = strtolower(pathinfo($_FILES['thumbnail']['name'], PATHINFO_EXTENSION));

            if (in_array($file_extension, $allowed_extensions)) {
                // Check if directory exists, if not, create it
                $directory = "../../../Images/gallary/" . $category . "/" . $tittle_path;
                $databse_thumbnail_path = "Images/gallary/" . $category . "/" . $tittle_path . "/1.jpg";
                if (!is_dir($directory)) {
                    mkdir($directory, 0777, true);

                    // Save file with name 1.jpg
                    move_uploaded_file($_FILES['thumbnail']['tmp_name'], $picture_upload_path);

                    // Save category and title to SQL database

                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

                    $sql = "INSERT INTO gallery (category, tittle, description, thumbnail) VALUES (?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param('ssss', $category, $tittle, $description, $databse_thumbnail_path);
                    $stmt->execute();

                    $stmt->close();
                    $conn->close();

                    $_SESSION['response'] = "File uploaded successfully. view here";
                    header('Location: ../../../index.php#section-two');
                    exit;
                } else {
                    $_SESSION['response'] = "Directory Already available ";
                }
            } else {
                $_SESSION['response'] = "Only JPG, JPEG, and PNG files are allowed.";
            }
        } else {
            $_SESSION['response'] = "No file uploaded.";
        }
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
            include '../../../components/navbar/navbar.php';
            ?>
            <!-- Navbar end -->
            <div class="add-gallery container ">
                <div class="text-center mb-4">
                    <h3>Add Gallery</h3>
                    <p class="text-muted">Complete the form below to add a new Gallery</p>
                </div>

                <div class="container d-flex justify-content-center">
                    
                        <form action="add-gallery.php" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
                            <div class="mb-3">
                                <select class="form-select" name="category" aria-label="Default select example" required>
                                    <option selected>Category</option>
                                    <option value="Achievement-by-ADTC">Achievement by ADTC</option>
                                    <option value="School-Tennis-Training-programs">School Tennis Training programs</option>
                                    <option value="Tournaments">Tournaments</option>
                                    <option value="ADTC-Assets">ADTC Assets</option>
                                    <option value="Events">Events</option>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Tittle:</label>
                                <input type="text" class="form-control" name="tittle" placeholder="Tittle of your event" required>
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Description:</label><br>
                                <textarea id="description" class="form-control" name="description" rows="4" cols="50"></textarea>
                            </div>
                            <div class="mb-3">
                                <label for="formFile" class="form-label">Thumbnail:</label>
                                <input class="form-control" type="file" id="thumbnail" name="thumbnail" required>
                            </div>
                            <div class="mb-3">
                                <button type="submit" class="btn btn-success" name="submit">Add</button>
                                <a href="../../../index.php" class="btn btn-danger ">Cancel</a>
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
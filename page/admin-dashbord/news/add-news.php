<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
?>
    <?php
    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    if (isset($_POST["submit"])) {

        $description = $_POST['description'];
        $publisher = $_SESSION['username'];



        // Handle image upload
        $targetDir = "Images/news/";
        $targetDir1 = "../../../Images/news/";

        if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] == UPLOAD_ERR_OK) {
            // Get the last payment_id from the database
            $sql_last_news_id = "SELECT MAX(news_id) AS max_news_id FROM news";
            $result_last_news_id = mysqli_query($conn, $sql_last_news_id);
            $row_last_news_id = mysqli_fetch_assoc($result_last_news_id);
            $last_news_id = $row_last_news_id['max_news_id'];

            // Increment the last payment_id to get the new payment_id
            $new_news_pic_id = $last_news_id + 1;
            // Get file extension
            $imageFileType = strtolower(pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION));
            // Process file upload
            $targetFile = $targetDir1 . $new_news_pic_id . "." . $imageFileType;
            // Rest of your code for file upload and processing
        } else {
            // Handle file upload error
            $_SESSION['response'] = "File upload failed with error code: " . $_FILES["picture"]["error"];
        }

        $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
        // Check if image file is a valid format and size
        if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
            $_SESSION['response'] = "Sorry, only JPG, JPEG, PNG files are allowed.";
        } elseif ($_FILES["picture"]["size"] > 2000000) { // 2MB limit
            $_SESSION['response'] = "Sorry, your file is too large. Limit to 500 KB.";
        } else {
            // Check aspect ratio
            $image_info = getimagesize($_FILES["picture"]["tmp_name"]);
            $width = $image_info[0];
            $height = $image_info[1];
            if ($width != $height) {
                $_SESSION['response'] = "Sorry, only square images (1:1 aspect ratio) are allowed.";
            } else {
                // Proceed with upload and database insertion
                if (move_uploaded_file($_FILES["picture"]["tmp_name"], $targetFile)) {
                    // Image uploaded successfully, proceed to insert data into database
                    $proof_url = $targetDir . $new_news_pic_id . "." . $imageFileType;;

                    // Prepare and execute SQL insert statement
                    $sql = "INSERT INTO news (pic_path, description, publisher)
                        VALUES ('$proof_url', '$description', '$publisher')";

                    if (mysqli_query($conn, $sql)) {
                        $_SESSION['response'] = "News publised successfully.";
                    } else {
                        $_SESSION['response'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }
                } else {
                    $_SESSION['response'] = "Sorry, there was an error uploading your file.";
                }
            }
        }
    }
    // Close database connection
    mysqli_close($conn);
    ?>




    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <!-- online fonts start -->
        <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold" rel="stylesheet">
        <!-- online fonts end -->

        <title>ADTC add news</title>
    </head>

    <body>
        <?php
        include '../../../components/navbar/navbar.php';
        ?>

        <div class="container" style="margin-top:93px;">

            <?php
            //  update payment Aleart start
            if (isset($_SESSION['response'])) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            ' . $_SESSION['response'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';


                unset($_SESSION['response']);
            }
            //  update payment Aleart end
            ?>

            <div class="text-center mb-4">
                <h3>Add News</h3>
                <p class="text-muted">Complete the form below to add a new news</p>
            </div>

            <div class="container d-flex justify-content-center">
                <form action="add-news.php" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;" onsubmit="convertNewlines()">


                    <div class="mb-3">
                        <label for="formFile" class="form-label">Picture (1:1 aspact ratio):</label>
                        <input class="form-control" type="file" id="formFile" name="picture" required>
                    </div>

                    <div class="mb-3">
                        <label for="description" class="form-label">Description:</label><br>
                        <textarea id="description" class="form-control" name="description" rows="4" cols="50"></textarea>
                    </div>

                    <script>
                        function convertNewlines() {
                            var textarea = document.getElementById("description");
                            textarea.value = textarea.value.replace(/\n/g, "<br>");
                        }
                    </script>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-success" name="submit">Publish</button>
                        <a href="add-news.php" class="btn btn-danger ">Cancel</a>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

    </body>

    </html>
<?php } else {
    header("Location: ../../../index.php");
} ?>
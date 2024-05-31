<?php
session_start();
if ($_SESSION["loggedin"] = true && isset($_SESSION["username"])) {
    if (($_SESSION["m.payment_status"] == "approved")) {


        // Check if form is submitted
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

            $tournament_id = $_POST['id'];
            $tournament_name = $_POST['tournament-name'];
            $member_id = $_POST['member-id'];
            // Process age-category array
            if (isset($_POST['age-category'])) {
                $age_category = implode(',', $_POST['age-category']);
                $age_category = mysqli_real_escape_string($conn, $age_category);
            } else {
                $age_category = '';
            }
            $amount = $_POST['amount'];
            $paid_date = $_POST['payment-date'];

            // Handle image upload
            $targetDir = "../../Images/tournament-payment-proof/";

            if (isset($_FILES["payment-proof"]) && $_FILES["payment-proof"]["error"] == UPLOAD_ERR_OK) {

                date_default_timezone_set('Asia/Colombo');
                $dateTime = date('YmdHis');
                // Increment the last payment_id to get the new payment_id
                $new_file_name = $_SESSION["email"] . "-" . $dateTime;
                // Get file extension
                $imageFileType = strtolower(pathinfo($_FILES["payment-proof"]["name"], PATHINFO_EXTENSION));
                // Process file upload
                $targetFile = $targetDir . $new_file_name . "." . $imageFileType;
                // Rest of your code for file upload and processing
            } else {
                // Handle file upload error
                $_SESSION['response'] = "File upload failed with error code: " . $_FILES["payment-proof"]["error"];
            }

            $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
            // Check if image file is a valid format and size
            if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
                $_SESSION['response'] = "Sorry, only JPG, JPEG, PNG files are allowed.";
            } elseif ($_FILES["payment-proof"]["size"] > 500000) { // 500kb limit
                $_SESSION['response'] = "Sorry, your file is too large. limit to 500kb.";
            } else {
                // Upload image
                if (move_uploaded_file($_FILES["payment-proof"]["tmp_name"], $targetFile)) {
                    // Image uploaded successfully, proceed to insert data into database
                    $proof_url = $targetFile;

                    // SQL statement with placeholders
                    $sql = "INSERT INTO `tournament-application` (tournament_id, tournament_name, member_id, `age_category[]`, fee, paid_date, proof_url)
                                    VALUES (?, ?, ?, ?, ?, ?, ?)";

                    // Initialize a prepared statement
                    $stmt = mysqli_prepare($conn, $sql);

                    if ($stmt === false) {
                        die('Prepare failed: ' . mysqli_error($conn));
                    }

                    // Bind parameters to the statement
                    mysqli_stmt_bind_param($stmt, 'isissss', $tournament_id, $tournament_name, $member_id, $age_category, $amount, $paid_date, $proof_url);

                    // Execute the statement
                    if (mysqli_stmt_execute($stmt)) {;
                        $_SESSION['response'] = "Application submitted successfully.";
                        header('location:calender.php');
                        exit;
                    } else {
                        $_SESSION['response'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
                    }

                    // Close the statement
                    mysqli_stmt_close($stmt);

                    // Close the database connection
                    mysqli_close($conn);
                } else {
                    $_SESSION['response'] = "Sorry, there was an error uploading your file.";
                }
            }
        }

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
            <link rel="stylesheet" href="print.css" media="print">

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
                <div class="calender-body ">

                    <div class="tittle">
                        <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Tournament Application</P>
                    </div>


                    <?php
                    // Include the database connection file
                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

                    $id = $_GET['id'];

                    // Define the default SQL query
                    $sql = "SELECT * FROM tournament_schedule WHERE tournament_id = $id ORDER BY tournament_id DESC";

                    // Execute the query
                    $result = $conn->query($sql);

                    // Check if the query was successful
                    if (!$result) {
                        die("Query failed: " . $conn->error);
                    }

                    // Fetch all rows
                    $rows = [];
                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            $rows[] = $row;
                        }
                    }

                    // Free result set
                    $result->free();


                    // Other functions
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
                                    <div class="d-flex justify-content-center">
                                        <span class="card-status <?= formatString2($row['state']) ?>"><?= formatString($row['state']) ?></span>
                                    </div>
                                    <p class="card-subtitle">Ampara District Tennis Club</p>
                                    <ul class="card-details">

                                        <li> Start Date - <?= $row['start_date'] ?></li>
                                        <li> End date - <?= $row['end_date'] ?></li>
                                        <li> Age Categories - <?= $row['age_category[]'] ?></li>
                                        <li> Type - <?= $row['type'] ?></li>
                                        <li> Registration fee amount - <?= $row['description'] ?></li>

                                    </ul>
                                </div>
                            </div>
                        <?php } ?>
                    </div>



                    <div class="application-container">
                        <div class="text-center mb-4 mt-4">
                            <h3>Apply here</h3>
                            <p class="text-muted">Complete the form below to apply the tournament</p>
                        </div>

                        <div class="container d-flex justify-content-center">
                            <form action="apply.php" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">

                                <div class="mb-3">
                                    <label class="form-label">Member ID:</label>
                                    <select class="form-select" name="member-id">
                                        <option value=""> Select </option>
                                        <?php
                                        include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                                        // Select data from member_fees table
                                        $sql = "SELECT `member_id`,`id_prefix` FROM `members` ORDER BY `member_id` DESC";
                                        $result = mysqli_query($conn, $sql);

                                        if ($result && mysqli_num_rows($result) > 0) {
                                            // Loop through query results
                                            while ($row = mysqli_fetch_assoc($result)) {

                                        ?>
                                                <option value="<?= $row['member_id']; ?>" <?= ($row['member_id'] == $_SESSION['id']) ? "selected" : ""; ?>> <?= $row['id_prefix']; ?>-<?= $row['member_id']; ?> </option>
                                            <?php
                                            }
                                        } else {
                                            ?>
                                            <option value="">no records</option>
                                        <?php
                                            $conn->close();
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <?php
                                    // Include the database connection file
                                    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

                                    // Fetch the single value from the database
                                    $sql = "SELECT `age_category[]` FROM tournament_schedule WHERE tournament_id = $id"; // Update with your actual table name and condition
                                    $result = $conn->query($sql);

                                    $selected_categories = [];
                                    if ($result->num_rows > 0) {
                                        // Assuming there is only one row
                                        $row = $result->fetch_assoc();
                                        // Split the comma-separated string into an array
                                        $selected_categories = explode(',', $row["age_category[]"]);
                                    } else {
                                        echo "0 results";
                                    }
                                    $conn->close();

                                    // Function to check if a category should be hidden
                                    function is_hidden($category, $selected_categories)
                                    {
                                        return in_array($category, $selected_categories) ? '' : 'd-none';
                                    }


                                    ?>



                                    <div id="tournament-format-singles" class="mb-3">
                                        <div class="text-center mb-3">
                                            <h3>SINGLE MATCHES</h3>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <fieldset class="form-group" id="mixed-fieldset">
                                                    <label class="form-label" for="age-category[]">Boys:</label>

                                                    <div class="form-check <?php echo is_hidden('BS-18', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="BS-18">
                                                        <label class="form-check-label" for="age-under-18">
                                                            Under 18
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BS-16', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="BS-16">
                                                        <label class="form-check-label" for="age-under-16">
                                                            Under 16
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BS-14', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="BS-14">
                                                        <label class="form-check-label" for="age-under-14">
                                                            Under 14
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BS-12', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="BS-12">
                                                        <label class="form-check-label" for="age-under-12">
                                                            Under 12
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BS-10', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-10" value="BS-10">
                                                        <label class="form-check-label" for="age-under-10">
                                                            Under 10
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BS-8', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-8" value="BS-8">
                                                        <label class="form-check-label" for="age-under-8">
                                                            Under 8
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BS-6', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-6" value="BS-6">
                                                        <label class="form-check-label" for="age-under-6">
                                                            Under 6
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div>
                                                <fieldset class="form-group">
                                                    <label class="form-label" for="age-category[]">Girls:</label>

                                                    <div class="form-check <?php echo is_hidden('GS-18', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="GS-18">
                                                        <label class="form-check-label" for="age-under-18">
                                                            Under 18
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GS-16', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="GS-16">
                                                        <label class="form-check-label" for="age-under-16">
                                                            Under 16
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GS-14', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="GS-14">
                                                        <label class="form-check-label" for="age-under-14">
                                                            Under 14
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GS-12', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="GS-12">
                                                        <label class="form-check-label" for="age-under-12">
                                                            Under 12
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GS-10', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-10" value="GS-10">
                                                        <label class="form-check-label" for="age-under-10">
                                                            Under 10
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GS-8', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-8" value="GS-8">
                                                        <label class="form-check-label" for="age-under-8">
                                                            Under 8
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GS-6', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-6" value="GS-6">
                                                        <label class="form-check-label" for="age-under-6">
                                                            Under 6
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div>
                                                <fieldset class="form-group">
                                                    <label class="form-label" for="age-category[]">Women's:</label>
                                                    <div class="form-check <?php echo is_hidden('WS', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="WS">
                                                        <label class="form-check-label" for="age-open">
                                                            Open
                                                        </label>
                                                    </div>


                                                </fieldset>
                                            </div>

                                            <div>
                                                <fieldset class="form-group">
                                                    <label class="form-label" for="age-category[]">Men's:</label>
                                                    <div class="form-check <?php echo is_hidden('MS', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="MS">
                                                        <label class="form-check-label" for="age-open">
                                                            Open
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                    </div>

                                    <div id="tournament-format-doubles" class="mb-3">
                                        <div class="text-center mb-3">
                                            <h3>DOUBLE MATCHES</h3>
                                        </div>
                                        <div class="d-flex justify-content-between">
                                            <div>
                                                <fieldset class="form-group">
                                                    <label class="form-label" for="age-category[]">Boys:</label>

                                                    <div class="form-check <?php echo is_hidden('BD-18', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="BD-18">
                                                        <label class="form-check-label" for="age-under-18">
                                                            Under 18
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BD-16', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="BD-16">
                                                        <label class="form-check-label" for="age-under-16">
                                                            Under 16
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BD-14', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="BD-14">
                                                        <label class="form-check-label" for="age-under-14">
                                                            Under 14
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('BD-12', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="BD-12">
                                                        <label class="form-check-label" for="age-under-12">
                                                            Under 12
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div>
                                                <fieldset class="form-group">
                                                    <label class="form-label" for="age-category[]">Girls:</label>

                                                    <div class="form-check <?php echo is_hidden('GD-18', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="GD-18">
                                                        <label class="form-check-label" for="age-under-18">
                                                            Under 18
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GD-16', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="GD-16">
                                                        <label class="form-check-label" for="age-under-16">
                                                            Under 16
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GD-14', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="GD-14">
                                                        <label class="form-check-label" for="age-under-14">
                                                            Under 14
                                                        </label>
                                                    </div>
                                                    <div class="form-check <?php echo is_hidden('GD-12', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="GD-12">
                                                        <label class="form-check-label" for="age-under-12">
                                                            Under 12
                                                        </label>
                                                    </div>

                                                </fieldset>
                                            </div>
                                            <div>
                                                <fieldset class="form-group">
                                                    <label class="form-label" for="age-category[]">Women's:</label>
                                                    <div class="form-check <?php echo is_hidden('WD', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="WD">
                                                        <label class="form-check-label" for="age-open">
                                                            Open
                                                        </label>
                                                    </div>


                                                </fieldset>
                                            </div>

                                            <div>
                                                <fieldset class="form-group">
                                                    <label class="form-label" for="age-category[]">Men's:</label>
                                                    <div class="form-check <?php echo is_hidden('MD', $selected_categories); ?>">
                                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="MD">
                                                        <label class="form-check-label" for="age-open">
                                                            Open
                                                        </label>
                                                    </div>
                                                </fieldset>
                                            </div>
                                        </div>
                                        <div>
                                            <fieldset class="form-group">
                                                <label class="form-label" for="age-category[]">Mixed:</label>
                                                <div class="form-check <?php echo is_hidden('X', $selected_categories); ?>">
                                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-adult-open" value="X">
                                                    <label class="form-check-label" for="age-adult-open">
                                                        Open
                                                    </label>
                                                </div>
                                                <div class="form-check <?php echo is_hidden('X-18', $selected_categories); ?>">
                                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="X-18">
                                                    <label class="form-check-label" for="age-under-18">
                                                        Under 18
                                                    </label>
                                                </div>
                                                <div class="form-check <?php echo is_hidden('X-16', $selected_categories); ?>">
                                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="X-16">
                                                    <label class="form-check-label" for="age-under-16">
                                                        Under 16
                                                    </label>
                                                </div>
                                                <div class="form-check <?php echo is_hidden('X-14', $selected_categories); ?>">
                                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="X-14">
                                                    <label class="form-check-label" for="age-under-14">
                                                        Under 14
                                                    </label>
                                                </div>
                                                <div class="form-check <?php echo is_hidden('X-12', $selected_categories); ?>">
                                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="X-12">
                                                    <label class="form-check-label" for="age-under-12">
                                                        Under 12
                                                    </label>
                                                </div>

                                            </fieldset>
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="amount" class="form-label">Registration fee amount:</label>
                                    <input type="number" class="form-control" id="amount" name="amount" placeholder="eg:600/=">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Paid date:</label>
                                    <input type="date" class="form-control" name="payment-date" placeholder="1999-06-22" required>
                                </div>
                                <div class="mb-3">
                                    <label for="formFile" class="form-label">Payment proof:</label>
                                    <input class="form-control" type="file" id="formFile" name="payment-proof">
                                </div>
                                <input type="hidden" name="id" value="<?= $id ?>">
                                <?php
                                include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                                // Fetch the single value from the database
                                $sql = "SELECT `name` FROM tournament_schedule WHERE tournament_id = $id"; // Update with your actual table name and condition
                                $result = $conn->query($sql);


                                $tournament_name = '';
                                if ($result->num_rows > 0) {
                                    // Assuming there is only one row
                                    $row = $result->fetch_assoc();
                                    // Split the comma-separated string into an array

                                    $tournament_name = $row["name"];
                                } else {
                                    echo "0 results";
                                }
                                $conn->close();
                                ?>
                                <input type="hidden" name="tournament-name" value="<?= $row['name'] ?>">
                                <div class="mb-3">
                                    <button type="submit" class="btn btn-success" name="submit">Apply</button>
                                    <a href="member_fees.php.php" class="btn btn-danger ">Cancel</a>
                                </div>
                            </form>
                        </div>
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
<?php
    } else {
        $_SESSION['response'] = "Please be a approved member";
        header("Location: ../../index.php");
        exit;
    }
} else {
    $_SESSION['response'] = "Log in first and try to apply tournament";
    header("Location: ../../page/login-and-signup-page/index.php");
    exit;
}
?>
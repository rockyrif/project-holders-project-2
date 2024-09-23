<?php
session_start();
?>
<?php if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tournament application</title>



        <link rel="stylesheet" href="style.css">
        <link rel="stylesheet" href="print.css" media="print">



        <!-- bootstarp start -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
        <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
        <!-- bootstrap end -->

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
            include '../../../components/navbar/navbar.php';
            ?>
            <!-- Navbar end -->

            <!-- admin-dashbord-start -->
            <div class="admin-dashbord container">

                <!-- tittle start -->
                <div class="admin-dashbord-tittle mb-4" style="position: relative;">
                    <P class="" style=" margin-bottom: 0 !important;">TOURNAMENT APPLICATION</P>

                    <!-- current time seter start -->
                    <div class="time" style=" position: absolute; right: 0%;">
                        <?php
                        // Set the default timezone
                        date_default_timezone_set('Asia/Colombo');
                        // Get the current date and time
                        $currentDateTime = date('Y-m-d H:i:s');
                        // Display the current date and time
                        echo $currentDateTime;
                        ?>
                    </div>
                    <!-- current time seter end -->

                </div>
                <!-- Tittle end -->

                <!-- AOS script start -->
                <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
                <script>
                    AOS.init();
                </script>
                <!-- AOS script end-->

                <!-- filtering ui start -->
                <div class="row mb-2 mt-1 filter-section">

                    <div class="col-md-12">

                        <div class="row">


                            <div class="col-md-10">
                                <form action="tournament-application.php" method="GET">
                                    <P class="table-heading" style=" margin-bottom: 1 !important;">Member Table</P>
                                    <div class="row container mb-3">

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="m.`member_id`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('m.`member_id`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Member ID
                                            </label>
                                        </div>

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`id_prefix`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`id_prefix`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                ID Prefix
                                            </label>
                                        </div>

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`first_name`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`first_name`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                First Name
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`last_name`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`last_name`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Last Name
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`email`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`email`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Email
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`phone1`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`phone1`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Phone1
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`phone2`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`phone2`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Phone2
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`date_of_birth`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`date_of_birth`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                DOB
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`address`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`address`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Address
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`member_type`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`member_type`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Member Type
                                            </label>
                                        </div>
                                        <div class="form-check col-md">
                                            <input class="form-check-input" type="checkbox" value="`occupation`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`occupation`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Occupation
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`school`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`school`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                School
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`gender`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`gender`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Gender
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`registration_date`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`registration_date`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Reg Date
                                            </label>
                                        </div>
                                    </div>

                                    <P class="table-heading" style=" margin-bottom: 1 !important;">Tournament Schedule Table</P>
                                    <div class="row container mb-3">
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="ts.`tournament_id`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('ts.`tournament_id`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Tournament ID
                                            </label>
                                        </div>

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`name`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`name`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Name
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`type`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`type`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Type
                                            </label>
                                        </div>

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`start_date`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`start_date`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Start Date
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`end_date`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`end_date`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                End Date
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`tournament_format`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`tournament_format`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Tournament Format
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="ts.`age_category[]`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('ts.`age_category[]`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Age Category
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`description`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`description`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Fee
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`state`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`state`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                state
                                            </label>
                                        </div>

                                    </div>

                                    <P class="table-heading" style=" margin-bottom: 1 !important;">Tournament Application Table</P>
                                    <div class="row container mb-3">

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`tournament_name`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`tournament_name`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Tournament Name
                                            </label>
                                        </div>

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="ta.`age_category[]`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('ta.`age_category[]`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Age Category
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`fee`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`fee`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Fee
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`paid_date`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`paid_date`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Paid Date
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="ta.`proof_url`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('ta.`proof_url`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Payment Proof
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="ta.`payment_status`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('ta.`payment_status`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Payment Status
                                            </label>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md mb-3">
                                            <input type="text" name="member-id" value="<?= isset($_GET['member-id']) ? $_GET['member-id'] : ''; ?>" class="form-control" placeholder="Member id">
                                        </div>

                                        <div class="col-md mb-3">
                                            <input type="text" name="tournament-id" value="<?= isset($_GET['tournament-id']) ? $_GET['tournament-id'] : ''; ?>" class="form-control" placeholder="Tournament id">
                                        </div>

                                        <div class="col-md mb-3">
                                            <input type="text" name="name" value="<?= isset($_GET['name']) ? $_GET['name'] : '' ?>" class="form-control" placeholder="Name">
                                        </div>

                                        <div class="col-md mb-2">
                                            <select name="payment-status" id="" class="form-select">
                                                <option value="">Payment Status</option>
                                                <option value="Rejected" <?= isset($_GET['payment-status']) == true ? ($_GET['payment-status'] == 'Rejected' ? 'selected' : '') : '' ?>>Rejected
                                                </option>
                                                <option value="Pending" <?= isset($_GET['payment-status']) == true ? ($_GET['payment-status'] == 'Pending' ? 'selected' : '') : '' ?>>Pending
                                                </option>
                                                <option value="Approved" <?= isset($_GET['payment-status']) == true ? ($_GET['payment-status'] == 'Approved' ? 'selected' : '') : '' ?>>Approved
                                                </option>

                                            </select>
                                        </div>


                                        <div class="row">
                                            <div class="col-md-12 mb-2">
                                                <a href="../../../page/calender/calender.php" class="btn btn-dark">Add New</a>
                                                <button class="btn btn-dark" type="submit">Filter</button>
                                                <a href="tournament-application.php" type="reset" class="btn btn-dark">Reset</a>
                                                <button class="btn btn-dark print-btn" onclick="window.print();">Print</button>
                                            </div>
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- filtering ui end -->

            <!-- scroll to same position when reload. start -->
            <script>
                // Function to save scroll positions
                function saveScrollPositions() {

                    var childScrollPos = document.getElementById('childScroll').scrollTop;

                    localStorage.setItem('childScrollPos', childScrollPos);
                }

                // Function to restore scroll positions
                function restoreScrollPositions() {

                    console.log("Restoring scroll positions...");
                    var childScrollPos = localStorage.getItem('childScrollPos');
                    console.log("Retrieved child scroll position:", childScrollPos);

                    if (childScrollPos !== null) {
                        document.getElementById('childScroll').scrollTop = childScrollPos;
                        console.log("Scroll position restored successfully.");
                    } else {
                        console.log("No scroll position found in localStorage.");
                    }
                }

                // Call the restoreScrollPositions function when the page loads
                window.onload = function() {
                    restoreScrollPositions();
                    hideLoadingOverlay();
                };
            </script>
            <!-- scroll to same position when reload. end -->

            <!-- update payment status. start -->
            <?php

            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fee_id"]) && isset($_POST["status"])) {
                include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php"; // Include database connection file
                $feeId = $_POST["fee_id"];
                $status = $_POST["status"];

                // Prepare and execute SQL statement to update payment status
                $sql = "UPDATE `tournament_application` SET payment_status = '$status' WHERE application_id = '$feeId'";

                if ($conn->query($sql) === TRUE) {
                    $_SESSION['response'] = "Payment status updated successfully."; // Store success message in session
                } else {
                    $_SESSION['response'] = "Error updating payment status: " . $conn->error; // Store error message in session
                }

                exit();
            }
            ?>
            <!-- update payment status. end -->





            <div class="container-2" id="childScroll" onscroll="saveScrollPositions()">

                <?php

                if ((isset($_GET['member-id']) || isset($_GET['name']) || isset($_GET['member-type']) || isset($_GET['month'])) && isset($_GET['column'])) {
                ?>

                    <table class="table table-hover text-center ">

                        <thead class="table-dark">
                            <tr>
                                <th scope="col">Application ID</th>

                                <?php
                                if (isset($_GET['column']) && in_array('ts.`tournament_id`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Tournament ID</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`tournament_name`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Tournament Name</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`id_prefix`', $_GET['column'])) {
                                ?>
                                    <th scope="col">ID Prifix</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('m.`member_id`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Member ID</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`first_name`', $_GET['column'])) {
                                ?>
                                    <th scope="col">First Name</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`last_name`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Last Name</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`email`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Email</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`phone1`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Phone 1</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`phone2`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Phone 2</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`date_of_birth`', $_GET['column'])) {
                                ?>
                                    <th scope="col">DOB</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`address`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Address</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`member_type`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Member Type</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`occupation`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Occupation</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`school`', $_GET['column'])) {
                                ?>
                                    <th scope="col">School</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`gender`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Gender</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`registration_date`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Registration Date</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('ts.`tournament_id `', $_GET['column'])) {
                                ?>
                                    <th scope="col">Tournament ID</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`name`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Tournament Name</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`type`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Tournament Type</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`start_date`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Start date</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`end_date`', $_GET['column'])) {
                                ?>
                                    <th scope="col">End Date</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`tournament_format`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Tournament Formate</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('ts.`age_category[]`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Age Category</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`description`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Fee</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`state`', $_GET['column'])) {
                                ?>
                                    <th scope="col">State</th>
                                <?php
                                }
                                ?>


                                <?php
                                if (isset($_GET['column']) && in_array('ta.`age_category[]`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Applied age category</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`fee`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Fee</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('`paid_date`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Paid Date</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('ta.`proof_url`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Payment Proof</th>
                                <?php
                                }
                                ?>

                                <?php
                                if (isset($_GET['column']) && in_array('ta.`payment_status`', $_GET['column'])) {
                                ?>
                                    <th scope="col">Payment Status</th>
                                <?php
                                }
                                ?>

                                <th scope="col" class="col-remove">Edit</th>

                                <th scope="col" class="col-remove">Delete</th>

                            </tr>
                        </thead>

                        <!-- php filtering start -->

                        <tbody>

                            <?php
                            include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

                            // Fetch the selected columns from the form
                            $selectedColumns = isset($_GET['column']) ? $_GET['column'] : array(); // Ensure $selectedColumns is always an array

                            // Construct the SELECT query based on the selected columns
                            $selectQuery = "SELECT `application_id`, ";
                            $selectQuery .= implode(',', $selectedColumns); // Assuming $selectedColumns contains valid column names
                            $selectQuery .= " FROM tournament_application ta "; // Alias member_fees table as mf
                            $selectQuery .= "INNER JOIN tournament_schedule ts ON ta.tournament_id = ts.tournament_id
                                INNER JOIN members m ON ta.member_id = m.member_id "; // Join with members table

                            // Initialize an empty array to store conditions
                            $conditions = array();

                            // Check each form field for data and construct conditions accordingly
                            if (!empty($_GET['member-id'])) {
                                $conditions[] = "m.member_id = {$_GET['member-id']}";
                            }

                            if (!empty($_GET['tournament-id'])) {
                                $conditions[] = "ta.tournament_id = {$_GET['tournament-id']}";
                            }

                            if (!empty($_GET['name'])) {
                                $name = mysqli_real_escape_string($conn, $_GET['name']); // Sanitize input
                                $conditions[] = "(m.first_name LIKE '%$name%' OR m.last_name LIKE '%$name%')";
                            }


                            if (!empty($_GET['payment-status'])) {
                                $paymentStatus = mysqli_real_escape_string($conn, $_GET['payment-status']); // Sanitize input
                                $conditions[] = "ta.payment_status = '$paymentStatus'";
                            }

                            // Construct the WHERE clause
                            $whereClause = '';
                            if (!empty($conditions)) {
                                $whereClause = " WHERE " . implode(" AND ", $conditions);
                            }

                            // Construct the final SQL query
                            $sql = $selectQuery . $whereClause . " ORDER BY ta.application_id DESC";

                            echo $sql;

                            // Execute the SQL query
                            $result = mysqli_query($conn, $sql);
                            $conn->close();
                            // Check if query executed successfully
                            if ($result && mysqli_num_rows($result) > 0) {
                                // Display table header

                                // Fetch and display data
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>

                                        <td>
                                            <?php echo $row["application_id"]; ?>
                                        </td>

                                        <?php
                                        if (isset($_GET['column']) && in_array('ts.`tournament_id`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["tournament_id"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`tournament_name`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["tournament_name"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`id_prefix`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["id_prefix"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('m.`member_id`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["member_id"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`first_name`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["first_name"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`last_name`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["last_name"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`email`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["email"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`phone1`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["phone1"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`phone2`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["phone2"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`date_of_birth`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["date_of_birth"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`address`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["address"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`member_type`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["member_type"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`occupation`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["occupation"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`school`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["school"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`gender`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["gender"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`registration_date`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["registration_date"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('ts.`tournament_id `', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["tournament_id"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`name`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["name"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`type`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["type"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`start_date`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["start_date"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`end_date`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["end_date"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`tournament_format`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["tournament_format"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('ts.`age_category[]`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["age_category[]"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`description`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["description"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`state`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["state"]; ?></td>
                                        <?php
                                        }
                                        ?>


                                        <?php
                                        if (isset($_GET['column']) && in_array('ta.`age_category[]`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["age_category[]"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`fee`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["fee"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('`paid_date`', $_GET['column'])) {
                                        ?>
                                            <td><?php echo $row["paid_date"]; ?></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('ta.`proof_url`', $_GET['column'])) {
                                        ?>
                                            <td><a href="#" onclick="window.open('../<?php echo $row['proof_url'] ?>', '_blank', 'width=600,height=400'); return false;">View</a></td>
                                        <?php
                                        }
                                        ?>

                                        <?php
                                        if (isset($_GET['column']) && in_array('ta.`payment_status`', $_GET['column'])) {
                                        ?>
                                            <td>
                                                <!-- Form to update payment status -->
                                                <form method="post">
                                                    <!-- Hidden input field for fee_id -->
                                                    <input type="hidden" name="fee_id" value="<?php echo $row['application_id']; ?>">
                                                    <div style="display:flex; justify-content:center;">
                                                        <!-- Dropdown to select payment status -->
                                                        <select style="width:200px;" class="form-select payment-form-select" name="status" onchange="updatePaymentStatus(<?php echo $row['application_id']; ?>, this.value)">
                                                            <!-- Option for payment status Not yet -->
                                                            <option value="Rejected" class="rejected" <?php echo ($row["payment_status"] == 'Rejected') ? "selected" : ""; ?>>Rejected</option>
                                                            <!-- Option for payment status Paid -->
                                                            <option value="Pending" class="pending" <?php echo ($row["payment_status"] == 'Pending') ? "selected" : ""; ?>>Pending</option>
                                                            <option value="Approved" class="approved" <?php echo ($row["payment_status"] == 'Approved') ? "selected" : ""; ?>>Approved</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </td>
                                        <?php
                                        }
                                        ?>

                                        <td class="col-remove"><a href="edit.php?id=<?php echo $row["application_id"]; ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5"></i></a></td>

                                        <td class="col-remove"><a href="delete.php?id=<?php echo $row["application_id"]; ?>" class="link-dark" onclick="return confirmDelete();"><i class="fa-solid fa-trash fs-5"></i></a></td>

                                    </tr>

                                <?php }
                            } else { ?>

                                <tr>
                                    <td colspan="15">
                                        <?php echo 'No records found' ?>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                    </table>

                    <!-- auto submit and conform delete script start -->
                    <script>
                        function confirmDelete() {
                            return confirm("Are you sure you want to delete this record?");
                        }

                        function updatePaymentStatus(feeId, status) {
                            // Create a new XMLHttpRequest object
                            var xhr = new XMLHttpRequest();

                            // Prepare the request
                            xhr.open("POST", "", true); // Use current URL for the request
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                            // Define what happens on successful data submission
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {
                                        // Reload the page upon successful submission
                                        window.location.reload();
                                    } else {
                                        // Log error message to console
                                        console.error("Error updating payment status. Status code: " + xhr.status);
                                    }
                                }
                            };

                            // Send the request
                            xhr.send("fee_id=" + feeId + "&status=" + status);
                        }
                    </script>
                    <!-- auto submit and conform delete script end -->


                <?php

                } else { ?>



                    <!-- Displaying member fees table -->
                    <table class="table table-hover text-center">
                        <!-- Table headers -->
                        <thead class="table-dark">
                            <tr>
                                <!-- Table column headers -->
                                <th scope="col">Application ID</th>
                                <th scope="col">Tournament ID</th>
                                <th scope="col">Tounament Name</th>
                                <th scope="col">Member ID</th>
                                <th scope="col">Age Category</th>
                                <th scope="col">Fee</th>
                                <th scope="col">Paid Date</th>
                                <th scope="col">Payment Proof</th>
                                <th scope="col">Payment Status</th>
                                <th scope="col" class="col-remove">Edit</th>
                                <th scope="col" class="col-remove">Delete</th>
                            </tr>
                        </thead>

                        <!-- Table data -->
                        <tbody>
                            <?php
                            include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                            // Select data from member_fees table
                            $sql = "SELECT * FROM `tournament_application` ORDER BY `application_id` DESC";
                            $result = mysqli_query($conn, $sql);
                            $conn->close();
                            if ($result && mysqli_num_rows($result) > 0) {
                                // Loop through query results
                                while ($row = mysqli_fetch_assoc($result)) {
                            ?>
                                    <tr>
                                        <!-- Displaying table data -->
                                        <td><?php echo $row["application_id"]; ?></td>
                                        <td><?php echo $row["tournament_id"] ?></td>
                                        <td><?php echo $row["tournament_name"] ?></td>
                                        <td><?php echo $row["member_id"] ?></td>
                                        <td><?php echo $row["age_category[]"] ?></td>
                                        <td><?php echo $row["fee"] ?></td>
                                        <td><?php echo $row["paid_date"] ?></td>
                                        <td><a href="#" onclick="window.open('../<?php echo $row['proof_url'] ?>', '_blank', 'width=600,height=400'); return false;">View</a></td>
                                        <td>
                                            <!-- Form to update payment status -->
                                            <form method="post">
                                                <!-- Hidden input field for fee_id -->
                                                <input type="hidden" name="fee_id" value="<?php echo $row['application_id']; ?>">
                                                <div style="display:flex; justify-content:center;">
                                                    <!-- Dropdown to select payment status -->
                                                    <select style="width:200px;" class="form-select payment-form-select" name="status" onchange="updatePaymentStatus(<?php echo $row['application_id']; ?>, this.value)">
                                                        <!-- Option for payment status Not yet -->
                                                        <option value="Rejected" class="rejected" <?php echo ($row["payment_status"] == 'Rejected') ? "selected" : ""; ?>>Rejected</option>
                                                        <!-- Option for payment status Paid -->
                                                        <option value="Pending" class="pending" <?php echo ($row["payment_status"] == 'Pending') ? "selected" : ""; ?>>Pending</option>
                                                        <option value="Approved" class="approved" <?php echo ($row["payment_status"] == 'Approved') ? "selected" : ""; ?>>Approved</option>
                                                    </select>
                                                </div>
                                            </form>
                                        </td>
                                        <!-- Edit and delete buttons -->
                                        <td class="col-remove"><a href="edit.php?id=<?php echo $row['tournament_id']?>&ta_id=<?php echo $row['application_id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5"></i></a></td>
                                        <td class="col-remove"><a href="delete.php?id=<?php echo $row["application_id"] ?>" class="link-dark" onclick="return confirmDelete();"><i class="fa-solid fa-trash fs-5"></i></a></td>
                                    </tr>
                                <?php

                                }
                                ?>
                            <?php
                            } else {
                            ?>
                                <tr>
                                    <td colspan="15">
                                        <?php echo 'No records found' ?>
                                    </td>
                                </tr>
                            <?php

                            }
                            ?>
                        </tbody>
                    </table>

                    <!-- JavaScript function for confirming deletion -->
                    <script>
                        function confirmDelete() {
                            return confirm("Are you sure you want to delete this record?");
                        }

                        // JavaScript function to submit the form asynchronously
                        function updatePaymentStatus(feeId, status) {
                            // Create a new XMLHttpRequest object
                            var xhr = new XMLHttpRequest();

                            // Prepare the request
                            xhr.open("POST", "", true); // Use current URL for the request
                            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

                            // Define what happens on successful data submission
                            xhr.onreadystatechange = function() {
                                if (xhr.readyState === XMLHttpRequest.DONE) {
                                    if (xhr.status === 200) {


                                        // Reload the page upon successful submission
                                        window.location.reload();
                                    } else {
                                        // Log error message to console
                                        console.error("Error updating payment status. Status code: " + xhr.status);
                                    }
                                }
                            };

                            // Send the request
                            xhr.send("fee_id=" + feeId + "&status=" + status);
                        }
                    </script>

                    <!-- auto submit and conform delete script end -->

                    <!-- php database end -->
                <?php } ?>
            </div>
            <script>

            </script>

        </div>
        <!-- admin-dashbord-end -->


        <!-- Bootstrap js start -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
        <!-- Bootstrap js end-->

        </div>


    </body>

    </html>
<?php } else {
    header("Location: ../../../index.php");
} ?>
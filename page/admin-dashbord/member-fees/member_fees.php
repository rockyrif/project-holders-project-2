<?php
session_start();
?>
<?php if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") { ?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit member fees</title>



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
                    <P class="" style=" margin-bottom: 0 !important;">MEMBER FEES</P>

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

                <!-- Aleart start -->
                <?php
                if (isset($_GET["msg"])) {
                    $msg = $_GET["msg"];
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ' . $msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                ?>
                <!-- Aleart end -->

                <!-- filtering ui start -->
                <div class="row mb-2 mt-1 filter-section">
                    <div class="col-md-12">

                    </div>
                    <div class="col-md-12">

                        <div class="row">
                            <div class="col-md-2 mb-2">
                                <a href="add-new.php" class="btn btn-dark">Add New</a>
                            </div>

                            <div class="col-md-10">
                                <form action="member_fees.php" method="GET">
                                    <P class="table-heading" style=" margin-bottom: 1 !important;">Member Table</P>
                                    <div class="row container mb-3">

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

                                    <P class="table-heading" style=" margin-bottom: 1 !important;">Member Fee Table</P>
                                    <div class="row container mb-3">
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="mf.`member_id`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('mf.`member_id`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Member ID
                                            </label>
                                        </div>

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`year`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`year`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Year
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`month`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`month`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Month
                                            </label>
                                        </div>

                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`fee_amount`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`fee_amount`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Fee Amount
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`paid_date`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`paid_date`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Paid Date
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`proof_url`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`proof_url`', $_GET['column'])) ? 'checked' : ''; ?>>
                                            <label class="form-check-label" for="flexCheckIndeterminate">
                                                Payment Proof
                                            </label>
                                        </div>
                                        <div class="form-check col-md-4">
                                            <input class="form-check-input" type="checkbox" value="`payment_status`" name="column[]" id="flexCheckIndeterminate" <?= (isset($_GET['column']) && in_array('`payment_status`', $_GET['column'])) ? 'checked' : ''; ?>>
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
                                            <input type="text" name="name" value="<?= isset($_GET['name']) ? $_GET['name'] : '' ?>" class="form-control" placeholder="Name">
                                        </div>

                                        <div class="col-md mb-2">
                                            <select name="payment-status" id="" class="form-select">
                                                <option value="">Payment Status</option>
                                                <option value="Not yet" <?= isset($_GET['payment-status']) == true ? ($_GET['payment-status'] == 'Not yet' ? 'selected' : '') : '' ?>>Not yet
                                                </option>
                                                <option value="Paid" <?= isset($_GET['payment-status']) == true ? ($_GET['payment-status'] == 'Paid' ? 'selected' : '') : '' ?>>Paid
                                                </option>

                                            </select>
                                        </div>

                                        <div class="col-md mb-2">
                                            <select name="month" id="" class="form-select">
                                                <option value="">Month</option>
                                                <option value="01" <?= isset($_GET['month']) == true ? ($_GET['month'] == '01' ? 'selected' : '') : '' ?>>January</option>
                                                <option value="02" <?= isset($_GET['month']) == true ? ($_GET['month'] == '02' ? 'selected' : '') : '' ?>>February</option>
                                                <option value="03" <?= isset($_GET['month']) == true ? ($_GET['month'] == '03' ? 'selected' : '') : '' ?>>March</option>
                                                <option value="04" <?= isset($_GET['month']) == true ? ($_GET['month'] == '04' ? 'selected' : '') : '' ?>>April</option>
                                                <option value="05" <?= isset($_GET['month']) == true ? ($_GET['month'] == '05' ? 'selected' : '') : '' ?>>May</option>
                                                <option value="06" <?= isset($_GET['month']) == true ? ($_GET['month'] == '06' ? 'selected' : '') : '' ?>>June</option>
                                                <option value="07" <?= isset($_GET['month']) == true ? ($_GET['month'] == '07' ? 'selected' : '') : '' ?>>July</option>
                                                <option value="08" <?= isset($_GET['month']) == true ? ($_GET['month'] == '08' ? 'selected' : '') : '' ?>>August</option>
                                                <option value="09" <?= isset($_GET['month']) == true ? ($_GET['month'] == '09' ? 'selected' : '') : '' ?>>September</option>
                                                <option value="10" <?= isset($_GET['month']) == true ? ($_GET['month'] == '10' ? 'selected' : '') : '' ?>>October</option>
                                                <option value="11" <?= isset($_GET['month']) == true ? ($_GET['month'] == '11' ? 'selected' : '') : '' ?>>November</option>
                                                <option value="12" <?= isset($_GET['month']) == true ? ($_GET['month'] == '12' ? 'selected' : '') : '' ?>>December</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-4 mb-2">
                                            <button class="btn btn-dark" type="submit">Filter</button>
                                            <a href="member_fees.php" type="reset" class="btn btn-dark">Reset</a>
                                            <button class="btn btn-dark print-btn" onclick="window.print();">Print</button>
                                        </div>
                                    </div>



                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- filtering ui end -->



                <div class="container-2">
                    <?php

                    if ((isset($_GET['member-id']) || isset($_GET['name']) || isset($_GET['member-type']) || isset($_GET['month'])) && isset($_GET['column'])) {
                    ?>

                        <?php
                       

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fee_id"]) && isset($_POST["status"])) {
                            include_once 'db_conn.php'; // Include database connection file
                            $feeId = $_POST["fee_id"];
                            $status = $_POST["status"];

                            // Prepare and execute SQL statement to update payment status
                            $sql = "UPDATE member_fees SET payment_status = '$status' WHERE fee_id = '$feeId'";

                            if ($conn->query($sql) === TRUE) {
                                $_SESSION['response'] = "Payment status updated successfully."; // Store success message in session
                            } else {
                                $_SESSION['response'] = "Error updating payment status: " . $conn->error; // Store error message in session
                            }

                            
                            exit();
                        }

                        // Check if response exists in session and display it
                        if (isset($_SESSION['response'])) {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            ' . $_SESSION['response'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';

                            // Unset the response from session to clear it after displaying
                            unset($_SESSION['response']);
                        }
                        ?>



                        <table class="table table-hover text-center ">

                            <thead class="table-dark">
                                <tr>
                                    <th scope="col">Fee ID</th>

                                    <?php
                                    if (isset($_GET['column']) && in_array('`id_prefix`', $_GET['column'])) {
                                    ?>
                                        <th scope="col">ID Prefix</th>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (isset($_GET['column']) && in_array('mf.`member_id`', $_GET['column'])) {
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
                                        <th scope="col">Phone1</th>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (isset($_GET['column']) && in_array('`phone2`', $_GET['column'])) {
                                    ?>
                                        <th scope="col">Phone2</th>
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
                                        <th scope="col">Reg Date</th>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (isset($_GET['column']) && in_array('`year`', $_GET['column'])) {
                                    ?>
                                        <th scope="col">Year</th>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (isset($_GET['column']) && in_array('`month`', $_GET['column'])) {
                                    ?>
                                        <th scope="col">Month</th>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (isset($_GET['column']) && in_array('`fee_amount`', $_GET['column'])) {
                                    ?>
                                        <th scope="col">Fee Amount</th>
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
                                    if (isset($_GET['column']) && in_array('`proof_url`', $_GET['column'])) {
                                    ?>
                                        <th scope="col">Payment Proof</th>
                                    <?php
                                    }
                                    ?>

                                    <?php
                                    if (isset($_GET['column']) && in_array('`payment_status`', $_GET['column'])) {
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
                                // Fetch the selected columns from the form
                                $selectedColumns = isset($_GET['column']) ? $_GET['column'] : array(); // Ensure $selectedColumns is always an array

                                // Construct the SELECT query based on the selected columns
                                $selectQuery = "SELECT `fee_id`, ";
                                $selectQuery .= implode(',', $selectedColumns); // Assuming $selectedColumns contains valid column names
                                $selectQuery .= " FROM member_fees mf "; // Alias member_fees table as mf
                                $selectQuery .= "INNER JOIN members m ON mf.member_id = m.member_id "; // Join with members table

                                // Initialize an empty array to store conditions
                                $conditions = array();

                                // Check each form field for data and construct conditions accordingly
                                if (!empty($_GET['member-id'])) {
                                    $conditions[] = "mf.member_id = {$_GET['member-id']}";
                                }

                                if (!empty($_GET['name'])) {
                                    $name = mysqli_real_escape_string($conn, $_GET['name']); // Sanitize input
                                    $conditions[] = "(m.first_name LIKE '%$name%' OR m.last_name LIKE '%$name%')";
                                }

                                if (!empty($_GET['payment-status'])) {
                                    $paymentStatus = mysqli_real_escape_string($conn, $_GET['payment-status']); // Sanitize input
                                    $conditions[] = "mf.payment_status = '$paymentStatus'";
                                }

                                if (!empty($_GET['month'])) {
                                    $month = mysqli_real_escape_string($conn, $_GET['month']); // Sanitize input
                                    $conditions[] = "mf.month = '$month'";
                                }

                                // Construct the WHERE clause
                                $whereClause = '';
                                if (!empty($conditions)) {
                                    $whereClause = " WHERE " . implode(" AND ", $conditions);
                                }

                                // Construct the final SQL query
                                $sql = $selectQuery . $whereClause . " ORDER BY mf.fee_id DESC";

                                echo $sql;


                                // Execute the SQL query
                                $result = mysqli_query($conn, $sql);


                                // Check if query executed successfully
                                if ($result && mysqli_num_rows($result) > 0) {
                                    // Display table header

                                    // Fetch and display data
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>

                                            <td>
                                                <?php echo $row["fee_id"]; ?>
                                            </td>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`id_prefix`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["id_prefix"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('mf.`member_id`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["member_id"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>


                                            <?php
                                            if (isset($_GET['column']) && in_array('`first_name`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["first_name"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>


                                            <?php
                                            if (isset($_GET['column']) && in_array('`last_name`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["last_name"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`email`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["email"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`phone1`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["phone1"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`phone2`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["phone2"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`date_of_birth`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["date_of_birth"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`address`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["address"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`member_type`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["member_type"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`occupation`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["occupation"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`school`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["school"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`gender`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["gender"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`registration_date`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["registration_date"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`year`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["year"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`month`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["month"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`fee_amount`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["fee_amount"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`paid_date`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <?php echo $row["paid_date"]; ?>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`proof_url`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <a href="#" onclick="window.open('<?php echo $row['proof_url'] ?>', '_blank', 'width=600,height=400'); return false;">View</a>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <?php
                                            if (isset($_GET['column']) && in_array('`payment_status`', $_GET['column'])) {
                                            ?>
                                                <td>
                                                    <!-- Form to update payment status -->
                                                    <form method="post">
                                                        <!-- Hidden input field for fee_id -->
                                                        <input type="hidden" name="fee_id" value="<?php echo $row['fee_id']; ?>">
                                                        <div style="display:flex; justify-content:center;">
                                                            <!-- Dropdown to select payment status -->
                                                            <select style="width:200px;" class="form-select payment-form-select <?php echo ($row["payment_status"] == 'Paid') ? "paid" : "not-paid"; ?>" name="status" onchange="updatePaymentStatus(<?php echo $row['fee_id']; ?>, this.value)">
                                                                <!-- Option for payment status Not yet -->
                                                                <option value="Not yet" <?php echo ($row["payment_status"] == 'Not yet') ? "selected" : ""; ?>>Not yet</option>
                                                                <!-- Option for payment status Paid -->
                                                                <option value="Paid" <?php echo ($row["payment_status"] == 'Paid') ? "selected" : ""; ?>>Paid</option>
                                                            </select>
                                                        </div>
                                                    </form>
                                                </td>
                                            <?php
                                            }
                                            ?>

                                            <td class="col-remove"><a href="edit.php?id=<?php echo $row["fee_id"]; ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5"></i></a></td>

                                            <td class="col-remove"><a href="delete.php?id=<?php echo $row["fee_id"]; ?>" class="link-dark" onclick="return confirmDelete();"><i class="fa-solid fa-trash fs-5"></i></a></td>


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

                        <!-- php filtering end -->
                    <?php

                    } else { ?>

                        <?php

                        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["fee_id"]) && isset($_POST["status"])) {
                            include_once 'db_conn.php'; // Include database connection file
                            $feeId = $_POST["fee_id"];
                            $status = $_POST["status"];

                            // Prepare and execute SQL statement to update payment status
                            $sql = "UPDATE member_fees SET payment_status = '$status' WHERE fee_id = '$feeId'";

                            if ($conn->query($sql) === TRUE) {
                                $_SESSION['response'] = "Payment status updated successfully."; // Store success message in session
                            } else {
                                $_SESSION['response'] = "Error updating payment status: " . $conn->error; // Store error message in session
                            }

                           
                            exit();
                        }

                        // Check if response exists in session and display it
                        if (isset($_SESSION['response'])) {
                            echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                            ' . $_SESSION['response'] . '
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';

                            // Unset the response from session to clear it after displaying
                            unset($_SESSION['response']);
                        }
                        ?>

                        <!-- Displaying member fees table -->
                        <table class="table table-hover text-center">
                            <!-- Table headers -->
                            <thead class="table-dark">
                                <tr>
                                    <!-- Table column headers -->
                                    <th scope="col">Fee ID</th>
                                    <th scope="col">Member ID</th>
                                    <th scope="col">Year</th>
                                    <th scope="col">Month</th>
                                    <th scope="col">Fee Amount</th>
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
                                // Select data from member_fees table
                                $sql = "SELECT * FROM `member_fees` ORDER BY `fee_id` DESC";
                                $result = mysqli_query($conn, $sql);
                                $conn->close();
                                if ($result && mysqli_num_rows($result) > 0) {
                                    // Loop through query results
                                    while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                        <tr>
                                            <!-- Displaying table data -->
                                            <td><?php echo $row["fee_id"]; ?></td>
                                            <td><?php echo $row["member_id"] ?></td>
                                            <td><?php echo $row["year"] ?></td>
                                            <td><?php echo $row["month"] ?></td>
                                            <td><?php echo $row["fee_amount"] ?></td>
                                            <td><?php echo $row["paid_date"] ?></td>
                                            <td><a href="#" onclick="window.open('<?php echo $row['proof_url'] ?>', '_blank', 'width=600,height=400'); return false;">View</a></td>
                                            <td>
                                                <!-- Form to update payment status -->
                                                <form method="post">
                                                    <!-- Hidden input field for fee_id -->
                                                    <input type="hidden" name="fee_id" value="<?php echo $row['fee_id']; ?>">
                                                    <div style="display:flex; justify-content:center;">
                                                        <!-- Dropdown to select payment status -->
                                                        <select style="width:200px;" class="form-select payment-form-select <?php echo ($row["payment_status"] == 'Paid') ? "paid" : "not-paid"; ?>" name="status" onchange="updatePaymentStatus(<?php echo $row['fee_id']; ?>, this.value)">
                                                            <!-- Option for payment status Not yet -->
                                                            <option value="Not yet" <?php echo ($row["payment_status"] == 'Not yet') ? "selected" : ""; ?>>Not yet</option>
                                                            <!-- Option for payment status Paid -->
                                                            <option value="Paid" <?php echo ($row["payment_status"] == 'Paid') ? "selected" : ""; ?>>Paid</option>
                                                        </select>
                                                    </div>
                                                </form>
                                            </td>
                                            <!-- Edit and delete buttons -->
                                            <td class="col-remove"><a href="edit.php?id=<?php echo $row["fee_id"] ?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5"></i></a></td>
                                            <td class="col-remove"><a href="delete.php?id=<?php echo $row["fee_id"] ?>" class="link-dark" onclick="return confirmDelete();"><i class="fa-solid fa-trash fs-5"></i></a></td>
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
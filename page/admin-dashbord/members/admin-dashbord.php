<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>



    <link rel="stylesheet" href="style.css">

    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <!-- bootstrap end -->

    <!-- online fonts start -->
    <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold"
        rel="stylesheet">
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
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

            <div class="admin-dashbord-tittle">
                <P class="" data-aos="fade-up" data-aos-duration="2000">ADMIN-DASHBORD</P>

            </div>

            <!-- AOS script start -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
            <!-- AOS script end-->

            <?php
            if (isset ($_GET["msg"])) {
                $msg = $_GET["msg"];
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ' . $msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
            }
            ?>

            <!-- filtering start -->
            <div class="row mb-2 mt-1">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-2 mb-2">
                            <a href="add-new.php" class="btn btn-dark">Add New</a>
                        </div>

                        <div class="col-md-10">
                            <form action="admin-dashbord.php" method="GET">
                                <div class="row">
                                    <div class="col-md-3 mb-3">
                                        <input type="text" name="member-id"
                                            value="<?= isset ($_GET['member-id']) ? $_GET['member-id'] : ''; ?>"
                                            class="form-control" placeholder="Member id">
                                    </div>

                                    <div class="col-md-2 mb-3">
                                        <input type="text" name="name"
                                            value="<?= isset ($_GET['name']) ? $_GET['name'] : '' ?>"
                                            class="form-control" placeholder="Name">
                                    </div>

                                    <div class="col-md-3 mb-2">
                                        <select name="member-type" id="" class="form-select">
                                            <option value="">Member type</option>
                                            <option value="adult" <?= isset ($_GET['member-type']) == true ? ($_GET['member-type'] == 'adult' ? 'selected' : '') : '' ?>>Adult</option>
                                            <option value="child" <?= isset ($_GET['member-type']) == true ? ($_GET['member-type'] == 'child' ? 'selected' : '') : '' ?>>Child</option>

                                        </select>
                                    </div>


                                    <div class="col-md-2 mb-2">
                                        <select name="month" id="" class="form-select">
                                            <option value="">Month</option>
                                            <option value="01" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '01' ? 'selected' : '') : '' ?>>January</option>
                                            <option value="02" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '02' ? 'selected' : '') : '' ?>>February</option>
                                            <option value="03" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '03' ? 'selected' : '') : '' ?>>March</option>
                                            <option value="04" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '04' ? 'selected' : '') : '' ?>>April</option>
                                            <option value="05" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '05' ? 'selected' : '') : '' ?>>May</option>
                                            <option value="06" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '06' ? 'selected' : '') : '' ?>>June</option>
                                            <option value="07" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '07' ? 'selected' : '') : '' ?>>July</option>
                                            <option value="08" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '08' ? 'selected' : '') : '' ?>>August</option>
                                            <option value="09" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '09' ? 'selected' : '') : '' ?>>September</option>
                                            <option value="10" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '10' ? 'selected' : '') : '' ?>>October</option>
                                            <option value="11" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '11' ? 'selected' : '') : '' ?>>November</option>
                                            <option value="12" <?= isset ($_GET['month']) == true ? ($_GET['month'] == '12' ? 'selected' : '') : '' ?>>December</option>
                                        </select>
                                    </div>

                                    <div class="col-md-2 mb-2">
                                        <button class="btn btn-dark" type="submit">Filter</button>
                                        <a href="admin-dashbord.php" type="reset" class="btn btn-dark">Reset</a>
                                    </div>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
            <!-- filtering end -->




            <div class="container-2">
                <table class="table table-hover text-center ">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Last Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">DOB</th>
                            <th scope="col">Address</th>
                            <th scope="col">Member Type</th>
                            <th scope="col">Occupation</th>
                            <th scope="col">School</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Reg Date</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>

                    <?php
                    if (isset ($_GET['member-id']) || isset ($_GET['name']) || isset ($_GET['member-type']) || isset ($_GET['month'])) {
                        ?>
                        <tbody>
                            <?php
                            // Include database connection
                            include "db_conn.php";

                            // Initialize an empty array to store conditions
                            $conditions = array();

                            // Check each form field for data and construct conditions accordingly
                            if (!empty ($_GET['member-id'])) {
                                $conditions[] = "member_id = {$_GET['member-id']}";
                            }

                            if (!empty ($_GET['name'])) {
                                $conditions[] = "(first_name LIKE '%{$_GET['name']}%' OR last_name LIKE '%{$_GET['name']}%')";
                            }

                            if (!empty ($_GET['member-type'])) {
                                $conditions[] = "member_type = '{$_GET['member-type']}'";
                            }

                            if (!empty ($_GET['month'])) {
                                $conditions[] = "MONTH(registration_date) = '{$_GET['month']}'";
                            }

                            // Construct the SQL query
                            $sql = "SELECT * FROM members";

                            // Add WHERE clause if conditions are provided
                            if (!empty ($conditions)) {
                                $sql .= " WHERE " . implode(" AND ", $conditions);
                            }

                            // Execute the SQL query
                            $result = mysqli_query($conn, $sql);

                            // Check if query executed successfully
                            if ($result) {
                                // Display table header
                        

                                // Fetch and display data
                                while ($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td>
                                            <?php echo $row["member_id"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["first_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["last_name"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["email"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["phone"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["date_of_birth"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["address"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["member_type"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["occupation"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["school"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["gender"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $row["registration_date"]; ?>
                                        </td>
                                        <td><a href="edit.php?id=<?php echo $row["member_id"]; ?>" class="link-dark"><i
                                                    class="fa-solid fa-pen-to-square fs-5"></i></a></td>
                                        <td><a href="delete.php?id=<?php echo $row["member_id"]; ?>" class="link-dark"><i
                                                    class="fa-solid fa-trash fs-5"></i></a></td>
                                    </tr>
                                    <?php
                                }

                                // Close table body and table
                                ?>
                            </tbody>


                        <?php }
                    } else { ?>

                        <tbody>
                            <?php
                            include "db_conn.php";
                            $sql = "SELECT * FROM `members`";
                            $result = mysqli_query($conn, $sql);
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <tr>

                                    <td>
                                        <?php echo $row["member_id"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["first_name"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["last_name"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["email"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["phone"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["date_of_birth"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["address"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["member_type"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["occupation"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["school"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["gender"] ?>
                                    </td>
                                    <td>
                                        <?php echo $row["registration_date"] ?>
                                    </td>


                                    <td>
                                        <a href="edit.php?id=<?php echo $row["member_id"] ?>" class="link-dark"><i
                                                class="fa-solid fa-pen-to-square fs-5 "></i></a>
                                    </td>
                                    <td>
                                        <a href="delete.php?id=<?php echo $row["member_id"] ?>" class="link-dark"><i
                                                class="fa-solid fa-trash fs-5"></i></a>
                                    </td>

                                </tr>

                                <?php
                            }
                            ?>
                        </tbody>
                    <?php } ?>
                </table>
            </div>





        </div>
        <!-- admin-dashbord-end -->


        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>

    </div>


</body>

</html>
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

        <!-- About-us-page-start -->
        <div class="admin-dashbord">

            <div class="admin-dashbord-tittle">
                <P class="" data-aos="fade-up" data-aos-duration="2000">ADMIN-DASHBORD</P>

            </div>

            <!-- AOS script start -->
            <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
            <script>
                AOS.init();
            </script>
            <!-- AOS script end-->

            <div class="container">
                <?php
                if (isset ($_GET["msg"])) {
                    $msg = $_GET["msg"];
                    echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ' . $msg . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                }
                ?>
                <a href="add-new.php" class="btn btn-dark mb-3">Add New</a>

                <table class="table table-hover text-center">
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
                            <th scope="col">Gender</th>
                            <th scope="col">Reg Date</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
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
                </table>
            </div>





        </div>
        <!-- About-us-page-end -->


        <!-- Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
            crossorigin="anonymous"></script>

    </div>


</body>

</html>
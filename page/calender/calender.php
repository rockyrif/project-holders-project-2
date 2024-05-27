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
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Tournament Calendar</P>
            </div>

            <?php
            // Initialize variables to store form values
            $startDate = $endDate = $stateFilter = $tournamentName = "";

            // Check if the form is submitted
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Retrieve form values from POST data
                $startDate = $_POST['startDate'];
                $endDate = $_POST['endDate'];
                $stateFilter = $_POST['stateFilter'];
                $tournamentName = $_POST['tournamentName'];
            }
            ?>

            <div class="container filter-container p-3">
                <form id="filterForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                    <div class="row">
                        <div class="col-md-3 filter-input">
                            <label for="startDate">Start Date:</label>
                            <input type="date" name="startDate" id="startDate" class="form-control" value="<?php echo $startDate; ?>">
                        </div>
                        <div class="col-md-3 filter-input">
                            <label for="endDate">End Date:</label>
                            <input type="date" name="endDate" id="endDate" class="form-control" value="<?php echo $endDate; ?>">
                        </div>
                        <div class="col-md-3 filter-input">
                            <label for="stateFilter">State of Tournament:</label>
                            <select name="stateFilter" id="stateFilter" class="form-control">
                                <option value="" <?php if ($stateFilter == "") echo 'selected="selected"'; ?>>Select State</option>
                                <option value="entry_open" <?php if ($stateFilter == "entry_open") echo 'selected="selected"'; ?>>Entry Open</option>
                                <option value="cancelled" <?php if ($stateFilter == "cancelled") echo 'selected="selected"'; ?>>Cancelled</option>
                                <option value="matches_on" <?php if ($stateFilter == "matches_on") echo 'selected="selected"'; ?>>Matches On</option>
                                <option value="completed" <?php if ($stateFilter == "completed") echo 'selected="selected"'; ?>>Completed</option>
                            </select>
                        </div>
                        <div class="col-md-3 filter-input">
                            <label for="tournamentName">Tournament Name:</label>
                            <input type="text" name="tournamentName" id="tournamentName" class="form-control" placeholder="Tournament Name" value="<?php echo $tournamentName; ?>">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 d-flex justify-content-right">
                            <input type="submit" class="btn btn-primary me-2" value="Filter" name="submit">
                            <button type="button" onclick="window.print();" id="printButton" class="btn btn-primary me-2">Print</button>
                            <a href="calender.php" class="btn btn-primary">Reset</a>
                        </div>
                    </div>
                </form>
            </div>


            <?php
            // Include the database connection file
            include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";


            if (isset($_POST['submit'])) {
                // Get form values
                $startDate = $_POST['startDate'];
                $endDate = $_POST['endDate'];
                $stateFilter = $_POST['stateFilter'];
                $tournamentName = $_POST['tournamentName'];

                // Generate SQL query
                $sql = "SELECT * FROM tournament_schedule WHERE 1=1";
                $params = array();

                if (!empty($startDate)) {
                    $sql .= " AND start_date >= ?";
                    $params[] = $startDate;
                }

                if (!empty($endDate)) {
                    $sql .= " AND end_date <= ?";
                    $params[] = $endDate;
                }

                if (!empty($stateFilter)) {
                    $sql .= " AND state = ?";
                    $params[] = $stateFilter;
                }

                if (!empty($tournamentName)) {
                    $sql .= " AND name LIKE ?";
                    $params[] = "%$tournamentName%";
                }

                // Prepare the statement
                $stmt = $conn->prepare($sql);

                if ($stmt === false) {
                    die("Error in preparing statement: " . $conn->error);
                }

                // Bind parameters
                $types = str_repeat('s', count($params)); // Assuming all parameters are strings
                $stmt->bind_param($types, ...$params);

                // Execute the statement
                if (!$stmt->execute()) {
                    die("Error in executing statement: " . $stmt->error);
                }

                // Bind result variables
                $stmt->bind_result($id, $name, $type, $start_date, $end_date, $tournament_format, $age_category, $description, $state, /*, ... */);

                // Fetch the results
                $rows = array();
                while ($stmt->fetch()) {
                    $row = array(
                        'id' => $id,
                        'name' => $name,
                        'type' => $type,
                        'start_date' => $start_date,
                        'end_date' => $end_date,
                        'tournament_format' => $tournament_format,
                        'age_category[]' => $age_category,
                        'description' => $description,
                        'state' => $state,
                        // ...
                    );
                    $rows[] = $row;
                }

                // Close statement
                $stmt->close();
            } else {
                // Define the default SQL query
                $sql = "SELECT * FROM tournament_schedule ORDER BY id DESC";

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
            }

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
                                <?php if ($row['state'] == 'entry_open') {
                                ?>
                                    <a href="apply.php?id=<?= $row['id'] ?>" class="btn btn-primary apply ms-1">Apply</a>
                                <?php
                                } ?>
                            </div>
                            <p class="card-subtitle">Ampara District Tennis Club</p>
                            <ul class="card-details">

                                <li> Start Date - <?= $row['start_date'] ?></li>
                                <li> End date - <?= $row['end_date'] ?></li>
                                <li> Age Categories - <?= $row['age_category[]'] ?></li>
                                <li> Type - <?= $row['type'] ?></li>
                                <li> Registration fee amount/Description - <?= $row['description'] ?></li>

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
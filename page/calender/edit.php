<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
    include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

    // Initialize variables to hold form data
    $name = $type = $start_date = $end_date = $description = $age_category = '';

    if (isset($_GET['id'])) {
        $id = mysqli_real_escape_string($conn, $_GET['id']);

        // Fetch tournament data
        $sql = "SELECT * FROM tournament_schedule WHERE tournament_id = '$id'";
        $result = mysqli_query($conn, $sql);

        if ($result && mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);

            // Populate variables with data from the database
            $name = $row['name'];
            $type = $row['type'];

            $start_date = $row['start_date'];
            $end_date = $row['end_date'];

            $description = $row['description'];
            $age_category = explode(',', $row['age_category[]']);
            $state = $row['state'];
        }
    }

    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get form data and sanitize it
        $name = mysqli_real_escape_string($conn, $_POST['tournament-name']);

        $type = mysqli_real_escape_string($conn, $_POST['type']);

        $start_date = mysqli_real_escape_string($conn, $_POST['start-date']);
        $end_date = mysqli_real_escape_string($conn, $_POST['end-date']);

        $description = mysqli_real_escape_string($conn, $_POST['description']);
        $state = mysqli_real_escape_string($conn, $_POST['state']);

        // Process age-category array
        if (isset($_POST['age-category'])) {
            $age_category = implode(',', $_POST['age-category']);
            $age_category = mysqli_real_escape_string($conn, $age_category);
        } else {
            $age_category = '';
        }

        // Construct SQL query for update
        if (isset($id)) {
            $sql = "UPDATE tournament_schedule SET name='$name', type='$type', start_date='$start_date', end_date='$end_date', `age_category[]`='$age_category', description='$description', state='$state' WHERE tournament_id='$id'";
        } else {
            // Construct SQL query for insert
            $sql = "INSERT INTO tournament_schedule (name, type, start_date, end_date, `age_category[]`, description, state) 
                    VALUES ('$name', '$type', '$start_date', '$end_date', '$age_category', '$description', '$state')";
        }

        // Execute the query
        if ($conn->query($sql) === TRUE) {
            $_SESSION['response'] = "Tournament data updated successfully";
            header('location: calender.php');
            exit;
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }

        // Close the connection
        $conn->close();
    }
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

        <title>ADTC add</title>
    </head>

    <body>
        <?php
        include '../../components/navbar/navbar.php';
        ?>

        <div class="container" style="margin-top:93px;">


            <div class="text-center mb-4">
                <h3>Add New Tournament</h3>
                <p class="text-muted">Complete the form below to add a Tournament</p>
            </div>

            <div class="container d-flex justify-content-center">
                <form id="tournament-form" action="" method="post" style="width:50vw; min-width:300px;">
                    <div class="mb-3">
                        <label class="form-label" for="tournament-name-dropdown">Name of Tournament:</label>
                        <select class="form-select" name="tournament-name-dropdown" id="tournament-name-dropdown" required>
                            <option value="Fruit Juice & Beach Tennis Tournament" <?php echo ($name == 'Fruit Juice & Beach Tennis Tournament') ? 'selected' : ''; ?>>Fruit Juice & Beach Tennis Tournament</option>
                            <option value="Fruit Juice Tournament" <?php echo ($name == 'Fruit Juice Tournament') ? 'selected' : ''; ?>>Fruit Juice Tournament</option>
                            <option value="Beach Tennis Tournament" <?php echo ($name == 'Beach Tennis Tournament') ? 'selected' : ''; ?>>Beach Tennis Tournament</option>
                            <option value="Ranking Tournament" <?php echo ($name == 'Ranking Tournament') ? 'selected' : ''; ?>>Ranking Tournament</option>
                            <option value="Inter School Tournament" <?php echo ($name == 'Inter School Tournament') ? 'selected' : ''; ?>>Inter School Tournament</option>
                            <option value="Year End Tournament" <?php echo ($name == 'Year End Tournament') ? 'selected' : ''; ?>>Year End Tournament</option>
                            <?php
                            $predefined_tournaments = ['Fruit Juice & Beach Tennis Tournament', 'Fruit Juice Tournament', 'Beach Tennis Tournament', 'Ranking Tournament', 'Year End Tournament', 'Inter School Tournament'];
                            ?>
                            <option value="Other" <?php echo (!in_array($name, $predefined_tournaments)) ? 'selected' : ''; ?>>Other</option>
                        </select>
                    </div>
                    <div class="mb-3 tournament-name-text-div" id="tournament-name-text-div" style="display: none;">
                        <label class="form-label">Enter Tournament Name:</label>
                        <input type="text" class="form-control" name="tournament-name-text" id="tournament-name-text" value="<?php echo (!in_array($name, $predefined_tournaments)) ? $name : ''; ?>">
                    </div>
                    <input type="hidden" name="tournament-name" id="tournament-name">

                    <script>
                        document.getElementById('tournament-name-dropdown').addEventListener('change', function() {
                            var otherInputDiv = document.getElementById('tournament-name-text-div');
                            if (this.value === 'Other') {
                                otherInputDiv.style.display = 'block';
                            } else {
                                otherInputDiv.style.display = 'none';
                            }
                        });

                        document.getElementById('tournament-form').addEventListener('submit', function(event) {
                            var dropdownValue = document.getElementById('tournament-name-dropdown').value;
                            var otherValue = document.getElementById('tournament-name-text').value.trim();
                            var combinedValue;

                            if (dropdownValue === 'Other') {
                                if (otherValue === '') {
                                    event.preventDefault(); // Prevent form submission if "Other" is selected but no name is entered
                                    alert('Please enter a tournament name.');
                                    return;
                                }
                                combinedValue = otherValue;
                            } else {
                                combinedValue = dropdownValue;
                            }

                            document.getElementById('tournament-name').value = combinedValue;
                        });
                    </script>

                    <div class="mb-3">
                        <label class="form-label" for="type">Type:</label>
                        <select class="form-select" name="type" id="type" required>
                            <option value="SLTA Tennis" <?php echo ($type == 'SLTA Tennis') ? 'selected' : ''; ?>>SLTA Tennis</option>
                            <option value="ADTC Tennis" <?php echo ($type == 'ADTC Tennis') ? 'selected' : ''; ?>>ADTC Tennis</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Start date:</label>
                        <input type="date" class="form-control" name="start-date" placeholder="1999-06-22" value="<?php echo htmlspecialchars($start_date); ?>" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">End date:</label>
                        <input type="date" class="form-control" name="end-date" placeholder="1999-06-22" value="<?php echo htmlspecialchars($end_date); ?>" required>
                    </div>

                    <div class="text-center mb-3">
                        <h3>SELECT TYPES OF MATCHES</h3>
                    </div>



                    <div id="tournament-format-singles" class="mb-3">
                        <div class="text-center mb-3">
                            <h3>SINGLE MATCHES</h3>
                        </div>
                        <div class="d-flex justify-content-between">
                            <div>
                                <fieldset class="form-group">
                                    <label class="form-label" for="age-category[]">Boys:</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="BS-18" <?php echo (in_array('BS-18', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-18">
                                            Under 18
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="BS-16" <?php echo (in_array('BS-16', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-16">
                                            Under 16
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="BS-14" <?php echo (in_array('BS-14', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-14">
                                            Under 14
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="BS-12" <?php echo (in_array('BS-12', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-12">
                                            Under 12
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-10" value="BS-10" <?php echo (in_array('BS-10', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-10">
                                            Under 10
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-8" value="BS-8" <?php echo (in_array('BS-8', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-8">
                                            Under 8
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-6" value="BS-6" <?php echo (in_array('BS-6', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-6">
                                            Under 6
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <div>
                                <fieldset class="form-group">
                                    <label class="form-label" for="age-category[]">Girls:</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="GS-18" <?php echo (in_array('GS-18', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-18">
                                            Under 18
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="GS-16" <?php echo (in_array('GS-16', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-16">
                                            Under 16
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="GS-14" <?php echo (in_array('GS-14', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-14">
                                            Under 14
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="GS-12" <?php echo (in_array('GS-12', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-12">
                                            Under 12
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-10" value="GS-10" <?php echo (in_array('GS-10', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-10">
                                            Under 10
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-8" value="GS-8" <?php echo (in_array('GS-8', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-8">
                                            Under 8
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-7" value="GS-6" <?php echo (in_array('GS-6', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-7">
                                            Under 6
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <div>
                                <fieldset class="form-group">
                                    <label class="form-label" for="age-category[]">Women's:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="WS" <?php echo (in_array('WS', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-open">
                                            Open
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <div>
                                <fieldset class="form-group">
                                    <label class="form-label" for="age-category[]">Men's:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="MS" <?php echo (in_array('MS', $age_category)) ? 'checked' : ''; ?>>
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

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="BD-18" <?php echo (in_array('BD-18', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-18">
                                            Under 18
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="BD-16" <?php echo (in_array('BD-16', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-16">
                                            Under 16
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="BD-14" <?php echo (in_array('BD-14', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-14">
                                            Under 14
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="BD-12" <?php echo (in_array('BD-12', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-12">
                                            Under 12
                                        </label>
                                    </div>
                                </fieldset>
                            </div>

                            <div>
                                <fieldset class="form-group">
                                    <label class="form-label" for="age-category[]">Girls:</label>

                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="GD-18" <?php echo (in_array('GD-18', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-18">
                                            Under 18
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="GD-16" <?php echo (in_array('GD-16', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-16">
                                            Under 16
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="GD-14" <?php echo (in_array('GD-14', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-14">
                                            Under 14
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="GD-12" <?php echo (in_array('GD-12', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-under-12">
                                            Under 12
                                        </label>
                                    </div>

                                </fieldset>
                            </div>
                            <div>
                                <fieldset class="form-group">
                                    <label class="form-label" for="age-category[]">Women's:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="WD" <?php echo (in_array('WD', $age_category)) ? 'checked' : ''; ?>>
                                        <label class="form-check-label" for="age-open">
                                            Open
                                        </label>
                                    </div>


                                </fieldset>
                            </div>

                            <div>
                                <fieldset class="form-group">
                                    <label class="form-label" for="age-category[]">Men's:</label>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="MD" <?php echo (in_array('MD', $age_category)) ? 'checked' : ''; ?>>
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
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-adult-open" value="X" <?php echo (in_array('X', $age_category)) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="age-adult-open">
                                        Open
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="X-18" <?php echo (in_array('X-18', $age_category)) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="age-under-18">
                                        Under 18
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="X-16" <?php echo (in_array('X-16', $age_category)) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="age-under-16">
                                        Under 16
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="X-14" <?php echo (in_array('X-14', $age_category)) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="age-under-14">
                                        Under 14
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="X-12" <?php echo (in_array('X-12', $age_category)) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="age-under-14">
                                        Under 12
                                    </label>
                                </div>

                            </fieldset>
                        </div>
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Registration fee amount:</label>
                        <input type="text" class="form-control" name="description" value="<?php echo htmlspecialchars($description); ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label" for="state">Tournament state:</label>
                        <select class="form-select" name="state" id="state">
                            <option value="NULL" <?php echo ($state == 'NULL') ? 'selected' : ''; ?>>Not Display</option>
                            <option value="entry_open" <?php echo ($state == 'entry_open') ? 'selected' : ''; ?>>Entry open</option>
                            <option value="entry_open_soon" <?php echo ($state == 'entry_open_soon') ? 'selected' : ''; ?>>Entry open soon</option>
                            <option value="postponed" <?php echo ($state == 'postponed') ? 'selected' : ''; ?>>Postponed</option>
                            <option value="entry_closed" <?php echo ($state == 'entry_closed') ? 'selected' : ''; ?>>Entry closed</option>
                            <option value="cancelled" <?php echo ($state == 'cancelled') ? 'selected' : ''; ?>>Cancelled</option>
                            <option value="matches_on" <?php echo ($state == 'matches_on') ? 'selected' : ''; ?>>Matches on</option>
                            <option value="completed" <?php echo ($state == 'completed') ? 'selected' : ''; ?>>Complete</option>
                        </select>
                    </div>

                    <div class="mb-3">
                        <button type="submit" onclick="prepareFormData()" class="btn btn-success" name="submit">Save</button>
                        <a href="admin-dashbord.php" class="btn btn-danger ">Cancel</a>
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
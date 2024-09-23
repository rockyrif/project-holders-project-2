<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

session_start();
include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php"; // Include your DB connection file

// Check for POST request
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['id']) && isset($_POST['column']) && isset($_POST['value'])) {
        $id = $_POST['id'];
        $column = $_POST['column'];
        $value = $_POST['value'];

        // Sanitize inputs
        $id = htmlspecialchars($id, ENT_QUOTES, 'UTF-8');
        $column = htmlspecialchars($column, ENT_QUOTES, 'UTF-8');
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

        // Define allowed columns
        $allowed_columns = ['boys', 'boys-id', 'girls', 'girls-id', 'womens', 'womens-id', 'mens', 'mens-id', 'mixed', 'mixed-id']; // Add actual columns as needed
        if (!in_array($column, $allowed_columns)) {
            echo "Invalid column.";
            exit;
        }

        // Use prepared statement for security
        $stmt = $conn->prepare("UPDATE `double_matches` SET `$column` = ? WHERE `id` = ?");
        if ($stmt) {
            $stmt->bind_param('si', $value, $id); // 'si' = string, integer
            if ($stmt->execute()) {
                echo "Record updated successfully";
            } else {
                echo "Error updating record: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Failed to prepare statement: " . $conn->error;
        }
    } else {
        echo "Required fields are missing.";
    }
    exit;
} 
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit match types</title>

    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="print.css" media="print">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">

    <!-- Online Fonts -->
    <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold" rel="stylesheet">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">

    <!-- AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

    <div class="home">
        <!-- Navbar -->
        <?php include '../../../components/navbar/navbar.php'; ?>

        <!-- Admin Dashboard -->
        <div class="admin-dashbord container">
            <div class="admin-dashbord-tittle mb-4" style="position: relative;">
                <p class="" style="margin-bottom: 0 !important;">Double matches</p>
                <div class="time" style="position: absolute; right: 0%;">
                    <?php
                    date_default_timezone_set('Asia/Colombo');
                    echo date('Y-m-d H:i:s');
                    ?>
                </div>
            </div>

            <!-- Alert -->
            <?php
            if (isset($_SESSION['response'])) {
                echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    ' . $_SESSION['response'] . '
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>';
                unset($_SESSION['response']);
            }
            ?>

            <button id="saveChangesBtn" class="btn btn-primary">Save Changes</button>

            <br><br>

            <div class="container-2" id="childScroll" onscroll="saveScrollPositions()">
                <table class="table table-hover text-center">
                    <thead class="table-dark">
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">BOYS</th>
                            <th scope="col">BOYS-ID</th>
                            <th scope="col">GIRLS</th>
                            <th scope="col">GIRLS-ID</th>
                            <th scope="col">WOMEN'S</th>
                            <th scope="col">WOMEN'S-ID</th>
                            <th scope="col">MEN'S</th>
                            <th scope="col">MEN'S ID</th>
                            <th scope="col">MIXED</th>
                            <th scope="col">MIXED ID</th>
                            
                            <th scope="col" class="col-remove">DELETE</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                        include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php"; // Include your DB connection file
                        $sql = "SELECT * FROM `double_matches`";
                        $result = mysqli_query($conn, $sql);

                        if ($result && mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr>
                                    <td><?php echo $row["id"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="boys"><?php echo $row["boys"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="boys-id"><?php echo $row["boys-id"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="girls"><?php echo $row["girls"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="girls-id"><?php echo $row["girls-id"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="womens"><?php echo $row["womens"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="womens-id"><?php echo $row["womens-id"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="mens"><?php echo $row["mens"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="mens-id"><?php echo $row["mens-id"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="mixed"><?php echo $row["mixed"]; ?></td>
                                    <td contenteditable="true" data-id="<?php echo $row['id']; ?>" data-column="mixed-id"><?php echo $row["mixed-id"]; ?></td>
                                    
                                    <td class="col-remove">
                                        <a href="delete.php?id=<?php echo $row["id"] ?>" class="link-dark" onclick="return confirmDelete();"><i class="fa-solid fa-trash fs-5"></i></a>
                                    </td>
                                </tr>
                            <?php }
                        } else { ?>
                            <tr>
                                <td colspan="11">No records found</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

            <!-- Bootstrap JS -->
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

            <script>
                async function saveCellChanges() {
                    let updatedData = [];
                    console.log(updatedData);

                    // Collect all editable cells' data
                    document.querySelectorAll('[contenteditable="true"]').forEach(cell => {
                        let id = cell.getAttribute('data-id');
                        let column = cell.getAttribute('data-column');
                        let newValue = cell.innerText.trim(); // Use innerText and trim, but collect even if it's empty.

                        // Push the data to updatedData, regardless of whether newValue is empty
                        updatedData.push({
                            id: id,
                            column: column,
                            value: newValue
                        });
                    });


                    if (confirm('Do you want to save all changes?')) {
                        let requests = updatedData.map(data => {
                            return new Promise((resolve, reject) => {
                                let xhr = new XMLHttpRequest();
                                xhr.open('POST', 'add-double-match-types.php', true);
                                xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
                                xhr.onload = function() {
                                    if (xhr.status === 200) {
                                        console.log('Record updated successfully for ID:', data.id);
                                        resolve(xhr.responseText);
                                    } else {
                                        console.error('Error updating record for ID:', data.id, xhr.statusText);
                                        reject(xhr.statusText);
                                    }
                                };
                                xhr.onerror = function() {
                                    console.error('Request error for ID:', data.id, xhr.statusText);
                                    reject(xhr.statusText);
                                };
                                xhr.send('id=' + encodeURIComponent(data.id) + '&column=' + encodeURIComponent(data.column) + '&value=' + encodeURIComponent(data.value));
                                console.log(data.id);
                                console.log(data.column);
                                console.log(data.value);

                            });
                        });

                        try {
                            await Promise.all(requests);
                            alert('All changes have been saved successfully.');
                        } catch (error) {
                            alert('Some changes could not be saved. Check the console for details.');
                            console.error('Error details:', error);
                        }
                    }
                }

                document.getElementById('saveChangesBtn').addEventListener('click', function() {
                    saveCellChanges();
                });
            </script>

        </div>
    </div>
</body>

</html>
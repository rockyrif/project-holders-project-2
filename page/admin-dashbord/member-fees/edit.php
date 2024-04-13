<?php
session_start();
?>

<?php
include "db_conn.php";

if (isset($_POST["submit"])) {
  $id = $_GET["id"];
  $member_id = $_POST['member-id'];
  $year = $_POST['year'];
  $month = $_POST['month'];
  $fee_amount = $_POST['fee-amount'];
  $payment_date = $_POST['payment-date'];

  // Check if payment proof is set
  $proof_url = '';
  if (isset($_FILES["payment-proof"]) && $_FILES["payment-proof"]["error"] == UPLOAD_ERR_OK) {
    // Handle image upload
    $targetDir = "../../../Images/payment-proof/";
    // Process file upload
    $targetFile = $targetDir . $id . "." . strtolower(pathinfo($_FILES["payment-proof"]["name"], PATHINFO_EXTENSION));
    
    // Check file format and size
    $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
    if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
      echo "Sorry, only JPG, JPEG, PNG files are allowed.";
    } elseif ($_FILES["payment-proof"]["size"] > 500000) { // 500kb limit
      echo "Sorry, your file is too large. limit to 500kb.";
    } else {
      // Upload image
      if (move_uploaded_file($_FILES["payment-proof"]["tmp_name"], $targetFile)) {
        // Image uploaded successfully
        $proof_url = $targetFile;
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
  }

  // Prepare SQL update statement
  $sql = "UPDATE member_fees 
          SET fee_amount = '$fee_amount', 
              paid_date = '$payment_date',
              member_id = $member_id,
              month = $month,
              year = $year";

  // Include proof_url in the update if it's set
  if ($proof_url !== '') {
    $sql .= ", proof_url = '$proof_url'";
  }

  // Add WHERE clause
  $sql .= " WHERE fee_id = '$id'";

  // Execute SQL statement
  if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully.";
  } else {
    echo "Error updating record: " . mysqli_error($conn);
  }

  // Close database connection
  mysqli_close($conn);
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

  <title>ADTC edit fee</title>
</head>

<body>
  <?php
  include '../../../components/navbar/navbar.php';
  ?>



  <div class="container" style="margin-top:93px;">
    <div class="text-center mb-4">
      <h3>Edit Payment</h3>
      <p class="text-muted">Complete the form below to Edit a payment</p>
    </div>

    <?php
    $id = $_GET["id"];
    $sql = "SELECT * FROM `member_fees` WHERE fee_id = $id LIMIT 1";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);


    ?>

    <div class="container d-flex justify-content-center">
      <form action="edit.php?id=<?= $_GET["id"] ?>" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">

        <div class="mb-3">
          <label class="form-label">Member ID:</label>
          <select class="form-select" name="member-id">
            <?php

            // Select data from member_fees table
            $sql1 = "SELECT `member_id` FROM `members` ORDER BY `member_id` DESC";
            $result1 = mysqli_query($conn, $sql1);

            if ($result1 && mysqli_num_rows($result1) > 0) {
              // Loop through query results
              while ($row1 = mysqli_fetch_assoc($result1)) {

            ?>
                <option value="<?= $row1['member_id']; ?>" <?= ($row1['member_id'] == $row['member_id']) ? 'selected' : ''; ?>> <?= $row1['member_id']; ?> </option>
              <?php
              }
            } else {
              ?>
              <option value="">no records</option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="mb-3">
          <label for="year" class="form-label">Enter year payment for:</label>
          <input type="number" class="form-control" pattern="\d{4}" id="year" name="year" min="2023" max="3000" placeholder="2024" value="<?= $row['year'] ?>">
        </div>

        <div class="mb-3">
          <label for="year" class="form-label">Enter month payment for:</label>
          <input type="number" class="form-control" pattern="\d{2}" id="month" name="month" min="01" max="12" placeholder="01" value="<?= $row['month'] ?>">
        </div>

        <!-- <script>
          document.getElementById('month').addEventListener('input', function(event) {
            let value = event.target.value;
            if (value.length === 1 && value !== '0') {
              event.target.value = '0' + value; // prepend '0' if the length is 1 and the value is not '0'
            } else if (value.length > 2) {
              event.target.value = value.slice(0, 2); // truncate to the first two characters if the length is greater than 2
            }
          });
        </script> -->

        <div class="mb-3">
          <label for="fee-amount" class="form-label">Fee amount:</label>
          <input type="number" class="form-control" id="fee-amount" name="fee-amount" placeholder="250" value="<?= $row['fee_amount'] ?>">
        </div>

        <div class="mb-3">
          <label class="form-label">Paid date:</label>
          <input type="date" class="form-control" name="payment-date" placeholder="1999-06-22" required value="<?= $row['paid_date'] ?>">
        </div>

        <div class="mb-3">
          <label for="formFile" class="form-label">Payment proof:</label>
          <input class="form-control" type="file" id="formFile" name="payment-proof">
        </div>

        <div class="mb-3">
          <button type="submit" class="btn btn-success" name="submit">Upadte</button>
          <a href="member_fees.php" class="btn btn-danger ">Cancel</a>
        </div>
      </form>
    </div>
  </div>

  <!-- Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>

</html>
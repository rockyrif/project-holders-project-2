<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
?>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

if (isset($_POST["submit"])) {

   $member_id = $_POST['member-id'];
   $year = $_POST['year'];
   $month = $_POST['month'];
   $fee_amount = $_POST['fee-amount'];
   $payment_date = $_POST['payment-date'];

   // Handle image upload
   $targetDir = "../../../Images/payment-proof/";
   if (isset($_FILES["payment-proof"]) && $_FILES["payment-proof"]["error"] == UPLOAD_ERR_OK) {
      // Get the last payment_id from the database
      $sql_last_fee_id = "SELECT MAX(fee_id) AS max_fee_id FROM member_fees";
      $result_last_fee_id = mysqli_query($conn, $sql_last_fee_id);
      $row_last_fee_id = mysqli_fetch_assoc($result_last_fee_id);
      $last_fee_id = $row_last_fee_id['max_fee_id'];

      // Increment the last payment_id to get the new payment_id
      $new_fee_id = $_SESSION["email"]."-".$year."-".$month;
      // Get file extension
      $imageFileType = strtolower(pathinfo($_FILES["payment-proof"]["name"], PATHINFO_EXTENSION));
      // Process file upload
      $targetFile = $targetDir . $new_fee_id . "." . $imageFileType;
      // Rest of your code for file upload and processing
   } else {
      // Handle file upload error
      $_SESSION['response'] = "File upload failed with error code: " . $_FILES["payment-proof"]["error"];
   }

   $imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
   // Check if image file is a valid format and size
   if ($imageFileType != "jpg" && $imageFileType != "jpeg" && $imageFileType != "png") {
      $_SESSION['response'] = "Sorry, only JPG, JPEG, PNG files are allowed.";
   } elseif ($_FILES["payment-proof"]["size"] > 500000) { // 2MB limit
      $_SESSION['response'] = "Sorry, your file is too large. limit to 500kb.";
   } else {
      // Upload image
      if (move_uploaded_file($_FILES["payment-proof"]["tmp_name"], $targetFile)) {
         // Image uploaded successfully, proceed to insert data into database
         $proof_url = $targetFile;

         // Prepare and execute SQL insert statement
         $sql = "INSERT INTO member_fees (member_id, year, month, fee_amount, paid_date, proof_url)
                    VALUES ('$member_id', '$year', '$month', '$fee_amount', '$payment_date', '$proof_url')";

         if (mysqli_query($conn, $sql)) {
            $conn->close();
            $_SESSION['response'] = "Record inserted successfully.";
         } else {
            $_SESSION['response'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
         }
      } else {
         $_SESSION['response'] = "Sorry, there was an error uploading your file.";
      }
   }
}
// Close database connection
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

   <title>ADTC add fee</title>
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
         <h3>Add New Payment</h3>
         <p class="text-muted">Complete the form below to add a new payment</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="add-new.php" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">

            <div class="mb-3">
               <label class="form-label">Member ID:</label>
               <select class="form-select" name="member-id">
                  <option value=""> Select </option>
                  <?php
                  include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";
                  // Select data from member_fees table
                  $sql = "SELECT `member_id` FROM `members` ORDER BY `member_id` DESC";
                  
                  $result = mysqli_query($conn, $sql);
                  $conn->close();
                  if ($result && mysqli_num_rows($result) > 0) {
                     // Loop through query results
                     while ($row = mysqli_fetch_assoc($result)) {

                  ?>
                        <option value="<?= $row['member_id']; ?>"> <?= $row['member_id']; ?> </option>
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
               <input type="number" class="form-control" pattern="\d{4}" id="year" name="year" min="2023" max="3000" placeholder="2024">
            </div>

            <div class="mb-3">
               <label for="year" class="form-label">Enter month payment for:</label>
               <input type="number" class="form-control" pattern="\d{2}" id="month" name="month" min="01" max="12" placeholder="01">
            </div>

            <div class="mb-3">
               <label for="fee-amount" class="form-label">Fee amount:</label>
               <input type="number" class="form-control" id="fee-amount" name="fee-amount" placeholder="250">
            </div>

            <div class="mb-3">
               <label class="form-label">Paid date:</label>
               <input type="date" class="form-control" name="payment-date" placeholder="1999-06-22" required>
            </div>

            <div class="mb-3">
               <label for="formFile" class="form-label">Payment proof:</label>
               <input class="form-control" type="file" id="formFile" name="payment-proof">
            </div>

            <div class="mb-3">
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="member_fees.php" class="btn btn-danger ">Cancel</a>
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


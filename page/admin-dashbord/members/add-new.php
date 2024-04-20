<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
?>
<?php
include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

if (isset ($_POST["submit"])) {
   $id_prefix_text = "ADTC"; 
   $id_prefix_gender = ($_POST['gender']=="male")? 'M' : 'F';
   $id_prefix_member_type = ($_POST['member_type']=="adult")? 'A' : 'C';
   $id_prefix_current_year = date("Y");

   $id_prefix = $id_prefix_text."-".$id_prefix_current_year."-".$id_prefix_gender.$id_prefix_member_type;
   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $email = $_POST['email'];
   $phone1 = $_POST['phone1'];
   $phone2 = $_POST['phone2'];
   $dob = $_POST['dob'];
   $address = $_POST['address'];
   $member_type = $_POST['member_type'];
   $occupation = $_POST['occupation'];
   $school = $_POST['school'];
   $gender = $_POST['gender'];

   $sql = "INSERT INTO `members`(`id_prefix`,`member_id`, `first_name`, `last_name`, `email`, `phone1`,`phone2`, `date_of_birth`, `address`, `member_type`, `occupation`, `school`, `gender`) VALUES ('$id_prefix','','$first_name','$last_name','$email','$phone1','$phone2','$dob','$address','$member_type','$occupation','$school','$gender')";

   $result = mysqli_query($conn, $sql);

   if ($result) {
      header("Location: admin-dashbord.php?msg=New record created successfully");
   } else {
      echo "Failed: " . mysqli_error($conn);
   }
}
$conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <!-- Bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous" referrerpolicy="no-referrer" />

   <!-- online fonts start -->
   <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold"
      rel="stylesheet">
   <!-- online fonts end -->

   <title>ADTC add</title>
</head>

<body>
   <?php
   include '../../../components/navbar/navbar.php';
   ?>

   <div class="container" style="margin-top:93px;">
      <div class="text-center mb-4">
         <h3>Add New member</h3>
         <p class="text-muted">Complete the form below to add a new member</p>
      </div>

      <div class="container d-flex justify-content-center">
         <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
               <div class="col">
                  <label class="form-label">First Name:</label>
                  <input type="text" class="form-control" name="first_name" placeholder="Albert" required>
               </div>

               <div class="col">
                  <label class="form-label">Last Name:</label>
                  <input type="text" class="form-control" name="last_name" placeholder="Einstein" required>
               </div>
            </div>

            <div class="mb-3">
               <label class="form-label">Email:</label>
               <input type="email" class="form-control" name="email" placeholder="name@example.com">
            </div>

            <div class="mb-3">
               <label class="form-label">Phone:</label>
               <input type="text" class="form-control" name="phone1" placeholder="0789642231" required><br>
               <input type="text" class="form-control" name="phone2" placeholder="0789642231 (optional)">
            </div>

            <div class="mb-3">
               <label class="form-label">Date of birth:</label>
               <input type="date" class="form-control" name="dob" placeholder="1999-06-22" required>
            </div>

            <div class="mb-3">
               <label class="form-label">Address:</label>
               <input type="text" class="form-control" name="address" placeholder="no 3 sahivu road kalmunai-4" required>
            </div>

            <div class="mb-3">
               <label class="form-label" for="member_type">Member type</label>
               <select class="form-select" name="member_type" id="member_type" required>
                  <option value="adult">Adult</option>
                  <option value="child">Child</option>
               </select>
            </div>

            <div id="occupationInput" class="mb-3">
               <label class="form-label" for="occupation">Occupation</label>
               <input type="text" class="form-control" name="occupation" id="occupation">
            </div>

            <div id="schoolInput" class="mb-3" style="display: none;">
               <label class="form-label" for="school">School</label>
               <input type="text" class="form-control" name="school" id="school">
            </div>

            <!-- script to change dynamic form based on member type -->
            <script>
               const memberTypeSelect = document.getElementById('member_type');
               const occupationInput = document.getElementById('occupationInput');
               const schoolInput = document.getElementById('schoolInput');

               memberTypeSelect.addEventListener('change', function () {
                  if (memberTypeSelect.value === 'adult') {
                     occupationInput.style.display = 'block';
                     schoolInput.style.display = 'none';
                  } else if (memberTypeSelect.value === 'child') {
                     occupationInput.style.display = 'none';
                     schoolInput.style.display = 'block';
                  }
               });
            </script>
            <!-- script to change dynamic form based on member type -->



            <div class="form-group mb-3">
               <label>Gender:</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="male" value="male" required>
               <label for="gender" class="form-input-label">Male</label>
               &nbsp;
               <input type="radio" class="form-check-input" name="gender" id="female" value="female" required>
               <label for="gender" class="form-input-label">Female</label>
               &nbsp;
      
            </div>

            <div class="mb-3">
               <button type="submit" class="btn btn-success" name="submit">Save</button>
               <a href="admin-dashbord.php" class="btn btn-danger ">Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <!-- Bootstrap -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
      crossorigin="anonymous"></script>

</body>

</html>
<?php } else {
    header("Location: ../../../index.php");
} ?>
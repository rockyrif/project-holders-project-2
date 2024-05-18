<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
?>
   <?php
   include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";

   if (isset($_POST["submit"])) {
      $id_prefix_text = "ADTC";
      $id_prefix_gender = ($_POST['gender'] == "male") ? 'M' : 'F';
      $id_prefix_member_type = ($_POST['member_type'] == "adult") ? 'A' : 'C';
      $id_prefix_current_year = date("Y");

      $id_prefix = $id_prefix_text . "-" . $id_prefix_current_year . "-" . $id_prefix_gender . $id_prefix_member_type;
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $email = $_SESSION["email"];
      $phone1 = $_POST['phone1'];
      $phone2 = $_POST['phone2'];
      $dob = $_POST['dob'];
      $address = $_POST['address'];
      $member_type = $_POST['member_type'];
      $occupation = $_POST['occupation'];
      $school = $_POST['school'];
      $gender = $_POST['gender'];
      $reg_date = date("Y-m-d");

      // Handle payment proof image upload
      $payment_proof_targetDir = "Images/membership-payment-proof/";
      $payment_proof_targetDir1 = "../../../Images/membership-payment-proof/";

      if (isset($_FILES["picture"]) && $_FILES["picture"]["error"] == UPLOAD_ERR_OK) {
         // Increment the last payment_id to get the new payment_id
         $new_member_pic_id = $_SESSION["email"];
         // Get file extension
         $payment_proof_imageFileType = strtolower(pathinfo($_FILES["picture"]["name"], PATHINFO_EXTENSION));
         // Process file upload
         $payment_proof_targetFile = $payment_proof_targetDir1 . $new_member_pic_id . "." . $payment_proof_imageFileType;
         // Rest of your code for file upload and processing
      } else {
         // Handle file upload error
         $_SESSION['response'] = "File upload failed with error code: " . $_FILES["picture"]["error"];
      }


      // Check if image file is a valid format and size
      if ($payment_proof_imageFileType != "jpg" && $payment_proof_imageFileType != "jpeg" && $payment_proof_imageFileType != "png") {
         $_SESSION['response'] = "Sorry, only JPG, JPEG, PNG files are allowed in .";
      } elseif ($_FILES["picture"]["size"] > 500000) { // 500kb limit
         $_SESSION['response'] = "Sorry, your file is too large. Limit to 500 KB.";
      } else {
         // Handle Profile pic image upload
         $profile_pic_targetDir = "Images/profile-pic/";
         $profile_pic_targetDir1 = "../../../Images/profile-pic/";

         $image_info = getimagesize($_FILES["profile"]["tmp_name"]);
         $width = $image_info[0];
         $height = $image_info[1];

         if (isset($_FILES["profile"]) && $_FILES["profile"]["error"] == UPLOAD_ERR_OK) {
            // Get file extension
            $profile_imageFileType = strtolower(pathinfo($_FILES["profile"]["name"], PATHINFO_EXTENSION));
            // Process file upload
            $profile_pic_targetFile = $profile_pic_targetDir1 . $new_member_pic_id . "." . $profile_imageFileType;
            // Rest of your code for file upload and processing
         } else {
            // Handle file upload error
            $_SESSION['response'] = "File upload failed with error code: " . $_FILES["profile"]["error"];
         }


         // Check if image file is a valid format and size
         if ($profile_imageFileType != "jpg" && $profile_imageFileType != "jpeg" && $profile_imageFileType != "png") {
            $_SESSION['response'] = "Sorry, only JPG, JPEG, PNG files are allowed.";
         } elseif ($_FILES["profile"]["size"] > 500000) { // 500kb limit
            $_SESSION['response'] = "Sorry, your profile image is too large. Limit to 500 KB.";
         } elseif ($width != $height) {
            $_SESSION['response'] = "Sorry, only square images (1:1 aspect ratio) are allowed as profile picture.";
         } else {
            // Proceed with upload and database insertion
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $profile_pic_targetFile) && move_uploaded_file($_FILES["picture"]["tmp_name"], $payment_proof_targetFile)) {
               // Image uploaded successfully, proceed to insert data into database
               $profile_url = $profile_pic_targetDir . $new_member_pic_id . "." . $profile_imageFileType;
               $payment_proof_url = $payment_proof_targetDir . $new_member_pic_id . "." . $payment_proof_imageFileType;
               // Prepare and execute SQL insert statement
               $sql = "INSERT INTO `members`(`id_prefix`,`member_id`, `first_name`, `last_name`, `email`, `phone1`,`phone2`, `date_of_birth`, `address`, `member_type`, `occupation`, `school`, `gender`, `profile_url`, `proof_url`, `registration_date`) VALUES ('$id_prefix','','$first_name','$last_name','$email','$phone1','$phone2','$dob','$address','$member_type','$occupation','$school','$gender','$profile_url','$payment_proof_url','$reg_date')";

               if (mysqli_query($conn, $sql)) {
                  $_SESSION['response'] = "Member added successfully.";
                  header("Location: admin-dashbord.php");
               } else {
                  $_SESSION['response'] = "Error: " . $sql . "<br>" . mysqli_error($conn);
               }
            } else {
               $_SESSION['response'] = "Sorry, there was an error uploading your file.";
            }
         }
      }
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
      include '../../../components/navbar/navbar.php';
      ?>

      <div class="container" style="margin-top:93px;">


         <div class="text-center mb-4">
            <h3>Add New Tournament</h3>
            <p class="text-muted">Complete the form below to add a new member</p>
         </div>

         <div class="container d-flex justify-content-center">
            <form id="tournament-form" action="" method="post" enctype="multipart/form-data" style="width:50vw; min-width:300px;">
               <div class="mb-3">
                  <label class="form-label" for="tournament-name-dropdown">Name of Tournament:</label>
                  <select class="form-select" name="tournament-name-dropdown" id="tournament-name-dropdown" required>
                     <option value="Fruit Juice">Fruit Juice</option>
                     <option value="Beach Tennis">Beach Tennis</option>
                     <option value="Ranking">Ranking</option>
                     <option value="Year End">Year End</option>
                     <option value="Other">Other</option>
                  </select>
               </div>
               <div class="mb-3 tournament-name-text-div" id="tournament-name-text-div" style="display: none;">
                  <label class="form-label">Enter Tournament Name:</label>
                  <input type="text" class="form-control" name="tournament-name-text">
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
                     <option value="SLTA Tennis">SLTA Tennis</option>
                     <option value="Club Tennis">Club Tennis</option>
                  </select>
               </div>

               <div class="mb-3">
                  <label class="form-label" for="grade">Grade:</label>
                  <select class="form-select" name="grade" id="grade" required>
                     <option value="Grade 3">Grade 3</option>
                     <option value="Grade 4">Grade 4</option>
                     <option value="Grade 5">Grade 5</option>
                     <option value="Not defined">Not defined</option>
                  </select>
               </div>

               <div class="mb-3">
                  <label class="form-label">Start date:</label>
                  <input type="date" class="form-control" name="start-date" placeholder="1999-06-22" required>
               </div>

               <div class="mb-3">
                  <label class="form-label">End date:</label>
                  <input type="date" class="form-control" name="end-date" placeholder="1999-06-22" required>
               </div>

               <div class="text-center mb-3">
                  <h3>Schedule Matches</h3>
               </div>

               <div class="mb-3">
                  <label class="form-label" for="tournament-format">Tournament Format:</label>
                  <select class="form-select" name="tournament-format" id="tournament-format" onchange="toggleSections()" required>
                     <option value="Singles">Singles</option>
                     <option value="Doubles">Doubles</option>
                  </select>
               </div>

               <div id="tournament-format-singles" class="mb-3">
                  <div class="mb-3">
                     <label class="form-label" for="tournament-category">Tournament Category:</label>
                     <select class="form-select" name="tournament-category" id="tournament-category" required>
                        <option value="Girls">Girls</option>
                        <option value="Boys">Boys</option>
                     </select>
                  </div>

                  <fieldset class="form-group">
                     <label class="form-label" for="age-category[]">Age Category:</label>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="Open">
                        <label class="form-check-label" for="age-open">
                           Open
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="Under 18">
                        <label class="form-check-label" for="age-under-18">
                           Under 18
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="Under 16">
                        <label class="form-check-label" for="age-under-16">
                           Under 16
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="Under 14">
                        <label class="form-check-label" for="age-under-14">
                           Under 14
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-12" value="Under 12">
                        <label class="form-check-label" for="age-under-12">
                           Under 12
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-10" value="Under 10">
                        <label class="form-check-label" for="age-under-10">
                           Under 10
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-8" value="Under 8">
                        <label class="form-check-label" for="age-under-8">
                           Under 8
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-6" value="Under 6">
                        <label class="form-check-label" for="age-under-6">
                           Under 6
                        </label>
                     </div>
                  </fieldset>
               </div>

               <div id="tournament-format-doubles" style="display: none;" class="mb-3">
                  <div class="mb-3">
                     <label class="form-label" for="tournament-category">Tournament Category:</label>
                     <select class="form-select" name="tournament-category" id="tournament-category" required>
                        <option value="Girls">Girls</option>
                        <option value="Boys">Boys</option>
                        <option value="Mixed">Mixed</option>
                     </select>
                  </div>

                  <fieldset class="form-group">
                     <label class="form-label" for="age-category[]">Age Category:</label>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-open" value="Open">
                        <label class="form-check-label" for="age-open">
                           Open
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-18" value="Under 18">
                        <label class="form-check-label" for="age-under-18">
                           Under 18
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-16" value="Under 16">
                        <label class="form-check-label" for="age-under-16">
                           Under 16
                        </label>
                     </div>
                     <div class="form-check">
                        <input class="form-check-input" type="checkbox" name="age-category[]" id="age-under-14" value="Under 14">
                        <label class="form-check-label" for="age-under-14">
                           Under 14
                        </label>
                     </div>
                  </fieldset>
               </div>

               <script>
                  function toggleSections() {
                     var formatSelect = document.getElementById("tournament-format");
                     var singlesSection = document.getElementById("tournament-format-singles");
                     var doublesSection = document.getElementById("tournament-format-doubles");

                     if (formatSelect.value === "Singles") {
                        singlesSection.style.display = "block";
                        doublesSection.style.display = "none";
                     } else {
                        singlesSection.style.display = "none";
                        doublesSection.style.display = "block";
                     }
                  }

                  function prepareFormData() {
                     var singlesSection = document.getElementById("tournament-format-singles");
                     var doublesSection = document.getElementById("tournament-format-doubles");

                     if (singlesSection.style.display === "none") {
                        removeHiddenSectionData(doublesSection);
                     } else {
                        removeHiddenSectionData(singlesSection);
                     }
                  }

                  function removeHiddenSectionData(section) {
                     var inputs = section.querySelectorAll('input, select');
                     inputs.forEach(function(input) {
                        if (!input.closest("#tournament-format-singles") || input.closest("#tournament-format-singles").style.display !== "none") {
                           // If the input is not inside the hidden section or if the hidden section is not hidden
                           input.removeAttribute('disabled');
                        } else {
                           // If the input is inside the hidden section and the hidden section is hidden
                           input.setAttribute('disabled', 'disabled');
                        }
                     });
                  }
               </script>

               <div class="mb-3">
                  <label class="form-label">Description:</label>
                  <input type="text" class="form-control" name="description" required>
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
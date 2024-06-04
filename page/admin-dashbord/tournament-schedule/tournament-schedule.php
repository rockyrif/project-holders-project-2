<?php
session_start();
if (isset($_SESSION["username"]) && $_SESSION["privilage"] === "admin") {
?>
   <?php
   include $_SERVER['DOCUMENT_ROOT'] . "/project-holders-project-2/db_conn.php";


   // Check if form is submitted
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
      // Get form data and sanitize it
      $name = mysqli_real_escape_string($conn, $_POST['tournament-name']);
      $type = mysqli_real_escape_string($conn, $_POST['type']);

      $start_date = mysqli_real_escape_string($conn, $_POST['start-date']);
      $end_date = mysqli_real_escape_string($conn, $_POST['end-date']);

      $description = mysqli_real_escape_string($conn, $_POST['description']);

      // Process age-category array
      if (isset($_POST['age-category'])) {
         $age_category = implode(',', $_POST['age-category']);
         $age_category = mysqli_real_escape_string($conn, $age_category);
      } else {
         $age_category = '';
      }

      // Construct SQL query
      $sql = "INSERT INTO tournament_schedule (name, type, start_date, end_date, `age_category[]`, description) 
            VALUES ('$name', '$type', '$start_date', '$end_date', '$age_category', '$description')";

      // Execute the query
      if ($conn->query($sql) === TRUE) {
         $_SESSION['response'] = "New tournament created successfully";
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
      include '../../../components/navbar/navbar.php';
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
                     <option value="Fruit Juice & Beach Tennis Tournament">Fruit Juice & Beach Tennis Tournament</option>
                     <option value="Fruit Juice Tournament">Fruit Juice Tournament</option>
                     <option value="Beach Tennis Tournament">Beach Tennis Tournament</option>
                     <option value="Ranking Tournmaent">Ranking Tournament</option>
                     <option value="Inter School Tournmaent">Inter School Tournament</option>
                     <option value="Year End Tournmaent">Year End Tournament</option>
                     <option value="Other Tournament">Other Tournament</option>
                  </select>
               </div>
               <div class="mb-3 tournament-name-text-div" id="tournament-name-text-div" style="display: none;">
                  <label class="form-label">Enter Tournament Name:</label>
                  <input type="text" class="form-control" name="tournament-name-text" id="tournament-name-text">
               </div>
               <input type="hidden" name="tournament-name" id="tournament-name">

               <script>
                  document.getElementById('tournament-name-dropdown').addEventListener('change', function() {
                     var otherInputDiv = document.getElementById('tournament-name-text-div');
                     if (this.value === 'Other Tournament') {
                        otherInputDiv.style.display = 'block';
                     } else {
                        otherInputDiv.style.display = 'none';
                     }
                  });

                  document.getElementById('tournament-form').addEventListener('submit', function(event) {
                     var dropdownValue = document.getElementById('tournament-name-dropdown').value;
                     var otherValue = document.getElementById('tournament-name-text').value.trim();
                     var combinedValue;

                     if (dropdownValue === 'Other Tournament') {
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
                     <option value="ADTC Tennis">ADTC Tennis</option>
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

               <div id="tournament-format-singles" class="mb-3">
                  <div class="text-center mb-3">
                     <h3>SINGLE MATCHES</h3>
                  </div>
                  <div class="d-flex justify-content-between">
                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Boys:</label>

                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-boys">
                              <label class="form-check-label" for="select-all-boys">
                                 Select All
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys" type="checkbox" name="age-category[]" id="age-under-18-boys" value="BS-18">
                              <label class="form-check-label" for="age-under-18-boys">
                                 Under 18
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys" type="checkbox" name="age-category[]" id="age-under-16-boys" value="BS-16">
                              <label class="form-check-label" for="age-under-16-boys">
                                 Under 16
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys" type="checkbox" name="age-category[]" id="age-under-14-boys" value="BS-14">
                              <label class="form-check-label" for="age-under-14-boys">
                                 Under 14
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys" type="checkbox" name="age-category[]" id="age-under-12-boys" value="BS-12">
                              <label class="form-check-label" for="age-under-12-boys">
                                 Under 12
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys" type="checkbox" name="age-category[]" id="age-under-10-boys" value="BS-10">
                              <label class="form-check-label" for="age-under-10-boys">
                                 Under 10
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys" type="checkbox" name="age-category[]" id="age-under-8-boys" value="BS-8">
                              <label class="form-check-label" for="age-under-8-boys">
                                 Under 8
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys" type="checkbox" name="age-category[]" id="age-under-6-boys" value="BS-6">
                              <label class="form-check-label" for="age-under-6-boys">
                                 Under 6
                              </label>
                           </div>
                        </fieldset>
                     </div>

                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Girls:</label>

                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-girls">
                              <label class="form-check-label" for="select-all-girls">
                                 Select All
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls" type="checkbox" name="age-category[]" id="age-under-18-girls" value="GS-18">
                              <label class="form-check-label" for="age-under-18-girls">
                                 Under 18
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls" type="checkbox" name="age-category[]" id="age-under-16-girls" value="GS-16">
                              <label class="form-check-label" for="age-under-16-girls">
                                 Under 16
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls" type="checkbox" name="age-category[]" id="age-under-14-girls" value="GS-14">
                              <label class="form-check-label" for="age-under-14-girls">
                                 Under 14
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls" type="checkbox" name="age-category[]" id="age-under-12-girls" value="GS-12">
                              <label class="form-check-label" for="age-under-12-girls">
                                 Under 12
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls" type="checkbox" name="age-category[]" id="age-under-10-girls" value="GS-10">
                              <label class="form-check-label" for="age-under-10-girls">
                                 Under 10
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls" type="checkbox" name="age-category[]" id="age-under-8-girls" value="GS-8">
                              <label class="form-check-label" for="age-under-8-girls">
                                 Under 8
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls" type="checkbox" name="age-category[]" id="age-under-6-girls" value="GS-6">
                              <label class="form-check-label" for="age-under-6-girls">
                                 Under 6
                              </label>
                           </div>
                        </fieldset>
                     </div>

                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Women's:</label>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-womens">
                              <label class="form-check-label" for="select-all-womens">
                                 Select All
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input womens" type="checkbox" name="age-category[]" id="age-open-womens" value="WS">
                              <label class="form-check-label" for="age-open-womens">
                                 Open
                              </label>
                           </div>
                        </fieldset>
                     </div>

                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Men's:</label>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-mens">
                              <label class="form-check-label" for="select-all-mens">
                                 Select All
                              </label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input mens" type="checkbox" name="age-category[]" id="age-open-mens" value="MS">
                              <label class="form-check-label" for="age-open-mens">
                                 Open
                              </label>
                           </div>
                        </fieldset>
                     </div>
                  </div>
               </div>

               <script>
                  document.getElementById('select-all-boys').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.boys');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });

                  document.getElementById('select-all-girls').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.girls');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });

                  document.getElementById('select-all-womens').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.womens');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });

                  document.getElementById('select-all-mens').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.mens');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });
               </script>


               <div id="tournament-format-doubles" class="mb-3">
                  <div class="text-center mb-3">
                     <h3>DOUBLE MATCHES</h3>
                  </div>
                  <div class="d-flex justify-content-between">
                     <!-- Boys Category -->
                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Boys:</label>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-boys-doubles">
                              <label class="form-check-label" for="select-all-boys-doubles">Select All</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys-doubles" type="checkbox" name="age-category[]" value="BD-18">
                              <label class="form-check-label">Under 18</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys-doubles" type="checkbox" name="age-category[]" value="BD-16">
                              <label class="form-check-label">Under 16</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys-doubles" type="checkbox" name="age-category[]" value="BD-14">
                              <label class="form-check-label">Under 14</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input boys-doubles" type="checkbox" name="age-category[]" value="BD-12">
                              <label class="form-check-label">Under 12</label>
                           </div>
                        </fieldset>
                     </div>

                     <!-- Girls Category -->
                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Girls:</label>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-girls-doubles">
                              <label class="form-check-label" for="select-all-girls-doubles">Select All</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls-doubles" type="checkbox" name="age-category[]" value="GD-18">
                              <label class="form-check-label">Under 18</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls-doubles" type="checkbox" name="age-category[]" value="GD-16">
                              <label class="form-check-label">Under 16</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls-doubles" type="checkbox" name="age-category[]" value="GD-14">
                              <label class="form-check-label">Under 14</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input girls-doubles" type="checkbox" name="age-category[]" value="GD-12">
                              <label class="form-check-label">Under 12</label>
                           </div>
                        </fieldset>
                     </div>

                     <!-- Women's Category -->
                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Women's:</label>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-womens-doubles">
                              <label class="form-check-label" for="select-all-womens-doubles">Select All</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input womens-doubles" type="checkbox" name="age-category[]" value="WD">
                              <label class="form-check-label">Open</label>
                           </div>
                        </fieldset>
                     </div>

                     <!-- Men's Category -->
                     <div>
                        <fieldset class="form-group">
                           <label class="form-label">Men's:</label>
                           <div class="form-check">
                              <input class="form-check-input" type="checkbox" id="select-all-mens-doubles">
                              <label class="form-check-label" for="select-all-mens-doubles">Select All</label>
                           </div>
                           <div class="form-check">
                              <input class="form-check-input mens-doubles" type="checkbox" name="age-category[]" value="MD">
                              <label class="form-check-label">Open</label>
                           </div>
                        </fieldset>
                     </div>
                  </div>
                  <!-- Mixed Category -->
                  <div>
                     <fieldset class="form-group">
                        <label class="form-label">Mixed:</label>
                        <div class="form-check">
                           <input class="form-check-input" type="checkbox" id="select-all-mixed-doubles">
                           <label class="form-check-label" for="select-all-mixed-doubles">Select All</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input mixed-doubles" type="checkbox" name="age-category[]" value="X">
                           <label class="form-check-label">Open</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input mixed-doubles" type="checkbox" name="age-category[]" value="X-18">
                           <label class="form-check-label">Under 18</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input mixed-doubles" type="checkbox" name="age-category[]" value="X-16">
                           <label class="form-check-label">Under 16</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input mixed-doubles" type="checkbox" name="age-category[]" value="X-14">
                           <label class="form-check-label">Under 14</label>
                        </div>
                        <div class="form-check">
                           <input class="form-check-input mixed-doubles" type="checkbox" name="age-category[]" value="X-12">
                           <label class="form-check-label">Under 12</label>
                        </div>
                     </fieldset>
                  </div>
               </div>
               <script>
                  document.getElementById('select-all-boys-doubles').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.boys-doubles');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });

                  document.getElementById('select-all-girls-doubles').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.girls-doubles');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });

                  document.getElementById('select-all-womens-doubles').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.womens-doubles');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });

                  document.getElementById('select-all-mens-doubles').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.mens-doubles');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });

                  document.getElementById('select-all-mixed-doubles').addEventListener('change', function() {
                     let checkboxes = document.querySelectorAll('.mixed-doubles');
                     checkboxes.forEach(checkbox => checkbox.checked = this.checked);
                  });
               </script>




               <div class="mb-3">
                  <label class="form-label">Registration fee amount:</label>
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
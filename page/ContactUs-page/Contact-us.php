<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact us</title>
    
    

    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->
    
    <link rel="stylesheet" href="style.css">

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

   

</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
            include '../../components/navbar/navbar.php'; 
        ?>
        <!-- Navbar end -->

        <!-- contact-us-page-start -->
        <div class="contact-us">
            <div class="gallary-tittle">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Contact Us</P>
            </div>

            
	
           
			<div class="submit-request container" data-aos="fade-up" data-aos-duration="2000">

                <h5>Please fill up the following information:</h5>
                <div class="line mb-3"></div>
                <form action="https://script.google.com/macros/s/AKfycbx3JOdyc87_JqmfkShCBGh5w4sAu3DKWfRIwWkmcdWjmL63bTNfbbTAbqMgIV8Gxu8F8g/exec" method="POST" name="Feedback-form">
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputname1" aria-describedby="nameHelp"
                            placeholder="Name" name="Name">

                    </div>
                    <div class="mb-3">
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                            placeholder="Email" name="Email">
                    </div>
                    <div class="mb-3">
                        <input type="text" class="form-control" id="exampleInputmobile1" aria-describedby="mobileHelp"
                            placeholder="Mobile No" name="Mobile-No">
                    </div>
                    <div class="form-floating mb-3">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px" name="Comments"></textarea>
                        <label for="floatingTextarea2" >Message</label>
                    </div>

                    <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                    <Script src="index.js"></Script>
                </form>
          
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
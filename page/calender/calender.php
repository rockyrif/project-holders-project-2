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



</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
        include '../../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->

        <!-- About-us-page-start -->
        <div class="calender-body container">

            <div class="tittle">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Tournament Calendar</P>
            </div>
            <div class="card-container">
                <div class="card">
                    <?php $status = 'cancelled'; ?>
                    <div class="card-body">
                        <img src="../../Images/logo.png" alt="Logo" class="card-logo">
                        <h2 class="card-title">Open Ranking Tournament 2024</h2>
                        <span class="card-status <?php echo $status; ?>"><?php echo ucfirst($status); ?></span>
                        <p class="card-subtitle">Negombo Tennis Club</p>
                        <ul class="card-details">
                            <li><i class="icon-calendar"></i> Week Of - 13 May 2024</li>
                            <li><i class="icon-event"></i> Event Date - 17 May - 23 May</li>
                            <li><i class="icon-category"></i> Age Categories - MS, MD, WS, WD</li>
                            <li><i class="icon-grade"></i> Grade 3</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <?php $status = 'cancelled'; ?>
                    <div class="card-body">
                        <img src="../../Images/logo.png" alt="Logo" class="card-logo">
                        <h2 class="card-title">Open Ranking Tournament 2024</h2>
                        <span class="card-status <?php echo $status; ?>"><?php echo ucfirst($status); ?></span>
                        <p class="card-subtitle">Negombo Tennis Club</p>
                        <ul class="card-details">
                            <li><i class="icon-calendar"></i> Week Of - 13 May 2024</li>
                            <li><i class="icon-event"></i> Event Date - 17 May - 23 May</li>
                            <li><i class="icon-category"></i> Age Categories - MS, MD, WS, WD</li>
                            <li><i class="icon-grade"></i> Grade 3</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <?php $status = 'cancelled'; ?>
                    <div class="card-body">
                        <img src="../../Images/logo.png" alt="Logo" class="card-logo">
                        <h2 class="card-title">Open Ranking Tournament 2024</h2>
                        <span class="card-status <?php echo $status; ?>"><?php echo ucfirst($status); ?></span>
                        <p class="card-subtitle">Negombo Tennis Club</p>
                        <ul class="card-details">
                            <li><i class="icon-calendar"></i> Week Of - 13 May 2024</li>
                            <li><i class="icon-event"></i> Event Date - 17 May - 23 May</li>
                            <li><i class="icon-category"></i> Age Categories - MS, MD, WS, WD</li>
                            <li><i class="icon-grade"></i> Grade 3</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <?php $status = 'cancelled'; ?>
                    <div class="card-body">
                        <img src="../../Images/logo.png" alt="Logo" class="card-logo">
                        <h2 class="card-title">Open Ranking Tournament 2024</h2>
                        <span class="card-status <?php echo $status; ?>"><?php echo ucfirst($status); ?></span>
                        <p class="card-subtitle">Negombo Tennis Club</p>
                        <ul class="card-details">
                            <li><i class="icon-calendar"></i> Week Of - 13 May 2024</li>
                            <li><i class="icon-event"></i> Event Date - 17 May - 23 May</li>
                            <li><i class="icon-category"></i> Age Categories - MS, MD, WS, WD</li>
                            <li><i class="icon-grade"></i> Grade 3</li>
                        </ul>
                    </div>
                </div>
                <div class="card">
                    <?php $status = 'cancelled'; ?>
                    <div class="card-body">
                        <img src="../../Images/logo.png" alt="Logo" class="card-logo">
                        <h2 class="card-title">Open Ranking Tournament 2024</h2>
                        <span class="card-status <?php echo $status; ?>"><?php echo ucfirst($status); ?></span>
                        <p class="card-subtitle">Negombo Tennis Club</p>
                        <ul class="card-details">
                            <li><i class="icon-calendar"></i> Week Of - 13 May 2024</li>
                            <li><i class="icon-event"></i> Event Date - 17 May - 23 May</li>
                            <li><i class="icon-category"></i> Age Categories - MS, MD, WS, WD</li>
                            <li><i class="icon-grade"></i> Grade 3</li>
                        </ul>
                    </div>
                </div>
                
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
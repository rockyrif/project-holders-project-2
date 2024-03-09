<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About us</title>
    
    <link rel="stylesheet" href="style.css">

    <link href="https://db.onlinewebfonts.com/c/1f182a2cd2b60d5a6ac9667a629fbaae?family=PF+Din+Stencil+W01+Bold"
        rel="stylesheet">

    <!-- Goolge fonts start -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Protest+Riot&display=swap" rel="stylesheet">
    <!-- Goolge fonts end -->

    <!-- AOS  strat-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- AOS  end-->

    <!-- local script start -->
    <script src="index.js"></script>
    <!-- local script end -->

    <!-- splide slider start -->
    <script src="
    https://cdn.jsdelivr.net/npm/@splidejs/splide-extension-auto-scroll@0.5.3/dist/js/splide-extension-auto-scroll.min.js
    "></script>

    <script src="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js
    "></script>
    <link href="
    https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css
    " rel="stylesheet">
    <!-- splide slider end -->




</head>

<body>

    <div class="home">

        <!-- Navbar start -->
        <?php
            include '../../components/navbar/navbar.php'; 
        ?>
        <!-- Navbar end -->

        <!-- Find-a-coach-page-start -->
        <div class="find-a-coach-page">

            <div class="find-a-coach-page-tittle">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Find a coach</P>
            </div>

            <div class="find-a-coache">
                <div class="splide" role="group" aria-label="find-a-coache">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-1"></div>
                                    <div class="splide-slide-contant-1-name">K.Muditha Lakmal Fernando</div>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-2"></div>
                                    <div class="splide-slide-contant-1-name">G.B.Prageeth Sandika Sampath</div>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-3"></div>
                                    <div class="splide-slide-contant-1-name">H.Namal Jayasinghe</div>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <!-- <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-4"></div>
                                    <div class="splide-slide-contant-1-name"></div>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li> -->
                            <!-- <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-4"></div>
                                    <div class="splide-slide-contant-1-name"></div>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li> -->
                            <!-- <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img img-4"></div>
                                    <div class="splide-slide-contant-1-name"></div>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                </div>
                <script>
    
    
    
                    const splide = new Splide('.splide', {
                        type: 'loop',
                        drag: 'free',
                        focus: 'center',
    
                        autoScroll: {
                            speed: 1,
                        },
                    });
    
                    splide.mount(window.splide.Extensions);
    
    
    
    
                </script>
    
    
            </div>

            
        </div>
        <!-- Find-a-coach-page-end -->




    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
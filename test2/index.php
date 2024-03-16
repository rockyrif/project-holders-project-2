<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADTC Home</title>

    

    <!-- style sheet start -->
    <link rel="stylesheet" href="style.css">
    <!-- style sheet end -->

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

    <!-- local script start -->
    <script src="index.js"></script>
    <!-- local script end -->


</head>

<body>

    <div class="home">
        <!-- Navbar start -->
        <?php
            include '../components/navbar/navbar.php';
        ?>
        <!-- Navbar end -->

        <!-- carousel start -->
        <div id="carouselExampleSlidesOnly" class="carousel slide section-one" data-bs-ride="carousel">


            <div class="carousel-inner">
                <div class="carousel-item active  img img-1" pause="hover" data-bs-interval="4000">

                    <div class="curousel-object" data-aos="fade-left" data-aos-duration="2000">
                        <img alt="Tennis-bat" src="Images/home-page-carousal/Tennis-bat.gif">
                    </div>

                    <div class="content-flex-center">
                        <div class="carousal-content-and-indicator">
                            <div class="carousel-content" data-aos="fade-up" data-aos-duration="2000">
                                <div class="carousal-para-head">
                                    <div class="carousal-para-heading">
                                        <!-- <h5>First slide label</h5> -->
                                        <img alt="Welcome-banner" src="Images/home-page-carousal/Welcome-banner.png"
                                            width="150" height="100">
                                    </div>

                                    <div class="carousal-para">
                                        <p>Welcome to Ampara District Tennis Club (ADTC), your tennis haven in the heart
                                            of
                                            our
                                            community. We are dedicated to promoting the joy of tennis, fostering
                                            sportsmanship,
                                            and
                                            providing a welcoming environment for players of all levels. Join us on the
                                            courts
                                            as we
                                            create lasting memories and celebrate the spirit of tennis in Ampara
                                            District.
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- carousel indicator start -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                                    class="active" aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="5"
                             aria-label="Slide 6"></button> -->
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="6" aria-label="Slide 7"></button>
                            <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="7" aria-label="Slide 8"></button>  -->
                            </div>
                            <!-- carousel indicator end -->

                        </div>
                    </div>
                </div>

                <div class="carousel-item img img-2" data-bs-interval="4000">
                    <div class="curousel-object">
                        <img alt="pic" src="Images/home-page-carousal/Tennis-bat.gif">
                    </div>
                    <div class="content-flex-center">
                        <div class="carousal-content-and-indicator">
                            <div class="carousel-content" data-aos="fade-up" data-aos-duration="1000">
                                <div class="carousal-para-heading">
                                    <!-- <img alt="pic" src="Images/home-page-carousal/Untitled design (5).png" width="150"
                                    height="100" alt="pic"> -->
                                    <h5>Vision</h5>

                                </div>

                                <div class="carousal-para">
                                    <p>To be the nucleus of tennis excellence and community spirit in Ampara District,
                                        uniting players of all ages and backgrounds.</p>
                                </div>
                            </div>

                            <!-- carousel indicator start -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                                    class="active" aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="5"
                                aria-label="Slide 6"></button> -->
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="7" aria-label="Slide 8"></button>  -->
                            </div>
                            <!-- carousel indicator end -->

                        </div>
                    </div>
                </div>

                <div class="carousel-item img img-3" data-bs-interval="4000">
                    <div class="curousel-object">
                        <img alt="pic" src="Images/home-page-carousal/Tennis-bat.gif">
                    </div>
                    <div class="content-flex-center">
                        <div class="carousal-content-and-indicator">
                            <div class="carousel-content" data-aos="fade-up" data-aos-duration="1000">
                                <div class="carousal-para-heading">
                                    <h5>Mission</h5>
                                    <!-- <img alt="pic" src="Images/home-page-carousal/Untitled design (5).png" width="150"
                                        height="100" alt="pic"> -->
                                </div>

                                <div class="carousal-para">
                                    <p>Our mission is to cultivate a vibrant tennis culture by offering top-tier
                                        facilities,
                                        coaching, and programs that foster skill development, sportsmanship, and
                                        camaraderie. Through our dedication to inclusivity and continuous improvement,
                                        we
                                        aim to ignite a lifelong love for the sport and enrich the lives of individuals
                                        in
                                        our community</p>
                                </div>

                            </div>

                            <!-- carousel indicator start -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                                    class="active" aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="5"
                                aria-label="Slide 6"></button> -->
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="7" aria-label="Slide 8"></button>  -->
                            </div>
                            <!-- carousel indicator end -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item img  img-4" data-bs-interval="4000000">
                    <div class="curousel-object">
                        <img alt="Tennis-bat-2" src="Images/home-page-carousal/Tennis-bat.gif">
                    </div>
                    <div class="content-flex-center">
                        <div class="carousal-content-and-indicator">
                            <div class="carousel-content carousel-content-4" data-aos="fade-up"
                                data-aos-duration="1000">
                                <div class="carousal-para-head">
                                    <div class="carousal-para-heading">
                                        <img alt="dig-sir" src="Images/home-page-carousal/dig-sir.jpg" height="150"
                                            style="border-radius: 100%;">
                                        <h5>Founder's Message
                                        </h5>

                                    </div>

                                    <div class="carousal-para">
                                        <p>I am honored to welcome you to the Ampara District Tennis Club. Our
                                            commitment
                                            extends beyond law enforcement, it encompasses fostering a community united
                                            by
                                            the
                                            love of tennis. Join us in this endeavor, where the spirit of the game
                                            intertwines
                                            with the values of discipline, teamwork, and excellence. Together, let's
                                            make
                                            our
                                            tennis club a beacon of camaraderie and athletic achievement in Ampara
                                            District.<br>

                                            Mr. H.A.N.K. Damayantha Wijaya Sri, Founder & Deputy Inspector
                                            General of Police
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <!-- carousel indicator start -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
                                    class="active" aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="4"
                                    aria-label="Slide 5"></button>
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="5"
                                aria-label="Slide 6"></button> -->
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="7" aria-label="Slide 8"></button>  -->
                            </div>
                            <!-- carousel indicator end -->
                        </div>
                    </div>
                </div>

                <div class="carousel-item img img-5" data-bs-interval="4000">
                    <div class="curousel-object">
                        <img alt="Tennis-bat-5" src="Images/home-page-carousal/Tennis-bat.gif">
                    </div>
                    <div class="content-flex-center">
                        <div class="carousal-content-and-indicator">
                            <div class="carousel-content" data-aos="fade-up" data-aos-duration="1000">
                                <div class="carousal-para-heading">
                                    <h5>Ampara District Tennis Club: Fostering Tennis Excellence with SLTA Affiliation
                                    </h5>
                                    <!-- <img alt="pic" src="Images/home-page-carousal/Untitled design (5).png" width="150"
                                        height="100" alt="pic"> -->
                                </div>

                                <div class="carousal-para">
                                    <p>Ampara District Tennis Club is dedicated to nurturing tennis talent and promoting
                                        excellence through its affiliation with the Sri Lanka Tennis Association (SLTA)
                                    </p>
                                </div>

                            </div>

                            <!-- carousel indicator start -->
                            <div class="carousel-indicators">
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="0"
                                    aria-current="true" aria-label="Slide 1"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="1"
                                    aria-label="Slide 2"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="2"
                                    aria-label="Slide 3"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="3"
                                    aria-label="Slide 4"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="4"
                                    class="active" aria-label="Slide 5"></button>
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="5"
                                aria-label="Slide 6"></button> -->
                                <!-- <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="6" aria-label="Slide 7"></button>
                                <button type="button" data-bs-target="#carouselExampleSlidesOnly" data-bs-slide-to="7" aria-label="Slide 8"></button>  -->
                            </div>
                            <!-- carousel indicator end -->
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- carousel end -->

        <!-- home-section-two-gallery-start -->
        <div class="section-two">

            <div class="gallary-tittle">
                <P class="fs-4 " data-aos="fade-up" data-aos-duration="2000">Gallery</P>
            </div>

            <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Achievement by ADTC</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">

                    <img alt="Achievement-by-ADTC" src="Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC/1.webp"
                        class="image-button-container">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.html'">View</button>
                    <p class="gallery-info">10 years old clinching the second position</p>
                </div>
            </div>

            <br>

            <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Events</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">
                    <img alt="Laying-foundation-ceremony-for-courts-complex"
                        src="Images/gallary/Events/Laying-foundation-ceremony-for-courts-complex/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Events/Laying-foundation-ceremony-for-courts-complex/Laying-foundation-ceremony-for-courts-complex.html'">View</button>
                    <p class="gallery-info">Laying-foundation ceremony for courts complex</p>
                </div>
                <div class="image-container">
                    <img alt="Opening-ceremony-of-polwaththa-School-Court"
                        src="Images/gallary/Events/Opening-ceremony-of-polwaththa-School-Court/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Events/Opening-ceremony-of-polwaththa-School-Court/Opening-ceremony-of-polwaththa-School-Court.html'">View</button>
                    <p class="gallery-info">Opening ceremony of polwaththa School Court</p>
                </div>
                <div class="image-container">
                    <img alt="Opening-ceremony-of-Senerath-Somarathna-court"
                        src="Images/gallary/Events/Opening-ceremony-of-Senerath-Somarathna-court/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Events/Opening-ceremony-of-Senerath-Somarathna-court/Opening-ceremony-of-Senerath-Somarathna-court.html'">View</button>
                    <p class="gallery-info">Opening ceremony of Senerath Somarathna court</p>
                </div>
                <div class="image-container">
                    <img alt="New-Year-2024-Celebration"
                        src="Images/gallary/Events/New-Year-2024-Celebration/New-Year-2024-Celebration/2.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Events/New-Year-2024-Celebration/New-Year-2024-Celebration.html'">View</button>
                    <p class="gallery-info">New Year 2024 Celebration</p>
                </div>
            </div>

            <br>

            <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">School Tennis Training
                    programs</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">
                    <img alt="School-Tennis-Training-programs"
                        src="Images/gallary/School-Tennis-Training-programs/School-Tennis-Training-programs/3.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.html'">View</button>
                    <p class="gallery-info">School Tennis</p>
                </div>

            </div>

            <br>

            <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Tournaments</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">
                    <img alt="Beach-tennis" src="Images/gallary/Tournaments/Beach-tennis/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Tournaments/Beach-tennis/Beach-tennis.html'">View</button>
                    <p class="gallery-info">Beach tennis</p>
                </div>
                <div class="image-container">
                    <img alt="Concordance-Year-End-Tournaments"
                        src="Images/gallary/Tournaments/Concordance-Year-End-Tournaments/7.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Tournaments/Concordance-Year-End-Tournaments/Concordance-Year-End-Tournaments.html'">View</button>
                    <p class="gallery-info">Concordance Year End Tournaments</p>
                </div>
                <div class="image-container">
                    <img alt="Inter-School-Tournaments" src="Images/gallary/Tournaments/Inter-School-Tournaments/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Tournaments/Inter-School-Tournaments/Inter-School-Tournaments.html'">View</button>
                    <p class="gallery-info">Inter School Tournaments</p>
                </div>
                <div class="image-container">
                    <img alt="Jus-De-Fruit-Tournaments"
                        src="Images/gallary/Tournaments/Jus-De-Fruit-Tournaments/15.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Tournaments/Jus-De-Fruit-Tournaments/Jus-De-Fruit-Tournaments.html'">View</button>
                    <p class="gallery-info">Jus De Fruit Tournaments</p>
                </div>

            </div>

            <br>

            <div class="gallary-heading">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Courts</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">
                    <img alt="courts" src="Images/gallary/courts/courts/5.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/courts/courts.html'">View</button>
                    <p class="gallery-info">Courts</p>
                </div>
            </div>



        </div>
        <!-- home-section-two-gallery-end -->

        <!-- Latest-news-page-start -->
        <div class="find-a-coach-page" id="adtcnews">

            <div class="find-a-coach-page-tittle">
                <P class="fs-4" data-aos="fade-up" data-aos-duration="2000">Latest ADTC News</P>
            </div>

            <div class="find-a-coache">
                <div class="splide" role="group" aria-label="find-a-coache">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-1"></div>
                                    <div class="splide-slide-contant-1-name">Ampara tennis ranking tournament</div>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <!-- <li class="splide__slide">
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
        <!-- Latest-news-page-end -->

        <!-- home-section-site-map-start -->
        <div class="site-map">
            <div class="container">
                <h3>Site Map</h3>
                <div class="site-map-grid-container">
                    <div class="site-map-grid-item">
                        <p><a href="">1. Home</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">2. About us</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">3. Register</a></p>
                        <ul>
                            <li><a href="">Application form</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">4. Log in</a></p>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">5. Courts</a></p>
                        <ul>
                            <li><a href="">About courts we have</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">6. Tournaments</a></p>
                        <ul>
                            <li><a href="">Enter Tournament</a></li>
                            <li><a href="">Tournament Calendar</a></li>
                            <li><a href="">Jus De Fruit Tournaments</a>
                                <ul>
                                    <li><a href="">About Jus De Fruit</a></li>
                                    <li><a href="">Image Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="">ADTC Year End Finals</a>
                                <ul>
                                    <li><a href="">About ADTC Year End Finals</a></li>
                                    <li><a href="">Image Gallery</a></li>
                                </ul>
                            </li>

                            <li><a href="">Inter School Tournaments</a>
                                <ul>
                                    <li><a href="">About Inter School Tournaments</a></li>
                                    <li><a href="">Image Gallery</a></li>
                                </ul>
                            </li>

                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">7. Ranking</a></p>
                        <ul>
                            <li><a href="">Player Profile</a></li>
                            <li><a href="">ADTC Ranking</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">8. Coaches</a></p>
                        <ul>
                            <li><a href="">Register</a></li>
                            <li><a href="">Find a Coach</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">9. School Training programs</a></p>
                        <ul>
                            <li><a href="">About School Programs</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">10. Beach Tennis</a></p>
                        <ul>
                            <li><a href="">About Beach Tennis</a></li>
                            <li><a href="">Tournaments / Activities</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">11. Achievements</a></p>
                        <ul>
                            <li><a href="">ADTC Achievements</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                    <div class="site-map-grid-item">
                        <p><a href="">12. Federation</a></p>
                        <ul>
                            <li><a href="">ADTC Committee</a></li>
                            <li><a href="">ADTC News</a></li>
                            <li><a href="">Image Gallery</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- home-section-site-map-end -->
    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
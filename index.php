<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ADTC Home</title>



    <!-- bootstarp start -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <!-- bootstrap end -->

    <link rel="stylesheet" href="style.css?v=2">

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

    <!-- Font Awesome start-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Font Awesome end-->




</head>

<body>

    <div class="home">
        <!-- Navbar start -->
        <?php
        include 'components/navbar/navbar.php';
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

                <div class="carousel-item img  img-4" data-bs-interval="5000" id="founder">
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
                                            District.

                                        <div class="name">Mr. H.A.N.K. Damayantha Wijaya Sri</div>
                                        <div class="ocupation"> Founder & Deputy Inspector
                                            General of Police</div>
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

        <!-- Latest-news-page-start -->
        <div class="find-a-coach-page" id="adtcnews">

            <div class="find-a-coach-page-tittle">
                <P class="fs-4">Latest ADTC News</P>
            </div>

            <div class="find-a-coache">
                <div class="splide" role="group" aria-label="find-a-coache">
                    <div class="splide__track">
                        <ul class="splide__list">
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-1"></div>
                                    <button type="button"
                                        class="btn btn-success gallery-button splide-slide-contant-1-name"
                                        onclick="window.location.href='page/latest-news/latest-news.php'">Read
                                        more</button>

                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-2"></div>
                                    <button type="button"
                                        class="btn btn-success gallery-button splide-slide-contant-1-name"
                                        onclick="window.location.href='page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.php'">Read
                                        more</button>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-3"></div>
                                    <button type="button"
                                        class="btn btn-success gallery-button splide-slide-contant-1-name"
                                        onclick="window.location.href='page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.php'">Read
                                        more</button>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-4"></div>
                                    <button type="button"
                                        class="btn btn-success gallery-button splide-slide-contant-1-name"
                                        onclick="window.location.href='page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.php'">Read
                                        more</button>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-5"></div>
                                    <button type="button"
                                        class="btn btn-success gallery-button splide-slide-contant-1-name"
                                        onclick="window.location.href='page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.php'">Read
                                        more</button>
                                    <div class="splide-slide-contant-1-description"></div>
                                    <div class="splide-slide-contant-1-button"></div>
                                </div>
                            </li>
                            <li class="splide__slide">
                                <div class="splide-slide-contant">
                                    <div class="splide-slide-contant-1-img splide-slide-img-6"></div>
                                    <button type="button"
                                        class="btn btn-success gallery-button splide-slide-contant-1-name"
                                        onclick="window.location.href='page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.php'">Read
                                        more</button>
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
        <!-- Latest-news-page-end -->

        <!-- home-section-two-gallery-start -->
        <div class="section-two">

            <div class="gallary-tittle" id="gallery">
                <P class="fs-4 " data-aos="fade-up" data-aos-duration="2000">Gallery</P>
            </div>

            <div class="gallary-heading" id="achievement-by-ADTC">
                <p style="text-align: center;" data-aos="fade-up" data-aos-duration="2000">Achievement by ADTC</p>
            </div>

            <div class="gallery" data-aos="fade-up" data-aos-duration="2000">
                <div class="image-container">

                    <img alt="Achievement-by-ADTC" src="Images/gallary/Achievement-by-ADTC/Achievement-by-ADTC/1.webp"
                        class="image-button-container">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Achievement-by-ADTC/Achievement-by-ADTC/Achievement-by-ADTC.php'">View</button>
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
                        onclick="window.location.href='page/gallery-page/Events/Laying-foundation-ceremony-for-courts-complex/Laying-foundation-ceremony-for-courts-complex.php'">View</button>
                    <p class="gallery-info">Laying-foundation ceremony for courts complex</p>
                </div>
                <div class="image-container">
                    <img alt="Opening-ceremony-of-polwaththa-School-Court"
                        src="Images/gallary/Events/Opening-ceremony-of-polwaththa-School-Court/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Events/Opening-ceremony-of-polwaththa-School-Court/Opening-ceremony-of-polwaththa-School-Court.php'">View</button>
                    <p class="gallery-info">Opening ceremony of polwaththa School Court</p>
                </div>
                <div class="image-container">
                    <img alt="Opening-ceremony-of-Senerath-Somarathna-court"
                        src="Images/gallary/Events/Opening-ceremony-of-Senerath-Somarathna-court/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Events/Opening-ceremony-of-Senerath-Somarathna-court/Opening-ceremony-of-Senerath-Somarathna-court.php'">View</button>
                    <p class="gallery-info">Opening ceremony of Senerath Somarathna court</p>
                </div>
                <div class="image-container">
                    <img alt="New-Year-2024-Celebration"
                        src="Images/gallary/Events/New-Year-2024-Celebration/New-Year-2024-Celebration/2.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Events/New-Year-2024-Celebration/New-Year-2024-Celebration.php'">View</button>
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
                        onclick="window.location.href='page/gallery-page/School-Tennis-Training-programs/School-Tennis-Training-programs/School-Tennis-Training-programs.php'">View</button>
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
                        onclick="window.location.href='page/gallery-page/Tournaments/Beach-tennis/Beach-tennis.php'">View</button>
                    <p class="gallery-info">Beach tennis</p>
                </div>
                <div class="image-container">
                    <img alt="Concordance-Year-End-Tournaments"
                        src="Images/gallary/Tournaments/Concordance-Year-End-Tournaments/7.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Tournaments/Concordance-Year-End-Tournaments/Concordance-Year-End-Tournaments.php'">View</button>
                    <p class="gallery-info">Concordance Year End Tournaments</p>
                </div>
                <div class="image-container">
                    <img alt="Inter-School-Tournaments" src="Images/gallary/Tournaments/Inter-School-Tournaments/1.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Tournaments/Inter-School-Tournaments/Inter-School-Tournaments.php'">View</button>
                    <p class="gallery-info">Inter School Tournaments</p>
                </div>
                <div class="image-container">
                    <img alt="Jus-De-Fruit-Tournaments"
                        src="Images/gallary/Tournaments/Jus-De-Fruit-Tournaments/15.jpg">
                    <button type="button" class="btn btn-success gallery-button"
                        onclick="window.location.href='page/gallery-page/Tournaments/Jus-De-Fruit-Tournaments/Jus-De-Fruit-Tournaments.php'">View</button>
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
                        onclick="window.location.href='page/gallery-page/courts/courts.php'">View</button>
                    <p class="gallery-info">Courts</p>
                </div>
            </div>



        </div>
        <!-- home-section-two-gallery-end -->


        <!-- Footer-start -->
        <div class="footer p-3 ">
            <div class="follow-us p-4">
                <h5>Follow us</h5>
                <div class="line"></div>

                <div class="links">
                    <a href="https://www.tiktok.com/@adtc_ampara"><img src="Images/follow-us/1.png" alt="tiktok"
                            width="25"></a>
                    <a href="https://web.facebook.com/profile.php?id=100092522933660"><img src="Images/follow-us/2.png"
                            alt="facebook" width="25"></a>
                    <a href="https://www.youtube.com/@amparatennisclub/featured"><img src="Images/follow-us/3.png"
                            alt="youtube" width="25"></a>
                </div>
            </div>
            <div class="useful-links p-4">
                <h5>Useful Links</h5>
                <div class="line"></div>
                <a href="/project-holders-project-2/page/ContactUs-page/Contact-us.php">Contact us</a>
                <div class="line1"></div>
                <a href="">Latest News</a>
                <div class="line1"></div>
                <a href="https://www.sltennis.lk/home.html">SLTA</a>
                <div class="line1"></div>
                <a href="page/site-map/site-map.php">Site Map</a>
                <div class="line1"></div>
                <a href="/project-holders-project-2/downloads/ADTC_Member_Application.pdf">Download Membership
                    Application</a>
                <div class="line1"></div>
            </div>
            <div class="submit-request p-4">
                <h5>Submit your request</h5>
                <div class="line"></div>
                <form
                    action="https://script.google.com/macros/s/AKfycbwpL2emGOezsCab6cvBQqnU808WuAAt0nuZZay6AuLEXhFLwe4zmI2F2wxj7wjQz8BnfA/exec"
                    method="POST" name="Feedback-form">
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
                        <label for="floatingTextarea2">Comments</label>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                    <Script src="index.js"></Script>
                </form>
            </div>
        </div>
        <!-- Footer-end -->


    </div>

    <!-- AOS script start -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- AOS script end-->

</body>

</html>
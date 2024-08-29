<?php require "connect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharatika Creative Design Festival 2024 | KREAKTOR</title>

    <?php include "assets/link.html" ?>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/kreaktor.css">
    <link rel="stylesheet" href="assets/css/submission.css">
    <link rel="stylesheet" href="assets/css/events.css">
    <link rel="stylesheet" href="assets/css/merch.css">
    <link rel="stylesheet" href="assets/css/sponsor.css">
    <link rel="stylesheet" href="assets/css/quiz.css">
    <link rel="stylesheet" href="assets/css/footer.css">

</head>

<body>
    <?php include "loader.php" ?>
    <div class="page-content" style="visibility: hidden;">
        <?php include "navbar.php" ?>

        <div class="video">
            <video loop autoplay preload="auto" muted>
                <source src="assets/img/video.mp4" type="video/mp4">
            </video>
        </div>

        <!-- KREAKTOR -->
        <section class="kreaktor position-relative d-flex justify-content-center align-items-center flex-column">
            <div class="container">
                <div class="gsap-img">
                    <!-- <img src="assets/img/logo_tema.png" alt="" id="logo-tema"> -->
                    <img src="assets/img/KreaktorLogoMotion.gif" alt="" id="logo-tema">
                </div>
            </div>

            <div class="home-desc p-2">
                <h3 class="text-kreaktor font2">KREATIF, KREASI, REAKTOR</h3>
            </div>
            <div class="home-desc2 mt-3 p-2">
                <p>Tahun ini, Bharatika mengambil judul tema <b>Kreaktor</b>.</p>
                <p>Bharatika hadir menjadi <b>‘reaktor’</b> yang memicu insan muda kreatif untuk berani berproses dalam
                    berkreasi
                </p>
            </div>
        </section>

        <!-- SLIDER -->
        <!-- <div class="row bar2 text my-5">
            <a href="competition.php">
                <div class="slider slider1 p-1 mt-5">
                    <div class="slider-track slider-track1 font2">
                        <span class="extended">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.99763 0.5C8.44138 0.5 8.85075 0.734375 9.07575 1.11875L15.8258 12.6187C16.0539 13.0062 16.0539 13.4844 15.832 13.8719C15.6101 14.2594 15.1945 14.5 14.7476 14.5H1.24763C0.800751 14.5 0.385126 14.2594 0.163251 13.8719C-0.0586241 13.4844 -0.0554991 13.0031 0.169501 12.6187L6.9195 1.11875C7.1445 0.734375 7.55388 0.5 7.99763 0.5ZM7.99763 4.5C7.582 4.5 7.24763 4.83437 7.24763 5.25V8.75C7.24763 9.16562 7.582 9.5 7.99763 9.5C8.41325 9.5 8.74763 9.16562 8.74763 8.75V5.25C8.74763 4.83437 8.41325 4.5 7.99763 4.5ZM8.99763 11.5C8.99763 11.2348 8.89227 10.9804 8.70473 10.7929C8.5172 10.6054 8.26284 10.5 7.99763 10.5C7.73241 10.5 7.47806 10.6054 7.29052 10.7929C7.10298 10.9804 6.99763 11.2348 6.99763 11.5C6.99763 11.7652 7.10298 12.0196 7.29052 12.2071C7.47806 12.3946 7.73241 12.5 7.99763 12.5C8.26284 12.5 8.5172 12.3946 8.70473 12.2071C8.89227 12.0196 8.99763 11.7652 8.99763 11.5Z"
                                    fill="#A4CE39" />
                            </svg>
                            REGISTRATION & SUBMISSION EXTENDED</span>
                        <span style="color: #A4CE39;">
                            <svg width="16" height="15" viewBox="0 0 16 15" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M7.99763 0.5C8.44138 0.5 8.85075 0.734375 9.07575 1.11875L15.8258 12.6187C16.0539 13.0062 16.0539 13.4844 15.832 13.8719C15.6101 14.2594 15.1945 14.5 14.7476 14.5H1.24763C0.800751 14.5 0.385126 14.2594 0.163251 13.8719C-0.0586241 13.4844 -0.0554991 13.0031 0.169501 12.6187L6.9195 1.11875C7.1445 0.734375 7.55388 0.5 7.99763 0.5ZM7.99763 4.5C7.582 4.5 7.24763 4.83437 7.24763 5.25V8.75C7.24763 9.16562 7.582 9.5 7.99763 9.5C8.41325 9.5 8.74763 9.16562 8.74763 8.75V5.25C8.74763 4.83437 8.41325 4.5 7.99763 4.5ZM8.99763 11.5C8.99763 11.2348 8.89227 10.9804 8.70473 10.7929C8.5172 10.6054 8.26284 10.5 7.99763 10.5C7.73241 10.5 7.47806 10.6054 7.29052 10.7929C7.10298 10.9804 6.99763 11.2348 6.99763 11.5C6.99763 11.7652 7.10298 12.0196 7.29052 12.2071C7.47806 12.3946 7.73241 12.5 7.99763 12.5C8.26284 12.5 8.5172 12.3946 8.70473 12.2071C8.89227 12.0196 8.99763 11.7652 8.99763 11.5Z"
                                    fill="#A4CE39" />
                            </svg>
                            5 MAY //
                        </span>
                        <span style="margin-left: 10px;">
                            INFOGRAPHIC POSTER</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>DREAM ROOM STYLING</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>COMIC STRIP</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>DIGITAL CAMPAIGN</span>
                    </div>
                </div>
            </a>
        </div> -->


        <!-- OPEN SUBMISSION DEKSTOP MODE -->
        <section class="open-submission justify-content-center align-items-center flex-column desktop">
            <h1 class="m-0 text-open font1">CLOSE</h1>
            <div class="d-flex justify-content-center font1" style="gap: 18vw;">
                <h2 class="m-0 text-submission" style="color: #A4CE39;">SUBMI</h2>
                <h2 class="m-0 text-submission" style="color: #781442">SSION</h2>
            </div>
            <div class="d-flex justify-content-center font2 my-1 align-items-center" style="gap: 2vw;">
                <h1 class="m-0 text-tgl">20 Mar</h1>
                <div class="line my-4"></div>
                <h1 class="m-0 text-tgl">5 Mei</h1>
            </div>

            <div class="spt-toa-container">
                <img src="assets/img/sepatu.png" alt="" class="img-sepatu">
                <a href="competition.php">
                    <button class="checkout-btn">
                        <h4 class="m-0"><b>CHECK OUT OUR COMPETITIONS</b></h4>
                    </button>
                </a>

            </div>
        </section>

        <!-- OPEN SUBMISSION MOBILE MODE -->
        <section class="open-submission justify-content-center align-items-center flex-column mobile">
            <h1 class="m-0 text-open font1">CLOSE</h1>
            <h1 class="m-0 text-submission font1">SUBMISSION</h1>
            <div class="d-flex justify-content-center font2 my-1 align-items-center" style="gap: 2vw;">
                <h1 class="m-0 text-tgl">20 Mar</h1>
                <div class="line my-4"></div>
                <h1 class="m-0 text-tgl">5 Mei</h1>
            </div>

            <div class="spt-toa-container">
                <img src="assets/img/sepatu.png" alt="" class="img-sepatu">
                <a href="competition.php">
                    <button class="checkout-btn">
                        <p class="m-0"><b>CHECK OUT OUR COMPETITIONS</b></p>
                    </button>
                </a>

            </div>
        </section>

        <!-- OUR EVENTS -->
        <section class="our-events d-flex justify-content-center align-items-center flex-column">
            <div class="desktop2 justify-content-center font2 my-1 align-items-center" style="gap: 2vw;">
                <div class="line-container d-flex justify-content-center align-items-center">
                    <div class="line-events my-4"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none"
                        style="margin-left: -30px;">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#FAF6E6" />
                    </svg>
                </div>

                <h1 class="m-0 text-heading font1 text-center">Our Events</h1>
                <div class="line-container d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none"
                        style="margin-right: -30px;">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#FAF6E6" />
                    </svg>
                    <div class="line-events my-4"></div>
                </div>
            </div>

            <div class="mobile2 justify-content-center font2 my-1 align-items-center flex-column">
                <h1 class="m-0 text-heading font1 text-center">Our Events</h1>
                <div class="line-container d-flex justify-content-center align-items-center" style="gap: 2vw;">
                    <div class="line-events my-4"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#FAF6E6" />
                    </svg>
                    <div class="line-events my-4"></div>
                </div>
            </div>

            <div class="events-container d-flex justify-content-center align-items-center mt-3 mt-sm-5 desktop">
                <div class="events-left">
                    <div class="d-flex align-items-center" style="gap: 1.5vw;">
                        <h1 class="m-0 text-tgl2 font2">23-24 Mei</h1>
                        <div class="line-tgl"></div>
                    </div>

                    <h1 class="m-0 text-tempat font2">BALAI PEMUDA</h1>
                    <h1 class="m-0 text-tempat font2">KOTA SURABAYA</h1>
                    <a href="https://maps.app.goo.gl/XN8dU22SfvmTRBLz7" target="_blank"><img
                            src="assets/img/gedung_balai.png" alt="" class="img-tempat"></a>
                </div>
                <div class="events-right">
                    <div class="d-flex align-items-center" style="gap: 1.5vw;">
                        <h1 class="m-0 text-tgl2 font2">25 Mei</h1>
                        <div class="line-tgl2"></div>
                    </div>
                    <h1 class="m-0 text-tempat font2">PETRA CHRISTIAN</h1>
                    <h1 class="m-0 text-tempat font2">UNIVERSITY</h1>
                    <a href="https://maps.app.goo.gl/4qSU8YtRLvycrYAr7" target="_blank"><img
                            src="assets/img/gedung_ukp.png" alt="" class="img-tempat img-tempat2"></a>
                </div>
            </div>
        </section>

        <!-- SLIDER -->
        <div class="row bar text my-5">
            <a href="event.php">
                <div class="slider slider1 p-1">
                    <div class="slider-track slider-track1 font2">
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>COMPETITIONS</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>GRAND OPENING</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>CREATIVE TALK</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>WORKSHOP</span>
                        <span><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="none">
                                <path
                                    d="M8 0L9.86676 6.13324L16 8L9.86676 9.86676L8 16L6.13324 9.86676L0 8L6.13324 6.13324L8 0Z"
                                    fill="#FAF6E6" />
                            </svg>CREATIVE COURT</span>
                    </div>
                </div>
            </a>
        </div>

        <!-- OUR MERCH -->
        <section class="our-merch d-flex justify-content-center align-items-center flex-column">
            <div class="desktop3 justify-content-center font2 my-1 align-items-center" style="gap: 2vw;">
                <div class="line-container d-flex justify-content-center align-items-center">
                    <div class="line-events my-4"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none"
                        style="margin-left: -30px;">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#FAF6E6" />
                    </svg>
                </div>

                <h1 class="m-0 text-heading font1 text-center">Our Merch</h1>
                <div class="line-container d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none"
                        style="margin-right: -30px;">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#FAF6E6" />
                    </svg>
                    <div class="line-events my-4"></div>
                </div>
            </div>

            <div class="mobile3 justify-content-center font2 my-1 align-items-center flex-column">
                <h1 class="m-0 text-heading font1 text-center">Our Merch</h1>
                <div class="line-container d-flex justify-content-center align-items-center" style="gap: 2vw;">
                    <div class="line-events my-4"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#FAF6E6" />
                    </svg>
                    <div class="line-events my-4"></div>
                </div>
            </div>

            <div class="bhajukita-container position-relative">
                <svg xmlns="http://www.w3.org/2000/svg" class="circle-merch" viewBox="0 0 229 229" fill="none">
                    <circle cx="114.5" cy="114.5" r="113" stroke="url(#paint0_linear_2695_616)" stroke-width="3" />
                    <defs>
                        <linearGradient id="paint0_linear_2695_616" x1="114.5" y1="0" x2="114.5" y2="229"
                            gradientUnits="userSpaceOnUse">
                            <stop stop-color="#A4CE39" />
                            <stop offset="1" stop-color="#A4CE39" stop-opacity="0" />
                        </linearGradient>
                    </defs>
                </svg>
                <img src="assets/img/star.png" alt="" class="star-merch">
                <img src="assets/img/bhajukita.png" alt="" class="bhajukita-merch">
                <a href="https://www.instagram.com/bhajukita" target="_blank" style="cursor: pointer;"><img
                        src="assets/img/instagram.png" alt="" class="ig-merch floating1"></a>

                <div class="floating2">
                    <svg class="img-grab" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 145 40" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M144.186 0.243408V16.2353L144.135 16.2062C143.852 21.6965 139.311 26.0612 133.75 26.0612L10.3988 26.0612C4.65569 26.0612 0 21.4055 0 15.6623C0 9.91924 4.65571 5.26353 10.3988 5.26353L133.75 5.26353C134.252 5.26353 134.746 5.29911 135.229 5.3679L144.186 0.243408Z"
                            fill="url(#paint0_linear_2731_2816)" />
                        <defs>
                            <linearGradient id="paint0_linear_2731_2816" x1="21.5148" y1="0.604211" x2="149.111"
                                y2="0.604211" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#781442" />
                                <stop offset="1" stop-color="#A4CE39" />
                            </linearGradient>
                        </defs>
                    </svg>
                    <h3 class="font2 text-grab">GRAB EM' ALL</h3>
                </div>

            </div>
        </section>

        <!-- SPONSOR -->
        <section class="sponsor d-flex align-items-center flex-column pt-5">
            <div class="desktop4 justify-content-center font2 my-5 align-items-center" style="gap: 2vw;">
                <div class="line-container d-flex justify-content-center align-items-center">
                    <div class="line-events my-4" style="background-color: #181914;"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none"
                        style="margin-left: -30px;">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#181914" />
                    </svg>
                </div>

                <h1 class="m-0 text-heading2 font1 text-center">IN PARTNERSHIP WITH</h1>
                <div class="line-container d-flex justify-content-center align-items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none"
                        style="margin-right: -30px;">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#181914" />
                    </svg>
                    <div class="line-events my-4" style="background-color: #181914;"></div>
                </div>
            </div>

            <div class="mobile4 justify-content-center font2 my-5 align-items-center flex-column">
                <h1 class="m-0 text-heading2 font1 text-center">IN PARTNERSHIP WITH</h1>
                <div class="line-container d-flex justify-content-center align-items-center" style="gap: 2vw;">
                    <div class="line-events my-4" style="background-color: #181914;"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path
                            d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z"
                            fill="#181914" />
                    </svg>
                    <div class="line-events my-4" style="background-color: #181914;"></div>
                </div>
            </div>

            <div class="logo row">
                <div class="col col-6 col-sm-4">
                    <img src="assets/img/sponsor/GOSH.png" alt="" class="sponsor-gosh">
                </div>
                <div class="col col-6 col-sm-4">
                    <img src="assets/img/sponsor/IMPLORA.png" alt="" class="sponsor-implora">
                </div>
                <div class="col col-6 col-sm-4">
                    <img src="assets/img/sponsor/CABLETIME.png" alt="" class="sponsor-cable">
                </div>
                <div class="col col-6 col-sm-3">
                    <img src="assets/img/sponsor/MATKENS.png" alt="" class="sponsor-matkens">
                </div>
                <div class="col col-4 col-sm-3">
                    <img src="assets/img/sponsor/TRENZ.png" alt="" class="sponsor-trenz">
                </div>
                <div class="col col-5 col-sm-3">
                    <img src="assets/img/sponsor/SINAR.png" alt="" class="sponsor-sinar">
                </div>
                <div class="col col-3 col-sm-3">
                    <img src="assets/img/sponsor/SPECTRUM.png" alt="" class="sponsor-spectrum">
                </div>
                <div class="col col-2 col-sm-2">
                    <img src="assets/img/sponsor/CLUB.png" alt="" class="sponsor-club-ocha">
                </div>
                <div class="col col-2 col-sm-2">
                    <img src="assets/img/sponsor/ICHIOCHA.png" alt="" class="sponsor-club-ocha">
                </div>
                <div class="col col-3 col-sm-3">
                    <img src="assets/img/sponsor/LUMINOR.png" alt="" class="sponsor-luminor">
                </div>
                <div class="col col-2 col-sm-2">
                    <img src="assets/img/sponsor/STUDOS.png" alt="" class="sponsor-studos">
                </div>
                <div class="col col-3 col-sm-3">
                    <img src="assets/img/sponsor/RIZ PLAKAT.png" alt="" class="sponsor-studos">
                </div>
            </div>
        </section>

        
        <?php include "footer.php" ?>
    </div>

    <script>
        var copyBar1 = document.querySelector(".slider-track1").cloneNode(true);
        document.querySelector(".slider1").appendChild(copyBar1);

        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline({
            scrollTrigger: {
                trigger: ".container",
                start: "top top",
                end: "center top",
                pin: true,
                pinSpacing: false,
                scrub: true
            }
        });
    </script>

    <script src="assets/js/nav.js"></script>

    <script>
        $(document).ready(function () {
            $(".homeNavbar").addClass("active disabled");
            $(".homeNavbar1").prepend('<svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d = "M7 0L8.63342 5.36658L14 7L8.63342 8.63342L7 14L5.36658 8.63342L0 7L5.36658 5.36658L7 0Z"fill = "#FAF6E6" / ></svg> ');
        });
    </script>

</body>

</html>
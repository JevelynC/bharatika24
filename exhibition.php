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
    <link rel="stylesheet" href="assets/css/footer.css">
    <link rel="stylesheet" href="assets/css/exhibition.css">

</head>

<body>
    <?php include "loader.php" ?>
    <div class="page-content" style="visibility: hidden;">
        <?php include "navbar.php" ?>

        <div class="isi">
            <div class="background">
                <img src="assets/img/logo_exhibition.png" class="left_img" alt="">
                <img src="assets/img/logo_exhibition.png" class="right_img" alt="">
            </div>

            <div class="headline d-flex justify-content-center align-items-center flex-column">
                <div class="front d-flex justify-content-center align-items-center flex-column">
                    <div class="line-container d-flex justify-content-center align-items-center" style="gap: 2vw;">
                        <div class="d-flex justify-content-center align-items-center">
                            <div class="line-events my-3"></div>
                            <svg class="star" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none" style="margin-left: -30px;">
                                <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#FAF6E6" />
                            </svg>
                        </div>
                        <h1 class="art_exhibition my-4 font2 text-center">ART EXHIBITION</h1>
                        <div class="d-flex justify-content-center align-items-center">
                            <svg class="star" xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none" style="margin-right: -15px;">
                                <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#FAF6E6" />
                            </svg>
                            <div class="line-events my-3"></div>
                        </div>
                    </div>

                    <!-- <div class="mobile2 justify-content-center font2 my-1 align-items-center flex-column">
                        <h1 class="art_exhibition m-0 text-head font2 text-center">ART EXHIBITION</h1>
                        <div class="line-container d-flex justify-content-center align-items-center" style="gap: 2vw;">
                            <div class="line-events my-4" style="width: 34vw;"></div>
                            <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                                <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#FAF6E6" />
                            </svg>
                            <div class="line-events my-4" style="width: 34vw;"></div>
                        </div>
                    </div> -->

                    <div class="title">
                        <div class="row_1 font1 text-center">THE INITIAL</div>
                        <div class="row_2 font1 text-center">IGNITION</div>
                    </div>

                    <div class="d-flex justify-content-center font2 my-md-1 align-items-center" style="gap: 2vw;">
                        <h1 class="m-0 text-tgl">Open Submission</h1>
                        <div class="line my-4"></div>
                        <h1 class="m-0 text-tgl">25/03 - 02/05</h1>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center align-items-center">
                <div class="box-container">
                    <div class="left">
                        <img src="assets/img/logo_exhibition.png" alt="" class="logo_tema">
                    </div>
                    <div class="right">
                        <h1 class="text-details-header font2">Submit Your Masterpiece</h1>
                        <p class="text-details-content">
                            <div class="desktop2">
                            Tunjukkan kreasimu pada dunia! Tampilkan karyamu di Bharatika 2024 yang bertempatkan di
                            Balai Pemuda Surabaya.
                            <br><br>
                            Pendaftaran dibuka hingga 2 Mei 2024.
                            </div>
                        </p>
                        <p class="text-details-content">
                            <div class="mobile2">
                            Tunjukkan kreasimu pada dunia! Tampilkan karyamu di Bharatika 2024 yang bertempatkan di
                            <br>Balai Pemuda Surabaya.
                            <br><br>
                            Pendaftaran dibuka hingga<br>2 Mei 2024.
                            </div>
                        </p>
                        <div class="button-container">
                            <a href="https://petra.id/SyaratdanKetentuanPameranBharatika2024" target="_blank"><button class="btn btn-snk">SYARAT & KETENTUAN</button></a>
                            <a href="https://petra.id/submisikaryapameranbharatika2024" target="_blank"><button class="btn btn-submit">SUBMISSION KARYA</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include "footer.php" ?>
    </div>

    <script src="assets/js/nav.js"></script>

    <script>
        $(document).ready(function() {
            $(".eventsNavbar").addClass("active disabled");
            $(".eventsNavbar1").prepend('<svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d = "M7 0L8.63342 5.36658L14 7L8.63342 8.63342L7 14L5.36658 8.63342L0 7L5.36658 5.36658L7 0Z"fill = "#FAF6E6" / ></svg> ');
        });
    </script>
</body>

</html>
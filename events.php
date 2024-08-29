<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharatika Creative Design Festival 2024 | KREAKTOR</title>

    <?php include "assets/link.html" ?>

    <!-- css -->
    <link rel="stylesheet" href="assets/css/events_page.css">
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <style>
        @media (max-width: 576px) {
            .content {
                padding: 10vw;
            }

            .content h1 {
                font-size: 10vw;
            }

            .content p {
                font-size: 5vw;
            }
        }
    </style>
</head>

<body>
    <?php include "navbar.php" ?>
    <div class="content d-flex flex-column justify-content-center text-center">
        <h1 class="text-center mt-5">Content currently unavailable.</h1>
        <p>Stay tuned for more future content.</p>
    </div>
    <?php include "footer.php" ?>
    <script src="assets/js/nav.js"></script>

    <script>
        $(document).ready(function() {
            $(".eventsNavbar").addClass("active disabled");
            $(".eventsNavbar1").prepend('<svg class="mb-1" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 14 14" fill="none"><path d = "M7 0L8.63342 5.36658L14 7L8.63342 8.63342L7 14L5.36658 8.63342L0 7L5.36658 5.36658L7 0Z"fill = "#FAF6E6" / ></svg> ');
        });
    </script>
</body>

</html>
<?php
session_start();

if (!isset($_SESSION['gmail'])) {
    header('Location: login.php');
    exit;
} else {
    $gmail = $_SESSION['gmail'];
    $username = $_SESSION['username'];
    $division = $_SESSION['division'];
    $nrp = $_SESSION['nrp'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bharatika 2024 | Home</title>

    <?php include 'link.html' ?>

    <style>
        .usn {
            font-size: 5rem;
        }

        .div {
            font-size: 4rem;
        }

        @media screen and (max-width: 768px) {
            .usn {
                font-size: 2.5rem;
            }

            .div {
                font-size: 2rem;
            }
        }
    </style>

</head>

<body>
    <?php include './navbar.php'; ?>
    <div class="d-flex justify-content-center flex-column align-items-center gap-4" style="height: 90vh;">
        <h1 class="usn text-center judul"><?php echo $username; ?></h1>
        <h1 class="div text-center judul">DIVISI <?php echo $division; ?></h1>
    </div>
</body>

<script>
    $(document).ready(function() {
        $(".homeNavbar").addClass("active disabled");
    });
</script>

</html>
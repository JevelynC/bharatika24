<?php include "connect.php" ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharatika Creative Design Festival 2024 | KREAKTOR</title>

    <?php include "assets/link.html" ?>

    <link rel="stylesheet" href="assets/css/general.css">
    <style>
        html,
        body {
            overflow-x: hidden;
        }

        .login-box {
            width: 400px;
            padding: 40px;
            font-weight: 700;
        }

        .login-box .user-box {
            position: relative;
        }

        .login-box .user-box input {
            width: 100%;
            padding: 15px 25px 5px 25px;
            font-size: 16px;
            color: #FAF6E6;
            background: linear-gradient(#181914, #181914) padding-box,
                linear-gradient(to right, #781442, #a4ce39) border-box;
            border-radius: 50px;
            border: 3.15px solid transparent;
        }

        #box1 {
            margin-bottom: 15px;
        }


        #box2 {
            margin-bottom: 5px;
        }

        .login-box .user-box label {
            position: absolute;
            top: 0;
            left: 0;
            padding: 10px 25px;
            font-size: 16px;
            color: #FAF6E6;
            pointer-events: none;
            transition: .5s;
        }

        .login-box .user-box input:focus~label,
        .login-box .user-box input:valid~label {
            top: -7px;
            left: 0;
            color: #FAF6E6;
            font-size: 12px;
        }

        .login-box form .btn-login {
            position: relative;
            display: inline-block;
            width: 100%;
            padding: 10px 20px;
            color: #181914;
            text-align: center;
            font-size: 16px;
            text-decoration: none;
            overflow: hidden;
            transition: .5s;
            margin-top: 40px;
            background: #A4CE39;
            border-radius: 50px;
            border: 3.15px solid transparent;
        }

        .login-box form .btn-login:hover {
            background: linear-gradient(to right, #781442, #a4ce39) padding-box,
                linear-gradient(to right, #781442, #a4ce39) border-box;
            color: white;
        }

        .login-box .btn-login span:nth-child(1) {
            bottom: 2px;
            left: -100%;
            width: 100%;
            height: 2px;
            background: linear-gradient(90deg, transparent, #03f40f);
            animation: btn-anim1 2s linear infinite;
        }

        .logo_tema {
            width: 500px;
        }

        .box-container {
            margin: 0 10vw;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: row;
            column-gap: 5vw;
        }

        @media screen and (max-width: 1024px) {
            .login-box {
                width: 500px;
                padding: 20px;
            }

            .box-container {
                flex-direction: column;
            }
        }

        @media screen and (max-width: 768px) {
            .login-box {
                width: 300px;
                padding: 30px;
            }
        }

        @media screen and (max-width: 576px) {
            .logo_tema {
                width: 300px;
            }
        }

        @media screen and (max-width: 300px) {
            .logo_tema {
                width: 270px;
            }

            .login-box {
                width: 250px;
                padding: 20px;
            }
        }
    </style>
</head>

<body style="background-color: #181914;">
    <?php include "loader.php" ?>
    <div class="page-content" style="visibility: hidden;">
        <?php include "navbar.php" ?>
        <div class="box-container" style="height: 100svh;">
            <div class="left">
                <img src="assets/img/logo_tema.png" alt="" class="logo_tema">
            </div>
            <div class="right login-box">
                <h1 class="text-center font2 mb-4" style="color: #FAF6E6">SIGN IN</h1>
                <form class="font3">
                    <div class="user-box">
                        <input type="text" name="" required="" id="box1">
                        <label>Email</label>
                    </div>
                    <div class="user-box">
                        <input type="password" name="" required="" id="box2">
                        <label>Password</label>
                    </div>
                    <a href="forgotPassword.php" style="color: #A4CE39; font-size: 0.9rem;">Forgot Password</a>
                    <div class="d-flex justify-content-center">
                        <a href="#" class="btn-login" onclick="login()">
                            Sign In
                        </a>
                    </div>
                    <div class="d-flex justify-content-center mt-1" style="color: #FAF6E6;">
                        <p class="text-center">Don't have an account? <a href="register.php" style="color: #FAF6E6;">Sign Up</a></p>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="assets/js/nav.js"></script>
    <script>
        function login() {
            var email = $(`#box1`).val();
            var password = $(`#box2`).val();

            var formData = {
                email: email,
                password: password,
            };

            $.ajax({
                type: "POST",
                url: "login/login.php",
                data: formData,
                dataType: "json",
                success: (e) => {
                    if (!e.success) {
                        Swal.fire({
                            title: "Failed",
                            text: e.message,
                            icon: "error",
                            button: "OK"
                        });
                    } else if (e.success) {
                        Swal.fire({
                            title: "Success",
                            text: e.message,
                            icon: "success",
                            showConfirmButton: false,
                            timer: 2000
                        }).then(function() {
                            window.location.href = "home.php";
                        });
                    }
                }
            });
        }
    </script>

</body>

</html>
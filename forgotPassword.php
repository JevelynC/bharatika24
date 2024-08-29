<?php include "connect.php" ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include "assets/link.html" ?>
    <link rel="stylesheet" href="assets/css/general.css">

    <title>BHARATIKA 2024 | FORGOT PASSWORD</title>

    <!-- JQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>

    <!-- JQuery CONFIRM -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.css" integrity="sha512-0V10q+b1Iumz67sVDL8LPFZEEavo6H/nBSyghr7mm9JEQkOAm91HNoZQRvQdjennBb/oEuW+8oZHVpIKq+d25g==" crossorigin="anonymous" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js" integrity="sha512-zP5W8791v1A6FToy+viyoyUUyjCzx+4K8XZCKzW28AnCoepPNIXecxh9mvGuy3Rt78OzEsU+VCvcObwAMvBAww==" crossorigin="anonymous"></script>


    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .content {
            width: 450px;
            height: auto;
            padding: 40px 30px;
            text-align: center;
        }

        .content .text {
            font-size: 33px;
            font-weight: 600;
        }

        .field {
            height: 50px;
            width: 100%;
            display: flex;
            position: relative;
        }

        .field .input {
            height: 100%;
            width: 100%;
            padding-left: 45px;
            outline: none;
            border: none;
            background: var(--cream);
            color: #171524;
            border-radius: 25px;
        }

        .field .input:focus {
            box-shadow: inset 1px 1px 2px #bab5c7, inset -1px -1px 2px #bfbbc9;
        }

        .field .span {
            position: absolute;
            color: #595959;
            width: 50px;
            line-height: 45px;
        }

        .field .label {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 45px;
            pointer-events: none;
            color: #666666;
        }

        .field .input:valid~label {
            opacity: 0;
        }


        .btn {
            padding: 10px 15px;
            font-weight: 600;
            background: var(--magenta);
            border-radius: 15px;
            border: none;
            outline: none;
            cursor: pointer;
            color: #fff;
            box-shadow: 1px 1px 5px rgba(0, 0, 0, 0.4);
        }

        .btn:hover {
            background-color: var(--green);
        }

        .back {
            background: #c4c6cf;
            color: #595959;
        }

        .back:hover {
            background: #36393d;
            color: white;
        }


        .resend:hover {
            text-decoration: underline;
        }

        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .loader {
            height: 150px;
            width: 50%;
            text-align: center;
            padding: 1em;
            display: inline-block;
            vertical-align: top;
        }

        #loading_svg path,
        #loading_svg rect {
            fill: var(--magenta) !important;
        }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="assets/js/nav.js"></script>

</head>

<body>

    <?php include "loader.php" ?>
    <div class="page-content" style="visibility: hidden;">
        <?php include "navbar.php" ?>
        <div class="container">
            <div class="content">
                <div class="font2">
                    <h1>Change Password</h1>
                </div>
                <form id="formChangePass" class="formChangePass p-3 font3">
                    <div class="field modal-body my-4 mx-0">
                        <input type="text" required name="email" id="email" class="input" required>
                        <span class="span"><svg class="" xml:space="preserve" style="enable-background:new 0 0 512 512" viewBox="0 0 512 512" y="0" x="0" height="20" width="50" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xmlns="http://www.w3.org/2000/svg">
                                <g>
                                    <path class="" data-original="#000000" fill="#595959" d="M256 0c-74.439 0-135 60.561-135 135s60.561 135 135 135 135-60.561 135-135S330.439 0 256 0zM423.966 358.195C387.006 320.667 338.009 300 286 300h-60c-52.008 0-101.006 20.667-137.966 58.195C51.255 395.539 31 444.833 31 497c0 8.284 6.716 15 15 15h420c8.284 0 15-6.716 15-15 0-52.167-20.255-101.461-57.034-138.805z"></path>
                                </g>
                            </svg></span>
                        <label class="label">E-mail</label>
                    </div>
                    <div class="modal-footer mt-4 pt-2" style="justify-content:space-between;">
                        <div class="back-wrapper">
                            <button type="button" onclick="window.location.href='login.php'" class="btn btn-secondary back">Back</button>
                        </div>

                        <div class="modal-footer1">
                            <div class="input-wrapper">
                                <div class="button">
                                    <button type="submit" name="type" onclick="getOTP()" value="getOTP" class="btn"><span>Send OTP
                                        </span></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        function testJSON(text) {
            if (typeof text !== "string") {
                return false;
            }
            try {
                JSON.parse(text);
                return true;
            } catch (error) {
                return false;
            }
        }
        $(document).ready(function() {
            $('#changePassModal').modal('show');
            $('#formChangePass').on('submit', function(e) {
                e.preventDefault();

            })
        })
        var vemail;

        function getOTP() {
            $(".loader-container").css("display", "flex");
            vemail = $('input#email').val()
            $.ajax({
                type: "POST",
                url: "forgotPass/otp.php",
                data: {
                    type: 'getOTP',
                    email: vemail,
                },
                success: function(response) {
                    $(".loader-container").css("display", "none");
                    if (testJSON(response)) {
                        response = JSON.parse(response)
                        if (response[0] == 'gagal') {
                            Swal.fire(
                                'Gagal!',
                                response[1],
                                'error'
                            )
                            $('button[value="getOTP"]').prop('disabled', false);
                        }
                    } else {
                        if (response == 'success') {
                            Swal.fire(
                                'OTP Sent!',
                                'Check your inbox.',
                                'success'
                            )
                            $('.modal-footer1').html('<div class="resend" style="font-weight: bold;cursor:pointer;margin-left:10px;" onclick="resendOTP()"> Resend OTP</div><div>')
                            $('.modal-body').html(`
                                <input name="otp" id="otpveri" type="text" onkeyup="typeOTP()" required class="input">
                                <span class="span"><i class="fa-solid fa-key fa-lg" style="color: #4b336b;"></i></span>
                                <label class="label">6 Digit OTP</label>
                            `)

                            $('.back').attr('onclick', 'window.location.href="login.php"')
                            v_email = vemail
                        } else if (response == 'tdkterdaftar') {
                            Swal.fire(
                                'Error!',
                                'Email belum terdaftar!',
                                'error'
                            ).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.href = 'forgotPassword.php'
                                }
                            })

                        } else {
                            Swal.fire(
                                'Gagal!',
                                'Terjadi kesalahan, silahkan coba beberapa saat lagi.',
                                'error'
                            )
                        }
                    }

                }
            });

        }

        function typeOTP() {
            var inputOTP = $('#otpveri').val()
            if (inputOTP.length == 6) {
                $('.modal-footer1').html(`<div class="input-wrapper"><button class="btn" type="submit" onclick="verifyOTP('` + inputOTP + `')">Verify OTP</button></div>`)
            } else {
                $('.modal-footer1').html('<div style="font-weight: bold;cursor:pointer;margin-left:10px;" onclick="resendOTP()"> Resend OTP</div><div>')
            }
        }

        function resendOTP() {
            $(".loader-container").css("display", "flex");
            $.ajax({
                type: "POST",
                url: "forgotPass/otp.php",
                data: {
                    type: 'getOTP',
                    email: vemail
                },
                success: function(response) {
                    $(".loader-container").css("display", "none");
                    if (response == 'success') {
                        Swal.fire(
                            'New OTP Sent!',
                            'Check your inbox.',
                            'success'
                        )

                    } else {
                        Swal.fire(
                            'Gagal!',
                            'Terjadi kesalahan.',
                            'error'
                        )
                    }
                }
            });
        }

        function verifyOTP(otpinput) {
            otpinput = parseInt(otpinput)
            $.ajax({
                type: "POST",
                url: "forgotPass/otp.php",
                data: {
                    type: 'verifyOTP',
                    thisdata: otpinput,
                },
                success: function(response) {
                    if (response == 'success') {
                        $('.content').attr('style', 'height : 400px; position: relative; width: auto; padding: 40px; display: flex; flex-direction: column; align-items: center;');
                        $('.modal-footer').attr('style', 'bottom: 20px; position: absolute; justify-content:space-between;');

                        $('.modal-body').html(`
                            <div>
                                <div class="input-wrapper">
                                    <span class="span"><i class="fa-solid fa-lock fa-lg" style="color: #4b336b;"></i></span>
                                    <input name="password" id="newPassword" type="password" placeholder="New Password" onkeyup="cekPanjang()" required class="input input-pw" style="height: 50px;">
                                    <div id="emailHelp" class="form-text text-danger minlength">New password minimal length : 8</div>
                                </div>
                                <div class="input-wrapper my-3">
                                    <span class="span"><i class="fa-solid fa-lock fa-lg" style="color: #4b336b;"></i></span>
                                    <input name="retypePass" id="retypePass" type="password" placeholder="Retype New Password" onkeyup="cekMatch()" required class="input input-pw" style="height: 50px;">
                                    <div id="emailHelp" class="form-text text-danger notmatch" style="display:none">Password not match</div>
                                </div>
                            </div>
                        `)
                        $('.modal-footer1').html(`<div class="input-wrapper"><button type="submit" class="btn changePassButton" onclick="submitNewPass()" disabled>Change Password</button></div>`);
                    } else {
                        Swal.fire(
                            'Error!',
                            'Wrong OTP',
                            'error'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'forgotPassword.php'
                            }
                        })


                    }
                }
            });
        }
        var pass8 = false

        function cekPanjang() {
            var newPass = $("#newPassword").val()
            if (newPass.length >= 8) {
                $('.minlength').css('display', 'none')
                pass8 = true
            } else {
                $('.minlength').css('display', 'block')
                pass8 = false
            }
            cekMatch()
        }

        function cekMatch() {
            if (pass8 == true) {
                var newPass = $("#newPassword").val()
                var retypePass = $("#retypePass").val()
                if (newPass == retypePass) {
                    $('.changePassButton').prop('disabled', false)
                    $('.notmatch').css('display', 'none')
                } else {
                    $('.notmatch').css('display', 'block')
                    $('.changePassButton').prop('disabled', true)
                }

            } else {
                $('.notmatch').css('display', 'none')
            }
        }

        function submitNewPass() {
            var newPass = $("#newPassword").val()
            $.ajax({
                type: "POST",
                url: "forgotPass/otp.php",
                data: {
                    type: 'newPass',
                    pass: newPass
                },
                success: function(response) {
                    if (response == 'success') {
                        Swal.fire(
                            'Success!',
                            'Password Changed',
                            'success'
                        ).then((result) => {
                            if (result.isConfirmed) {
                                window.location.href = 'login.php'
                            }
                        })
                    } else {
                        Swal.fire(
                            'Error!',
                            'Something went wrong, please try again later',
                            'error'
                        )
                    }
                }
            });
        }
    </script>
</body>

</html>
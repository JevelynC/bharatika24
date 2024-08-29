<?php include "connect.php" ?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bharatika Creative Design Festival 2024 | KREAKTOR</title>

  <?php include "assets/link.html" ?>

  <!-- css -->
  <link rel="stylesheet" href="assets/css/general.css">
  <link rel="stylesheet" href="assets/css/regist.css">
  <link rel="stylesheet" href="assets/css/progress.css">


</head>

<body>

  <?php include "navbar.php" ?>

  <?php include "loader.php" ?>
  <div class="page-content" style="visibility: hidden;">
    <div class="container-fluid text-white  main">

      <h1 class="heading text-center font2">REGISTER</h1>

      <!-- step -->
      <div class="process-wrap active-step1">
        <div class="process-main">

          <div class="col col-3 ">
            <div class="process-step-cont">
              <div class="process-step step-1"></div>
            </div>
          </div>
          <div class="col col-3 ">
            <div class="process-step-cont">
              <div class="process-step step-2"></div>
            </div>
          </div>
          <div class="col col-3">
            <div class="process-step-cont">
              <div class="process-step step-3"></div>
            </div>
          </div>

        </div>
      </div>


      <div class="container-1 text-center all font3">
        <div class="form-container">
          <!-- form submit -->
          <div class="row mx-1 mx-sm-3">
            <div class="col-12">
              <div class="text-box">
                <label for="namaLengkap" class="label-header">Nama Lengkap </label>
                <input type="text" class="input" id="namaLengkap" name="namaLengkap" autocomplete="off">
              </div>
            </div>
            <div class="col-12">
              <div class="text-box">
                <label for="email" class="label-header">E-mail</label>
                <input type="text" class="input" id="email" name="email" autocomplete="off">
              </div>
            </div>
            <div class="col-12">
              <div class="text-box">
                <label for="instansi" class="label-header">Instansi</label>
                <input type="text" class="input" id="instansi" name="instansi" autocomplete="off">
              </div>
            </div>
          </div>
        </div>

        <div class="button-container bg-magenta">
          <button class="btn button btn-next" data-next="2">Next</button>
        </div>

        <p>Already have an account? <a href="login.php" class="link">Sign In</a></p>
      </div>

      <div class="container-2 text-center all font3">
        <div class="form-container">
          <!-- form submit -->
          <div class="row mx-1 mx-sm-3">
            <div class="col-12">
              <div class="text-box">
                <label for="noTelp" class="label-header">Nomor Telepon </label>
                <input type="text" class="input" id="noTelp" name="noTelp" autocomplete="off">
              </div>
            </div>

            <div class="col-12">
              <div class="text-box">
                <label for="noWhatsApp" class="label-header">No WhatsApp</label>
                <input type="text" class="input" id="noWhatsApp" name="noWhatsApp" autocomplete="off">
              </div>
            </div>

            <div class="col-12">
              <div class="text-box">
                <label for="line" class="label-header">ID Line</label>
                <input type="text" class="input" id="line" name="line" autocomplete="off">
              </div>
            </div>

            <div class="col-12">
              <div class="button-wrapper">
                <div class="button-container bg-cream">
                  <button class="btn button btn-prev" data-prev="1">Previous</button>
                </div>
                <div class="button-container bg-magenta">
                  <button class="btn button btn-next" data-next="3">Next</button>
                </div>
              </div>
            </div>

          </div>
        </div>
        <p>Already have an account? <a href="login.php" class="link">Sign In</a> </p>
      </div>


      <div class="container-3 text-center all font3">
        <div class="form-container">
          <!-- form submit -->
          <div class="row mx-1 mx-sm-3">
            <div class="col-12">
              <!-- popup password strong checker-->
              <div class="popup-password">
                <div class="popup-content">
                  <div class="popup-body-invalid invalid-1 popup">
                    <span>Password must include:</span>
                    <ul class="mb-0">
                      <li id="length" class="invalid">At least <b>8 characters</b></li>
                      <li id="capital" class="invalid">At least <b>one uppercase</b> letter</li>
                      <li id="letter" class="invalid">At least <b>one lowercase</b> letter</li>
                      <li id="number" class="invalid">At least <b>one number</b></li>
                      <li id="special" class="invalid">At least <b>one special character</b></li>
                    </ul>
                  </div>

                  <div class="popup-body-invalid invalid-2 popup">
                    <span>Password does not match!</span>
                  </div>

                  <div class="popup-body-success success-1 popup">
                    <span>
                      Your password is strong
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="4 0 24 28" id="check">
                        <path fill="none" d="M0 0h24v24H0V0z"></path>
                        <path d="M9 16.17L5.53 12.7c-.39-.39-1.02-.39-1.41 0-.39.39-.39 1.02 0 1.41l4.18 4.18c.39.39 1.02.39 1.41 0L20.29 7.71c.39-.39.39-1.02 0-1.41-.39-.39-1.02-.39-1.41 0L9 16.17z"></path>
                      </svg>
                    </span>
                  </div>

                </div>
              </div>
            </div>

            <div class="col-12">
              <div class="text-box">
                <label for="password" class="label-header">Password</label>
                <input type="password" class="input" id="password" name="password" autocomplete="off">
              </div>
            </div>
            <div class="col-12">
              <div class="text-box">
                <label for="konfirmasiPassword" class="label-header">Konfirmasi Password</label>
                <input type="password" class="input" id="konfirmasiPassword" name="konfirmasiPassword" autocomplete="off">
              </div>
            </div>
          </div>
        </div>
        <div class="button-container bg-cream">
          <button class="btn button btn-prev" data-prev="2">Previous</button>

        </div>
        <div class="createAcc-container">
          <button class="btn btn-create" data-next="3">Create Account</button>
        </div>
        <p>Already have an account? <a href="login.php" class="link">Sign In</a> </p>
      </div>
    </div>
  </div>

  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  <script src="assets/js/nav.js"></script>
  <script>
    $(document).ready(function() {
      $(document).on('focusin', 'input', function() {
        $(this).parent().find('label').addClass('active');
      });
      $(document).on('focusout', 'input', function() {
        if (!this.value) {
          $(this).parent().find('label').removeClass('active');
        }
      });

      $(".btn-next").click(function() {
        var step = $(this).data('next');
        $(".process-wrap").attr('class', 'process-wrap');
        $(".process-wrap").addClass("active-step" + step);
        $(".all").hide();
        $(".container-" + step).fadeIn("slow");
      });

      $(".btn-prev").click(function() {
        var step = $(this).data('prev');
        $(".process-wrap").attr('class', 'process-wrap');
        $(".process-wrap").addClass("active-step" + step);
        $(".all").hide();
        $(".container-" + step).fadeIn("slow");

      });

      var btnNext = $(".btn-next");
      var btnPrev = $(".btn-prev");

      btnNext.click(function() {
        var step = $(this).data('next');
        $(".process-wrap").attr('class', 'process-wrap');
        $(".process-wrap").addClass("active-step" + step);
      });

      btnPrev.click(function() {
        var step = $(this).data('prev');
        $(".process-wrap").attr('class', 'process-wrap');
        $(".process-wrap").addClass("active-step" + step);
      });

      var isValidPassword = false;
      $("#password, #konfirmasiPassword").on("input", function() {
        isValidPassword = false;
        var password = $("#password").val();
        var Confirmpassword = $("#konfirmasiPassword").val();
        var passwordRegex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?])[A-Za-z\d!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?]{8,}$/;
        if (passwordRegex.test(password)) {
          console.log("password valid");
          if (password === Confirmpassword) {
            isValidPassword = true;
            console.log("password match");
            $(".popup").hide();
            $(".success-1").show();
          } else {
            console.log("password not match");
            $(".popup").hide();
            $(".invalid-2").show();
          }
        } else {
          console.log("password invalid");
          $(".popup").hide();
          $(".invalid-1").show();
        }

        // jadi ijo yg sudah 
        // At least 8 characters
        const atLeastEightCharsRegex = /.{8,}/;
        const atLeastOneUpperCaseRegex = /.*[A-Z].*/;
        const atLeastOneLowerCaseRegex = /.*[a-z].*/;
        const atLeastOneNumberRegex = /.*\d.*/;
        const atLeastOneSpecialCharRegex = /.*[!@#$%^&*()_+\-=\[\]{};':"\\|,.<>\/?].*/;

        if (atLeastEightCharsRegex.test(password)) {
          $("#length").removeClass("invalid").addClass("valid");
        } else {
          $("#length").removeClass("valid").addClass("invalid");
        }

        if (atLeastOneUpperCaseRegex.test(password)) {
          $("#capital").removeClass("invalid").addClass("valid");
        } else {
          $("#capital").removeClass("valid").addClass("invalid");
        }

        if (atLeastOneLowerCaseRegex.test(password)) {
          $("#letter").removeClass("invalid").addClass("valid");
        } else {
          $("#letter").removeClass("valid").addClass("invalid");
        }

        if (atLeastOneNumberRegex.test(password)) {
          $("#number").removeClass("invalid").addClass("valid");
        } else {
          $("#number").removeClass("valid").addClass("invalid");
        }

        if (atLeastOneSpecialCharRegex.test(password)) {
          $("#special").removeClass("invalid").addClass("valid");
        } else {
          $("#special").removeClass("valid").addClass("invalid");
        }
      });

      function register() {
        var alamat = " ";
        var namaLengkap = $(`#namaLengkap`).val();
        var email = $(`#email`).val();
        var instansi = $(`#instansi`).val();
        var noTelp = $(`#noTelp`).val();
        var noWhatsApp = $(`#noWhatsApp`).val();
        var line = $(`#line`).val();
        var password = $(`#password`).val();
        var konfirmasiPassword = $(`#konfirmasiPassword`).val();

        var formData = {
          namaLengkap: namaLengkap,
          alamat: alamat,
          instansi: instansi,
          noTelp: noTelp,
          line: line,
          noWhatsApp: noWhatsApp,
          email: email,
          password: password,
          konfirmasiPassword: konfirmasiPassword,
        };

        $.ajax({
          type: "POST",
          url: "regist/register.php",
          data: formData,
          dataType: "json",
          success: (e) => {
            console.log("masuk");
            if (!e.success) {
              Swal.fire({
                title: "Failed",
                text: e.message,
                icon: "error",
                button: "OK"
              });
            } else if (e.success) {
              Swal.fire({
                title: "Berhasil",
                text: e.message,
                icon: "success",
                showConfirmButton: false,
                timer: 2000
              }).then(function() {
                window.location.href = "login.php";
              });

            }
          }
        });
      }

      $(".btn-create").click(function() {
        console.log(isValidPassword)
        if (!isValidPassword) {
          Swal.fire({
            title: "Failed",
            text: "Password is not valid",
            icon: "error",
            button: "OK"
          });
          return;
        }
        register();
      });


    });
  </script>
</body>

</html>
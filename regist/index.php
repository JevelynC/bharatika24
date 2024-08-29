<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <!-- Sweet Alert -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
</head>

<body>

    <div class="container pt-5">
        <div class="row text-center">
            <div class="col-12">
                <input class="form-control mb-3" placeholder="Nama Lengkap" id="namaLengkap" type="text">
            </div>
            <div class="col-12">
                <input class="form-control mb-3" placeholder="Alamat" id="alamat" type="text">
            </div>
            <div class="col-12">
                <input class="form-control mb-3" placeholder="Instansi" id="instansi" type="text">
            </div>
            <div class="col-6">
                <input class="form-control mb-3" placeholder="No Telp" id="noTelp" type="text">
            </div>
            <div class="col-6">
                <input class="form-control mb-3" placeholder="Line" id="line" type="text">
            </div>
            <div class="col-6">
                <input class="form-control mb-3" placeholder="No WhatsApp" id="noWhatsApp" type="text">
            </div>
            <div class="col-6">
                <input class="form-control mb-3" placeholder="Email" id="email" type="email">
            </div>
            <div class="col-6">
                <input class="form-control mb-3" placeholder="Password" id="password" type="password">
            </div>
            <div class="col-6">
                <input class="form-control mb-3" placeholder="Konfirmasi Password" id="konfirmasiPassword"
                    type="password">
            </div>
            <div class="col-12">
                <button class="btn btn-dark mt-3" onclick="register()">REGISTER</button>
            </div>
        </div>
    </div>

    <script>
        function register() {
            var namaLengkap = $(`#namaLengkap`).val();
            var alamat = $(`#alamat`).val();
            var instansi = $(`#instansi`).val();
            var noTelp = $(`#noTelp`).val();
            var line = $(`#line`).val();
            var noWhatsApp = $(`#noWhatsApp`).val();
            var email = $(`#email`).val();
            var password = $(`#password`).val();
            var konfirmasiPassword = $(`#konfirmasiPassword`).val();

            var formData = {
                namaLengkap: namaLengkap,
                alamat: alamat,
                instansi: instansi,
                noTelp: noTelp,
                line: line,
                noWhatsApp:noWhatsApp,
                email: email,
                password: password,
                konfirmasiPassword: konfirmasiPassword,
            };

            $.ajax({
                type: "POST",
                url: "register.php",
                data: formData,
                dataType: "json",
                success: (e) => {
                    console.log("Dawdaw");
                    if (!e.success) {
                        Swal.fire({
                            title: "Failed",
                            text: e.message,
                            icon: "error",
                            button: "OK"
                        });
                    } else if (e.success) {
                        window.location.href = "../login/index.php";
                    }
                }
            });
        }
    </script>

</body>

</html>
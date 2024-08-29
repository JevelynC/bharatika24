<?php require "../connect.php" ?>

<?php

    if(!isset($_SESSION['id'])){
        header("Location: ../login/index.php");
    }

    //generate uid
    $query = "SELECT " . "*" . 
    " FROM member
    where id = \"" . $_SESSION['id'] . "\"";
    $request = $conn->query($query);
    $data = $request->fetch();

    $query = "SELECT " . "*" . 
    " FROM lomba_jenis";
    $request = $conn->query($query);
    $lomba_jenis = $request->fetchall();

    // $query = "SELECT " . "*" . 
    // " FROM lomba_jenis 
    // WHERE buka = 1 
    // AND
    // id_kategori = \"" . $_GET['kategori'] . "\"";
    // $request = $conn->query($query);
    // $lomba_jenis = $request->fetchall();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>daftar</title>

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
            <div class="col-6">
                <label>Nama ketua (anggota 1)</label>
                <input class="form-control mb-3" placeholder="Nama Lengkap" id="namaLengkap" type="text" value="<?php echo $data['nama_lengkap'] ?>" disabled>
            </div>

            <div class="col-6">
                <label>Email</label>
                <input class="form-control mb-3" placeholder="Email" id="email" type="text" value="<?php echo $data['email'] ?>" disabled>
            </div>

            <div class="col-6">
                <label>Line</label>
                <input class="form-control mb-3" placeholder="Line" id="line" type="text" value="<?php echo $data['line_id'] ?>" disabled>
            </div>

            <div class="col-6">
                <label>No. WhatsApp</label>
                <input class="form-control mb-3" placeholder="no. WhatsApp" id="noWhatsApp" type="number" value="<?php echo $data['no_wa'] ?>" disabled>
            </div>

            <div class="col-6">
                <label>Instansi</label>
                <input class="form-control mb-3" placeholder="instansi" id="instansi" type="text" value="<?php echo $data['instansi'] ?>" disabled>
            </div>

            <div class="col-6">
                <label>Lomba</label>
                <select class="form-control mb-3" name="jenisLomba" id="jenisLomba" data-live-search="true">
                    <option value="" selected>-- Pilih lomba --</option>
                    <?php foreach($lomba_jenis as $lomba): ?>
                            <option value="<?php echo $lomba['id'] . "|" . $lomba['kelompok'] . "|" . $lomba['kelompok_min'] . "|" . $lomba['nama'] ?>"><?php echo $lomba['nama'] ?></option>
                        <?php endforeach ?>
                    <!-- Tirta -->
                    <!-- <option value="1|1">Sneakers Painting</option>
                    <option value="1|2">Integrated Brand</option>
                    <option value="1|3">Campaign</option>
                    <option value="1|4">Fashion Illustration</option>
                    <option value="1|5">Product Photography</option>
                    <option value="1|6">Video Commercial</option> -->

                    <!-- Agni -->
                    <!-- <option value="2|1">Retail Store Design</option>
                    <option value="2|2">Booth Design</option>
                    <option value="2|3">Malfunction Desk Design</option> -->

                    <!-- Bayu -->
                    <!-- <option value="3|1">Desain Product</option> -->

                    <!-- Buana -->
                    <!-- <option value="4|1">Character Design</option>
                    <option value="4|2">Poster Design</option>
                    <option value="4|3">Comic Strip</option> -->
                    </select>
                </div>

            <div class="col-6">
                <label>Bukti Pembayaran</label>
                <input class="form-control mb-3" placeholder="Bukti Pembayaran" id="bukti" type="file" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="col-6">
                <label>KTM / KTP</label>
                <input class="form-control mb-3" placeholder="KTM/KTP" id="ktmp" type="file" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="col-6">
                <label>Foto 3x4</label>
                <input class="form-control mb-3" placeholder="Foto 3x4" id="foto" type="file" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="col-6">
            </div>

            <!-- kalo anggota lebih dari 1 -->
            <div class="col-6" id="extra1">
                <label>Nama anggota 2</label>
                <input class="form-control mb-3" placeholder="Nama Lengkap" id="namaLengkap2" type="text">
            </div>
            <div class="col-6" id="extraInput1">
                <label>KTM / KTP</label>
                <input class="form-control mb-3" placeholder="KTM/KTP" id="ktmp2" type="file" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="col-6" id="extra2">
                <label>Nama anggota 3</label>
                <input class="form-control mb-3" placeholder="Nama Lengkap" id="namaLengkap3" type="text">
            </div>
            <div class="col-6" id="extraInput2">
                <label>KTM / KTP</label>
                <input class="form-control mb-3" placeholder="KTM/KTP" id="ktmp3" type="file" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="col-6" id="extra3">
                <label>Nama anggota 4</label>
                <input class="form-control mb-3" placeholder="Nama Lengkap" id="namaLengkap4" type="text">
            </div>
            <div class="col-6" id="extraInput3">
                <label>KTM / KTP</label>
                <input class="form-control mb-3" placeholder="KTM/KTP" id="ktmp4" type="file" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="col-6" id="extra4">
                <label>Nama anggota 5</label>
                <input class="form-control mb-3" placeholder="Nama Lengkap" id="namaLengkap5" type="text">
            </div>
            <div class="col-6" id="extraInput4">
                <label>KTM / KTP</label>
                <input class="form-control mb-3" placeholder="KTM/KTP" id="ktmp5" type="file" accept="image/png, image/jpg, image/jpeg">
            </div>

            <div class="col-12">
                <button class="btn btn-dark mt-3" onclick="submit()" id="submitButton">SUBMIT</button>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            $('#extra1').hide();
            $('#extra2').hide();
            $('#extra3').hide();
            $('#extra4').hide();

            $('#extraInput1').hide();
            $('#extraInput2').hide();
            $('#extraInput3').hide();
            $('#extraInput4').hide();
        }, false);

        $('#jenisLomba').on('change', function() {
            var jenisKategori = this.value.split("|");
            if (jenisKategori[1] == 1) {
                $('#extra1').hide();
                $('#extra2').hide();
                $('#extra3').hide();
                $('#extra4').hide();

                $('#extraInput1').hide();
                $('#extraInput2').hide();
                $('#extraInput3').hide();
                $('#extraInput4').hide();
            } else if (jenisKategori[1] == 2) {
                $('#extra1').show();
                $('#extra2').hide();
                $('#extra3').hide();
                $('#extra4').hide();

                $('#extraInput1').show();
                $('#extraInput2').hide();
                $('#extraInput3').hide();
                $('#extraInput4').hide();
            } else if (jenisKategori[1] == 3){
                $('#extra1').show();
                $('#extra2').show();
                $('#extra3').hide();
                $('#extra4').hide();

                $('#extraInput1').show();
                $('#extraInput2').show();
                $('#extraInput3').hide();
                $('#extraInput4').hide();
            } else if (jenisKategori[1] == 4){
                $('#extra1').show();
                $('#extra2').show();
                $('#extra3').show();
                $('#extra4').hide();

                $('#extraInput1').show();
                $('#extraInput2').show();
                $('#extraInput3').show();
                $('#extraInput4').hide();
            } else if (jenisKategori[1] == 5){
                $('#extra1').show();
                $('#extra2').show();
                $('#extra3').show();
                $('#extra4').show();

                $('#extraInput1').show();
                $('#extraInput2').show();
                $('#extraInput3').show();
                $('#extraInput4').show();
            }
        });

        function submit() {
            $('#submitButton').prop('disabled', true);

            var namaLengkap = $(`#namaLengkap`).val();
            var email = $(`#email`).val();
            var line = $(`#line`).val();
            var noWhatsApp = $(`#noWhatsApp`).val();
            var instansi = $(`#instansi`).val();
            var jenisKategori = ($(`#jenisLomba`).val()).split("|");
            var kategori = jenisKategori[0];
            var jenisLomba = jenisKategori[0];
            var namaLomba = jenisKategori[3];


            var bukti = $(`#bukti`)[0].files[0];
            var ktmp = $(`#ktmp`)[0].files[0];
            var foto = $(`#foto`)[0].files[0];
            

            var formData = new FormData();
            formData.append("namaLengkap", namaLengkap);
            formData.append("email", email);
            formData.append("line", line);
            formData.append("noWhatsApp", noWhatsApp);
            formData.append("instansi", instansi);
            formData.append("kategori", kategori);
            formData.append("jenisLomba", jenisLomba);
            formData.append("namaLomba", namaLomba);

            formData.append("bukti", bukti);
            formData.append("ktmp", ktmp);
            formData.append("foto", foto);

            //buat extra member
            var ktmp2 = $(`#ktmp2`)[0].files[0];
            var ktmp3 = $(`#ktmp3`)[0].files[0];
            var ktmp4 = $(`#ktmp4`)[0].files[0];
            var ktmp5 = $(`#ktmp5`)[0].files[0];

            var jumlahmember = ($('#jenisLomba').val()).split("|");
            console.log(jumlahmember[1]);
            if (jumlahmember[1] == 2) {
                // console.log("jalan");
                formData.append("member2", $(`#namaLengkap2`).val());
                formData.append("member2ktm", ktmp2);
            } else if (jumlahmember[1] == 3) {
                formData.append("member2", $(`#namaLengkap2`).val());
                formData.append("member2ktm", ktmp2);
                formData.append("member3", $(`#namaLengkap3`).val());
                formData.append("member3ktm", ktmp3);
            } else if (jumlahmember[1] == 4) {
                formData.append("member2", $(`#namaLengkap2`).val());
                formData.append("member2ktm", ktmp2);
                formData.append("member3", $(`#namaLengkap3`).val());
                formData.append("member3ktm", ktmp3);
                formData.append("member4", $(`#namaLengkap4`).val());
                formData.append("member4ktm", ktmp4);
            } else if (jumlahmember[1] == 5) {
                formData.append("member2", $(`#namaLengkap2`).val());
                formData.append("member2ktm", ktmp2);
                formData.append("member3", $(`#namaLengkap3`).val());
                formData.append("member3ktm", ktmp3);
                formData.append("member4", $(`#namaLengkap4`).val());
                formData.append("member4ktm", ktmp4);
                formData.append("member5", $(`#namaLengkap5`).val());
                formData.append("member5ktm", ktmp5);
            }
            formData.append("maxMember", jumlahmember[1]);
            formData.append("minMember", jumlahmember[2]);
            
            $.ajax({
                type: "POST",
                url: "daftar.php",
                data: formData,
                contentType: false,
                processData: false,
                enctype: 'multipart/form-data',
                dataType: "json",
                success: (e) => {
                    console.log(e)
                    $('#submitButton').prop('disabled', false);
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
                            button: "OK"
                        });
                    }
                }
            });
        }
    </script>

</body>

</html>
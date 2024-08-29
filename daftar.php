<?php require "connect.php" ?>

<?php

if (!isset($_SESSION['id'])) {
  header("Location: login.php");
}
if (!isset($_GET['id'])) {
  header("Location: competition.php");
}
$id = $_GET['id'];

$query = "SELECT " . "*" .
  " FROM member
    where id = \"" . $_SESSION['id'] . "\"";
$request = $conn->query($query);
$data = $request->fetch();

$query = "SELECT " . "l.*, k.nama as kategori" .
  " FROM lomba_jenis  l JOIN lomba_kategori k ON l.id_kategori = k.id where l.id = ?";
$stmt = $conn->prepare($query);
$stmt->execute([$id]);
$lomba_jenis = $stmt->fetchall()[0];

if (empty($lomba_jenis)) {
  header("Location: competition.php");
}

if ($lomba_jenis["buka"] == 0) {
  header("Location: competition.php");
}
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bharatika Creative Design Festival 2024 | KREAKTOR</title>
  <link rel="icon" type="image/x-icon" href="assets/img/logo_icon.png">

  <?php include "assets/link.html" ?>

  <!-- css -->
  <link rel="stylesheet" href="assets/css/general.css">
  <link rel="stylesheet" href="assets/css/daftar.css">
  <link rel="stylesheet" href="assets/css/progress.css">


</head>

<body>
  <?php include "loader.php" ?>
  <div class="page-content" style="visibility: hidden;">
    <?php include "navbar.php" ?>


    <div class="container-fluid text-white  main">

      <h1 class="heading-2 text-center font2">PENDAFTARAN LOMBA</h1>

      <!-- step -->
      <div class="process-wrap active-step1">
        <div class="process-main">
          <div class="col col-4 ">
            <div class="process-step-cont">
              <div class="process-step step-1"></div>
            </div>
          </div>
          <div class="col col-4 ">
            <div class="process-step-cont">
              <div class="process-step step-2"></div>
            </div>
          </div>
          <div class="col col-4">
            <div class="process-step-cont">
              <div class="process-step step-3"></div>
            </div>
          </div>
          <div class="col col-4">
            <div class="process-step-cont">
              <div class="process-step step-4"></div>
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
                <label for="namaLengkap" class="label-header active">Nama Lengkap </label>
                <input type="text" class="input" id="namaLengkap" name="namaLengkap" autocomplete="off" value="<?= htmlspecialchars($data['nama_lengkap']) ?>" readonly>
              </div>
            </div>

            <div class="col-12">
              <div class="text-box">
                <label for="email" class="label-header active">E-mail</label>
                <input type="text" class="input" id="email" name="email" autocomplete="off" value="<?= htmlspecialchars($data['email']) ?>" readonly>
              </div>
            </div>

            <div class="col-12">
              <div class="text-box">
                <label for="instansi" class="label-header active">Instansi</label>
                <input type="text" class="input" id="instansi" name="instansi" autocomplete="off" value="<?= htmlspecialchars($data['instansi']) ?>" readonly>
              </div>
            </div>

          </div>
        </div>

        <div class="button-container bg-magenta">
          <button class="btn button btn-next" data-next="2">Next</button>
        </div>
      </div>

      <div class="container-2 text-center all font3">
        <div class="form-container">
          <!-- form submit -->
          <div class="row mx-1 mx-sm-3">
            <div class="col-12">
              <div class="text-box">
                <label for="noTelp" class="label-header active">Nomor Telepon </label>
                <input type="text" class="input" id="noTelp" name="noTelp" autocomplete="off" value="<?= htmlspecialchars($data['no_telp']) ?>" readonly>
              </div>
            </div>

            <div class="col-12">
              <div class="text-box">
                <label for="noWhatsApp" class="label-header active">No WhatsApp</label>
                <input type="text" class="input" id="noWhatsApp" name="noWhatsApp" autocomplete="off" value="<?= htmlspecialchars($data['no_wa']) ?>" readonly>
              </div>
            </div>

            <div class="col-12">
              <div class="text-box">
                <label for="line" class="label-header active">ID Line</label>
                <input type="text" class="input" id="line" name="line" autocomplete="off" value="<?= $data['line_id'] ?>" readonly>
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
      </div>

      <input type="hidden" name="info" id="jenisLomba" value="<?php echo $lomba_jenis['id'] . "|" . $lomba_jenis['kelompok'] . "|" . $lomba_jenis['kelompok_min'] . "|" . $lomba_jenis['nama'] ?>">

      <div class="container-3 text-center all font3">
        <div class="form-container">
          <!-- form submit -->
          <div class="row mx-auto row-grid">
            <div class="col-12 col-lg-6">
              <div class="text-box">
                <label for="kategori" class="label-header active">Kategori Lomba</label>
                <input type="text" class="input" id="kategori" name="kategori" autocomplete="off" value="<?= $lomba_jenis['kategori']  ?>" readonly>
                <!-- todo: masukkan -->
              </div>
            </div>

            <div class="col-12 col-lg-6">
              <div class="text-box">
                <label for="namaLomba" class="label-header active">Lomba</label>
                <input type="text" class="input" id="namaLomba" name="namaLomba" autocomplete="off" value="<?= $lomba_jenis['nama'] ?>" readonly>
                <!-- todo: masukkan -->
              </div>
            </div>

            <!-- for loop sebanyak jumlah orang -->
            <?php
            $opt = "";
            for ($i = 2; $i <= $lomba_jenis['kelompok']; $i++) :
              if ($lomba_jenis['kelompok_min'] < $i) {
                $opt = " (optional) ";
              }
            ?>
              <!-- extra anggota -->
              <div class="col-12 col-lg-6 anggota<?= $i ?>">
                <div class="text-box">
                  <label for="namaLengkap<?= $i ?>" class="label-header">Nama anggota <?php echo $i;
                                                                                      echo $opt ?></label>
                  <input type="text" class="input" id="namaLengkap<?= $i ?>" name="namaLengkap<?= $i ?>" autocomplete="off">
                </div>
              </div>

              <div class="col-12 col-lg-6 anggota<?= $i ?>">
                <p class="file-title"> </p>
                <div class="text-box">
                  <label for="ktmp<?= $i ?>" class="label-upload">
                    <div class="col-5 col-sm-4 label-left-side">
                      <svg id="download-svg" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7.875 3.83032V10.4475C7.875 10.9397 7.46484 11.3225 7 11.3225C6.50781 11.3225 6.125 10.9397 6.125 10.4475V3.83032L4.10156 5.82642C3.77344 6.18188 3.19922 6.18188 2.87109 5.82642C2.51562 5.49829 2.51562 4.92407 2.87109 4.59595L6.37109 1.09595C6.69922 0.740479 7.27344 0.740479 7.60156 1.09595L11.1016 4.59595C11.457 4.92407 11.457 5.49829 11.1016 5.82642C10.7734 6.18188 10.1992 6.18188 9.87109 5.82642L7.875 3.83032ZM1.75 10.4475H5.25C5.25 11.4319 6.01562 12.1975 7 12.1975C7.95703 12.1975 8.75 11.4319 8.75 10.4475H12.25C13.207 10.4475 14 11.2405 14 12.1975V13.0725C14 14.0569 13.207 14.8225 12.25 14.8225H1.75C0.765625 14.8225 0 14.0569 0 13.0725V12.1975C0 11.2405 0.765625 10.4475 1.75 10.4475ZM11.8125 13.2913C12.168 13.2913 12.4688 13.0178 12.4688 12.635C12.4688 12.2795 12.168 11.9788 11.8125 11.9788C11.4297 11.9788 11.1562 12.2795 11.1562 12.635C11.1562 13.0178 11.4297 13.2913 11.8125 13.2913Z" fill="#FAF6E6" />
                      </svg>
                      <span class="p-1">Choose File</span>
                    </div>
                    <div class="col-7 col-sm-8 label-right-side">
                      <span class="label-text">KTM / Kartu Pelajar <?= $opt ?></span>
                    </div>
                  </label>
                  <input type="file" name="ktmp<?= $i ?>" id="ktmp<?= $i ?>" class="file-input" style="display: none;">
                </div>
              </div>
            <?php endfor; ?>

            <div class="col-12">
              <div class="button-wrapper">
                <div class="button-container bg-cream">
                  <button class="btn button btn-prev" data-prev="2">Previous</button>
                </div>
                <div class="button-container bg-magenta">
                  <button class="btn button btn-next" data-next="4">Next</button>
                </div>
              </div>
            </div>

          </div>
        </div>
      </div>



      <div class="container-4 text-center all font3">
        <div class="form-container">
          <!-- form submit -->
          <div class="row mx-1 mx-sm-3">
            <div class="col-12">
              <p class="file-title">KTM / Kartu Pelajar (Ketua) </p>
              <div class="text-box">
                <label for="ktmp" class="label-upload">
                  <div class="col-5 col-sm-4 label-left-side">
                    <svg id="download-svg" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.875 3.83032V10.4475C7.875 10.9397 7.46484 11.3225 7 11.3225C6.50781 11.3225 6.125 10.9397 6.125 10.4475V3.83032L4.10156 5.82642C3.77344 6.18188 3.19922 6.18188 2.87109 5.82642C2.51562 5.49829 2.51562 4.92407 2.87109 4.59595L6.37109 1.09595C6.69922 0.740479 7.27344 0.740479 7.60156 1.09595L11.1016 4.59595C11.457 4.92407 11.457 5.49829 11.1016 5.82642C10.7734 6.18188 10.1992 6.18188 9.87109 5.82642L7.875 3.83032ZM1.75 10.4475H5.25C5.25 11.4319 6.01562 12.1975 7 12.1975C7.95703 12.1975 8.75 11.4319 8.75 10.4475H12.25C13.207 10.4475 14 11.2405 14 12.1975V13.0725C14 14.0569 13.207 14.8225 12.25 14.8225H1.75C0.765625 14.8225 0 14.0569 0 13.0725V12.1975C0 11.2405 0.765625 10.4475 1.75 10.4475ZM11.8125 13.2913C12.168 13.2913 12.4688 13.0178 12.4688 12.635C12.4688 12.2795 12.168 11.9788 11.8125 11.9788C11.4297 11.9788 11.1562 12.2795 11.1562 12.635C11.1562 13.0178 11.4297 13.2913 11.8125 13.2913Z" fill="#FAF6E6" />
                    </svg>
                    <span class="p-1">Choose File</span>
                  </div>
                  <div class="col-7 col-sm-8 label-right-side">
                    <span class="label-text">No File Choosen</span>
                  </div>
                </label>
                <input type="file" name="ktmp" id="ktmp" class="file-input" style="display: none;">
              </div>
            </div>
            <div class="col-12">
              <p class="file-title">Foto 3x4</p>
              <div class="text-box">
                <label for="foto" class="label-upload">
                  <div class="col-5 col-sm-4 label-left-side">
                    <svg id="download-svg" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.875 3.83032V10.4475C7.875 10.9397 7.46484 11.3225 7 11.3225C6.50781 11.3225 6.125 10.9397 6.125 10.4475V3.83032L4.10156 5.82642C3.77344 6.18188 3.19922 6.18188 2.87109 5.82642C2.51562 5.49829 2.51562 4.92407 2.87109 4.59595L6.37109 1.09595C6.69922 0.740479 7.27344 0.740479 7.60156 1.09595L11.1016 4.59595C11.457 4.92407 11.457 5.49829 11.1016 5.82642C10.7734 6.18188 10.1992 6.18188 9.87109 5.82642L7.875 3.83032ZM1.75 10.4475H5.25C5.25 11.4319 6.01562 12.1975 7 12.1975C7.95703 12.1975 8.75 11.4319 8.75 10.4475H12.25C13.207 10.4475 14 11.2405 14 12.1975V13.0725C14 14.0569 13.207 14.8225 12.25 14.8225H1.75C0.765625 14.8225 0 14.0569 0 13.0725V12.1975C0 11.2405 0.765625 10.4475 1.75 10.4475ZM11.8125 13.2913C12.168 13.2913 12.4688 13.0178 12.4688 12.635C12.4688 12.2795 12.168 11.9788 11.8125 11.9788C11.4297 11.9788 11.1562 12.2795 11.1562 12.635C11.1562 13.0178 11.4297 13.2913 11.8125 13.2913Z" fill="#FAF6E6" />
                    </svg>
                    <span class="p-1">Choose File</span>
                  </div>
                  <div class="col-7 col-sm-8 label-right-side">
                    <span class="label-text">No File Choosen</span>
                  </div>
                </label>
                <input type="file" name="foto" id="foto" class="file-input" style="display: none;">
              </div>
            </div>

            <div class="col-12">
              <p class="file-title">Bukti Pembayaran</p>
              <p class="file-sub-title">BCA a.n. Vanessa - 7230155211</p>
              <p class="file-sub-title">Jumlah Transfer <?= "Rp " . number_format($lomba_jenis['harga'] + $lomba_jenis['id'], 0, ",", ".") ?></p>
              <p class="file-sub-title mb-">Berita: NamaLengkap_JenisLomba</p>

              <div class="text-box">
                <label for="bukti" class="label-upload">
                  <div class="col-5 col-sm-4 label-left-side">
                    <svg id="download-svg" width="14" height="15" viewBox="0 0 14 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M7.875 3.83032V10.4475C7.875 10.9397 7.46484 11.3225 7 11.3225C6.50781 11.3225 6.125 10.9397 6.125 10.4475V3.83032L4.10156 5.82642C3.77344 6.18188 3.19922 6.18188 2.87109 5.82642C2.51562 5.49829 2.51562 4.92407 2.87109 4.59595L6.37109 1.09595C6.69922 0.740479 7.27344 0.740479 7.60156 1.09595L11.1016 4.59595C11.457 4.92407 11.457 5.49829 11.1016 5.82642C10.7734 6.18188 10.1992 6.18188 9.87109 5.82642L7.875 3.83032ZM1.75 10.4475H5.25C5.25 11.4319 6.01562 12.1975 7 12.1975C7.95703 12.1975 8.75 11.4319 8.75 10.4475H12.25C13.207 10.4475 14 11.2405 14 12.1975V13.0725C14 14.0569 13.207 14.8225 12.25 14.8225H1.75C0.765625 14.8225 0 14.0569 0 13.0725V12.1975C0 11.2405 0.765625 10.4475 1.75 10.4475ZM11.8125 13.2913C12.168 13.2913 12.4688 13.0178 12.4688 12.635C12.4688 12.2795 12.168 11.9788 11.8125 11.9788C11.4297 11.9788 11.1562 12.2795 11.1562 12.635C11.1562 13.0178 11.4297 13.2913 11.8125 13.2913Z" fill="#FAF6E6" />
                    </svg>
                    <span class="p-1">Choose File</span>
                  </div>
                  <div class="col-7 col-sm-8 label-right-side">
                    <span class="label-text">No File Choosen</span>
                  </div>
                </label>
                <input type="file" name="bukti" id="bukti" class="file-input" style="display: none;">
              </div>
            </div>
          </div>
        </div>

        <div class="button-container bg-cream">
          <button class="btn button btn-prev" data-prev="3">Previous</button>

        </div>
        <div class="createAcc-container">
          <button class="btn btn-create">Submit</button>
        </div>
      </div>
    </div>

    <footer>

    </footer>
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

      function submit() {

        Swal.fire({
          title: "Are you sure?",
          text: "Lomba yang sudah terdaftar dianggap telah menyetujui serangkaian peraturan & syarat yang ada, peserta tidak dapat melakukan refund untuk pengunduran lomba",
          icon: "warning",
          showCancelButton: true,
          confirmButtonText: "Sure",
        }).then((result) => {
          if (result.isConfirmed) {
            var namaLengkap = $(`#namaLengkap`).val();
            var email = $(`#email`).val();
            var instansi = $(`#instansi`).val();
            var line = $(`#line`).val();
            var noWhatsApp = $(`#noWhatsApp`).val();
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
            formData.append("jenisLomba", jenisLomba); //apakah sama dengan kategori?
            formData.append("namaLomba", namaLomba);

            formData.append("bukti", bukti);
            formData.append("ktmp", ktmp);
            formData.append("foto", foto);

            <?php
            for ($i = 2; $i <= $lomba_jenis['kelompok']; $i++) :
            ?>
              var ktmp<?= $i ?> = $(`#ktmp<?= $i ?>`)[0].files[0];
            <?php endfor; ?>
            // //buat extra member
            // var ktmp2 = $(`#ktmp2`)[0].files[0];
            // var ktmp3 = $(`#ktmp3`)[0].files[0];
            // var ktmp4 = $(`#ktmp4`)[0].files[0];
            // var ktmp5 = $(`#ktmp5`)[0].files[0];

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


            $('.btn-create').prop('disabled', true);
            console.log("dfa")
            $.ajax({
              type: "POST",
              url: "daftar/daftar.php",
              data: formData,
              contentType: false,
              processData: false,
              enctype: 'multipart/form-data',
              dataType: "json",
              success: (e) => {
                $('.btn-create').prop('disabled', false);
                console.log(e)
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
                  }).then((result) => {
                    if (result.isConfirmed) {
                      window.location.href = "profile.php";
                    }
                  });
                }
              },
              error: (e) => {
                $('.btn-create').prop('disabled', false);
              }
            });
          }
        });
      }

      $(".btn-create").click(function() {
        submit();
      });

      //upload file update label
      $(document).on('change', '.file-input', function() {
        var file = this.files[0];
        if ((file.size / 1048576).toFixed(2) > 2) {
          this.value = null;
          $(this).closest(".text-box").find(".label-text").text("No File Choosen");
          Swal.fire({
            title: "Failed",
            text: "Maximum file size is 2MB",
            icon: "error",
            button: "OK"

          })
          return;
        }
        if (file.name.length >= 15) {
          $(this).closest(".text-box").find(".label-text").text(file.name.substr(0, 15) + ".. (" + (file.size / 1048576).toFixed(2) + "MB)");
        } else {
          $(this).closest(".text-box").find(".label-text").text(file.name + " (" + (file.size / 1048576).toFixed(2) + "MB)");
        }
        var ext = $("#file").val().split(".").pop().toLowerCase();
        if ($.inArray(ext, ["php", "html"]) !== -1) {
          $("#info").hide();
          $("label").text("Choose File");
          $("#file").val("");
          alert("This file extension is not allowed!");
        }
      });


    });
  </script>
</body>

</html>
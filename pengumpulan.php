<?php
require("connect.php");

if (!isset($_SESSION['id'])) {
  header("Location: login.php");
}

$sql = "SELECT lp.*, lj.nama as lomba, lk.nama as kategori, lk.id as id_kategori  from lomba_pendaftaran lp
JOIN lomba_jenis lj ON lp.id_jenislomba = lj.id
JOIN lomba_kategori lk ON lj.id_kategori = lk.id
WHERE id_member = ? and lp.status = 1;";
$stmt = $conn->prepare($sql);
$stmt->execute([$_SESSION['id']]);
$lomba = $stmt->fetchAll();

$category = [];
foreach ($lomba as $item) {
  if (!in_array($item['kategori'], $category)) {
    $category[$item['id_kategori']] = $item['kategori'];
  }
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

  <?php include "navbar.php" ?>

  <?php include "loader.php" ?>
  <div class="page-content" style="visibility: hidden;">
    <div class="container-fluid text-white  main">

      <h1 class="heading text-center font2">PENGUMPULAN KARYA</h1>

      <!-- step -->
      <div class="process-wrap active-step1">
        <div class="process-main">
          <div class="col col-2 ">
            <div class="process-step-cont">
              <div class="process-step step-1"></div>
            </div>
          </div>
          <div class="col col-2 ">
            <div class="process-step-cont">
              <div class="process-step step-2"></div>
            </div>
          </div>
        </div>
      </div>


      <div class="container-1 text-center all font3">
        <div class="form-container">
          <!-- form submit -->
          <div class="row mx-1 mx-sm-3">
            <div class="col-12">
              <p class="dropdown-label">Kategori Lomba</p>
              <div class="text-box">
                <select name="kategori" id="kategori" class="input">
                  <option value="" disabled selected hidden>-- Pilih Kategori Lomba --</option>
                  <?php foreach ($category as $key => $item) : ?>
                    <option value="<?= $key ?>"><?= $item ?></option>
                  <?php endforeach; ?>
                </select>
              </div>
            </div>
            <div class="col-12">
              <p class="dropdown-label">Lomba</p>
              <div class="text-box">
                <select name="lomba" id="lomba" class="input">
                  <option value="" disabled selected hidden>-- Pilih Lomba --</option>
                  <!-- todo: fetch lomba diikuti berdasarkan kategori  -->
                </select>
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
                <label for="karya" class="label-header">Kumpulkan Karya (Link)</label>
                <input type="url" class="input" id="karya" name="karya" autocomplete="off">
              </div>
            </div>
            <div class="col-12">
              <div class="text-box">
                <label for="judul" class="label-header">Judul Karya</label>
                <input type="text" class="input" id="judul" name="judul" autocomplete="off">
              </div>
            </div>
          </div>

          <div class="button-container bg-cream">
            <button class="btn button btn-prev" data-prev="1">Previous</button>
          </div>
          <div class="createAcc-container">
            <button class="btn btn-create">Submit</button>
          </div>
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
        if ($('#lomba').val() == null) {
          Swal.fire({
            title: "Failed",
            text: "Pilih lomba terlebih dahulu",
            icon: "error",
            button: "OK"
          });
          return;
        }
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

      var lomba = <?= json_encode($lomba) ?>;

      $('#kategori').on("change", function() {
        var id = $(this).val();
        console.log(lomba)
        var lombas = lomba.filter((item) => {
          return item.id_kategori == id;
        });
        $('#lomba').html('');
        $('#lomba').append(`<option value="" disabled selected hidden>-- Pilih Lomba --</option>`);
        lombas.forEach((item) => {
          $('#lomba').append(`<option value="${item.id_jenislomba}|${item.no_peserta}">${item.lomba}</option>`);
        });
      })

      function submit() {
        var karya = $('#karya').val();
        var judul = $('#judul').val();
        var data_lomba = ($('#lomba').val()).split('|');
        var lomba = data_lomba[0];
        var no_peserta = data_lomba[1];

        var formData = new FormData();
        formData.append('lomba', lomba);
        formData.append('karya', karya);
        formData.append('judul', judul);
        formData.append('no_peserta', no_peserta);

        $.ajax({
          type: "POST",
          url: "pengumpulan/kumpul.php",
          data: formData,
          contentType: false,
          processData: false,
          dataType: "json",
          success: (e) => {
            console.log(e);
            if (!e.success) {
              Swal.fire({
                title: "Failed",
                text: e.message,
                icon: "error",
                button: "OK"
              });
            } else if (e.success) {
              Swal.fire({
                title: "success",
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
            console.log(e)
          }
        });

      }
      $(".btn-create").on("click", function() {
        submit();
      });


    });
  </script>
</body>

</html>
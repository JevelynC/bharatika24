<?php
require_once "../connect.php";

if (!isset($_SESSION['gmail'])) {
    header('Location: login.php');
    exit;
} else {
    $gmail = $_SESSION['gmail'];
    $username = $_SESSION['username'];
    $division = $_SESSION['division'];
    $nrp = $_SESSION['nrp'];
}

//BUAT SELECT TANGGAL DAFTAR
$getTanggalSql = "SELECT DISTINCT(DATE(time_register)) AS dd FROM `lomba_pendaftaran` ORDER BY dd";
$getTanggalAction = $conn->prepare($getTanggalSql);
$getTanggalAction->execute();
$outputTanggal = '';
while ($getTanggalRow = $getTanggalAction->fetch()) {
    $isi = date("l, d-m-Y", strtotime($getTanggalRow['dd']));
    $value = date("d-m-Y", strtotime($getTanggalRow['dd']));
    $outputTanggal .= '<option value="' . $value . '">' . $isi . '</option>';
}

// BUAT SELECT JENIS LOMBA
$getLombaSql = "SELECT nama FROM `lomba_jenis` ORDER BY id";
$getLombaAction = $conn->prepare($getLombaSql);
$getLombaAction->execute();
$outputLomba = '';
while ($getLombaRow = $getLombaAction->fetch()) {
    $lomba = $getLombaRow['nama'];
    $outputLomba .= '<option value="' . $lomba . '">' . $lomba . '</option>';
}

$stmt = $conn->prepare("SELECT * from lomba_pendaftaran lp JOIN member m ON lp.id_member = m.id JOIN lomba_jenis lj ON lp.id_jenislomba = lj.id");
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bharatika 2024 | Pendaftaran Peserta</title>

    <?php include 'link.html' ?>

    <style>
        body {
            background-color: rgb(236 232 232);
            background-repeat: no-repeat;
            min-height: 100vh;
            font-family: Poppins-Medium;
        }

        .mid {
            text-align: center;
        }

        .dt-buttons {
            margin-bottom: 30px;
        }

        .dataTables_length {
            margin-bottom: 1rem;
        }

        .img-custom {
            border-radius: 5px;
            cursor: pointer;
            transition: 0.3s;
            max-width: 240px;
            display: block;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid #555;
        }

        .loader-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.8);
            display: none;
            align-items: center;
            justify-content: center;
            z-index: 9999;
        }

        .loader {
            height: 150px;
            width: 50%;
            text-align: center;
            padding: 1em;
            display: block;
            vertical-align: top;
        }

        #loading_svg path,
        #loading_svg rect {
            fill: #781442 !important;
        }

        .col-sm-6,
        .col-sm-5,
        .col-sm-7 {
            margin: 10px auto !important;
        }
    </style>
</head>

<body>
    <?php include './navbar.php'; ?>

    <div class="container my-5">
        <?php include './loader.php'; ?>
        <h1 class="row justify-content-center judul" style="font-weight: 800">
            PENDAFTARAN LOMBA
        </h1>
        <div class="row justify-content-center mt-4">

            <div class="col-md-3 col-11 selectFilter mt-2">
                <select class="form-select form-select-sm" id="selectDay" aria-label="Default select example">
                    <option selected disabled>Filter By Tanggal Pendaftaran...</option>
                    <option value="">All</option>
                    <?php echo $outputTanggal; ?>
                </select>
            </div>

            <div class="col-md-3 col-11 selectFilter mt-2">
                <select class="form-select form-select-sm" id="selectStatus" aria-label="Default select example">
                    <option selected disabled>Filter By Status Validasi...</option>
                    <option value="">All</option>
                    <option value="Validated">Tervalidasi</option>
                    <option value="Validasi">Belum Tervalidasi</option>
                </select>
            </div>

            <div class="col-md-3 col-11 selectFilter mt-2">
                <select class="form-select form-select-sm" id="selectLomba" aria-label="Default select example">
                    <option selected disabled>Filter By Jenis Lomba...</option>
                    <option value="">All</option>
                    <?php echo $outputLomba; ?>
                </select>
            </div>
        </div>

    </div>

    <div class="card my-5 mx-3" style="border-radius: 1.3rem;">
        <div class="card-body table-responsive">
            <table class="table table-striped" id="tableMain" style="width: 100%!important;">
                <thead>
                    <tr class="mid">
                        <th>#</th>
                        <th>E-mail</th>
                        <th>No Peserta</th>
                        <th>Lomba</th>
                        <th>Nomor WA Ketua</th>
                        <th>ID Line Ketua</th>
                        <th>Pas Foto Ketua</th>
                        <th>Data Anggota</th>
                        <th>Tanggal Pendaftaran</th>
                        <th>Bukti Transfer</th>
                        <th>Status Validasi</th>
                    </tr>
                </thead>
                <tbody id="tbodyMain">
                    <?php
                    $i = 1;
                    foreach ($result as $row) {
                        echo "
                            <tr class='mid'>
                            <td>" . $i . "</td>
                            <td>" . $row['email'] . "</td>
                            <td>" . $row['no_peserta'] . "</td>
                            <td>" . $row['nama'] . "</td>
                            <td>" . $row['no_wa'] . "</td>
                            <td>" . $row['line_id'] . "</td>
                            <td><button class='btn btn-warning' onClick='openModal(\"../uploads/" . $row['foto'] . "\")'>View</button></td>
                            <td><button class='btn btn-primary viewAnggota' data-id_member =" . $row['id_member'] . " data-no_peserta =" . $row['no_peserta'] . ">View</button></td>
                            <td>" . date('d-m-Y', strtotime($row['time_register'])) . "</td>
                            <td><button class='btn btn-warning' onClick='openModal(\"../uploads/" . $row['bukti_pembayaran'] . "\")'>View</button></td>";

                        if ($row["status"] == 0) {
                            echo "<td><button class='btn btn-success btn-validasi' data-id_jenislomba=" . $row['id_jenislomba'] . " data-no_peserta=" . $row["no_peserta"] . " data-id_member =" . $row['id_member'] . " data-email =" . $row['email'] . ">Validasi</button></td>";
                        } else {
                            echo "<td>Validated</td>";
                        }

                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>

    <!-- Modal DETAIL ANGGOTA -->
    <div class="modal fade" id="userModal" tabindex="-1" aria-hidden="true" data-bs-backdrop="static" style="padding-top: 0px; background-color: rgba(0, 0, 0, 0.2);">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Detail Anggota</h1>
                    <button type="button" class="btn-close close2" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <table class="table">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Nama</th>
                                <th>KTM</th>
                            </tr>
                        </thead>
                        <tbody id="modalBody">

                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary close2" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- modal buat nunjukin foto -->
    <div class="modal fade" id="modalFoto" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <img src="" class="img-fluid" alt="" id="gambarModal">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- MODAL BUKTI TRF -->
    <div id="imgmodal-1" class="modal">
        <span class="close">&times;</span>
        <img class="modal-contentt" id="img01">
    </div>


    <script>
        $(document).ready(function() {
            var table = $('#tableMain').DataTable({
                "lengthMenu": [
                    [5, 10, 25, 50, 100, -1],
                    [5, 10, 25, 50, 100, "All"]
                ],
                "scrollX": true,
                dom: "<'d-flex text-center justify-content-center'B><'row'<'col-sm-6'l><'col-sm-6'f>>" +
                    "<'row'<'col-sm-12'tr>>" + "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                buttons: {
                    dom: {
                        button: {
                            tag: "button",
                            className: "btn btn-dark my-2"
                        },
                        buttonLiner: {
                            tag: null
                        }
                    }
                }
            });
            Search(table);

            $(document).on("click", ".viewAnggota", function(e) {
                e.preventDefault();
                var no_peserta = $(this).data("no_peserta");
                var id_member = $(this).data("id_member");

                $.ajax({
                    url: 'getUser.php',
                    method: 'POST',
                    data: {
                        no_peserta: no_peserta,
                        id_member: id_member
                    },
                    success: function(response) {
                        $('#modalBody').html(response);
                        $('#userModal').modal('show');
                    }
                });
            });

            $(document).on("click", ".btn-validasi", function(e) {
                e.preventDefault();
                var no_peserta = $(this).data("no_peserta");
                var id_member = $(this).data("id_member");
                var id_jenislomba = $(this).data("id_jenislomba");
                var email = $(this).data("email");

                Swal.fire({
                    icon: 'warning',
                    title: 'Konfirmasi',
                    text: 'Apakah Anda yakin ingin memvalidasi pendaftaran?',
                    showCancelButton: true,
                    confirmButtonText: 'Yakin',
                    cancelButtonText: 'Cancel'
                }).then((result) => {
                    if (result.isConfirmed) {
                        $(".loader-container").css("display", "flex");
                        $.ajax({
                            url: 'validasi.php',
                            type: 'POST',
                            data: {
                                no_peserta: no_peserta,
                                id_member: id_member,
                                id_jenislomba: id_jenislomba,
                                email: email
                            },
                            success: (e) => {
                                $(".loader-container").css("display", "none");
                                if (!e.success_valid && e.message != null) {
                                    Swal.fire({
                                        icon: "error",
                                        title: "Failed",
                                        text: e.message,
                                    });
                                } else if (e.success_valid) {
                                    Swal.fire({
                                        title: "Success",
                                        text: e.message,
                                        icon: "success",
                                    }).then((result) => {
                                        if (result.isConfirmed) {
                                            location.reload();
                                        }
                                    });
                                }
                            },
                            error: function(err) {
                                $(".loader-container").css("display", "none");
                                Swal.fire({
                                    title: "Error",
                                    text: "Terjadi kesalahan saat memproses data!",
                                    icon: 'error',
                                });
                            }
                        });
                    }
                });
            });
            $(".daftarNavbar").addClass("active disabled");
        });
    </script>

    <script>
        function openModal(link) {
            $("#gambarModal").attr("src", link);

            const myModal = new bootstrap.Modal(document.getElementById('modalFoto'));
            myModal.show();
        }

        function Search(table) {
            $(document).on('change', '#selectDay', function() {
                table.columns(8).search(this.value).draw();
            });
            $(document).on('change', '#selectStatus', function() {
                table.columns(10).search(this.value).draw();
            });
            $(document).on('change', '#selectLomba', function() {
                table.columns(3).search(this.value).draw();
            });
        }
    </script>

</body>

</html>
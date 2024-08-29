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
$getTanggalSql = "SELECT DISTINCT(DATE(tgl_submit)) AS dd FROM `upload_karya` ORDER BY dd";
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

$stmt = $conn->prepare("SELECT * from upload_karya uk JOIN lomba_pendaftaran lp ON uk.no_peserta = lp.no_peserta JOIN lomba_jenis lj ON uk.id_jenislomba = lj.id");
$stmt->execute();
$result = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Bharatika 2024 | Pengumpulan Karya</title>

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
            PENGUMPULAN KARYA
        </h1>
        <div class="row justify-content-center mt-4">

            <div class="col-md-5 col-11 selectFilter mt-2">
                <select class="form-select form-select-sm" id="selectDay" aria-label="Default select example">
                    <option selected disabled>Filter By Tanggal Pendaftaran...</option>
                    <option value="">All</option>
                    <?php echo $outputTanggal; ?>
                </select>
            </div>

            <div class="col-md-5 col-11 selectFilter mt-2">
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
                        <th>No Peserta</th>
                        <th>Lomba</th>
                        <th>Judul Karya</th>
                        <th>File Karya</th>
                        <th>Tanggal Submit</th>
                    </tr>
                </thead>
                <tbody id="tbodyMain">
                    <?php
                    $i = 1;
                    foreach ($result as $row) {
                        echo "
                            <tr class='mid'>
                            <td>" . $i . "</td>
                            <td>" . $row['no_peserta'] . "</td>
                            <td>" . $row['nama'] . "</td>
                            <td>" . $row['judul_karya'] . "</td>
                            <td><a href='" . $row['file_karya'] . "' target='_blank'><button class='btn btn-primary'>View</button></a></td>
                            <td>" . date('d-m-Y', strtotime($row['tgl_submit'])) . "</td>";

                        echo "</tr>";
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
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

            $(".karyaNavbar").addClass("active disabled");
        });
    </script>

    <script>
        function Search(table) {
            $(document).on('change', '#selectDay', function() {
                table.columns(5).search(this.value).draw();
            });
            $(document).on('change', '#selectLomba', function() {
                table.columns(2).search(this.value).draw();
            });
        }
    </script>

</body>

</html>
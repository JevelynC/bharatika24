<?php require "connect.php" ?>

<?php

if (!isset($_SESSION['id'])) {
    header("Location: login.php");
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bharatika Creative Design Festival 2024 | KREAKTOR</title>


    <?php include "assets/link.html" ?>
    <!-- css -->
    <link rel="stylesheet" href="assets/css/general.css">
    <link rel="stylesheet" href="assets/css/footer.css">

    <style>
        .page-content {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .profile {
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 80vw;
            margin-top: 120px;
            color: var(--cream);
        }


        .box2 {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2vw;
        }


        .prof-img {
            width: 15vw;
        }

        .profile-ktm {
            border-radius: 10px;
        }


        .tulisan-hai {
            font-size: 2.5vw;
        }


        .tulisan-nama {
            font-size: 4vw;
        }


        .tulisan-signout {
            font-size: 1.5vw;
        }

        .profile button {
            font-weight: 700;
            padding: 0.5rem 3rem;
            font-size: 16px;
            border-radius: 25px;
            border: none;
            transition: all 0.2s ease-in-out;
            background: var(--cream);
            color: var(--magenta) !important;
        }

        .profile button:hover,
        .profile button:active,
        .profile button:focus {
            background: linear-gradient(90deg, var(--green), var(--cream));
            cursor: pointer;
        }


        table {
            width: 80vw !important;
            color: var(--magenta) !important;
        }

        table th {
            color: var(--cream) !important;
            background-color: var(--magenta) !important;
        }

        table td {
            color: var(--black) !important;
            background-color: var(--cream) !important;
        }

        table th:first-child {
            border-top-left-radius: 20px !important;
        }


        table th:last-child {
            border-top-right-radius: 20px !important;
        }

        .view {
            background: var(--black);
            color: var(--cream);
            border: none;
            border-radius: 25px;
            padding: 5px 10px;
            transition: all 0.2s ease-in-out;
        }

        .pendaftaran h1,
        .pengumpulan h1 {
            color: var(--cream);
            font-weight: 700;
        }

        .desktop4 {
            display: contents;
        }

        .mobile4 {
            display: none;
        }

        .pendaftaran,
        .pengumpulan {
            min-height: 30vh;
        }

        .line-events {
            width: 12vw;
            height: 3px;
            border-radius: 5px;
            background-color: var(--cream);
        }

        @media (max-width: 800px) {
            .desktop4 {
                display: none !important;
            }

            .mobile4 {
                display: contents;
            }
        }


        @media screen and (max-width: 1024px) {
            .profile {
                column-gap: 35vw;
            }
        }


        @media screen and (max-width: 768px) {
            .profile {
                flex-direction: column;
                row-gap: 5vh;
            }

            .line-events {
                width: 35vw;
                height: 2px;
                background-color: var(--cream);
            }

            .box2 {
                gap: 5vw;
            }


            .prof-img {
                width: 30vw;
            }


            .tulisan-hai {
                font-size: 5vw;
            }


            .tulisan-nama {
                font-size: 8vw;
            }


            .tulisan-signout {
                font-size: 4vw;
            }

            section {
                margin-top: 0;
            }
        }
    </style>
</head>

<body>
    <?php include "loader.php" ?>
    <div class="page-content" style="visibility: hidden;">
        <?php include "navbar.php" ?>
        <div class="profile">
            <div class="left">
                <div class="box2">
                    <?php
                    $sql = "SELECT ktm FROM `lomba_pendaftaran` WHERE id_member = \"" . $_SESSION['id'] . "\"";
                    $aksi = $conn->prepare($sql);
                    $aksi->execute();
                    $foto = $aksi->fetch();

                    if ($aksi->rowCount() > 0) {
                    ?>
                        <img src="<?= "uploads/" . $foto['ktm'] ?>" alt="" class="prof-img profile-ktm">
                    <?php } else { ?>
                        <img src="assets/img/profile.png" alt="" class="prof-img">
                    <?php } ?>
                    <div>
                        <h2 class="font2 m-0 tulisan-hai">Hai,</h2>
                        <h1 class="font2 tulisan-nama">
                            <?php
                            $sql = "SELECT nama_lengkap FROM `member` m where m.id = ?";
                            $action = $conn->prepare($sql);
                            $action->execute([$_SESSION['id']]);
                            $data = $action->fetch();
                            echo htmlspecialchars(explode(" ", $data['nama_lengkap'])[0]);
                            ?> !
                        </h1>
                        <a href="logout.php" style="color: var(--cream);">
                            <h4 class="font3 tulisan-signout">Sign Out</h4>
                        </a>
                    </div>
                </div>
            </div>
            <div class="right d-flex flex-column">
                <a href="daftar.php"><button class="btn btn-primary">Pendaftaran Lomba</button></a>
                <a href="pengumpulan.php"><button class="btn btn-primary mt-3">Pengumpulan Karya</button></a>
            </div>
        </div>

        <section class="pendaftaran pt-5 mt-5">
            <div class="desktop4 line-container d-flex justify-content-center align-items-center">
                <div class="line-events my-4"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none" style="margin-left: -20px;">
                    <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#FAF6E6" />
                </svg>

                <h1 class="mx-3 text-heading2 font2 text-center">HISTORY PENDAFTARAN LOMBA</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none" style="margin-right: -15px;">
                    <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#FAF6E6" />
                </svg>
                <div class="line-events my-4"></div>
            </div>

            <div class="mobile4 justify-content-center font2 my-5 align-items-center flex-column">
                <h1 class="m-0 text-heading2 font2 text-center">HISTORY PENDAFTARAN LOMBA</h1>
                <div class="line-container d-flex justify-content-center align-items-center" style="gap: 2vw;">
                    <div class="line-events my-4" style="background-color: #faf6e6;"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#faf6e6" />
                    </svg>
                    <div class="line-events my-4" style="background-color: #faf6e6;"></div>
                </div>
            </div>
            <div class="table-responsive mt-4">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Lomba</th>
                            <th scope="col">Nomor</th>
                            <th scope="col">Bukti</th>
                            <th scope="col">Foto</th>
                            <th scope="col">KTM/KTP</th>
                            <th scope="col">Tanggal Daftar</th>
                            <th scope="col">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT *, (SELECT nama FROM `lomba_jenis` j where id = p.id_jenislomba ) as namaLomba FROM `lomba_pendaftaran` p WHERE id_member = \"" . $_SESSION['id'] . "\"";
                        $action = $conn->prepare($sql);
                        $action->execute();

                        $i = 1;
                        if ($action->rowCount() > 0) {
                            while ($data = $action->fetch()) {
                                if ($data['status'] == 1) {
                                    $validasi = "Validated";
                                } else if ($data['status'] == 0) {
                                    $validasi = "Unvalidated";
                                }
                                echo '<tr class="text-center">
                        <td>' . $i++ . '</td>
                        <td>' . $data['namaLomba'] . '</td>
                        <td>' . $data['no_peserta'] . '</td>
                        <td><button class="view font3" onClick="openModal(\'uploads/' . $data['bukti_pembayaran'] . '\')">View</button></td>
                        <td><button class="view font3" onClick="openModal(\'uploads/' . $data['foto'] . '\')">View</button></td>
                        <td><button class="view font3" onClick="openModal(\'uploads/' . $data['ktm'] . '\')">View</button></td>
                        <td>' . $data['time_register'] . '</td>
                        <td>' . $validasi . '</td>
                         <tr>';
                            }
                        } else {
                            echo '<tr>
                        <td class="text-center" colspan=9>Anda belum memiliki data pendaftaran lomba.</td>
                         <tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>

            <script>
                function openModal(link) {
                    console.log("Mielasse");
                    $("#gambarModal").attr("src", link);
                    // $("#titlee").text(title);

                    //munculin modal dgn id "modalId"
                    const myModal = new bootstrap.Modal(document.getElementById('uploadsPeserta'));
                    myModal.show();
                }
            </script>

            <!-- modal buat nunjukin files -->
            <div class="modal fade" id="uploadsPeserta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        </section>

        <section class="pengumpulan pt-5 mb-5">
            <div class="desktop4 line-container d-flex justify-content-center align-items-center">
                <div class="line-events my-4"></div>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none" style="margin-left: -20px;">
                    <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#FAF6E6" />
                </svg>

                <h1 class="mx-3 text-heading2 font2 text-center">HISTORY PENGUMPULAN KARYA</h1>
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 26 26" fill="none" style="margin-right: -15px;">
                    <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#FAF6E6" />
                </svg>
                <div class="line-events my-4"></div>
            </div>

            <div class="mobile4 justify-content-center font2 my-5 align-items-center flex-column">
                <h1 class="m-0 text-heading2 font2 text-center">HISTORY PENGUMPULAN KARYA</h1>
                <div class="line-container d-flex justify-content-center align-items-center" style="gap: 2vw;">
                    <div class="line-events my-4" style="background-color: #faf6e6;"></div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 26 26" fill="none">
                        <path d="M13 26L9.96651 16.0335L1.1365e-06 13L9.96651 9.96651L13 -1.1365e-06L16.0335 9.96651L26 13L16.0335 16.0335L13 26Z" fill="#faf6e6" />
                    </svg>
                    <div class="line-events my-4" style="background-color: #faf6e6;"></div>
                </div>
            </div>
            <div class="table-responsive mt-4">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Lomba</th>
                            <th scope="col">Nomor</th>
                            <th scope="col">Judul Karya</th>
                            <th scope="col">File</th>
                            <th scope="col">Tanggal Kumpul</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sql = "SELECT *, (SELECT nama FROM `lomba_jenis` j where id = p.id_jenislomba ) as namaLomba FROM `upload_karya` p WHERE id_member = \"" . $_SESSION['id'] . "\"";
                        $action = $conn->prepare($sql);
                        $action->execute();

                        $i = 1;
                        if ($action->rowCount() > 0) {
                            while ($data = $action->fetch()) {
                                if ($data['status'] == 1) {
                                    $validasi = "Validated";
                                } else if ($data['status'] == 0) {
                                    $validasi = "Unvalidated";
                                }
                                echo '<tr class="text-center">
                                <td>' . $i++ . '</td>
                                <td>' . $data['namaLomba'] . '</td>
                                <td>' . $data['no_peserta'] . '</td>
                                <td>' . htmlspecialchars($data['judul_karya']) . '</td>
                                <td><a href="' . $data['file_karya'] . '" target="_blank"><button class="view font3">View</button></td></a>
                                <td>' . $data['tgl_submit'] . '</td>
                             <tr>';
                            }
                        } else {
                            echo '<tr>
                        <td class="text-center" colspan=8>Anda belum memiliki data pengumpulan karya.</td>
                         <tr>';
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </section>

        <?php include "footer.php" ?>
    </div>

    <script src="assets/js/nav.js"></script>
</body>

</html>
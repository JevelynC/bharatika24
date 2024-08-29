<?php
//conn
require ("../connect.php");
//success check
$success = false;
$message = '';
$db = $conn;
//php mailer
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/Exception.php';
require '../PHPMailer/PHPMailer.php';
require '../PHPMailer/SMTP.php';

//cek udah lengkap belum datanya
if (
    isset($_POST['namaLengkap']) && isset($_POST['email'])
    && isset($_POST['line']) && isset($_POST['noWhatsApp'])
    && isset($_POST['instansi']) && isset($_POST['jenisLomba'])
    && isset($_FILES['bukti']) && isset($_FILES['ktmp'])
    && isset($_FILES['foto']) && isset($_POST['minMember'])
    && !($_POST['namaLengkap'] == '' || $_POST['email'] == ''
        || $_POST['line'] == '' || $_POST['noWhatsApp'] == ''
        || $_POST['instansi'] == '' || $_POST['jenisLomba'] == ''
        || $_POST['minMember'] == ''
    )
) {
    // var_dump($_POST);
    // test jumlah member
    // var_dump($_POST);
    $temp = $_POST['minMember'];
    for ($i = 2; $i <= $_POST['maxMember']; $i++) {
        if ($_POST['member' . $i] != '') {
            if ($_FILES['member' . $i . 'ktm'] != '') {
                $temp--;
            }
        }
    }

    if ($temp > 1) {
        $success = false;
        $message = "Data member lain belum lengkap";
        echo json_encode([
            'success' => $success,
            'message' => $message
        ]);
        die();
    }

    //test udah pernah daftar belum
    $stmt = $conn->prepare("SELECT id FROM lomba_pendaftaran WHERE id_member = ? AND id_jenislomba = ?");
    $stmt->execute([$_SESSION['id'], $_POST['kategori']]);
    if ($stmt->rowCount() > 0) {
        $message = "Anda sudah terdaftar pada lomba tersebut";
    } else {

        //generate uid
        // $query = "SELECT " . "id" . 
        // " FROM lomba_pendaftaran
        // where id_member = \"" . $_SESSION['id'] . "\" AND id_jenislomba = \"" . $_POST['kategori'] . "\"";
        // $request = $db->query($query);
        // $id = $request->fetch();

        // Validasi ekstensi dan MIME type untuk file gambar
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        $allowedMimeTypes = ['image/jpeg', 'image/png', 'image/gif'];

        // Validasi file bukti
        if ($_FILES['bukti']['error'] === 0) {
            $buktiExtension = strtolower(pathinfo($_FILES['bukti']['name'], PATHINFO_EXTENSION));
            $buktiMimeType = mime_content_type($_FILES['bukti']['tmp_name']);
            if (!in_array($buktiExtension, $allowedExtensions) || !in_array($buktiMimeType, $allowedMimeTypes)) {
                $message = "File bukti pembayaran harus berupa gambar (JPG, JPEG, PNG).";
                echo json_encode([
                    'success' => $success,
                    'message' => $message
                ]);
                die();
            }
        } else {
            $message = "Terjadi kesalahan saat mengunggah file bukti.";
            echo json_encode([
                'success' => $success,
                'message' => $message
            ]);
            die();
        }

        // Validasi file ktmp
        if ($_FILES['ktmp']['error'] === 0) {
            $ktmpExtension = strtolower(pathinfo($_FILES['ktmp']['name'], PATHINFO_EXTENSION));
            $ktmpMimeType = mime_content_type($_FILES['ktmp']['tmp_name']);
            if (!in_array($ktmpExtension, $allowedExtensions) || !in_array($ktmpMimeType, $allowedMimeTypes)) {
                $message = "File KTM/kartu pelajar harus berupa gambar (JPG, JPEG, PNG).";
                echo json_encode([
                    'success' => $success,
                    'message' => $message
                ]);
                die();
            }
        } else {
            $message = "Terjadi kesalahan saat mengunggah file KTP.";
            echo json_encode([
                'success' => $success,
                'message' => $message
            ]);
            die();
        }

        // Validasi file foto
        if ($_FILES['foto']['error'] === 0) {
            $fotoExtension = strtolower(pathinfo($_FILES['foto']['name'], PATHINFO_EXTENSION));
            $fotoMimeType = mime_content_type($_FILES['foto']['tmp_name']);
            if (!in_array($fotoExtension, $allowedExtensions) || !in_array($fotoMimeType, $allowedMimeTypes)) {
                $message = "File foto harus berupa gambar (JPG, JPEG, PNG).";
                echo json_encode([
                    'success' => $success,
                    'message' => $message
                ]);
                die();
            }
        } else {
            $message = "Terjadi kesalahan saat mengunggah file foto.";
            echo json_encode([
                'success' => $success,
                'message' => $message
            ]);
            die();
        }

        // Validasi file KTM anggota
        $temp = $_POST['minMember'];
        for ($i = 2; $i <= $_POST['maxMember']; $i++) {
            if ($_POST['member' . $i] != '') {
                if ($_FILES['member' . $i . 'ktm'] != '') {
                    if ($_FILES['member' . $i . 'ktm']['error'] === 0) {
                        $fotoExtension = strtolower(pathinfo($_FILES['member' . $i . 'ktm']['name'], PATHINFO_EXTENSION));
                        $fotoMimeType = mime_content_type($_FILES['member' . $i . 'ktm']['tmp_name']);
                        if (!in_array($fotoExtension, $allowedExtensions) || !in_array($fotoMimeType, $allowedMimeTypes)) {
                            $message = "File KTM/Foto Anggota harus berupa gambar (JPG, JPEG, PNG).";
                            echo json_encode([
                                'success' => $success,
                                'message' => $message
                            ]);
                            die();
                        }
                    } else {
                        $message = "Terjadi kesalahan saat mengunggah file foto.";
                        echo json_encode([
                            'success' => $success,
                            'message' => $message
                        ]);
                        die();
                    }
                }
            }
        }

        $query = "SELECT max(no_peserta) as jumlah FROM lomba_pendaftaran where id_jenislomba = ?";
        $stmt = $conn->prepare($query);
        $stmt->execute([$_POST['jenisLomba']]);
        $userData = $stmt->fetch();
        $noUrut = ($userData['jumlah'] % 100) + 1;
        // var_dump($userData['jumlah'], $noUrut);
        if (strlen($noUrut) < 2) {
            $noUrut = "0" . $noUrut;
        }

        // var_dump($_POST['jenisLomba']);
        $uid = "924" . $_POST['kategori'] . $noUrut;

        //prepare image
        // 1. Bukti
        $bukti_name = $_FILES['bukti']['name'];
        $bukti_ext = explode('.', $bukti_name);
        $bukti_type = strtolower(end($bukti_ext));
        $bukti_tmp = $_FILES['bukti']['tmp_name'];

        $bukti_nameNew = 'Bukti_' . $_POST['namaLengkap'] . '_' . $uid . "." . $bukti_type;
        $bukti_destination = '../uploads/bukti/';
        $bukti_dir = $bukti_destination . $bukti_nameNew;
        $bukti_move = move_uploaded_file($bukti_tmp, $bukti_dir);
        // 2. ktmp
        $ktmp_name = $_FILES['ktmp']['name'];
        $ktmp_ext = explode('.', $ktmp_name);
        $ktmp_type = strtolower(end($ktmp_ext));
        $ktmp_tmp = $_FILES['ktmp']['tmp_name'];

        $ktmp_nameNew = 'Ktmp_' . $_POST['namaLengkap'] . '_' . $uid . "." . $ktmp_type;
        $ktmp_destination = '../uploads/ktmp/';
        $ktmp_dir = $ktmp_destination . $ktmp_nameNew;
        $ktmp_move = move_uploaded_file($ktmp_tmp, $ktmp_dir);
        // 3. foto
        $foto_name = $_FILES['foto']['name'];
        $foto_ext = explode('.', $foto_name);
        $foto_type = strtolower(end($foto_ext));
        $foto_tmp = $_FILES['foto']['tmp_name'];

        $foto_nameNew = 'Foto_' . $_POST['namaLengkap'] . '_' . $uid . "." . $foto_type;
        $foto_destination = '../uploads/foto/';
        $foto_dir = $foto_destination . $foto_nameNew;
        $foto_move = move_uploaded_file($foto_tmp, $foto_dir);

        //insert data ikut lomba
        $sql = "INSERT INTO lomba_pendaftaran (id_member, id_jenislomba, bukti_pembayaran, ktm, foto, time_register, no_peserta) 
        VALUES (?,?,?,?,?,current_timestamp(),?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            $_SESSION['id'],
            $_POST['kategori'],
            $bukti_dir,
            $ktmp_dir,
            $foto_dir,
            $uid
        ]);

        // $stmt = $conn->prepare(
        //     "UPDATE `lomba_pendaftaran`
        //     SET  `no_peserta` = '$uid'" .
        //     " WHERE id = \"" . $id['id'] . "\"");
        //     $stmt->execute();

        //Nambahin akun anggota lain kalo ada
        $temp = $_POST['minMember'];
        for ($i = 2; $i <= $_POST['maxMember']; $i++) {
            if ($_POST['member' . $i] != '') {
                if ($_FILES['member' . $i . 'ktm'] != '') {
                    //proses add ktm anggota extra
                    $ktmp_name = $_FILES['member' . $i . 'ktm']['name'];
                    $ktmp_ext = explode('.', $ktmp_name);
                    $ktmp_type = strtolower(end($ktmp_ext));
                    $ktmp_tmp = $_FILES['member' . $i . 'ktm']['tmp_name'];

                    $ktmp_nameNew = 'Ktmp_' . $_POST['member' . $i] . '_' . $uid . "." . $ktmp_type;
                    $ktmp_destination = '../uploads/ktmp/';
                    $ktmp_dir = $ktmp_destination . $ktmp_nameNew;
                    $ktmp_move = move_uploaded_file($ktmp_tmp, $ktmp_dir);

                    $sql = "INSERT INTO lomba_anggota (no_peserta, ang_nama, ktm) 
                    VALUES (?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->execute([$uid, $_POST['member' . $i], $ktmp_dir]);
                }
            }
        }

        $success = true;
        $message = "Berhasil Mendaftar Lomba";

        //kirim otp

        // supaya bisa dijalanin di local / xampp
        $mail = new PHPMailer(true);
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );

        $mail->SMTPDebug = 0;
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;
        $mail->Username = 'bharatika2024@gmail.com';
        $mail->Password = 'rmbbkcjxdscgnqhf'; //app password gmail

        $mail->setFrom('bharatika2024@gmail.com');
        $mail->addAddress($_POST['email']);
        $mail->isHTML(true);
        $mail->Subject = 'Bharatika Design Festival 2024 | Konfirmasi Pendaftaran Lomba ' . $_POST['namaLomba'] . ' [Do Not Reply]';
        $mail->Body = '
        <p>Hai Rekan Reaktor! 👋</p>
        <p>Email :  ' . $_POST['email'] . ' <br>
        Nomor Peserta : ' . $uid . ' <br>
        Lomba : ' . $_POST['namaLomba'] . ' <br>
        Pendaftaran kamu berhasil terkirim! 🎉 <br>
        Silahkan menunggu konfirmasi pendaftaran diterima atau ditolak oleh panitia. <br>
        Kamu bisa melihat status pendaftaran melalui website, dengan cara login terlebih dahulu dan kunjungi laman profile.
        <br>
        <br>
        Salam Reaktor, <br>
        Bharatika 2024🚀 <br>
        <br>
        ——————————————————————————————————————————————— <br>
        <br>
        Hello Reactor People! 👋 <br>

        Your registration has been successfully sent! 🎉 <br>
        Please wait for confirmation of registration being accepted or rejected by the committee. <br>
        You can see the registration status via the website, by first logging in and visiting the profile page. <br>
        <br>
        Best regards,<br>
        Bharatika 2024🚀
        </p>
        ';
        $mail->send();

    }

} else {
    $message = "Data tidak lengkap";
}

echo json_encode([
    'success' => $success,
    'message' => $message
]);
?>
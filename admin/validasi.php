<?php
include '../connect.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once '../PHPMailer/PHPMailer.php';
require_once '../PHPMailer/SMTP.php';
require_once '../PHPMailer/Exception.php';

$message = '';
$success_valid = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    header('Content-Type: application/json');

    if (isset($_POST['no_peserta']) && isset($_POST['id_member']) && isset($_POST['id_jenislomba']) && isset($_POST['email'])) {
        $id_jenislomba = $_POST['id_jenislomba'];
        $id_member = $_POST['id_member'];
        $no_peserta = $_POST['no_peserta'];
        $email = $_POST['email'];

        $stmt = $conn->prepare("UPDATE member SET verified = 1 WHERE id = ?");
        $stmt->execute([$id_member]);

        $stmt = $conn->prepare("UPDATE lomba_pendaftaran SET status = 1 WHERE no_peserta = ?");
        $stmt->execute([$no_peserta]);

        if ($stmt) {
            $message = 'Data berhasil dimasukkan !!';

            $sql = "SELECT nama from lomba_jenis WHERE id = ? limit 1";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$id_jenislomba]);
            $data = $stmt->fetch();

            $namaLomba = $data['nama'];

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
            $mail->Password = 'rmbbkcjxdscgnqhf';

            $mail->setFrom('bharatika2024@gmail.com');
            $mail->addAddress($_POST['email']);
            $mail->isHTML(true);
            $mail->Subject = 'BHARATIKA FESTIVAL 2024 - Registration Confirmed [Do Not Reply]';
            $mail->Body = '<p>Registration Confirmed</p>
            <p>Hai Rekan Reaktor! 👋<br>
            Terima kasih sudah melakukan pendaftaran Bharatika Festival 2024.
            </p>
            <p>Nomor Peserta: ' . $no_peserta .  '<br>
            Lomba: ' . $namaLomba .  '<br><br>
            Pendaftaran dan pembayaran telah diverifikasi! 🎉 <br>
            kamu bisa terus pantau Website & Instagram Bharatika untuk info lebih lanjut😁
            </p>
            <p>Semangat! Kami tunggu karya terbaiknya!! <br>
            Mari kita BANGKITKAN AKSI TRANSFORMASI ❤️‍🔥 <br><br>
    
            Salam Reaktor, <br>
            Bharatika 2024🚀
            </p>';
            $check = $mail->send();
            if ($check) {
                $message = "Sukses memvalidasi pendaftaran!";
                $success_valid = true;
            } else {
                $message = "Gagal mengirim email!";
            }
        } else {
            $message = "Gagal memvalidasi pendaftaran!";
        }
    }

    echo json_encode([
        'success_valid' => $success_valid,
        'message' => $message
    ]);
    return;
}

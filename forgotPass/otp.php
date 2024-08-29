<?php
include '../connect.php';

use PHPMailer\PHPMailer\PHPMailer;

require_once '../PHPMailer/PHPMailer.php';
require_once '../PHPMailer/SMTP.php';
require_once '../PHPMailer/Exception.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = $_SESSION['email'];
    }
    $stmt = $conn->prepare("SELECT * FROM member WHERE email = :email");
    $stmt->execute(['email' => $email]);
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (count($rows) <= 0) {
        echo 'tdkterdaftar';
    } else {
        if ($_POST['type'] == 'getOTP') {
            $_SESSION['otp'] = rand(100000, 999999);
            $_SESSION['email'] = $email;

            $mail = new PHPMailer();
            $name = 'BHARATIKA 2024 OTP';
            $subject = 'OTP for Change Password';

            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->Username = 'bharatika2024@gmail.com';
            $mail->Password = 'rmbb kcjx dscg nqhf'; 
            $mail->Port = 587; 
            $mail->SMTPSecure = 'tls'; 

            $mail->isHTML(true);
            $mail->setFrom($mail->Username, $name);
            $mail->addAddress($email);
            $mail->Subject = $subject;
            $isi = '<div>Hai! 👋<br>
            Berikut ini merupakan kode OTP untuk akun Bharatika kalian ✨<br>
            <br>
            Kode: ' . $_SESSION['otp'] . '<br>
            <br>
            Salam hangat, <br>
            BHARATIKA 2024</div>
            <br>
            —————————————————————————————————<br>
            <br>
            Hello! 👋<br>
            Here is the OTP code for your BHARATIKA account ✨<br>
            <br>
            Code: ' . $_SESSION['otp'] . '<br>
            <br>
            Best regards,<br>
            BHARATIKA 2024 <br>
            ';
            $body = $isi;
            $mail->Body = $body;

            if (!$mail->send()) { 
                echo 'gagal';
            } else {
                echo 'success';
            }
        } else if ($_POST['type'] == 'verifyOTP') {
            if ($_SESSION['otp'] ==  $_POST['thisdata']) {
                $_SESSION['otp'] = 'valid';
                echo 'success';
            } else {
                echo 'gagal';
            }
        } else if ($_POST['type'] == 'newPass' and $_SESSION['otp'] == 'valid') {
            $newPass = $_POST['pass'];
            $hash = password_hash($newPass, PASSWORD_DEFAULT);
            $email = $_SESSION['email'];
            if (strlen($newPass) >= 8) {
                $stmt = $conn->prepare("UPDATE member set password = ? where email = ?");
                $berhasil = $stmt->execute([$hash, $email]);
                if ($berhasil) {
                    echo 'success';
                } else {
                    echo 'gagal';
                }
            } else {
                echo 'gagal';
            }
        } else {
            echo 'gagal';
        }
    }
}
?>
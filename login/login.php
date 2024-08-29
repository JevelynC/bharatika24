<?php
require("../connect.php");
$success = false;
$message = '';
$db = $conn;

//cek udah lengkap belum datanya
if (isset($_POST['email']) && isset($_POST['password'])
    && !($_POST['email'] == '' || $_POST['password'] == '')
) {

    //test udah punya akun belum
    $query = "SELECT id, password FROM member WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->execute(['email' => $_POST['email']]);
    $userData = $stmt->fetch();

    if ($userData) {
        if (password_verify($_POST['password'], $userData['password'])) {
            $_SESSION['id'] = $userData['id'];
            $message = "Berhasil Login!";
            $success = true;
        } else {
            $message = "Password atau email salah";
        }
    } else {
        $message = "Anda belum memiliki akun silahkan register terlebih dahulu!";
    }
} else {
    $message = "Data tidak lengkap";
}

echo json_encode([
    'success' => $success,
    'message' => $message
]);
?>

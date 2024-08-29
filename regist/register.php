<?php
require("../connect.php");
$success = false;
$message = '';
$db = $conn;

//cek udah lengkap belum datanya
if (isset($_POST['namaLengkap']) && isset($_POST['alamat'])
    && isset($_POST['instansi']) && isset($_POST['noTelp'])
    && isset($_POST['line']) && isset($_POST['noWhatsApp'])
    && isset($_POST['email']) && isset($_POST['password'])
    && isset($_POST['konfirmasiPassword'])
    && !($_POST['namaLengkap'] == '' || $_POST['alamat'] == ''
        || $_POST['instansi'] == '' || $_POST['noTelp'] == ''
        || $_POST['line'] == '' || $_POST['noWhatsApp'] == ''
        || $_POST['email'] == '' || $_POST['password'] == ''
        || $_POST['konfirmasiPassword'] == '')
) {

    //test udah punya akun belum
    $query = "SELECT id, password FROM member WHERE email = :email";
    $stmt = $db->prepare($query);
    $stmt->execute(['email' => $_POST['email']]);

    if($stmt->rowCount() > 0){
        $message = "Email anda sudah terdaftar pada server";
    } else{

        //cek konfirmasi password
        if($_POST['password'] != $_POST['konfirmasiPassword']){
            $message = "password dan konfirmasi tidak cocok";
            echo json_encode([
                'success' => $success,
                'message' => $message
            ]);
            return;
        }

        //insert account baru
        $sql = "INSERT INTO member (email, nama_lengkap, instansi, no_telp, line_id, no_wa, alamat, password) VALUES (?,?,?,?,?,?,?,?)";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$_POST['email'], $_POST['namaLengkap'], $_POST['instansi'], $_POST['noTelp'], $_POST['line'], $_POST['noWhatsApp'], 
        $_POST['alamat'], password_hash($_POST['password'], PASSWORD_DEFAULT)]);
        $success = true;
        $message = "Berhasil membuat akun, silahkan login!";
    }

} else {
    $message = "Data tidak lengkap";
}

echo json_encode([
    'success' => $success,
    'message' => $message
]);
?>
<?php
require_once "../connect.php";

$success = false;
$message = '';

if(!empty($_POST['lomba']) && !empty($_POST['karya']) && !empty($_POST['judul']) && !empty($_POST['no_peserta'])){
    $lomba = $_POST['lomba'];
    $karya = $_POST['karya'];
    $judul = $_POST['judul'];
    $no_peserta = $_POST['no_peserta'];
    $id_member = $_SESSION['id'];

    // query apakah orang ini sudah divalidasi dan bisa untuk submit karya
    $sql = "SELECT * FROM lomba_pendaftaran WHERE no_peserta = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$no_peserta]);
    if($stmt->rowCount() == 0){
        $success = false;
        $message = "Anda belum terdaftar pada lomba ini";
        echo json_encode([
            'success' => $success,
            'message' => $message,
        ]);
        return;
    }else{
        //jika belum validasi
        $data = $stmt->fetch();
        if($data['status'] == 0 ){
            $success = false;
            $message = "Anda belum divalidasi oleh panitia";
            echo json_encode([
                'success' => $success,
                'message' => $message,
            ]);
            return;
        }
    }

    //cek udah pernah submit belum
    $sql = "SELECT * FROM upload_karya WHERE no_peserta = ? ";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$no_peserta]);
    if($stmt->rowCount() > 0){
        $success = false;
        $message = "Anda sudah pernah submit karya";
    } else {
        $sql = "SELECT bukaUpload FROM lomba_jenis WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$lomba]);
        $data = $stmt->fetch();

        if($data['bukaUpload'] == 1){
            $sql = "SELECT status FROM lomba_pendaftaran WHERE no_peserta = ?";
            $stmt = $conn->prepare($sql);
            $stmt->execute([$no_peserta]);
            $data = $stmt->fetch();

            if ($data['status'] == 1) {
                $sql = "INSERT INTO upload_karya (no_peserta, id_member, id_jenislomba, judul_karya, file_karya, tgl_submit) VALUES (?, ?, ?, ?, ?, current_timestamp())";
                $stmt = $conn->prepare($sql);
                $stmt->execute([$no_peserta, $id_member, $lomba, $judul, $karya]);
                $success = true;
                $message = "Karya berhasil di submit";
            } else {
                $success = false;
                $message = "Pendaftaran anda untuk lomba tersebut belum divalidasi";
            }
        } else {
            $success = false;
            $message = "Mohon maaf, pengumpulan untuk lomba tersebut telah tutup";
        }
    }

    echo json_encode([
        'success' => $success,
        'message' => $message,
    ]);
    return;
}

echo json_encode([
    'success' => $success,
    'message' => "Data tidak lengkap",
]);


?>
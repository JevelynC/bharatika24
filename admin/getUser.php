<?php
require_once "../connect.php";

if (isset($_POST['no_peserta']) && isset($_POST['id_member'])) {
    $no_peserta = $_POST['no_peserta'];
    $id_member = $_POST['id_member'];

    $stmt = $conn->prepare("SELECT * FROM member m JOIN lomba_pendaftaran lp ON m.id = lp.id_member WHERE m.id = ? AND no_peserta = ?");
    $stmt->execute([$id_member, $no_peserta]);
    $result = $stmt->fetchAll();

    $output = '';
    $i = 1;
    foreach ($result as $row) {
        $output .= "<tr class='mid'>
                            <td>" . $i . "</td>
                            <td>" . htmlspecialchars($row['nama_lengkap']) . "</td>
                            <td><img class='img-custom' src ='" . htmlspecialchars($row['ktm']) . "'></td>
                        </tr>";
        $i++;
    }

    $stmt = $conn->prepare("SELECT la.ang_nama, la.ktm FROM lomba_anggota la JOIN lomba_pendaftaran lp ON la.no_peserta = lp.no_peserta WHERE la.no_peserta = ?");
    $stmt->execute([$no_peserta]);
    $result = $stmt->fetchAll();

    if (count($result) > 0) {
        foreach ($result as $row) {
            $output .= "<tr class='mid'>
                            <td>" . $i . "</td>
                            <td>" . htmlspecialchars($row['ang_nama']) . "</td>
                            <td><img class='img-custom' src ='" . htmlspecialchars($row['ktm']) . "'></td>
                        </tr>";
            $i++;
        }
    }
    echo $output;
} else {
    echo '<tr><td colspan="3" class="text-center">No user data found</td></tr>';
}
<?php
    include 'connect.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

        <!-- Include jQuery -->
        <script src="https://code.jquery.com/jquery.min.js"></script>

        <!-- Include DataTables CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/2.0.2/css/dataTables.dataTables.css" />

        <!-- Include DataTables JavaScript -->
        <script src="https://cdn.datatables.net/2.0.2/js/dataTables.js"></script>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- SweetAlert -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


</head>
<body>

       
<?php
    $stmt = $conn->prepare("SELECT * FROM upload_karya u JOIN member m ON m.id = u.id_member JOIN lomba_anggota la ON u.id_member = m.id JOIN lomba_jenis l ON l.id = u.id_jenislomba");
    $stmt->execute();
    $result = $stmt->fetchAll();
?>

    <table id="myTable">
        <thead>
            <tr>
                <th>Nama Kelompok</th>
                <th>Nama Anggota</th>
                <th>Nama Lomba</th>
                <th>Judul Karya</th>
                <th>Tanggal Submit</th>
                <th>File Lomba</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($result as $row) : ?>
                <tr>
                    <td><?= $row['ang_nama'] ?></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    <td><?= $row['nama'] ?></td>
                    <td><?= $row['judul'] ?></td>
                    <td><?= $row['tgl_submit'] ?></td>
                    <td><a href="<?= $row['file_karya'] ?>" target="_blank">Lihat File</a></td>
                </tr>
            <!-- Tambahkan lebih banyak data jika diperlukan -->
            <?php endforeach; ?>
            <!-- Tambahkan lebih banyak baris data jika diperlukan -->
        </tbody>
    </table>
    
</body>
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });
</script>

</html>
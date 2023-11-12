<?php

include 'conn.php';

$tembakau = mysqli_query($conn, "SELECT * from tembakau")

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Daftar Tembakau</title>
</head>
<body>
    <div class="container">
        <h1>Daftar Tembakau</h1>
        <table class="table table-bordered">
            <tr>
                <th>No.</th>
                <th>Nama Tembakau</th>
                <th>Merk</th>
                <th>Ukuran (gr)</th>
                <th>Rasa</th>
                <th>Harga</th>
                <th>Stock</th>
                <th>Tanggal Masuk</th>
                <th>Action</th>
            </tr>
            <?php $i = 1; ?>
            <?php foreach($tembakau as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><?= $row["nama_tembakau"]; ?></td>
                <td><?= $row["merk"]; ?></td>
                <td><?= $row["ukuran"]; ?></td>
                <td><?= $row["rasa"]; ?></td>
                <td><?= $row["harga"]; ?></td>
                <td><?= $row["stock"]; ?></td>
                <td><?= $row["tanggal_masuk"]; ?></td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?= $row['tembakau_id']; ?>">Edit</a>
                    <a class="btn btn-danger" href="delete.php?id=<?= $row['tembakau_id']; ?>" onclick="confirmfunction()">Delete</a>
                </td>
            </tr>
            <?php $i++; ?>
            <?php endforeach; ?>
        </table>
        <a href="insert.php" class="btn btn-primary">Tambah Data Tembakau </a>
    </div>
    <script>
        function confirmfunction() {
            confirm("Apakah anda yakin ingin menghapus data?");
        }
    </script>
</body>
</html>
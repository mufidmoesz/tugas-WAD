<?php

include 'conn.php';

$id = $_GET['id'];
$tembakau = mysqli_query($conn, "SELECT * from tembakau WHERE tembakau_id=$id");
$row = mysqli_fetch_assoc($tembakau);

if(isset($_POST['submit'])) {
    $id = $_POST["id"];
    $tembakau = $_POST["tembakau"];
    $merk = $_POST["merk"];
    $ukuran = $_POST["ukuran"];
    $rasa = $_POST["rasa"];
    $harga = $_POST["harga"];
    $stock = $_POST["stock"];
    $tanggalmasuk = $_POST["tanggalmasuk"];

    // var_dump($tembakau, $merk);

    $sql = "UPDATE tembakau SET nama_tembakau='$tembakau', merk='$merk', ukuran='$ukuran', rasa='$rasa', harga='$harga', stock='$stock', tanggal_masuk='$tanggalmasuk' WHERE tembakau_id=$id";
    $query = mysqli_query($conn, $sql);

    if($query) {
        echo "
            <script>
                alert('Data berhasil diubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data gagal diubah');
                document.location.href = 'index.php';
            </script>
        ";
    }

}

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="dark">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
        }
        h1 {
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        .form-control {
            width: 300px;
        }
    </style>
    <title>Edit Data Tembakau</title>
</head>
<body>
    <h1>Ubah Data Tembakau</h1>
    <div class="container">
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $row["tembakau_id"] ?>">
            <div class="mb-3">
                <label for="tembakau" class="form-label">Nama Tembakau</label>
                <input type="text" class="form-control" id="tembakau" name="tembakau" required value="<?= $row["nama_tembakau"] ?>">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk" required value="<?= $row["merk"] ?>">
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">Ukuran</label>
                <input type="number" class="form-control" id="ukuran" name="ukuran" required value="<?= $row["ukuran"] ?>">
            </div>
            <div class="mb-3">
                <label for="rasa" class="form-label">Rasa</label>
                <input type="text" class="form-control" id="rasa" name="rasa" required value="<?= $row["rasa"] ?>">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga" required value="<?= $row["harga"] ?>">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock" required value="<?= $row["stock"] ?>">
            </div>
            <div class="mb-3">
                <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tanggalmasuk" name="tanggalmasuk" required value="<?= $row["tanggal_masuk"] ?>">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="submit" name="submit" onclick="confirmfunction()">
            </div>
        </form>
    </div>
    <script>
        function confirmfunction() {
            confirm("Apakah anda yakin ingin mengubah data?");
        }
    </script>
</body>
</html>
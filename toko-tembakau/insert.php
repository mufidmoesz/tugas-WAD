<?php

include 'conn.php';

if(isset($_POST['submit'])) {
    $tembakau = $_POST["tembakau"];
    $merk = $_POST["merk"];
    $ukuran = $_POST["ukuran"];
    $rasa = $_POST["rasa"];
    $harga = $_POST["harga"];
    $stock = $_POST["stock"];
    $tanggalmasuk = $_POST["tanggalmasuk"];

    // var_dump($tembakau, $merk);

    $sql = "INSERT INTO tembakau VALUES ('', '$tembakau', '$merk', '$ukuran', '$rasa', '$harga', '$stock', '$tanggalmasuk')";
    $query = mysqli_query($conn, $sql);

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
            width: 600px;
        }
    </style>
    <title>Toko Tembakau</title>
</head>
<body>
    <h1>Tambah Data Tembakau</h1>
    <div class="container">
        <form action="" method="post">
            <div class="mb-3">
                <label for="tembakau" class="form-label">Nama Tembakau</label>
                <input type="text" class="form-control" id="tembakau" name="tembakau">
            </div>
            <div class="mb-3">
                <label for="merk" class="form-label">Merk</label>
                <input type="text" class="form-control" id="merk" name="merk">
            </div>
            <div class="mb-3">
                <label for="ukuran" class="form-label">Ukuran</label>
                <input type="number" class="form-control" id="ukuran" name="ukuran">
            </div>
            <div class="mb-3">
                <label for="rasa" class="form-label">Rasa</label>
                <input type="text" class="form-control" id="rasa" name="rasa">
            </div>
            <div class="mb-3">
                <label for="harga" class="form-label">Harga</label>
                <input type="number" class="form-control" id="harga" name="harga">
            </div>
            <div class="mb-3">
                <label for="stock" class="form-label">Stock</label>
                <input type="number" class="form-control" id="stock" name="stock">
            </div>
            <div class="mb-3">
                <label for="tanggalmasuk" class="form-label">Tanggal Masuk</label>
                <input type="date" class="form-control" id="tanggalmasuk" name="tanggalmasuk">
            </div>
            <div class="mb-3">
                <input type="submit" class="form-control" id="submit" name="submit">
            </div>
        </form>
    </div>
    <div class="container">
        <?php if(isset($_POST['submit'])) : ?>
            <?php if( $query ) : ?>
                <div class="alert alert-success" role="alert">
                    Data berhasil ditambahkan!
                </div>
            <?php else : ?>
                <div class="alert alert-danger" role="alert">
                    Data gagal ditambahkan!
                </div>
            <?php endif; ?>
        <?php endif; ?>
    </div>
    <div class="container">
        <a href="index.php" class="btn btn-primary">Kembali ke Daftar Tembakau</a>
    </div>
</body>
</html>
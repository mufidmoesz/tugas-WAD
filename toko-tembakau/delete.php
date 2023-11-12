<?php

include 'conn.php';

$id = $_GET['id'];
$tembakau = mysqli_query($conn, "DELETE from tembakau WHERE tembakau_id=$id");

if($tembakau) {
    echo "
        <script>
            alert('Data berhasil dihapus');
            document.location.href = 'index.php';
        </script>
    ";
} else {
    echo "
        <script>
            alert('Data gagal dihapus');
            document.location.href = 'index.php';
        </script>
    ";
}
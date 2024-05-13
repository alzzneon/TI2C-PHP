<?php
$server = "localhost";
$user = "root";
$password = "";
$nama_database = "ti2c_php";

$db = mysqli_connect($server, $user, $password, $nama_database);

if (mysqli_connect_errno()) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
} else {
    echo "Koneksi berhasil!";
}

mysqli_close($db);
?>

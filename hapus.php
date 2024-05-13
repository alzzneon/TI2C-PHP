<?php
include("config.php");

// Cek apakah parameter id telah diterima dari query string
if (isset($_GET['id'])) {
    // Ambil nilai id dari query string
    $id = $_GET['id'];

    // Buat query untuk menghapus data
    $sql = "DELETE FROM mahasiswa_2cti WHERE id=$id";
    $query = mysqli_query($db, $sql);

    // Apakah query hapus berhasil dieksekusi?
    if ($query) {
        header('Location: list-siswa.php');
        exit; // Pastikan keluar dari skrip setelah melakukan redirect
    } else {
        die("Gagal menghapus...");
    }
} else {
    die("Akses dilarang...");
}
?>

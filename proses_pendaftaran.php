<?php
include("config.php");

// Cek apakah tombol daftar sudah diklik
if(isset($_POST['daftar'])){
    // Ambil data dari formulir
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
    
    // Buat query
    $sql = "INSERT INTO mahasiswa_2cti (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUES ('$nama', '$alamat', '$jk', '$agama',)";
    $query = mysqli_query($db, $sql);
    
    // Apakah query simpan berhasil?
    if($query) {
        // Jika berhasil, alihkan ke halaman index.php dengan status=sukses
        header('Location: index.php?status=sukses');
        exit; // Pastikan keluar dari skrip setelah melakukan redirect
    } else {
        // Jika gagal, alihkan ke halaman index.php dengan status=gagal
        header('Location: index.php?status=gagal');
        exit; // Pastikan keluar dari skrip setelah melakukan redirect
    }
} else {
    die("Akses dilarang...");
}
?>

<?php
include("config.php");

// Cek apakah tombol simpan sudah diklik
if(isset($_POST['simpan'])){
    // Ambil data dari formulir
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $jk = $_POST['jenis_kelamin'];
    $agama = $_POST['agama'];
   
    // Buat query update
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama' WHERE id=$id";
    $query = mysqli_query($db, $sql);
    
    // Apakah query update berhasil?
    if($query) {
        // Jika berhasil, alihkan ke halaman list-siswa.php
        header('Location: list-siswa.php');
        exit; // Pastikan keluar dari skrip setelah melakukan redirect
    } else {
        // Jika gagal, tampilkan pesan
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>

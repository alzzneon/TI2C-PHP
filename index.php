<!DOCTYPE html>
<html>
<head>
    <title>Mahasiswa TI 2C</title>
</head>
<body>
    <header>
        <h3>Mahasiswa 2C</h3>
        <h1>Teknologi Informasi</h1>
    </header>
    <h4>Menu</h4>
    <nav>
    <?php if(isset($_GET['status'])): ?>
        <p>
            <?php
                if($_GET['status'] == 'sukses'){
                    echo "Data telah masuk";
                } else {
                    echo "Data gagal masuk!";
                }
            ?>
        </p>
<?php endif; ?>
        <ul>
            <li><a href="form-daftar.php">Masukkan Data</a></li>
            <li><a href="list-siswa.php">Mahasiswa</a></li>
        </ul>
    </nav>
</body>
</html>

<?php
require 'function.php';

if (isset($_POST["submit"])) {
    
    if (tambah($_POST) > 0) {
        echo "<script>alert('Data berhasil ditambahkan'); document.location.href = 'tampil.php';</script>";
    } else {
        echo "<script>alert('Data gagal ditambahkan');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Siswa</title>
</head>
<body>
    <h1>Tambah Data Siswa</h1>
    <form method="POST">
        <input type="text" name="nama" placeholder="Nama" required><br>
        <input type="text" name="kelas" placeholder="Kelas" required><br>
        <input type="text" name="nis" placeholder="NIS" required><br>
        <input type="text" name="jurusan" placeholder="Jurusan" required><br>
        <input type="date" name="tgl_lahir" required><br>
        <select name="jenis_kelamin" required>
            <option value="">--Pilih Jenis Kelamin--</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>
        <input type="email" name="email" placeholder="Email" required><br>
        <input type="text" name="no_hp" placeholder="No HP" required><br><br>
        <input type="submit" name="submit" value="Tambah">
    </form>
</body>
</html>

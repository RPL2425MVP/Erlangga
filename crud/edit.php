<?php
require 'function.php';

$id = $_GET['id'];
$siswa = query("SELECT * FROM siswa WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (edit($_POST) > 0) {
        echo "<script>alert('Data berhasil diubah'); document.location.href = 'tampil.php';</script>";
    } else {
        echo "<script>alert('Data gagal diubah');</script>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
</head>
<body>
    <h1>Edit Data Siswa</h1>
    <form method="POST">
        <input type="hidden" name="id" value="<?= $siswa['id']; ?>">
        <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required><br>
        <input type="text" name="kelas" value="<?= $siswa['kelas']; ?>" required><br>
        <input type="text" name="nis" value="<?= $siswa['nis']; ?>" required><br>
        <input type="text" name="jurusan" value="<?= $siswa['jurusan']; ?>" required><br>
        <input type="date" name="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>" required><br>
        <select name="jenis_kelamin" required>
            <option value="Laki-laki" <?= $siswa['jenis_kelamin'] == 'Laki-laki' ? 'selected' : '' ?>>Laki-laki</option>
            <option value="Perempuan" <?= $siswa['jenis_kelamin'] == 'Perempuan' ? 'selected' : '' ?>>Perempuan</option>
        </select><br>
        <input type="email" name="email" value="<?= $siswa['email']; ?>" required><br>
        <input type="text" name="no_hp" value="<?= $siswa['no_hp']; ?>" required><br><br>
        <input type="submit" name="submit" value="Update">
    </form>
</body>
</html>

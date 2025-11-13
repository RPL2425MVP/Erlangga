<?php
require_once 'function.php';

$id_siswa = (int)$_GET['id']; // Gunakan nama kolom yang benar
$siswa = query("SELECT * FROM tbl_siswa WHERE id_siswa = $id_siswa")[0];

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
        <input type="hidden" name="id_siswa" value="<?= $siswa['id_siswa']; ?>">

        <label for="nis">NIS:</label><br>
        <input type="text" name="nis" value="<?= $siswa['nis']; ?>" required><br>

        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" value="<?= $siswa['nama']; ?>" required><br>

        <label for="jenkel">Jenis Kelamin:</label><br>
<select name="jenkel" required>
    <option value="Laki-laki" <?= $siswa['jenkel'] == 'Laki-laki' ? 'selected' : ''; ?>>Laki-laki</option>
    <option value="Perempuan" <?= $siswa['jenkel'] == 'Perempuan' ? 'selected' : ''; ?>>Perempuan</option>
</select><br>


        <label for="tempat">tempat:</label><br>
        <input type="text" name="tempat" value="<?= $siswa['tempat']; ?>" required><br>

        <label for="tgl_lahir">Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" value="<?= $siswa['tgl_lahir']; ?>" required><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" name="kelas" value="<?= $siswa['kelas']; ?>" required><br>

        <label for="id_jurusan">Jurusan:</label><br>
        <select name="id_jurusan" required>
            <?php
            $jurusan2 = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
            while($j = mysqli_fetch_assoc($jurusan2)) {
                $selected = ($j['id_jurusan'] == $siswa['id_jurusan']) ? "selected" : "";
                echo "<option value='{$j['id_jurusan']}' $selected>{$j['nama_jurusan']}</option>";
            }
            ?>
        </select><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" value="<?= $siswa['alamat']; ?>" required><br><br>

        <button type="submit" name="submit">Simpan Perubahan</button>
    </form>
    <button class="back-button" onclick="history.back()">← Kembali</button>
</body>
</html>

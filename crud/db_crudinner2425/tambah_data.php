<?php
require_once 'function.php';

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
        <label for="nis">NIS:</label><br>
        <input type="text" name="nis" placeholder="nis" required><br>
        <label for="nama">Nama:</label><br>
        <input type="text" name="nama" placeholder="nama" required><br>
        
        <label for="jenis_kelamin">Jenis Kelamin:</label><br>
        <select name="jenkel" required>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select><br>

        <label for="tempat">tempat:</label><br>
        <input type="text" name="tempat" placeholder="tempat" required><br>

        <label for="tgl_lahir">Tanggal Lahir:</label><br>
        <input type="date" name="tgl_lahir" required><br>

        <label for="kelas">Kelas:</label><br>
        <input type="text" name="kelas" placeholder="kelas" required><br>
        
        <label for="id_jurusan">Jurusan:</label><br>
        <select name="id_jurusan" required>
            <?php
            // Assuming $conn is available from function.php or another included file
            // Make sure the query is correct and the connection is established.
            $jurusan2 = mysqli_query($conn, "SELECT * FROM tbl_jurusan");
            while($j = mysqli_fetch_assoc($jurusan2)) {
                $selected = (isset($row['id_jurusan']) && $j['id_jurusan'] == $row['id_jurusan']) ? "selected" : "";
                echo "<option value='{$j['id_jurusan']}' $selected>{$j['nama_jurusan']}</option>";
            }
            ?>
        </select><br>

        <label for="alamat">Alamat:</label><br>
        <input type="text" name="alamat" placeholder="alamat" required><br><br>
        
        <button type="submit" name="submit">Tambah Data</button>
    </form>
    <button class="back-button" onclick="history.back()">← Kembali</button>
</body>
</html>
<?php
require "function.php";
$siswa = query("SELECT * FROM siswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
</head>
<body>
    <a href="tambah_data.php">tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>NIS</th>
                <th>Jurusan</th>
                <th>Tgl Lahir</th>
                <th>Jenis Kelamin</th>
                <th>Email</th>
                <th>No HP</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($siswa as $s): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= htmlspecialchars($s["nama"]); ?></td>
                    <td><?= htmlspecialchars($s["kelas"]); ?></td>
                    <td><?= htmlspecialchars($s["nis"]); ?></td>
                    <td><?= htmlspecialchars($s["jurusan"]); ?></td>
                    <td><?= htmlspecialchars($s["tgl_lahir"]); ?></td>
                    <td><?= htmlspecialchars($s["jenis_kelamin"]); ?></td>
                    <td><?= htmlspecialchars($s["email"]); ?></td>
                    <td><?= htmlspecialchars($s["no_hp"]); ?></td>
                    <td>
                        <a href="edit.php?id=<?= $s['id']; ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $s['id']; ?>" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

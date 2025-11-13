<?php 
require_once 'function.php';

$siswa = query("SELECT tbl_siswa.*, tbl_jurusan.nama_jurusan
                FROM tbl_siswa
                INNER JOIN tbl_jurusan
                ON tbl_siswa.id_jurusan = tbl_jurusan.id_jurusan");

?>


<!DOCTYPE html>
<html>
<head>
    <title>Data Siswa</title>
    <head>
    <title>Data Siswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f7fa;
            margin: 20px;
        }

        a {
            text-decoration: none;
            color: white;
            background-color: #3498db;
            padding: 8px 12px;
            border-radius: 5px;
            margin-bottom: 15px;
            display: inline-block;
        }

        a:hover {
            background-color: #2980b9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th, td {
            padding: 12px 15px;
            border: 1px solid #ddd;
            text-align: center;
        }

        th {
            background-color: #2c3e50;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #eaf2f8;
        }

        td a {
            color: #3498db;
            background: none;
            padding: 0;
        }

        td a:hover {
            text-decoration: underline;
            color: #1d6fa5;
        }
    </style>
</head>

</head>
<body>
    <a href="tambah_data.php">tambah</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>nis</th>
                <th>nama</th>
                <th>jenkel</th>
                <th>tempat</th>
                <th>Tgl Lahir</th>
                <th>kelas</th>
                <th>jurusan</th>
                <th>alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1; ?>
            <?php foreach ($siswa as $s): ?>
                <tr>
                    <td><?= $i++; ?></td>
                    <td><?= htmlspecialchars($s["nis"]); ?></td>
                    <td><?= htmlspecialchars($s["nama"]); ?></td>
                    <td><?= htmlspecialchars($s["jenkel"]); ?></td>
                    <td><?= htmlspecialchars($s["tempat"]); ?></td>
                    <td><?= htmlspecialchars($s["tgl_lahir"]); ?></td>
                    <td><?= htmlspecialchars($s["kelas"]); ?></td>
                    <td><?= htmlspecialchars($s["nama_jurusan"]); ?></td>
                    <td><?= htmlspecialchars($s["alamat"]); ?></td>
                    <td>
                        <a href="edit.php?id=<?= $s['id_siswa']; ?>">Edit</a> |
                        <a href="hapus.php?id=<?= $s['id_siswa']; ?>" onclick="return confirm('Yakin ingin menghapus data?');">Hapus</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>

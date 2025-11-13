<?php
// Koneksi database
$conn = mysqli_connect("localhost", "root", "", "db_crudinner2425");

// Fungsi query 
function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query Error: " . mysqli_error($conn));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Fungsi tambah data
function tambah($data)
{
    global $conn;

    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $jenkel = htmlspecialchars($data["jenkel"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "INSERT INTO tbl_siswa (nis, nama, jenkel, tempat, tgl_lahir, kelas, id_jurusan, alamat)
            VALUES ('$nis', '$nama', '$jenkel', '$tempat', '$tgl_lahir', '$kelas', '$id_jurusan', '$alamat')";

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Fungsi edit data
function edit($data)
{
    global $conn;

    $id_siswa = htmlspecialchars($data["id_siswa"]); // pastikan ini sesuai dengan kolom di DB
    $nis = htmlspecialchars($data["nis"]);
    $nama = htmlspecialchars($data["nama"]);
    $jenkel = htmlspecialchars($data["jenkel"]);
    $tempat = htmlspecialchars($data["tempat"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $id_jurusan = htmlspecialchars($data["id_jurusan"]);
    $alamat = htmlspecialchars($data["alamat"]);

    $query = "UPDATE tbl_siswa SET
                nis = '$nis',
                nama = '$nama',
                jenkel = '$jenkel',
                tempat = '$tempat',
                tgl_lahir = '$tgl_lahir',
                kelas = '$kelas',
                id_jurusan = '$id_jurusan',
                alamat = '$alamat'
              WHERE id_siswa = $id_siswa"; // <- ganti sesuai nama kolom PK

    mysqli_query($conn, $query);
    return mysqli_affected_rows($conn);
}

// Fungsi hapus data
function hapus($id_siswa)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM tbl_siswa WHERE id_siswa = $id_siswa");
    return mysqli_affected_rows($conn);
}

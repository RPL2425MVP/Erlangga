<?php

$conn = mysqli_connect("localhost", "root", "", "php_dasar");


function query($query) {
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}


function tambah($data) {
    global $conn;

    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $query = "INSERT INTO siswa (nama, kelas, nis, jurusan, tgl_lahir, jenis_kelamin, email, no_hp)
            VALUES ('$nama', '$kelas', '$nis', '$jurusan', '$tgl_lahir', '$jenis_kelamin', '$email', '$no_hp')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function edit($data) {
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $kelas = htmlspecialchars($data["kelas"]);
    $nis = htmlspecialchars($data["nis"]);
    $jurusan = htmlspecialchars($data["jurusan"]);
    $tgl_lahir = htmlspecialchars($data["tgl_lahir"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);
    $email = htmlspecialchars($data["email"]);
    $no_hp = htmlspecialchars($data["no_hp"]);

    $query = "UPDATE siswa SET
                nama = '$nama',
                kelas = '$kelas',
                nis = '$nis',
                jurusan = '$jurusan',
                tgl_lahir = '$tgl_lahir',
                jenis_kelamin = '$jenis_kelamin',
                email = '$email',
                no_hp = '$no_hp'
            WHERE id = $id";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}


function hapus($id) {
    global $conn;
    mysqli_query($conn, "DELETE FROM siswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

?>

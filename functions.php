<?php

// Connect to Database
$conn = mysqli_connect("localhost", "root", "", "hospital");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    global $conn;
    date_default_timezone_set('Asia/Hong_Kong');

    $tanggal = date("Y-m-d H:i:s");
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);

    $query = "INSERT INTO data_pasien
                VALUES
             ('','$tanggal','$nama_pasien','$alamat','$tanggal_lahir','$tempat_lahir','$jenis_kelamin')
             ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM data_pasien WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama_pasien = htmlspecialchars($data["nama_pasien"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $tanggal_lahir = htmlspecialchars($data["tanggal_lahir"]);
    $tempat_lahir = htmlspecialchars($data["tempat_lahir"]);
    $jenis_kelamin = htmlspecialchars($data["jenis_kelamin"]);

    $query = "UPDATE data_pasien SET
                nama_pasien = '$nama_pasien',
                alamat = '$alamat',
                tanggal_lahir = '$tanggal_lahir',
                tempat_lahir = '$tempat_lahir',
                jenis_kelamin = '$jenis_kelamin'
              WHERE id = $id
             ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM data_pasien
                WHERE
            nama_pasien LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%' OR
            tanggal_lahir LIKE '%$keyword%' OR
            tempat_lahir LIKE '%$keyword%' OR
            jenis_kelamin LIKE '%$keyword%'
        ";
    return query($query);
}

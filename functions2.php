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

    $nama_dokter = htmlspecialchars($data["nama_dokter"]);
    $spesialis = htmlspecialchars($data["spesialis"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query = "INSERT INTO data_dokter
                VALUES
             ('','$nama_dokter','$spesialis','$alamat','$no_telp')
             ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM data_dokter WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama_dokter = htmlspecialchars($data["nama_dokter"]);
    $spesialis = htmlspecialchars($data["spesialis"]);
    $alamat = htmlspecialchars($data["alamat"]);
    $no_telp = htmlspecialchars($data["no_telp"]);

    $query = "UPDATE data_dokter SET
                nama_dokter = '$nama_dokter',
                spesialis = '$spesialis',
                alamat = '$alamat',        
                no_telp = '$no_telp'
              WHERE id = $id
             ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM data_dokter
                WHERE
            nama_dokter LIKE '%$keyword%' OR
            spesialis LIKE '%$keyword%' OR
            alamat LIKE '%$keyword%' OR
            no_telp LIKE '%$keyword%'
        ";
    return query($query);
}

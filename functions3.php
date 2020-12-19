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

function hapus($id)
{
    global $conn;

    mysqli_query($conn, "DELETE FROM data_rekammedis WHERE id_rm = $id");

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM data_rekammedis
                WHERE
            tanggal_periksa LIKE '%$keyword%' OR
            nama_pasien LIKE '%$keyword%' OR
            keluhan LIKE '%$keyword%' OR
            nama_dokter LIKE '%$keyword%' OR
            diagnosa LIKE '%$keyword%'
        ";
    return query($query);
}

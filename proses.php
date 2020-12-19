<?php

$conn = mysqli_connect("localhost", "root", "", "hospital");

if (isset($_POST['add'])) {

    $tanggal_periksa = trim(mysqli_real_escape_string($conn, $_POST['tanggal_periksa']));
    $nama_pasien = trim(mysqli_real_escape_string($conn, $_POST['nama_pasien']));
    $keluhan = trim(mysqli_real_escape_string($conn, $_POST['keluhan']));
    $nama_dokter = trim(mysqli_real_escape_string($conn, $_POST['nama_dokter']));
    $diagnosa = trim(mysqli_real_escape_string($conn, $_POST['diagnosa']));
    mysqli_query($conn, "INSERT INTO data_rekammedis(id_rm, tanggal_periksa, id_pasien, keluhan, id_dokter, diagnosa)
                        VALUES ('', '$tanggal_periksa', '$nama_pasien', '$keluhan', '$nama_dokter', '$diagnosa')");
    // echo "<script>window.location='medicalrecords.php';</script>";
    echo "
    <script>
      alert('Data Berhasil Ditambahkan');
      document.location.href = 'medicalrecords.php'
    </script>
    ";
}

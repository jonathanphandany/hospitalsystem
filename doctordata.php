<?php

require 'functions2.php';
$dokter = query("SELECT * FROM data_dokter");

if (isset($_POST["cari"])) {
    $dokter = cari($_POST["keyword"]);
}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <link href="image/icon.png" rel="shortcut icon">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>Hospital System</title>

    <style>
        <?php include "style.css" ?>
    </style>

</head>

<body onload="muatDaftarData();" id="myPage" data-target=".navbar" data-offset="60">

    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#myPage"><img src="image/icon.png" width="50px" height="50px" style="float:left"></a>
                <a class="navbar-brand" href="#myPage"><b>HOSPITAL</b></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php"><b>HOME</b></a></li>
                    <li><a href="patientdata.php"><b>PATIENTS</b></a></li>
                    <li><a href="doctordata.php"><b>DOCTORS</b></a></li>
                    <li><a href="medicalrecords.php"><b>MEDICAL RECORDS</b></a></li>
                    <li><img src="image/logout.png" width="30px" height="30px" style="float:right; margin-top:10px; margin-left:30px;"></li>
                    <li><a href="#" onclick="logout()"><b>LOG OUT</b></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <br>

    <div id="about" class="ping text-center">
        <div class="container">
            <div class="col-sm-6">
                <img src="image/data2.jpg" width="400px" height=220px>
            </div>
            <div class="col-sm-6">
                <br></br>
                <h2>DOCTOR DATA</h2>
                <br>
                <div id="tambahdata">
                    <!-- <button class="btn-tambah" onclick="">Tambah Data Pasien</button> -->
                    <a href="insert2.php" class="btn-tambah" type="button">Tambah Data Dokter</a>
                </div>
                <br></br>
            </div>

            <div id="search" class="col-sm-12">
                <form action="" method="post" class="text-right">
                    <input type="text" name="keyword" size="40" autofocus placeholder="Masukkan Data" autocomplete="off">
                    <button type="submit" name="cari">Cari</button>
                </form>
                <br>
            </div>

            <div id="datadokter" class="col-sm-12">
                <div id="Daftar">
                    <div class="table-responsive">
                        <table class="w3-table-all w3-hoverable">
                            <!--https://www.w3schools.com/w3css/tryit.asp?filename=tryw3css_tables_hoverable-->
                            <thead>
                                <tr class="w3-light-grey">
                                    <th>No.</th>
                                    <th>Nama Dokter</th>
                                    <th>Spesialis</th>
                                    <th>Alamat</th>
                                    <th>No. Telepon</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $i = 1; ?>
                                <?php foreach ($dokter as $row) : ?>
                                    <tr>
                                        <td> <?= $i; ?> </td>
                                        <td> <?= $row["nama_dokter"] ?> </td>
                                        <td> <?= $row["spesialis"] ?> </td>
                                        <td> <?= $row["alamat"] ?> </td>
                                        <td> <?= $row["no_telp"] ?> </td>
                                        <td> <a href="edit2.php?id=<?= $row["id"]; ?>" class="btn btn-warning" type="button">Edit</a>
                                            <a href="delete2.php?id=<?= $row["id"]; ?>" onclick="return confirm('Apakah ingin menghapus Data?');" class="btn btn-danger" type="button">Hapus</a> </td>
                                    </tr>
                                    <?php $i++; ?>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="teamScript/jonathan.js"></script>
    <script type="text/javascript" src="teamScript/merry.js"></script>
    <script type="text/javascript" src="teamScript/keren.js"></script>

    <!-- <script type="text/javascript" src="tab/data.js"></script> -->

    <script src="library/sweetalert2.all.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>

</body>

<br>
<footer class="container text-center">
    <a href="#myPage" title="To Top">
        <span class="glyphicon glyphicon-chevron-up"></span></a>
    <h5 style="color:black">&copy; Web Developer 2020 | Kelas B</h5>
</footer>

</html>
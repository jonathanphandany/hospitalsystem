<?php

$conn = mysqli_connect("localhost", "root", "", "hospital");

?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
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
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="#myPage"><img src="image/icon.png" width="50px" height="50px" style="float:left"></a>
                <a class="navbar-brand" href="#myPage"><b>HOSPITAL</b></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php"><b>HOME</b></a></li>
                    <li><a href="patientdata.php"><b>PATIENS</b></a></li>
                    <li><a href="doctordata.php"><b>DOCTORS</b></a></li>
                    <li><a href="medicalrecords.php"><b>MEDICAL RECORDS</b></a></li>
                    <li><img src="image/logout.png" width="30px" height="30px" style="float:right; margin-top:10px; margin-left:30px;"></li>
                    <li><a href="#" onclick="logout()"><b>LOG OUT</b></a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="insert" class="ping text-center">
        <div class="container">
            <div class="row">
                <h2>ADD MEDICAL RECORDS</h2>
                <br>
                <br>

                <div class="col-sm-5">
                    <img src="image/patient.png" width="400px" height="300px">
                </div>

                <div class="col-sm-7">
                    <div id="Tambah">
                        <form action="proses.php" method="post">
                            <div class="form-group input">
                                <label for="tanggal_periksa">Tanggal Periksa:</label>
                                <input type="date" class="form-control" id="tanggal_periksa" placeholder="" name="tanggal_periksa" required>
                            </div>
                            <div class="form-group input">
                                <label for="nama">Pasien:</label>
                                <!-- <input type="text" class="form-control" id="nama" placeholder="" name="nama" required> -->
                                <select name="nama_pasien" id="nama" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <?php
                                    $sql_pasien = mysqli_query($conn, "SELECT * FROM data_pasien");
                                    while ($data_pasien = mysqli_fetch_array($sql_pasien)) {
                                        echo '<option value="' . $data_pasien['id'] . '">' . $data_pasien['nama_pasien'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group input">
                                <label for="keluhan">Keluhan:</label>
                                <textarea type="text" class="form-control" id="keluhan" placeholder="" name="keluhan" required></textarea>
                            </div>
                            <div class="form-group input">
                                <label for="dokter">Dokter:</label>
                                <!-- <input type="text" class="form-control" id="nama" placeholder="" name="nama" required> -->
                                <select name="nama_dokter" id="dokter" class="form-control" required>
                                    <option value="">- Pilih -</option>
                                    <?php
                                    $sql_dokter = mysqli_query($conn, "SELECT * FROM data_dokter");
                                    while ($data_dokter = mysqli_fetch_array($sql_dokter)) {
                                        echo '<option value="' . $data_dokter['id'] . '">' . $data_dokter['nama_dokter'] . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group input">
                                <label for="diagnosa">Diagnosa:</label>
                                <textarea type="text" class="form-control" id="diagnosa" placeholder="" name="diagnosa" required></textarea>
                            </div>

                            <button type="submit" name="add" class="btn btn-default">Tambah Data</button>
                        </form>
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
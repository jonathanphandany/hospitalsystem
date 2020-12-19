<?php

require 'functions2.php';

$id = $_GET["id"];

$psn = query("SELECT * FROM data_dokter WHERE id = $id")[0];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
          alert('Data Berhasil Diubah');
          document.location.href = 'doctordata.php'
        </script>
        ";
    } else {
        echo "
        <script>
          alert('Data Gagal Diubah');
          document.location.href = 'doctordata.php'
        </script>
        ";
    }
}

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

<body id="myPage" data-target=".navbar" data-offset="60">

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

    <div id="edit" class="ping text-center">
        <div class="row">
            <div class="row">
                <h2>EDIT DOCTOR DATA</h2>
                <br>
                <br>

                <div class="col-sm-5">
                    <img src="image/patient.png" width="400px" height="300px">
                </div>

                <div class="col-sm-7">
                    <div id="Ubah">
                        <form action="" method="post">
                            <input type="hidden" name="id" value="<?= $psn["id"] ?>">
                            <div class="form-group input">
                                <label for="nama_dokter">Nama:</label>
                                <input type="text" class="form-control" id="nama_dokter" placeholder="" name="nama_dokter" value="<?= $psn["nama_dokter"]; ?>" required>
                            </div>
                            <div class="form-group input">
                                <label for="spesialis">Spesialis:</label>
                                <input type="text" class="form-control" id="spesialis" placeholder="" name="spesialis" value="<?= $psn["spesialis"]; ?>" required>
                            </div>
                            <div class="form-group input">
                                <label for="alamat">Alamat:</label>
                                <input type="text" class="form-control" id="alamat" placeholder="" name="alamat" value="<?= $psn["alamat"]; ?>" required>
                            </div>
                            <div class="form-group input">
                                <label for="no_telp">No. Telepon:</label>
                                <input type="text" class="form-control" id="no_telp" placeholder="" name="no_telp" value="<?= $psn["no_telp"]; ?>" required>
                            </div>
                            <button type="submit" name="submit" class="btn btn-default">Ubah Data</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script type="text/javascript" src="teamScript/jonathan.js"></script>
    <script type="text/javascript" src="teamScript/merry.js"></script>
    <script type="text/javascript" src="teamScript/keren.js"></script>

    <!-- <script type="text/javascript" src="tab/swal.js"></script> -->

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
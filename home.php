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
  <div id="about" class="masthead text-center">
    <div class="row">
      <h1>HOSPITAL INFORMATION SYSTEM</h1>
      <h1>WEB APPLICATION</h1>
      <h5>Web Developer</h5>
    </div>
  </div>
  <br></br>

  <div id="about" class="ping-bg">
    <div class="row">
      <div class="col-sm-5">
        <img src="image/about.png" width="520px" height="400px">
      </div>
      <div class="col-sm-7">
        <h2>ABOUT</h2><br>
        <h4>What is Hospital Information System?</h4><br>
        <p><b>Hospital Information System</b> atau Sistem Informasi Rumah Sakit yaitu suatu sistem dimana menampilkan Informasi dari tiap Pasien dan Dokter dalam Rumah Sakit.
          <br>Data Pasien dan Dokter yang bertanggung jawab, akan diproses dan disimpan dalam Database untuk nanti dapat dibuatkan Rekam Medis Rumah Sakit.
          <form action="patientdata.php">
            <br><button class="btn btn-default btn">Add Patient</button>
          </form>
      </div>
    </div>
  </div>

  <div id="slider" class="ping text-center">
    <div class="row">
      <div class="col-sm-12">
        <h2>OUR SUPPORT</h2>
        <br>
        <div class="slider">
          <table class="imgs" cellspacing="40">
            <tr>
              <td>
                <div class="tombol satu"></div>
              </td>
              <td><img class="gambar" src="img/1.png" alt="" width="750" height="542"></td>
              <td>
                <div class="tombol dua"></div>
              </td>
            </tr>
          </table>

          <script src="teamScript/vania.js"></script>

        </div>
      </div>
    </div>
  </div>

  <div id="organ" class="ping-bg text-center">
    <div class="row">
      <div class="col-sm-12">
        <h2>INFORMATION</h2>
        <br>
      </div>
      <div class="col-sm-3">
        <div id="buttonJan" class="square" onclick="showTextJantung()">
          &emsp;<img src="image/organ/jantung.png" width="80px" height="80px">
          <h3><b>&ensp;JANTUNG</b></h3>
        </div>
        <div class="col-sm-12" id="jantung">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Jantung</b> adalah sebuah rongga, rongga organ berotot yang memompa darah lewat pembuluh darah oleh kontraksi berirama yang berulang. Darah menyuplai okisgen dan nutrisi pada tubuh, juga membantu menghilangkan sisa-sisa metabolisme.</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
      </div>
      <div class="col-sm-3">
        <div id="buttonPar" class="square" onclick="showTextParu_Paru()">
          &emsp;<img src="image/organ/paru-paru.png" width="80px" height="80px">
          <h3><b>&ensp;PARU-PARU</b></h3>
        </div>
        <div class="col-sm-12" id="paru_paru">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Paru-paru</b> merupakan sepasang organ yang memiliki tekstur kenyal dan berisi udara, dibantu oleh Trakea dalam penghantaran udara. Paru-paru berfungsi sebagai tempat pertukaran oksigen dari udara dengan karbon dioksida dari darah.</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
      </div>
      <div class="col-sm-3">
        <div id="buttonHat" class="square" onclick="showTextHati()">
          &emsp;<img src="image/organ/hati.png" width="80px" height="80px">
          <h3><b>&ensp;HATI</b></h3>
        </div>
        <div class="col-sm-12" id="hati">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Hati</b> yaitu merupakan sebuah kelenjar yang "terbesar" di dalam tubuh manusia, ini terletak dalam rongga perut sebelah kanan, tepatnya di bawah diafragma. Berdasarkan fungsinya, hati juga termasuk sebagai alat ekskresi pada tubuh manusia.</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
      </div>
      <div class="col-sm-3">
        <div id="buttonGin" class="square" onclick="showTextGinjal()">
          &emsp;<img src="image/organ/ginjal.png" width="80px" height="80px">
          <h3><b>&ensp;GINJAL</b></h3>
        </div>
        <div class="col-sm-12" id="ginjal">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Ginjal</b> adalah organ ekskresi dalam vertebrata yang berbentuk mirip kacang. Manusia dewasa, ukuran ginjal sekitar 11 sentimeter panjangnya. Ginjal menerima darah dari sepasang arteri renalis, dan darah keluar lewat vena renalis.</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-3">
        <div id="buttonUsusH" class="square" onclick="showTextUsus_Halus()">
          &emsp;<img src="image/organ/usus_halus.png" width="80px" height="80px">
          <h3><b>&ensp;USUS HALUS</b></h3>
        </div>
        <div class="col-sm-12" id="usus_halus">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Usus Halus</b> adalah bagian dari saluran pencernaan yang terletak di antara lambung dan usus besar. Usus halus terdiri dari tiga bagian yaitu usus dua belas jari (duodenum), usus kosong (jejunum), dan usus penyerapan (ileum).</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
      </div>
      <div class="col-sm-3">
        <div id="buttonPan" class="square" onclick="showTextPankreas()">
          &emsp;<img src="image/organ/pankreas.png" width="80px" height="80px">
          <h3><b>&ensp;PANKREAS</b></h3>
        </div>
        <div class="col-sm-12" id="pankreas">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Pankreas</b> adalah organ aksesoris pada sistem pencernaan yang memiliki dua fungsi utama: menghasilkan enzim pencernaan atau fungsi eksokrin serta menghasilkan beberapa hormon atau fungsi endokrin. Pankreas terletak pada perut.</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
      </div>
      <div class="col-sm-3">
        <div id="buttonLim" class="square" onclick="showTextLimpa()">
          &emsp;<img src="image/organ/limpa.png" width="80px" height="80px">
          <h3><b>&ensp;LIMPA</b></h3>
        </div>
        <div class="col-sm-12" id="limpa">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Limpa</b> adalah kelenjar tanpa saluran (ductless) yang berhubungan erat dengan sistem sirkulasi dan berfungsi sebagai penghancur sel darah merah tua. Limpa termasuk salah satu organ sistem limfoid, selain timus, tonsil dan kelenjar limfa.</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
        </div>
      </div>
      <div class="col-sm-3">
        <div id="buttonUsusB" class="square" onclick="showTextUsus_Besar()">
          &emsp;<img src="image/organ/usus_besar.png" width="80px" height="80px">
          <h3><b>&ensp;USUS BESAR</b></h3>
        </div>
        <div class="col-sm-12" id="usus_besar">
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
          <p><b>Usus Besar</b> adalah bagian usus antara usus buntu dan rektum. Fungsi utama organ ini adalah menyerap air dari feses. Pada mamalia, kolon terdiri dari kolon menanjak, kolon melintang, kolon menurun, kolon sigmoid, dan rektum.</p>
          <hr style="height:1px;border:none;color:#333;background-color:#333;">
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
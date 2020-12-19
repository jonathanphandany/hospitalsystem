<?php

require 'functions2.php';

$id = $_GET["id"];

if (hapus($id) > 0) {
  echo "
  <script>
    alert('Data Berhasil Dihapus');
    document.location.href = 'doctordata.php'
  </script>
  ";
} else {
  echo "
  <script>
    alert('Data Gagal Dihapus (Terhubung dengan REKAM MEDIS)');
    document.location.href = 'doctordata.php'
  </script>
  ";
}

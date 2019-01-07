<?php
$nama = "Esa";
$kelas = "xirpl2";
$alamat = "sawojajar";
function tampil_nama(){
  global $nama;
  echo "Nama Saya : ".$nama;
  echo "<br>";
}
function tampil_kelas(){
  global $kelas;
  echo "Kelas : ".$kelas;
  echo "<br>";
}
function tampil_alamat(){
  global $alamat;
  echo "Alamat : ".$alamat;
  echo "<br>";
}
tampil_nama();
tampil_kelas();
tampil_alamat();
 ?>

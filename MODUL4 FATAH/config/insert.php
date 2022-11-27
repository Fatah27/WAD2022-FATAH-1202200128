<?php
require './connector.php';

$namamobil = $_POST['nama'];
$namapemilik = $_POST['pemilik'];
$merk = $_POST['merk'];
$tanggalbeli = $_POST['tanggalbeli'];
$desc = $_POST['desc'];
$status = $_POST['status'];

$gambar = $_FILES['gambar']['name'];

$target = "../asset/images/";

if (move_uploaded_file($_FILES['gambar']['tmp_name'], $target . $gambar)) {
  $sql = "INSERT INTO showroom_EAD (nama_mobil, pemilik_mobil, merk_mobil, tanggal_beli, deskripsi, foto_mobil, status_pembayaran) VALUES ('$namamobil', '$namapemilik', '$merk', '$tanggalbeli', '$desc', '$gambar', '$status')";
  if (mysqli_query($conn, $sql)) {
    header("location: ../pages/ListCar-Fatah.php?pesan=berhasil");
  } else {
    header("location: ../pages/ListCar-Fatah.php?pesan=gagal");
  }
} else {
  header("location: ../pages/ListCar-Fatah.php?pesan=gagal");
}

<?php
require './connector.php';

$id = $_GET['id'];

$sql = "DELETE FROM showroom_EAD WHERE id_mobil = $id";

if (mysqli_query($conn, $sql)) {
  header("location: ../pages/ListCar-Fatah.php?pesan=hapus");
} else {
  header("location: ../pages/ListCar-Fatah.php?pesan=gagal");
}

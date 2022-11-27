<?php
$conn = new mysqli("localhost:3308","root","","modul3");

if (!$conn) {
  die("Koneksi Gagal: " . $conn->connect_error);
}

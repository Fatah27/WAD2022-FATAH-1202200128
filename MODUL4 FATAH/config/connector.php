<?php
$conn = new mysqli("localhost:3308","root","","wad_modul4_fatah",3308);

if (!$conn) {
  die("Koneksi Gagal: " . $conn->connect_error);
}

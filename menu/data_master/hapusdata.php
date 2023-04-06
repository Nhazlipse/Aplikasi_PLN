<!-- session agar (bukan admin) tidak dapat mengakses file admin -->
<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
require_once '../../database/koneksi.php';

use database\koneksi;


// hapus data pengungjung
$id = $_GET['id_master'];
$sql = "DELETE FROM t_data WHERE id_master = $id";
$koneksi = new koneksi();
$koneksi->query($sql);

if ($koneksi) {
    header("location:data_master.php");
} else {
    // Notification Using Script
    echo "<script>alert('Data Gagal Diupdate');window.location='data_master.php';</script>";
}
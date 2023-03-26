<?php

//panggil koneksi
require_once '../../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get data from form
    $Nama_Perusahaan = $_POST['Nama_Perusahaan'];
    $Alamat_Perusahaan = $_POST['Alamat_Perusahaan'];
    $NoFax = $_POST['NoFax'];
    $NoTelp = $_POST['NoTelp'];
    $Alamat_Email = $_POST['Alamat_Email'];
    $Direktur = $_POST['Direktur'];
    $NoRekening = $_POST['NoRekening'];
    $Bank = $_POST['Bank'];
    $Kantor_Bank = $_POST['Kantor_Bank'];
    $Atas_Nama = $_POST['Atas_Nama'];
    $Ket_Akta_Pendirian = $_POST['Ket_Akta_Pendirian'];
    $NoDPT = $_POST['NoDPT'];
    $NoSAPV = $_POST['NoSAPV'];
    $NoNPWP = $_POST['NoNPWP'];


    // Check if connection is successful
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query
    $query = "INSERT INTO tb_transaksi (Nama_Perusahaan, Alamat_Perusahaan, NoFax, NoTelp, Alamat_Email, Direktur, NoRekening, Bank, Kantor_Bank, Atas_Nama, Ket_Akta_Pendirian, NoDPT, NoSAPV, NoNPWP) 
            VALUES ('$Nama_Perusahaan', '$Alamat_Perusahaan', '$NoFax', '$NoTelp', '$Alamat_Email', '$Direktur', '$NoRekening', '$Bank', '$Kantor_Bank', '$Atas_Nama', '$Ket_Akta_Pendirian', '$NoDPT', '$NoSAPV', '$NoNPWP')";
    $koneksi->query($query);

    // return a success message
    echo "<script>alert('Data berhasil disimpan.');document.location='?';</script>";
    header("location: vendor.php");
}
?>
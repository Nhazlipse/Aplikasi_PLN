<?php

//panggil koneksi
require_once '../../database/koneksi.php';

use database\koneksi;

$koneksi = new koneksi();

// Check if form is submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    // Get data from form
    $Jenis_Pengadaan = $_POST['Jenis_Pengadaan'];
    $NoRKS = $_POST['NoRKS'];
    $Tanggal = $_POST['Tanggal'];
    $Jenis_Anggaran = $_POST['Jenis_Anggaran'];
    $Sumber_Dana = $_POST['Sumber_Dana'];
    $Tgl_Dana_Keluar = $_POST['Tgl_Dana_Keluar'];
    $Lama_Pelaksanaan_Pekerjaan = $_POST['Lama_Pelaksanaan_Pekerjaan'];
    $Terbilang_Lama_Pelaksanaan_Pekerjaan = $_POST['Terbilang_Lama_Pelaksanaan_Pekerjaan'];
    $Satuan_Waktu = $_POST['Satuan_Waktu'];
    $Tentang = $_POST['Tentang'];
    $NoSPKPihakI = $_POST['NoSPKPihakI'];
    $Tgl_TTD_Kontrak = $_POST['Tgl_TTD_Kontrak'];
    $tglblnthn = $_POST['tglblnthn'];
    $tglblnthn2 = $_POST['tglblnthn2'];
    $Hari = $_POST['Hari'];
    $Tanggal2 = $_POST['Tanggal2'];
    $Bulan = $_POST['Bulan'];
    $Tahun = $_POST['Tahun'];
    $Tahun_Kata = $_POST['Tahun_Kata'];
    $Tanggal_Berlaku = $_POST['Tanggal_Berlaku'];
    $Tanggal_Berlaku_Kata = $_POST['Tanggal_Berlaku_Kata'];
    $NoSPPBJ = $_POST['NoSPPBJ'];
    $Tanggal_SPPBJ = $_POST['Tanggal_SPPBJ'];
    $Direksi_Pekerjaan = $_POST['Direksi_Pekerjaan'];
    $Pengawas_Pekerjaan = $_POST['Pengawas_Pekerjaan'];
    $Nama_Perusahaan = $_POST['Nama_Perusahaan'];
    $Alamat_Perusahaan = $_POST['Alamat_Perusahaan'];
    $Alamat_Email = $_POST['Alamat_Email'];
    $Direktur = $_POST['Direktur'];
    $NoRekening = $_POST['NoRekening'];
    $Bank = $_POST['Bank'];
    $Kantor_Bank = $_POST['Kantor_Bank'];
    $Atas_Nama_Bank = $_POST['Atas_Nama_Bank'];
    $NoFax = $_POST['NoFax'];
    $NoTelp = $_POST['NoTelp'];
    $Ket_Akta_Pendirian = $_POST['Ket_Akta_Pendirian'];
    $NoSurat_Negosiasi = $_POST['NoSurat_Negosiasi'];
    $Harga_Negosiasi = $_POST['Harga_Negosiasi'];
    $Terbilang = $_POST['Terbilang'];
    $MUP3Kediri = $_POST['MUP3Kediri'];
    $Jabatan = $_POST['Jabatan'];
    $NoSK1 = $_POST['NoSK1'];
    $TglSK1 = $_POST['TglSK1'];
    $NoSK2 = $_POST['NoSK2'];
    $TglSK2 = $_POST['TglSK2'];
    $Lokasi_Pekerjaan = $_POST['Lokasi_Pekerjaan'];


    // Check if connection is successful
    if (!$koneksi) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Prepare SQL query
    // Prepare SQL query
$query = "INSERT INTO t_data (
    Jenis_Pengadaan, 
    NoRKS, 
    Tanggal, 
    Jenis_Anggaran, 
    Sumber_Dana, 
    Tgl_Dana_Keluar, 
    Lama_Pelaksanaan_Pekerjaan, 
    Terbilang_Lama_Pelaksanaan_Pekerjaan, 
    Satuan_Waktu, 
    Tentang, 
    NoSPKPihakI, 
    Tgl_TTD_Kontrak, 
    tglblnthn, 
    tglblnthn2, 
    Hari, 
    Tanggal2, 
    Bulan, 
    Tahun, 
    Tahun_Kata, 
    Tanggal_Berlaku, 
    Tanggal_Berlaku_Kata, 
    NoSPPBJ, 
    Tanggal_SPPBJ, 
    Direksi_Pekerjaan, 
    Pengawas_Pekerjaan, 
    Nama_Perusahaan, 
    Alamat_Perusahaan, 
    Alamat_Email, 
    Direktur, 
    NoRekening, 
    Bank, 
    Kantor_Bank, 
    Atas_Nama_Bank, 
    NoFax, 
    NoTelp, 
    Ket_Akta_Pendirian, 
    NoSurat_Negosiasi, 
    Harga_Negosiasi, 
    Terbilang, 
    MUP3Kediri, 
    Jabatan, 
    NoSK1, 
    TglSK1, 
    NoSK2, 
    TglSK2, 
    Lokasi_Pekerjaan
) 
VALUES (
    '$Jenis_Pengadaan', 
    '$NoRKS', 
    '$Tanggal', 
    '$Jenis_Anggaran', 
    '$Sumber_Dana', 
    '$Tgl_Dana_Keluar', 
    '$Lama_Pelaksanaan_Pekerjaan', 
    '$Terbilang_Lama_Pelaksanaan_Pekerjaan', 
    '$Satuan_Waktu', 
    '$Tentang', 
    '$NoSPKPihakI', 
    '$Tgl_TTD_Kontrak', 
    '$tglblnthn', 
    '$tglblnthn2', 
    '$Hari', 
    '$Tanggal2', 
    '$Bulan', 
    '$Tahun', 
    '$Tahun_Kata', 
    '$Tanggal_Berlaku', 
    '$Tanggal_Berlaku_Kata', 
    '$NoSPPBJ', 
    '$Tanggal_SPPBJ', 
    '$Direksi_Pekerjaan', 
    '$Pengawas_Pekerjaan', 
    '$Nama_Perusahaan', 
    '$Alamat_Perusahaan', 
    '$Alamat_Email', 
    '$Direktur', 
    '$NoRekening', 
    '$Bank', 
    '$Kantor_Bank', 
    '$Atas_Nama_Bank', 
    '$NoFax', 
    '$NoTelp', 
    '$Ket_Akta_Pendirian', 
    '$NoSurat_Negosiasi', 
    '$Harga_Negosiasi',
    '$Terbilang',
    '$MUP3Kediri',
    '$Jabatan',
    '$NoSK1',
    '$TglSK1',
    '$NoSK2',
    '$TglSK2',
    '$Lokasi_Pekerjaan'
)";
$koneksi->query($query);

    // return a success message
    echo "<script>alert('Data berhasil disimpan.');document.location='?';</script>";
    header("location: data_master.php");
}
?>
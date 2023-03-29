<?php
require('../../fpdf/fpdf.php');
// ambil data dari database dan masukkan ke dalam tabel
require_once '../../Database/koneksi.php';

use database\koneksi;
$koneksi = new koneksi();

// ambil nilai baris dan kolom dari form
$kolom = $_POST['kolom'];

// buat objek PDF baru
$pdf = new FPDF();
$pdf->AddPage();

// buat tabel dengan header
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'No');
$pdf->Cell(40,10,'Jenis Pengadaan');
$pdf->Cell(40,10,'NoRKS');
$pdf->Cell(40,10,'Tanggal');
$pdf->Ln();




$query = "SELECT * FROM t_data ORDER BY id_master";
$tampil = $koneksi->query($query);
$no = 1;
while ($data = mysqli_fetch_array($tampil)) {
   $pdf->Cell(40,10,$no++);
   $pdf->Cell(40,10,$data['Jenis_Pengadaan']);
   $pdf->Cell(40,10,$data['NoRKS']);
   $pdf->Cell(40,10,$data['Tanggal']);
   $pdf->Ln();
}

// simpan file PDF dan tampilkan di browser
$pdf->Output('D', 'surat.pdf');
?>

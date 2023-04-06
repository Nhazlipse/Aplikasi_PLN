<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
session_start();
if (!isset($_SESSION['username'])) {
    header("location:../../index.php");
}

require_once '../../database/koneksi.php';
include 'proses_tambah_data.php';

use database\koneksi;

$koneksi = new koneksi();

include './layout/header.php';
?>

<head>

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="../../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar"style="background-color:#039677;">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../dashboard.php"style="margin-top:69px;margin-right:7px;">
                <div class="sidebar-brand-icon">
                <img src="../../assets/img/logo.png" width="77%">
                </div>
            </a>


            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="../../dashboard.php"style="margin-top:68px;">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Interface
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Menu</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Pilih Menu:</h6>
                        <a class="collapse-item" href="../data_master/data_master.php">Data Master</a>
                        <a class="collapse-item" href="vendor.php">Vendor</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-0 my-2 my-md-0 mw-100 navbar-search">
                        <img src="assets/img/dash.png" width="33%" style="margin-left:5px;">
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                     

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang !</span>
                                <img class="img-profile rounded-circle"
                                    src="../../assets/img/undraw_profile.svg">
                            </a>

                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->



                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Data Pengunjung -->
                    <div class="container">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3 text-center">
                            <img src="../../assets/img/tambahpinjam.png"style="width:35%;">
                            </div>

                            <!-- card body -->
                            <div class="card-body">

                                <!-- Tambah Data Arsip Form -->
                                <div class="container">
                                    <form action="proses_tambah_data.php" method="post">

                                        <div class="form-group">
                                            <label for="judul">Jenis_Pengadaan</label>
                                            <input type="text" class="form-control" id="Jenis_Pengadaan"
                                                name="Jenis_Pengadaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoRKS:</label>
                                            <input type="text" class="form-control" id="NoRKS"
                                                name="NoRKS" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tanggal:</label>
                                            <input type="text" class="form-control" id="Tanggal"
                                                name="Tanggal" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Jenis_Anggaran:</label>
                                            <input type="text" class="form-control" id="Jenis_Anggaran" name="Jenis_Anggaran"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Sumber_Dana:</label>
                                            <input type="text" class="form-control" id="Sumber_Dana"
                                                name="Alamat_Email" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tgl_Dana_Keluar:</label>
                                            <input type="text" class="form-control" id="Tgl_Dana_Keluar" name="Tgl_Dana_Keluar" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Lama_Pelaksanaan_Pekerjaan:</label>
                                            <input type="text" class="form-control" id="Lama_Pelaksanaan_Pekerjaan" name="Lama_Pelaksanaan_Pekerjaan"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Terbilang_Lama_Pelaksanaan_Pekerjaan:</label>
                                            <input type="text" class="form-control" id="Terbilang_Lama_Pelaksanaan_Pekerjaan" name="Terbilang_Lama_Pelaksanaan_Pekerjaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Satuan_Waktu:</label>
                                            <input type="text" class="form-control" id="Satuan_Waktu" name="Satuan_Waktu" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tentang:</label>
                                            <input type="text" class="form-control" id="Tentang" name="Tentang" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoSPKPihakI:</label>
                                            <input type="number" class="form-control" id="NoSPKPihakI" name="NoSPKPihakI" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tgl_TTD_Kontrak:</label>
                                            <input type="text" class="form-control" id="Tgl_TTD_Kontrak" name="Tgl_TTD_Kontrak" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">tglblnthn:</label>
                                            <input type="text" class="form-control" id="tglblnthn" name="tglblnthn" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">tglblnthn2:</label>
                                            <input type="text" class="form-control" id="tglblnthn2" name="tglblnthn2" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Hari:</label>
                                            <input type="text" class="form-control" id="Hari" name="Hari" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tanggal2:</label>
                                            <input type="text" class="form-control" id="Tanggal2" name="Tanggal2" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Bulan:</label>
                                            <input type="text" class="form-control" id="Bulan" name="Bulan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tahun:</label>
                                            <input type="text" class="form-control" id="Tahun" name="Tahun" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tahun_Kata:</label>
                                            <input type="text" class="form-control" id="Tahun_Kata" name="Tahun_Kata" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tanggal_Berlaku:</label>
                                            <input type="text" class="form-control" id="Tanggal_Berlaku" name="Tanggal_Berlaku" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tanggal_Berlaku_Kata:</label>
                                            <input type="text" class="form-control" id="Tanggal_Berlaku_Kata" name="Tanggal_Berlaku_Kata" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoSPPBJ:</label>
                                            <input type="text" class="form-control" id="NoSPPBJ" name="NoSPPBJ" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tanggal_SPPBJ:</label>
                                            <input type="text" class="form-control" id="Tanggal_SPPBJ" name="Tanggal_SPPBJ" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Direksi_Pekerjaan:</label>
                                            <input type="text" class="form-control" id="Direksi_Pekerjaan" name="Direksi_Pekerjaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Pengawas_Pekerjaan:</label>
                                            <input type="text" class="form-control" id="Pengawas_Pekerjaan" name="Pengawas_Pekerjaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Nama_Perusahaan:</label>
                                            <input type="text" class="form-control" id="Nama_Perusahaan" name="Nama_Perusahaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Alamat_Perusahaan:</label>
                                            <input type="text" class="form-control" id="Alamat_Perusahaan" name="Alamat_Perusahaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Alamat_Email:</label>
                                            <input type="text" class="form-control" id="Alamat_Email" name="Alamat_Email" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Direktur:</label>
                                            <input type="text" class="form-control" id="Direktur" name="Direktur" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoRekening:</label>
                                            <input type="text" class="form-control" id="NoRekening" name="NoRekening" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Bank:</label>
                                            <input type="text" class="form-control" id="Bank" name="Bank" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Kantor_Bank:</label>
                                            <input type="text" class="form-control" id="Kantor_Bank" name="Kantor_Bank" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Atas_Nama_Bank:</label>
                                            <input type="text" class="form-control" id="Atas_Nama_Bank" name="Atas_Nama_Bank" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoFax:</label>
                                            <input type="text" class="form-control" id="NoFax" name="NoFax" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoTelp:</label>
                                            <input type="text" class="form-control" id="NoTelp" name="NoTelp" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Ket_Akta_Pendirian:</label>
                                            <input type="text" class="form-control" id="Ket_Akta_Pendirian" name="Ket_Akta_Pendirian" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoSurat_Negosiasi:</label>
                                            <input type="text" class="form-control" id="NoSurat_Negosiasi" name="NoSurat_Negosiasi" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Harga_Negosiasi:</label>
                                            <input type="text" class="form-control" id="Harga_Negosiasi" name="Harga_Negosiasi" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Terbilang:</label>
                                            <input type="text" class="form-control" id="Terbilang" name="Terbilang" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">MUP3Kediri:</label>
                                            <input type="text" class="form-control" id="MUP3Kediri" name="MUP3Kediri" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Jabatan:</label>
                                            <input type="text" class="form-control" id="Jabatan" name="Jabatan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoSK1:</label>
                                            <input type="text" class="form-control" id="NoSK1" name="NoSK1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">TglSK1:</label>
                                            <input type="text" class="form-control" id="TglSK1" name="TglSK1" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoSK2:</label>
                                            <input type="text" class="form-control" id="NoSK2" name="NoSK2" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">TglSK2:</label>
                                            <input type="text" class="form-control" id="TglSK2" name="TglSK2" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Lokasi_Pekerjaan	:</label>
                                            <input type="text" class="form-control" id="Lokasi_Pekerjaan" name="Lokasi_Pekerjaan" >
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="vendor.php" class="btn btn-danger">Cancel</a>
                                    </form>
                                </div>

                                <!-- akhir container -->

                            </div>
                            <!-- End of Page Wrapper -->

                            <!-- Scroll to Top Button-->
                            <a class="scroll-to-top rounded" href="#page-top">
                                <i class="fas fa-angle-up"></i>
                            </a>

                            <!-- Logout Modal-->
                            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Apakah Anda yakin ingin
                                                keluar?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Pilih "Logout" Jika kamu ingin keluar dari session.
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary" type="button"
                                                data-dismiss="modal">Cancel</button>
                                            <a class="btn btn-danger" href="logout.php">Logout</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

</body>

</html>

<?php include './layout/footer.php';?>
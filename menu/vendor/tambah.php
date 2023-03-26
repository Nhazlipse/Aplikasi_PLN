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
                                    <form action="proses_tambah_data_pinjaman.php" method="post">

                                        <div class="form-group">
                                            <label for="judul">Nama Perusahaan:</label>
                                            <input type="text" class="form-control" id="Nama_Perusahaan"
                                                name="Nama_Perusahaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Alamat_Perusahaan:</label>
                                            <input type="text" class="form-control" id="Alamat_Perusahaan"
                                                name="Alamat_Perusahaan" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoFax:</label>
                                            <input type="text" class="form-control" id="NoFax"
                                                name="NoFax" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoTelp:</label>
                                            <input type="text" class="form-control" id="NoTelp" name="NoTelp"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Alamat_Email:</label>
                                            <input type="text" class="form-control" id="Alamat_Email"
                                                name="Alamat_Email" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Tanggal Pinjam:</label>
                                            <input type="date" class="form-control" id="tanggal_pinjam"
                                                name="tanggal_pinjam" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Direktur:</label>
                                            <input type="text" class="form-control" id="Direktur" name="Direktur" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoRekening:</label>
                                            <input type="text" class="form-control" id="NoRekening" name="NoRekening"
                                                >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Kantor_Bank:</label>
                                            <input type="text" class="form-control" id="Kantor_Bank" name="Kantor_Bank" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Atas_Nama:</label>
                                            <input type="text" class="form-control" id="Atas_Nama" name="Atas_Nama" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">Ket_Akta_Pendirian:</label>
                                            <input type="text" class="form-control" id="Ket_Akta_Pendirian" name="Ket_Akta_Pendirian" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoDPT:</label>
                                            <input type="text" class="form-control" id="NoDPT" name="NoDPT" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoSAPV:</label>
                                            <input type="text" class="form-control" id="NoSAPV" name="NoSAPV" >
                                        </div>
                                        <div class="form-group">
                                            <label for="judul">NoNPWP:</label>
                                            <input type="text" class="form-control" id="NoNPWP" name="NoNPWP" >
                                        </div>

                                        <button type="submit" class="btn btn-primary">Submit</button>
                                        <a href="pinjaman.php" class="btn btn-danger">Cancel</a>
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
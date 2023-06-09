<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
require_once '../../database/koneksi.php';
use database\koneksi;
$koneksi = new koneksi();

include 'layout/header.php';
?>

<head>

<title>ESPK</title>
<link rel="stylesheet" href="layout/css/style.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.css">
    <link href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap4.min.css">
</head>

<body id="page-top">

<!-- Page Wrapper -->
<div id="wrapper">

<!-- Sidebar -->
<ul class="navbar-nav sidebar sidebar-dark accordion" id="accordionSidebar" style="background-color:#039677;">


<!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="../../dashboard.php"style="margin-top:69px;margin-right:7px;">
<div class="sidebar-brand-icon text-center">
<img src="../../assets/img/logo.png" width="77%">
</div>
</a>

<!-- Nav Item - Dashboard -->
<li class="nav-item active"style="margin-top:68px;">
<a class="nav-link" href="../../dashboard.php">
<i class="fas fa-fw fa-tachometer-alt"></i>
<span>Dashboard</span></a>
</li>

<!-- DIVIDER GARIS MENUT -->
<hr class="sidebar-divider">

<!-- Heading -->
<div class="sidebar-heading">
Interface
</div>

<!-- NAVIGASI MENU - Pages Collapse Menu -->
<li class="nav-item">
<a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
aria-expanded="true" aria-controls="collapseTwo">
<i class="fas fa-fw fa-cog"></i>
<span>Menu</span>
</a>
<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
<div class="bg-white py-2 collapse-inner rounded">
    <h6 class="collapse-header">Pilih Menu:</h6>
    <a class="collapse-item" href="../data_master/data_master.php"><b>Data Master</b></a>
    <a class="collapse-item" href="vendor.php"><b>Data Vendor</b></a>
</div>
</div>
</li>

<!-- DIVIDER GARIS MENU -->
<hr class="sidebar-divider d-none d-md-block">

<!-- SIDEBAR UNTUK MINIMIZE MENU -->
<div class="text-center d-none d-md-inline">
<button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>


</ul>
<!-- ENDING DARI BAGIAN ADMIN TOOLS -->

<!-- DARI SINI ISI KONTEN NYA -->
<div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

<!-- Topbar -->
<nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

<!-- Sidebar Toggle (Topbar) -->
<button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
    <i class="fa fa-bars"></i>
</button>


<!-- NAVIGASI BAR ATAS BAGIAN HEADER -->
<ul class="navbar-nav ml-auto">
    <div class="topbar-divider d-none d-sm-block"></div>

    <!-- DATA BAGIAN ADMINISTRASI -->
    <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Selamat Datang !</span>
            <img class="img-profile rounded-circle" src="../../assets/img/undraw_profile.svg">
        </a>
        <!-- ANIMASI TOMBOL LOGOUT (DROPDOWN) BAGIAN ADMINISTRASI -->
        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
            aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                Logout
            </a>
        </div>
    </li>

</ul>

</nav>
<!-- ENDING DARI NAVIGASI BAR ATAS HEADER -->

                <!-- AWAL DARI ISI KONTEN -->
<div class="container-fluid">


<!-- AWAL DARI ISI KONTEN -->
<div class="container-fluid">


<!-- AWAL ISI DATA PINJAMAN -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 text-center">
            <img src="../../assets/img/vend.png"style="width:17%;">
        </div>

        <!-- CARD BODY -->
        <div class="card-body">

            <!-- Tombol Tambah Data -->
            <div class="tambahdata">
                <a href="tambah.php" class="btn btn-primary">Tambah Data</a><br><br>
                </div>
                <!-- buat kolom -->
                            <div class="table-responsive">
                <!-- buat kolom -->
                <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered" style="width:100%">
                                    <thead>
                                    <tr>
                                    <th class="text-center">No<br><br></th>
                                    <th class="text-center">Nama Perusahaan</th>
                                    <th class="text-center">Alamat Perusahaan</th>
                                    <th class="text-center">No Fax</th>
                                    <th class="text-center">No Telp</th>
                                    <th class="text-center">Alamat Email</th>
                                    <th class="text-center">Direktur</th>
                                    <th class="text-center">No Rekening</th>
                                    <th class="text-center">Bank</th>
                                    <th class="text-center">Kantor Bank</th>
                                    <th class="text-center">Atas Nama</th>
                                    <th class="text-center">Ket Akta Pendirian</th>
                                    <th class="text-center">No DPT</th>
                                    <th class="text-center">No SAPV</th>
                                    <th class="text-center">No NPWP</th>
                                    <th class="text-center">Action</th>
                                </tr>
                            </thead>
                            <?php require 'panggil_data_vendor.php';?>
                            </table>
                            <br>
                            </div>
                    </div>
  </div>
</div>

        <!-- TOMBOL SCROLL KE ATAS-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- LOGOUT PANEL-->
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
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap4.min.js"></script>
    <script>$(document).ready(function () {
    $('#example').DataTable();
});</script>
</body>

</html>
<?php include 'layout/footer.php';?>
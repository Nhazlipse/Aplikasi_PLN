<?php
// Validasi Login agar file tidak dapat diakses sebelum melakukan Login Terlebih dahulu
require_once '../../database/koneksi.php';
use database\koneksi;
$koneksi = new koneksi();

include '../../layout/header.php';
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
                                    src="img/undraw_profile.svg">
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

<?php 
	$id = $_GET["id_vendor"];
	$query = "SELECT * FROM t_vendor WHERE id_vendor = '$id'";
	$result = $koneksi->query($query);
	$row = mysqli_fetch_assoc($result);
 ?>

 <!-- Data Pengunjung -->
<div class="container">
<div class="card shadow mb-4">
    <div class="card-header py-3 text-center">
        <img src="../../assets/img/tambaharsip.png"style="width:29%;">
    </div>

<!-- form edit data pengunjung -->
<div class="container">
<div class="card-body">
    <div class="row">
        <div class="col-md-12">
        <form action="operasi_edit_data.php" method="POST">
                <div class="form-group">
                    <label for="id_vendor">ID</label>
                    <input type="text" class="form-control" name="id_vendor"
                        id="id_vendor" value="<?php echo $row['id_vendor']; ?>"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="Nama_Perusahaan">Nama_Perusahaan</label>
                    <input type="text" class="form-control" name="Nama_Perusahaan" id="Nama_Perusahaan"
                         value="<?php echo $row['Nama_Perusahaan']; ?>">
                </div>
                <div class="form-group">
                    <label for="Alamat_Perusahaan">Alamat_Perusahaan</label>
                    <input type="text" class="form-control" name="Alamat_Perusahaan" id="Alamat_Perusahaan"
                         value="<?php echo $row['Alamat_Perusahaan']; ?>">
                </div>
                <div class="form-group">
                    <label for="NoFax">NoFax</label>
                    <input type="text" class="form-control" name="NoFax" id="NoFax"
                         value="<?php echo $row['NoFax']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoTelp">NoTelp</label>
                    <input type="NoTelp" class="form-control" name="NoTelp" id="NoTelp"
                         value="<?php echo $row['NoTelp']; ?>">
                </div>
				<div class="form-group">
                    <label for="Alamat_Email">Alamat_Email</label>
                    <input type="text" class="form-control" name="Alamat_Email" id="Alamat_Email"
                         value="<?php echo $row['Alamat_Email']; ?>">
                </div>
				<div class="form-group">
                    <label for="Direktur">Direktur</label>
                    <input type="text" class="form-control" name="Direktur" id="Direktur"
                         value="<?php echo $row['Direktur']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoFax">NoRekening</label>
                    <input type="text" class="form-control" name="NoRekening" id="NoRekening"
                         value="<?php echo $row['NoRekening']; ?>">
                </div>
				<div class="form-group">
                    <label for="Bank">Bank</label>
                    <input type="text" class="form-control" name="Bank" id="Bank"
                         value="<?php echo $row['Bank']; ?>">
                </div>
				<div class="form-group">
                    <label for="Kantor_Bank">Kantor_Bank</label>
                    <input type="text" class="form-control" name="Kantor_Bank" id="Kantor_Bank"
                         value="<?php echo $row['Kantor_Bank']; ?>">
                </div>
				<div class="form-group">
                    <label for="Atas_Nama">Atas_Nama</label>
                    <input type="text" class="form-control" name="Atas_Nama" id="Atas_Nama"
                         value="<?php echo $row['Atas_Nama']; ?>">
                </div>
				<div class="form-group">
                    <label for="Ket_Akta_Pendirian">Ket_Akta_Pendirian</label>
                    <input type="text" class="form-control" name="Ket_Akta_Pendirian" id="Ket_Akta_Pendirian"
                         value="<?php echo $row['Ket_Akta_Pendirian']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoDPT">NoDPT</label>
                    <input type="text" class="form-control" name="NoDPT" id="NoDPT"
                         value="<?php echo $row['NoDPT']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoSAPV">NoSAPV</label>
                    <input type="text" class="form-control" name="NoSAPV" id="NoSAPV"
                         value="<?php echo $row['NoSAPV']; ?>">
                </div>
				<div class="form-group">
                    <label for="NoNPWP">NoNPWP</label>
                    <input type="text" class="form-control" name="NoNPWP" id="NoNPWP"
                         value="<?php echo $row['NoNPWP']; ?>">
                </div>
				<button type="submit" class="btn btn-primary" name="Update"
				value="Update Data">
				Submit
				</button>
				<button type="submit" action="vendor.php" class="btn btn-danger">
				Cancel
				</button>
				</form>
                </div>
    </div>
</div>


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
                <button class="close" type="button" data-dismiss="modal"
                    aria-label="Close">
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
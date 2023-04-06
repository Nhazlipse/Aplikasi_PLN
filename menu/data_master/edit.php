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
	$id = $_GET["id_master"];
	$query = "SELECT * FROM t_data WHERE id_master = '$id'";
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
        <form action="operasi_editmaster.php" method="POST">
                <div class="form-group">
                    <label for="id_master">ID</label>
                    <input type="text" class="form-control" name="id_master"
                        id="id_vendor" value="<?php echo $row['id_master']; ?>"
                        readonly>
                </div>
                <div class="form-group">
                    <label for="Nama_Perusahaan">Nama_Perusahaan</label>
                    <input type="text" class="form-control" name="Nama_Perusahaan" id="Nama_Perusahaan"
                         value="<?php echo $row['Nama_Perusahaan']; ?>">
                </div>
                <div class="form-group">
                    <label for="Jenis_Pengadaan">Jenis Pengadaan</label>
                    <input type="text" class="form-control" name="Jenis_Pengadaan" id="Jenis_Pengadaan" value="<?php echo $row['Jenis_Pengadaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="NoRKS">No RKS</label>
                    <input type="text" class="form-control" name="NoRKS" id="NoRKS" value="<?php echo $row['NoRKS']; ?>">
                </div>

                <div class="form-group">
                    <label for="Tanggal">Tanggal</label>
                    <input type="text" class="form-control" name="Tanggal" id="Tanggal" value="<?php echo $row['Tanggal']; ?>">
                </div>

                <div class="form-group">
                    <label for="Jenis_Anggaran">Jenis Anggaran</label>
                    <input type="text" class="form-control" name="Jenis_Anggaran" id="Jenis_Anggaran" value="<?php echo $row['Jenis_Anggaran']; ?>">
                </div>

                <div class="form-group">
                    <label for="Sumber_Dana">Sumber Dana</label>
                    <input type="text" class="form-control" name="Sumber_Dana" id="Sumber_Dana" value="<?php echo $row['Sumber_Dana']; ?>">
                </div>

                <div class="form-group">
                    <label for="Tgl_Dana_Keluar">Tgl Dana Keluar</label>
                    <input type="text" class="form-control" name="Tgl_Dana_Keluar" id="Tgl_Dana_Keluar" value="<?php echo $row['Tgl_Dana_Keluar']; ?>">
                </div>

                <div class="form-group">
                    <label for="Lama_Pelaksanaan_Pekerjaan">Lama Pelaksanaan Pekerjaan</label>
                    <input type="text" class="form-control" name="Lama_Pelaksanaan_Pekerjaan" id="Lama_Pelaksanaan_Pekerjaan" value="<?php echo $row['Lama_Pelaksanaan_Pekerjaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="Terbilang_Lama_Pelaksanaan_Pekerjaan">Terbilang Lama Pelaksanaan Pekerjaan</label>
                    <input type="text" class="form-control" name="Terbilang_Lama_Pelaksanaan_Pekerjaan" id="Terbilang_Lama_Pelaksanaan_Pekerjaan" value="<?php echo $row['Terbilang_Lama_Pelaksanaan_Pekerjaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="Satuan_Waktu">Satuan Waktu</label>
                    <input type="text" class="form-control" name="Satuan_Waktu" id="Satuan_Waktu" value="<?php echo $row['Satuan_Waktu']; ?>">
                </div>

                <div class="form-group">
                    <label for="Tentang">Tentang</label>
                    <input type="text" class="form-control" name="Tentang" id="Tentang" value="<?php echo $row['Tentang']; ?>">
                </div>

                <div class="form-group">
                <label for="NoSPKPihakI">NoSPKPihakI</label>
                <input type="text" class="form-control" name="NoSPKPihakI" id="NoSPKPihakI" value="<?php echo $row['NoSPKPihakI']; ?>">
                </div>
                <div class="form-group">
                <label for="Tgl_TTD_Kontrak">Tgl_TTD_Kontrak</label>
                <input type="text" class="form-control" name="Tgl_TTD_Kontrak" id="Tgl_TTD_Kontrak" value="<?php echo $row['Tgl_TTD_Kontrak']; ?>">
                </div>
                <div class="form-group">
                <label for="tglblnthn">tglblnthn</label>
                <input type="text" class="form-control" name="tglblnthn" id="tglblnthn" value="<?php echo $row['tglblnthn']; ?>">
                </div>
                <div class="form-group">
                <label for="tglblnthn2">tglblnthn2</label>
                <input type="text" class="form-control" name="tglblnthn2" id="tglblnthn2" value="<?php echo $row['tglblnthn2']; ?>">
                </div>
                <div class="form-group">
                <label for="Hari">Hari</label>
                <input type="text" class="form-control" name="Hari" id="Hari" value="<?php echo $row['Hari']; ?>">
                </div>
                <div class="form-group">
                <label for="Tanggal2">Tanggal2</label>
                <input type="text" class="form-control" name="Tanggal2" id="Tanggal2" value="<?php echo $row['Tanggal2']; ?>">
                </div>
                <div class="form-group">
                <label for="Bulan">Bulan</label>
                <input type="text" class="form-control" name="Bulan" id="Bulan" value="<?php echo $row['Bulan']; ?>">
                </div>
                <div class="form-group">
                <label for="Tahun">Tahun</label>
                <input type="text" class="form-control" name="Tahun" id="Tahun" value="<?php echo $row['Tahun']; ?>">
                </div>
                <div class="form-group">
                <label for="Tahun_Kata">Tahun_Kata</label>
                <input type="text" class="form-control" name="Tahun_Kata" id="Tahun_Kata" value="<?php echo $row['Tahun_Kata']; ?>">
                </div>
                <div class="form-group">
                <label for="Tanggal_Berlaku">Tanggal_Berlaku</label>
                <input type="text" class="form-control" name="Tanggal_Berlaku" id="Tanggal_Berlaku" value="<?php echo $row['Tanggal_Berlaku']; ?>">
                </div>
                <div class="form-group">
                <label for="Tanggal_Berlaku_Kata">Tanggal_Berlaku_Kata</label>
                <input type="text" class="form-control" name="Tanggal_Berlaku_Kata" id="Tanggal_Berlaku_Kata" value="<?php echo $row['Tanggal_Berlaku_Kata']; ?>">
                </div>
                <div class="form-group">
                    <label for="NoSPPBJ">NoSPPBJ</label>
                    <input type="text" class="form-control" name="NoSPPBJ" id="NoSPPBJ" value="<?php echo $row['NoSPPBJ']; ?>">
                </div>

                <div class="form-group">
                    <label for="Tanggal_SPPBJ">Tanggal_SPPBJ</label>
                    <input type="text" class="form-control" name="Tanggal_SPPBJ" id="Tanggal_SPPBJ" value="<?php echo $row['Tanggal_SPPBJ']; ?>">
                </div>

                <div class="form-group">
                    <label for="Direksi_Pekerjaan">Direksi_Pekerjaan</label>
                    <input type="text" class="form-control" name="Direksi_Pekerjaan" id="Direksi_Pekerjaan" value="<?php echo $row['Direksi_Pekerjaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="Pengawas_Pekerjaan">Pengawas_Pekerjaan</label>
                    <input type="text" class="form-control" name="Pengawas_Pekerjaan" id="Pengawas_Pekerjaan" value="<?php echo $row['Pengawas_Pekerjaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="Nama_Perusahaan">Nama_Perusahaan</label>
                    <input type="text" class="form-control" name="Nama_Perusahaan" id="Nama_Perusahaan" value="<?php echo $row['Nama_Perusahaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="Alamat_Perusahaan">Alamat_Perusahaan</label>
                    <input type="text" class="form-control" name="Alamat_Perusahaan" id="Alamat_Perusahaan" value="<?php echo $row['Alamat_Perusahaan']; ?>">
                </div>

                <div class="form-group">
                    <label for="Alamat_Email">Alamat_Email</label>
                    <input type="text" class="form-control" name="Alamat_Email" id="Alamat_Email" value="<?php echo $row['Alamat_Email']; ?>">
                </div>

                <div class="form-group">
                    <label for="Direktur">Direktur</label>
                    <input type="text" class="form-control" name="Direktur" id="Direktur" value="<?php echo $row['Direktur']; ?>">
                </div>

                <div class="form-group">
                    <label for="NoRekening">NoRekening</label>
                    <input type="text" class="form-control" name="NoRekening" id="NoRekening" value="<?php echo $row['NoRekening']; ?>">
                </div>

                <div class="form-group">
                    <label for="Bank">Bank</label>
                    <input type="text" class="form-control" name="Bank" id="Bank" value="<?php echo $row['Bank']; ?>">
                </div>

                <div class="form-group">
                    <label for="Kantor_Bank">Kantor_Bank</label>
                    <input type="text" class="form-control" name="Kantor_Bank" id="Kantor_Bank" value="<?php echo $row['Kantor_Bank']; ?>">
                </div>

                <div class="form-group">
                    <label for="Atas_Nama_Bank">Atas Nama Bank</label>
                    <input type="text" class="form-control" name="Atas_Nama_Bank" id="Atas_Nama_Bank"
                        value="<?php echo $row['Atas_Nama_Bank']; ?>">
                </div>

                <div class="form-group">
                    <label for="NoFax">Nomor Fax</label>
                    <input type="text" class="form-control" name="NoFax" id="NoFax"
                        value="<?php echo $row['NoFax']; ?>">
                </div>

                <div class="form-group">
                    <label for="NoTelp">Nomor Telepon</label>
                    <input type="text" class="form-control" name="NoTelp" id="NoTelp"
                        value="<?php echo $row['NoTelp']; ?>">
                </div>

                <div class="form-group">
                    <label for="Ket_Akta_Pendirian">Keterangan Akta Pendirian</label>
                    <input type="text" class="form-control" name="Ket_Akta_Pendirian" id="Ket_Akta_Pendirian"
                        value="<?php echo $row['Ket_Akta_Pendirian']; ?>">
                </div>

                <div class="form-group">
                    <label for="NoSurat_Negosiasi">Nomor Surat Negosiasi</label>
                    <input type="text" class="form-control" name="NoSurat_Negosiasi" id="NoSurat_Negosiasi"
                        value="<?php echo $row['NoSurat_Negosiasi']; ?>">
                </div>

                <div class="form-group">
                    <label for="Harga_Negosiasi">Harga Negosiasi</label>
                    <input type="text" class="form-control" name="Harga_Negosiasi" id="Harga_Negosiasi"
                        value="<?php echo $row['Harga_Negosiasi']; ?>">
                </div>

                <div class="form-group">
                    <label for="Terbilang">Terbilang</label>
                    <input type="text" class="form-control" name="Terbilang" id="Terbilang"
                        value="<?php echo $row['Terbilang']; ?>">
                </div>

                <div class="form-group">
                    <label for="MUP3Kediri">MUP3 Kediri</label>
                    <input type="text" class="form-control" name="MUP3Kediri" id="MUP3Kediri"
                        value="<?php echo $row['MUP3Kediri']; ?>">
                </div>

                <div class="form-group">
                    <label for="Jabatan">Jabatan</label>
                    <input type="text" class="form-control" name="Jabatan" id="Jabatan"
                        value="<?php echo $row['Jabatan']; ?>">
                </div>

                <div class="form-group">
                    <label for="NoSK1">Nomor SK 1</label>
                    <input type="text" class="form-control" name="NoSK1" id="NoSK1"
                        value="<?php echo $row['NoSK1']; ?>">
                </div>

                <div class="form-group">
                    <label for="TglSK1">TglSK1</label>
                    <input type="text" class="form-control" name="TglSK1" id="TglSK1"
                        value="<?php echo $row['TglSK1']; ?>">
                </div>
                <div class="form-group">
                    <label for="NoSK2">NoSK2</label>
                    <input type="text" class="form-control" name="NoSK2" id="NoSK2"
                        value="<?php echo $row['NoSK2']; ?>">
                </div>
                <div class="form-group">
                    <label for="TglSK2">TglSK2</label>
                    <input type="text" class="form-control" name="TglSK2" id="TglSK2"
                        value="<?php echo $row['TglSK2']; ?>">
                </div>
                <div class="form-group">
                    <label for="Lokasi_Pekerjaan">Lokasi_Pekerjaan</label>
                    <input type="text" class="form-control" name="Lokasi_Pekerjaan" id="Lokasi_Pekerjaan"
                        value="<?php echo $row['Lokasi_Pekerjaan']; ?>">
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
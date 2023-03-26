<!-- deklarasikan dan panggil koneksi database untuk memanggil data dari tb_dataarsip-->
<tbody>
<?php
$record_per_page = 10;
if(isset($_GET["page"])) {
$page = $_GET["page"];
} else {
$page = 1;
}
// untuk menampilkan data yang di tampilkan pada setiap pagenya adalah 10 data menggunakan fungsi sql (DESC LIMIT)
 $start_from = ($page-1) * $record_per_page;
 $query = "SELECT * FROM t_vendor ORDER BY id_vendor";
 $tampil = $koneksi->query($query);
 $no = $start_from + 1;
while ($data = mysqli_fetch_array($tampil)) {
?>

<!-- mendeskripsikan data sesuai pada kolom yang di perlukan -->
    <tr>
        <td class="text-center"><?= $no++ ?></td>
        <td><?= $data['Nama_Perusahaan'] ?></td>
        <td><?= $data['Alamat_Perusahaan'] ?></td>
        <td><?= $data['NoFax'] ?></td>
        <td><?= $data['NoTelp'] ?></td>
        <td><?= $data['Alamat_Email'] ?></td>
        <td><?= $data['Direktur'] ?></td>
        <td><?= $data['NoRekening'] ?></td>
        <td><?= $data['Bank'] ?></td>
        <td><?= $data['Kantor_Bank'] ?></td>
        <td><?= $data['Atas_Nama'] ?></td>
        <td><?= $data['Ket_Akta_Pendirian'] ?></td>
        <td><?= $data['NoDPT'] ?></td>
        <td><?= $data['NoSAPV'] ?></td>
        <td><?= $data['NoNPWP'] ?></td>
        <td>

    <!-- buat tombol edit hapus -->
    <a href="edit.php?id_vendor=<?= $data['id_vendor'] ?>"
        class="btn btn-warning btn-sm d-sm-inline-block mb-3 mb-sm-1"><i
            class="fa fa-edit"></i>Edit</a>
    <a href="hapusdata.php?id_vendor=<?= $data['id_vendor'] ?>"
        class="btn btn-danger btn-sm d-sm-inline-block mb-3 mb-sm-1"
        onclick="return confirm('Yakin ingin menghapus data ini?')"><i
            class="fa fa-trash"></i>Hapus</a>

        </td>
    </tr>
<?php } ?>
</tbody>
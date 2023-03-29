<!-- deklarasikan dan panggil koneksi database untuk memanggil data dari tb_dataarsip-->
<tbody>
<?php

// untuk menampilkan data yang di tampilkan pada setiap pagenya adalah 10 data menggunakan fungsi sql (DESC LIMIT)
 $query = "SELECT * FROM t_data ORDER BY id_master";
 $tampil = $koneksi->query($query);
 $no = 1;
while ($data = mysqli_fetch_array($tampil)) {
?>

<!-- mendeskripsikan data sesuai pada kolom yang di perlukan -->
    <tr>
    <td>
<!-- buat tombol edit hapus -->
<a href="edit.php?id_master=<?= $data['id_master'] ?>"
    class="btn btn-warning btn-sm d-sm-inline-block mb-3 mb-sm-1"><i
        class="fa fa-edit"></i>Edit</a>
<a href="hapusdata.php?id_master=<?= $data['id_master'] ?>"
    class="btn btn-danger btn-sm d-sm-inline-block mb-3 mb-sm-1"
    onclick="return confirm('Yakin ingin menghapus data ini?')"><i
        class="fa fa-trash"></i>Hapus</a>
    </td>
    <td class="text-center"><?= $no++ ?></td>
        <td><?= $data['Jenis_Pengadaan'] ?></td>
        <td><?= $data['NoRKS'] ?></td>
        <td><?= $data['Tanggal'] ?></td>
        <td><?= $data['Jenis_Anggaran'] ?></td>
        <td><?= $data['Sumber_Dana'] ?></td>
        <td><?= $data['Tgl_Dana_Keluar'] ?></td>
        <td><?= $data['Lama_Pelaksanaan_Pekerjaan'] ?></td>
        <td><?= $data['Terbilang_Lama_Pelaksanaan_Pekerjaan'] ?></td>
        <td><?= $data['Satuan_Waktu'] ?></td>
        <td><?= $data['Tentang'] ?></td>
        <td><?= $data['NoSPKPihakI'] ?></td>
        <td><?= $data['Tgl_TTD_Kontrak'] ?></td>
        <td><?= $data['tglblnthn'] ?></td>
        <td><?= $data['tglblnthn2'] ?></td>
        <td><?= $data['Hari'] ?></td>
        <td><?= $data['Tanggal2'] ?></td>
        <td><?= $data['Bulan'] ?></td>
        <td><?= $data['Tahun'] ?></td>
        <td><?= $data['Tahun_Kata'] ?></td>
        <td><?= $data['Tanggal_Berlaku'] ?></td>
        <td><?= $data['Tanggal_Berlaku_Kata'] ?></td>
        <td><?= $data['NoSPPBJ'] ?></td>
        <td><?= $data['Tanggal_SPPBJ'] ?></td>
        <td><?= $data['Direksi_Pekerjaan'] ?></td>
        <td><?= $data['Pengawas_Pekerjaan'] ?></td>
        <td><?= $data['Nama_Perusahaan'] ?></td>
        <td><?= $data['Alamat_Perusahaan'] ?></td>
        <td><?= $data['Alamat_Email'] ?></td>
        <td><?= $data['Direktur'] ?></td>
        <td><?= $data['NoRekening'] ?></td>
        <td><?= $data['Bank'] ?></td>
        <td><?= $data['Kantor_Bank'] ?></td>
        <td><?= $data['Atas_Nama_Bank'] ?></td>
        <td><?= $data['NoFax'] ?></td>
        <td><?= $data['NoTelp'] ?></td>
        <td><?= $data['Ket_Akta_Pendirian'] ?></td>
        <td><?= $data['NoSurat_Negosiasi'] ?></td>
        <td><?= $data['Harga_Negosiasi'] ?></td>
        <td><?= $data['Terbilang'] ?></td>
        <td><?= $data['MUP3Kediri'] ?></td>
        <td><?= $data['Jabatan'] ?></td>
        <td><?= $data['NoSK1'] ?></td>
        <td><?= $data['TglSK1'] ?></td>
        <td><?= $data['NoSK2'] ?></td>
        <td><?= $data['TglSK2'] ?></td>
        <td><?= $data['Lokasi_Pekerjaan'] ?></td>
    </tr>
<?php } ?>
</tbody>
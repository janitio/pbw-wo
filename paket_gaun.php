<h2>Daftar Paket Gaun</h2>
<div class="text-right">
    <a href="admin.php?halaman=tambah_paket_gaun" class="btn btn-primary">Tambah Data</a>
</div><hr>
<table class="table table-striped">
    <thead>
        <!-- No, nama penyewa, harga, nomor telpon -->
        <th class="text-center" width="5%">No</th>
        <th class="text-center" width="20%">Nama Model Gaun</th>
        <th class="text-center" width="20%">Nama Pemilik Gaun</th>
        <th class="text-center" width="10%">Harga (Rp)</th>
        <th class="text-center" width="10%">No. Telpon</th>
        <th class="text-center" width="10%">Foto</th>
        <th class="text-center" width="20%">Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = mysqli_query($link, "SELECT * FROM gaun"); ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <tr>
                <td class="text-center"><?= $nomor; ?></td>
                <td class="text-center"><?= $pecah['model_gaun']; ?></td>
                <td class="text-center"><?= $pecah['pemilik_gaun']; ?></td>
                <td class="text-center"><?= $pecah['harga_gaun']; ?></td>
                <td class="text-center"><?= $pecah['telp_gaun']; ?></td>
                <td class="text-center">
                    <img src="images/<?= $pecah['foto_gaun']; ?>" width="100px">
                </td>
                <td class="text-center">
                    <a href="admin.php?halaman=hapus_paket_gaun&id=<?= $pecah['id_gaun']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="admin.php?halaman=ubah_paket_gaun&id=<?= $pecah['id_gaun']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>


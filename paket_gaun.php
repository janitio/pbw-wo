<h2>Paket Gaun</h2>

<table class="table table-bordered">
    <thead>
        <!-- No, nama penyewa, harga, nomor telpon -->
        <th>No</th>
        <th>Nama Model Gaun</th>
        <th>Nama Pemilik Gaun</th>
        <th>Harga (Rp)</th>
        <th>No. Telpon</th>
        <th>Foto</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = mysqli_query($link, "SELECT * FROM gaun"); ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $pecah['model_gaun']; ?></td>
                <td><?= $pecah['pemilik_gaun']; ?></td>
                <td><?= $pecah['harga_gaun']; ?></td>
                <td><?= $pecah['telp_gaun']; ?></td>
                <td>
                    <img src="images/<?= $pecah['foto_gaun']; ?>" width="100px">
                </td>
                <td>
                    <a href="admin.php?halaman=hapus_paket_gaun&id=<?= $pecah['id_gaun']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="admin.php?halaman=ubah_paket_gaun&id=<?= $pecah['id_gaun']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>

<a href="admin.php?halaman=tambah_paket_gaun" class="btn btn-primary">Tambah Data</a>
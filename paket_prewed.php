<h2>Paket Pre-Wedding</h2>

<table class="table table-bordered">
    <thead>
        <!-- No, nama penyewa, harga, nomor telpon -->
        <th>No</th>
        <th>Nama Penyewa</th>
        <th>Harga</th>
        <th>No. Telpon</th>
        <th>Keterangan</th>
        <th>Foto</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = mysqli_query($link, "SELECT * FROM wedding"); ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $pecah['nama_wed']; ?></td>
                <td><?= $pecah['harga_wed']; ?></td>
                <td><?= $pecah['telp_wed']; ?></td>
                <td><?= $pecah['keterangan_wed']; ?></td>
                <td>
                    <img src="images/<?= $pecah['foto_wed']; ?>" width="100px">
                </td>
                <td>
                    <a href="admin.php?halaman=hapus_paket_prewed&id=<?= $pecah['id_wed']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="admin.php?halaman=ubah_paket_prewed&id=<?= $pecah['id_wed']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>

<a href="admin.php?halaman=tambah_paket_prewed" class="btn btn-primary">Tambah Data</a>
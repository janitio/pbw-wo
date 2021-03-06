<h2>Daftar Paket Pre-Wedding</h2>
<div class="text-right">
    <a href="admin.php?halaman=tambah_paket_prewed" class="btn btn-primary">Tambah Data</a>
</div><hr>
<table class="table table-striped">
    <thead>
        <!-- No, nama penyewa, harga, nomor telpon -->
        <th width="5%" class="text-center">No</th>
        <th width="10%" class="text-center">Nama Penyewa</th>
        <th width="10%" class="text-center">Harga</th>
        <th width="10%" class="text-center">No. Telpon</th>
        <th width="39%" class="text-center">Keterangan</th>
        <th width="10%" class="text-center">Foto</th>
        <th width="30%" class="text-center">Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = mysqli_query($link, "SELECT * FROM wedding"); ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <tr>
                <td class="text-center"><?= $nomor; ?></td>
                <td class="text-center"><?= $pecah['nama_wed']; ?></td>
                <td class="text-center"><?= $pecah['harga_wed']; ?></td>
                <td class="text-center"><?= $pecah['telp_wed']; ?></td>
                <td><?= $pecah['keterangan_wed']; ?></td>
                <td class="text-center">
                    <img src="images/<?= $pecah['foto_wed']; ?>" width="100px">
                </td>
                <td class="text-center">
                    <a href="admin.php?halaman=hapus_paket_prewed&id=<?= $pecah['id_wed']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="admin.php?halaman=ubah_paket_prewed&id=<?= $pecah['id_wed']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>


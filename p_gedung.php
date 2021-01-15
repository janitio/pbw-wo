<h2>Daftar Paket Gedung</h2>
<div class="text-right">
    <a href="admin.php?halaman=p_gedung_tambah" class="btn btn-primary">Tambah Data</a>
</div>
<hr>

<table class="table table-striped">
    <thead>
        <th width="5%" class="text-center">No</th>
        <th width="20%" class="text-center">Nama Pemilik</th>
        <th width="20%" class="text-center">Alamat</th>
        <th width="10%" class="text-center">Harga (Rp)</th>
        <th width="10%" class="text-center">No. Telpon</th>
        <th width="10%" class="text-center">Kapasitas</th>
        <th width="10%" class="text-center">Gambar</th>
        <th width="30%" class="text-center">Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $hasil = mysqli_query($link, "SELECT * FROM gedung"); ?>
        <?php while ($data = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td class="text-center"><?= $nomor; ?></td>
                <td class="text-center"><?= $data['nama_ged']; ?></td>
                <td><?= $data['alamat_ged']; ?></td>
                <td class="text-center"><?= $data['harga_ged']; ?></td>
                <td class="text-center"><?= $data['telp_ged']; ?></td>
                <td class="text-center"><?= $data['kapasitas_ged']; ?></td>
                <td class="text-center">
                    <img src="images/gedung/<?= $data['foto_ged']; ?>" width="100px">
                </td>
                <td class="text-center">
                    <a href="admin.php?halaman=p_gedung_hps&id=<?= $data['id_ged']; ?>" class="btn btn-danger">hapus
                    </a>
                    <a href="admin.php?halaman=p_gedung_ubah&id=<?= $data['id_ged']; ?>" class="btn btn-warning">ubah
                    </a>
                    
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>
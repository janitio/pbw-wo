<h2><b>PAKET GEDUNG</b></h2>
<div class="text-right">
    <a href="admin.php?halaman=p_gedung_tambah" class="btn btn-success btn-lg">Tambah Data</a>
</div>
<hr>

<table class="table table-striped">
    <thead>
        <th>Paket</th>
        <th>Nama Pemilik</th>
        <th>Alamat</th>
        <th>Harga (Rp)</th>
        <th>No. Telpon</th>
        <th>Kapasitas</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $hasil = mysqli_query($link, "SELECT * FROM gedung"); ?>
        <?php while ($data = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $data['nama_ged']; ?></td>
                <td><?= $data['alamat_ged']; ?></td>
                <td><?= $data['harga_ged']; ?></td>
                <td><?= $data['telp_ged']; ?></td>
                <td><?= $data['kapasitas_ged']; ?></td>
                <td>
                    <img src="images/gedung/<?= $data['foto_ged']; ?>" height="75px" width="100px">
                </td>
                <td>
                    <a href="admin.php?halaman=p_gedung_ubah&id=<?= $data['id_ged']; ?>">
                    <i class='fa fa-edit'></i>
                    </a>
                    <a href="admin.php?halaman=p_gedung_hps&id=<?= $data['id_ged']; ?>">
                    <i class='fa fa-eraser'></i>
                    </a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>
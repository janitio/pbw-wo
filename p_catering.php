<h2>Daftar Paket Catering</h2>
<div class="text-right">
    <a href="admin.php?halaman=p_catering_tambah" class="btn btn-primary">Tambah Data</a>
</div>
<hr>

<table class="table table-striped">
    <thead>
        <th class="text-center" width="5%">No</th>
        <th class="text-center" width="20%">Nama Catering</th>
        <th class="text-center" width="20%">Menu</th>
        <th class="text-center" width="8%">Porsi</th>
        <th class="text-center" width="10%">Harga (Rp)</th>
        <th class="text-center" width="10%">No. Telpon</th>
        <th class="text-center" width="10%">Foto</th>
        <th class="text-center" width="20%">Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $hasil = mysqli_query($link, "SELECT * FROM catering"); ?>
        <?php while ($data = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td class="text-center"><?= $nomor; ?></td>
                <td class="text-center"><?= $data['nama_cat']; ?></td>
                <td><?= nl2br($data['menu_cat']); ?></td>
                <td class="text-center"><?= $data['porsi_cat']; ?></td>
                <td class="text-center"><?= $data['harga_cat']; ?></td>
                <td class="text-center"><?= $data['telp_cat']; ?></td>
                <td class="text-center">
                    <img src="images/catering/<?= $data['foto_cat']; ?>" height="75px" width="100px">
                </td>
                <td class="text-center">
                    <a href="admin.php?halaman=p_catering_hps&id=<?= $data['id_cat']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="admin.php?halaman=p_catering_ubah&id=<?= $data['id_cat']; ?>"class="btn btn-warning">Ubah </a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>


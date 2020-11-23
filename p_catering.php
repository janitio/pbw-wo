<h2><b>PAKET CATERING</b></h2>
<div class="text-right">
    <a href="admin.php?halaman=p_catering_tambah" class="btn btn-success btn-lg">Tambah Data</a>
</div>
<hr>

<table class="table table-striped">
    <thead>
        <th>No</th>
        <th>Nama Catering</th>
        <th>Menu</th>
        <th>Porsi</th>
        <th>Harga (Rp)</th>
        <th>No. Telpon</th>
        <th>Foto</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $hasil = mysqli_query($link, "SELECT * FROM catering"); ?>
        <?php while ($data = mysqli_fetch_assoc($hasil)) { ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $data['nama_cat']; ?></td>
                <td><?= nl2br($data['menu_cat']); ?></td>
                <td><?= $data['porsi_cat']; ?></td>
                <td><?= $data['harga_cat']; ?></td>
                <td><?= $data['telp_cat']; ?></td>
                <td>
                    <img src="images/catering/<?= $data['foto_cat']; ?>" height="75px" width="100px">
                </td>
                <td>
                    <a href="admin.php?halaman=p_catering_ubah&id=<?= $data['id_cat']; ?>">
                    <i class='fa fa-edit'></i>
                    </a>
                    <a href="admin.php?halaman=p_catering_hps&id=<?= $data['id_cat']; ?>">
                    <i class='fa fa-eraser'></i>
                    </a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>
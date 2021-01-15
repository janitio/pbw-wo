<?php
if(!isset($_SESSION['user'])){
    header('Location:index.php');
}
?>
<h2>Galeri Pre-Wedding</h2>
<div class="text-right">
    <a href="admin.php?halaman=galeri_tambah" class="btn btn-primary">Tambah Data</a>
</div><br>
<table class="table table-striped">
    <thead>
        <!-- No, nama penyewa, harga, nomor telpon -->
        <th width="5%" class="text-center">No</th>
        <th width="30%" class="text-center">Tema</th>
        <th width="30%" class="text-center">Keterangan</th>
        <th width="20%" class="text-center">Foto</th>
        <th width="20%" class="text-center">Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = mysqli_query($link, "SELECT * FROM galeri"); ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <tr>
                <td class="text-center"><?= $nomor; ?></td>
                <td class="text-center"><?= $pecah['tema_gal']; ?></td>
                <td><?= $pecah['keterangan_gal']; ?></td>
                <td class="text-center">
                    <img src="images/galeri/<?= $pecah['foto_gal']; ?>" width="100px">
                </td>
                <td class="text-center">
                    <a href="admin.php?halaman=galeri_hapus&id=<?= $pecah['id_gal']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="admin.php?halaman=galeri_ubah&id=<?= $pecah['id_gal']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>
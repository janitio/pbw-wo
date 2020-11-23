<?php
if(!isset($_SESSION['user'])){
        header('Location:index.php');
    }
?>
<h2>Galeri Pre-Wedding</h2>

<table class="table table-bordered">
    <thead>
        <!-- No, nama penyewa, harga, nomor telpon -->
        <th>No</th>
        <th>Tema</th>
        <th>Keterangan</th>
        <th>Foto</th>
        <th>Aksi</th>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = mysqli_query($link, "SELECT * FROM galeri"); ?>
        <?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
            <tr>
                <td><?= $nomor; ?></td>
                <td><?= $pecah['tema_gal']; ?></td>
                <td><?= $pecah['keterangan_gal']; ?></td>
                <td>
                    <img src="images/galeri/<?= $pecah['foto_gal']; ?>" width="100px">
                </td>
                <td>
                    <a href="admin.php?halaman=galeri_hapus&id=<?= $pecah['id_gal']; ?>" class="btn btn-danger">Hapus</a>
                    <a href="admin.php?halaman=galeri_ubah&id=<?= $pecah['id_gal']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++ ?>
        <?php } ?>
    </tbody>
</table>

<a href="admin.php?halaman=galeri_tambah" class="btn btn-primary">Tambah Data</a>
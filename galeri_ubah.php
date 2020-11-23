<?php
$ambil = mysqli_query($link, "SELECT * FROM galeri WHERE id_gal='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>
<h2>Ubah Data Galeri</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tema</label>
        <input type="text" name="tema_gal" class="form-control" value="<?= $pecah['tema_gal']; ?>">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" name="keterangan_gal" class="form-control" value="<?= $pecah['keterangan_gal']; ?>">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img src="images/galeri/<?= $pecah['foto_gal'] ?>" width="100px">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto_gal" class="form-control">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto_gal']['name'];
    $lokasifoto = $_FILES['foto_gal']['tmp_name'];

    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "images/galeri/$namafoto");

        mysqli_query($link, "UPDATE galeri SET tema_gal='$_POST[tema_gal]',keterangan_gal='$_POST[keterangan_gal]',
        foto_gal='$namafoto' WHERE id_gal='$_GET[id]'");
    } else {
        mysqli_query($link, "UPDATE galeri SET tema_gal='$_POST[tema_gal]',keterangan_gal='$_POST[keterangan_gal]'
        WHERE id_gal='$_GET[id]'");
    }

    echo "<script>alert('Data galeri telah di ubah');</script>";
    echo "<script>location='admin.php?halaman=galeri';</script>";
}
?>
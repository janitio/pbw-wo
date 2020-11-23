<h2>Tambah Data Galeri</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Tema</label>
        <input type="text" class="form-control" name="tema_gal">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <input type="text" class="form-control" name="keterangan_gal">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto_gal">
    </div>
    <button class="btn btn-primary" name="tambah">Tambah</button>
</form>
<?php
if (isset($_POST['tambah'])) {
    $namafoto = $_FILES['foto_gal']['name'];
    $lokasifoto = $_FILES['foto_gal']['tmp_name'];
    move_uploaded_file($lokasifoto, "images/galeri/$namafoto");
    mysqli_query($link, "INSERT INTO galeri(tema_gal,keterangan_gal,foto_gal) VALUES('$_POST[tema_gal]','$_POST[keterangan_gal]','$namafoto')");

    echo "<script>alert('Data Tersimpan');</script>";
    echo "<script>location='admin.php?halaman=galeri';</script>";
}
?>
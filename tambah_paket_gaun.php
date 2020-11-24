<h2>Tambah Paket Gaun</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Model Gaun</label>
        <input type="text" class="form-control" name="nama_model">
    </div>
    <div class="form-group">
        <label>Nama Pemilik Gaun</label>
        <input type="text" class="form-control" name="nama_pemilik">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>No. Telpon</label>
        <input type="number" class="form-control" name="telp">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <div class="text-right">
        <button class="btn btn-success" name="tambah">Tambah</button>
    </div>
</form>
<?php
if (isset($_POST['tambah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "images/$namafoto");
    mysqli_query($link, "INSERT INTO gaun(model_gaun,pemilik_gaun,harga_gaun,telp_gaun,
    foto_gaun) VALUES('$_POST[nama_model]','$_POST[nama_pemilik]','$_POST[harga]',
    '$_POST[telp]','$namafoto')");

    echo "<script>alert('Data Tersimpan');</script>";
    echo "<script>location='admin.php?halaman=paket_gaun';</script>";
}
?>
<h2 style="text-align: center;">Tambah Paket Gedung</h2>
<hr>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Pemilik Gedung</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Alamat Gedung</label>
        <textarea type="text" class="form-control" name="alamat" cols="20" rows="5"></textarea>
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga">
    </div>
    <div class="form-group">
        <label>No. Telepon</label>
        <input type="text" class="form-control" name="telp">
    </div>
    <div class="form-group">
        <label>Kapasitas</label>
        <input type="number" class="form-control" name="kps">
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
    move_uploaded_file($lokasifoto, "images/gedung/$namafoto");
    mysqli_query($link, "INSERT INTO gedung(nama_ged,alamat_ged,harga_ged,telp_ged,
    kapasitas_ged,foto_ged) VALUES('$_POST[nama]','$_POST[alamat]','$_POST[harga]','$_POST[telp]',
    '$_POST[kps]','$namafoto')");

    echo "<script>alert('Data Tersimpan');</script>";
    echo "<script>location='admin.php?halaman=p_gedung';</script>";
}
?>
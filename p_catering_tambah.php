<h2 style="text-align: center;">Tambah Paket Catering</h2>
<hr>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Catering</label>
        <input type="text" class="form-control" name="nama">
    </div>
    <div class="form-group">
        <label>Menu</label>
        <textarea name="menu" cols="30" rows="5" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Porsi</label>
        <input type="number" class="form-control" name="porsi">
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
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>

    <div class="text-right">
        <button class="btn btn-success" name="tambah">Tambah</button>
        <input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-secondary">
    </div>

</form>
<?php
if (isset($_POST['tambah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "images/catering/$namafoto");
    mysqli_query($link, "INSERT INTO catering(nama_cat,menu_cat,porsi_cat,harga_cat,telp_cat,
    foto_cat) VALUES('$_POST[nama]','$_POST[menu]','$_POST[porsi]','$_POST[harga]','$_POST[telp]','$namafoto')");

    echo "<script>alert('Data Tersimpan');</script>";
    echo "<script>location='admin.php?halaman=p_catering';</script>";
}
?>
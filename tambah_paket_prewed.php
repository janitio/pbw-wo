<h2>Tambah Paket Pre-Wedding</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Paket Pre-Wedding</label>
        <input type="text" class="form-control" name="nama">
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
        <label>Keterangan</label>
        <textarea name="ket" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto">
    </div>
    <button class="btn btn-primary" name="tambah">Tambah</button>
</form>
<?php
if (isset($_POST['tambah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    move_uploaded_file($lokasifoto, "images/$namafoto");
    mysqli_query($link, "INSERT INTO wedding(nama_wed,harga_wed,telp_wed,
    keterangan_wed,foto_wed) VALUES('$_POST[nama]','$_POST[harga]','$_POST[telp]',
    '$_POST[ket]','$namafoto')");

    echo "<script>alert('Data Tersimpan');</script>";
    echo "<script>location='admin.php?halaman=paket_prewed';</script>";
}
?>
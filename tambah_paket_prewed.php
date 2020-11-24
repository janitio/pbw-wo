<h2>Tambah Paket Pre-Wedding</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Paket Pre-Wedding</label>
        <input type="text" class="form-control" name="nama_wed">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" class="form-control" name="harga_wed">
    </div>
    <div class="form-group">
        <label>No. Telpon</label>
        <input type="number" class="form-control" name="telp_wed">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <textarea name="keterangan_wed" cols="30" rows="10" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <input type="file" class="form-control" name="foto_wed">
    </div>
    <div class="text-right">
        <button class="btn btn-success" name="tambah">Tambah</button>
    </div>
</form>
<?php
if (isset($_POST['tambah'])) {
    $namafoto = $_FILES['foto_wed']['name'];
    $lokasifoto = $_FILES['foto_wed']['tmp_name'];
    move_uploaded_file($lokasifoto, "images/$namafoto");
    mysqli_query($link, "INSERT INTO wedding(nama_wed,harga_wed,telp_wed,
    keterangan_wed,foto_wed) VALUES('$_POST[nama_wed]','$_POST[harga_wed]','$_POST[telp_wed]',
    '$_POST[keterangan_wed]','$namafoto')");

    echo "<script>alert('Data Tersimpan');</script>";
    echo "<script>location='admin.php?halaman=paket_prewed';</script>";
}
?>
<?php
$ambil = mysqli_query($link, "SELECT * FROM gaun WHERE id_gaun='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>
<h2>Ubah Paket Gaun</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Model Gaun</label>
        <input type="text" name="nama_model" class="form-control" value="<?= $pecah['model_gaun']; ?>">
    </div>
    <div class="form-group">
        <label>Nama Pemilik Gaun</label>
        <input type="text" name="nama_pemilik" class="form-control" value="<?= $pecah['pemilik_gaun']; ?>">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="<?= $pecah['harga_gaun']; ?>">
    </div>
    <div class="form-group">
        <label>No. Telpon</label>
        <input type="number" name="telp" class="form-control" value="<?= $pecah['telp_gaun']; ?>">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img src="images/<?= $pecah['foto_gaun'] ?>" width="100px">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "images/$namafoto");

        mysqli_query($link, "UPDATE gaun SET model_gaun='$_POST[nama_model]',pemilik_gaun='$_POST[nama_pemilik]',
        harga_gaun='$_POST[harga]',telp_gaun='$_POST[telp]',
        foto_gaun='$namafoto' WHERE id_gaun='$_GET[id]'");
    } else {
        mysqli_query($link, "UPDATE gaun SET model_gaun='$_POST[nama_model]',pemilik_gaun='$_POST[nama_pemilik]',
        harga_gaun='$_POST[harga]',telp_gaun='$_POST[telp]'
        WHERE id_gaun='$_GET[id]'");
    }

    echo "<script>alert('Data paket gaun telah di ubah');</script>";
    echo "<script>location='admin.php?halaman=paket_gaun';</script>";
}
?>
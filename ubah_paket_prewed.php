<?php
$ambil = mysqli_query($link, "SELECT * FROM wedding WHERE id_wed='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>
<h2>Ubah Paket Pre-Wedding</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Prewedding</label>
        <input type="text" name="nama" class="form-control" value="<?= $pecah['nama_wed']; ?>">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="<?= $pecah['harga_wed']; ?>">
    </div>
    <div class="form-group">
        <label>No. Telpon</label>
        <input type="number" name="telp" class="form-control" value="<?= $pecah['telp_wed']; ?>">
    </div>
    <div class="form-group">
        <label>Keterangan</label>
        <textarea name="ket" cols="30" rows="10" class="form-control">
            <?= $pecah['keterangan_wed'] ?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img src="images/<?= $pecah['foto_wed'] ?>" width="100px">
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

        mysqli_query($link, "UPDATE wedding SET nama_wed='$_POST[nama]',
        harga_wed='$_POST[harga]',telp_wed='$_POST[telp]',keterangan_wed='$_POST[ket]',
        foto_wed='$namafoto' WHERE id_wed='$_GET[id]'");
    } else {
        mysqli_query($link, "UPDATE wedding SET nama_wed='$_POST[nama]',
        harga_wed='$_POST[harga]',telp_wed='$_POST[telp]',keterangan_wed='$_POST[ket]' 
        WHERE id_wed='$_GET[id]'");
    }

    echo "<script>alert('Data paket prewedding telah di ubah');</script>";
    echo "<script>location='admin.php?halaman=paket_prewed';</script>";
}
?>
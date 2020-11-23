<?php
$ambil = mysqli_query($link, "SELECT * FROM partner WHERE id_part='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>
<h2>Ubah Data Partner</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama_part" class="form-control" value="<?= $pecah['nama_part']; ?>">
    </div>
    <div class="form-group">
        <label>Paket yang Disediakan</label>
        <input type="text" name="paket_part" class="form-control" value="<?= $pecah['paket_part']; ?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat_part" class="form-control" value="<?= $pecah['alamat_part']; ?>">
    </div>
    <div class="form-group">
        <label>No.Telepon</label>
        <input type="text" name="telp_part" class="form-control" value="<?= $pecah['telp_part']; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email_part" class="form-control" value="<?= $pecah['email_part']; ?>">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img src="images/partner/<?= $pecah['foto_part'] ?>" width="100px">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto_part" class="form-control">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto_part']['name'];
    $lokasifoto = $_FILES['foto_part']['tmp_name'];

    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "images/partner/$namafoto");

        mysqli_query($link, "UPDATE partner SET nama_part='$_POST[nama_part]',paket_part='$_POST[paket_part]',alamat_part='$_POST[alamat_part]',telp_part='$_POST[telp_part]',email_part='$_POST[email_part]',
        foto_part='$namafoto' WHERE id_part='$_GET[id]'");
    } else {
        mysqli_query($link, "UPDATE partner SET nama_part='$_POST[nama_part]',paket_part='$_POST[paket_part]',alamat_part='$_POST[alamat_part]',telp_part='$_POST[telp_part]',email_part='$_POST[email_part]'
        WHERE id_part='$_GET[id]'");
    }

    echo "<script>alert('Data partner telah di ubah');</script>";
    echo "<script>location='admin.php?halaman=partner';</script>";
}
?>
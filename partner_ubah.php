<?php
$ambil = mysqli_query($link, "SELECT * FROM partner_join WHERE id_partjoin='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);

echo "<pre>";
print_r($pecah);
echo "</pre>";

?>
<h2>Ubah Data Partner</h2>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama</label>
        <input type="text" name="nama_partjoin" class="form-control" value="<?= $pecah['nama_partjoin']; ?>">
    </div>
    <div class="form-group">
        <label>Paket yang Disediakan</label>
        <input type="text" name="paket_partjoin" class="form-control" value="<?= $pecah['paket_partjoin']; ?>">
    </div>
    <div class="form-group">
        <label>Alamat</label>
        <input type="text" name="alamat_partjoin" class="form-control" value="<?= $pecah['alamat_partjoin']; ?>">
    </div>
    <div class="form-group">
        <label>No.Telepon</label>
        <input type="text" name="telp_partjoin" class="form-control" value="<?= $pecah['telp_partjoin']; ?>">
    </div>
    <div class="form-group">
        <label>Email</label>
        <input type="text" name="email_partjoin" class="form-control" value="<?= $pecah['email_partjoin']; ?>">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img src="images/partner/<?= $pecah['foto_partjoin'] ?>" width="100px">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto_partjoin" class="form-control">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto_partjoin']['name'];
    $lokasifoto = $_FILES['foto_partjoin']['tmp_name'];

    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "images/partner/$namafoto");

        mysqli_query($link, "UPDATE partner_join SET nama_partjoin='$_POST[nama_partjoin]',paket_partjoin='$_POST[paket_partjoin]',alamat_partjoin='$_POST[alamat_partjoin]',telp_partjoin='$_POST[telp_partjoin]',email_partjoin='$_POST[email_partjoin]',
        foto_partjoin='$namafoto' WHERE id_partjoin='$_GET[id]'");
    } else {
        mysqli_query($link, "UPDATE partner_join SET nama_partjoin='$_POST[nama_partjoin]',paket_partjoin='$_POST[paket_partjoin]',alamat_partjoin='$_POST[alamat_partjoin]',telp_partjoin='$_POST[telp_partjoin]',email_partjoin='$_POST[email_partjoin]'
        WHERE id_partjoin='$_GET[id]'");
    }

    echo "<script>alert('Data partner telah di ubah');</script>";
    echo "<script>location='admin.php?halaman=partner';</script>";
}
?>
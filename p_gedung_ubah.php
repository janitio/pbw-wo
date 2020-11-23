<?php
$hasil = mysqli_query($link, "SELECT * FROM gedung WHERE id_ged='$_GET[id]'");
$data = mysqli_fetch_assoc($hasil);

?>
<h2 style="text-align: center;">Ubah Paket Gedung</h2>
<hr>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Pemilik Gedung</label>
        <input type="text" name="nama" class="form-control" value="<?= $data['nama_ged']; ?>">
    </div>
    <div class="form-group">
        <label>Alamat Gedung</label>
        <input type="text" name="alamat" class="form-control" value="<?= $data['alamat_ged']; ?>">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="<?= $data['harga_ged']; ?>">
    </div>
    <div class="form-group">
        <label>No. Telepon</label>
        <input type="text" name="telp" class="form-control" value="<?= $data['telp_ged']; ?>">
    </div>
    <div class="form-group">
        <label>Kapasitas</label>
        <input type="number" name="kps" class="form-control" value="<?= $data['kapasitas_ged']; ?>">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img src="images/gedung/<?= $data['foto_ged'] ?>" height="75px" width="100px">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>

    <div class="text-right">
        <button class="btn btn-success" name="ubah">Ubah</button>
        <input type="button" name="kembali" value="Kembali" onClick="javascript:history.back()" class="btn btn-secondary">
    </div>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];

    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "images/gedung/$namafoto");

        mysqli_query($link, "UPDATE gedung SET nama_ged='$_POST[nama]',alamat_ged='$_POST[alamat]',
        harga_ged='$_POST[harga]',telp_ged='$_POST[telp]',kapasitas_ged='$_POST[kps]',
        foto_ged='$namafoto' WHERE id_ged='$_GET[id]'");
    } else {
        mysqli_query($link, "UPDATE gedung SET nama_ged='$_POST[nama]',alamat_ged='$_POST[alamat]',
        harga_ged='$_POST[harga]',telp_ged='$_POST[telp]',kapasitas_ged='$_POST[kps]'
        WHERE id_ged='$_GET[id]'");
    }

    echo "<script>alert('Data paket gedung telah di ubah');</script>";
    echo "<script>location='admin.php?halaman=p_gedung';</script>";
}
?>
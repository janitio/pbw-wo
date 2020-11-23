<?php
$hasil = mysqli_query($link, "SELECT * FROM catering WHERE id_cat='$_GET[id]'");
$data = mysqli_fetch_assoc($hasil);

?>
<h2 style="text-align: center;">Ubah Paket Catering</h2>
<hr>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama Catering</label>
        <input type="text" name="nama" class="form-control" value="<?= $data['nama_cat']; ?>">
    </div>
    <div class="form-group">
        <label>Menu</label>
        <textarea name="menu" cols="30" rows="5" class="form-control">
            <?= $data['menu_cat'] ?>
        </textarea>
    </div>
    <div class="form-group">
        <label>Porsi</label>
        <input type="number" name="porsi" class="form-control" value="<?= $data['porsi_cat']; ?>">
    </div>
    <div class="form-group">
        <label>Harga (Rp)</label>
        <input type="number" name="harga" class="form-control" value="<?= $data['harga_cat']; ?>">
    </div>
    <div class="form-group">
        <label>No. Telepon</label>
        <input type="text" name="telp" class="form-control" value="<?= $data['telp_cat']; ?>">
    </div>
    <div class="form-group">
        <label>Foto</label>
        <img src="images/catering/<?= $data['foto_cat'] ?>" height="75px" width="100px">
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
        move_uploaded_file($lokasifoto, "images/catering/$namafoto");

        mysqli_query($link, "UPDATE catering SET nama_cat='$_POST[nama]',menu_cat='$_POST[menu]',
        porsi_cat='$_POST[porsi]', harga_cat='$_POST[harga]',telp_cat='$_POST[telp]',
        foto_cat='$namafoto' WHERE id_cat='$_GET[id]'");
    } else {
        mysqli_query($link, "UPDATE catering SET nama_cat='$_POST[nama]',menu_cat='$_POST[menu]',
        porsi_cat='$_POST[porsi]',harga_cat='$_POST[harga]',telp_cat='$_POST[telp]'
        WHERE id_cat='$_GET[id]'");
    }
    echo "<script>alert('Data paket Catering telah di ubah');</script>";
    echo "<script>location='admin.php?halaman=p_catering';</script>";
}
?>
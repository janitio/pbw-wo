<?php
$ambil = mysqli_query($link, "SELECT * FROM partner_join WHERE id_partjoin='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);
$foto = $pecah['foto_partjoin'];
if (file_exists("images/partner/$foto")) {
    unlink("images/partner/$foto");
}

mysqli_query($link, "DELETE FROM partner_join WHERE id_partjoin='$_GET[id]'");

echo "<script>alert('data partner terhapus')</script>";
echo "<script>location='admin.php?halaman=partner'</script>";

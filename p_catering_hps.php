<?php
$hasil = mysqli_query($link, "SELECT * FROM catering WHERE id_cat='$_GET[id]'");
$data = mysqli_fetch_assoc($hasil);
$foto = $data['foto_cat'];
if (file_exists("images/catering/$foto")) {
    unlink("images/catering/$foto");
}

mysqli_query($link, "DELETE FROM catering WHERE id_cat='$_GET[id]'");

echo "<script>alert('Paket Catering Telah Terhapus')</script>";
echo "<script>location='admin.php?halaman=p_catering'</script>";

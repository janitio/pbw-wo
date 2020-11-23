<?php
$hasil = mysqli_query($link, "SELECT * FROM gedung WHERE id_ged='$_GET[id]'");
$data = mysqli_fetch_assoc($hasil);
$foto = $data['foto_ged'];
if (file_exists("images/gedung/$foto")) {
    unlink("images/gedung/$foto");
}

mysqli_query($link, "DELETE FROM gedung WHERE id_ged='$_GET[id]'");

echo "<script>alert('Paket Gedung Telah Terhapus')</script>";
echo "<script>location='admin.php?halaman=p_gedung'</script>";

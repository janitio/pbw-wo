<?php
$ambil = mysqli_query($link, "SELECT * FROM gaun WHERE id_gaun='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);
$foto = $pecah['foto_gaun'];
if (file_exists("images/$foto")) {
    unlink("images/$foto");
}

mysqli_query($link, "DELETE FROM gaun WHERE id_gaun='$_GET[id]'");

echo "<script>alert('paket gaun terhapus')</script>";
echo "<script>location='admin.php?halaman=paket_gaun'</script>";

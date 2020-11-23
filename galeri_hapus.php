<?php
$ambil = mysqli_query($link, "SELECT * FROM galeri WHERE id_gal='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);
$foto = $pecah['foto_gal'];
if (file_exists("images/galeri/$foto")) {
    unlink("images/galeri/$foto");
}

mysqli_query($link, "DELETE FROM galeri WHERE id_gal='$_GET[id]'");

echo "<script>alert('data galeri terhapus')</script>";
echo "<script>location='admin.php?halaman=galeri'</script>";

<?php 
$ambil = mysqli_query($link, "SELECT * FROM wedding WHERE id-wed='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);
$foto = $pecah['foto-wed'];
if (file_exists("images/$foto")) {
    unlink("images/$foto");
}

mysqli_query($link, "DELETE FROM wedding WHERE id-wed='$_GET[id]'");

echo "<script>alert('paket pre-wedding terhapus')</script>";
echo "<script>location='admin.php?halaman=paket-prewed'</script>";

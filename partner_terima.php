<?php
$ambil = mysqli_query($link, "SELECT * FROM partner WHERE id_part='$_GET[id]'");

$sql = "INSERT INTO wed_org.partner_join SELECT * FROM wed_org.partner;";
mysqli_query($link,$sql);

$sql2 = "DELETE FROM partner WHERE id_part='$_GET[id]'";
mysqli_query($link,$sql2);

echo "<script>location='admin.php?halaman=partner'</script>";

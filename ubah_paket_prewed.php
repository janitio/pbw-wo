<?php
$ambil = mysqli_query($link, "SELECT * FROM wedding WHERE id_wed='$_GET[id]'");
$pecah = mysqli_fetch_assoc($ambil);

echo "<pre>";
print_r($pecah);
echo "</pre>";

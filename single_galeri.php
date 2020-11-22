<?php 
require_once "core/init.php";

if(!isset($_SESSION['user'])){
    header('Location:index.php');
}
$kode_galeri=$_GET['id_gal'];
if(isset($_GET['id_gal'])){
    $single_galeri=single_galeri($kode_galeri);
    while($row=mysqli_fetch_assoc($single_galeri)){
        $tema_gal=$row['tema_gal'];
        $keterangan_gal=$row['keterangan_gal'];
        $foto_gal=$row['foto_gal'];
    }
}  
if(isset($_POST['hapus_galeri'])){
    $id_gal=$_GET['id_gal'];
    if(hapus_galeri($id_gal)){
        header("location:galeri.php");
    }else{
        echo'ada masalah saat menghapus data';                
    }
}
if(isset($_POST['kembali'])){
    header("location:galeri.php");
}
?>
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Konfirmasi Hapus Partner</title>
</head>
<body>

    <form action="" method="post">
        <div class="container"><br><br>
           <div>
            <p id="judul" name="judul">
                Tema : <?=$tema_gal;?>
            </p>
        </div>
        <div>
            <p id="judul" name="judul">
                Keterangan : <?=$keterangan_gal;?>
            </p>
        </div>
        <div>
            <p id="gambar" name="foto_part">
                Foto :<br> <?="<img src='images/galeri/".$foto_gal."'style='width:300px; height:300px;'>"?>
            </p>
        </div>
        <br> 
        <p>Anda yakin menghapus ini?</p> 
        <button class="btn btn-info my-2 my-sm-0" type="submit" name="kembali" >tidak</button>
        <button class="btn btn-danger my-2 my-sm-0" type="submit" name="hapus_galeri" >ya</button><br><br>
    </div>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
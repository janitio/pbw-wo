<?php 
require_once "core/init.php";

if(!isset($_SESSION['user'])){
    header('Location:index.php');
}
$kode_partner=$_GET['id_part'];
if(isset($_GET['id_part'])){
    $single_partner=single_partner($kode_partner);
    while($row=mysqli_fetch_assoc($single_partner)){
        $nama_part=$row['nama_part'];
        $email_part=$row['email_part'];
        $telp_part=$row['telp_part'];
        $alamat_part=$row['alamat_part'];
        $paket_part=$row['paket_part'];
        $foto_part=$row['foto_part'];
    }
}  
if(isset($_POST['hapus_partner'])){
    $id_partner=$_GET['id_part'];
    if(hapus_partner($id_partner)){
        header("location:partner.php");
    }else{
        echo'ada masalah saat menghapus data';                
    }
}
if(isset($_POST['kembali'])){
    header("location:partner.php");
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
                Nama : <?=$nama_part;?>
            </p>
        </div>
        <div>
            <p id="judul" name="judul">
                Paket : <?=$paket_part;?>
            </p>
        </div>
        <div>
            <p id="deskripsi" name="deskripsi">
                Email : <?=$email_part;?>
            </p>
        </div>
        <div>
            <p id="tag" name="tag">
                No.Telepon : <?=$telp_part;?>
            </p>
        </div>
        <div>
            <p id="tag" name="tag">
                Alamat : <?=$alamat_part;?>
            </p>
        </div>
        <div>
            <p id="gambar" name="foto_part">
                Gambar :<br> <?="<img src='images/partner/".$foto_part."'style='width:300px; height:300px;'>"?>
            </p>
        </div>
        <br> 
        <p>Anda yakin menghapus ini?</p> 
        <button class="btn btn-info my-2 my-sm-0" type="submit" name="kembali" >tidak</button>
        <button class="btn btn-danger my-2 my-sm-0" type="submit" name="hapus_partner" >ya</button><br><br>
    </div>
</form>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>
</html>
<?php
function escape($data){
    global $link;
    return mysqli_real_escape_string($link,$data);
}
function tambah_partner($nama_part,$email_part,$telp_part,$alamat_part,$paket_part,$foto_part){
    $nama_part=escape($nama_part);
    $email_part=escape($email_part);
    $telp_part=escape($telp_part);
    $alamat_part=escape($alamat_part);
    $paket_part=escape($paket_part);
    $query="INSERT INTO partner(nama_part,paket_part,alamat_part,telp_part,email_part,foto_part) VALUES('$nama_part','$paket_part','$alamat_part','$telp_part','$email_part','$foto_part')";
    return run($query);
}	
function tampil_partner(){
    global $link;
    $query="SELECT * FROM partner_join";
    return result($query);
    } 
function run($query){
    global $link;

    if(mysqli_query($link,$query)) return true;
}
function result($query){
    global $link;
    if($result=mysqli_query($link,$query)or die('gagal menampilkan data')){
        return $result;
    }
}
function hapus_partner($id_partner){
    $query="DELETE FROM partner WHERE id_part='$id_partner'";
 return run($query);
}
function cek_partner($ambil2){
    global $link;
    $query="SELECT * FROM partner";
    if($result=mysqli_query($link,$query)){
        if(mysqli_num_rows($result)!=0)return true;
            else return false;
        }
    }
function cek_partnerjoin($ambil){
    global $link;
    $query="SELECT * FROM partner_join";
    if($result=mysqli_query($link,$query)){
        if(mysqli_num_rows($result)!=0)return true;
            else return false;
        }
    }
?>
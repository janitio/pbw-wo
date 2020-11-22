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
    $query="SELECT * FROM partner";
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
function single_partner($kode_partner){
        $query="SELECT * FROM partner WHERE id_part=$kode_partner";
    return result($query);
}
function hapus_partner($id_partner){
    $query="DELETE FROM partner WHERE id_part='$id_partner'";
 return run($query);
}
?>
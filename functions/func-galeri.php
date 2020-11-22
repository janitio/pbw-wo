<?php
function tambah_galeri($tema_gal,$keterangan_gal,$foto_gal){
    $tema_gal=escape($tema_gal);
    $keterangan_gal=escape($keterangan_gal);
    $query="INSERT INTO galeri(tema_gal,keterangan_gal,foto_gal) VALUES('$tema_gal','$keterangan_gal','$foto_gal')";
    return run($query);
}
function tampil_galeri(){
    global $link;
    $query="SELECT * FROM galeri";
    return result($query);
    } 
function single_galeri($kode_galeri){
        $query="SELECT * FROM galeri WHERE id_gal='$kode_galeri'";
    return result($query);
}
function hapus_galeri($id_gal){
    $query="DELETE FROM galeri WHERE id_gal='$id_gal'";
 return run($query);
}
?>
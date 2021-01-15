<?php
function cek_data_name($nama, $pass)
{
    global $link;
    $query = "SELECT username FROM admin WHERE password='$pass'";
    if ($result = mysqli_query($link, $query)) {
        if (mysqli_num_rows($result) != 0) return true;
        else return false;
    }
}
function cek_data_pass($nama, $pass)
{
    global $link;
    $query = "SELECT password FROM admin WHERE username='$nama'";
    if ($result = mysqli_query($link, $query)) {
        if (mysqli_num_rows($result) != 0) return true;
        else return false;
    }
}
function red_login($nama)
{
    $_SESSION['user'] = $nama;
    header('Location:admin.php?halaman=home.php');
}
function tampil_user($user)
{
    global $link;
    $query = "SELECT * FROM admin WHERE username='$user'";
    $e = mysqli_query($link, $query);
    // hitung hasil dan cek ada atau tidaknya data
    $is_exist = mysqli_num_rows($e);
    if ($is_exist > 0) {
        // keluarkan hasil
        $r = mysqli_fetch_assoc($e);
        $_SESSION['username'] = $r['username']; // set session untuk nama
    } else {
        die('username tidak ditemukan');
    }
}

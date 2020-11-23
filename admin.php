<?php
require_once "core/init.php";

if (!isset($_SESSION['user'])) {
  header('Location:index.php');
}
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Website Wedding Organizer</title>
  <!-- BOOTSTRAP STYLES-->
  <link href="admin/assets/css/bootstrap.css" rel="stylesheet" />
  <!-- FONTAWESOME STYLES-->
  <link href="admin/assets/css/font-awesome.css" rel="stylesheet" />
  <!-- MORRIS CHART STYLES-->
  <link href="admin/assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
  <!-- CUSTOM STYLES-->
  <link href="admin/assets/css/custom.css" rel="stylesheet" />
  <!-- GOOGLE FONTS-->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="admin.php">Wedding Organizer</a>
      </div>
      <div style="color: white;
      padding: 15px 50px 5px 50px;
      float: right;
      font-size: 16px;"> Terakhir Akses : <?php date_default_timezone_set('Asia/Jakarta');
      echo date('d-m-Y H:i:s'); ?> &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Keluar</a> </div>
    </nav>
    <!-- /. NAV TOP  -->
    <nav class="navbar-default navbar-side" role="navigation">
      <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
          <li class="text-center">
          </li>
          <li>
            <a class="active-menu" href="admin.php?halaman=home.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
          </li>
          <li>
            <a href="admin.php?halaman=paket_prewed"><i class="fa fa-newspaper-o fa-3x"></i> Paket Pre-Wedding </a>
          </li>
          <li>
            <a href="admin.php?halaman=p_catering"><i class="fa fa-newspaper-o fa-3x"></i> Paket Catering </a>
          </li>
          <li>
            <a href="admin.php?halaman=paket_gaun"><i class="fa fa-newspaper-o fa-3x"></i> Paket Gaun </a>
          </li>
          <li>
            <a href="admin.php?halaman=p_gedung"><i class="fa fa-newspaper-o fa-3x"></i> Paket Gedung </a>
          </li>
          <li>
            <a href="admin.php?halaman=galeri"><i class="fa fa-newspaper-o fa-3x"></i> Galeri </a>
          </li>
          <li>
            <a href="admin.php?halaman=partner"><i class="fa fa-newspaper-o fa-3x"></i> Partner </a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
      <div id="page-inner">
        <div class="row">
          <div class="col-md-12">
            <?php
            if (isset($_GET['halaman'])) {
              if ($_GET['halaman'] == "paket_prewed") {
                include 'paket_prewed.php';
              } elseif ($_GET['halaman'] == "paket_gaun") {
                include 'paket_gaun.php';
              } elseif ($_GET['halaman'] == "hapus_paket_prewed") {
                include 'hapus_paket_prewed.php';
              } elseif ($_GET['halaman'] == "ubah_paket_prewed") {
                include 'ubah_paket_prewed.php';
              } elseif ($_GET['halaman'] == "tambah_paket_prewed") {
                include 'tambah_paket_prewed.php';
              } elseif ($_GET['halaman'] == "hapus_paket_gaun") {
                include 'hapus_paket_gaun.php';
              } elseif ($_GET['halaman'] == "ubah_paket_gaun") {
                include 'ubah_paket_gaun.php';
              } elseif ($_GET['halaman'] == "tambah_paket_gaun") {
                include 'tambah_paket_gaun.php';

              } elseif ($_GET['halaman'] == "p_gedung") {
                include 'p_gedung.php';
              } elseif ($_GET['halaman'] == "p_gedung_ubah") {
                include 'p_gedung_ubah.php';
              } elseif ($_GET['halaman'] == "p_gedung_tambah") {
                include 'p_gedung_tambah.php';
              } elseif ($_GET['halaman'] == "p_gedung_hps") {
                include 'p_gedung_hps.php';

              } elseif ($_GET['halaman'] == "p_catering") {
                include 'p_catering.php';
              } elseif ($_GET['halaman'] == "p_catering_ubah") {
                include 'p_catering_ubah.php';
              } elseif ($_GET['halaman'] == "p_catering_tambah") {
                include 'p_catering_tambah.php';
              } elseif ($_GET['halaman'] == "p_catering_hps") {
                include 'p_catering_hps.php';

              } elseif ($_GET['halaman'] == "galeri") {
                include 'galeri.php';
              } elseif ($_GET['halaman'] == "galeri_ubah") {
                include 'galeri_ubah.php';
              } elseif ($_GET['halaman'] == "galeri_tambah") {
                include 'galeri_tambah.php';
              } elseif ($_GET['halaman'] == "galeri_hapus") {
                include 'galeri_hapus.php';

              } elseif ($_GET['halaman'] == "partner") {
                include 'partner.php';
              } elseif ($_GET['halaman'] == "partner_ubah") {
                include 'partner_ubah.php';
              } elseif ($_GET['halaman'] == "partner_tambah") {
                include 'partner_tambah.php';
              } elseif ($_GET['halaman'] == "partner_hapus") {
                include 'partner_hapus.php';

              } else {
                include 'home.php';
              }
            }
            ?>
          </div>
        </div>
        <!-- /. ROW  -->
        <hr />
        <!-- /. PAGE INNER  -->
      </div>
      <!-- /. PAGE WRAPPER  -->
    </div>
  </div>
  <!-- /. WRAPPER  -->
  <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
  <!-- JQUERY SCRIPTS -->
  <script src="assets/js/jquery-1.10.2.js"></script>
  <!-- BOOTSTRAP SCRIPTS -->
  <script src="assets/js/bootstrap.min.js"></script>
  <!-- METISMENU SCRIPTS -->
  <script src="assets/js/jquery.metisMenu.js"></script>
  <!-- MORRIS CHART SCRIPTS -->
  <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
  <script src="assets/js/morris/morris.js"></script>
  <!-- CUSTOM SCRIPTS -->
  <script src="assets/js/custom.js"></script>
</body>

</html>
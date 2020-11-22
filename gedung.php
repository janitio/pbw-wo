<?php
require_once"core/init.php";
require_once"view/header.php";
?>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6>GEDUNG</h6>
      <p> Foto - foto Pre Wedding Yang Bisa Menjadi Inspirasi Anda</p>    </div>
    </div>
  </section>
  <!-- intro section --> 
  <!-- services section -->
  <!-- services section --> 
  <!-- work section -->
  <section id="works" class="works section no-padding">
    <div class="container-fluid">
      <div class="row no-gutter">
<?php 
$ambil = mysqli_query($link, "SELECT * FROM gedung");
while ($pergedung = mysqli_fetch_assoc($ambil)) { 
?>
        <div class="col-lg-3 col-md-6 col-sm-6 work" style="">
          <a href="" class="work-box"> <img src="images/gedung/<?= $pergedung['foto_ged'] ?>" height="150px" width="200px"alt="">
          <div class="overlay">
            <div class="overlay-caption">
              <h5><?= $pergedung['nama_ged']; ?></h5>
              <p><?= $pergedung['alamat_ged']; ?></p>
              <p>Harga Rp. <?= number_format($pergedung['harga_ged']); ?></p>
              <p>Kapasitas <?= $pergedung['kapasitas_ged']; ?> orang</p>
            </div>
          </div>
          <!-- overlay --> 
        </a>
      </div>
      </div>
    </div>
  </section>

  <?php 
  }
  require_once "view/footer.php"?>
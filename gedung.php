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
    </div>
  </section>
  <!-- work section -->
  <section id="daftar" class="daftar section no-padding">
    <div class="container-fluid bg-info">
      <div class="row"><?php 
      $ambil = mysqli_query($link, "SELECT * FROM gedung");
      while ($perged = mysqli_fetch_assoc($ambil)) { 
        ?>
        <div class="col-lg-3 col-md-6 col-sm-6 work">
          <a class="work-box"> 
          <?="<img src='images/gedung/".$perged['foto_ged']."'style='width:300px; height:300px;'>"?>
          <div class="overlay">
            <div class="overlay-caption">
              <h5><?= $perged['nama_ged'];?></h5>
              <p>Alamat : <?= $perged['alamat_ged'];?></p>
              <!-- <p>Harga : Mulai dari Rp. <?= $perged{'harga_ged'};?></p> -->
              <p>Harga : Mulai dari Rp. <?= number_format($perged['harga_ged'], 2, ',', '.');?></p>
              <p>No.Telepon : <?= $perged['telp_ged'];?></p>
              <p>Kapasitas : <?= $perged['kapasitas_ged'];?> orang</p>
            </div>
          </div>
          <!-- overlay --> 
        </a> </div>
      <?php }?>
    </div>
  </div>
</section>


<?php 

require_once "view/footer.php"?>
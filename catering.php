<?php
require_once"core/init.php";
require_once"view/header.php";
?>
<!-- header section --> 
<!-- intro section -->
<section id="intro" class="section intro">
  <div class="container">
    <div class="col-md-8 col-md-offset-2 text-center">
      <h6>CATERING</h6>
    </div>
  </section>
  <!-- work section -->
  <section id="daftar" class="daftar section no-padding">
    <div class="container-fluid bg-info">
      <div class="row"><?php 
      $ambil = mysqli_query($link, "SELECT * FROM catering");
      while ($percat = mysqli_fetch_assoc($ambil)) { 
        ?>
        <div class="col-lg-3 col-md-6 col-sm-6 work"><a class="work-box"> 
          <?="<img src='images/catering/".$percat['foto_cat']."'style='width:300px; height:300px;'>"?>
          <div class="overlay">
            <div class="overlay-caption">
              <h5><?= $percat['nama_cat'];?></h5>
              <p>Menu : <?= $percat['menu_cat'];?></p>
              <p>Porsi : <?= $percat['porsi_cat'];?> orang</p>
              <p>Harga : Rp. <?= number_format($percat['harga_cat'], 2, ',', '.');?></p>
              <p>No.Telepon : <?= $percat['telp_cat'];?></p>
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
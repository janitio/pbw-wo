<?php
require_once"core/init.php";
require_once"view/header.php";

$galeri=tampil_galeri();
$partner=tampil_partner();
?>


<!-- banner text -->
<div class="container">
	<div class="col-md-10 col-md-offset-1">
		<div class="banner-text text-center">
			<!-- banner text -->
		</div>
	</div>
</section>

<!-- intro  -->
<section id="intro" class="section intro">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h3>SELAMAT DATANG</h3>
			<p>Sebuah website yang menyajikan paket - paket pernikahan yang cocok bagi Anda</p>
		</div>
	</div>
</section>
<!-- intro  -->

<!-- galeri section -->
<section id="galeri" class="section">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h6>GALERI</h6>
			<p> Foto - foto Pre Wedding Yang Bisa Menjadi Inspirasi Anda</p>    </div>
		</div>
	</section>
	<!-- work section -->
	<section id="daftar" class="daftar section no-padding">
		<div class="container-fluid">
			<div class="row no-gutter">
				<?php  while($row=mysqli_fetch_assoc($galeri)): ?>
					<div class="col-lg-3 col-md-6 col-sm-6 work"> <a href="images/foto (22).jpg" class="work-box"> 
						<?="<img src='images/galeri/".$row['foto_gal']."'style='width:300px; height:300px;'>"?>
						<div class="overlay">
							<div class="overlay-caption">
								<h5><?= $row['tema_gal'];?></h5>
								<p><?= $row['keterangan_gal'];?></p>
							</div>
						</div>
						<!-- overlay --> 
					</a> </div>
				<?php endwhile;?>
			</div>
		</div>
	</section>
	<!-- intro section -->
	<section id="tentang" class="services service-section">
		<div class="container">
			<div class="col-md-8 col-md-offset-2 text-center">
				<h6>TENTANG KAMI</h6>
				<p>Sebuah website yang menyajikan...</p>
				<br>
			</li>
		</div>
	</div>
</section>
<!-- intro section -->
<!-- services section -->
<section id="partner" class="services service-section">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center">
			<h6>PARTNER KAMI</h6>
			<div class="row ">
				<?php  while($row=mysqli_fetch_assoc($partner)): ?>
					<div class="col-md-4 col-sm-6 services text-center">
						<div class="services-content"><?="<img src='images/partner/".$row['foto_part']."'style='width:200px; height:200px;'>"?>
						<h5><?= $row['nama_part'];?></h5>
						<p>Email	:	<?= $row['email_part'];?></p>
						<p>No.Telepon	:	<?= $row['telp_part'];?></p>
						<p>Alamat	:	<?= $row['alamat_part'];?></p>
						<p>Jenis Paket	:	<?= $row['paket_part'];?></p>
					</div>
				</div>
			<?php endwhile;?>
		</div>
	</div>
</div><br>
<div class="container">
	<h6 class="text-center">KONTAK KAMI</h6><br>
	<div class="row">
		<div class="col-md-4 col-sm-6 services text-center">
			<span class="icon icon-map-pin" style="color:#F60"></span>
			<div class="services-content">
				<h5>LOKASI KANTOR KAMI</h5>
				<p>Jl. Komodo II Kec. Cibodas Kota Tangerang Banten 15138</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
			<div class="services-content">
				<h5>EMAIL</h5>
				<p>prewed@gmail.com</p>
			</div>
		</div>
		<div class="col-md-4 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
			<div class="services-content">
				<h5>PHONE NUMBER</h5>
				<p>(021)04081997</p>
			</div>
		</div>
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.436552647258!2d106.60347711431012!3d-6.206004162519114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69fe9563602feb%3A0xb96198680d35c8c4!2sJl.%20Komodo%20II%2C%20Kec.%20Cibodas%2C%20Kota%20Tangerang%2C%20Banten%2015138!5e0!3m2!1sid!2sid!4v1606064388443!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
	</div>
</div>
</section>

<?php require_once"view/footer.php";?>
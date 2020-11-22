<?php
require_once "core/init.php";
require_once "view/header.php";
?>
<style>
	img {
		width: 500px;
		height: 300px;
		object-fit: cover;
	}
</style>
<!-- header section -->
<!-- intro section -->
<section id="intro" class="section intro">
	<div class="container">
		<div class="col-md-8 col-md-offset-2 text-center">
			<br>
			<h6>PRE-WEDDING</h6>
		</div>
	</div>
</section>
<!-- intro section -->
<!-- services section -->
<section id="services" class="services service-section">
	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<section id="testimonials" class="section testimonials no-padding">
					<div class="container-fluid">
						<div class="row no-gutter">
							<div class="flexslider">
								<ul>
									<?php $ambil = mysqli_query($link, "SELECT * FROM gaun"); ?>
									<?php while ($pergaun = mysqli_fetch_assoc($ambil)) { ?>
										<li>
											<img src="images/<?= $pergaun['foto_gaun'] ?>">
										</li>
								</ul>
							</div>
						</div>
					</div>
				</section>
			</div>
			<div class="col-md-6">
				<h2>Nama Model : <?= $pergaun['model_gaun']; ?></h2>
				<h3>Nama Pemilik Gaun: <?= $pergaun['pemilik_gaun']; ?></h3>
			</div>
		</div>
		<section id="services" class="services service-section">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 services text-center"> <span class="icon icon-envelope" style="color:#F60"></span>
						<div class="services-content">
							<p>Rp. <?= number_format($pergaun['harga_gaun']); ?></p>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 services text-center"> <span class="icon icon-phone" style="color:#F60"></span>
						<div class="services-content">
							<p><?= $pergaun['telp_gaun']; ?></p>
						</div>
					</div>
				</div>
			</div>
		</section>
	</div>
<?php } ?>
</section>
<?php require_once "view/footer.php" ?>
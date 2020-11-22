<?php
require_once"core/init.php";
$error='';

if(!isset($_SESSION['user'])){
	header('Location:index.php');
}   

if(isset($_POST['tambah_galeri'])){
	$_FILES['foto_gal']['name'];
	$foto_gal=$_FILES['foto_gal']['name'];
	$asal=$_FILES['foto_gal']['tmp_name'];
	$error=$_FILES['foto_gal']['error'];
	$size=$_FILES['foto_gal']['size'];
	$format=$_FILES['foto_gal']['type'];
	$namafile='images/galeri/'.$foto_gal;
	$time=time();
	if($error==0){
		if($size<1000000){
			if($format=='image/jpeg'){
				if(file_exists($namafile)){
					$namafile=str_replace(".jpg","",$namafile);
					$namafile=$namafile."_".$time.".jpg";
				}
				move_uploaded_file($asal,$namafile);
                         //memindahkan file ke tempat tujuan
			}else{
				echo'harus jpeg';
			}
		}else{
			echo'ukurannya terlalu besar';
		}
	}else{
		echo'ada error';
	}
	$tema_gal=$_POST['tema_gal'];
	$keterangan_gal=$_POST['keterangan_gal'];
	if(tambah_galeri($tema_gal,$keterangan_gal,$foto_gal)){
		echo "<script>alert('Galeri Berhasil Diperbarui');</script>";
	}else $error="<div class='alert alert-danger'>Ada masalah saat menambah data</div>"; 
}

$daftarg=tampil_galeri();
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
			echo date('d-m-Y H:i:s');?>  &nbsp; <a href="logout.php" class="btn btn-danger square-btn-adjust">Keluar</a> </div>
		</nav>   
		<!-- /. NAV TOP  -->
		<nav class="navbar-default navbar-side" role="navigation">
			<div class="sidebar-collapse">
				<ul class="nav" id="main-menu">
					<li class="text-center">
					</li>
					<li>
						<a class="active-menu"  href="admin.php"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
					</li>
					<li>
						<a  href="#"><i class="fa fa-newspaper-o fa-3x"></i> Paket Pre-Wedding </a>
					</li> 
					<li>
						<a  href="#"><i class="fa fa-newspaper-o fa-3x"></i> Paket Catering </a>
					</li> 
					<li>
						<a  href="#"><i class="fa fa-newspaper-o fa-3x"></i> Paket Gaun </a>
					</li> 
					<li>
						<a  href="#"><i class="fa fa-newspaper-o fa-3x"></i> Paket Gedung </a>
					</li> 
					<li>
						<a  href="partner.php"><i class="fa fa-newspaper-o fa-3x"></i> Partner </a>
					</li> 
					<li>
						<a  href="galeri.php"><i class="fa fa-newspaper-o fa-3x"></i> Galeri </a>
					</li>
				</ul>
			</div>
		</nav>    
		<!-- /. NAV SIDE  -->
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h2>Halaman Galeri Pre-Wedding</h2>   
					</div>
				</div>
				<!-- /. ROW  -->
				<hr />
				<div class="row">
					<div class="col-md-12">
						<!-- Form Elements -->
						<div class="panel panel-default">
							<div class="panel-heading">
								Galeri Pre-Wedding
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-6">
										<h3>Tambah Data Galeri Pre-Wedding</h3>
										<form action="galeri.php" method="post" role='form' enctype="multipart/form-data">
											<div class="form-group">
												<label class="control-label col-sm-4" >Tema :</label>
												<input type="text" class="form-control" name="tema_gal">
											</div>
											<div class="form-group">
												<label class="control-label col-sm-4" >Keterangan :</label>
												<input type="textarea" class="form-control" name="keterangan_gal">
											</div>
											<div class="form-group">
												<label class="control-label col-sm-6" >Upload Foto :</label>
												<input type="file" name="foto_gal">
											</div><br>
											<button class="btn btn-success my-2 my-sm-0" type="submit" name="tambah_galeri" >tambah</button><br>
											<?php if($error !=''){?>
												<div id="error">
													<?= $error;?>
												</div>
											<?php }?>
										</form>
									</div>

									<div class="col-md-6">
										<h3>Galeri Pre-Wedding</h3>
										<table class="table table-bordered">
											<thead>
												<tr class="bg-info">
													<th class="text-dark">Tema</th>
													<th class="text-dark">Foto</th>
													<th class="text-dark">Keterangan</th>
													<th class="text-dark">Aksi</th>
												</tr>
											</thead>
											<?php while($row=mysqli_fetch_assoc($daftarg)):?>
												<tbody>
													<tr class="bg-light">
														<td><?= $row['tema_gal'];?></td>
														<td><?= $row['foto_gal'];?></td>
														<td><?= $row['keterangan_gal'];?></td>
														<td><a href="single_galeri.php?id_gal=<?= $row['id_gal'];?>"><button class="btn btn-warning my-2 my-sm-0" type="submit" >hapus</button>
														</a>
													</td>
												</tr>
											</tbody>
										<?php endwhile;?>
									</table>

								</div>
							</div>
						</div>
					</div>
					<!-- End Form Elements -->
				</div>
			</div>
		</div>
		<!-- /. PAGE INNER  -->
	</div>
	<!-- /. PAGE INNER  -->
</div>
<!-- /. PAGE WRAPPER  -->
<!-- /. WRAPPER  -->
<!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
<!-- JQUERY SCRIPTS -->
<script src="assets/js/jquery-1.10.2.js"></script>
<!-- BOOTSTRAP SCRIPTS -->
<script src="assets/js/bootstrap.min.js"></script>
<!-- METISMENU SCRIPTS -->
<script src="assets/js/jquery.metisMenu.js"></script>
<!-- DATA TABLE SCRIPTS -->
<script src="assets/js/dataTables/jquery.dataTables.js"></script>
<script src="assets/js/dataTables/dataTables.bootstrap.js"></script>
<script>
	$(document).ready(function () {
		$('#dataTables-example').dataTable();
	});
</script>
<!-- CUSTOM SCRIPTS -->
<script src="assets/js/custom.js"></script>


</body>
</html>


<?php
require_once"core/init.php";

if(!isset($_SESSION['user'])){
	header('Location:index.php');
}   
$daftarp=tampil_partner();
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
				</ul>
			</div>
		</nav>    
		<!-- /. NAV SIDE  -->
		<div id="page-wrapper" >
			<div id="page-inner">
				<div class="row">
					<div class="col-md-12">
						<h2>Halaman Daftar Partner</h2> 
						
					</div>
				</div>
				<!-- /. ROW  -->
				<hr />
				
				<div class="row">
					<div class="col-md-12">
						<!-- Advanced Tables -->
						<div class="panel panel-default">
							<div class="panel-heading">
								Daftar Partner
							</div>
							<div class="panel-body">
								<div class="table-responsive">
									<table class="table table-striped table-bordered table-hover" id="dataTables-example">
										<thead>
											<tr>
												<th class="text-dark">Nama</th>
												<th class="text-dark">Paket</th>
												<th class="text-dark">Alamat</th>
												<th class="text-dark">No.Telepon</th>
												<th class="text-dark">email</th>
												<th class="text-dark">foto</th>
												<th class="text-dark">Aksi</th>
											</tr>
										</thead>
										<?php while($row=mysqli_fetch_assoc($daftarp)):?>
											<tbody>
												<tr class="odd gradeX">
													<td><?= $row['nama_part'];?></td>
													<td><?= $row['paket_part'];?></td>
													<td><?= $row['alamat_part'];?></td>
													<td><?= $row['telp_part'];?></td>
													<td><?= $row['email_part'];?></td>
													<td><?= $row['foto_part'];?></td>
													<td><a href="single_partner.php?id_part=<?= $row['id_part'];?>"><button class="btn btn-warning my-2 my-sm-0" type="submit" >hapus</button>
													</a></td>
												</tr>
												
											</tbody>
										<?php endwhile;?>
									</table>
								</div>
								
							</div>
						</div>
						<!--End Advanced Tables -->
					</div>
				</div>
				
			</div>
			
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


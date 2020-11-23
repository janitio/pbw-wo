<?php
require_once"core/init.php";
require_once"view/header.php";


$error='';
if(isset($_POST['join'])){

	$_FILES['foto_part']['name'];
	$foto_part=$_FILES['foto_part']['name'];
	$asal=$_FILES['foto_part']['tmp_name'];
	$error=$_FILES['foto_part']['error'];
	$size=$_FILES['foto_part']['size'];
	$format=$_FILES['foto_part']['type'];
	$namafile='images/partner/'.$foto_part;
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
	$nama_part=$_POST['nama_part'];
	$email_part=$_POST['email_part'];
	$telp_part=$_POST['telp_part'];
	$alamat_part=$_POST['alamat_part'];
	$paket_part=$_POST['paket_part'];
	if(!empty(trim($nama_part))&& !empty(trim($email_part))){
		if(!empty(trim($telp_part))&& !empty(trim($alamat_part))){
			if(!empty(trim($paket_part))&& !empty(trim($foto_part))){
				if(tambah_partner($nama_part,$email_part,$telp_part,$alamat_part,$paket_part,$foto_part)){
					echo "<script>alert('Terima kasih atas partisipasinya, akan kami hubungi nanti.');</script>";
				}else{
					echo'ada masalah saat mengirim pesan';                
				}
			}else $error="<div class='alert alert-danger'>Tidak Boleh Kosong</div>";
		}else $error="<div class='alert alert-danger'>Tidak Boleh Kosong</div>";
	}else $error="<div class='alert alert-danger'>Tidak Boleh Kosong</div>";
}
?>
<section id="join" class="section join">
	<div class="container" style="margin:8% auto;">
		<div class="col-sm-4 col-md-3">
			<h2>Ikut Dengan Kami</h2>

		</div>
		<div class="col-sm-2 col-md-4 pull-right p-3 mb-2 bg-success">
			<div class="row">
				<form method="post" role='form' enctype="multipart/form-data">
					<h2 class="text-center">Lengkapi Data Anda</h2>
					<div class="form-group">
						<label class="control-label col-sm-6" >Nama :</label>
						<input type="text" name="nama_part"placeholder="Nama"class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-6" >Nomor Telepon :</label>
						<input type="text" name="telp_part"placeholder="Nomor Telepon"class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-6" >Email :</label>
						<input type="text" name="email_part"placeholder="Email"class="form-control" required>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-6" >Paket :</label>
						<select class="form-control" name="paket_part"required>
							<option>Pilih Paket yang ingin disediakan</option>
							<option value="Pre-Wedding">Pre-Wedding</option>
							<option value="Catering">Catering</option>
							<option value="Gaun">Gaun</option>
							<option value="Gedung">Gedung</option>
						</select>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-6" >Alamat :</label>
						<textarea type="text" placeholder="Alamat" name="alamat_part"class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-6" >Upload Gambar :</label>
						<input type="file" name="foto_part">
					</div><br>
					<input type="submit" name="join" value="Join" class="btn btn-success" style="width:100%;">
					<br>
					<?php if($error !=''){?>
						<div id="error">
							<?= $error;?>
						</div>
					<?php }?>
				</form>
			</div>
		</div>
	</div>
</section>

<?php require_once "view/footer.php";?>
<?php require_once"core/init.php";

$ambil = mysqli_query($link, "SELECT * FROM partner_join");
$ambil2 = mysqli_query($link, "SELECT * FROM partner");
?>
<h2>Daftar Partner</h2>
<table class="table table-striped">
	<?php
	if(cek_partnerjoin($ambil)){
		?>
		<thead>
			<!-- No, nama penyewa, harga, nomor telpon -->
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="10%">Nama</th>
			<th class="text-center" width="10%">Paket Yang Disediakan</th>
			<th class="text-center" width="20%">Alamat</th>
			<th class="text-center" width="10%">No.Telepon</th>
			<th class="text-center" width="10%">Email</th>
			<th class="text-center" width="17%">Foto</th>
			<th class="text-center" width="30%">Aksi</th>
		</thead>
	<?php }else{?>
		<tbody><tr class="bg-light text-center"><td>Tidak Ada Permintaan Partner</td></tr></tbody>
	<?php }?>
	<tbody>
		<?php $nomor = 1; ?>
		<?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
			<tr>
				<td class="text-center"><?= $nomor; ?></td>
				<td class="text-center"><?= $pecah['nama_partjoin']; ?></td>
				<td class="text-center"><?= $pecah['paket_partjoin']; ?></td>
				<td><?= $pecah['alamat_partjoin']; ?></td>
				<td class="text-center"><?= $pecah['telp_partjoin']; ?></td>
				<td class="text-center"><?= $pecah['email_partjoin']; ?></td>
				<td class="text-center">
					<img src="images/partner/<?= $pecah['foto_partjoin']; ?>" width="100px">
				</td>
				<td class="text-center">
					<a href="admin.php?halaman=partner_hapus&id=<?= $pecah['id_partjoin']; ?>" class="btn btn-danger">Hapus</a>
					<a href="admin.php?halaman=partner_ubah&id=<?= $pecah['id_partjoin']; ?>" class="btn btn-warning">Ubah</a>
				</td>
			</tr>
			<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>
<br>
<h2>Daftar Permintaan Partner</h2>

<table class="table table-striped">
	<?php
	if(cek_partner($ambil2)){
		?>
		<thead>
			<th class="text-center" width="5%">No</th>
			<th class="text-center" width="10%">Nama</th>
			<th class="text-center" width="10%">Paket Yang Disediakan</th>
			<th class="text-center" width="20%">Alamat</th>
			<th class="text-center" width="10%">No.Telepon</th>
			<th class="text-center" width="10%">Email</th>
			<th class="text-center" width="17%">Foto</th>
			<th class="text-center" width="30%">Aksi</th>
		</thead>
	<?php }else{?>
		<tbody><tr class="bg-light text-center"><td>Tidak Ada Permintaan Partner</td></tr></tbody>
		
	<?php }?>
	<tbody>
		<?php $nomor = 1; ?>
		<?php while ($pecah = mysqli_fetch_assoc($ambil2)) { ?>
			<tr>
				<td class="text-center"><?= $nomor; ?></td>
				<td class="text-center"><?= $pecah['nama_part']; ?></td>
				<td class="text-center"><?= $pecah['paket_part']; ?></td>
				<td><?= $pecah['alamat_part']; ?></td>
				<td class="text-center"><?= $pecah['telp_part']; ?></td>
				<td class="text-center"><?= $pecah['email_part']; ?></td>
				<td class="text-center">
					<img src="images/partner/<?= $pecah['foto_part']; ?>" width="100px">
				</td>
				<td class="text-center">
					<a href="admin.php?halaman=partner_terima&id=<?= $pecah['id_part']; ?>" class="btn btn-success" >Terima</a>
					<a href="admin.php?halaman=partner_tolak&id=<?= $pecah['id_part']; ?>" class="btn btn-danger">Tolak</a>
				</td>
			</tr>
			<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>
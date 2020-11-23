<h2>Daftar Partner</h2>

<table class="table table-bordered">
	<thead>
		<!-- No, nama penyewa, harga, nomor telpon -->
		<th>No</th>
		<th>Nama</th>
		<th>Paket Yang Disediakan</th>
		<th>Alamat</th>
		<th>No.Telepon</th>
		<th>Email</th>
		<th>Foto</th>
		<th>Aksi</th>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = mysqli_query($link, "SELECT * FROM partner"); ?>
		<?php while ($pecah = mysqli_fetch_assoc($ambil)) { ?>
			<tr>
				<td><?= $nomor; ?></td>
				<td><?= $pecah['nama_part']; ?></td>
				<td><?= $pecah['paket_part']; ?></td>
				<td><?= $pecah['alamat_part']; ?></td>
				<td><?= $pecah['telp_part']; ?></td>
				<td><?= $pecah['email_part']; ?></td>
				<td>
					<img src="images/partner/<?= $pecah['foto_part']; ?>" width="100px">
				</td>
				<td>
					<a href="admin.php?halaman=partner_hapus&id=<?= $pecah['id_part']; ?>" class="btn btn-danger">Hapus</a>
					<a href="admin.php?halaman=partner_ubah&id=<?= $pecah['id_part']; ?>" class="btn btn-warning">Ubah</a>
				</td>
			</tr>
			<?php $nomor++ ?>
		<?php } ?>
	</tbody>
</table>
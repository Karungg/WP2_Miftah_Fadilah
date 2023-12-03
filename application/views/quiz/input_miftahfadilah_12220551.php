<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Pemesanan Tiket</title>
</head>

<body>
	<center>
		<form action="<?= base_url('order/cetak') ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						<h1>Data Pemesanan Tiket</h1>
						<hr>
					</th>
				</tr>
				<tr>
					<td>Masukkan Nama Penumpang</td>
					<th>:</th>
					<td>
						<input type="text" name="nama">
					</td>
				</tr>
				<?php
				if (form_error('nama')) : ?>
					<tr>
						<th>Input Error</th>
						<th>:</th>
						<td>
							<?= form_error('nama'); ?>
						</td>
					</tr>
				<?php endif; ?>
				<tr>
					<td>Alamat Penumpang</td>
					<td>:</td>
					<td>
						<textarea name="alamat" id="alamat" cols="30" rows="10"></textarea>
					</td>
				</tr>
				<?php
				if (form_error('alamat')) : ?>
					<tr>
						<th>Input Error</th>
						<th>:</th>
						<td>
							<?= form_error('alamat'); ?>
						</td>
					</tr>
				<?php endif; ?>
				<tr>
					<td>Kota Tujuan</td>
					<td>:</td>
					<td>
						<select name="kota" id="kota">
							<option value="solo">Solo</option>
							<option value="semarang">Semarang</option>
							<option value="yogyakarta">Yogyakarta</option>
							<option value="surabaya">Surabaya</option>
						</select>
					</td>
				</tr>
				<tr>
					<td>Jumlah Beli</td>
					<td>:</td>
					<td>
						<input type="number" name="jumlah">
					</td>
				</tr>
				<?php
				if (form_error('jumlah')) : ?>
					<tr>
						<th>Input Error</th>
						<th>:</th>
						<td>
							<?= form_error('jumlah'); ?>
						</td>
					</tr>
				<?php endif; ?>
				<tr>
					<td>
						<button type="submit">Pesan</button>
						<button type="reset">Batal</button>
					</td>
				</tr>
			</table>
		</form>
		<center>

		</center>
	</center>
</body>

</html>

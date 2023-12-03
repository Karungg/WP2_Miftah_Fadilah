<html>

<head>
	<title>Form Input Matakuliah</title>
</head>

<body>
	<center>
		<form action="<?= base_url('MataKuliah/cetak') ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						Form Input Data Mata Kuliah
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>Kode MTK</th>
					<th>:</th>
					<td>
						<input type="text" name="kode" id="kode">
					</td>
				</tr>
				<?php
				if (form_error('kode')) : ?>
					<tr>
						<th>Input Error</th>
						<th>:</th>
						<td>
							<?= form_error('kode'); ?>
						</td>
					</tr>
				<?php endif; ?>
				<tr>
					<th>Nama MTK</th>
					<td>:</td>
					<td>
						<input type="text" name="nama" id="nama">
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
					<th>SKS</th>
					<td>:</td>
					<td>
						<select name="sks" id="sks">
							<option value="">Pilih SKS</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
						</select>
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<input type="submit" value="Submit">
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>

</html>

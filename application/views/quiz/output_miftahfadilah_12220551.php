<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Data Pemesanan Tiket</title>
</head>

<body>
	<center>
		<table>
			<tr>
				<th colspan="3">
					<h1>Data Pemesanan Tiket</h1>
				</th>
			</tr>
			<tr>
				<td>Nama Penumpang</td>
				<th>:</th>
				<td>
					<?= $nama; ?>
				</td>
			</tr>
			<tr>
				<td>Alamat Penumpang</td>
				<td>:</td>
				<td>
					<?= $alamat; ?>
				</td>
			</tr>
			<tr>
				<td>Kota Tujuan</td>
				<td>:</td>
				<td>
					<?= $kota; ?>
				</td>
			</tr>
			<tr>
				<td>Harga</td>
				<td>:</td>
				<td>
					<?= $harga; ?>
				</td>
			</tr>
			<tr>
				<td>Diskon</td>
				<td>:</td>
				<td>
					<?= $diskon; ?>
				</td>
			</tr>
			<tr>
				<td>Total Harga</td>
				<td>:</td>
				<td>
					<?= $totalHarga; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3" align="center">
					<a href="<?= base_url('Order');
								?>">Kembali</a>
				</td>
			</tr>
		</table>
	</center>
</body>

</html>

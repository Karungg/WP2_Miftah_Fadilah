<!-- Begin Page Content -->
<div class="container-fluid">
	<?= $this->session->flashdata('pesan'); ?>
	<div class="row">
		<div class="col-lg-3">
			<?php if (validation_errors()) { ?>
				<div class="alert alert-danger" role="alert">
					<?= validation_errors(); ?>
				</div>
			<?php } ?>
			<?= $this->session->flashdata('pesan'); ?>
			<a href="<?= base_url('buku') ?>" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-8">
			<div class="card">
				<div class="card-body">
					<?php foreach ($buku as $data) : ?>
						<form action="<?= base_url('buku/ubahBuku') ?>" method="post" enctype="multipart/form-data">
							<input type="hidden" name="id" value="<?= $data['id'] ?>">
							<input type="hidden" name="old_pict" value="<?= $data['image'] ?>">
							<div class="form-group">
								<label for="judul_buku">Judul Buku</label>
								<input type="text" class="form-control form-control-user" id="judul_buku" name="judul_buku" placeholder="Masukkan Judul Buku" value="<?= $data['judul_buku'] ?>">
							</div>
							<div class="form-group">
								<label for="id_kategori">Kategori</label>
								<select name="id_kategori" class="form-control form-control-user">
									<option value="">Pilih Kategori</option>
									<?php foreach ($kategori as $k) : ?>
										<option value="<?= $k['id_kategori']; ?>"><?= $k['kategori']; ?></option>
									<?php endforeach; ?>
								</select>
							</div>
							<div class="form-group">
								<label for="pengarang">Pengarang</label>
								<input type="text" class="form-control form-control-user" id="pengarang" name="pengarang" placeholder="Masukkan nama pengarang" value="<?= $data['pengarang'] ?>">
							</div>
							<div class="form-group">
								<label for="penerbit">Penerbit</label>
								<input type="text" class="form-control form-control-user" id="penerbit" name="penerbit" placeholder="Masukkan nama penerbit" value="<?= $data['penerbit'] ?>">
							</div>
							<div class="form-group">
								<label for="tahun">Tahun</label>
								<select name="tahun" class="form-control form-control-user">
									<option value="">Pilih Tahun</option>
									<?php
									for ($i = date('Y'); $i > 1000; $i--) { ?>
										<option value="<?= $i; ?>"><?= $i; ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="isbn">ISBN</label>
								<input type="text" class="form-control form-control-user" id="isbn" name="isbn" placeholder="Masukkan ISBN" value="<?= $data['isbn'] ?>">
							</div>
							<div class="form-group">
								<label for="stok">Stok</label>
								<input type="number" class="form-control form-control-user" id="stok" name="stok" placeholder="Masukkan nominal stok" value="<?= $data['stok'] ?>">
							</div>
							<div class="form-group">
								<label for="image">Image</label>
								<input type="file" class="form-control form-control-user" id="image" name="image">
							</div>
							<button type="submit" class="btn btn-primary">Ubah</button>
						</form>
					<?php endforeach ?>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
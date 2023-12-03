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
			<a href="<?= base_url('buku/kategori') ?>" class="btn btn-primary mb-3"><i class="fas fa-arrow-left"></i> Kembali</a>
			<?php foreach ($kategori as $data) : ?>
				<form action="<?= base_url('buku/ubahKategori') ?>" method="post">
					<input type="hidden" value="<?= $data['id_kategori'] ?>" name="id">
					<div class="form-group">
						<label for="kategori">Nama Kategori</label>
						<input type="text" name="kategori" id="kategori" class="form-control form-control-user" value="<?= $data['kategori'] ?>">
					</div>
					<div class="form-group">
						<button type="submit" class="btn btn-primary">Ubah</button>
					</div>
				</form>
			<?php endforeach ?>
		</div>
	</div>
</div>
<!-- /.container-fluid -->
</div>
<!-- End of Main Content -->
<div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-lg-7">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row">
						<div class="col-lg">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb4">Halaman Login!!</h1>
								</div>
								<?= $this->session->flashdata('pesan'); ?>
								<form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
									<div class="form-group">

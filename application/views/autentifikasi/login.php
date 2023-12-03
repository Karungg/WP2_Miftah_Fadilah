<div class="container">

	<!-- Outer Row -->
	<div class="row justify-content-center">

		<div class="col-xl-10 col-lg-12 col-md-8">

			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-12">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Halaman Login!!</h1>
									<?= $this->session->flashdata('pesan'); ?>
								</div>
								<form class="user" method="post" action="<?= base_url('autentifikasi'); ?>">
									<div class="form-group">
										<input type="text" class="form-control form-control-user" value="<?= set_value('email'); ?>" id="email" placeholder="Masukkan Alamat Email" name="email">
										<?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
										<?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
									</div>
									<div class="form-group">
										<div class="custom-control custom-checkbox small">
											<input type="checkbox" class="custom-control-input" id="customCheck">
											<label class="custom-control-label" for="customCheck">Remember
												Me</label>
										</div>
									</div>
									<button type="submit" class="btn btn-primary btn-user btn-block">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="<?= base_url('autentifikasi/lupaPassword'); ?>">Forgot Password?</a>
								</div>
								<div class=" text-center">
									<a class="small" href="<?= base_url('autentifikasi/registrasi'); ?>">Create an Account!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>

	</div>

</div>

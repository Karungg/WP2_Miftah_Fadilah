<div class="container">
	<!-- Outer Row -->
	<div class="row justify-content-center">
		<div class="col-xl-8 col-lg-12 col-md-9">
			<div class="card o-hidden border-0 shadow-lg my-5">
				<div class="card-body p-0">
					<!-- Nested Row within Card Body -->
					<div class="row justify-content-center">
						<div class="col-lg-10">
							<div class="p-5">
								<div class="text-center">
									<h1 class="h4 text-gray-900 mb-4">Welcome
										Back!</h1>
								</div>
								<form action="<?= base_url('autentifikasi/login') ?>" method="POST" class="user">
									<div class="form-group">
										<input type="email" name="email" class="form-control
form-control-user" id="exampleInputEmail" placeholder="Email">
									</div>
									<div class="form-group">
										<input type="password" name="password" class="form-control
form-control-user" id="exampleInputPassword" placeholder="Password">
									</div>
									<button type="submit" name="submit" class="btn btn-primary btnuser btn-block">
										Login
									</button>
								</form>
								<hr>
								<div class="text-center">
									<a class="small" href="forgotpassword.html">Forgot Password?</a>
								</div>
								<div class="text-center">
									<a class="small" href="<?= base_url('autentifikasi/registrasi') ?>">Create an
										Account!</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="d-flex align-items-center min-vh-100 py-3">
		<div class="container">
			<div class="card login-card">
				<div class="row no-gutters">
					<div class="col-md-5">
						<img src="assets/img/banner.jpg" alt="login" class="login-card-img" width="200px">
					</div>
					<div class="col-md-7">
						<div class="card-body">
							<div class="brand-wrapper">
								<img src="assets/img/baktihusada.png" alt="logo"  width="100px">
								<img src="assets/img/ppsp.jpg" alt="logo"  width="150px">
							</div>
							<p class="login-card-description">EHRA Login</p>
							<form method="POST" action="<?= base_url('auth'); ?>">
								<?= $this->session->flashdata('message'); ?>
								<div class="form-group">
									<label for="username" class="sr-only">Username</label>
									<input type="text" name="username" id="username" class="form-control" placeholder="Username" value="<?= set_value('username')?>" required>	
								</div>
								<div class="form-group mb-4">
									<label for="password" class="sr-only">Password</label>
									<input type="password" name="password" id="password" class="form-control" placeholder="Password" required>	
								</div>
								<input name="login" id="login" class="btn btn-primary mb-4" type="submit" value="Login">
							</form>
							<nav class="login-card-footer-nav">
								<a href="#!">Terms of use.</a>
								<a href="#!">Privacy policy</a>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>

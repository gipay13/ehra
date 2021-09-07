<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ehra | Login</title>

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css">
	</head>
	<body class="hold-transition login-page">
		<div class="login-box">
		<!-- /.login-logo -->
		<div class="card card-outline card-primary">
			<div class="card-header text-center">
				<a href="" class="h1"><b>EHRA</b></a>
			</div>
			<div class="card-body">
			<p class="text-center">Environmental Health Risk Assessment</p>
			<form action="<?= base_url('auth'); ?>" method="post" id="loginForm">
				<div class="input-group mb-3">
					<input type="username" class="form-control" name="username" placeholder="Username" value="<?= set_value('username')?>" autocomplete="off">
					<div class="input-group-append">
						<div class="input-group-text">
						<span class="fas fa-envelope"></span>
						</div>
					</div>
				</div>
				<div class="input-group mb-3">
					<input type="password" class="form-control" name="password" placeholder="Password">
					<div class="input-group-append">
						<div class="input-group-text">
						<span class="fas fa-lock"></span>
						</div>
					</div>
				</div>
				<?= $this->session->flashdata('message'); ?>
				<div class="row">
					<div class="col-4">
						<button type="submit" class="btn btn-primary btn-block">Sign In</button>
					</div>
				</div>
			</form>
			</div>
		</div>
		</div>

		<!-- jQuery -->
		<script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
		<!-- Bootstrap 4 -->
		<script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url() ?>assets/dist/js/adminlte.min.js"></script>
		<!-- jquery-validation -->
		<script src="<?= base_url()?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
		<script>
			$(function () {
				$('#loginForm').validate({
					rules: {
						username: {
							required: true,
						},
						password: {
							required: true,
						},
					},
					messages: {
						username: {
							required: "Masukan Username",
						},
						password: {
							required: "Masukan Password",
						},
					},
					errorElement: 'span',
					errorPlacement: function (error, element) {
						error.addClass('invalid-feedback');
						element.closest('.input-group').append(error);
					},
					highlight: function (element, errorClass, validClass) {
						$(element).addClass('is-invalid');
					},
					unhighlight: function (element, errorClass, validClass) {
					$(element).removeClass('is-invalid');
					}
				});
			});
		</script>
	</body>
</html>

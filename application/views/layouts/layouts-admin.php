<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Ehra | Admin Page</title>

		<!-- Google Font: Source Sans Pro -->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
		<!-- Font Awesome -->
		<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css')?>">
		<!-- Ionicons -->
		<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css')?>">
		<!-- DataTables -->
		<link rel="stylesheet" href="<?= base_url('')?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="<?= base_url('')?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
		<link rel="stylesheet" href="<?= base_url('')?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
	</head>
	<body class="hold-transition sidebar-mini layout-fixed">
		<div class="wrapper">
			<nav class="main-header navbar navbar-expand navbar-white navbar-light">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
					</li>
					<li class="nav-item d-none d-sm-inline-block">
						<a href="<?= base_url('') ?>" class="nav-link">Home</a>
					</li>
				</ul>
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a class="nav-link" data-toggle="dropdown" href="#">
							<div class="user-panel">
								<div class="image">
									<img src="<?= base_url() ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
								</div>
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
							<a href="#" class="dropdown-item">Profile</a>
								<div class="dropdown-divider"></div>
							<a href="<?= base_url('auth/logout')?>" class="dropdown-item">Logout</a>
						</div>
					</li>
				</ul>
			</nav>

			<aside class="main-sidebar sidebar-dark-primary elevation-4">
				<a href="" class="brand-link">
					<img src="<?= base_url('assets/img/baktihusada.png')?>" alt="Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
					<span class="brand-text font-weight-light">Ehra</span>
				</a>

				<div class="sidebar">
					<div class="user-panel mt-3 pb-3 mb-3 d-flex">
						<div class="image">
						<img src="<?= base_url('')?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
						</div>
						<div class="info">
						<a href="<?= base_url('auth/logout')?>" class="d-block"><?= $this->session->userdata("name"); ?></a>
						</div>
					</div>

					<div class="form-inline">
						<div class="input-group" data-widget="sidebar-search">
						<input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
						<div class="input-group-append">
							<button class="btn btn-sidebar">
							<i class="fas fa-search fa-fw"></i>
							</button>
						</div>
						</div>
					</div>

					<nav class="mt-2">
						<ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
							<li class="nav-item">
								<a href="<?= base_url('admin/dashboard')?>" class="nav-link">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
								</a>
							</li>
									<li class="nav-item">
								<a href="<?= base_url('admin/pertanyaan')?>" class="nav-link">
								<i class="nav-icon fas fa-question"></i>
								<p>Pertanyaan</p>
								</a>
							</li>
									<li class="nav-item">
								<a href="<?= base_url('admin/kategori')?>" class="nav-link">
								<i class="nav-icon fas fa-object-group"></i>
								<p>Kategori Pertanyan</p>
								</a>
							</li>
									<li class="nav-item">
								<a href="<?= base_url('admin/hasil')?>" class="nav-link">
								<i class="nav-icon fas fa-poll"></i>
								<p>Hasil Survey</p>
								</a>
							</li>
							<li class="nav-header">Settings</li>
							<li class="nav-item">
								<a href="<?= base_url('users')?>" class="nav-link">
									<i class="nav-icon fas fa-user"></i>
									<p>Users</p>
								</a>
							</li>
						</ul>
					</nav>
				</div>
			</aside>

			<div class="content-wrapper">
				<?= $content ?>
  			</div>
			
			<footer class="main-footer">
				<strong>Copyright &copy; 2021 <a href="">Ehra</a>.</strong>
				All rights reserved.
			</footer>


			<aside class="control-sidebar control-sidebar-dark">

			</aside>

		</div>



		<!-- jQuery -->
		<script src="<?= base_url('')?>assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?= base_url('')?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url('assets/dist/js/adminlte.min.js')?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= base_url('assets/dist/js/demo.js')?>"></script>
		<!-- Table -->
		<script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/jszip/jszip.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
		<!-- jquery-validation -->
		<script src="<?= base_url()?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
		<script>
			$(function () {
				$("#table").DataTable({
					"responsive": true, 
					"lengthChange": false, 
					"autoWidth": false,
					"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
				}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
				$('#inputKategoriForm').validate({
					rules: {
						kode: {
							required: true,
						},
						judul: {
							required: true,
						},
					},
					messages: {
						kode: {
							required: "Masukan Kategori Petanyaan",
						},
						judul: {
							required: "Masukan Judul Kategori",
						},
					},
					errorElement: 'span',
					errorPlacement: function (error, element) {
						error.addClass('invalid-feedback');
						element.closest('.form-group').append(error);
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





<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Ehra | <?= $title ?></title>

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
	<!-- DataTables -->
	<link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
	<link rel="stylesheet" href="<?= base_url('') ?>assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
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
								<img src="<?= base_url() ?>assets/dist/img/blank-profile-picture.png" class="img-circle elevation-2" alt="User Image">
							</div>
						</div>
					</a>
					<div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
						<a href="#" class="dropdown-item">Profile</a>
						<div class="dropdown-divider"></div>
						<a href="<?= base_url('auth/logout') ?>" class="dropdown-item">Logout</a>
					</div>
				</li>
			</ul>
		</nav>

		<aside class="main-sidebar sidebar-light-dark elevation-4">
			<a href="" class="brand-link">
				<img src="<?= base_url('assets/dist/img/logo.png') ?>" alt="Logo" class="brand-image" style="">
				<span class="brand-text font-weight-light" style="color: white;">Ehra</span>
			</a>

			<div class="sidebar">
				<div class="user-panel mt-3 pb-3 mb-3 d-flex">
					<div class="image">
						<img src="<?= base_url('') ?>assets/dist/img/blank-profile-picture.png" class="img-circle elevation-2" alt="User Image">
					</div>
					<div class="info">
						<a href="<?= base_url('auth/logout') ?>" class="d-block"><?= $this->session->userdata("name"); ?></a>
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
							<a href="<?= base_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
								<i class="nav-icon fas fa-tachometer-alt"></i>
								<p>Dashboard</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('pertanyaan') ?>" class="nav-link <?= $this->uri->segment(1) == 'pertanyaan' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
								<i class="nav-icon fas fa-question"></i>
								<p>Pertanyaan</p>
							</a>
						</li>
						<li class="nav-item">
							<a href="<?= base_url('hasil') ?>" class="nav-link <?= $this->uri->segment(1) == 'hasil' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
								<i class="nav-icon fas fa-poll"></i>
								<p>Hasil Survey</p>
							</a>
						</li>
						<?php if($this->session->userdata('level') == 1 || $this->session->userdata('level') == 3) { ?>
						<li class="nav-item <?= $this->uri->segment(1) == 'laporan' || $this->uri->segment(1) == '' ? 'menu-is-opening menu-open' : '' ?>">
							<a href="#" class="nav-link <?= $this->uri->segment(1) == 'laporan' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
								<i class="nav-icon fas fa-chart-pie"></i>
								<p>
									Laporan & Grafik
									<i class="right fas fa-angle-left"></i>
								</p>
							</a>
							<ul class="nav nav-treeview">
								<li class="nav-item">
									<a href="<?= base_url('laporan/infoumum') ?>" class="nav-link <?= $this->uri->segment(2) == 'infoumum' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Informasi Responden</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('laporan/sampah') ?>" class="nav-link <?= $this->uri->segment(2) == 'sampah' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Sampah</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('laporan/limbah') ?>" class="nav-link <?= $this->uri->segment(2) == 'limbah' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Pembuangan Limbah</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('laporan/drainase') ?>" class="nav-link <?= $this->uri->segment(2) == 'drainase' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Drainase</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('laporan/sumberair') ?>" class="nav-link <?= $this->uri->segment(2) == 'sumberair' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Sumber Air</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('laporan/higiene') ?>" class="nav-link <?= $this->uri->segment(2) == 'higiene' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Perilaku Higiene</p>
									</a>
								</li>
								<li class="nav-item">
									<a href="<?= base_url('laporan/diare') ?>" class="nav-link <?= $this->uri->segment(2) == 'diare' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Diare</p>
									</a>
								</li>
								<?php if($this->session->userdata('level') == 1) { ?>
								<li class="nav-item">
									<a href="<?= base_url('laporan/pengamatan') ?>" class="nav-link <?= $this->uri->segment(2) == 'pengamatan' ? 'active' : '' ?>">
										<i class="far fa-circle nav-icon"></i>
										<p>Pengamatan</p>
									</a>
								</li>
								<?php } ?>
								<!-- <li class="nav-item">
									<a href="<?= base_url('laporan/areaberesiko') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Area Beresiko</p>
									</a>
								</li> -->
								<!-- <li class="nav-item">
									<a href="<?= base_url('laporan/rumahsehat') ?>" class="nav-link">
										<i class="far fa-circle nav-icon"></i>
										<p>Rumah Sehat</p>
									</a>
								</li> -->
							</ul>
						</li>
						<?php } ?>
						<?php if ($this->session->userdata('level') == 1) { ?>
							<li class="nav-header">Settings</li>
							<li class="nav-item">
								<a href="<?= base_url('user') ?>" class="nav-link <?= $this->uri->segment(1) == 'user' || $this->uri->segment(1) == '' ? 'active' : '' ?>">
									<i class="nav-icon fas fa-user"></i>
									<p>Users</p>
								</a>
							</li>
						<?php } ?>
					</ul>
				</nav>
			</div>
		</aside>

		<!-- jQuery -->
		<script src="<?= base_url('') ?>assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?= base_url('') ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- CANVAS JS -->
		<script src="<?= base_url('') ?>assets/plugins/canvasjs/canvasjs.min.js"></script>
		<!-- Table -->
		<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/jszip/jszip.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="<?= base_url() ?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

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


	<!-- AdminLTE App -->
	<script src="<?= base_url('assets/dist/js/adminlte.min.js') ?>"></script>
	<!-- AdminLTE for demo purposes -->
	<script src="<?= base_url('assets/dist/js/demo.js') ?>"></script>
</body>

</html>

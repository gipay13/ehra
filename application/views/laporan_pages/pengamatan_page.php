<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6 col-sm-12 mb-3">
				<h1 class="m-0">Laporan <?= $title ?></h1>
			</div>
		</div>
	</div>
</div>
<section class="content">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-12">
				<div class="card">
					<div class="card-header">
						
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Nama Laporan</th>
										<th>Tangaal</th>
										<th>Export</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Amati Dapur dan Sekelilingnya</td>
										<form action="<?= base_url('laporan/export') ?>" method="post">
										<td>
											<div class="row">
												<div class="col-md-12">
													<input type="date" name="initial_date" id="initial_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
												<div class="col-md-12">
													<p class="text-center my-2">to</p>
												</div>
												<div class="col-md-12">
													<input type="date" name="end_date" id="end_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
											</div>
										</td>
										<td>
											<button type="submit" name="amati_ao" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>	
									</tr>
									<tr>
										<td>Amati Kamar Mandi</td>
										<form action="<?= base_url('laporan/export') ?>" method="post">
										<td>
											<div class="row">
												<div class="col-md-12">
													<input type="date" name="initial_date" id="initial_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
												<div class="col-md-12">
													<p class="text-center my-2">to</p>
												</div>
												<div class="col-md-12">
													<input type="date" name="end_date" id="end_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
											</div>
										</td>
										<td>
											<button type="submit" name="amati_bo" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>	
									</tr>
									<tr>
										<td>Amati Jamban</td>
										<form action="<?= base_url('laporan/export') ?>" method="post">
										<td>
											<div class="row">
												<div class="col-md-12">
													<input type="date" name="initial_date" id="initial_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
												<div class="col-md-12">
													<p class="text-center my-2">to</p>
												</div>
												<div class="col-md-12">
													<input type="date" name="end_date" id="end_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
											</div>
										</td>
										<td>
											<button type="submit" name="amati_co" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>	
									<tr>
										<td>Amati Tempat Cuci Pakaian</td>
										<form action="<?= base_url('laporan/export') ?>" method="post">
										<td>
											<div class="row">
												<div class="col-md-12">
													<input type="date" name="initial_date" id="initial_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
												<div class="col-md-12">
													<p class="text-center my-2">to</p>
												</div>
												<div class="col-md-12">
													<input type="date" name="end_date" id="end_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
											</div>
										</td>
										<td>
											<button type="submit" name="amati_do" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>	
									</tr>
									<tr>
										<td>Amati Halaman/Perkarangan/Kebun</td>
										<form action="<?= base_url('laporan/export') ?>" method="post">
										<td>
											<div class="row">
												<div class="col-md-12">
													<input type="date" name="initial_date" id="initial_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
												<div class="col-md-12">
													<p class="text-center my-2">to</p>
												</div>
												<div class="col-md-12">
													<input type="date" name="end_date" id="end_date" class="form-control" value="<?= date('Y-m-d') ?>">
												</div>
											</div>
										</td>
										<td>
											<button type="submit" name="amati_eo" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>	
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-12 mb-5">
				<div id="banjir" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>

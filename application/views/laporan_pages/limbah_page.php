<?php
foreach ($tba->result() as $temp => $t) {
	$tbaa[] = [
		'label' => $t->answer_name,
		'y' => $t->persentase
	];
}

foreach ($pba->result() as $temp => $p) {
	$pbaa[] = [
		'label' => $p->answer_name,
		'y' => $p->persentase
	];
}
// echo '<pre>';
// print_r($umur);
// echo '</pre>';
?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-10">
				<h1 class="m-0">Laporan <?= $title ?></h1>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6 col-sm-12">
				<div class="card">
					<div class="card-header">

					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Nama Laporan</th>
										<th>Tanggal</th>
										<th>Export</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Tempat Buang Air Besar</td>
										<form action="<?= base_url('laporan/pdf_tba') ?>" method="post">
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
											<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>			
									</tr>
									<tr>
										<td>Buang Air Besar di Tempat Terbuka</td>
										<form action="<?= base_url('laporan/pdf_bab') ?>" method="post">
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
											<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>		
									</tr>
									<tr>
										<td>Kepemilikan Jamban Pribadi</td>
										<form action="<?= base_url('laporan/pdf_jamban') ?>" method="post">
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
											<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>			
									</tr>
									<tr>
										<td>Pembuangan Limbah</td>
										<form action="<?= base_url('laporan/pdf_pembuangan') ?>" method="post">
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
											<button type="submit" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button>											
										</td>
										</form>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div id="tba" style="height: 500px;"></div>
			</div>
			<div class="col-md-12 mt-5">
				<div id="tpa" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mt-5">
				<div id="waktukuras" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mt-5">
				<div id="praktikkuras" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mt-5">
				<div id="septik" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script>
	window.onload = function() {
		var tba = new CanvasJS.Chart("tba", {
			theme: "light2",
			animationEnabled: true,
			title: {
				text: "Persentase Tempat Buang Air Besar",
				fontSize: 20,
			},
			data: [{
				type: "pie",
				showInLegend: true,
				percentFormatString: "#0.#",
				toolTipContent: "{label} - #percent %",
				legendText: "{label}",
				dataPoints: <?= json_encode($tbaa, JSON_NUMERIC_CHECK); ?>
			}]
		});

		var tpa = new CanvasJS.Chart("tpa", {
			theme: "light2",
			animationEnabled: true,
			title: {
				text: "Tempat Penyaluran Akhir Tinja",
				fontSize: 20,
			},
			data: [{
				type: "pie",
				showInLegend: true,
				percentFormatString: "#0.#",
				toolTipContent: "{label} - #percent %",
				legendText: "{label}",
				dataPoints: <?= json_encode($pbaa, JSON_NUMERIC_CHECK); ?>
			}]
		});

		var waktukuras = new CanvasJS.Chart("waktukuras", {
			animationEnabled: true,
			title: {
				text: "Waktu Terakhir Pengurasan Tanki Septik",
				fontSize: 20,
			},

			data: [{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},

				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 61
						},
						{
							x: new Date(2012, 02, 1),
							y: 75
						},
						{
							x: new Date(2012, 03, 1),
							y: 80
						},
						{
							x: new Date(2012, 04, 1),
							y: 85
						},
						{
							x: new Date(2012, 05, 1),
							y: 105
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 20
						},
						{
							x: new Date(2012, 02, 1),
							y: 35
						},
						{
							x: new Date(2012, 03, 1),
							y: 30
						},
						{
							x: new Date(2012, 04, 1),
							y: 45
						},
						{
							x: new Date(2012, 05, 1),
							y: 25
						}

					]
				}

			]
		});

		var praktikkuras = new CanvasJS.Chart("praktikkuras", {
			animationEnabled: true,
			title: {
				text: "Praktik Pengurasan Tanki Septik",
				fontSize: 20,
			},

			data: [{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},

				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 61
						},
						{
							x: new Date(2012, 02, 1),
							y: 75
						},
						{
							x: new Date(2012, 03, 1),
							y: 80
						},
						{
							x: new Date(2012, 04, 1),
							y: 85
						},
						{
							x: new Date(2012, 05, 1),
							y: 105
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 20
						},
						{
							x: new Date(2012, 02, 1),
							y: 35
						},
						{
							x: new Date(2012, 03, 1),
							y: 30
						},
						{
							x: new Date(2012, 04, 1),
							y: 45
						},
						{
							x: new Date(2012, 05, 1),
							y: 25
						}

					]
				}

			]
		});

		var septik = new CanvasJS.Chart("septik", {
			animationEnabled: true,
			title: {
				text: "Persentase Tanki Septik Suspek Aman dan Tidak Aman",
				fontSize: 20,
			},

			data: [{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},

				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 61
						},
						{
							x: new Date(2012, 02, 1),
							y: 75
						},
						{
							x: new Date(2012, 03, 1),
							y: 80
						},
						{
							x: new Date(2012, 04, 1),
							y: 85
						},
						{
							x: new Date(2012, 05, 1),
							y: 105
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 20
						},
						{
							x: new Date(2012, 02, 1),
							y: 35
						},
						{
							x: new Date(2012, 03, 1),
							y: 30
						},
						{
							x: new Date(2012, 04, 1),
							y: 45
						},
						{
							x: new Date(2012, 05, 1),
							y: 25
						}

					]
				}

			]
		});

		septik.render();
		praktikkuras.render();
		waktukuras.render();
		tba.render();
		tpa.render();
	}
</script>

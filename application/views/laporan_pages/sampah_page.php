<?php

foreach ($pengelolaan61 as $temp => $p) {
	$p61[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}

?>
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
		<div class="row">
			<div class="col-md-6 col-sm-12">
				<div class="card" style="height: 500px;">
					<div class="card-header">
						<div class="row">
							<div class="col-md-5 col-sm-12">
								<input type="date" name="initial_date" id="initial_date" class="form-control">
							</div>
							<div class="col-md-2 col-sm-12">
								<p class="text-center my-2">to</p>
							</div>
							<div class="col-md-5 col-sm-12">
								<input type="date" name="end_date" id="end_date" class="form-control">
							</div>
						</div>
					</div>
					<div class="card-body">
						<div class="table-responsive">
							<table class="table table-bordered table-striped">
								<thead>
									<tr>
										<th>Nama Laporan</th>
										<th>Export</th>
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>Kondisi Sampah</td>
										<td>
											<a href="<?= base_url('laporan/pdf_kondisi_sampah') ?>" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
										</td>			
									</tr>
									<tr>
										<td>Pengelolaan Sampah</td>
										<td>
											<a href="<?= base_url('laporan/pdf_kelola_sampah') ?>" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
										</td>			
									</tr>
									<tr>
										<td>Pemilihan Sampah</td>
										<td>
											<a href="<?= base_url('laporan/pdf_pilih_sampah') ?>" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
										</td>			
									</tr>
									<tr>
										<td>Petugas Kebersihan</td>
										<td>
											<a href="<?= base_url('laporan/pdf_petugas_kebersihan') ?>" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a>
										</td>			
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div id="kelola_sampah" style="height: 500px;"></div>
			</div>
			<div class="col-md-12 mt-5">
				<div id="pilih_sampah" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	window.onload = function() {
		var kelola_sampah = new CanvasJS.Chart("kelola_sampah", {
			animationEnabled: true,
			title: {
				text: "Persentase Pengelolaan Sampah Rumah Tangga",
				fontSize: 20,
			},
			axisX: {
				labelFontSize: 15,
				labelFontColor: "black",
			},
			data: [{
					type: "stackedBar",
					dataPoints: <?= json_encode($p61, JSON_NUMERIC_CHECK); ?>
				},
			]
		});

		var pilih_sampah = new CanvasJS.Chart("pilih_sampah", {
			animationEnabled: true,
			title: {
				text: "Persentase Praktik Pemilahan Sampah Rumah Tangga",
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

		pilih_sampah.render();
		kelola_sampah.render();
	}
</script>

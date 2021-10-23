<?php

foreach ($pengelolaan61 as $temp => $p) {
	$p61[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan62 as $temp => $p) {
	$p62[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan63 as $temp => $p) {
	$p63[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan64 as $temp => $p) {
	$p64[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan65 as $temp => $p) {
	$p65[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan66 as $temp => $p) {
	$p66[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan67 as $temp => $p) {
	$p67[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan68 as $temp => $p) {
	$p68[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}
foreach ($pengelolaan69 as $temp => $p) {
	$p69[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}

$data = [$p61, $p62];

// print_r(json_encode($data, JSON_NUMERIC_CHECK))

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
				<div class="card">
					<form action="<?= base_url('laporan/export') ?>" method="post">
					<div class="card-header">
						Laporan
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="username">Nama Laporan</label>
							<select name="laporan" id="laporan" class="form-control">
								<option value="kondisi_sampah">Kondisi Sampah</option>
								<option value="kelola_sampah">Pengelolaan Sampah</option>
								<option value="pilih_sampah">Pemilihan Sampah</option>
								<option value="petugas_kebersihan">Petugas Kebersihan</option>
							</select>
						</div>
						<div class="form-group">
							<label for="username">Tanggal</label>
							<div class="row">
								<div class="col-md-5 col-sm-12">
									<input type="date" name="initial_date" id="initial_date" class="form-control" value="<?= date('Y-m-d') ?>">
								</div>
								<div class="col-md-2 col-sm-12">
									<p class="text-center my-2">to</p>
								</div>
								<div class="col-md-5 col-sm-12">
									<input type="date" name="end_date" id="end_date" class="form-control" value="<?= date('Y-m-d') ?>">
								</div>
							</div>
						</div>
						<div class="form-group">
							<label for="username">Wilayah</label>
							<select name="wilayah" id="wilayah" class="form-control">
								<option value="kecamatan">Kecamatan</option>
								<option value="kelurahan">Kelurahan</option>
							</select>
						</div>		
					</div>
					<div class="card-footer">
						<button type="submit" class="btn btn-danger"><i class="fas fa-file-pdf"></i> Export Laporan</button>
					</div>
					</form>	
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
				<div id="kelola_sampah" style="height: 370px;"></div>
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

<?php

foreach ($district as $temp => $d) {
	$dis[] = [
		'label' => $d->district_name,
		'y' => rand(3, 50)
	];
}

?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6 col-sm-12 mb-3">
				<h1 class="m-0">Laporan <?= $title ?></h1>
			</div>
			<div class="col-md-6 col-sm-12">
				<div class="float-md-right">
					<a href="<?= base_url('laporan/pdf_sampah') ?>" class="btn btn-danger"><i class="fas fa-file-pdf mx-1"></i> Laporan</a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
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
				text: "Persentase Pengelolaan Sampah Rumah Tangga"
			},

			data: [{
					type: "stackedBar",
					dataPoints: <?= json_encode($dis, JSON_NUMERIC_CHECK); ?>
				},
				{
					type: "stackedBar",
					dataPoints: <?= json_encode($dis, JSON_NUMERIC_CHECK); ?>
				},
			]
		});

		var pilih_sampah = new CanvasJS.Chart("pilih_sampah", {
			title: {
				text: "Persentase Praktik Pemilahan Sampah Rumah Tangga"
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

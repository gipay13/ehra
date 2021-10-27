<?php
foreach ($banjir as $temp => $b) {
	$banjirr[] = [
		'label' => $b->answer_name,
		'y' => $b->persentase
	];
}

foreach ($banjirrutin as $temp => $b) {
	$br[] = [
		'label' => $b->district_name,
		'y' => $b->result
	];
}

foreach ($lamagenang as $temp => $l) {
	$lg[] = [
		'label' => $l->answer_name,
		'y' => $l->count_answer
	];
}

foreach ($genangan as $temp => $g) {
	$genangann[] = [
		'label' => $g->answer_name,
		'y' => $g->persentase
	];
}

foreach ($spal as $temp => $s) {
	$spall[] = [
		'label' => $s->answer_name,
		'y' => $s->persentase
	];
}

foreach ($spalberfungsi as $temp => $spalf) {
	$sb[] = [
		'label' => $spalf->answer_name,
		'y' => $spalf->persentase
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
					<a href="<?= base_url('laporan/pdf_infoumum') ?>" class="btn btn-danger"><i class="fas fa-file-pdf mx-1"></i> Laporan</a>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row mb-2">
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
								<option value="drainase">Drainase Sekitar Rumah</option>
								<option value="limbah_nontinja">Lokasi Pembuangan Limbah Selain Tinja</option>
								<option value="banjir">Banjir</option>
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
			<div class="col-md-6 col-sm-12 mb-5">
				<div id="banjir" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mb-5">
				<div id="banjirrutin" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mb-5">
				<div id="lamagenang" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mb-5">
				<div id="lokasigenang" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mb-5">
				<div id="punyaspal" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mb-5">
				<div id="spalberfungsi" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script>
	window.onload = function() {
		var banjir = new CanvasJS.Chart("banjir", {
			animationEnabled: true,
			title: {
				text: "Persentase Rumah Tangga yang Pernah Mengalami Banjir",
				fontSize: 20,
			},
			axisX: {
				labelFontSize: 10,
				labelFontColor: "black",
			},
			data: [
				{
					type: "column",
					toolTipContent: "{y} %",
					dataPoints: <?= json_encode($banjirr, JSON_NUMERIC_CHECK) ?>
				}
			]
		});

		var banjirrutin = new CanvasJS.Chart("banjirrutin", {
			animationEnabled: true,
			title: {
				text: "Persentase Rumah Tangga yang Mengalami Banjir Rutin",
				fontSize: 20,
			},

			data: [{
					type: "stackedBar",
					toolTipContent: "{y} %",
					dataPoints: <?= json_encode($br, JSON_NUMERIC_CHECK) ?>
				}

			]
		});

		var lamagenang = new CanvasJS.Chart("lamagenang", {
			animationEnabled: true,
			title: {
				text: "Lama Air Menggenang Jika Terjadi Banjir",
				fontSize: 20,
			},

			data: [{
					type: "stackedBar",
					toolTipContent: "{y} Responden",
					dataPoints: <?= json_encode($lg, JSON_NUMERIC_CHECK) ?>
				}

			]
		});

		var lokasigenang = new CanvasJS.Chart("lokasigenang", {
			animationEnabled: true,
			title: {
				text: "Lokasi Genangan di Sekitar Rumah",
				fontSize: 20,
			},
			data: [{
				type: "pie",
				showInLegend: true,
				percentFormatString: "#0.#",
				toolTipContent: "{label} - #percent %",
				legendText: "{label}",
				dataPoints: <?= json_encode($genangann, JSON_NUMERIC_CHECK) ?>
			}]
		});

		var punyaspal = new CanvasJS.Chart("punyaspal", {
			animationEnabled: true,
			title: {
				text: "Persentase Kepemilikan SPAL",
				fontSize: 20,
			},
			legend: {
				maxWidth: 350,
				itemWidth: 120
			},
			data: [{
				type: "pie",
				showInLegend: true,
				percentFormatString: "#0.#",
				toolTipContent: "{label} - #percent %",
				legendText: "{label}",
				dataPoints: <?= json_encode($spall, JSON_NUMERIC_CHECK) ?>
			}]
		});

		var spalberfungsi = new CanvasJS.Chart("spalberfungsi", {
			animationEnabled: true,
			title: {
				text: "Persentase SPAL yang Berfungsi",
				fontSize: 20,
			},

			data: [{
					type: "column",
					toolTipContent: "{y} %",
					dataPoints: <?= json_encode($sb, JSON_NUMERIC_CHECK) ?>
				}

			]
		});


		banjir.render();
		banjirrutin.render();
		lamagenang.render();
		lokasigenang.render();
		punyaspal.render();
		spalberfungsi.render();
	}
</script>

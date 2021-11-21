<?php
foreach ($tba->result() as $temp => $t) {
	$tbaa[] = [
		'label' => $t->answer_name,
		'y' => round($t->persentase)
	];
}

foreach ($pba->result() as $temp => $p) {
	$pbaa[] = [
		'label' => $p->answer_name,
		'y' => round($p->persentase)
	];
}

foreach ($waktukuras->result() as $temp => $w) {
	$wk[] = [
		'label' => $w->answer_name,
		'y' => $w->count_answer
	];
}

foreach ($praktikkuras->result() as $temp => $p) {
	$pk[] = [
		'label' => $p->answer_name,
		'y' => round($p->persentase)
	];
}

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
			<?php if($this->session->userdata('level') == 1) { ?>
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
								<option value="tba">Tempat Buang Air Besar</option>
								<option value="bab">Buang Air Besar di Tempat Terbuka</option>
								<option value="jamban">Kepemilikan Jamban Pribadi</option>
								<option value="pembuangan">Pembuangan Limbah</option>
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
			<?php } ?>
			<div class="<?= $this->session->userdata('level') == 1 ? 'col-md-6' : 'col-md-12'?> col-sm-12">
				<div id="tba" style="height: 370px;"></div>
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
					type: "column",
					yValueFormatString: "#### Rumah Tangga",
					dataPoints: <?= json_encode($wk, JSON_NUMERIC_CHECK); ?>
				},
			]
		});

		var praktikkuras = new CanvasJS.Chart("praktikkuras", {
			animationEnabled: true,
			title: {
				text: "Praktik Pengurasan Tanki Septik",
				fontSize: 20,
			},
			axisX: {
				labelFontSize: 10,
				labelFontColor: "black",
			},
			data: [{
					type: "column",
					toolTipContent: "{label} - {y} %",
					dataPoints: <?= json_encode($pk, JSON_NUMERIC_CHECK); ?>
				}

			]
		});

		praktikkuras.render();
		waktukuras.render();
		tba.render();
		tpa.render();
	}
</script>

<?php

foreach ($diare as $temp => $d) {
	$diaree[] = [
		'label' => $d->answer_name,
		'y' => $d->count_answer
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
		<div class="row">
			<div class="col-md-12 mb-5">
				<div id="diare" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script>
	window.onload = function() {
		var diare = new CanvasJS.Chart("diare", {
			animationEnabled: true,
			title: {
				text: "Waktu Terjadinya Penyakit Diare",
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
				dataPoints:  <?= json_encode($diaree, JSON_NUMERIC_CHECK); ?>
			}]
		});

		diare.render();
	}
</script>

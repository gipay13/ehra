<?php

foreach ($umur as $temp => $u) {
	$kelompok_umur[] = [
		'label' => $u->answer_name,
		'y' => $u->count_answer
	];
}
// echo '<pre>';
// print_r($umur);
// echo '</pre>';
?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Laporan <?= $title ?></h1>
			</div>
			<div class="col-sm-6">
				<a href="<?= base_url('laporan/pdf_infoumum') ?>" class="btn btn-danger btn-xs"><i class="fas fa-file-pdf mx-1"></i></a>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
				<div id="kelompok_umur" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script>
	window.onload = function() {

		var chart = new CanvasJS.Chart("kelompok_umur", {
			animationEnabled: true,
			theme: "light2", // "light1", "light2", "dark1", "dark2"
			title: {
				text: "Kelompok Umur Responden",
				fontFamily: "Helvetica"
			},
			axisY: {
				labelFontFamily: "Helvetica"
			},
			data: [{
				type: "column",
				dataPoints: <?= json_encode($kelompok_umur, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();

	}
</script>

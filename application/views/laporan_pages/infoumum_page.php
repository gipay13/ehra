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
			<div class="col-md-6 col-sm-12 mb-3">
				<h1 class="m-0">Laporan <?= $title ?></h1>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6 col-sm-12">
				<div class="card" style="height: 370px;">
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
										<td>Informasi Responden</td>
										<td><a href="<?= base_url('laporan/pdf_infoumum') ?>" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></a></td>			
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12">
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
				fontSize: 20,
			},
			axisX: {
				labelFontSize: 10,
				labelFontColor: "black",
			},
			data: [{
				type: "column",
				yValueFormatString: "#### Responden",
				dataPoints: <?= json_encode($kelompok_umur, JSON_NUMERIC_CHECK); ?>
			}]
		});
		chart.render();

	}
</script>

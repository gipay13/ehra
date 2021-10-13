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
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6 col-sm-12">
				<div class="card" style="height: 370px;">
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
										<td>Kejadian Penyakit Diare</td>
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
										<td><button type="submit" name="kejadian_diare" class="btn btn-danger btn-sm"><i class="fas fa-file-pdf"></i></button></td>
										</form>			
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-sm-12 mb-5">
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

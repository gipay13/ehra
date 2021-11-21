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
								<option value="kejadian_diare">Kejadian Penyakit Diare</option>
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
			<div class="<?= $this->session->userdata('level') == 1 ? 'col-md-6' : 'col-md-12'?> col-sm-12 mb-5">
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

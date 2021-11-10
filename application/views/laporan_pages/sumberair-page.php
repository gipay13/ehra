<?php

foreach ($akses as $temp => $a) {
	$ak[] = [
		'label' => $a->answer_name,
		'y' => round($a->persentase)
	];
}

?>
<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-12 mb-3">
				<h1 class="m-0">Laporan <?= $title ?></h1>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-12">
				<div class="card">
					<form action="<?= base_url('laporan/export') ?>" method="post">
					<div class="card-header">
						Laporan
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="username">Nama Laporan</label>
							<select name="laporan" id="laporan" class="form-control">
								<option value="pengelolaan_sumberair">Pengelolaan Air Yang Aman dan Higiene</option>
								<option value="kualitas_sumberair">Lokasi dan Kualitas Sumber Air</option>
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
			<div class="col-md-12 mb-5">
				<div id="akses" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script>
	window.onload = function() {
		var akses = new CanvasJS.Chart("akses", {
			animationEnabled: true,
			title: {
				text: "Akses Terhadap Air Bersih",
				fontSize: 20,
			},
			axisX: {
				labelFontSize: 5,
				labelFontColor: "black",
			},
			data: [{
					type: "column",
					toolTipContent: "{label} - {y} %",
					dataPoints: <?= json_encode($ak, JSON_NUMERIC_CHECK); ?>
				},
			]
		});


		akses.render();
	}
</script>

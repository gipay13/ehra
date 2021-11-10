<?php

foreach ($ctps as $temp => $c) {
	$ct[] = [
		'label' => $c->answer_name,
		'y' => round($c->persentase)
	];
}

foreach ($waktuctps as $temp => $wct) {
	$wctps[] = [
		'label' => $wct->answer_name,
		'y' => round($wct->persentase)
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
								<option value="perilaku_higiene">Perilaku Higiene</option>
								<option value="penggunaan_sabun">Penggunaan Sabun</option>
								<option value="lokasi_cucitangan">Lokasi Cuci Tangan Keluarga</option>
								<option value="waktu_cucitangan">Waktu Cuci Tangan</option>
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
				<div id="ctps" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mb-5">
				<div id="waktuctps" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script>
	window.onload = function() {
		var ctps = new CanvasJS.Chart("ctps", {
			animationEnabled: true,
			title: {
				text: "CTPS di Lima Waktu Penting",
				fontSize: 20,
			},

			data: [{
					type: "bar",
					toolTipContent: "{y} %",
					dataPoints: <?= json_encode($ct, JSON_NUMERIC_CHECK); ?> 
				},
			]
		});

		var waktuctps = new CanvasJS.Chart("waktuctps", {
			animationEnabled: true,
			title: {
				text: "Waktu Melakukan CTPS",
				fontSize: 20,
			},
			data: [{
				type: "bar",
				toolTipContent: "{label} - {y} %",
				dataPoints: <?= json_encode($wctps, JSON_NUMERIC_CHECK); ?> 
			}]
		});

		ctps.render();
		waktuctps.render();
	}
</script>

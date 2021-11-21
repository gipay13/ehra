<?php

foreach ($kelola_sampah as $temp => $k) {
	$ks[] = [
		'label' => $k->answer_name,
		'y' => $k->count_answer
	];
}

foreach ($pilih_sampah_ya as $temp => $p) {
	$psy[] = [
		'label' => $p->district_name,
		'y' => $p->result
	];
}

foreach ($pilih_sampah_tidak as $temp => $p) {
	$pst[] = [
		'label' => $p->district_name,
		'y' => $p->result
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
		<div class="row">
			<?php if($this->session->userdata('level') == 1) { ?>
			<div class="col-md-12 mb-5">
				<div class="card">
					<form action="<?= base_url('laporan/export') ?>" method="post">
					<div class="card-header">
						Laporan
					</div>
					<div class="card-body">
						<div class="form-group">
							<label for="username">Nama Laporan</label>
							<select name="laporan" id="laporan" class="form-control">
								<option value="kondisi_sampah">Kondisi Sampah</option>
								<option value="kelola_sampah">Pengelolaan Sampah</option>
								<option value="pilih_sampah">Pemilihan Sampah</option>
								<option value="petugas_kebersihan">Petugas Kebersihan</option>
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
			<div class="col-md-12 mb-5">
				<div id="kelola_sampah" style="height: 370px;"></div>
			</div>
			<div class="col-md-6 col-sm-12 mb-5">
				<div id="pilih_sampah_ya" style="height: 370px;"></div>
			</div>
			<div class="col-md-6 col-sm-12 mb-5">
				<div id="pilih_sampah_tidak" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script type="text/javascript">
	window.onload = function() {
		var kelola_sampah = new CanvasJS.Chart("kelola_sampah", {
			animationEnabled: true,
			title: {
				text: "Persentase Pengelolaan Sampah Rumah Tangga",
				fontSize: 20,
			},
			axisX: {
				labelFontSize: 10,
				labelFontColor: "black",
			},
			data: [{
					type: "pie",
					showInLegend: true,
					percentFormatString: "#0.#",
					toolTipContent: "{label} - #percent %",
					legendText: "{label}",
					dataPoints: <?= json_encode($ks, JSON_NUMERIC_CHECK); ?>
				},
			]
		});

		var pilih_sampah_ya = new CanvasJS.Chart("pilih_sampah_ya", {
			animationEnabled: true,
			title: {
				text: "Persentase Praktik Pemilahan Sampah Rumah Tangga",
				fontSize: 20,
			},
			subtitles: [{
				text: "Persetase Jawaban Ya",		
				fontColor: "green",
			}],
			data: [{
					type: "stackedBar",
					toolTipContent: "{y} %",
					dataPoints: <?= json_encode($psy, JSON_NUMERIC_CHECK); ?>
				},
				
			]
		});

		var pilih_sampah_tidak = new CanvasJS.Chart("pilih_sampah_tidak", {
			animationEnabled: true,
			title: {
				text: "Persentase Praktik Pemilahan Sampah Rumah Tangga",
				fontSize: 20,
			},
			subtitles: [{
				text: "Persetase Jawaban Tidak",		
				fontColor: "red",
			}],
			data: [{
					type: "stackedBar",
					toolTipContent: "{y} %",
					dataPoints: <?= json_encode($pst, JSON_NUMERIC_CHECK); ?>
				},
				
			]
		});

		pilih_sampah_ya.render();
		pilih_sampah_tidak.render();
		kelola_sampah.render();
	}
</script>

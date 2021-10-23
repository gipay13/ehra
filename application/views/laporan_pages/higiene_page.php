<?php

// foreach ($umur as $temp => $u) {
// 	$kelompok_umur[] = [
// 		'label' => $u->answer_name,
// 		'y' => $u->count_answer
// 	];
// }

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
			<div class="col-md-12 mb-5">
				<div id="babs" style="height: 370px;"></div>
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
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},

				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 61
						},
						{
							x: new Date(2012, 02, 1),
							y: 75
						},
						{
							x: new Date(2012, 03, 1),
							y: 80
						},
						{
							x: new Date(2012, 04, 1),
							y: 85
						},
						{
							x: new Date(2012, 05, 1),
							y: 105
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 20
						},
						{
							x: new Date(2012, 02, 1),
							y: 35
						},
						{
							x: new Date(2012, 03, 1),
							y: 30
						},
						{
							x: new Date(2012, 04, 1),
							y: 45
						},
						{
							x: new Date(2012, 05, 1),
							y: 25
						}

					]
				}

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
				dataPoints: [{
						y: 198,
						label: "Italy"
					},
					{
						y: 201,
						label: "China"
					},
					{
						y: 202,
						label: "France"
					},
					{
						y: 236,
						label: "Great Britain"
					},
					{
						y: 395,
						label: "Soviet Union"
					},
					{
						y: 957,
						label: "USA"
					}
				]
			}]
		});


		var babs = new CanvasJS.Chart("babs", {
			animationEnabled: true,
			title: {
				text: "Persentase Praktik Buang Air Besar Sembarangan (BABS)",
				fontSize: 20,
			},

			data: [{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 71
						},
						{
							x: new Date(2012, 02, 1),
							y: 55
						},
						{
							x: new Date(2012, 03, 1),
							y: 50
						},
						{
							x: new Date(2012, 04, 1),
							y: 65
						},
						{
							x: new Date(2012, 05, 1),
							y: 95
						}

					]
				},

				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 61
						},
						{
							x: new Date(2012, 02, 1),
							y: 75
						},
						{
							x: new Date(2012, 03, 1),
							y: 80
						},
						{
							x: new Date(2012, 04, 1),
							y: 85
						},
						{
							x: new Date(2012, 05, 1),
							y: 105
						}

					]
				},
				{
					type: "stackedBar",
					dataPoints: [{
							x: new Date(2012, 01, 1),
							y: 20
						},
						{
							x: new Date(2012, 02, 1),
							y: 35
						},
						{
							x: new Date(2012, 03, 1),
							y: 30
						},
						{
							x: new Date(2012, 04, 1),
							y: 45
						},
						{
							x: new Date(2012, 05, 1),
							y: 25
						}

					]
				}

			]
		});

		ctps.render();
		waktuctps.render();
		babs.render();
	}
</script>

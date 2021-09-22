<!-- <?php

		foreach ($umur as $temp => $u) {
			$kelompok_umur[] = [
				'label' => $u->answer_name,
				'y' => $u->count_answer
			];
		}
		echo '<pre>';
		print_r($umur);
		echo '</pre>';
		?> -->
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
		<div class="row">
			<div class="col-md-12">
				<div id="tba" style="height: 370px;"></div>
			</div>
			<div class="col-md-12 mt-5">
				<div id="tpa" style="height: 370px;"></div>
			</div>
		</div>
	</div>
</section>
<script>
	window.onload = function() {
		var tba = new CanvasJS.Chart("tba", {
			theme: "light2",
			title: {
				text: "Persentase Tempat Buang Air Besar"
			},
			data: [{
				type: "pie",
				showInLegend: true,
				toolTipContent: "{y} - #percent %",
				yValueFormatString: "#,##0,,.## Million",
				legendText: "{indexLabel}",
				dataPoints: [{
						y: 4181563,
						indexLabel: "PlayStation 3"
					},
					{
						y: 2175498,
						indexLabel: "Wii"
					},
					{
						y: 3125844,
						indexLabel: "Xbox 360"
					},
					{
						y: 1176121,
						indexLabel: "Nintendo DS"
					},
					{
						y: 1727161,
						indexLabel: "PSP"
					},
					{
						y: 4303364,
						indexLabel: "Nintendo 3DS"
					},
					{
						y: 1717786,
						indexLabel: "PS Vita"
					}
				]
			}]
		});

		var tpa = new CanvasJS.Chart("tpa", {
			theme: "light2",
			title: {
				text: "Tempat Penyaluran Akhir Tinja"
			},
			data: [{
				type: "pie",
				showInLegend: true,
				toolTipContent: "{y} - #percent %",
				yValueFormatString: "#,##0,,.## Million",
				legendText: "{indexLabel}",
				dataPoints: [{
						y: 4181563,
						indexLabel: "PlayStation 3"
					},
					{
						y: 2175498,
						indexLabel: "Wii"
					},
					{
						y: 3125844,
						indexLabel: "Xbox 360"
					},
					{
						y: 1176121,
						indexLabel: "Nintendo DS"
					},
					{
						y: 1727161,
						indexLabel: "PSP"
					},
					{
						y: 4303364,
						indexLabel: "Nintendo 3DS"
					},
					{
						y: 1717786,
						indexLabel: "PS Vita"
					}
				]
			}]
		});
		tba.render();
		tpa.render();
	}
</script>

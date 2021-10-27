<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
	<style type="text/css">
			body {
				font-size: 10pt;
				font-family: "helvetica", Courier, monospace;
			}

			.line-title {
				border: 0;
				border-style: inset;
				border-top: 5px solid #000;
			}

			.table {
				border-collapse: collapse;
				width: 100%;
			}

			.table td, .table th {
				border: 2px solid #ddd;
			}

			.table tr:nth-child(even){background-color: #f2f2f2;}

			.table th {
				padding-top: 12px;
				padding-bottom: 12px;
				text-align: center;
				background-color: #04AA6D;
				color: white;
			}
		</style>
</head>
<body>
    <table width="100%">
		<tr>
			<td style="text-align: left;">
				<span style="font-weight: bold; font-size: 80px;">
					Laporan <?= $title ?>
					<br><?= $subtitle ?>
				</span>
				<br>
				<span style="font-size: 70px;">Tanggal : <?= indo_date($initial_date) ?> - <?= indo_date($end_date) ?></span>
			</td>
		</tr>
	</table>
	<br>
	<hr class="line-title">
	<table width="100%">
		<tr>
			<td style="padding-top: 60px;"></td>
		</tr>
	</table>
	<table class="table" width="100%">
		<tr>
			<th colspan="2" rowspan="3"><?= $title ?></th>
			<th colspan="<?= ($village->num_rows() * 2) + 2 ?>" class="text-center">% KELURAHAN</th>
			<tr>
				<?php foreach ($village->result() as $v) { ?>
					<th colspan="2"><?= $v->village_name ?></th>
				<?php } ?>
				<th colspan="2">Kota Sukabumi</th>
			</tr>
			<tr>
				<?php foreach ($village->result() as $v) { ?>
					<th>n</th>
					<th>%</th>
				<?php } ?>
				<th>n</th>
				<th>%</th>
			</tr>
		</tr>

		<?php foreach ($question as $q) { ?>
			<tr>
                <td width="10%" rowspan="<?= $this->CI->answer_kelurahan($q->id, $initial_date, $end_date)->num_rows() + 1 ?>"><?= $q->question_name ?></td>
				<?php $answer = $this->CI->answer_kelurahan($q->id, $initial_date, $end_date)->result() ?>
				<?php foreach ($answer as $a) { ?>
					<?php $total_jawaban = $a->result_sudajaya + $a->result_jayamekar + $a->result_jayaraksa + $a->result_baros + 
								$a->result_lembursitu + $a->result_situmekar + $a->result_cipanengah + $a->result_cikundul + 
								$a->result_sidangsari + $a->result_sindangpalay + $a->result_limusnunggal + $a->result_cibeureum + 
								$a->result_babakan + $a->result_cikondang + $a->result_gedong + $a->result_citamiang + $a->result_nanggeleng +
								$a->result_tipar + $a->result_dayeuhluhur + $a->result_warudoyong +
								$a->result_nyomplong + $a->result_benteng + $a->result_sukakarya + $a->result_karangtengah +
								$a->result_gunungpuyuh + $a->result_sriwidari + $a->result_karamat + $a->result_gunungparang +
								$a->result_cikole + $a->result_kebonjati + $a->result_selabatu + $a->result_cisarua + $a->result_subangjaya  
					?>
					<tr>
						<td><?= $a->answer_name ?></td>
						<td><?= $a->result_sudajaya ?></td>
						<td><?= round($a->persentase_sudajaya) ?>%</td>
						<td><?= $a->result_jayamekar ?></td>
						<td><?= round($a->persentase_jayamekar) ?>%</td>
						<td><?= $a->result_jayaraksa ?></td>
						<td><?= round($a->persentase_jayaraksa) ?>%</td>
						<td><?= $a->result_baros ?></td>
						<td><?= round($a->persentase_baros) ?>%</td>
						<td><?= $a->result_lembursitu ?></td>
						<td><?= round($a->persentase_lembursitu) ?>%</td>
						<td><?= $a->result_situmekar ?></td>
						<td><?= round($a->persentase_situmekar) ?>%</td>
						<td><?= $a->result_cipanengah ?></td>
						<td><?= round($a->persentase_cipanengah) ?>%</td>
                        <td><?= $a->result_cikundul ?></td>
						<td><?= round($a->persentase_cikundul) ?>%</td>
                        <td><?= $a->result_sidangsari ?></td>
						<td><?= round($a->persentase_sidangsari) ?>%</td>
                        <td><?= $a->result_sindangpalay ?></td>
						<td><?= round($a->persentase_sindangpalay) ?>%</td>
                        <td><?= $a->result_limusnunggal ?></td>
						<td><?= round($a->persentase_babakan) ?>%</td>
                        <td><?= $a->result_cibeureum ?></td>
						<td><?= round($a->persentase_cibeureum) ?>%</td>
                        <td><?= $a->result_cikondang ?></td>
						<td><?= round($a->persentase_cikondang) ?>%</td>
                        <td><?= $a->result_gedong ?></td>
						<td><?= round($a->persentase_gedong) ?>%</td>
                        <td><?= $a->result_citamiang ?></td>
						<td><?= round($a->persentase_citamiang) ?>%</td>
                        <td><?= $a->result_nanggeleng ?></td>
						<td><?= round($a->persentase_nanggeleng) ?>%</td>
                        <td><?= $a->result_cipanengah ?></td>
						<td><?= round($a->persentase_cipanengah) ?>%</td>
                        <td><?= $a->result_tipar ?></td>
						<td><?= round($a->persentase_tipar) ?>%</td>
                        <td><?= $a->result_dayeuhluhur ?></td>
						<td><?= round($a->persentase_dayeuhluhur) ?>%</td>
                        <td><?= $a->result_warudoyong ?></td>
						<td><?= round($a->persentase_warudoyong) ?>%</td>
                        <td><?= $a->result_nyomplong ?></td>
						<td><?= round($a->persentase_nyomplong) ?>%</td>
                        <td><?= $a->result_benteng ?></td>
						<td><?= round($a->persentase_benteng) ?>%</td>
                        <td><?= $a->result_sukakarya ?></td>
						<td><?= round($a->persentase_sukakarya) ?>%</td>
                        <td><?= $a->result_karangtengah ?></td>
						<td><?= round($a->persentase_karangtengah) ?>%</td>
                        <td><?= $a->result_gunungpuyuh ?></td>
						<td><?= round($a->persentase_gunungpuyuh) ?>%</td>
                        <td><?= $a->result_sriwidari ?></td>
						<td><?= round($a->persentase_sriwidari) ?>%</td>
                        <td><?= $a->result_karamat ?></td>
						<td><?= round($a->persentase_karamat) ?>%</td>
                        <td><?= $a->result_gunungparang ?></td>
						<td><?= round($a->persentase_gunungparang) ?>%</td>
                        <td><?= $a->result_cikole ?></td>
						<td><?= round($a->persentase_cikole) ?>%</td>
                        <td><?= $a->result_kebonjati ?></td>
						<td><?= round($a->persentase_kebonjati) ?>%</td>
                        <td><?= $a->result_selabatu ?></td>
						<td><?= round($a->persentase_selabatu) ?>%</td>
                        <td><?= $a->result_cisarua ?></td>
						<td><?= round($a->persentase_cisarua) ?>%</td>
                        <td><?= $a->result_subangjaya ?></td>
						<td><?= round($a->persentase_subangjaya) ?>%</td>
                        <td><?= $total_jawaban ?></td>
						<td><?= round(($total_jawaban / $a->total_survey) * 100) ?>%</td>
					</tr>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>
</body>
</html>
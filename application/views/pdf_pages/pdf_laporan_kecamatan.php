<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style type="text/css">
			body {
				font-size: 20pt;
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
				border: 1px solid #ddd;
				padding: 2px;
			}

			.table tr:nth-child(even){background-color: #f2f2f2;}

			.table th {
				padding-top: 5px;
				padding-bottom: 5px;
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
			<th colspan="<?= ($district->num_rows() * 2) + 2 ?>">% KECAMATAN</th>
			<tr>
				<?php foreach ($district->result() as $r) { ?>
					<th colspan="2"><?= $r->district_name ?></th>
				<?php } ?>
				<th colspan="2">Kota Sukabumi</th>
			</tr>
			<tr>
				<?php foreach ($district->result() as $r) { ?>
					<th>n</th>
					<th>%</th>
				<?php } ?>
				<th>n</th>
				<th>%</th>
			</tr>
		</tr>
		<?php foreach ($question as $q) { ?>
			<tr>
                <td width="20%" rowspan="<?= $this->CI->answer_kecamatan($q->id, $initial_date, $end_date)->num_rows() + 1 ?>"><?= $q->question_name ?></td>
				<?php $answer = $this->CI->answer_kecamatan($q->id, $initial_date, $end_date)->result() ?>
				<?php foreach ($answer as $a) { ?>
					<?php $total_jawaban = $a->result_cikole + $a->result_gunungpuyuh + $a->result_warudoyong + $a->result_citamiang + $a->result_cibeureum + $a->result_lembursitu + $a->result_baros ?>
					<tr>
						<td width="20%"><?= $a->answer_name ?></td>
						<td><?= $a->result_cikole ?></td>
						<td><?= round($a->persentase_cikole) ?>%</td>
						<td><?= $a->result_gunungpuyuh ?></td>
						<td><?= round($a->persentase_gunungpuyuh) ?>%</td>
						<td><?= $a->result_warudoyong ?></td>
						<td><?= round($a->persentase_warudoyong) ?>%</td>
						<td><?= $a->result_citamiang ?></td>
						<td><?= round($a->persentase_citamiang) ?>%</td>
						<td><?= $a->result_cibeureum ?></td>
						<td><?= round($a->persentase_cibeureum) ?>%</td>
						<td><?= $a->result_lembursitu ?></td>
						<td><?= round($a->persentase_lembursitu) ?>%</td>
						<td><?= $a->result_baros ?></td>
						<td><?= round($a->persentase_baros) ?>%</td>
						<td><?= $total_jawaban ?></td>
						<td><?= round(($total_jawaban/$a->total_survey) * 100) ?>%</td>
					</tr>
				<?php } ?>
			</tr>
		<?php } ?>
	</table>
</body>

</html>

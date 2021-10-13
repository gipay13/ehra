<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
	<!-- Font Awesome -->
	<link rel="stylesheet" href="<?= base_url('assets/plugins/fontawesome-free/css/all.min.css') ?>">
	<!-- Ionicons -->
	<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
	<!-- Theme style -->
	<link rel="stylesheet" href="<?= base_url('assets/dist/css/adminlte.min.css') ?>">
    <title>Document</title>
    <style>
        .line-title {
			border: 0;
			border-style: inset;
			border-top: 2px solid #000;
		}
    </style>
</head>

<body>
	<table>
		<tr>
			<td width="20%"><img style="width: 80px; align-items: center;" src="<?= base_url('assets/dist/img/baktihusada.png') ?>"></td>
			<td width="60%" style="text-align: center;">DRAFT PERSENTASE HASIL PENILAIAN RISIKO KESEHATAN LINGKUNGAN 2020/2024<br>Environmental Health Risk Assessment (EHRA)</td>
			<td width="20%" class="float-right mt-3"><img style="width: 180px" src="<?= base_url('assets/dist/img/ppsp.jpg') ?>"></td>
		</tr>
	</table>
	<br>
	<hr class="line-title">
	<table width="100%">
		<tr>
			<td style="padding-top: 60px;"></td>
		</tr>
	</table>
	<h3>Tanggal : <?= $initial_date ?> - <?= $end_date ?></h3>
	<table class="table table-bordered">
		<thead>
			<tr>
				<th colspan="2" rowspan="3"><?= $title ?></th>
				<th colspan="<?= $district->num_rows() * 2 ?>">% Kecamatan</th>
				<tr>
					<?php foreach ($district->result() as $r) { ?>
						<th colspan="2"><?= $r->district_name ?></th>
					<?php } ?>
				</tr>
				<tr>
					<?php foreach ($district->result() as $r) { ?>
						<th>n</th>
						<th>%</th>
					<?php } ?>
				</tr>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($question as $q) { ?>
			<tr>
                <td rowspan="<?= $this->CI->answer_kecamatan($q->id, $initial_date, $end_date)->num_rows() + 1 ?>"><?= $q->question_name ?></td>
				<?php $answer = $this->CI->answer_kecamatan($q->id, $initial_date, $end_date)->result() ?>
				<?php foreach ($answer as $a) { ?>
					<tr>
						<td><?= $a->answer_name ?></td>
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
					</tr>
				<?php } ?>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>

</html>

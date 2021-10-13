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
			<td width="60%" style="text-align: center;"><h4>DRAFT PERSENTASE HASIL PENILAIAN RISIKO KESEHATAN LINGKUNGAN 2020/2024<br>Environmental Health Risk Assessment (EHRA)</h4></td>
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
	<h5>Tanggal : <?= $initial_date ?> - <?= $end_date ?></h5>
	<table class="table table-bordered" width="100%">
		<thead>
			<tr>
				<th colspan="2" rowspan="3"><?= $title ?></th>
				<th colspan="<?= $village->num_rows() * 2 ?>" class="text-center">% KELURAHAN</th>
				<tr>
					<?php foreach ($village->result() as $v) { ?>
						<th colspan="2"><?= $v->village_name ?></th>
					<?php } ?>
				</tr>
				<tr>
					<?php foreach ($village->result() as $v) { ?>
						<th>n</th>
						<th>%</th>
					<?php } ?>
				</tr>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($question as $q) { ?>
			<tr>
                <td width="50%" rowspan="<?= $this->CI->answer_kelurahan($q->id, $initial_date, $end_date)->num_rows() + 1 ?>"><?= $q->question_name ?></td>
				<?php $answer = $this->CI->answer_kelurahan($q->id, $initial_date, $end_date)->result() ?>
				<?php foreach ($answer as $a) { ?>
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
                        
					</tr>
				<?php } ?>
			</tr>
			<?php } ?>
		</tbody>
	</table>
</body>
</html>
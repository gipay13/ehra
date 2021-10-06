<html>

<?php
// echo '<pre>';
// print_r($result);
// echo '</pre>'
?>

<head>
	<title></title>
	<style type="text/css">
		body {
			font-size: 10pt;
			font-family: "helvetica", Courier, monospace;
		}

		.line-title {
			border: 0;
			border-style: inset;
			border-top: 2px solid #000;
		}

		.table {
			width: 100%;
			margin-bottom: 1rem;
			color: #212529;
			background-color: transparent;
		}

		.table th,
		.table td {
			padding: 0.75rem;
			vertical-align: top;
			border-top: 1px solid #dee2e6;
		}

		.table thead th {
			vertical-align: bottom;
			border-bottom: 2px solid #dee2e6;
		}

		.table tbody+tbody {
			border-top: 2px solid #dee2e6;
		}

		.table-sm th,
		.table-sm td {
			padding: 0.3rem;
		}

		.table-bordered {
			border: 1px solid #dee2e6;
		}

		.table-bordered th,
		.table-bordered td {
			border: 1px solid #dee2e6;
		}

		.table-bordered thead th,
		.table-bordered thead td {
			border-bottom-width: 2px;
		}

		.table {
			border-collapse: collapse !important;
		}

		.table td,
		.table th {
			background-color: #fff !important;
		}

		.table-bordered th,
		.table-bordered td {
			border: 1px solid #dee2e6 !important;
		}
	</style>
</head>

<body>
	<table width="100%">
		<tr>
			<td width="20%"><img style="width: 50px; align-items: center;" src="<?= base_url('assets/dist/img/baktihusada.png') ?>"></td>
			<td width="60%" style="text-align: center;">DRAFT PERSENTASE HASIL PENILAIAN RISIKO KESEHATAN LINGKUNGAN 2020/2024<br>Environmental Health Risk Assessment (EHRA)</td>
			<td width="20%"><img style="width: 150px" src="<?= base_url('assets/dist/img/ppsp.jpg') ?>"></td>
		</tr>
	</table>
	<br>
	<hr class="line-title">
	<table width="100%">
		<tr>
			<td style="padding-top: 60px;"></td>
		</tr>
	</table>
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

		<?php foreach ($question as $q) { ?>
			<tr>
				<td rowspan="<?= $this->CI->answer_radio($q->id)->num_rows() + 1 ?>"><?= $q->question_name ?></td>
				<?php $answer = $this->CI->answer_radio($q->id)->result() ?>
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
	</table>
</body>

</html>

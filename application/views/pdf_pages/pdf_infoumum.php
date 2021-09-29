<html>

<?php
// echo '<pre>';
// print_r($answer);
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



		.table-striped tbody tr:nth-of-type(odd) {
			background-color: rgba(0, 0, 0, 0.05);
		}
	</style>
</head>

<body>
	<table width="100%">
		<tr>
			<td width="20%"><img style="width: 50px; align-items: center;" src="<?= base_url('assets/dist/img/baktihusada.png') ?>"></td>
			<td width="60%" style="text-align: center;">DRAFT PERTANYAAN PENILAIAN RISIKO KESEHATAN LINGKUNGAN 2020/2024<br>Environmental Health Risk Assessment (EHRA)</td>
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
	<table class="table table-striped">
		<tr>
			<th colspan="2" rowspan="2">Informasi Responden</th>
			<th colspan="<?= $district->num_rows() ?>">% Kecamatan</th>
		<tr>
			<?php foreach ($district->result() as $r) { ?>
				<th><?= $r->district_name ?></th>
			<?php } ?>
		</tr>
		</tr>
		<?php foreach ($question as $q) { ?>
			<tr>
				<td rowspan="<?= $this->CI->result($q->id)->num_rows() + 1 ?>"><?= $q->question_name ?></td>
				<?php $result = $this->CI->result($q->id)->result() ?>
				<?php foreach ($result as $r) { ?>
			<tr>
				<td><?= $r->answer_name ?></td>
				<td><?= round($r->persentase_baros) ?>%</td>
				<td><?= round($r->persentase_lembursitu) ?>%</td>
				<td><?= round($r->persentase_cibeureum) ?>%</td>
				<td><?= round($r->persentase_citamiang) ?>%</td>
				<td><?= round($r->persentase_waru) ?>%</td>
				<td><?= round($r->persentase_gunung) ?>%</td>
				<td><?= round($r->persentase_cikole) ?>%</td>
			</tr>
		<?php } ?>
		</tr>
	<?php } ?>
	</table>
</body>

</html>

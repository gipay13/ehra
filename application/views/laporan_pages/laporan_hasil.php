<!-- <pre>
<?= print_r($survey) ?>
</pre> -->
<!-- <pre>
<?= print_r($jawaban) ?>
</pre> -->
<html>

<head>
	<title></title>
	<style type="text/css">
		body {
			font-size: 12pt;
			font-family: "helvetica", Courier, monospace;
		}

		.line-title {
			border: 0;
			border-style: inset;
			border-top: 2px solid #000;
		}

		.table {
			width: 100%;
			border-spacing: 0;
		}

		.table tr:first-child th,
		.table tr:first-child td {
			border-top: 1px solid #000;
		}

		.table tr th:first-child,
		.table tr td:first-child {
			border-left: 1px solid #000;
		}

		.table tr th,
		.table tr td {
			border-right: 1px solid #000;
			border-bottom: 1px solid #000;
			padding: 10px;
		}
	</style>
</head>

<body>
	<table width="100%">
		<tr>
			<td width="10%"><img style="width: 70px;" src="/assets/img/baktihusada.png"></td>
			<td width="80%" style="text-align: center;">DRAFT HASIL PENILAIAN RISIKO KESEHATAN LINGKUNGAN 2020/2024<br>Environmental Health Risk Assessment (EHRA)</td>
			<td width="10%"><img style="width: 70px" src="/assets/img/baktihusada.png"></td>
		</tr>
	</table>
	<br>
	<hr class="line-title">
	<table width="100%">
		<tr>
			<td style="padding-top: 60px;"></td>
		</tr>
		<tr>
			<td style="text-align: center; background-color: #2985B4;">Informasi Umum</td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<td width="50%">Nomor Survey</td>
			<td width="50%"><?= $survey->no_survey ?></td>
		</tr>
		<tr>
			<td>Tanggal Survey</td>
			<td><?= $survey->survey_date ?></td>
		</tr>
		<tr>
			<td>Pewawancara</td>
			<td><?= $survey->name ?></td>
		</tr>
		<tr>
			<td>Koordinator Kecamatan</td>
			<td><?= $survey->coordinator_id ?></td>
		</tr>
		<tr>
			<td>Supervisor</td>
			<td><?= $survey->supervisor_id ?></td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td><?= $survey->district_name ?></td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td style="padding-top: 60px;"></td>
		</tr>
		<tr>
			<td style="text-align: center; background-color: #2985B4;">Identitas Responden</td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<td width="50%">Nomor Kartu Keluarga</td>
			<td width="50%"><?= $survey->nkk ?></td>
		</tr>
		<tr>
			<td width="50%">Nama Kepala Keluarga</td>
			<td width="50%"><?= $survey->nama_kepala ?></td>
		</tr>
		<tr>
			<td width="50%">Nomor Induk Keluarga</td>
			<td width="50%"><?= $survey->nik ?></td>
		</tr>
		<tr>
			<td width="50%">Nama Responden</td>
			<td width="50%"><?= $survey->nama_responden ?></td>
		</tr>
		<tr>
			<td width="50%">Jumlah Keluarga</td>
			<td width="50%"><?= $survey->jml_keluarga ?></td>
		</tr>
		<tr>
			<td width="50%">Jumlah Jiwa Dalam Rumah</td>
			<td width="50%"><?= $survey->jml_jiwa ?></td>
		</tr>
		<tr>
			<td width="50%">Hubungan Responden</td>
			<td width="50%"><?= $survey->hubungan_responden == 1 ? "Istri" : ($survey->hubungan_responden == 2 ? "Anak perempuan yang sudah menikah" : "Kepala keluarga"); ?></td>
		</tr>
		<tr>
			<td width="50%">Alamat</td>
			<td width="50%"><?= $survey->alamat ?></td>
		</tr>
		<tr>
			<td width="50%">RT</td>
			<td width="50%"><?= $survey->rt ?></td>
		</tr>
		<tr>
			<td width="50%">RW</td>
			<td width="50%"><?= $survey->rw ?></td>
		</tr>
		<tr>
			<td width="50%">Nomor Rumah</td>
			<td width="50%"><?= $survey->no_rmh ?></td>
		</tr>
	</table>
	<?php foreach ($kategori as $k) { ?>
		<table width="100%">
			<tr>
				<td style="padding-top: 60px;"></td>
			</tr>
		</table>
		<table class="table">
			<thead>
				<tr>
					<td colspan="3" style="text-align: center; background-color: #2985B4;"><?= $k->category_name ?></td>
				</tr>
			</thead>
			<?php $pertanyaan = $this->CI->pertanyaan($k->id) ?>
			<?php foreach ($pertanyaan as $p) { ?>
				<tr>
					<td width="40%"><?= $p->question_name ?></td>
					<td width="20%"></td>
					<td width="40%">
						<?php $jawaban = $this->CI->jawaban($p->id) ?>
						<?php foreach ($jawaban as $j) { ?>
							<div>
								<?= $j->answer_name ?>
							</div>
						<?php } ?>
					</td>
				</tr>
			<?php } ?>
		</table>
	<?php } ?>
</body>

</html>

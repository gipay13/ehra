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
			<td width="60%" style="text-align: center;">DRAFT HASIL PENILAIAN RISIKO KESEHATAN LINGKUNGAN 2020/2024<br>Environmental Health Risk Assessment (EHRA)</td>
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
			<td colspan="2" style="text-align: center; background-color: #2985B4;">Informasi Umum</td>
		</tr>
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
			<td><?= $survey->coordinator_name ?></td>
		</tr>
		<tr>
			<td>Supervisor</td>
			<td><?= $survey->supervisor_name ?></td>
		</tr>
		<tr>
			<td>Kecamatan</td>
			<td><?= $survey->district_name ?></td>
		</tr>
		<tr>
			<td>Kelurahan</td>
			<td><?= $survey->village_name ?></td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td style="padding-top: 50px;"></td>
		</tr>
	</table>
	<table class="table table-striped">
		<tr>
			<td colspan="2" style="text-align: center; background-color: #2985B4;">A. Identitas Responden</td>
		</tr>
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
				<td style="padding-top: 50px;"></td>
			</tr>
		</table>
		<table class="table table-striped">
			<tr>
				<td colspan="3" style="text-align: center; background-color: #2985B4;"><?= $k->category_code ?>. <?= $k->category_name ?></td>
			</tr>
			<?php $pertanyaan = $this->CI->pertanyaan($k->id) ?>
			<?php foreach ($pertanyaan as $p) { ?>
				<tr>
					<td width="40%"><?= $p->question_name ?></td>
					<td width="20%"></td>
					<td width="40%">
						<?php $jawaban = $this->CI->jawaban($survey->no_survey, $p->id) ?>
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

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
			border-collapse: collapse;
			width: 100%;
		}

		.table td, .table th {
			border: 1px solid #ddd;
			padding: 8px;
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
			<td width="15%"><img style="width: 100px; align-items: center;" src="<?= base_url('assets/dist/img/lambang_kota_sukabumi.png') ?>"></td>
			<td width="80%" style="text-align: left;">
				<span style="font-weight: bold;">
					DRAFT HASIL PENILAIAN RUMAH SEHAT 2020/2024
					<br>DINAS KESEHATAN KOTA SUKABUMI
				</span>
				<br>
				<span>Jl. Surya Kencana No.41, Selabatu, Kec. Cikole, Kota Sukabumi, Jawa Barat 43114</span>
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
	<table class="table">
		<tr>
			<th colspan="2" style="text-align: center;">Informasi Umum</th>
		</tr>
		<tr>
			<td width="50%">Nomor Survey</td>
			<td width="50%"><?= $survey->no_survey ?></td>
		</tr>
		<tr>
			<td>Tanggal Survey</td>
			<td><?= indo_date($survey->survey_date) ?></td>
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
	<table class="table" style="page-break-after: always;">
		<tr>
			<th colspan="2" style="text-align: center;">A. Identitas Responden</th>
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
		<table class="table">
			<tr>
				<th colspan="4" style="text-align: center;"><?= $k->category_code ?>. <?= $k->category_name ?> (Bobot <?= $k->category_weight ?>)</th>
			</tr>
			<tr>
				<td><b>Pertanyaan</b></td>
				<td><b>Jawaban</b></td>
				<td><b>Nilai</b></td>
				<td><b>Jumlah</b></td>
			</tr>
			<?php $pertanyaan = $this->CI->pertanyaan($k->id) ?>
			<?php foreach ($pertanyaan as $p) { ?>
				<tr>
					<td width="30%"><?= $p->question_name ?></td>
					
					<?php $jawaban = $this->CI->jawaban($survey->no_survey, $p->id) ?>
					<?php foreach ($jawaban as $j) { ?>
						<td width="50%"><?= $j->answer_name ?></td>
						<td width="10%"><?= $j->answer_weight ?></td>
						<td width="10%"><?= $j->answer_weight * $k->category_weight ?></td>
					<?php } ?>
					</td>
			<?php } ?>
		</table>
	<?php } ?>
	<table width="100%">
		<tr>
			<td style="padding-top: 50px;"></td>
		</tr>
	</table>
	<table width="100%">
		<tr>
			<td style="padding-top: 50px;"></td>
		</tr>
	</table>
	<table class="table">
		<tr>
			<th colspan="2" style="text-align: center;">Hasil Penilaian Rumah Sehat</th>
		</tr>
		<tr>
			<td width="50%">Total Bobot Penilaian</td>
			<td width="50%"><?= $total->total ?></td>
		</tr>
		<tr>
			<td width="50%">Status</td>
			<td width="50%"><?= $total->total <= 1068 ? "Rumah Tidak Sehat" : "Rumah Sehat" ?></td>
		</tr>
	</table>	
</body>

</html>

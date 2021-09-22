<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Hasil Survey</h1>
			</div>
			<?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2) { ?>
				<div class="col-sm-6">
					<ol class="float-sm-right">
						<a href="<?= base_url('responden') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Survey</a>
					</ol>
				</div>
			<?php } ?>
			<div class="col-sm-12 mt-3">
				<?= $this->session->flashdata('message'); ?>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h3 class="card-title">Informasi Survey</h3>
					</div>
					<div class="card-body">
						<table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nomor Survey</th>
									<th>Tanggal Survey</th>
									<th>Pewawancara</th>
									<th>NIK</th>
									<th>Nama Responden</th>
									<th>Kecamatan</th>
									<th>Kelurahan</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1; ?>
								<?php foreach ($survey as $s) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $s->no_survey ?></td>
										<td><?= indo_date($s->survey_date) ?></td>
										<td><?= $s->name ?></td>
										<td><?= $s->nik ?></td>
										<td><?= $s->nama_responden ?></td>
										<td><?= $s->district_name ?></td>
										<td><?= $s->village_name ?></td>
										<td><?= $s->alamat ?></td>
										<td>
											<a href="<?= base_url('hasil/laporan_hasil/' . $s->no_survey) ?>" class="btn btn-danger btn-xs"><i class="fas fa-file-pdf mx-1"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nomor Survey</th>
									<th>Tanggal Survey</th>
									<th>Pewawancara</th>
									<th>NIK</th>
									<th>Nama Responden</th>
									<th>Kecamatan</th>
									<th>Kelurahan</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
							<!-- <pre>
								<?= print_r($survey) ?>
							</pre> -->
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

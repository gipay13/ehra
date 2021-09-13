<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Hasil Survey</h1>
			</div>
			<?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2 || $this->session->userdata('level') == 3) { ?>
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
						<h3 class="card-title">Informasi Responden</h3>
					</div>
					<div class="card-body">
						<table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nomor Survey</th>
									<th>Tanggal Survey</th>
									<th>Pewawancara</th>
									<th>NKK</th>
									<th>NIK</th>
									<th>Nama Kepala Keluarga</th>
									<th>Kecamatan</th>
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
										<td><?= $s->survey_date ?></td>
										<td><?= $s->name ?></td>
										<td><?= $s->nkk ?></td>
										<td><?= $s->nik ?></td>
										<td><?= $s->nama_kepala ?></td>
										<td><?= $s->kecamatan ?></td>
										<td><?= $s->alamat ?></td>
										<td>
											<a href="<?= base_url('hasil/laporan_hasil/' . $s->no_survey) ?>" class="btn btn-danger btn-xs"><i class="fas fa-file-pdf mx-1"></i></a>
											<?php if ($this->session->userdata('level') == 1 || $this->session->userdata('level') == 2 || $this->session->userdata('level') == 3) { ?>
												<a href="<?= base_url('hasil/delete/' . $s->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash mx-1"></i></a>
											<?php } ?>
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
									<th>NKK</th>
									<th>NIK</th>
									<th>Nama Kepala Keluarga</th>
									<th>Kecamatan</th>
									<th>Alamat</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

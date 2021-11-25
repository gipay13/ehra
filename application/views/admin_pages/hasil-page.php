<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-6 col-sm-12 mb-3">
				<h1 class="m-0">Hasil Survey</h1>
			</div>
			<?php if ($this->session->userdata('level') == 2 || $this->session->userdata('level') == 3) { ?>
				<div class="col-md-6 col-sm-12">
					<div class="float-sm-right">
						<a href="<?= base_url('survey/responden') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Survey</a>
					</div>
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
									<th>Kelurahan</th>
									<th>RW</th>
									<th>RT</th>
									<th>Foto</th>
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
										<td><?= $s->village_name ?></td>
										<td><?= $s->rw ?></td>
										<td><?= $s->rt ?></td>
										<td>
											<?php if ($s->image != null) { ?>
												<img src="<?= base_url('uploads/' . $s->image) ?>" alt="" style="width: 50px;">
											<?php } ?>
										</td>
										<td>
											<?php if ($this->session->userdata('level') == 2 || $this->session->userdata('level') == 3) { ?>
												<div class="">
													<a href="<?= base_url('hasil/delete/' . $s->no_survey . '/' . $s->respondent_id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash mx-1"></i> DELETE</a>
												</div>
											<?php } ?>
											<div class="">
												<a href="<?= base_url('hasil/hasil_survey_ehra/' . $s->no_survey) ?>" class="btn btn-danger btn-xs"><i class="fas fa-file-pdf mx-1"></i> EHRA</a>
											</div>
											<div class="">
												<a href="<?= base_url('hasil/hasil_survey_rs/' . $s->no_survey) ?>" class="btn btn-danger btn-xs"><i class="fas fa-file-pdf mx-1"></i> RS</a>
											</div>
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
									<th>Kelurahan</th>
									<th>RW</th>
									<th>RT</th>
									<th>Foto</th>
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

<script>
	$(function() {
		$("#table").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
	});
</script>

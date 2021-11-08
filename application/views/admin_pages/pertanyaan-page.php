<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Pertanyaan</h1>
			</div>
			<div class="col-sm-6">
				<div class="float-sm-right">
					<a href="<?= base_url('pertanyaan/pertanyaan_ehra') ?>" class="btn btn-primary"><i class="fa fa-download"></i> Ehra</a>
				</div>
				<div class="float-sm-right mr-3">
					<a href="<?= base_url('pertanyaan/pertanyaan_rs') ?>" class="btn btn-primary"><i class="fa fa-download"></i> Rumah Sehat</a>
				</div>
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
						<h4>Pertanyaan</h4>
					</div>
					<div class="card-body">
						<table id="pertanyaan" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Nama Kategori</th>
									<th>Pertanyaan</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1; ?>
								<?php foreach ($pertanyaan as $p) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $p->category_code ?></td>
										<td><?= $p->category_name ?></td>
										<td><?= $p->question_name ?></td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Nama Kategori</th>
									<th>Pertanyaan</th>
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
		$("#pertanyaan").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
	});
</script>

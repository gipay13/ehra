<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<!-- <div class="col-sm-6">
				<h1 class="m-0">Pertanyaan</h1>
			</div> -->
			<div class="col-sm-12">
				<div class="float-sm-right">
					<a href="<?= base_url('pertanyaan/list_pertanyaan') ?>" class="btn btn-primary"><i class="fa fa-download"></i> Download Pertanyaan</a>
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
						<table id="kategori" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Pertanyaan</th>
									<th>Tipe</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1; ?>
								<?php foreach ($pertanyaan as $p) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $p->qcategory_code ?></td>
										<td><?= $p->question_name ?></td>
										<td><?= $p->type_id == 1 ? "Radio Button" : "Checkbox" ?></td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Pertanyaan</th>
									<th>Tipe</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4>Kategori Pertanyaan</h4>
					</div>
					<div class="card-body">
						<table id="pertanyaan" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Judul Kategori</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1; ?>
								<?php foreach ($kategori as $k) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $k->category_code ?></td>
										<td><?= $k->category_name ?></td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Judul Kategori</th>
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

		$("#kategori").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
	});
</script>

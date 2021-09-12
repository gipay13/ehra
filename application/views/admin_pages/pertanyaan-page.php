<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Pertanyaan</h1>
			</div>
			<div class="col-sm-6">
				<ol class="float-sm-right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Pertanyaan</button>
				</ol>
			</div>
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
					<div class="card-body">
						<table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Id</th>
									<th>Pertanyaan</th>
									<th>Action</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1; ?>
								<?php foreach ($pertanyaan as $p) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $p->qcategory_code ?></td>
										<td><?= $p->id ?></td>
										<td><?= $p->question_name ?></td>
										<td>
											<a href="<?= base_url('pertanyaan/delete/' . $p->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash mx-1"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Id</th>
									<th>Pertanyaan</th>
									<th>Action</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Form Pertanyaan</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('pertanyaan/process') ?>" method="POST">
				<div class="modal-body">
					<div class="card-body">
						<div class="form-group">
							<label for="id_kategori">Kode Kategori</label>
							<input type="hidden" name="id">
							<select name="id_kategori" class="form-control" required>
								<option value="">--Pilih Kategori--</option>
								<?php foreach ($kategori as $k) { ?>
									<option value="<?= $k->id ?>"><?= $k->category_code ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="pertanyaan">Pertanyaan</label>
							<input type="text" name="pertanyaan" class="form-control" required>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" name="add" id="submit">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

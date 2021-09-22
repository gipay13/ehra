<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">Pertanyaan</h1>
			</div>
			<?php if ($this->session->userdata('level') == 1) { ?>
				<div class="col-sm-6">
					<ol class="float-sm-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Pertanyaan</button>
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
					<div class="card-body">
						<table id="table" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Pertanyaan</th>
									<th>Tipe</th>
									<th>Action</th>
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
										<td>
											<?php if ($this->session->userdata('level') == 1) { ?>
												<a href="<?= base_url('pertanyaan/delete/' . $p->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash mx-1"></i></a>
											<?php } ?>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Kode Kategori</th>
									<th>Pertanyaan</th>
									<th>Tipe</th>
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
							<label for="kategori">Kode Kategori</label>
							<input type="hidden" name="id">
							<select name="kategori" class="form-control" required>
								<option value="">--Pilih Kategori--</option>
								<?php foreach ($kategori as $k) { ?>
									<option value="<?= $k->id ?>"><?= $k->category_code ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="tipe">Tipe Pertanyaan</label>
							<select name="tipe" class="form-control" required>
								<option value="">--Pilih Tipe--</option>
								<option value="1">Radio Button</option>
								<option value="2">Checkbox</option>
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

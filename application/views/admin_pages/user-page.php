<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-sm-6">
				<h1 class="m-0">User</h1>
			</div>
			<div class="col-sm-6">
				<ol class="float-sm-right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah User</button>
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
									<th>Username</th>
									<th>Nama</th>
									<th>Puskesmas</th>
									<th>Akses</th>
									<th>Created At</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1 ?>
								<?php foreach ($user as $u) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $u->username ?></td>
										<td><?= $u->name ?></td>
										<td><?= $u->puskesmas_name ?></td>
										<td><?= $u->level_name ?></td>
										<td><?= $u->created_at ?></td>
										<td>
											<a href="<?= base_url('user/delete/' . $u->user_id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Anda Yakin?')"><i class="fas fa-trash mx-1"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Nama</th>
									<th>Puskesmas</th>
									<th>Akses</th>
									<th>Created At</th>
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

<div class="modal fade" id="modal-default">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title">Input User</h4>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<form action="<?= base_url('user/process') ?>" method="POST">
				<div class="modal-body">
					<div class="card-body">
						<div class="form-group">
							<label for="username">Username</label>
							<input type="text" name="username" class="form-control" id="username" required>
						</div>
						<div class="form-group">
							<label for="name">Nama</label>
							<input type="text" name="name" class="form-control" id="name" required>
						</div>
						<div class="form-group">
							<label for="password">Password</label>
							<input type="password" name="password" class="form-control" id="password" required>
						</div>
						<div class="form-group">
							<label for="level">Akses</label>
							<select name="level" id="level" class="form-control" required>
								<option value="">--Pilih Akses--</option>
								<?php foreach ($level as $l) { ?>
									<option value="<?= $l->id ?>"><?= $l->name ?></option>
								<?php } ?>
							</select>
						</div>
						<div class="form-group">
							<label for="puskesmas">Puskesmas</label>
							<select name="puskesmas" id="puskesmas" class="form-control">
								<option value="">--Pilih Puskesmas--</option>
								<?php foreach ($puskesmas as $p) { ?>
									<option value="<?= $p->id ?>"><?= $p->nm_puskesmas ?></option>
								<?php } ?>
							</select>
						</div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
					<button type="submit" class="btn btn-primary" name="add">Save</button>
				</div>
			</form>
		</div>
	</div>
</div>

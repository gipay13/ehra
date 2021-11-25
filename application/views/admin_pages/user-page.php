<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<div class="col-md-3 col-sm-12 mb-3">
				<h1 class="m-0">User</h1>
			</div>
			<div class="col-md-9 col-sm-12 mb-3">
				<div class="float-sm-right">
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-user"><i class="fa fa-plus"></i> Tambah User</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-supervisor"><i class="fa fa-plus"></i> Tambah Supervisor</button>
					<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-koordinator"><i class="fa fa-plus"></i> Tambah Koordinator</button>
				</div>
			</div>
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<?= $this->session->flashdata('message'); ?>
				<div class="card">
					<div class="card-header">
						<h4>User</h4>
					</div>
					<div class="card-body">
						<table id="user" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Username</th>
									<th>Nama</th>
									<th>Puskesmas</th>
									<th>Akses</th>
									<th>Created At</th>
									<th>Updated At</th>
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
										<td><?= indo_date($u->created_at) ?></td>
										<td><?= indo_date($u->updated_at) ?></td>
										<td>
										<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-edit-user<?= $u->user_id ?>"><i class="fas fa-edit"></i></button>
											<a href="<?= base_url('user/delete/' . $u->user_id) ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
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
									<th>Updated At</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4>Supervisor</h4>
					</div>
					<div class="card-body">
						<table id="supervisor" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Supervisor</th>
									<th>Created At</th>
									<th>Updated At</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1 ?>
								<?php foreach ($supervisor as $s) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $s->supervisor_name ?></td>
										<td><?= indo_date($s->created_at) ?></td>
										<td><?= indo_date($s->updated_at) ?></td>
										<td>
											<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-edit-supervisor<?= $s->id ?>"><i class="fas fa-edit"></i></button>
											<a href="<?= base_url('user/delete_supervisor/' . $s->id) ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama Supervisor</th>
									<th>Created At</th>
									<th>Updated At</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>

			<div class="col-12">
				<div class="card">
					<div class="card-header">
						<h4>Koordinator</h4>
					</div>
					<div class="card-body">
						<table id="koordinator" class="table table-bordered table-striped">
							<thead>
								<tr>
									<th>No</th>
									<th>Nama Koordinator</th>
									<th>Kecamatan</th>
									<th>Created At</th>
									<th>Updated At</th>
									<th>Aksi</th>
								</tr>
							</thead>
							<tbody>
								<?php $index = 1 ?>
								<?php foreach ($koordinator as $k) { ?>
									<tr>
										<td><?= $index++ ?></td>
										<td><?= $k->coordinator_name ?></td>
										<td><?= $k->district_name ?></td>
										<td><?= indo_date($k->created_at) ?></td>
										<td><?= indo_date($k->updated_at) ?></td>
										<td>
										<button class="btn btn-success btn-sm" data-toggle="modal" data-target="#modal-edit-koordinator<?= $k->id ?>"><i class="fas fa-edit"></i></button>
											<a href="<?= base_url('user/delete_koordinator/' . $k->id) ?>" onclick="return confirm('Apakah Anda Yakin?')" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
							<tfoot>
								<tr>
									<th>No</th>
									<th>Nama Koordinator</th>
									<th>Kecamatan</th>
									<th>Created At</th>
									<th>Updated At</th>
									<th>Aksi</th>
								</tr>
							</tfoot>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Modal Input User -->
	<div class="modal fade" id="modal-user">
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
										<option value="<?= $l->id ?>"><?= $l->level_name ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="puskesmas">Puskesmas</label>
								<select name="puskesmas" id="puskesmas" class="form-control">
									<option value="">--Pilih Puskesmas--</option>
									<?php foreach ($puskesmas as $p) { ?>
										<option value="<?= $p->id ?>"><?= $p->puskesmas_name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="add_user">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Input Supervisi -->
	<div class="modal fade" id="modal-supervisor">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Input Supervisor</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('user/process') ?>" method="POST">
					<div class="modal-body">
						<div class="card-body">
							<div class="form-group">
								<label for="supervisor_name">Nama Supervisor</label>
								<input type="text" name="supervisor_name" class="form-control" id="supervisor_name" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="add_supervisor">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!-- Modal Input Koordinator -->
	<div class="modal fade" id="modal-koordinator">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Input Koordinator</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('user/process') ?>" method="POST">
					<div class="modal-body">
						<div class="card-body">
							<div class="form-group">
								<label for="koordinator_name">Nama Koordinator</label>
								<input type="text" name="koordinator_name" class="form-control" id="koordinator_name" required>
							</div>
							<div class="form-group">
								<label for="district">Kecamatan</label>
								<select name="district" id="district" class="form-control" required>
									<option value="">--Pilih Kecamatan--</option>
									<?php foreach ($kecamatan as $ke) { ?>
										<option value="<?= $ke->id ?>"><?= $ke->district_name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="add_koordinator">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	
	<!-- Modal Edit User -->
	<?php foreach ($user as $u) { ?>
	<div class="modal fade" id="modal-edit-user<?= $u->user_id ?>">
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
								<input type="hidden" name="user_id" value="<?= $u->user_id ?>">
								<input type="text" name="username" class="form-control" id="username" value="<?= $u->username ?>" required>
							</div>
							<div class="form-group">
								<label for="name">Nama</label>
								<input type="text" name="name" class="form-control" id="name" value="<?= $u->name ?>" required>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input type="password" name="password" class="form-control" id="password">
								<small class="text-danger">Biarkan Kosong Jika Tidak Ingin Diganti</small>
							</div>
							<div class="form-group">
								<label for="level">Akses</label>
								<select name="level" id="level" class="form-control" required>
									<option value="">--Pilih Akses--</option>
									<?php foreach ($level as $l) { ?>
										<option <?= $u->level_id == $l->id ? 'selected' : '' ?> value="<?= $l->id ?>"><?= $l->level_name ?></option>
									<?php } ?>
								</select>
							</div>
							<div class="form-group">
								<label for="puskesmas">Puskesmas</label>
								<select name="puskesmas" id="puskesmas" class="form-control">
									<option value="">--Pilih Puskesmas--</option>
									<?php foreach ($puskesmas as $p) { ?>
										<option <?= $u->puskesmas_id == $p->id ? 'selected' : '' ?> value="<?= $p->id ?>"><?= $p->puskesmas_name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="edit_user">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php } ?>

	<!-- Modal Edit Supervisi -->
	<?php foreach ($supervisor as $s) {?>
	<div class="modal fade" id="modal-edit-supervisor<?= $s->id ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Input Supervisor</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('user/process') ?>" method="POST">
					<div class="modal-body">
						<div class="card-body">
							<div class="form-group">
								<label for="supervisor_name">Nama Supervisor</label>
								<input type="hidden" name="supervisor_id" class="form-control" id="supervisor_id" value="<?= $s->id ?>">
								<input type="text" name="supervisor_name" class="form-control" id="supervisor_name" value="<?= $s->supervisor_name ?>" required>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="edit_supervisor">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php } ?>
	
	<?php foreach($koordinator as $k) { ?>
	<div class="modal fade" id="modal-edit-koordinator<?= $k->id ?>">
		<div class="modal-dialog">
			<div class="modal-content">
				<div class="modal-header">
					<h4 class="modal-title">Input Koordinator</h4>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<form action="<?= base_url('user/process') ?>" method="POST">
					<div class="modal-body">
						<div class="card-body">
							<div class="form-group">
								<label for="koordinator_name">Nama Koordinator</label>
								<input type="hidden" name="koordinator_id" class="form-control" id="koordinator_id" value="<?= $k->id ?>">
								<input type="text" name="koordinator_name" class="form-control" id="koordinator_name" value="<?= $k->coordinator_name ?>" required>
							</div>
							<div class="form-group">
								<label for="district">Kecamatan</label>
								<select name="district" id="district" class="form-control" required>
									<option value="">--Pilih Kecamatan--</option>
									<?php foreach ($kecamatan as $ke) { ?>
										<option <?= $k->district_id == $ke->id ? 'selected' : '' ?> value="<?= $ke->id ?>"><?= $ke->district_name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
						<button type="submit" class="btn btn-primary" name="edit_koordinator">Save</button>
					</div>
				</form>
			</div>
		</div>
	</div>
	<?php } ?>
</section>

<script>
	$(function() {
		$("#user").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
	});
	$(function() {
		$("#supervisor").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
	});
	$(function() {
		$("#koordinator").DataTable({
			"responsive": true,
			"lengthChange": false,
			"autoWidth": false,
		}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
	});
</script>

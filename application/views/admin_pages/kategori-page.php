<div class="content-wrapper">
	<div class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1 class="m-0">Kategori Pertanyaan</h1>
				</div>
				<div class="col-sm-6">
					<ol class="float-sm-right">
						<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default"><i class="fa fa-plus"></i> Tambah Kategori</button>	
					</ol>														
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
										<th>Judul Kategori</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php $index = 1; ?>
									<?php foreach ($kategori as $k) { ?>
										<tr>
											<td><?= $index++ ?></td>
											<td><?= $k->kode_kategori ?></td>
											<td><?= $k->nama_kategori ?></td>
											<td>edit</td>	
										</tr>	
									<?php } ?>
								</tbody>
								<tfoot>
									<tr>
										<th>No</th>
										<th>Kode Kategori</th>
										<th>Judul Kategori</th>
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
              <h4 class="modal-title">Input Kategori Pertanyaan</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
			<form id="inputKategoriForm">
            <div class="modal-body">
				<div class="card-body">
					<div class="form-group">
						<label for="kode">Kode Kategori</label>
						<input type="text" name="kode" class="form-control" id="kode" style="text-transform: uppercase;">
					</div>
					<div class="form-group">
						<label for="judul">Judul Kategori</label>
						<input type="text" name="judul" class="form-control" id="judul">
					</div>
				</div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
              <button type="submit" class="btn btn-primary">Save</button>
            </div>
			</form>
          </div>
        </div>
    </div>
</div>


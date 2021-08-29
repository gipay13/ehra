<div class="wrapper">
	<div class="content-wrapper">
		<div class="content-header">
			<div class="container-fluid">
				<div class="row mb-2">
					<div class="col-sm-6">
						<h1 class="m-0">Hasil Survey</h1>
					</div>
					<div class="col-sm-6">
						<ol class="float-sm-right">
							<a href="<?= base_url('responden')?>" class="btn btn-primary"><i class="fa fa-plus"></i> Tambah Survey</a>
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
										<th>NIK</th>
										<th>Nama Responden</th>
										<th>Kecamatan</th>
										<th>Alamat</th>
									</tr>
								</thead>
								<tbody>
									<!-- <?php $index = 1; ?>
									<?php foreach ($kategori as $k) { ?>
										<tr>
											<td><?= $index++ ?></td>
											<td><?= $k->kode_kategori ?></td>
											<td><?= $k->nama_kategori ?></td>
											<td>edit</td>	
										</tr>	
									<?php } ?> -->
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
										<th>Alamat</th>
									</tr>
								</tfoot>
							</table>
						</div>
            		</div>
				</div>
			</div>		
		</div>
	</section>
	</div>
</div>

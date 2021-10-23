<div class="content-header">
	<div class="container-fluid">
		<div class="row mb-2">
			<!-- <div class="col-sm-6">
					<h1 class="m-0">Dashboard</h1>
				</div> -->
		</div>
	</div>
</div>

<section class="content">
	<div class="container-fluid">
		<div class="row">

		<div class="col-md-12">
			<div class="card card-widget widget-user">
            	<div class="widget-user-header bg-info">
                	<h3 class="widget-user-username"><?= $this->session->userdata('name') ?></h3>
                	<h5 class="widget-user-desc"><?= $userdata->puskesmas_name ?? "-" ?></h5>
              	</div>
              	<div class="widget-user-image">
                	<img class="img-circle elevation-2" src="<?= base_url('assets/dist/img/blank-profile-picture.png') ?>" alt="User Avatar">
              	</div>
              	<div class="card-footer">
                	<div class="row">
						<div class="col-sm-6 border-right">
							<div class="description-block">
								<span class="description-text">KECAMATAN</span>
								<h5 class="description-header"><?= $userdata->district_name ?? "-" ?></h5>
							</div>
						</div>
                  		<div class="col-sm-6 border-right">
							<div class="description-block">
								<span class="description-text">JUMLAH SURVEY</span>
								<h5 class="description-header"><?= $hasil ?> Responden</h5>
							</div>
                  		</div>
                	</div>
              </div>
            </div>
		</div>

			<div class="col-lg-6 col-sm-12">
				<div class="small-box bg-info">
					<div class="inner">
						<h3><?= $pertanyaan ?></h3>
						<p>Pertanyaan</p>
					</div>
					<div class="icon">
						<i class="ion ion-bag"></i>
					</div>
					<a href="<?= base_url('admin/pertanyaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

			<div class="col-lg-6 col-sm-12">
				<div class="small-box bg-success">
					<div class="inner">
						<h3><?= $kategori ?></h3>
						<p>Kategori Pertanyaan</p>
					</div>
					<div class="icon">
						<i class="ion ion-stats-bars"></i>
					</div>
					<a href="<?= base_url('admin/pertanyaan') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
				</div>
			</div>

		</div>
	</div>
</section>

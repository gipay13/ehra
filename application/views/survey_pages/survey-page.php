<div class="container my-5">
	<div class="col-md-12">
		<form action="<?= base_url('pertanyaan/store'); ?>" method="POST">
			<input type="hidden" name="no_survey" value="<?= $this->uri->segment(3) ?>">
			<div id="toggle-cards">
				<?php foreach ($kategoriB as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<!-- B -->
												<?php if ($p->id == 1) { ?>
													<div class="ml-1">
														<input type="text" class="col-md-8 form-control" name="answer<?= $p->id; ?>" placeholder="Tahun">
													</div>
												<?php } ?>
												<?php if ($p->id == 2) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="milikSendiri" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="milikSendiri">Milik Sendiri</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="rumahDinas" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="rumahDinas">Rumah Dinas</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="berbagi" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="berbagi">Berbagi Dengan Keluarga Lain</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sewa" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="sewa">Sewa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kontrak" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="kontrak">Kontrak</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="milikOrang" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="milikOrang">Milik Orang Tua/Saudara/Anak</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lainnya" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="lainnya">Lainnya</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 3) { ?>
													<div class="ml-1">
														<input type="text" class="form-control col-md-7" name="answer<?= $p->id; ?>" placeholder="m2">
													</div>
												<?php } ?>
												<?php if ($p->id == 4) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="permanen" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="permanen">Permanen</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="semi" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="semi">Semi Permanen</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="darurat" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="darurat">Darurat</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lainnya2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="lainnya2">Lainnya</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 5) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakSekolah" name="answer<?= $p->id ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="tidakSekolah">Tidak Sekolah Formal</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="SD" name="answer<?= $p->id ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="SD">SD</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="SMP" name="answer<?= $p->id ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="SMP">SMP</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="SMA" name="answer<?= $p->id ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="SMA">SMA</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="SMK" name="answer<?= $p->id ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="SMK">SMK/Kejuruan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Universitas" name="answer<?= $p->id ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Universitas">Universitas/Akademi</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 6) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 7) { ?>
													<div class="form-group row">
														<label for="rp" class="col-sm-2 col-form-label">Rp.</label>
														<div class="col-sm-10">
															<input type="text" class="form-control currency" id="rp" name="answer<?= $p->id; ?>">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 8) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp1.800.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Rp1.800.000">≤ Rp1.800.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp1.800.001" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Rp1.800.001">Rp1.800.001 – Rp3.000.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp3.000.001" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Rp3.000.001">Rp3.000.001 – Rp4.800.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp4.800.001" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Rp4.800.001">Rp4.800.001 – Rp7.200.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp 7.200.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Rp 7.200.000">≥ Rp 7.200.000</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 9) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya2" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya2">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak2" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak2">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 10) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakMenerima" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="tidakMenerima">Tidak Pernah Menerima Bantuan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="menerima1" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="menerima1">Menerima 1 Bantuan (Sebutkan)</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="menerimaLebih" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="menerimaLebih">Menerima Lebih Dari 1 Bantuan (Sebutkan)</label>
															<input type="text" name="answer<?= $p->id; ?>tf2" class="form-control">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 11) { ?>
													<div class="form-group row">
														<label for="sejakTahun" class="col-sm-2 col-form-label">Tahun</label>
														<div class="col-sm-10">
															<input type="text" class="form-control" id="sejakTahun" name="answer<?= $p->id; ?>">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 12) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya3" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya3">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak3" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak3">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 13) { ?>
													<div>
														<div class="form-group row">
															<label for="kurang2th" class="col-sm-5 col-form-label">Kurang dari 2 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="kurang2th" name="answer<?= $p->id; ?>A">
															</div>
														</div>
														<div class="form-group row">
															<label for="2-5th" class="col-sm-5 col-form-label">2-5 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="2-5th" name="answer<?= $p->id; ?>B">
															</div>
														</div>
														<div class="form-group row">
															<label for="6-12th" class="col-sm-5 col-form-label">6-12 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="6-12th" name="answer<?= $p->id; ?>C">
															</div>
														</div>
														<div class="form-group row">
															<label for=">12th" class="col-sm-5 col-form-label">Lebih dari 12 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id=">12th" name="answer<?= $p->id; ?>D">
															</div>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 14) { ?>
													<div>
														<div class="form-group row">
															<label for="kurang2" class="col-sm-5 col-form-label">Kurang dari 2 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="kurang2" name="answer<?= $p->id; ?>A">
															</div>
														</div>
														<div class="form-group row">
															<label for="2-5" class="col-sm-5 col-form-label">2-5 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="2-5" name="answer<?= $p->id; ?>B">
															</div>
														</div>
														<div class="form-group row">
															<label for="6-12" class="col-sm-5 col-form-label">6-12 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id="6-12" name="answer<?= $p->id; ?>C">
															</div>
														</div>
														<div class="form-group row">
															<label for=">12" class="col-sm-5 col-form-label">Lebih dari 12 tahun</label>
															<div class="col-sm-7">
																<input type="text" class="form-control" id=">12" name="answer<?= $p->id; ?>D">
															</div>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriC as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 15) { ?>
													<div class="ml-1">
														<input type="text" class="form-control col-md-7" name="answer<?= $p->id; ?>" placeholder="Liter/Hari">
													</div>
												<?php } ?>
												<?php if ($p->id == 16) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Banyak sampah" value="1">
															<label class="custom-control-label" for="Banyak sampah">Banyak sampah berserakan atau bertumpuk disekitar lingkungan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Banyak lalat" value="2">
															<label class="custom-control-label" for="Banyak lalat">Banyak lalat di sekitar tumpukan sampah</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Banyak tikus" value="3">
															<label class="custom-control-label" for="Banyak tikus">Banyak tikus berkeliaran</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Banyak nyamuk" value="4">
															<label class="custom-control-label" for="Banyak nyamuk">Banyak nyamuk</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Banyak kucing" value="5">
															<label class="custom-control-label" for="Banyak kucing">Banyak kucing dan anjing mendatangi tumpukan sampah</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Bau busuk" value="6">
															<label class="custom-control-label" for="Bau busuk">Bau busuk yang mengganggu</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Menyumbat" value="7">
															<label class="custom-control-label" for="Menyumbat">Menyumbat saluran drainase</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Ada anak-anak" value="8">
															<label class="custom-control-label" for="Ada anak-anak">Ada anak-anak yang bermain di sekitarnya</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Lainnya," value="9">
															<label class="custom-control-label" for="Lainnya,">Lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 17) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dikumpulkan" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Dikumpulkan">Dikumpulkan oleh kolektor informal yang mendaur ulang dan atau sampah organik ditimbun dalam tanah/dibuat kompos</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dibuangkeTPS" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="dibuangkeTPS">Dikumpulkan dan dibuang ke TPS</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibakar" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Dibakar">Dibakar</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ditutupdengantanah" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="ditutupdengantanah">Dibuang ke dalam lubang dan ditutup dengan tanah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakditutupdengantanah" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="tidakditutupdengantanah">Dibuang ke dalam lubang tetapi tidak ditutup dengan tanah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibuangkesungai" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Dibuangkesungai">Dibuang ke sungai/kali/laut/danau</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibiarkansaja" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="Dibiarkansaja">Dibiarkan saja sampai membusuk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibuangkelahan" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Dibuangkelahan">Dibuang ke lahan kosong/kebun/hutan dan dibiarkan membusuk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lainsebutkan" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="lainsebutkan">Lain-lain, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Tidaktahu">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 18) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya3" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya3">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak3" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak3">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 19) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Sampah organik" value="1">
															<label class="custom-control-label" for="Sampah organik">Sampah organik/sampah basah</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Plastik" value="2">
															<label class="custom-control-label" for="Plastik">Plastik</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Gelas atau kaca" value="3">
															<label class="custom-control-label" for="Gelas atau kaca">Gelas atau kaca</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Kertas" value="4">
															<label class="custom-control-label" for="Kertas">Kertas</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Besi/logam" value="5">
															<label class="custom-control-label" for="Besi/logam">Besi/logam</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="B3" value="6">
															<label class="custom-control-label" for="B3">Bahan Berbahaya dan Beracun (B3)</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Lainnyaa" value="7">
															<label class="custom-control-label" for="Lainnyaa">Lainnya, sebutkan:</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="tidaktahu" value="8">
															<label class="custom-control-label" for="tidaktahu">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 20) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tiaphari" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tiaphari">Tiap hari</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dalamseminggu" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="dalamseminggu">Beberapa kali dalam seminggu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sekaliseminggu" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Sekaliseminggu">Sekali dalam seminggu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dalamsebulan" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="dalamsebulan">Beberapa kali dalam sebulan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sekalisebulan" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="sekalisebulan">Sekali dalam sebulan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpernah" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Tidakpernah">Tidak pernah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="Lainnya">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu2" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Tidaktahu2">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 21) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tepatwaktu" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tepatwaktu">Tepat waktu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Seringterlambat" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Seringterlambat">Sering terlambat</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu3" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu3">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 22) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya4" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya4">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak4" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak4">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 23) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dariRT" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="dariRT">Pemungut uang sampah dari RT</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dariDesa" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="dariDesa">Pemungut uang sampah dari Desa/Kelurahan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dariperusahaan" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="dariperusahaan">Pemungut uang sampah dari perusahaan swasta/KSM</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu4" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tidaktahu4">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 24) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="rpah" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="rpah">Rp.</label>
															<input type="number" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tt" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tt">Tidak Tahu</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-info btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriD as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 25) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Jambanpribadi" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Jambanpribadi">Jamban pribadi</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Jambantetangga" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Jambantetangga">Jamban tetangga/saudara</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="MCK" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="MCK">MCK/WC Umum</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="helikopter" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="helikopter">Ke WC “helikopter” di empang/ kolam</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kesungai" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Kesungai">Ke sungai/pantai/laut</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kekebun" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Kekebun">Ke kebun/pekarangan rumah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Keselokan" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="Keselokan">Ke selokan/parit/got</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kelubanggalian" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Kelubanggalian">Ke lubang galian</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya2" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="Lainnya2">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu5" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Tidaktahu5">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 26) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="laki512" value="1">
															<label class="custom-control-label" for="laki512">Anak laki-laki umur 5 – 12 tahun</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="pr512" value="2">
															<label class="custom-control-label" for="pr512">Anak perempuan umur 5 – 12 tahun</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="rlaki" value="3">
															<label class="custom-control-label" for="rlaki">Remaja laki-laki</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="rpr" value="4">
															<label class="custom-control-label" for="rpr">Remaja perempuan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lakid" value="5">
															<label class="custom-control-label" for="lakid">Laki-laki dewasa</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="prd" value="6">
															<label class="custom-control-label" for="prd">Perempuan dewasa</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lakit" value="7">
															<label class="custom-control-label" for="lakit">Laki-laki tua</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="prt" value="8">
															<label class="custom-control-label" for="prt">Perempuan tua</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="tjelas" value="9">
															<label class="custom-control-label" for="tjelas">Masih ada tapi tidak tahu/jelas siapa</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lain" value="10">
															<label class="custom-control-label" for="lain">Lainnya, sebutkan:</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="ta" value="11">
															<label class="custom-control-label" for="ta">Tidak ada</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 27) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya5" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya5">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak5" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak5">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 28) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Klosetjongkok" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Klosetjongkok">Kloset jongkok leher angsa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Klosetduduk" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Klosetduduk">Kloset duduk leher angsa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="BukanLeher" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="BukanLeher">Bukan Leher Angsa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpunyakloset" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tidakpunyakloset">Tidak punya kloset</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 29) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="fabrikasisesuaiSNI" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="fabrikasisesuaiSNI">Tangki septik fabrikasi sesuai SNI</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="konstruksisendiri" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="konstruksisendiri">Tangki septik konstruksi sendiri (kedap samping dan dasar)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="IPALkomunal" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="IPALkomunal">IPAL komunal (contoh: sanimas)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="IPALterpusat" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="IPALterpusat">IPAL terpusat/perpipaan limbah kota</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Cubluk" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Cubluk">Cubluk/Lubang tanah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="salurandrainase" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="salurandrainase">Langsung ke saluran drainase</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sungai" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Sungai">Sungai/danau/pantai/laut</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kolam" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="Kolam">Kolam/sawah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kebun" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Kebun">Kebun/tanah lapang</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu6" name="answer<?= $p->id; ?>" class="custom-control-input" value="11">
															<label class="custom-control-label" for="Tidaktahu6">Tidak tahu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya3" name="answer<?= $p->id; ?>" class="custom-control-input" value="12">
															<label class="custom-control-label" for="Lainnya3">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 30) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya6" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya6">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak6" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak6">Tidak</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu7" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu7">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 31) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya7" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya7">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak7" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak7">Tidak</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu8" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu8">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 32) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lahanresapan" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Lahanresapan">Lahan resapan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sumurresapan" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Sumurresapan">Sumur resapan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Salurandrainase" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Salurandrainase">Saluran air hujan/drainase</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kanal" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Kanal">Kanal/sungai/badan air/kolam/laut</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakmeresap" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Tidakmeresap">Tidak ada/meresap ke bawah/dinding tangki</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu9" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Tidaktahu9">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 33) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="12bulan" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="12bulan">0 – 12 bulan yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="5tahun" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="5tahun">1 – 5 tahun yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lebih5tahun" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Lebih5tahun">Lebih dari 5 – 10 tahun yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lebih10tahun" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Lebih10tahun">Lebih dari 10 tahun yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu10" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Tidaktahu10">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 34) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="12bulan2" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="12bulan2">0 – 12 bulan yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="5tahun2" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="5tahun2">1 – 5 tahun yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lebih5tahun2" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Lebih5tahun2">Lebih dari 5 – 10 tahun yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lebih10tahun2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Lebih10tahun2">Lebih dari 10 tahun yang lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpernah2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tidakpernah2">Tidak pernah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu11" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Tidaktahu11">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 35) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya8" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya8">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak8" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak8">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 36) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sedottinjapemerintah" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="sedottinjapemerintah">Layanan sedot tinja atau truk sedot tinja pemerintah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sedottinjaswasta" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="sedottinjaswasta">Layanan sedot tinja atau truk sedot tinja swasta</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Membayartukang" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Membayartukang">Membayar tukang</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dikosongkansendiri" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Dikosongkansendiri">Dikosongkan sendiri</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu12" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Tidaktahu12">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 37) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kesungaibesar" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Kesungaibesar">Ke sungai besar, sungai kecil, selokan/parit, kolam/empang, saluran drainase</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dikuburdihalaman" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Dikuburdihalaman">Dikubur di halaman</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dikuburditanahorang" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Dikuburditanahorang">Dikubur di tanah orang lain</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya4" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Lainnya4">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu13" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Tidaktahu13">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 38) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="100ribu" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="100ribu">Kurang dari Rp 100 ribu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="200ribu" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="200ribu">Antara Rp 100 ribu s.d. Rp 200 ribu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="300ribu" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="300ribu">Antara Rp 201 ribu s.d Rp 300 ribu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="400ribu" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="400ribu">Antara Rp 301 ribu s.d Rp 400 ribu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lebih400ribu" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="lebih400ribu">Lebih dari 400 ribu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakingat" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Tidakingat">Tidak ingat</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 39) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibuangdijamban" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Dibuangdijamban">Dibuang di jamban</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ditanam" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Ditanam">Ditanam</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sembarang" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="sembarang">Dibuang di sembarang tempat/tempat sampah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibersihkan" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Dibersihkan">Dibersihkan di sembarang tempat</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya5" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Lainnya5">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 40) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="YAsangatsering" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="YAsangatsering">YA, sangat sering</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="yakadang" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="yakadang">YA, kadang-kadang</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakbiasa" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="tidakbiasa">TIDAK, tidak biasa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu14" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tidaktahu14">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 41) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="KeJamban" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="KeJamban">Ke Jamban</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ketempatsampah" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Ketempatsampah">Ke tempat sampah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="pekarangan" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="pekarangan">Ke kebun/pekarangan/jalan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="got" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="got">Ke sungai/selokan/got/pantai/laut</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya6" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Lainnya6">Lainnya, sebutkan</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu15" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Tidaktahu15">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 42) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Mau" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Mau">Mau berlangganan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakmau" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidakmau">Tidak mau berlangganan</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 43) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp1.000.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Rp1.000.000">Kurang dari atau sama dengan Rp 1.000.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp1.500.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Rp1.500.000">Rp 1.000.001 – Rp 1.500.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp2.000.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Rp2.000.000">Rp 1.500.001 – Rp 2.000.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="DiatasRp2.000.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="DiatasRp2.000.000">Diatas Rp 2.000.000</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 44) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp5.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Rp5.000">Kurang dari atau sama dengan Rp 5.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp10.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Rp10.000">Rp 5000 – Rp 10.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Rp15.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Rp15.000">Rp 10.001 - Rp 15.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="DiatasRp15.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="DiatasRp15.000">Lebih dari Rp 15.001</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 45) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaksanggup" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tidaksanggup">Tidak sanggup membayar biaya penyambungan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Belumperlu" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Belumperlu">Belum perlu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya7" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Lainnya7">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 46) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="berlangganan" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="berlangganan">Mau berlangganan dengan membayar</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakmauberlangganan" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidakmauberlangganan">Tidak mau berlangganan</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 47) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="KurangRp100.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="KurangRp100.000">Kurang dari Rp 100.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="AntaraRp100.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="AntaraRp100.000">Antara Rp100.000 sd Rp 200.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="AntaraRp200.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="AntaraRp200.000">Antara Rp200.000 sd Rp 300.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="AntaraRp300.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="AntaraRp300.000">Antara Rp300.000 sd Rp 400.000</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="KurangRp400.000" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="KurangRp400.000">Lebih dari Rp 400.001</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 48) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaksanggup2" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tidaksanggup2">Tidak sanggup membayar biaya penyedotan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Belumperlu2" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Belumperlu2">Belum perlu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya8" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Lainnya8">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-info btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriE as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 49) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya9" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya9">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak9" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak9">Tidak Ada</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 50) { ?>
												<?php } ?>
												<?php if ($p->id == 51) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya10" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya10">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak10" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak10">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 52) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpernah3" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tidakpernah3">Tidak pernah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sekalisetahun" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="sekalisetahun">Sekali dalam setahun</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Beberapasetahun" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Beberapasetahun">Beberapa kali dalam setahun</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sekalisebulan2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="sekalisebulan2">Sekali atau beberapa kali dalam sebulan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu16" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Tidaktahu16">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 53) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya11" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya11">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak11" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak11">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 54) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya12" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya12">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak12" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak12">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 55) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Setumit" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Setumit">Setumit orang dewasa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Setengahlutut" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Setengahlutut">Setengah lutut orang dewasa (30 cm)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Selutut" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Selutut">Selutut orang dewasa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sepinggang" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Sepinggang">Sepinggang orang dewasa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sebahu" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Sebahu">Sebahu orang dewasa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lebihtinggi" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Lebihtinggi">Lebih tinggi dari orang dewasa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu17" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidaktahu17">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 56) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpernah4" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tidakpernah4">Tidak pernah/tidak punya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kadang" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Kadang">Kadang-kadang</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Selalu" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Selalu">Selalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu18" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tidaktahu18">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 57) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kurangsejam" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Kurangsejam">Kurang dari 1 jam</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="3jam" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="3jam">Antara 1 – 3 jam</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Setengahhari" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Setengahhari">Setengah hari</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sehari" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="sehari">Satu hari</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lebihsehari" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="lebihsehari">Lebih dari 1 hari</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu19" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Tidaktahu19">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriF as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 58) { ?>
												<?php } ?>
												<?php if ($p->id == 59) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kurang60" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Kurang60">Kurang dari 60 liter (+/- 4 galon)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lebih60" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Lebih60">Lebih dari sama dengan 60 liter (+/- 4 galon)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu20" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu20">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 60) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="0-2liter" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="0-2liter">0-2 liter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="2-4" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="2-4">2-4 liter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="4-6" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="4-6">4-6 liter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="6liter" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="6liter">> 6 liter</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 61) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya21" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya21">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak21" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak21">Tidak</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu21" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu21">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 62) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpernah5" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tidakpernah5">Tidak pernah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Beberapajam" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Beberapajam">Beberapa jam saja</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Satusampaidua" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Satusampaidua">Satu sampai dua hari</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tigahari" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tigahari">Tiga hari sampai kurang dari seminggu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="seminggu" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="seminggu">Seminggu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lebihseminggu" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Lebihseminggu">Lebih dari satu minggu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu22" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="Tidaktahu22">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 63) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kurang30" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="kurang30">Kurang dari 30 menit</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lebih30" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="lebih30">Lebih dari 30 menit</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu23" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu23">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 64) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ypernah" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ypernah">Ya, pernah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpernah6" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidakpernah6">Tidak pernah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu24" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu24">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 65) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="<2" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="<2">
																< 2 minggu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="2ming" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="2ming">2 minggu s.d. 1 bulan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="1bul" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="1bul">1 bulan s.d. 3 bulan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="3bul" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="3bul">Lebih dari 3 bulan</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 66) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya22" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya22">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak22" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak22">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 67) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="<10m" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="<10m">
																< 10 m</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id=">10m" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for=">10m">≥ 10 m</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu25" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu25">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 68) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Didalam" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Didalam">Didalam kawasan pagar rumah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Diluar" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Diluar">Diluar kawasan pagar rumah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu26" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu26">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 69) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kurang1" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Kurang1">Kurang dari 1 km</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lebih1" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="lebih1">Lebih dari atau sama dengan 1 km</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu27" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Tidaktahu27">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 70) { ?>
												<?php } ?>
												<?php if ($p->id == 71) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="<1m" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="<1m">
																<1 meter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="1m" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="1m">1 meter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="2m" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="2m">2 meter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="3m" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="3m">3 meter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="4m" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="4m">4 meter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="5m" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="5m">5 meter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id=">5m" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for=">5m">>5 meter</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu28" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Tidaktahu28">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 72) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Membeli" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Membeli">Membeli</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="TidakMembeli" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="TidakMembeli">Tidak Membeli</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 73) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="rp1" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="rp1">Rp.</label>
															<input type="number" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tt1" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tt1">Tidak Tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 74) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya23" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya23">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak23" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak23">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 75) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Merebus" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Merebus">Merebus/memasak hingga mendidih</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="filter" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="filter">Menggunakan filter modern (keramik, bio, sand, dll)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="solar" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="solar">Menjemur dibawah sinar matahari (solar disinfectant)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Klorin" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Klorin">Klorin cair/klorin padat</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="UV" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="UV">Ultraviolet (UV)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="RO" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="RO">Reverse Osmosis (RO)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lainnya3" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="lainnya3">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ndatahu" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="ndatahu">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 76) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya24" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya24">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak24" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak24">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 77) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Langsungdispenser" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Langsungdispenser">Langsung dari dispenser</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="gayung" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="gayung">Dengan menggunakan gayung</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="gelas" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="gelas">Dengan menggunakan gelas</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya13" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Lainnya13">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ndatahu2" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="ndatahu2">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriG as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 78) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Ya25" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Ya25">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidak25" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Tidak25">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 79) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Mandi" value="1">
															<label class="custom-control-label" for="Mandi">Mandi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="mandiin" value="2">
															<label class="custom-control-label" for="mandiin">Memandikan anak</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="cebok" value="3">
															<label class="custom-control-label" for="cebok">Menceboki anak</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="cts" value="4">
															<label class="custom-control-label" for="cts">Mencuci tangan sendiri</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="cta" value="5">
															<label class="custom-control-label" for="cta">Mencuci tangan anak</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="cp" value="6">
															<label class="custom-control-label" for="cp">Mencuci peralatan minum, makan dan masak</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="cpa" value="7">
															<label class="custom-control-label" for="cpa">Mencuci pakaian</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="tidaktahu1" value="8">
															<label class="custom-control-label" for="tidaktahu1">Tidak tahu</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lainnyaa2" value="9">
															<label class="custom-control-label" for="lainnyaa2">Lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 80) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="km" value="1">
															<label class="custom-control-label" for="km">Di kamar mandi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="dkm" value="2">
															<label class="custom-control-label" for="dkm">Di dekat kamar mandi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="jamban" value="3">
															<label class="custom-control-label" for="jamban">Di jamban</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="dj" value="4">
															<label class="custom-control-label" for="dj">Di dekat jamban</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="sumur" value="5">
															<label class="custom-control-label" for="sumur">Di sumur</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="bak" value="6">
															<label class="custom-control-label" for="bak">Di sekitar bak penampungan air hujan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="tcp" value="7">
															<label class="custom-control-label" for="tcp">Di tempat cuci piring</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="dapur" value="8">
															<label class="custom-control-label" for="dapur">Di dapur</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="tita" value="9">
															<label class="custom-control-label" for="tita">Tidak tahu</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lain2" value="10">
															<label class="custom-control-label" for="lain2">Lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 81) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="sebelumtoilet" value="1">
															<label class="custom-control-label" for="sebelumtoilet">Sebelum ke toilet</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="cebokbayi" value="2">
															<label class="custom-control-label" for="cebokbayi">Setelah menceboki bayi/anak</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="sbab" value="3">
															<label class="custom-control-label" for="sbab">Setelah dari buang air besar</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="sebmakan" value="4">
															<label class="custom-control-label" for="sebmakan">Sebelum makan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="setmakan" value="5">
															<label class="custom-control-label" for="setmakan">Setelah makan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="susuanak" value="6">
															<label class="custom-control-label" for="susuanak">Sebelum menyuapi/menyusui anak</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="sebmasak" value="7">
															<label class="custom-control-label" for="sebmasak">Sebelum menyiapkan masakan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="mhewan" value="8">
															<label class="custom-control-label" for="mhewan">Setelah memegang hewan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="sebsholat" value="9">
															<label class="custom-control-label" for="sebsholat">Sebelum sholat</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lain3" value="10">
															<label class="custom-control-label" for="lain3">Lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriH as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 82) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Hariini" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Hariini">Hari ini</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kemarin" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="Kemarin">Kemarin</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="semingguterakhir" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="semingguterakhir">1 minggu terakhir</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sebulanterakhir" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="sebulanterakhir">1 bulan terakhir</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="3bulanterakhir" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="3bulanterakhir">3 bulan terakhir</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="6bulanterakhir" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="6bulanterakhir">6 bulan terakhir</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="7bulanterakhir" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="7bulanterakhir">Lebih dari 6 bulan lalu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakpernah7" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Tidakpernah7">Tidak pernah</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 83) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="balita" value="1">
															<label class="custom-control-label" for="balita">Anak-anak balita</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="nonbalita" value="2">
															<label class="custom-control-label" for="nonbalita">Anak-anak non balita</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="remajalaki" value="3">
															<label class="custom-control-label" for="remajalaki">Anak remaja laki-laki</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="remajapr" value="4">
															<label class="custom-control-label" for="remajapr">Anak remaja perempuan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="dewasalaki" value="5">
															<label class="custom-control-label" for="dewasalaki">Orang dewasa laki-laki</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="dewasapr" value="6">
															<label class="custom-control-label" for="dewasapr">Orang dewasa perempuan</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriAO as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 84) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airmerk" value="1">
															<label class="custom-control-label" for="airmerk">Air kemasan bermerk</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airisi" value="2">
															<label class="custom-control-label" for="airisi">Air isi ulang – membeli dari penjual air isi ulang</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airledeng" value="3">
															<label class="custom-control-label" for="airledeng">Air Ledeng dari PDAM/Proyek/HIPPAM sendiri</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airpdam" value="4">
															<label class="custom-control-label" for="airpdam">Air ledeng dari PDAM/Proyek/HIPPAM tetangga</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="aireceran" value="5">
															<label class="custom-control-label" for="aireceran">Air ledeng eceran dari PDAM/Proyek/HIPPAM</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airhidran" value="6">
															<label class="custom-control-label" for="airhidran">Air dari hidran umum – PDAM/HIPPAM/Proyek</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airkranumum" value="7">
															<label class="custom-control-label" for="airkranumum">Air dari kran umum – PDAM/HIPPAM/Proyek</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airterminal" value="8">
															<label class="custom-control-label" for="airterminal">Air dari terminal air_PDAM/HIPPAM/Proyek</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airkapal" value="9">
															<label class="custom-control-label" for="airkapal">Air dari kapal air</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airsumurbor" value="10">
															<label class="custom-control-label" for="airsumurbor">Air dari sumur bor dng pompa tangan/listrik/mesin</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airgalisendiri" value="11">
															<label class="custom-control-label" for="airgalisendiri">Air dari sumur gali terlindungi sendiri</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airgalitetangga" value="12">
															<label class="custom-control-label" for="airgalitetangga">Air dari sumur gali terlindungi tetangga</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airtidaksendiri" value="13">
															<label class="custom-control-label" for="airtidaksendiri">Air dari sumur gali tidak terlindungi sendiri</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airtidaktetangga" value="14">
															<label class="custom-control-label" for="airtidaktetangga">Air dari sumur gali tidak terlindungi tetangga</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airmata" value="15">
															<label class="custom-control-label" for="airmata">Air dari Mata air terlindungi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airmatatidak" value="16">
															<label class="custom-control-label" for="airmatatidak">Air dari Mata air tidak terlindungi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airujan" value="17">
															<label class="custom-control-label" for="airujan">Air hujan (PAH/Penampungan Air Hujan)</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airsungai" value="18">
															<label class="custom-control-label" for="airsungai">Air dari sungai</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airdanau" value="19">
															<label class="custom-control-label" for="airdanau">Air dari waduk/danau</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lain4" value="20">
															<label class="custom-control-label" for="lain4">Lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 85) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakdisimpan" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Tidakdisimpan">Tidak disimpan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="gapunyatutup" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="gapunyatutup">Ya, dalam panci atau ember atau tempayan tanpa tutup</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="punyatutup" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="punyatutup">Ya, dalam panci atau ember atau tempayan yang mempunyai tutup</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya14" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Lainnya14">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 86) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="nyentuh" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="nyentuh">Tangan/mulut menyentuh air</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ganyentuh" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="ganyentuh">Tangan/mulut tidak menyentuh air</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 87) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya5" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya5">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak5" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak5">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 88) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya6" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya6">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak6" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak6">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 89) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="disimpanditutup" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="disimpanditutup">Ya, disimpan di atas dan ditutup</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kawatnyamuk" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="kawatnyamuk">Ya, disimpan dalam lemari makan, ditutup dengan kawat nyamuk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tertutuprapat" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="tertutuprapat">Ya, disimpan dalam lemari yang tertutup rapat</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dalamkulkas" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="dalamkulkas">Ya, di dalam kulkas</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya15" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Lainnya15">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakditutup" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Tidakditutup">Tidak ditutup</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 90) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="plastiktertutup" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="plastiktertutup">Ya, kantong plastik tertutup</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="plastikterbuka" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="plastikterbuka">Ya, kantong plastik terbuka</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tsterbuka" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="tsterbuka">Ya, tempat sampah terbuka</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tstertutup" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="tstertutup">Ya, tempat sampah tertutup</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lainnyaa3" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="lainnyaa3">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ta2" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="ta2">Tidak ada</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 91) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kanal" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="kanal">Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="cubluk" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="cubluk">Saluran terbuka ke cubluk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="rawa" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="rawa">Saluran terbuka ke kolam/rawa/genangan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tangki" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="tangki">Saluran terbuka ke tangki septik</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="riool" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="riool">Saluran tertutup ke riool, selokan, sungai</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lg" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="lg">Lubang galian/sumur resapan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="septik" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="septik">Saluran tertutup ke tangki septik</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sanimas" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Sanimas">Pipa IPAL Sanimas</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya17" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="Lainnya17">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu30" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Tidaktahu30">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriBO as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 92) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya7" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya7">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak7" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak7">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 93) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kanal2" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="kanal2">Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="cubluk2" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="cubluk2">Saluran terbuka ke cubluk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="rawa2" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="rawa2">Saluran terbuka ke kolam/rawa/genangan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tangki2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="tangki2">Saluran terbuka ke tangki septik</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="riool2" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="riool2">Saluran tertutup ke riool, selokan, sungai</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sumur2" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="sumur2">Lubang galian/sumur resapan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="septik2" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="septik2">Saluran tertutup ke tangki septik</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sanimas2" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Sanimas2">Pipa IPAL Sanimas</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya18" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="Lainnya18">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu31" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Tidaktahu31">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 94) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya8" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya8">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak8" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak8">Tidak</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidaktahu7" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="tidaktahu7">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriCO as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 95) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="bakair2" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="bakair2">Ya, dalam bak air/ember</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kran" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="kran">Ya, dari kran & berfungsi</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kran2" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="kran2">Ya, dari kran, tidak berfungsi</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakada2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tidakada2">Tidak ada</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 96) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya10" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya10">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak10" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak10">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 97) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya9" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya9">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak9" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak9">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 98) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="jongkok" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="jongkok">Kloset jongkok leher angsa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="duduk" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="duduk">Kloset duduk leher angsa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Bukan" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Bukan">Bukan leher angsa</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakkloset" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="tidakkloset">Tidak punya kloset</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 99) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="septikfabrikasi" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="septikfabrikasi">Tangki septik fabrikasi sesuai SNI</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="septikkonstruksi" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="septikkonstruksi">Tangki septik konstruksi sendiri (kedap samping dan dasar)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="IPALkomunal2" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="IPALkomunal2">IPAL komunal (contoh: Sanimas)</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="IPALterpusat2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="IPALterpusat2">IPAL terpusat/perpipaan limbah kota</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Cubluk2" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Cubluk2">Cubluk/Lubang tanah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lgsgdrainase" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="lgsgdrainase">Langsung ke saluran drainase</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sungai2" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="Sungai2">Sungai/danau/pantai/laut</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sawah2" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="sawah2">Kolam/sawah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Kebun2" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="Kebun2">Kebun/tanah lapang</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu33" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Tidaktahu33">Tidak tahu</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya19" name="answer<?= $p->id; ?>" class="custom-control-input" value="11">
															<label class="custom-control-label" for="Lainnya19">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 100) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya11" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya11">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak11" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak11">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 101) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya12" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya12">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak12" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak12">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 102) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya13" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya13">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak13" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak13">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 103) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="yaberfungsi" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="yaberfungsi">Ya, berfungsi</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakberfungsi" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidakberfungsi">Tidak berfungsi</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-info btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriDO as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 104) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya14" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya14">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak14" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak14">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 105) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airledeng2" value="1">
															<label class="custom-control-label" for="airledeng2">Air Ledeng dari PDAM/Proyek/HIPPAM berfungsi/mengalir</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airpdam2" value="2">
															<label class="custom-control-label" for="airpdam2">Air ledeng dari PDAM/Proyek/HIPPAM tidak berfungsi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airgalisendiri2" value="3">
															<label class="custom-control-label" for="airgalisendiri2">Air dari sumur gali terlindungi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airtidaksendiri2" value="4">
															<label class="custom-control-label" for="airtidaksendiri2">Air dari sumur gali tidak terlindungi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airsumurbor2" value="5">
															<label class="custom-control-label" for="airsumurbor2">Air dari sumur bor dng pompa tangan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airsumurborlistrik2" value="6">
															<label class="custom-control-label" for="airsumurborlistrik2">Air dari sumur bor dng pompa listrik/mesin</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airhidran2" value="6">
															<label class="custom-control-label" for="airhidran2">Air dari hidran umum – PDAM/HIPPAM/Proyek</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airkranumum2" value="7">
															<label class="custom-control-label" for="airkranumum2">Air dari kran umum – PDAM/HIPPAM/Proyek</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="airkeliling2" value="7">
															<label class="custom-control-label" for="airkeliling2">Penjual air keliling</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lainnyaa4" value="20">
															<label class="custom-control-label" for="lainnyaa4">Lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 106) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kanal3" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="kanal3">Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="cubluk3" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="cubluk3">Saluran terbuka ke cubluk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="rawa3" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="rawa3">Saluran terbuka ke kolam/rawa/genangan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tangki3" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="tangki3">Saluran terbuka ke tangki septik</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="riool3" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="riool3">Saluran tertutup ke riool, selokan, sungai</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="sumur3" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="sumur3">Lubang galian/sumur resapan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="septik3" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="septik3">Saluran tertutup ke tangki septik</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Sanimas3" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Sanimas3">Pipa IPAL Sanimas</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya20" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="Lainnya20">Lainnya, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu34" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Tidaktahu34">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-next">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
				<?php foreach ($kategoriEO as $k) { ?>
					<div class="card">
						<div class="card-header"><?= $k->category_code ?>. <?= $k->category_name ?></div>
						<div class="card-body">
							<table class="table table-sm">
								<thead>
									<tr>
										<th class="col-md-5 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 font-weight-bold"></th>
										<th class="col-md-6 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$data = $this->CI->pertanyaan($k->category_code);
									foreach ($data as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php if ($p->id == 107) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya15" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya15">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak15" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak15">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 108) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="pekarangandepan" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="pekarangandepan">Di pekarangan depan</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="pekarangansamping" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="pekarangansamping">Di pekarangan samping</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="pekaranganbelakang" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="pekaranganbelakang">Di pekarangan belakang</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="bawahgarasi" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="bawahgarasi">Di bawah garasi</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dalamrumah" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="dalamrumah">Di dalam rumah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Lainnya34" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Lainnya34">Lainnya, Sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakjelas" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="Tidakjelas">Tidak jelas/tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 109) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya16" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya16">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak16" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak16">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 110) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dikumpulkan2" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="Dikumpulkan2">Dikumpulkan oleh kolektor informal yang mendaur ulang dan atau sampah organik ditimbun dalam tanah/dibuat kompos</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dibuangkeTPS2" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="dibuangkeTPS2">Dikumpulkan dan dibuang ke TPS</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibakar2" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="Dibakar2">Dibakar</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ditutupdengantanah2" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="ditutupdengantanah2">Dibuang ke dalam lubang dan ditutup dengan tanah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakditutupdengantanah2" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="tidakditutupdengantanah2">Dibuang ke dalam lubang tetapi tidak ditutup dengan tanah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibuangkesungai2" name="answer<?= $p->id; ?>" class="custom-control-input" value="6">
															<label class="custom-control-label" for="Dibuangkesungai2">Dibuang ke sungai/kali/laut/danau</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibiarkansaja2" name="answer<?= $p->id; ?>" class="custom-control-input" value="7">
															<label class="custom-control-label" for="Dibiarkansaja2">Dibiarkan saja sampai membusuk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Dibuangkelahan2" name="answer<?= $p->id; ?>" class="custom-control-input" value="8">
															<label class="custom-control-label" for="Dibuangkelahan2">Dibuang ke lahan kosong/kebun/hutan dan dibiarkan membusuk</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="lainsebutkan2" name="answer<?= $p->id; ?>" class="custom-control-input" value="9">
															<label class="custom-control-label" for="lainsebutkan2">Lain-lain, sebutkan:</label>
															<input type="text" name="answer<?= $p->id; ?>tf1" class="form-control">
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidaktahu35" name="answer<?= $p->id; ?>" class="custom-control-input" value="10">
															<label class="custom-control-label" for="Tidaktahu35">Tidak tahu</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 111) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya17" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya17">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak17" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak17">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 112) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya18" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya18">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak18" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak18">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 113) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Sampahorganik" value="1">
															<label class="custom-control-label" for="Sampahorganik">Sampah organik/sampah basah</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Platik" value="2">
															<label class="custom-control-label" for="Platik">Plastik</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Gelas" value="3">
															<label class="custom-control-label" for="Gelas">Gelas/kaca</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Ketas" value="4">
															<label class="custom-control-label" for="Ketas">Kertas/kardus</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Besi" value="5">
															<label class="custom-control-label" for="Besi">Besi/logam</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="b3" value="6">
															<label class="custom-control-label" for="b3">Bahan Berbahaya dan Beracun (B3)</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Lainnyaa4" value="7">
															<label class="custom-control-label" for="Lainnyaa4">Lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 114) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya19" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya19">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak19" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak19">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 115) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya20" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya20">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak20" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak20">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 116) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="pupukhias" value="1">
															<label class="custom-control-label" for="pupukhias">Pupuk tanaman hias</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="pupukbuah" value="2">
															<label class="custom-control-label" for="pupukbuah">Pupuk tanaman buah, sayur, obat</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Dijual" value="3">
															<label class="custom-control-label" for="Dijual">Dijual</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="td" value="4">
															<label class="custom-control-label" for="td">Tidak dimanfaatkan</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 117) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya21" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya21">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak21" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak21">Tidak</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 118) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="pekarangan2" value="1">
															<label class="custom-control-label" for="pekarangan2">Di halaman/pekarangan rumah</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="dapur2" value="2">
															<label class="custom-control-label" for="dapur2">Di dekat dapur</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="km2" value="3">
															<label class="custom-control-label" for="km2">Di dekat kamar mandi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="bakair" value="4">
															<label class="custom-control-label" for="bakair">Di dekat bak penampungan air hujan.</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="lainnyaa5" value="5">
															<label class="custom-control-label" for="lainnyaa5">Di tempat lainnya, sebutkan:</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 119) { ?>
													<div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="Hujan" value="1">
															<label class="custom-control-label" for="Hujan">Hujan</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="limbahdapur" value="2">
															<label class="custom-control-label" for="limbahdapur">Air limbah dapur</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="limbahkm" value="3">
															<label class="custom-control-label" for="limbahkm">Air limbah kamar mandi</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="sumberlain" value="4">
															<label class="custom-control-label" for="sumberlain">Air limbah dari sumber lain, sebutkan:</label>
														</div>
														<div class="custom-control custom-checkbox">
															<input type="checkbox" class="custom-control-input" name="answer<?= $p->id; ?>[]" id="tidakpasti" value="5">
															<label class="custom-control-label" for="tidakpasti">Tidak tahu/tidak pasti.</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 120) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="adabenda" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="adabenda">Ya, di halaman ada benda yang dapat menyebabkan air tergenang</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakbenda" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidakbenda">Tidak, halaman bersih dari benda yang dapat menyebabkan air tergenang</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 121) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="terbuka" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="terbuka">Ya, terbuka</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tertutup" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tertutup">Ya, tertutup, tidak terlihat</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidakterlihat" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="tidakterlihat">Tidak, tidak terlihat</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 122) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="ya22" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="ya22">Ya</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tidak22" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="tidak22">Tidak</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="salurankering" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="salurankering">Tidak dapat dipakai: saluran kering</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakadasaluran" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="Tidakadasaluran">Tidak ada saluran</label>
														</div>
													</div>
												<?php } ?>
												<?php if ($p->id == 123) { ?>
													<div>
														<div class="custom-control custom-radio">
															<input type="radio" id="selalubersih" name="answer<?= $p->id; ?>" class="custom-control-input" value="1">
															<label class="custom-control-label" for="selalubersih">Ya, bersih atau hampir selalu bersih dari sampah</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="dapatmengalir" name="answer<?= $p->id; ?>" class="custom-control-input" value="2">
															<label class="custom-control-label" for="dapatmengalir">Tidak bersih dari sampah, tapi air masih dapat mengalir</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="tersumbat" name="answer<?= $p->id; ?>" class="custom-control-input" value="3">
															<label class="custom-control-label" for="tersumbat">Tidak bersih dari sampah, saluran tersumbat</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="kering" name="answer<?= $p->id; ?>" class="custom-control-input" value="4">
															<label class="custom-control-label" for="kering">Tidak bersih dari sampah, tapi saluran kering</label>
														</div>
														<div class="custom-control custom-radio">
															<input type="radio" id="Tidakadasaluran2" name="answer<?= $p->id; ?>" class="custom-control-input" value="5">
															<label class="custom-control-label" for="Tidakadasaluran2">Tidak ada saluran</label>
														</div>
													</div>
												<?php } ?>
											</td>
										</tr>
									<?php } ?>
								</tbody>
							</table>
						</div>
						<div class="card-footer">
							<button type="button" class="btn btn-default btn-prev">Prev</button>
							<button type="button" class="btn btn-info btn-next">Next</button>
						</div>
					</div>
				<?php } ?>
			</div>
		</form>
	</div>
</div>

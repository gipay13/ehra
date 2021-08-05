<div class="container my-5">
        <div class="col-md-12">
            <form action="<?= base_url('pertanyaan/store'); ?>" method="POST">
				<input type="submit" value="Next">
                <div id="accordion">
					<?php 
					foreach ($kategori as $k) { ?>
							<div class="card mt-2">
								<div class="card-header" id="headingOne">
								<h5 class="mb-0">
									<button class="btn btn-link" data-toggle="collapse" data-target="#<?= $k->kode_kategori ?>'" aria-expanded="true" aria-controls="<?= $k->kode_kategori ?>">
										<?= $k->kode_kategori ?>. <?= $k->nama_kategori ?>
										<input type="hidden" name="kode_kategori" value="<?= $k->kode_kategori ?>">
									</button>
								</h5>
								</div>
		
								<div id="<?= $k->kode_kategori ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
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
											$data=$this->CI->pertanyaan($k->kode_kategori);
											foreach ($data as $p) { ?>
												<tr>
													<td class="col-md-5"><?= $p->pertanyaan; ?></td>
													<td class="col-md-1"></td>
													<td class="col-md-5">
														<!-- B -->
														<?php if($p->id_pertanyaan == 1) { ?>
															<div class="ml-1">
                                                        		<input type="text" class="col-md-8 form-control" name="answer<?= $p->id_pertanyaan; ?>" placeholder="Tahun">
                                                    		</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 2) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="milikSendiri" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="milikSendiri">Milik Sendiri</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="rumahDinas" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="rumahDinas">Rumah Dinas</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="berbagi" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="berbagi">Berbagi Dengan Keluarga Lain</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sewa" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="sewa">Sewa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="kontrak" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="kontrak">Kontrak</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="milikOrang" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="milikOrang">Milik Orang Tua/Saudara/Anak</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lainnya" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="lainnya">Lainnya</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 3) { ?>
															<div class="ml-1">
																<input type="text" class="form-control col-md-7" name="answer<?= $p->id_pertanyaan; ?>" placeholder="m2">
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 4) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="permanen" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="permanen">Permanen</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="semi" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="semi">Semi Permanen</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="darurat" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="darurat">Darurat</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lainnya2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="lainnya2">Lainnya</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 5) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakSekolah" name="answer<?= $p->id_pertanyaan ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="tidakSekolah">Tidak Sekolah Formal</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="SD" name="answer<?= $p->id_pertanyaan ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="SD">SD</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="SMP" name="answer<?= $p->id_pertanyaan ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="SMP">SMP</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="SMA" name="answer<?= $p->id_pertanyaan ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="SMA">SMA</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="SMK" name="answer<?= $p->id_pertanyaan ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="SMK">SMK/Kejuruan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Universitas" name="answer<?= $p->id_pertanyaan ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Universitas">Universitas/Akademi</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 6) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 7) { ?>
															<div class="form-group row">
																<label for="rp" class="col-sm-2 col-form-label">Rp.</label>
																<div class="col-sm-10">
																<input type="text" class="form-control" id="rp" name="answer<?= $p->id_pertanyaan; ?>">
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 8) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp1.800.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Rp1.800.000">≤ Rp1.800.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp1.800.001" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Rp1.800.001">Rp1.800.001 – Rp3.000.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp3.000.001" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Rp3.000.001">Rp3.000.001 – Rp4.800.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp4.800.001" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Rp4.800.001">Rp4.800.001 – Rp7.200.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp 7.200.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Rp 7.200.000">≥ Rp 7.200.000</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 9) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya2">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak2">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 10) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakMenerima" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="tidakMenerima">Tidak Pernah Menerima Bantuan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="menerima1" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input">
																	<label class="custom-control-label" for="menerima1">Menerima 1 Bantuan (Sebutkan)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="menerimaLebih" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input">
																	<label class="custom-control-label" for="menerimaLebih">Menerima Lebih Dari 1 Bantuan (Sebutkan)</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 11) { ?>
															<div class="form-group row">
																<label for="sejakTahun" class="col-sm-2 col-form-label">Tahun</label>
																<div class="col-sm-10">
																<input type="text" class="form-control" id="sejakTahun" name="answer<?= $p->id_pertanyaan; ?>">
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 12) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya3" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya3">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak3" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak3">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 13) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2th" class="col-sm-5 col-form-label">Kurang dari 2 tahun</label>
																	<div class="col-sm-7">
																	<input type="text" class="form-control" id="kurang2th" name="answer<?= $p->id_pertanyaan; ?>A">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="2-5th" class="col-sm-5 col-form-label">2-5 tahun</label>
																	<div class="col-sm-7">
																	<input type="text" class="form-control" id="2-5th" name="answer<?= $p->id_pertanyaan; ?>B">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="6-12th" class="col-sm-5 col-form-label">6-12 tahun</label>
																	<div class="col-sm-7">
																	<input type="text" class="form-control" id="6-12th" name="answer<?= $p->id_pertanyaan; ?>C">
																	</div>
																</div>
																<div class="form-group row">
																	<label for=">12th" class="col-sm-5 col-form-label">Lebih dari 12 tahun</label>
																	<div class="col-sm-7">
																	<input type="text" class="form-control" id=">12th" name="answer<?= $p->id_pertanyaan; ?>D">
																	</div>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 14) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Kurang dari 2 tahun</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="kurang2" name="answer<?= $p->id_pertanyaan; ?>A">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="2-5" class="col-sm-5 col-form-label">2-5 tahun</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="2-5" name="answer<?= $p->id_pertanyaan; ?>B">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="6-12" class="col-sm-5 col-form-label">6-12 tahun</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="6-12" name="answer<?= $p->id_pertanyaan; ?>C">
																	</div>
																</div>
																<div class="form-group row">
																	<label for=">12" class="col-sm-5 col-form-label">Lebih dari 12 tahun</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id=">12" name="answer<?= $p->id_pertanyaan; ?>D">
																	</div>
																</div>
															</div>
														<?php } ?>
														<!-- C -->
														<?php if($p->id_pertanyaan == 15) { ?>
															<div class="ml-1">
																<input type="text" class="form-control col-md-7" name="answer<?= $p->id_pertanyaan; ?>" placeholder="Liter/Hari">
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 16) { ?>
															<div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Banyak sampah berserakan atau bertumpuk di sekitar lingkungan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y" name="answer<?= $p->id_pertanyaan; ?>A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t" name="answer<?= $p->id_pertanyaan; ?>A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Banyak lalat di sekitar tumpukan sampah</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y2" name="answer<?= $p->id_pertanyaan; ?>B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y2">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t2" name="answer<?= $p->id_pertanyaan; ?>B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t2">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Banyak tikus berkeliaran</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y3" name="answer<?= $p->id_pertanyaan; ?>C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y3">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t3" name="answer<?= $p->id_pertanyaan; ?>C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t3">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Banyak nyamuk</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y4" name="answer<?= $p->id_pertanyaan; ?>D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y4">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t4" name="answer<?= $p->id_pertanyaan; ?>D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t4">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Banyak kucing dan anjing mendatangi tumpukan sampah</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y5" name="answer<?= $p->id_pertanyaan; ?>E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y5">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t5" name="answer<?= $p->id_pertanyaan; ?>E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t5">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Bau busuk yang mengganggu</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y6" name="answer<?= $p->id_pertanyaan; ?>F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y6">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t6" name="answer<?= $p->id_pertanyaan; ?>F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t6">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Menyumbat saluran drainase</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y7" name="answer<?= $p->id_pertanyaan; ?>G" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y7">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t7" name="answer<?= $p->id_pertanyaan; ?>G" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t7">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Ada anak-anak yang bermain di sekitarnya</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y8" name="answer<?= $p->id_pertanyaan; ?>H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y8">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t8" name="answer<?= $p->id_pertanyaan; ?>H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t8">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="kurang2" name="answer<?= $p->id_pertanyaan; ?>I">
																	</div>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 17) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dikumpulkan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Dikumpulkan">Dikumpulkan oleh kolektor informal yang mendaur ulang dan atau sampah organik ditimbun dalam tanah/dibuat kompos</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dibuangkeTPS" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="dibuangkeTPS">Dikumpulkan dan dibuang ke TPS</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibakar" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Dibakar">Dibakar</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ditutupdengantanah" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="ditutupdengantanah">Dibuang ke dalam lubang dan ditutup dengan tanah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakditutupdengantanah" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="tidakditutupdengantanah">Dibuang ke dalam lubang tetapi tidak ditutup dengan tanah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibuangkesungai" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Dibuangkesungai">Dibuang ke sungai/kali/laut/danau</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibiarkansaja" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="Dibiarkansaja">Dibiarkan saja sampai membusuk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibuangkelahan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Dibuangkelahan">Dibuang ke lahan kosong/kebun/hutan dan dibiarkan membusuk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lainsebutkan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="lainsebutkan">Lain-lain, sebutkan:</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Tidaktahu">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 18) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya3" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya3">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak3" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak3">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 19) { ?>
															<div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Sampah organik/sampah basah</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y9" name="answer<?= $p->id_pertanyaan; ?>A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y9">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t9" name="answer<?= $p->id_pertanyaan; ?>A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t9">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Plastik</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y10" name="answer<?= $p->id_pertanyaan; ?>B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y10">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t10" name="answer<?= $p->id_pertanyaan; ?>B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t10">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Gelas atau kaca</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y11" name="answer<?= $p->id_pertanyaan; ?>C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y11">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t11" name="answer<?= $p->id_pertanyaan; ?>C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t11">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Kertas</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y12" name="answer<?= $p->id_pertanyaan; ?>D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y12">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t12" name="answer<?= $p->id_pertanyaan; ?>D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t12">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Besi/logam</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y13" name="answer<?= $p->id_pertanyaan; ?>E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y13">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t13" name="answer<?= $p->id_pertanyaan; ?>E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t13">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Bahan berbahaya dan beracun (B3)</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y14" name="answer<?= $p->id_pertanyaan; ?>F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y14">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t14" name="answer<?= $p->id_pertanyaan; ?>F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t14">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="lain" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="lain" name="answer<?= $p->id_pertanyaan; ?>G">
																	</div>
																</div>
																<div class="form-group row">
																	<label class="col-sm-8 col-form-label">Tidak tahu</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y15" name="answer<?= $p->id_pertanyaan; ?>H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y15">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t15" name="answer<?= $p->id_pertanyaan; ?>H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t15">Tidak</label>
																		</div>
																	</div>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 20) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tiaphari" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tiaphari">Tiap hari</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dalamseminggu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="dalamseminggu">Beberapa kali dalam seminggu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sekaliseminggu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Sekaliseminggu">Sekali dalam seminggu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dalamsebulan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="dalamsebulan">Beberapa kali dalam sebulan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sekalisebulan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="sekalisebulan">Sekali dalam sebulan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpernah" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Tidakpernah">Tidak pernah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="Lainnya">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Tidaktahu2">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 21) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tepatwaktu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tepatwaktu">Tepat waktu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Seringterlambat" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Seringterlambat">Sering terlambat</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu3" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu3">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 22) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya4" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya4">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak4" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak4">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 23) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dariRT" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="dariRT">Pemungut uang sampah dari RT</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dariDesa" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="dariDesa">Pemungut uang sampah dari Desa/Kelurahan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dariperusahaan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="dariperusahaan">Pemungut uang sampah dari perusahaan swasta/KSM</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu4" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tidaktahu4">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 24) { ?>
															
														<?php } ?>
														<!-- D -->
														<?php if($p->id_pertanyaan == 25) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Jambanpribadi" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Jambanpribadi">Jamban pribadi</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Jambantetangga" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Jambantetangga">Jamban tetangga/saudara</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="MCK" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="MCK">MCK/WC Umum</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="helikopter" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="helikopter">Ke WC “helikopter” di empang/ kolam</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kesungai" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Kesungai">Ke sungai/pantai/laut</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kekebun" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Kekebun">Ke kebun/pekarangan rumah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Keselokan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="Keselokan">Ke selokan/parit/got</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kelubanggalian" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Kelubanggalian">Ke lubang galian</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="Lainnya2">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu5" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Tidaktahu5">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 26) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Anak laki-laki umur 5 – 12 tahun</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y16" name="answer<?= $p->id_pertanyaan; ?>A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y16">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t16" name="answer<?= $p->id_pertanyaan; ?>A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t16">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Anak perempuan umur 5 – 12 tahun</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y17" name="answer<?= $p->id_pertanyaan; ?>B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y17">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t17" name="answer<?= $p->id_pertanyaan; ?>B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t17">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Remaja laki-laki</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y18" name="answer<?= $p->id_pertanyaan; ?>C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y18">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t18" name="answer<?= $p->id_pertanyaan; ?>C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t18">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Remaja perempuan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y19" name="answer<?= $p->id_pertanyaan; ?>D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y19">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t19" name="answer<?= $p->id_pertanyaan; ?>D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t19">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Laki-laki dewasa</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y20" name="answer<?= $p->id_pertanyaan; ?>E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y20">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t20" name="answer<?= $p->id_pertanyaan; ?>E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t20">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Perempuan dewasa</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y21" name="answer<?= $p->id_pertanyaan; ?>F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y21">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t21" name="answer<?= $p->id_pertanyaan; ?>F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t21">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Laki-laki tua</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y23" name="answer<?= $p->id_pertanyaan; ?>G" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y23">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t23" name="answer<?= $p->id_pertanyaan; ?>G" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t23">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Perempuan tua</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y24" name="answer<?= $p->id_pertanyaan; ?>H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y24">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t24" name="answer<?= $p->id_pertanyaan; ?>H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t24">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Masih ada tapi tidak tahu/jelas siapa</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y25" name="answer<?= $p->id_pertanyaan; ?>I" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y25">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t25" name="answer<?= $p->id_pertanyaan; ?>I" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t25">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer<?= $p->id_pertanyaan; ?>J">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Tidak ada</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y26" name="answer<?= $p->id_pertanyaan; ?>K" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y26">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t26" name="answer<?= $p->id_pertanyaan; ?>K" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t26">Tidak</label>
																		</div>
																	</div>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 27) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya5" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya5">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak5" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak5">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 28) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Klosetjongkok" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Klosetjongkok">Kloset jongkok leher angsa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Klosetduduk" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Klosetduduk">Kloset duduk leher angsa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="BukanLeher" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="BukanLeher">Bukan Leher Angsa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpunyakloset" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tidakpunyakloset">Tidak punya kloset</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 29) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="fabrikasisesuaiSNI" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="fabrikasisesuaiSNI">Tangki septik fabrikasi sesuai SNI</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="konstruksisendiri" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="konstruksisendiri">Tangki septik konstruksi sendiri (kedap samping dan dasar)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="IPALkomunal" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="IPALkomunal">IPAL komunal (contoh: sanimas)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="IPALterpusat" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="IPALterpusat">IPAL terpusat/perpipaan limbah kota</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Cubluk" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Cubluk">Cubluk/Lubang tanah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="salurandrainase" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="salurandrainase">Langsung ke saluran drainase</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sungai" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Sungai">Sungai/danau/pantai/laut</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kolam" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="Kolam">Kolam/sawah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kebun" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Kebun">Kebun/tanah lapang</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu6" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value=11">
																	<label class="custom-control-label" for="Tidaktahu6">Tidak tahu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya3" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Lainnya3">Lainnya, sebutkan:...</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 30) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya6" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya6">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak6" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak6">Tidak</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu7" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu7">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 31) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya7" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya7">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak7" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak7">Tidak</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu8" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu8">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 32) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lahanresapan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Lahanresapan">Lahan resapan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sumurresapan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Sumurresapan">Sumur resapan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Salurandrainase" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Salurandrainase">Saluran air hujan/drainase</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kanal" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Kanal">Kanal/sungai/badan air/kolam/laut</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakmeresap" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Tidakmeresap">Tidak ada/meresap ke bawah/dinding tangki</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu9" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Tidaktahu9">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 33) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="12bulan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="12bulan">0 – 12 bulan yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="5tahun" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="5tahun">1 – 5 tahun yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lebih5tahun" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Lebih5tahun">Lebih dari 5 – 10 tahun yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lebih10tahun" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Lebih10tahun">Lebih dari 10 tahun yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu10" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Tidaktahu10">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 34) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="12bulan2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="12bulan2">0 – 12 bulan yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="5tahun2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="5tahun2">1 – 5 tahun yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lebih5tahun2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Lebih5tahun2">Lebih dari 5 – 10 tahun yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lebih10tahun2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Lebih10tahun2">Lebih dari 10 tahun yang lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpernah2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tidakpernah2">Tidak pernah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu11" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Tidaktahu11">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 35) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya8" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya8">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak8" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak8">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 36) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sedottinjapemerintah" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="sedottinjapemerintah">Layanan sedot tinja atau truk sedot tinja pemerintah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sedottinjaswasta" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="sedottinjaswasta">Layanan sedot tinja atau truk sedot tinja swasta</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Membayartukang" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Membayartukang">Membayar tukang</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dikosongkansendiri" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Dikosongkansendiri">Dikosongkan sendiri</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu12" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Tidaktahu12">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 37) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kesungaibesar" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Kesungaibesar">Ke sungai besar, sungai kecil, selokan/parit, kolam/empang, saluran drainase</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dikuburdihalaman" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Dikuburdihalaman">Dikubur di halaman</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dikuburditanahorang" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Dikuburditanahorang">Dikubur di tanah orang lain</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya4" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Lainnya4">Lainnya, sebutkan:...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu13" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Tidaktahu13">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 38) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="100ribu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="100ribu">Kurang dari Rp 100 ribu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="200ribu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="200ribu">Antara Rp 100 ribu s.d. Rp 200 ribu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="300ribu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="300ribu">Antara Rp 201 ribu s.d Rp 300 ribu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="400ribu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="400ribu">Antara Rp 301 ribu s.d Rp 400 ribu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lebih400ribu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="lebih400ribu">Lebih dari 400 ribu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakingat" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Tidakingat">Tidak ingat</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 39) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibuangdijamban" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Dibuangdijamban">Dibuang di jamban</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ditanam" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Ditanam">Ditanam</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sembarang" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="sembarang">Dibuang di sembarang tempat/tempat sampah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibersihkan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Dibersihkan">Dibersihkan di sembarang tempat</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya5" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Lainnya5">Lainnya, sebutkan:...</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 40) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="YAsangatsering" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="YAsangatsering">YA, sangat sering</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="yakadang" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="yakadang">YA, kadang-kadang</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakbiasa" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="tidakbiasa">TIDAK, tidak biasa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu14" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tidaktahu14">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 41) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="KeJamban" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="KeJamban">Ke Jamban</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ketempatsampah" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Ketempatsampah">Ke tempat sampah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="pekarangan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="pekarangan">Ke kebun/pekarangan/jalan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="got" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="got">Ke sungai/selokan/got/pantai/laut</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya6" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Lainnya6">Lainnya, sebutkan:...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu15" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Tidaktahu15">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 42) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Mau" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Mau">Mau berlangganan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakmau" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidakmau">Tidak mau berlangganan</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 43) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp1.000.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Rp1.000.000">Kurang dari atau sama dengan Rp 1.000.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp1.500.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Rp1.500.000">Rp 1.000.001 – Rp 1.500.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp2.000.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Rp2.000.000">Rp 1.500.001 – Rp 2.000.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="DiatasRp2.000.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="DiatasRp2.000.000">Diatas Rp 2.000.000</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 44) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp5.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Rp5.000">Kurang dari atau sama dengan Rp 5.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp10.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Rp10.000">Rp 5000 – Rp 10.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Rp15.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Rp15.000">Rp 10.001 - Rp 15.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="DiatasRp15.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="DiatasRp15.000">Lebih dari Rp 15.001</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 45) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaksanggup" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tidaksanggup">Tidak sanggup membayar biaya penyambungan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Belumperlu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Belumperlu">Belum perlu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya7" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Lainnya7">Lainnya, sebutkan: ...</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 46) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="berlangganan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="berlangganan">Mau berlangganan dengan membayar</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakmauberlangganan" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidakmauberlangganan">Tidak mau berlangganan</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 47) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="KurangRp100.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="KurangRp100.000">Kurang dari Rp 100.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="AntaraRp100.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="AntaraRp100.000">Antara Rp100.000 sd Rp 200.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="AntaraRp200.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="AntaraRp200.000">Antara Rp200.000 sd Rp 300.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="AntaraRp300.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="AntaraRp300.000">Antara Rp300.000 sd Rp 400.000</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="KurangRp400.000" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="KurangRp400.000">Lebih dari Rp 400.001</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 48) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaksanggup2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tidaksanggup2">Tidak sanggup membayar biaya penyedotan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Belumperlu2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Belumperlu2">Belum perlu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya8" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Lainnya8">Lainnya, sebutkan: ...</label>
																</div>
															</div>
														<?php } ?>
														<!-- E -->
														<?php if($p->id_pertanyaan == 49) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya9" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya9">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak9" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak9">Tidak Ada</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 50) { ?>
															
														<?php } ?>
														<?php if($p->id_pertanyaan == 51) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya10" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya10">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak10" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak10">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 52) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpernah3" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tidakpernah3">Tidak pernah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sekalisetahun" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="sekalisetahun">Sekali dalam setahun</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Beberapasetahun" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Beberapasetahun">Beberapa kali dalam setahun</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sekalisebulan2" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="sekalisebulan2">Sekali atau beberapa kali dalam sebulan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu16" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Tidaktahu16">Tidak tahu</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 53) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya11" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya11">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak11" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak11">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 54) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya12" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya12">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak12" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak12">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 55) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Setumit" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Setumit">Setumit orang dewasa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Setengahlutut" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Setengahlutut">Setengah lutut orang dewasa (30 cm)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Selutut" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Selutut">Selutut orang dewasa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sepinggang" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Sepinggang">Sepinggang orang dewasa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sebahu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Sebahu">Sebahu orang dewasa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lebihtinggi" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Lebihtinggi">Lebih tinggi dari orang dewasa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu17" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidaktahu17">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 56) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpernah4" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tidakpernah4">Tidak pernah/tidak punya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kadang" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Kadang">Kadang-kadang</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Selalu" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Selalu">Selalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu18" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tidaktahu18">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 57) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kurangsejam" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Kurangsejam">Kurang dari 1 jam</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="3jam" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="3jam">Antara 1 – 3 jam</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Setengahhari" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Setengahhari">Setengah hari</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sehari" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="sehari">Satu hari</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lebihsehari" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="lebihsehari">Lebih dari 1 hari</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu19" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Tidaktahu19">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<!-- F -->
														<?php if($p->id_pertanyaan == 58) { ?>
															
														<?php } ?>
														<?php if($p->id_pertanyaan == 59) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kurang60" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Kurang60">Kurang dari 60 liter (+/- 4 galon)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lebih60" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Lebih60">Lebih dari sama dengan 60 liter (+/- 4 galon)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu20" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu20">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 60) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="0-2liter" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="0-2liter">0-2 liter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="2-4" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="2-4">2-4 liter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="4-6" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="4-6">4-6 liter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="6liter" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="6liter">> 6 liter</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 61) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya21" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya21">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak21" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak21">Tidak</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu21" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu21">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 62) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpernah5" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tidakpernah5">Tidak pernah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Beberapajam" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Beberapajam">Beberapa jam saja</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Satusampaidua" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Satusampaidua">Satu sampai dua hari</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tigahari" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tigahari">Tiga hari sampai kurang dari seminggu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="seminggu" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="seminggu">Seminggu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lebihseminggu" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Lebihseminggu">Lebih dari satu minggu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu22" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="Tidaktahu22">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 63) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="kurang30" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="kurang30">Kurang dari 30 menit</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lebih30" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="lebih30">Lebih dari 30 menit</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu23" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu23">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 64) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ypernah" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ypernah">Ya, pernah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpernah6" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidakpernah6">Tidak pernah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu24" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu24">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 65) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="<2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="<2">< 2 minggu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="2ming" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="2ming">2 minggu s.d. 1 bulan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="1bul" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="1bul">1 bulan s.d. 3 bulan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="3bul" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="3bul">Lebih dari 3 bulan</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 66) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya22" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya22">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak22" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak22">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 67) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="<10m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="<10m">< 10 m</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id=">10m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for=">10m">≥ 10 m</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu25" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu25">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 68) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Didalam" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Didalam">Didalam kawasan pagar rumah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Diluar" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Diluar">Diluar kawasan pagar rumah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu26" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu26">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 69) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kurang1" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Kurang1">Kurang dari 1 km</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lebih1" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="lebih1">Lebih dari atau sama dengan 1 km</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu27" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Tidaktahu27">Tidak tahu</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 70) { ?>
																
														<?php } ?>
														<?php if($p->id_pertanyaan == 71) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="<1m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="<1m"><1 meter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="1m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="1m">1 meter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="2m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="2m">2 meter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="3m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="3m">3 meter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="4m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="4m">4 meter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="5m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="5m">5 meter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id=">5m" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for=">5m">>5 meter</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu28" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Tidaktahu28">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 72) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Membeli" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Membeli">Membeli</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="TidakMembeli" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="TidakMembeli">Tidak Membeli</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 73) { ?>
															
														<?php } ?>
														<?php if($p->id_pertanyaan == 74) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya23" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya23">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak23" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak23">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 75) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Merebus" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Merebus">Merebus/memasak hingga mendidih</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="filter" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="filter">Menggunakan filter modern (keramik, bio, sand, dll)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="solar" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="solar">Menjemur dibawah sinar matahari (solar disinfectant)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Klorin" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Klorin">Klorin cair/klorin padat</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="UV" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="UV">Ultraviolet (UV)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="RO" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="RO">Reverse Osmosis (RO)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lainnya3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="lainnya3">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ndatahu" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="ndatahu">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 76) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya24" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya24">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak24" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak24">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 77) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Langsungdispenser" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Langsungdispenser">Langsung dari dispenser</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="gayung" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="gayung">Dengan menggunakan gayung</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="gelas" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="gelas">Dengan menggunakan gelas</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya13" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Lainnya13">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ndatahu2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="ndatahu2">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<!-- G -->
														<?php if($p->id_pertanyaan == 78) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Ya25" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Ya25">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidak25" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Tidak25">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 79) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Mandi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y27" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y27">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t27" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t27">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Memandikan anak</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y28" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y28">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t28" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t28">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Menceboki anak</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y29" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y29">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t29" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t29">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Mencuci tangan sendiri</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y30" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y30">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t30" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t30">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Mencuci tangan anak</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y31" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y31">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t31" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t31">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Mencuci peralatan minum, makan dan masak</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y32" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y32">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t32" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t32">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Mencuci pakaian</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y33" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y33">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t33" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t33">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Tidak tahu</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y34" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y34">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t34" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t34">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer{{$question->id_pertanyaan}}I">
																	</div>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 80) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di kamar mandi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y35" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y35">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t35" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t35">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di dekat kamar mandi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y36" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y36">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t36" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t36">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di jamban</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y37" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y37">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t37" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t37">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di dekat jamban</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y38" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y38">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t38" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t38">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di sumur</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y39" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y39">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t39" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t39">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di sekitar bak penampungan air hujan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y40" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y40">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t40" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t40">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di tempat cuci piring</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y41" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y41">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t41" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t41">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di dapur</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y42" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y42">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t42" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t42">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Tidak tahu</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y43" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y43">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t43" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t43">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer{{$question->id_pertanyaan}}J">
																	</div>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 81) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sebelum ke toilet</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y44" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y44">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t44" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t44">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Setelah menceboki bayi/anak</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y45" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y45">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t45" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t45">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Setelah dari buang air besar</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y46" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y46">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t46" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t46">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sebelum makan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y47" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y47">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t47" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t47">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Setelah makan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y48" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y48">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t48" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t48">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sebelum menyuapi/menyusui anak</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y49" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y49">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t49" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t49">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sebelum menyiapkan masakan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y50" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y50">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t50" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t50">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Setelah memegang hewan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y51" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y51">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t51" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t51">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sebelum sholat</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y52" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y52">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t52" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t52">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer{{$question->id_pertanyaan}}J">
																	</div>
																</div>
															</div>	
														<?php } ?>
														<!-- H -->
														<?php if($p->id_pertanyaan == 82) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Hariini" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Hariini">Hari ini</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kemarin" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="Kemarin">Kemarin</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="semingguterakhir" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="semingguterakhir">1 minggu terakhir</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sebulanterakhir" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="sebulanterakhir">1 bulan terakhir</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="3bulanterakhir" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="3bulanterakhir">3 bulan terakhir</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="6bulanterakhir" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="6bulanterakhir">6 bulan terakhir</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="7bulanterakhir" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="7bulanterakhir">Lebih dari 6 bulan lalu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakpernah7" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Tidakpernah7">Tidak pernah</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 83) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Anak-anak balita</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y53" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y53">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t53" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t53">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Anak-anak non balita</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y54" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y54">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t54" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t54">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Anak remaja laki-laki</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y55" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y55">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t55" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t55">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Anak remaja perempuan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y56" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y56">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t56" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t56">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Orang dewasa laki-laki</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y57" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y57">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t57" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t57">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Orang dewasa laki-laki</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y58" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y58">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t58" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t58">Tidak</label>
																		</div>
																	</div>
																</div>
															</div>	
														<?php } ?>
														<!-- AO -->
														<?php if($p->id_pertanyaan == 84) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air kemasan bermerk</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y59" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y59">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t59" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t59">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air isi ulang – membeli dari penjual air isi ulang</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y60" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y60">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t60" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t60">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air Ledeng dari PDAM/Proyek/HIPPAM sendiri</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y77" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y77">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t77" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t77">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air ledeng dari PDAM/Proyek/HIPPAM tetangga</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y61" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y61">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t61" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t61">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air ledeng eceran dari PDAM/Proyek/HIPPAM</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y62" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y62">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t62" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t62">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari hidran umum – PDAM/HIPPAM/Proyek</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y63" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y63">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t63" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t63">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari kran umum – PDAM/HIPPAM/Proyek</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y64" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y64">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t64" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t64">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari terminal air_PDAM/HIPPAM/Proyek</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y65" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y65">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t65" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t65">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari kapal air</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y66" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y66">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t66" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t66">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari sumur bor dengan pompa tangan/listrik/mesin</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y67" name="answer{{$question->id_pertanyaan}}J" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y67">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t67" name="answer{{$question->id_pertanyaan}}J" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t67">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari sumur gali terlindungi sendiri</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y68" name="answer{{$question->id_pertanyaan}}K" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y68">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t68" name="answer{{$question->id_pertanyaan}}K" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t68">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari sumur gali terlindungi tetangga</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y69" name="answer{{$question->id_pertanyaan}}L" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y69">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t69" name="answer{{$question->id_pertanyaan}}L" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t69">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari sumur gali tidak terlindungi sendiri</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y70" name="answer{{$question->id_pertanyaan}}M" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y70">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t70" name="answer{{$question->id_pertanyaan}}M" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t70">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari sumur gali tidak terlindungi tetangga</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y71" name="answer{{$question->id_pertanyaan}}N" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y71">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t71" name="answer{{$question->id_pertanyaan}}N" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t71">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari Mata air terlindungi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y72" name="answer{{$question->id_pertanyaan}}O" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y72">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t72" name="answer{{$question->id_pertanyaan}}O" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t72">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari Mata air tidak terlindungi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y73" name="answer{{$question->id_pertanyaan}}P" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y73">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t73" name="answer{{$question->id_pertanyaan}}P" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t73">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air hujan (PAH/Penampungan Air Hujan)</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y74" name="answer{{$question->id_pertanyaan}}Q" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y74">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t74" name="answer{{$question->id_pertanyaan}}Q" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t74">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari sungai</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y75" name="answer{{$question->id_pertanyaan}}R" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y75">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t75" name="answer{{$question->id_pertanyaan}}R" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t75">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air dari waduk/danau</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y76" name="answer{{$question->id_pertanyaan}}S" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y76">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t76" name="answer{{$question->id_pertanyaan}}S" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t76">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer{{$question->id_pertanyaan}}T">
																	</div>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 85) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakdisimpan" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Tidakdisimpan">Tidak disimpan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="gapunyatutup" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="gapunyatutup">Ya, dalam panci atau ember atau tempayan tanpa tutup</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="punyatutup" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="punyatutup">Ya, dalam panci atau ember atau tempayan yang mempunyai tutup</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya14" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Lainnya14">Lainnya, sebutkan: ...</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 86) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="nyentuh" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="nyentuh">Tangan/mulut menyentuh air</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ganyentuh" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="ganyentuh">Tangan/mulut tidak menyentuh air</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 87) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya5" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya5">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak5" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak5">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 88) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya6" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya6">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak6" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak6">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 89) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="disimpanditutup" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="disimpanditutup">Ya, disimpan di atas dan ditutup</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="kawatnyamuk" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="kawatnyamuk">Ya, disimpan dalam lemari makan, ditutup dengan kawat nyamuk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tertutuprapat" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="tertutuprapat">Ya, disimpan dalam lemari yang tertutup rapat</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dalamkulkas" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="dalamkulkas">Ya, di dalam kulkas</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya15" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Lainnya15">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakditutup" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Tidakditutup">Tidak ditutup</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 90) { ?>
															
														<?php } ?>
														<?php if($p->id_pertanyaan == 91) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="kanal" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="kanal">Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="cubluk" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="cubluk">Saluran terbuka ke cubluk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="rawa" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="rawa">Saluran terbuka ke kolam/rawa/genangan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tangki" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="tangki">Saluran terbuka ke tangki septik</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="riool" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="riool">Saluran tertutup ke riool, selokan, sungai</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sumur" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="sumur">Lubang galian/sumur resapan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="septik" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="septik">Saluran tertutup ke tangki septik</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sanimas" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Sanimas">Pipa IPAL Sanimas</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya17" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="Lainnya17">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu30" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Tidaktahu30">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<!-- BO -->
														<?php if($p->id_pertanyaan == 92) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya7" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya7">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak7" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak7">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 93) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="kanal2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="kanal2">Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="cubluk2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="cubluk2">Saluran terbuka ke cubluk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="rawa2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="rawa2">Saluran terbuka ke kolam/rawa/genangan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tangki2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="tangki2">Saluran terbuka ke tangki septik</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="riool2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="riool2">Saluran tertutup ke riool, selokan, sungai</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sumur2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="sumur2">Lubang galian/sumur resapan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="septik2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="septik2">Saluran tertutup ke tangki septik</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sanimas2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Sanimas2">Pipa IPAL Sanimas</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya18" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="Lainnya18">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu31" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Tidaktahu31">Tidak tahu</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 94) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya8" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya8">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak8" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak8">Tidak</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidaktahu7" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="tidaktahu7">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<!-- CO -->
														<?php if($p->id_pertanyaan == 95) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="bak" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="bak">Ya, dalam bak air/ember</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="kran" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="kran">Ya, dari kran & berfungsi</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="kran2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="kran2">Ya, dari kran, tidak berfungsi</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakada2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tidakada2">Tidak ada</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 96) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya10" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya10">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak10" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak10">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 97) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya9" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya9">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak9" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak9">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 98) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="jongkok" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="jongkok">Kloset jongkok leher angsa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="duduk" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="duduk">Kloset duduk leher angsa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Bukan" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Bukan">Bukan leher angsa</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakkloset" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="tidakkloset">Tidak punya kloset</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 99) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="septikfabrikasi" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="septikfabrikasi">Tangki septik fabrikasi sesuai SNI</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="septikkonstruksi" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="septikkonstruksi">Tangki septik konstruksi sendiri (kedap samping dan  dasar)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="IPALkomunal2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="IPALkomunal2">IPAL komunal (contoh: Sanimas)</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="IPALterpusat2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="IPALterpusat2">IPAL terpusat/perpipaan limbah kota</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Cubluk2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="Cubluk2">Cubluk/Lubang tanah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lgsgdrainase" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="lgsgdrainase">Langsung ke saluran drainase</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sungai2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="Sungai2">Sungai/danau/pantai/laut</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sawah2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="sawah2">Kolam/sawah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Kebun2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="Kebun2">Kebun/tanah lapang</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu33" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Tidaktahu33">Tidak tahu</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya19" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="11">
																	<label class="custom-control-label" for="Lainnya19">Lainnya, sebutkan: ...</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 100) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya11" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya11">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak11" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak11">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 101) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya12" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya12">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak12" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak12">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 102) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya13" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya13">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak13" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak13">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 103) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="yaberfungsi" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="yaberfungsi">Ya, berfungsi</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakberfungsi" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidakberfungsi">Tidak berfungsi</label>
																</div>
															</div>	
														<?php } ?>
														<!-- DO -->
														<?php if($p->id_pertanyaan == 104) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya14" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya14">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak14" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak14">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 105) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air Ledeng PDAM/proyek - berfungsi/mengalir</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y78" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y78">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t78" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t78">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air Ledeng PDAM/proyek, tidak berfungsi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y79" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y79">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t79" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t79">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sumur Gali yang terlindungi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y80" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y80">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t80" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t80">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sumur Gali yang tidak terlindungi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y81" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y81">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t81" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t81">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sumur Bor dengan Pompa Tangan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y82" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y82">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t82" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t82">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sumur Bor dengan Pompa Mesin/Listrik</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y83" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y83">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t83" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t83">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Hidran Umum- PDAM/Proyek/HIPPAM</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y84" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y84">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t84" name="answer{{$question->id_pertanyaan}}G" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t84">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Kran Umum – PDAM/Proyek/HIPPAM</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y85" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y85">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t85" name="answer{{$question->id_pertanyaan}}H" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t85">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Penjual air keliling</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y86" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y86">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t86" name="answer{{$question->id_pertanyaan}}I" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t86">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer{{$question->id_pertanyaan}}J">
																	</div>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 106) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="kanal3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="kanal3">Saluran terbuka ke sungai/kanal/kolam/selokan jalan/halaman</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="cubluk3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="cubluk3">Saluran terbuka ke cubluk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="rawa3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="rawa3">Saluran terbuka ke kolam/rawa/genangan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tangki3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="tangki3">Saluran terbuka ke tangki septik</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="riool3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="riool3">Saluran tertutup ke riool, selokan, sungai</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="sumur3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="sumur3">Lubang galian/sumur resapan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="septik3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="septik3">Saluran tertutup ke tangki septik</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Sanimas3" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Sanimas3">Pipa IPAL Sanimas</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya20" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="Lainnya20">Lainnya, sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu34" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Tidaktahu34">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<!-- EO -->
														<?php if($p->id_pertanyaan == 107) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya15" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya15">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak15" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak15">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 108) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="pekarangandepan" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="pekarangandepan">Di pekarangan depan</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="pekarangansamping" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="pekarangansamping">Di pekarangan samping</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="pekaranganbelakang" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="pekaranganbelakang">Di pekarangan belakang</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="bawahgarasi" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="bawahgarasi">Di bawah garasi</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dalamrumah" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="dalamrumah">Di dalam rumah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Lainnya34" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Lainnya34">Lainnya, Sebutkan: ...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakjelas" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="Tidakjelas">Tidak jelas/tidak tahu</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 109) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya16" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya16">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak16" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak16">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 110) { ?>
															<div class="bg-primary">
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dikumpulkan2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="Dikumpulkan2">Dikumpulkan oleh kolektor informal yang mendaur ulang dan atau sampah organik ditimbun dalam tanah/dibuat kompos</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dibuangkeTPS2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="dibuangkeTPS2">Dikumpulkan dan dibuang ke TPS</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibakar2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="Dibakar2">Dibakar</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ditutupdengantanah2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="ditutupdengantanah2">Dibuang ke dalam lubang dan ditutup dengan tanah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakditutupdengantanah2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
																	<label class="custom-control-label" for="tidakditutupdengantanah2">Dibuang ke dalam lubang tetapi tidak ditutup dengan tanah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibuangkesungai2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="6">
																	<label class="custom-control-label" for="Dibuangkesungai2">Dibuang ke sungai/kali/laut/danau</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibiarkansaja2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="7">
																	<label class="custom-control-label" for="Dibiarkansaja2">Dibiarkan saja sampai membusuk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Dibuangkelahan2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="8">
																	<label class="custom-control-label" for="Dibuangkelahan2">Dibuang ke lahan kosong/kebun/hutan dan dibiarkan membusuk</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="lainsebutkan2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="9">
																	<label class="custom-control-label" for="lainsebutkan2">Lain-lain, sebutkan...</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidaktahu35" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="10">
																	<label class="custom-control-label" for="Tidaktahu35">Tidak tahu</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 111) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya17" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya17">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak17" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak17">Tidak</label>
																</div>
															</div>
														<?php } ?>
														<?php if($p->id_pertanyaan == 112) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya18" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya18">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak18" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak18">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 113) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Sampah organik/sampah basah</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y87" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y87">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t87" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t87">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Plastik</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y88" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y88">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t88" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t88">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Gelas/kaca</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y89" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y89">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t89" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t89">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Kertas/kardus</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y90" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y90">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t90" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t90">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Besi/logam</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y91" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y91">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t91" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t91">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Bahan Berbahaya dan Beracun (B3)</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y92" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y92">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t92" name="answer{{$question->id_pertanyaan}}F" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t92">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer{{$question->id_pertanyaan}}G">
																	</div>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 114) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya19" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya19">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak19" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak19">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 115) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya20" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya20">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak20" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak20">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 116) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Pupuk tanaman hias</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y93" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y93">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t93" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t93">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Pupuk tanaman buah, sayur, obat</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y94" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y94">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t94" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t94">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Dijual</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y95" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y95">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t95" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t95">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Tidak dimanfaatkan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y96" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y96">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t96" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t96">Tidak</label>
																		</div>
																	</div>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 117) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya21" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya21">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak21" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak21">Tidak</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 118) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di halaman/pekarangan rumah</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y97" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y97">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t97" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t97">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di dekat dapur</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y98" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y98">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t98" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t98">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di dekat kamar mandi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y99" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y99">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t99" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t99">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Di dekat bak penampungan air hujan.</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y100" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y100">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t100" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t100">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-5 col-form-label">Di tempat lainnya, sebutkan:</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" name="answer{{$question->id_pertanyaan}}E">
																	</div>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 119) { ?>
															<div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Hujan</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y101" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y101">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t101" name="answer{{$question->id_pertanyaan}}A" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t101">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air limbah dapur</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y102" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y102">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t102" name="answer{{$question->id_pertanyaan}}B" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t102">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air limbah kamar mandi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y103" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y103">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t103" name="answer{{$question->id_pertanyaan}}C" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t103">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Air limbah kamar mandi</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y104" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y104">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t104" name="answer{{$question->id_pertanyaan}}D" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t104">Tidak</label>
																		</div>
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang2" class="col-sm-8 col-form-label">Tidak tahu/tidak pasti.</label>
																	<div class="col-sm-4">
																		<div class="custom-control custom-radio">
																			<input type="radio" id="y105" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="1">
																			<label class="custom-control-label" for="y105">Ya</label>
																		</div>
																		<div class="custom-control custom-radio">
																			<input type="radio" id="t105" name="answer{{$question->id_pertanyaan}}E" class="custom-control-input" value="2">
																			<label class="custom-control-label" for="t105">Tidak</label>
																		</div>
																	</div>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 120) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="adabenda" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="adabenda">Ya, di halaman ada benda yang dapat menyebabkan air tergenang</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakbenda" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidakbenda">Tidak, halaman bersih dari benda yang dapat menyebabkan air tergenang</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 121) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="terbuka" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="terbuka">Ya, terbuka</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tertutup" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tertutup">Ya, tertutup, tidak terlihat</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidakterlihat" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="tidakterlihat">Tidak, tidak terlihat</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 122) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="ya22" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="ya22">Ya</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tidak22" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="tidak22">Tidak</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="salurankering" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="salurankering">Tidak dapat dipakai: saluran kering</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakadasaluran" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="Tidakadasaluran">Tidak ada saluran</label>
																</div>
															</div>	
														<?php } ?>
														<?php if($p->id_pertanyaan == 123) { ?>
															<div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="selalubersih" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="1">
																	<label class="custom-control-label" for="selalubersih">Ya, bersih atau hampir selalu bersih dari sampah</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="dapatmengalir" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="2">
																	<label class="custom-control-label" for="dapatmengalir">Tidak bersih dari sampah, tapi air masih dapat mengalir</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="tersumbat" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
																	<label class="custom-control-label" for="tersumbat">Tidak bersih dari sampah, saluran tersumbat</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="kering" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="4">
																	<label class="custom-control-label" for="kering">Tidak bersih dari sampah, tapi saluran kering</label>
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="Tidakadasaluran2" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="5">
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
								</div>
							</div>
					<?php } ?>
                </div>
            </form>
        </div>
    </div>

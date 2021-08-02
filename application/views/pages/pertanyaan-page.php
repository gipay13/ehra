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
																	<input type="radio" id="berbagi" name="answer{{$question->id_pertanyaan}}" class="custom-control-input" value="3">
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
																	<input type="text" class="form-control" id="menerima1" name="answer<?= $p->id_pertanyaan; ?>">
																</div>
																<div class="custom-control custom-radio">
																	<input type="radio" id="menerimaLebih" name="answer<?= $p->id_pertanyaan; ?>" class="custom-control-input">
																	<label class="custom-control-label" for="menerimaLebih">Menerima Lebih Dari 1 Bantuan (Sebutkan)</label>
																	<input type="text" class="form-control" id="menerima1" name="answer<?= $p->id_pertanyaan; ?>">
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
																	<label for="kurang" class="col-sm-5 col-form-label">2-5 tahun</label>
																	<div class="col-sm-7">
																	<input type="text" class="form-control" id="kurang" name="answer<?= $p->id_pertanyaan; ?>B">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang" class="col-sm-5 col-form-label">6-12 tahun</label>
																	<div class="col-sm-7">
																	<input type="text" class="form-control" id="kurang" name="answer<?= $p->id_pertanyaan; ?>C">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang" class="col-sm-5 col-form-label">Lebih dari 12 tahun</label>
																	<div class="col-sm-7">
																	<input type="text" class="form-control" id="kurang" name="answer<?= $p->id_pertanyaan; ?>D">
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
																	<label for="kurang2" class="col-sm-5 col-form-label">2-5 tahun</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="kurang" name="answer<?= $p->id_pertanyaan; ?>B">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang" class="col-sm-5 col-form-label">6-12 tahun</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="kurang" name="answer<?= $p->id_pertanyaan; ?>C">
																	</div>
																</div>
																<div class="form-group row">
																	<label for="kurang" class="col-sm-5 col-form-label">Lebih dari 12 tahun</label>
																	<div class="col-sm-7">
																		<input type="text" class="form-control" id="kurang" name="answer<?= $p->id_pertanyaan; ?>D">
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
								</div>
							</div>
					<?php } ?>
                </div>
            </form>
        </div>
    </div>

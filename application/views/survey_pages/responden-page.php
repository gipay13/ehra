<div class="container my-5">
	<div class="row">
		<div class="col-md-8 mx-auto">
			<form action="<?= base_url('responden/process'); ?>" method="post">
				<div class="card">
					<div class="card-header">
						Informasi Umum
					</div>
					<div class="card-body">
						<div class="my-3 mx-4">
							<div class="form-group">
								<label for="no_survey">Nomor Survey</label>
								<input type="text" class="form-control" name="no_survey" id="no_survey" value="<?= $survey ?>" readonly>
							</div>
							<div class="form-group">
								<label for="tanggal_survey">Tanggal Survey</label>
								<input type="date" class="form-control" name="tanggal_survey" id="tanggal_survey" value="<?= date('Y-m-d') ?>">
							</div>
							<div class="form-group">
								<label for="jam_survey">Jam Survey</label>
								<input type="time" name="jam_survey" id="jam_survey" class="form-control">
							</div>
							<div class="form-group">
								<label for="username">Nama Pewawancara/Enumerator</label>
								<input type="hidden" name="user_id" id="user_id" value="<?= $this->session->userdata('id'); ?>">
								<input type="text" name="username" id="username" class="form-control" value="<?= $this->session->userdata("name"); ?>" readonly>
							</div>
							<div class="form-group">
								<label for="supervisor">Nama Supervisor</label>
								<select name="supervisor" id="supervisor" class="form-control">
									<option value="">--Pilih Supervisor--</option>
									<?php
									foreach ($supervisor as $s) {
										echo '<option value="' . $s->user_id . '">' . $s->name . '</option>';
									}
									?>
								</select>
							</div>
							<div class="form-group">
								<label for="koordinator">Koordinator Kecamatan</label>
								<select name="koordinator" id="koordinator" class="form-control">
									<option value="">--Pilih Koordinator--</option>
									<?php foreach ($koordinator as $k) { ?>
										<option value="<?= $k->user_id ?>"><?= $k->name ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
					</div>
				</div>
				<div class="card my-5">
					<div class="card-header">
						A. Informasi Responden
					</div>
					<div class="card-body">
						<div class="my-3 mx-4">
							<div class="form-group">
								<label for="kabupaten">Kabupaten/Kota</label>
								<select name="kabupaten" id="kabupaten" class="form-control">
									<option value="">--Pilih Kabupaten--</option>
									<?php
									foreach ($regencies as $r) {
										echo '<option value="' . $r->id . '">' . $r->regency_name . '</option>';
									}
									?>
								</select>
							</div>

							<div class="form-group">
								<label for="kecamatan">Kecamatan</label>
								<select name="kecamatan" id="kecamatan" class="form-control">
									<option value="">--Pilih Kecamatan--</option>
								</select>
							</div>

							<div class="form-group">
								<label for="nkk">NKK</label>
								<input type="text" class="form-control" name="nkk" id="nkk">
							</div>
							<div class="form-group">
								<label for="nik">NIK Kepala Rumah Tangga</label>
								<input type="text" class="form-control" name="nik" id="nik">
							</div>
							<div class="form-group">
								<label for="nama_kepala">Nama Kepala Rumah Tangga</label>
								<input type="text" class="form-control" name="nama_kepala" id="nama_kepala" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="jumlah_keluarga">Jumlah Keluarga Dalam Rumah</label>
								<input type="number" class="form-control" name="jumlah_keluarga" id="jumlah_keluarga">
							</div>
							<div class="form-group">
								<label for="jumlah_jiwa">Jumlah Jiwa dalam Rumah</label>
								<select name="jumlah_jiwa" id="jumlah_jiwa" class="form-control">
									<option value="">--Pilih--</option>
									<option value="1 Orang">1 Orang</option>
									<option value="2 Orang">2 Orang</option>
									<option value="3 Orang">3 Orang</option>
									<option value="4 Orang">4 Orang</option>
									<option value="5 Orang">5 Orang</option>
									<option value="< 5 Orang">< 5 Orang</option>
								</select>
							</div>
							<div class="form-group">
								<label for="responden">Nama Responden</label>
								<input type="text" class="form-control" name="responden" id="responden" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="hubungan">Hubungan Responden dengan Kepala Keluarga</label>
								<div class="custom-control custom-radio">
									<input type="radio" id="istri" name="hubungan" class="custom-control-input" value="1">
									<label class="custom-control-label" for="istri">Istri</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="anakPr" name="hubungan" class="custom-control-input" value="2">
									<label class="custom-control-label" for="anakPr">Anak perempuan yang sudah menikah</label>
								</div>
								<div class="custom-control custom-radio">
									<input type="radio" id="kepala" name="hubungan" class="custom-control-input" value="3">
									<label class="custom-control-label" for="kepala">Kepala keluarga</label>
								</div>
							</div>

							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" name="alamat" id="alamat" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="rt">RT</label>
								<input type="number" class="form-control" name="rt" id="rt" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="rw">RW</label>
								<input type="number" class="form-control" name="rw" id="rw" autocomplete="off">
							</div>
							<div class="form-group">
								<label for="no_rmh">No Rumah</label>
								<input type="text" class="form-control" name="no_rmh" id="no_rmh" autocomplete="off" placeholder="Tulis dengan Blok jika ada ex. B-12">
							</div>

						</div>
					</div>
				</div>
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#centralModalSm">
					Submit
				</button>

				<!-- Central Modal large -->
				<div class="modal fade" id="centralModalSm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
					<div class="modal-dialog modal-lg" role="document">
						<div class="modal-content">
							<div class="modal-header">
								<h4 class="modal-title w-100 text-center" id="myModalLabel"><b>PERNYATAAN KESEDIAAN</b></h4>
							</div>
							<div class="modal-body">
								<p class="text-center">(WAJIB DIBACAKAN PADA CALON RESPONDEN; BOLEH MENGGUNAKAN BAHASA DAERAH SETEMPAT)</p>
								<p class="text-center">Selamat pagi/siang/sore Ibu, saya <?= $this->session->userdata("name"); ?> mewakili tim survey Penilaian Resiko Kesehatan Lingkungan, Program Percepatan
									Pembangunan Sanitasi Permukiman (PPSP). Kami sedang melakukan survei rumah tangga dan
									Ibu terpilih untuk diwawancarai. Kami ingin menanyakan dan mengamati hal-hal yang berkaitan dengan lingkungan rumah.
									Informasi yang ibu berikan akan membantu pemerintah kab/kota merencanakan program lingkungan. Informasi yang ibu berikan
									akan terjaga kerahasiaannya dan tidak akan ditunjukkan pada orang lain. Lama wawancara ini sekitar 30 menit. Wawancara ini
									sifatnya sukarela, Ibu boleh menolak atau tidak menjawab pertanyaan tertentu atau tidak melanjutkan wawancara. Kami harap Ibu
									bersedia berpartisipasi karena jawaban Ibu sangat penting bagi pembangunan lingkungan. <b>(Jika Calon Responden Tidak
										bersedia, ucapkan terima kasih kepada calon responden tersebut dan selanjutnya anda pindah ke calon responden lain yang ada
										dalam daftar calon responden)</b></p>
							</div>
							<div class="modal-footer">
								<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
								<button type="submit" class="btn btn-primary btn-sm">Simpan</button>
							</div>
						</div>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

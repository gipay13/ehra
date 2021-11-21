<div class="container my-5">
	<div class="col-md-12">
		<?= $this->session->flashdata('message'); ?>
		<form action="<?= base_url('survey/store_rs'); ?>" method="POST">
			<input type="hidden" name="no_survey" value="<?= $this->uri->segment(3) ?>">
			<?php foreach ($kategori as $k) { ?>
					<div class="card mt-5">
						<div class="card-header font-weight-bold">
							<?= $k->category_name ?>
						</div>
						<div class="card-body">
							<div class="container-fluid">
								<?php
								$pertanyaan = $this->CI->pertanyaan($k->id);
								foreach ($pertanyaan as $p) { ?>
									<div class="row mb-3 border-bottom" id="row-question-<?= $p->id ?>">
										<div class="col-md-6 col-sm-12 mb-3">
											<h6 class="m-0"><?= $p->question_name; ?></h6>
										</div>
										<div class="col-md-6 col-sm-12 mb-3">
											<h6 class="m-0">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
													</div>
												<?php } ?>
											</h6>
										</div>
									</div>
								<?php } ?>
							</div>
							
						</div>
					</div>
			<?php } ?>
			<div class="mt-5">
				<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modal">
					Submit
				</button>
			</div>
			<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
				<div class="modal-dialog modal-md" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h4 class="modal-title w-100 text-center" id="myModalLabel"><b>PERHATIAN</b></h4>
						</div>
						<div class="modal-body">
							<p class="text-center">Pastikan semua data sudah sesuai sebelum di simpan agar tidak terjadi kesalahan perhitungan pada laporan</p>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Batal</button>
							<button type="submit" name="simpan" class="btn btn-primary btn-sm">Simpan</button>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>


<div class="container my-5">
	<div class="col-md-12">
		<form action="<?= base_url('survey/store'); ?>" method="POST">
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5"><?= $p->question_name; ?></td>
											<td class="col-md-1"></td>
											<td class="col-md-5">
												<?php $jawaban = $this->CI->jawaban($p->id); ?>
												<?php foreach ($jawaban as $j) { ?>
													<div>
														<?= $p->type_id == 1 ? $this->CI->radio($j->id, $p->id, $j->answer_name) : $this->CI->checkbox($j->id, $p->id, $j->answer_name) ?>
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
							<button type="submit" class="btn btn-info btn-next">Submit</button>
						</div>
					</div>
				<?php } ?>
			</div>
		</form>
	</div>
</div>

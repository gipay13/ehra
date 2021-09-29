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
										<th class="col-md-5 col-sm-12 font-weight-bold">Kuesioner</th>
										<th class="col-md-1 col-sm-0 font-weight-bold"></th>
										<th class="col-md-6 col-sm-12 font-weight-bold">Jawaban</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$pertanyaan = $this->CI->pertanyaan($k->id);
									foreach ($pertanyaan as $p) { ?>
										<tr>
											<td class="col-md-5 col-sm-12"><?= $p->question_name; ?></td>
											<td class="col-md-1 col-sm-0"></td>
											<td class="col-md-6 col-sm-12">
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
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-info btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-info btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-info btn-prev">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-next">Prev</a>
							<a href="#nav" class="btn btn-info btn-next">Next</a>
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
							<a href="#nav" class="btn btn-default btn-prev">Prev</a>
							<button type="submit" class="btn btn-info btn-next">Submit</button>
						</div>
					</div>
				<?php } ?>
			</div>
		</form>
	</div>
</div>

<script>
	$('a[href*="#"]')
		// Remove links that don't actually link to anything
		.not('[href="#"]')
		.not('[href="#0"]')
		.click(function(event) {
			// On-page links
			if (
				location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
				location.hostname == this.hostname
			) {
				// Figure out element to scroll to
				var target = $(this.hash);
				target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
				// Does a scroll target exist?
				if (target.length) {
					// Only prevent default if animation is actually gonna happen
					event.preventDefault();
					$('html, body').animate({
						scrollTop: target.offset().top
					}, 20, function() {
						// Callback after animation
						// Must change focus!
						var $target = $(target);
						$target.focus();
						if ($target.is(":focus")) { // Checking if the target was focused
							return false;
						} else {
							$target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
							$target.focus(); // Set focus again
						};
					});
				}
			}
		});
	$('.btn-next, .btn-prev').click(function() {
		const $btn = $(this),
			isNext = $btn.hasClass('btn-next'),
			$card = $btn.closest('.card').hide();


		const $nextCard = isNext ? $card.next() : $card.prev();
		$nextCard.show()

	});
	$(document).ready(function($) {
		var $jwbn19 = $('input[name="answer19[]"]').not('#80')
		$('#80').change(function() {
			if (this.checked) {
				$jwbn19.prop('checked', false)
			}
		});
		$jwbn19.change(function() {
			if (this.checked) {
				$('#80').prop('checked', false)
			}
		})

		var $jwbn26 = $('input[name="answer26[]"]').not('#122')
		$('#122').change(function() {
			if (this.checked) {
				$jwbn26.prop('checked', false)
			}
		});
		$jwbn26.change(function() {
			if (this.checked) {
				$('#122').prop('checked', false)
			}
		})

		var $jwbn135 = $('input[name="answer135[]"]').not('#649')
		$('#649').change(function() {
			if (this.checked) {
				$jwbn135.prop('checked', false)
			}
		});
		$jwbn135.change(function() {
			if (this.checked) {
				$('#649').prop('checked', false)
			}
		})

		var $jwbn70 = $('input[name="answer70[]"]').not('#312')
		$('#312').change(function() {
			if (this.checked) {
				$jwbn70.prop('checked', false)
			}
		});
		$jwbn70.change(function() {
			if (this.checked) {
				$('#312').prop('checked', false)
			}
		})

		var $jwbn79 = $('input[name="answer79[]"]').not('#728')
		$('#728').change(function() {
			if (this.checked) {
				$jwbn79.prop('checked', false)
			}
		});
		$jwbn79.change(function() {
			if (this.checked) {
				$('#728').prop('checked', false)
			}
		})

		var $jwbn80 = $('input[name="answer80[]"]').not('#719')
		$('#719').change(function() {
			if (this.checked) {
				$jwbn80.prop('checked', false)
			}
		});
		$jwbn80.change(function() {
			if (this.checked) {
				$('#719').prop('checked', false)
			}
		})

		var $jwbn116 = $('input[name="answer116[]"]').not('#550')
		$('#550').change(function() {
			if (this.checked) {
				$jwbn116.prop('checked', false)
			}
		});
		$jwbn116.change(function() {
			if (this.checked) {
				$('#550').prop('checked', false)
			}
		})

		var $jwbn119 = $('input[name="answer119[]"]').not('#562')
		$('#562').change(function() {
			if (this.checked) {
				$jwbn119.prop('checked', false)
			}
		});
		$jwbn119.change(function() {
			if (this.checked) {
				$('#562').prop('checked', false)
			}
		})
	});
</script>

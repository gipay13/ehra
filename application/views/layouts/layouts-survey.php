<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Ehra | Survey</title>

	<!-- Font Awesome -->
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
	<!-- Google Fonts -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
	<!-- Bootstrap core CSS -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
	<!-- Material Design Bootstrap -->
	<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">

	<style>
		#toggle-cards .card:not(:first-child) {
			display: none
		}
	</style>
</head>

<body>
	<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
		<div class="container">
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item dropdown">
						<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
							<?= $this->session->userdata("name"); ?>
						</a>

						<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="<?= base_url('admin/dashboard') ?>">Dashboard</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container my-5">
		<?= $content ?>
	</div>

</body>
<!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
	$(document).ready(function($) {
		$('#kabupaten').change(function() {
			var id = $('#kabupaten').val();
			if (id != '') {
				$.ajax({
					url: "<?= base_url('responden/fetch_district'); ?>",
					method: "POST",
					data: {
						id: id
					},
					success: function(data) {
						$('#kecamatan').html(data);
					}
				})
			}
		});

		$('#kecamatan').change(function() {
			var id = $('#kecamatan').val();
			if (id != '') {
				$.ajax({
					url: "<?= base_url('responden/fetch_village'); ?>",
					method: "POST",
					data: {
						id: id
					},
					success: function(data) {
						$('#kelurahan').html(data);
					}
				})
			}
		});

		$('#kecamatan').change(function() {
			var id = $('#kecamatan').val();
			if (id != '') {
				$.ajax({
					url: "<?= base_url('responden/fetch_koordinator'); ?>",
					method: "POST",
					data: {
						id: id
					},
					success: function(data) {
						$('#koordinator').html(data);
					}
				})
			}
		});
	});
	$('.btn-next, .btn-prev').click(function() {
		const $btn = $(this),
			isNext = $btn.hasClass('btn-next'),
			$card = $btn.closest('.card').hide();


		const $nextCard = isNext ? $card.next() : $card.prev();
		$nextCard.show()

	});
	$(document).ready(function($) {
		var $jwbn19 = $('input[name="answer19[]"]').not('#tidaktahu')
		$('#tidaktahu').change(function() {
			if (this.checked) {
				$jwbn19.prop('checked', false)
			}
		});
		$jwbn19.change(function() {
			if (this.checked) {
				$('#tidaktahu').prop('checked', false)
			}
		})

		var $jwbn26 = $('input[name="answer26[]"]').not('#ta')
		$('#ta').change(function() {
			if (this.checked) {
				$jwbn26.prop('checked', false)
			}
		});
		$jwbn26.change(function() {
			if (this.checked) {
				$('#ta').prop('checked', false)
			}
		})

		var $jwbn70 = $('input[name="answer70[]"]').not('#Tidaksemua')
		$('#Tidaksemua').change(function() {
			if (this.checked) {
				$jwbn70.prop('checked', false)
			}
		});
		$jwbn70.change(function() {
			if (this.checked) {
				$('#Tidaksemua').prop('checked', false)
			}
		})

		var $jwbn79 = $('input[name="answer79[]"]').not('#tidaktahu1')
		$('#tidaktahu1').change(function() {
			if (this.checked) {
				$jwbn79.prop('checked', false)
			}
		});
		$jwbn79.change(function() {
			if (this.checked) {
				$('#tidaktahu1').prop('checked', false)
			}
		})

		var $jwbn80 = $('input[name="answer80[]"]').not('#tita')
		$('#tita').change(function() {
			if (this.checked) {
				$jwbn80.prop('checked', false)
			}
		});
		$jwbn80.change(function() {
			if (this.checked) {
				$('#tita').prop('checked', false)
			}
		})

		var $jwbn116 = $('input[name="answer116[]"]').not('#td')
		$('#td').change(function() {
			if (this.checked) {
				$jwbn116.prop('checked', false)
			}
		});
		$jwbn116.change(function() {
			if (this.checked) {
				$('#td').prop('checked', false)
			}
		})

		var $jwbn119 = $('input[name="answer119[]"]').not('#tidakpasti')
		$('#tidakpasti').change(function() {
			if (this.checked) {
				$jwbn119.prop('checked', false)
			}
		});
		$jwbn119.change(function() {
			if (this.checked) {
				$('#tidakpasti').prop('checked', false)
			}
		})
	});
</script>

</html>

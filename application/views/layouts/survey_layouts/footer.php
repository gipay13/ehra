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
	$(document).ready(function() {

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

	// $('#card-b').hide();
	$('#card-c').hide();
	$('#card-d').hide();
	$('#card-e').hide();
	$('#card-f').hide();
	$('#card-g').hide();
	$('#card-h').hide();
	$('#card-ao').hide();
	$('#card-bo').hide();
	$('#card-co').hide();
	$('#card-do').hide();
	$('#card-eo').hide();

	$('#to-c').click(function() {
		showC();
	})

	$('#to-d').click(function() {
		showD();
	})

	$('#to-e').click(function() {
		showE();
	})

	$('#to-f').click(function() {
		showF();
	})

	$('#to-g').click(function() {
		showG();
	})

	$('#to-h').click(function() {
		showH();
	})

	$('#to-ao').click(function() {
		showAO();
	})

	$('#to-bo').click(function() {
		showBO();
	})

	$('#to-co').click(function() {
		showCO();
	})

	$('#to-do').click(function() {
		showDO();
	})

	$('#to-eo').click(function() {
		showEO();
	})

	function showC() {
		$('#card-b').hide();
		$('#card-c').show();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showD() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').show();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showE() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').show();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showF() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').show();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showG() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').show();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showH() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').show();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showAO() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').show();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showBO() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').show();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showCO() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').show();
		$('#card-do').hide();
		$('#card-eo').hide();
	}

	function showDO() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').show();
		$('#card-eo').hide();
	}

	function showEO() {
		$('#card-b').hide();
		$('#card-c').hide();
		$('#card-d').hide();
		$('#card-e').hide();
		$('#card-f').hide();
		$('#card-g').hide();
		$('#card-h').hide();
		$('#card-ao').hide();
		$('#card-bo').hide();
		$('#card-co').hide();
		$('#card-do').hide();
		$('#card-eo').show();
	}
</script>

</html>

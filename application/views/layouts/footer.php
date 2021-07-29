</body>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/js/mdb.min.js"></script>

<script>
	$(document).ready(function() {
		$('#provinsi').change(function() {
			var id = $('#provinsi').val();
			if(id != '') {
				$.ajax({
					url		: "<?= base_url('responden/fetch_regencies'); ?>",
					method	: "POST",
					data	: { id:id },
					success	: function(data) { $('#kabupaten').html(data); } 
				})
			}
		});

		$('#kabupaten').change(function() {
			var id = $('#kabupaten').val();
			if(id != '') {
				$.ajax({
					url		: "<?= base_url('responden/fetch_district'); ?>",
					method	: "POST",
					data	: { id:id },
					success	: function(data) { $('#kecamatan').html(data); } 
				})
			}
		});

		$('#kecamatan').change(function() {
			var id = $('#kecamatan').val();
			if(id != '') {
				$.ajax({
					url		: "<?= base_url('responden/fetch_village'); ?>",
					method	: "POST",
					data	: { id:id },
					success	: function(data) { $('#kelurahan').html(data); } 
				})
			}
		});

		$('#kecamatan').change(function() {
			var id = $('#kecamatan').val();
			if(id != '') {
				$.ajax({
					url		: "<?= base_url('responden/fetch_koordinator'); ?>",
					method	: "POST",
					data	: { id:id },
					success	: function(data) { $('#koordinator').html(data); } 
				})
			}
		});
	});
</script>
</html>

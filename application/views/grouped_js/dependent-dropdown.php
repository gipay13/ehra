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
</script>

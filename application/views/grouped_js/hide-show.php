<script>
	$(document).ready(function($) {
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

		$('#to-b').click(function() {
			showB();
		})

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

		function showB() {
			$('#card-b').show();
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
		}

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
});

</script>

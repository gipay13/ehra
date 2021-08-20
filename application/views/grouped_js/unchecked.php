<script>
	$(document).ready(function($) {
		var $jwbn19 = $('input[name="answer19[]"]').not('#tidaktahu')
			$('#tidaktahu').change(function () {
				if (this.checked) {
					$jwbn19.prop('checked', false)
				}
			});
			$jwbn19.change(function () {
				if (this.checked) {
					$('#tidaktahu').prop('checked', false)
				}
			})

		var $jwbn26 = $('input[name="answer26[]"]').not('#ta')
			$('#ta').change(function () {
				if (this.checked) {
					$jwbn26.prop('checked', false)
				}
			});
			$jwbn26.change(function () {
				if (this.checked) {
					$('#ta').prop('checked', false)
				}
			})

		var $jwbn79 = $('input[name="answer79[]"]').not('#tidaktahu1')
			$('#tidaktahu1').change(function () {
				if (this.checked) {
					$jwbn79.prop('checked', false)
				}
			});
			$jwbn79.change(function () {
				if (this.checked) {
					$('#tidaktahu1').prop('checked', false)
				}
			})
		
		var $jwbn80 = $('input[name="answer80[]"]').not('#tita')
			$('#tita').change(function () {
				if (this.checked) {
					$jwbn80.prop('checked', false)
				}
			});
			$jwbn80.change(function () {
				if (this.checked) {
					$('#tita').prop('checked', false)
				}
			})
		
		var $jwbn116 = $('input[name="answer116[]"]').not('#td')
			$('#td').change(function () {
				if (this.checked) {
					$jwbn116.prop('checked', false)
				}
			});
			$jwbn116.change(function () {
				if (this.checked) {
					$('#td').prop('checked', false)
				}
			})
		
		var $jwbn119 = $('input[name="answer119[]"]').not('#tidakpasti')
			$('#tidakpasti').change(function () {
				if (this.checked) {
					$jwbn119.prop('checked', false)
				}
			});
			$jwbn119.change(function () {
				if (this.checked) {
					$('#tidakpasti').prop('checked', false)
				}
			})
	});
</script>

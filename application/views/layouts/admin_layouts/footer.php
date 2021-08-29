			<footer class="main-footer">
				<strong>Copyright &copy; 2021 <a href="">Ehra</a>.</strong>
				All rights reserved.
			</footer>


			<aside class="control-sidebar control-sidebar-dark">
				<!-- Control sidebar content goes here -->
			</aside>

		</div>



		<!-- jQuery -->
		<script src="<?= base_url('')?>assets/plugins/jquery/jquery.min.js"></script>
		<script src="<?= base_url('')?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
		<!-- AdminLTE App -->
		<script src="<?= base_url('assets/dist/js/adminlte.min.js')?>"></script>
		<!-- AdminLTE for demo purposes -->
		<script src="<?= base_url('assets/dist/js/demo.js')?>"></script>
		<!-- Table -->
		<script src="<?= base_url()?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/jszip/jszip.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/pdfmake/pdfmake.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/pdfmake/vfs_fonts.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.html5.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.print.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
		<!-- jquery-validation -->
		<script src="<?= base_url()?>assets/plugins/jquery-validation/jquery.validate.min.js"></script>
		<script src="<?= base_url()?>assets/plugins/jquery-validation/additional-methods.min.js"></script>
		<script>
			$(function () {
				$("#table").DataTable({
					"responsive": true, 
					"lengthChange": false, 
					"autoWidth": false,
					"buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
				}).buttons().container().appendTo('#table_wrapper .col-md-6:eq(0)');
				$('#inputKategoriForm').validate({
					rules: {
						kode: {
							required: true,
						},
						judul: {
							required: true,
						},
					},
					messages: {
						kode: {
							required: "Masukan Kategori Petanyaan",
						},
						judul: {
							required: "Masukan Judul Kategori",
						},
					},
					errorElement: 'span',
					errorPlacement: function (error, element) {
						error.addClass('invalid-feedback');
						element.closest('.form-group').append(error);
					},
					highlight: function (element, errorClass, validClass) {
						$(element).addClass('is-invalid');
					},
					unhighlight: function (element, errorClass, validClass) {
					$(element).removeClass('is-invalid');
					}
				});
				$('#loginForm').validate({
					rules: {
						username: {
							required: true,
						},
						password: {
							required: true,
						},
					},
					messages: {
						username: {
							required: "Masukan Usename",
						},
						password: {
							required: "Masukan Password",
						},
					},
					errorElement: 'span',
					errorPlacement: function (error, element) {
						error.addClass('invalid-feedback');
						element.closest('.form-group').append(error);
					},
					highlight: function (element, errorClass, validClass) {
						$(element).addClass('is-invalid');
					},
					unhighlight: function (element, errorClass, validClass) {
					$(element).removeClass('is-invalid');
					}
				});
			});
		</script>
	</body>
</html>

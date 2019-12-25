<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Tambah Pengguna
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<form id="form" method="post" action="<?php echo base_url('profile/update') ?>">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Nama Depan</label>
					<input value="<?php echo $users->user_firstname ?>" required="" type="text" autocomplete="off" class="form-control" name="user_firstname">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Nama Belakang</label>
					<input value="<?php echo $users->user_lastname ?>" required="" type="text" autocomplete="off" class="form-control" name="user_lastname">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Tanggal Lahir</label>
					<input readonly="" value="<?php echo $users->user_birth ?>" required="" type="text" autocomplete="off" class="form-control datepicker" name="user_birth">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>No. Telepon</label>
					<input value="<?php echo $users->user_phone ?>" required="" type="text" autocomplete="off" class="form-control" name="user_phone">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<label>Alamat</label>
					<textarea class="form-control" name="user_address"><?php echo $users->user_address ?></textarea>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Email</label>
					<input value="<?php echo $users->user_email ?>" required="" type="email" autocomplete="off" class="form-control" name="user_email">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Username</label>
					<input value="<?php echo $users->user_username ?>" required="" type="text" autocomplete="off" class="form-control" name="user_username">
				</div>
			</div>
			<hr>
			<div class="row mt-3">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Password <small class="text-danger"><sup>^</sup>Kosongkan jika tidak ingin mengganti password</small></label>
					<input type="password" autocomplete="off" class="form-control" name="user_password">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Konfirmasi Password</label>
					<input type="password" autocomplete="off" class="form-control" name="user_password_confirm">
				</div>
			</div>
			<hr>
			<div class="row mt-3">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<button type="submit" class="btn btn-primary">Simpan</button>
					<button type="reset" class="btn btn-google">Reset</button>
				</div>
			</div>
			<div class="clearfix"></div>
		</form>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		toastr.options = {
		  "closeButton": true,
		  "debug": false,
		  "newestOnTop": false,
		  "progressBar": false,
		  "positionClass": "toast-top-right",
		  "preventDuplicates": false,
		  "onclick": null,
		  "showDuration": "300",
		  "hideDuration": "1000",
		  "timeOut": "5000",
		  "extendedTimeOut": "1000",
		  "showEasing": "swing",
		  "hideEasing": "linear",
		  "showMethod": "fadeIn",
		  "hideMethod": "fadeOut"
		};

		$('.datepicker').datepicker({
			orientation: "bottom",
			format: 'yyyy-mm-dd',
		});

		$('.select2').select2();
	});
</script>

<script type="text/javascript">
	var form = $('#form');

	form.submit(function(event) {
		$.post(form.attr('action'), form.serialize(), function(response, textStatus, xhr) {
			if (response.status == true) {
				toastr.success(response.msg);
				setTimeout(function() {
					window.location.href = "<?php echo base_url('dashboard') ?>";
				}, 2000);
			} else {
				toastr.error(response.msg);
			}
		}, "json");
		return false;
	});
</script>
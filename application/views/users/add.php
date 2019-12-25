<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Tambah Pengguna
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<form id="form" method="post" action="<?php echo base_url('core/users_save') ?>">
			<div class="row">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Nama Depan</label>
					<input required="" type="text" autocomplete="off" class="form-control" name="user_firstname">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Nama Belakang</label>
					<input required="" type="text" autocomplete="off" class="form-control" name="user_lastname">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Tanggal Lahir</label>
					<input readonly="" required="" type="text" autocomplete="off" class="form-control datepicker" name="user_birth">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>No. Telepon</label>
					<input required="" type="text" autocomplete="off" class="form-control" name="user_phone">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-12 col-md-12 col-lg-12">
					<label>Alamat</label>
					<textarea class="form-control" name="user_address"></textarea>
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Email</label>
					<input required="" type="text" autocomplete="off" class="form-control" name="user_email">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Username</label>
					<input required="" type="text" autocomplete="off" class="form-control" name="user_username">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Password</label>
					<input required="" type="password" autocomplete="off" class="form-control" name="user_password">
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Konfirmasi Password</label>
					<input required="" type="password" autocomplete="off" class="form-control" name="user_password_confirm">
				</div>
			</div>
			<div class="row mt-3">
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Grup</label>
					<select required="" autocomplete="off" class="select2 form-control" name="user_group_id">
						<?php foreach ($_sys_group as $key => $var): ?>
							<option value="<?php echo $var['group_id'] ?>"><?php echo $var['group_label'] ?></option>
						<?php endforeach ?>
					</select>
				</div>
				<div class="col-sm-6 col-md-6 col-lg-6">
					<label>Status</label>
					<select required="" autocomplete="off" class="form-control" name="user_status_id">
						<option value="1">Aktif</option>
						<option value="0">Non-Aktif</option>
					</select>
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
			console.log(response.msg);
			if (response.status == true) {
				toastr.success(response.msg);
				setTimeout(function() {
					window.location.href = "<?php echo base_url('core/users') ?>";
				}, 2000);
			} else {
				toastr.error(response.msg);
			}
		}, "json");
		return false;
	});
</script>
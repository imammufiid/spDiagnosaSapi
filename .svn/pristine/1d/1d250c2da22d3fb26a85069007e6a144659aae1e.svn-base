<div class="col-xl-4">

	<!--begin:: Widgets/Download Files-->
	<div class="kt-portlet kt-portlet--height-fluid">
		<div class="kt-portlet__head">
			<div class="kt-portlet__head-label">
				<h3 class="kt-portlet__head-title">
					<?php echo $_render_menu_label ?>
				</h3>
			</div>
		</div>
		<div class="kt-portlet__body">
			<form id="form" action="<?php echo base_url('core/settings_save') ?>">
				<div class="form-group">
					<label>Website</label>
					<input value="<?php echo $settings->setting_web_name ?>" type="text" name="setting_web_name" class="form-control" autocomplete="off" required="">
				</div>
				<div class="form-group">
					<label>Credit</label>
					<input value="<?php echo $settings->setting_web_credit ?>" type="text" name="setting_web_credit" class="form-control" autocomplete="off" required="">
				</div>
				<div class="form-group">
					<label>Credit Href</label>
					<input value="<?php echo $settings->setting_web_credit_href ?>" type="text" name="setting_web_credit_href" class="form-control" autocomplete="off" required="">
				</div>
				<div class="form-group">
					<label>Logo</label>
					<input value="<?php echo $settings->setting_web_logo ?>" type="text" name="setting_web_logo" class="form-control" autocomplete="off" required="">
				</div>
				<div class="form-group">
					<label>Icon</label>
					<input value="<?php echo $settings->setting_web_icon ?>" type="text" name="setting_web_icon" class="form-control" autocomplete="off" required="">
				</div>
				<div class="form-group">
					<hr>
					 <button type="submit" class="btn btn-primary">Simpan</button>
					 <button type="reset" class="btn btn-google">Setel Ulang</button>
				</div>
			</form>
		</div>
	</div>

	<!--end:: Widgets/Download Files-->
</div>

<script type="text/javascript">
	$('#form').submit(function(event) {
		$.post($(this).attr('action'), $(this).serialize(), function(response, textStatus, xhr) {
			if (response.status == true) {
				toastr.success(response.msg);
				setTimeout(function() {
					window.location.reload();
				}, 2000);
			} else {
				toastr.error(response.msg);
			}
		}, "json");
		return false;
	});
</script>
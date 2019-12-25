<div class="row">
	<div class="col-md-6 form-group">
		<label>Parent</label>
		<select required="" class="select2 form-control" name="sidebar_parent">
			<option value="0">Parent</option>
			<?php foreach ($sidebars as $key => $var): ?>
				<option value="<?php echo $var['sidebar_id'] ?>"><?php echo $var['sidebar_label'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="col-md-6 form-group">
		<label>Label</label>
		<input autocomplete="off" type="text" name="sidebar_label" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Href</label>
		<input autocomplete="off" type="text" name="sidebar_href" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Icon</label>
		<input autocomplete="off" type="text" name="sidebar_icon" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Index</label>
		<input autocomplete="off" type="number" name="sidebar_index" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Status</label>
		<select required="" class="form-control" name="sidebar_status">
			<option value="1">Aktif</option>
			<option value="0">Non-Aktif</option>
		</select>
	</div>
</div>
<div class="clearfix"></div>
<script type="text/javascript">
	$(document).ready(function() {
		$('.select2').select2({
			width: "100%",
		});
	});
</script>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Parent</label>
		<select required="" class="form-control" name="navbar_parent">
			<option value="0">Parent</option>
			<?php foreach ($navbars as $key => $var): ?>
				<option value="<?php echo $var['navbar_id'] ?>"><?php echo $var['navbar_label'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="col-md-6 form-group">
		<label>Label</label>
		<input autocomplete="off" type="text" name="navbar_label" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Href</label>
		<input autocomplete="off" type="text" name="navbar_href" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Icon</label>
		<input autocomplete="off" type="text" name="navbar_icon" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Index</label>
		<input autocomplete="off" type="number" name="navbar_index" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Status</label>
		<select required="" class="form-control" name="navbar_status">
			<option value="1">Aktif</option>
			<option value="0">Non-Aktif</option>
		</select>
	</div>
</div>
<div class="clearfix"></div>
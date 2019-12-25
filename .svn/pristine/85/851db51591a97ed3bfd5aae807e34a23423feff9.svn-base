<?php 
	$var = $this->db->where('navbar_id', $_GET['navbar_id'])->get('_v_sys_navbar')->row();
?>

<input autocomplete="off" value="<?php echo $var->navbar_id ?>" type="hidden" name="navbar_id" class="form-control" required="">
<div class="row">
	<div class="col-md-6 form-group">
		<label>Parent</label>
		<select required="" class="form-control" name="navbar_parent">
			<option value="0">Parent</option>
			<?php foreach ($navbars as $key => $vars): ?>
				<option <?php echo ($var->navbar_parent == $vars['navbar_id']) ? 'selected' : '' ?> value="<?php echo $vars['navbar_id'] ?>"><?php echo $vars['navbar_label'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="col-md-6 form-group">
		<label>Label</label>
		<input value="<?php echo $var->navbar_label ?>" autocomplete="off" type="text" name="navbar_label" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Href</label>
		<input value="<?php echo $var->navbar_href ?>" autocomplete="off" type="text" name="navbar_href" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Icon</label>
		<input value="<?php echo $var->navbar_icon ?>" autocomplete="off" type="text" name="navbar_icon" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Index</label>
		<input value="<?php echo $var->navbar_index ?>" autocomplete="off" type="number" name="navbar_index" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Status</label>
		<select required="" class="form-control" name="navbar_status">
			<option <?php echo ($var->navbar_status == '1') ? 'selected' : '' ?> value="1">Aktif</option>
			<option <?php echo ($var->navbar_status == '0') ? 'selected' : '' ?> value="0">Non-Aktif</option>
		</select>
	</div>
</div>
<div class="clearfix"></div>
<?php 
	$var = $this->db->where('sidebar_id', $_GET['sidebar_id'])->get('_v_sys_sidebar')->row();
?>

<input autocomplete="off" value="<?php echo $var->sidebar_id ?>" type="hidden" name="sidebar_id" class="form-control" required="">
<div class="row">
	<div class="col-md-6 form-group">
		<label>Parent</label>
		<select required="" class="select2 form-control" name="sidebar_parent">
			<option value="0">Parent</option>
			<?php foreach ($sidebars as $key => $vars): ?>
				<option <?php echo ($var->sidebar_parent == $vars['sidebar_id']) ? 'selected' : '' ?> value="<?php echo $vars['sidebar_id'] ?>"><?php echo $vars['sidebar_label'] ?></option>
			<?php endforeach ?>
		</select>
	</div>
	<div class="col-md-6 form-group">
		<label>Label</label>
		<input value="<?php echo $var->sidebar_label ?>" autocomplete="off" type="text" name="sidebar_label" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Href</label>
		<input value="<?php echo $var->sidebar_href ?>" autocomplete="off" type="text" name="sidebar_href" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Icon</label>
		<input value="<?php echo $var->sidebar_icon ?>" autocomplete="off" type="text" name="sidebar_icon" class="form-control" required="">
	</div>
</div>
<div class="row">
	<div class="col-md-6 form-group">
		<label>Index</label>
		<input value="<?php echo $var->sidebar_index ?>" autocomplete="off" type="number" name="sidebar_index" class="form-control" required="">
	</div>
	<div class="col-md-6 form-group">
		<label>Status</label>
		<select required="" class="form-control" name="sidebar_status">
			<option <?php echo ($var->sidebar_status == '1') ? 'selected' : '' ?> value="1">Aktif</option>
			<option <?php echo ($var->sidebar_status == '0') ? 'selected' : '' ?> value="0">Non-Aktif</option>
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
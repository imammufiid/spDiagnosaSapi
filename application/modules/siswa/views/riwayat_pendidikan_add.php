<?php $pendidikan = $this->db->get('pendidikan')->result() ?>

<div class="form-group">
	<label>Jenjang</label>
	<select name="pendidikan_id" class="form-control">
		<?php foreach ($pendidikan as $key => $var): ?>
			<option value="<?php echo $var->pendidikan_id ?>"><?php echo $var->pendidikan_label ?></option>
		<?php endforeach ?>
	</select>
</div>
<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" name="siswa_pendidikan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="siswa_id" value="<?php echo @$_GET['siswa_id'] ?>">
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('select[name="pendidikan_id"]').select2({
			width: '100%',
		});
	});
</script>
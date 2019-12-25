<?php $pendidikan = $this->db->get('pendidikan')->result() ?>
<?php $riwayat = $this->db->where('siswa_pendidikan_id', $_GET['siswa_pendidikan_id'])->get('siswa_riwayat_pendidikan')->row() ?>

<div class="form-group">
	<label>Jenjang</label>
	<select name="pendidikan_id" class="form-control">
		<?php foreach ($pendidikan as $key => $var): ?>
			<option <?php echo ($riwayat->pendidikan_id == $var->pendidikan_id) ? 'selected' : '' ?> value="<?php echo $var->pendidikan_id ?>"><?php echo $var->pendidikan_label ?></option>
		<?php endforeach ?>
	</select>
</div>
<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" name="siswa_pendidikan_label" value="<?php echo $riwayat->siswa_pendidikan_label ?>" class="form-control">
	<input type="hidden" autocomplete="off" name="siswa_id" value="<?php echo $riwayat->siswa_id ?>">
	<input type="hidden" autocomplete="off" name="siswa_pendidikan_id" value="<?php echo $riwayat->siswa_pendidikan_id ?>">
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('select[name="pendidikan_id"]').select2({
			width: '100%',
		});
	});
</script>
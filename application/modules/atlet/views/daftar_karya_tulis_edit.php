<?php $var = $this->db->where('guru_karya_id', $_GET['guru_karya_id'])->get('guru_daftar_karya_tulis')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_karya_label ?>" name="guru_karya_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_karya_id" value="<?php echo @$_GET['guru_karya_id'] ?>">
</div>
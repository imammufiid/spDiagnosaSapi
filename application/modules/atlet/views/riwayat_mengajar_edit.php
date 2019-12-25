<?php $var = $this->db->where('guru_mengajar_id', $_GET['guru_mengajar_id'])->get('guru_riwayat_mengajar')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_mengajar_label ?>" name="guru_mengajar_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_mengajar_id" value="<?php echo @$_GET['guru_mengajar_id'] ?>">
</div>
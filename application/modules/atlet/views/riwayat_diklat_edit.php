<?php $var = $this->db->where('guru_diklat_id', $_GET['guru_diklat_id'])->get('guru_riwayat_diklat_seminar')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_diklat_label ?>" name="guru_diklat_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_diklat_id" value="<?php echo @$_GET['guru_diklat_id'] ?>">
</div>
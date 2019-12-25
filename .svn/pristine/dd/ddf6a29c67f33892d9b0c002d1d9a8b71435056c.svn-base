<?php $var = $this->db->where('guru_pembinaan_id', $_GET['guru_pembinaan_id'])->get('guru_riwayat_pembinaan')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_pembinaan_label ?>" name="guru_pembinaan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_pembinaan_id" value="<?php echo @$_GET['guru_pembinaan_id'] ?>">
</div>
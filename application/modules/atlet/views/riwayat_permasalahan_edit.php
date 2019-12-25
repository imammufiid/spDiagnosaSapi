<?php $var = $this->db->where('guru_permasalahan_id', $_GET['guru_permasalahan_id'])->get('guru_riwayat_permasalahan')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_permasalahan_label ?>" name="guru_permasalahan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_permasalahan_id" value="<?php echo @$_GET['guru_permasalahan_id'] ?>">
</div>
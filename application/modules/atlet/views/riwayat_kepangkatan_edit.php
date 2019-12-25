<?php $var = $this->db->where('guru_kepangkatan_id', $_GET['guru_kepangkatan_id'])->get('guru_riwayat_kepangkatan')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_kepangkatan_label ?>" name="guru_kepangkatan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_kepangkatan_id" value="<?php echo @$_GET['guru_kepangkatan_id'] ?>">
</div>
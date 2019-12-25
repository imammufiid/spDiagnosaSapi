<?php $var = $this->db->where('guru_penghargaan_id', $_GET['guru_penghargaan_id'])->get('guru_daftar_penghargaan')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_penghargaan_label ?>" name="guru_penghargaan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_penghargaan_id" value="<?php echo @$_GET['guru_penghargaan_id'] ?>">
</div>
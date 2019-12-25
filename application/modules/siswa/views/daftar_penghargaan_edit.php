<?php $var = $this->db->where('siswa_penghargaan_id', $_GET['siswa_penghargaan_id'])->get('siswa_daftar_penghargaan')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->siswa_penghargaan_label ?>" name="siswa_penghargaan_label" class="form-control">
	<input type="hidden" autocomplete="off" name="siswa_penghargaan_id" value="<?php echo @$_GET['siswa_penghargaan_id'] ?>">
</div>
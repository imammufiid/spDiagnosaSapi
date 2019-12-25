<?php $var = $this->db->where('guru_unit_kerja_id', $_GET['guru_unit_kerja_id'])->get('guru_riwayat_unit_kerja')->row() ?>

<div class="form-group">
	<label>Nama</label>
	<input type="text" autocomplete="off" value="<?php echo $var->guru_unit_kerja_label ?>" name="guru_unit_kerja_label" class="form-control">
	<input type="hidden" autocomplete="off" name="guru_unit_kerja_id" value="<?php echo @$_GET['guru_unit_kerja_id'] ?>">
</div>
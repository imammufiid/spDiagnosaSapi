<?php $var = $this->db->where('guru_unit_kerja_id', $_GET['guru_unit_kerja_id'])->get('guru_riwayat_unit_kerja')->row() ?>
<label><?php echo $var->guru_unit_kerja_label ?></label>
<input type="hidden" autocomplete="off" name="guru_unit_kerja_id" value="<?php echo $var->guru_unit_kerja_id ?>">
<?php $var = $this->db->where('guru_diklat_id', $_GET['guru_diklat_id'])->get('guru_riwayat_diklat_seminar')->row() ?>
<label><?php echo $var->guru_diklat_label ?></label>
<input type="hidden" autocomplete="off" name="guru_diklat_id" value="<?php echo $var->guru_diklat_id ?>">
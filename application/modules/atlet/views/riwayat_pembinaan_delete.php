<?php $var = $this->db->where('guru_pembinaan_id', $_GET['guru_pembinaan_id'])->get('guru_riwayat_pembinaan')->row() ?>
<label><?php echo $var->guru_pembinaan_label ?></label>
<input type="hidden" autocomplete="off" name="guru_pembinaan_id" value="<?php echo $var->guru_pembinaan_id ?>">
<?php $var = $this->db->where('guru_mengajar_id', $_GET['guru_mengajar_id'])->get('guru_riwayat_mengajar')->row() ?>
<label><?php echo $var->guru_mengajar_label ?></label>
<input type="hidden" autocomplete="off" name="guru_mengajar_id" value="<?php echo $var->guru_mengajar_id ?>">
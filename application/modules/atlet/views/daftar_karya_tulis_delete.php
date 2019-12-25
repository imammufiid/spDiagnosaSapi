<?php $var = $this->db->where('guru_karya_id', $_GET['guru_karya_id'])->get('guru_daftar_karya_tulis')->row() ?>
<label><?php echo $var->guru_karya_label ?></label>
<input type="hidden" autocomplete="off" name="guru_karya_id" value="<?php echo $var->guru_karya_id ?>">
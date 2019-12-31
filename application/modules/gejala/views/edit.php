<div class="row">
  <input type="hidden" value="<?= $gjl->kode_gejala ?>" name="kode_gejala">
  <!-- <input type="hidden" name="updated_at" value="<?= date('d-m-Y'); ?>"> -->
  <div class="col-md-10">
    <div class="form-group">
      <label>Nama Gejala</label>
      <input type="text" name="nama_gejala" value="<?= $gjl->nama_gejala ?>" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group">
      <label>Aktif</label>
      <select name="status" id="status" class="form-control">
        <?php if ($gjl->status == 1) : ?>
          <option value="1" selected>Aktif</option>
          <option value="0">Non-Aktif</option>
        <?php else : ?>
          <option value="1">Aktif</option>
          <option value="0" selected>Non-Aktif</option>
        <?php endif; ?>
      </select>
    </div>
  </div>
</div>

<script>
  $('#nia_text').html($('#no_induk_atlet').val());
</script>
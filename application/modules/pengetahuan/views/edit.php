<div class="row">
  <input type="hidden" name="kode_pengetahuan" value="<?= $peng->kode_pengetahuan ?>">
  <!-- <input type="hidden" name="updated_at" value="<?= date('Y-d-m H:i:s'); ?>"> -->
  <div class="col-md-12">
    <div class="form-group">
      <label>Penyakit</label>
      <select name="kode_penyakit" id="" class="form-control select-group" style="width: 100%">
        <option value selected disabled>-- Pilih --</option>
        <?php foreach ($penyakit as $key => $var) : ?>
          <option value="<?php echo $var['kode_penyakit'] ?>" <?php if ($peng->kode_penyakit == $var['kode_penyakit']) echo "selected" ?>><?php echo $var['nama_penyakit'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label>Gejala</label>
      <select name="kode_gejala" id="" class="form-control select-group" style="width: 100%">
        <option value selected disabled>-- Pilih --</option>
        <?php foreach ($gejala as $key => $var) : ?>
          <option value="<?php echo $var['kode_gejala'] ?>" <?php if ($peng->kode_gejala == $var['kode_gejala']) echo "selected" ?>><?php echo $var['nama_gejala'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label>MB</label>
      <input type="text" name="mb" value="<?= $peng->mb ?>" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label>MD</label>
      <input type="text" name="md" value="<?= $peng->md ?>" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-12">
    <div class="form-group">
      <label>Aktif</label>
      <select name="status" id="status" class="form-control">
        <?php if ($peng->status == 1) : ?>
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
  $(document).ready(function() {
    $('.select-group').select2();
    $('#nia_text').html($('#no_induk_atlet').val());
    $('#status').click(function() {
      if (this.checked) {
        $('#status').val(1).prop("checked", true);
      } else {
        $('#status').val(0).prop("checked", false);
      }
      console.log($('#status').val());

    })
  })
</script>
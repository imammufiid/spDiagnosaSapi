<div class="row">
  <input type="hidden" value="<?= $penyakit->kode_penyakit ?>" name="kode_penyakit">
  <input type="hidden" value="<?= $penyakit->gambar ?>" name="old_img">
  <div class="col-md-12">
    <div class="form-group">
      <label>Nama Penyakit</label>
      <input type="text" name="nama_penyakit" value="<?= $penyakit->nama_penyakit ?>" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-12">
        <div class="form-group">
            <label>Detail Penyakit</label>
            <textarea name="det_penyakit" id="" class="form-control"><?= $penyakit->det_penyakit ?></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Saran Penyakit</label>
            <textarea name="srn_penyakit" id="" class="form-control"><?= $penyakit->srn_penyakit ?></textarea>
        </div>
    </div>
    <div class="col-md-2">
      <img src="<?= base_url('assets/media/penyakit/') . $penyakit->gambar ?>" width="100" alt="">
    </div>
    <div class="col-md-8">
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
    </div>
  <div class="col-md-2">
    <div class="form-group">
      <label>Aktif</label>
      <select name="status" id="status" class="form-control">
        <?php if ($penyakit->status == 1) : ?>
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
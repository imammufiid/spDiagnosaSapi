<div class="row">
  <div class="col-md-12">
    <input type="hidden" name="kode_penyakit" value="<?= $penyakit->kode_penyakit ?>">
    <p>Anda yakin menghapus data <b><?=$penyakit->nama_penyakit?></b>?</p>
  </div>
  <div class="col-md-8 offset-md-3">
    <img src="<?= base_url('assets/media/penyakit/') . $penyakit->gambar ?>" width="200px" alt="">
  </div>
</div>
<div class="row">
  <input type="hidden" value="<?= $editAtlet->id ?>" name="id">
  <input type="hidden" name="updated_at" value="<?= date('d-m-Y'); ?>">
  <div class="col-md-10">
    <div class="form-group row">
      <div class="col-md-3 mt-1">
        <label>No. Induk Anggota</label>
      </div>
      <div class="col-md-8">
        <h3 id="nia_text"></h3>
      </div>
      <input type="hidden" id="no_induk_atlet" name="no_induk_atlet" autocomplete="off" readonly class="form-control" value="<?= $editAtlet->no_induk_atlet ?>">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Nama</label>
      <input type="text" name="nama" autocomplete="off" value="<?= $editAtlet->nama ?>" class="form-control">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>No. Telp Atlet</label>
      <input type="text" name="telp_atlet" autocomplete="off" value="<?= $editAtlet->telp_atlet ?>" class="form-control">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Jenis Kelamin</label>
      <select name="id_jnskelamin" id="" class="form-control">
        <?php foreach ($jenkel as $key => $var) : ?>
          <option value="<?php echo $var['id'] ?>" <?php if ($editAtlet->id_jnskelamin == $var['id']) "selected" ?>><?php echo $var['jenkel_label'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Tempat Lahir</label>
      <input type="text" name="tmp_lahir" value="<?= $editAtlet->tmp_lahir ?>" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Tanggal Lahir</label>
      <input type="date" value="<?= $editAtlet->tgl_lahir ?>" name="tgl_lahir" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Nama Orang Tua</label>
      <input type="text" name="nama_ortu" value="<?= $editAtlet->nama_ortu ?>" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>No. Telp Ortu</label>
      <input type="text" name="telp_ortu" value="<?= $editAtlet->telp_ortu ?>" autocomplete="off" class="form-control">
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Cabang</label>
      <select name="id_cabang" id="" class="form-control">
        <?php foreach ($cabang as $key => $var) : ?>
          <option value="<?php echo $var['id'] ?>" <?php if ($editAtlet->id_cabang == $var['id']) "selected" ?>><?php echo $var['nama'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-6">
    <div class="form-group">
      <label>Ranting</label>
      <select name="id_ranting" id="" class="form-control">
        <?php foreach ($ranting as $key => $var) : ?>
          <option value="<?php echo $var['id'] ?>" <?php if ($editAtlet->id_ranting == $var['id']) "selected" ?>><?php echo $var['nama'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Jenis Sekolah</label>
      <select name="id_school_type" class="form-control">
        <?php foreach ($jnssekolah as $key => $var) : ?>
          <option value="<?php echo $var['id'] ?>" <?php if ($editAtlet->id_school_type == $var['id']) "selected" ?>><?php echo $var['name'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Sekolah</label>
      <select name="id_school" class="form-control select-group">
        <?php foreach ($sekolah as $key => $var) : ?>
          <option value="<?php echo $var['id'] ?>" <?php if ($editAtlet->id_school == $var['id']) "selected" ?>><?php echo $var['name'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-4">
    <div class="form-group">
      <label>Sabuk</label>
      <select name="id_sabuk" class="form-control">
        <?php foreach ($sabuk as $key => $var) : ?>
          <option value="<?php echo $var['id'] ?>" <?php if ($editAtlet->id_sabuk == $var['id']) "selected" ?>><?php echo $var['nama'] . ' - ' . $var['kyu'] ?></option>
        <?php endforeach ?>
      </select>
    </div>
  </div>
  <div class="col-md-10">
    <div class="form-group">
      <label>Alamat</label>
      <textarea name="alamat" id="" autocomplete="off" class="form-control" placeholder="Masukkan Alamat...."><?= $editAtlet->alamat ?></textarea>
    </div>
  </div>
  <div class="col-md-2">
    <div class="form-group">
      <label>Aktif</label>
      <select name="status" id="status" class="form-control">
        <?php if ($editAtlet->status == 1) : ?>
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
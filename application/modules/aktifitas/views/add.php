<div class="row">
    <input type="hidden" name="id">
    <div class="col-md-10">
        <div class="form-group row">
            <div class="col-md-3 mt-1">
                <label>No. Induk Anggota</label>
            </div>
            <div class="col-md-8">
                <h3 id="nia_text"></h3>
            </div>
            <input type="hidden" id="no_induk_atlet" name="no_induk_atlet" autocomplete="off" readonly class="form-control" value="AT<?= substr(uniqid(rand(1111111111, 9999999999)), 0, 10) ?>">
        </div>
    </div>
    <input type="hidden" name="created_at" value="<?= date('d-m-Y'); ?>">
    <div class="col-md-6">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>No. Telp Atlet</label>
            <input type="text" name="telp_atlet" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="id_jnskelamin" id="" class="form-control">
                <?php foreach ($jenkel as $key => $var) : ?>
                    <option value="<?php echo $var['id'] ?>"><?php echo $var['jenkel_label'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="tmp_lahir" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" value="<?php echo date('d-m-Y') ?>" name="tgl_lahir" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Nama Orang Tua</label>
            <input type="text" name="nama_ortu" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>No. Telp Ortu</label>
            <input type="text" name="telp_ortu" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Cabang</label>
            <select name="id_cabang" id="" class="form-control">
                <?php foreach ($cabang as $key => $var) : ?>
                    <option value="<?php echo $var['id'] ?>"><?php echo $var['nama'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label>Ranting</label>
            <select name="id_ranting" id="" class="form-control">
                <?php foreach ($ranting as $key => $var) : ?>
                    <option value="<?php echo $var['id'] ?>"><?php echo $var['nama'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Jenis Sekolah</label>
            <select name="id_school_type" class="form-control">
                <?php foreach ($jnssekolah as $key => $var) : ?>
                    <option value="<?php echo $var['id'] ?>"><?php echo $var['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Sekolah</label>
            <select name="id_school" class="form-control select-group">
                <?php foreach ($sekolah as $key => $var) : ?>
                    <option value="<?php echo $var['id'] ?>"><?php echo $var['name'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Sabuk</label>
            <select name="id_sabuk" class="form-control">
                <?php foreach ($sabuk as $key => $var) : ?>
                    <option value="<?php echo $var['id'] ?>"><?php echo $var['nama'] . ' - ' . $var['kyu'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" id="" autocomplete="off" class="form-control" placeholder="Masukkan Alamat...."></textarea>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label>Aktif</label>
            <select name="status" id="status" class="form-control">
                <option value="1">Aktif</option>
                <option value="0">Non-Aktif</option>
            </select>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
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
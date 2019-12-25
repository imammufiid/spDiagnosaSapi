<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="guru_nama" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>NIP</label>
            <input type="name" name="guru_nip" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>NIK</label>
            <input type="number" name="guru_nik" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>KK</label>
            <input type="number" name="guru_kk" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Nomor HP</label>
            <input type="number" name="guru_nohp" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Jenis Kelamin</label>
            <select name="guru_jenkel_id" class="form-control">
                <?php foreach ($jenkel as $key => $var): ?>
                    <option value="<?php echo $var->jenkel_id ?>"><?php echo $var->jenkel_label ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Tempat Lahir</label>
            <input type="text" name="guru_tp_lahir" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Tanggal Lahir</label>
            <input type="date" value="<?php echo date('Y-m-d') ?>" name="guru_tg_lahir" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Agama</label>
            <select name="guru_agama_id" class="form-control">
                <?php foreach ($agama as $key => $var): ?>
                    <option value="<?php echo $var->agama_id ?>"><?php echo $var->agama_label ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Provinsi</label>
            <select name="guru_prov_code" class="form-control">
                <?php foreach ($prov as $key => $var): ?>
                    <option value="<?php echo $var->provinsi_code ?>"><?php echo $var->provinsi_name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kabupaten/Kota</label>
            <select name="guru_kabkot_code" class="form-control">
                <?php foreach ($kabkot as $key => $var): ?>
                    <option value="<?php echo $var->kabupatenkota_code ?>"><?php echo $var->kabupatenkota_name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Kecamatan</label>
            <select name="guru_kec_code" class="form-control">
                <?php foreach ($kec as $key => $var): ?>
                    <option value="<?php echo $var->kecamatan_code ?>"><?php echo $var->kecamatan_name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Desa/Kelurahan</label>
            <select name="guru_keldesa_code" class="form-control">
                <?php foreach ($keldes as $key => $var): ?>
                    <option value="<?php echo $var->desakelurahan_code ?>"><?php echo $var->desakelurahan_name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label>RT</label>
            <input type="number" name="guru_rt" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-2">
        <div class="form-group">
            <label>RW</label>
            <input type="number" name="guru_rw" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label>Dusun</label>
            <input type="text" name="guru_dusun" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-5">
        <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="guru_alamat" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Nama Ayah</label>
            <input type="text" name="guru_nama_ayah" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Nama Ibu</label>
            <input type="text" name="guru_nama_ibu" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label>Sekolah</label>
            <select name="guru_sekolah_id" class="form-control">
                <?php foreach ($sekolah as $key => $var): ?>
                    <option value="<?php echo $var->id ?>"><?php echo $var->name ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
</div>
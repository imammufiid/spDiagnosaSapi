<form id="form">
<div class="kt-portlet kt-portlet--height-fluid">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Data Diri dan Keluarga
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" name="guru_nama" value="<?php echo $guru->guru_nama ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>NIP</label>
                    <input type="name" name="guru_nip" value="<?php echo $guru->guru_nip ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>NIK</label>
                    <input type="number" name="guru_nik" value="<?php echo $guru->guru_nik ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>KK</label>
                    <input type="number" name="guru_kk" value="<?php echo $guru->guru_kk ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Nomor HP</label>
                    <input type="number" name="guru_nohp" value="<?php echo $guru->guru_nohp ?>" autocomplete="off" class="form-control">
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
                    <input type="text" name="guru_tp_lahir" value="<?php echo $guru->guru_tp_lahir ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input type="date" value="<?php echo date('Y-m-d', strtotime($guru->guru_tg_lahir)) ?>" name="guru_tg_lahir" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Agama</label>
                    <select name="guru_agama_id" class="form-control">
                        <?php foreach ($agama as $key => $var): ?>
                            <option <?php echo ($guru->guru_agama_id == $var->agama_id) ? 'selected' : '' ?> value="<?php echo $var->agama_id ?>"><?php echo $var->agama_label ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Provinsi</label>
                    <select name="guru_prov_code" class="form-control">
                        <?php foreach ($prov as $key => $var): ?>
                            <option <?php echo ($guru->guru_prov_code == $var->provinsi_code) ? 'selected' : '' ?> value="<?php echo $var->provinsi_code ?>"><?php echo $var->provinsi_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Kabupaten/Kota</label>
                    <select name="guru_kabkot_code" class="form-control">
                        <?php foreach ($kabkot as $key => $var): ?>
                            <option <?php echo ($guru->guru_kabkot_code == $var->kabupatenkota_code) ? 'selected' : '' ?> value="<?php echo $var->kabupatenkota_code ?>"><?php echo $var->kabupatenkota_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Kecamatan</label>
                    <select name="guru_kec_code" class="form-control">
                        <?php foreach ($kec as $key => $var): ?>
                            <option <?php echo ($guru->guru_kec_code == $var->kecamatan_code) ? 'selected' : '' ?> value="<?php echo $var->kecamatan_code ?>"><?php echo $var->kecamatan_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Desa/Kelurahan</label>
                    <select name="guru_keldesa_code" class="form-control">
                        <?php foreach ($keldes as $key => $var): ?>
                            <option <?php echo ($guru->guru_keldesa_code == $var->desakelurahan_code) ? 'selected' : '' ?> value="<?php echo $var->desakelurahan_code ?>"><?php echo $var->desakelurahan_name ?></option>
                        <?php endforeach ?>
                    </select>
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>RT</label>
                    <input type="number" name="guru_rt" value="<?php echo $guru->guru_rt ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-2">
                <div class="form-group">
                    <label>RW</label>
                    <input type="number" name="guru_rw" value="<?php echo $guru->guru_rw ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-3">
                <div class="form-group">
                    <label>Dusun</label>
                    <input type="text" name="guru_dusun" value="<?php echo $guru->guru_dusun ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-5">
                <div class="form-group">
                    <label>Alamat</label>
                    <input type="text" name="guru_alamat" value="<?php echo $guru->guru_alamat ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Ayah</label>
                    <input type="text" name="guru_nama_ayah" value="<?php echo $guru->guru_nama_ayah ?>" autocomplete="off" class="form-control">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>Nama Ibu</label>
                    <input type="text" name="guru_nama_ibu" value="<?php echo $guru->guru_nama_ibu ?>" autocomplete="off" class="form-control">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="kt-portlet">
    <div class="kt-portlet__body">
        <div class="d-inline" align="center">
            <button type="submit" class="btn btn-primary">Simpan</button>
            <button type="reset" class="btn btn-google">Setel Ulang</button>
        </div>
    </div>
</div>
</form>

<script type="text/javascript">
$('#form').submit(function(event) {
    $.post('<?php echo base_url('guru/datadiri_save') ?>', $(this).serialize(), function(response, textStatus, xhr) {
        if (response.status == true) {
            toastr.success(response.msg);
        } else {
            toastr.error(response.msg);
        }
    }, "json");
    return false;
});
</script>
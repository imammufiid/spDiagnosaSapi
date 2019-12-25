<div class="overflow-auto">
<ul class="nav nav-pills" role="tablist">
    <li class="nav-item ">
        <a class="nav-link active" data-toggle="tab" href="#kt_tabs_datadiri"><i class="fa fa-address-card"></i>Data Diri</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_rpendidikan"><i class="fa fa-book-reader"></i>Riwayat Pendidikan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_ukerja"><i class="fa fa-book-reader"></i>Riwayat Unit Kerja</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_rmengajar"><i class="fa fa-book-reader"></i>Riwayat Mengajar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_jabatan"><i class="fa fa-book-reader"></i>Riwayat Jabatan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_kepangkatan"><i class="fa fa-book-reader"></i>Riwayat Kepangkatan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_diklat"><i class="fa fa-book-reader"></i>Riwayat Diklat/Seminar/Workshop</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_pembinaan"><i class="fa fa-book-reader"></i>Riwayat Pembinaan Perilaku</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_permasalahan"><i class="fa fa-book-reader"></i>Riwayat Permasalahan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_penghargaan"><i class="fa fa-book-reader"></i>Daftar Penghargaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_karya_tulis"><i class="fa fa-book-reader"></i>Daftar Karya Tulis</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_kepegawaian"><i class="fa fa-book-reader"></i>Status Kepegawaian</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#kt_tabs_sertifikasi"><i class="fa fa-book-reader"></i>Status Sertifikasi</a>
    </li>
</ul>
</div>


<div class="tab-content">

    <div class="tab-pane active" id="kt_tabs_datadiri" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Data Diri dan Keluarga Guru
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">
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
                            <select name="guru_prov_code" class="form-control">
                                <?php foreach ($kabkot as $key => $var): ?>
                                    <option value="<?php echo $var->kabupatenkota_code ?>"><?php echo $var->kabupatenkota_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Kecamatan</label>
                            <select name="guru_prov_code" class="form-control">
                                <?php foreach ($kec as $key => $var): ?>
                                    <option value="<?php echo $var->kecamatan_code ?>"><?php echo $var->kecamatan_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Desa/Kelurahan</label>
                            <select name="guru_prov_code" class="form-control">
                                <?php foreach ($keldes as $key => $var): ?>
                                    <option value="<?php echo $var->desakelurahan_code ?>"><?php echo $var->desakelurahan_name ?></option>
                                <?php endforeach ?>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">
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
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" name="guru_alamat" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Ayah</label>
                            <input type="text" name="guru_nama_ayah" autocomplete="off" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Nama Ibu</label>
                            <input type="text" name="guru_nama_ibu" autocomplete="off" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_rpendidikan" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Pendidikan
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_ukerja" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Unit Kerja/Tempat Mengajar
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_rmengajar" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Mengajar
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_jabatan" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Jabatan
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_kepangkatan" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Kepangkatan
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_diklat" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Diklat/Seminar/Workshop
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_pembinaan" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Pembinaan Perilaku/Disiplin
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_permasalahan" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Riwayat Permasalahan Pribadi (Percerian/Perkawinan tanpa ijin)
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_penghargaan" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Daftar Penghargaan Yang Diterima
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_karya_tulis" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Daftar Karya Tulis/Inovasi Yang Pernah Dibuat
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_kepegawaian" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Status Kepegawaian (PNS/non PNS)
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

            </div>
        </div>
    </div>

    <div class="tab-pane" id="kt_tabs_sertifikasi" role="tabpanel">
        <div class="kt-portlet">
            <div class="kt-portlet__head">
                <div class="kt-portlet__head-label">
                    <h3 class="kt-portlet__head-title">
                        Status Sertifikasi
                    </h3>
                </div>
            </div>
            <div class="kt-portlet__body">

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
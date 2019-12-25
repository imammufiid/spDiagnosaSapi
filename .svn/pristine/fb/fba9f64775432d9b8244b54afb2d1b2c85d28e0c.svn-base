<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
            Riwayat Mengajar
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar" guru_id="<?php echo $guru->guru_id ?>">
            <?php echo $this->sys->set_url('guru')->btn_dt_add('dt_add(this)', 'Tambah') ?>
        </div>
    </div>
    <div class="kt-portlet__body">
        <table id="tabel" class="table table-inverse">
            <thead>
                <tr>
                    <th width="50px">No</th>
                    <th>Nama</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>
</div>

<?php 
    $columns = array('guru_mengajar_label');
    $this->crud->set_url('guru');
    $this->crud->set_ajax_url('guru/riwayatmengajar');
    $this->crud->set_modal_url('guru/modal/riwayat_mengajar');
    $this->crud->set_target_id('guru_mengajar_id');
    $this->crud->set_primary_id('guru_id');
    $this->crud->set_primary_val($guru->guru_id);
    $this->crud->set_table_columns($columns);
    echo $this->crud->generate_crud_modal();
?>
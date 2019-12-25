<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Daftar Beasiswa/Bantuan yang pernah diterima
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar"  siswa_id="<?php echo $siswa->siswa_id ?>">
            <?php echo $this->sys->set_url('siswa')->btn_dt_add('dt_add(this)', 'Tambah') ?>
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
    $columns = array('siswa_beasiswa_label');
    $this->crud->set_url('siswa');
    $this->crud->set_ajax_url('siswa/daftarbeasiswa');
    $this->crud->set_modal_url('siswa/modal/daftar_beasiswa');
    $this->crud->set_target_id('siswa_beasiswa_id');
    $this->crud->set_primary_id('siswa_id');
    $this->crud->set_primary_val($siswa->siswa_id);
    $this->crud->set_table_columns($columns);
    echo $this->crud->generate_crud_modal();
?>
<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Riwayat Pendidikan
            </h3>
        </div>
        <div class="kt-portlet__head-toolbar">
            <button onclick="dt_add(this)" class="btn btn-success btn-bold btn-sm"><i class="fa fa-plus"></i> Tambah</button>
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

<!--begin::Modal Manage-->
<div class="modal fade" id="modal_md" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="form-md-manage" method="post">
                <div class="modal-body">
                    <div class="form-group" id="modal-body-md">
                        <label>Nama Pendidikan</label>
                        <input type="hidden" name="guru_pendidikan_id" disabled>
                        <input type="hidden" name="guru_id" value="<?php echo $guru->guru_id ?>" >
                        <input type="text" autocomplete="off" name="guru_pendidikan_label" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-success">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal Manage-->

<!--begin::Modal Delete-->
<div class="modal fade" id="modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel2" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel2">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="form-md-delete" method="post">
                <div class="modal-body">
                    <div id="modal-body-delete">
                        <label><span id="beaguru"></span></label>
                        <input type="hidden" class="d-none" name="guru_pendidikan_id" value="">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-google">Hapus</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--end::Modal Delete-->

<div id="dt_btn_utils" class="d-none">
    <?php echo $this->sys->set_url('guru')->btn_dt_edit() ?>
    <?php echo $this->sys->set_url('guru')->btn_dt_delete() ?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabel').dataTable({
            ajax:{url:"<?php echo base_url('guru/pendidikan_fetch') ?>",dataSrc:"data","type": "POST"},
            processing: true,
            serverSide: true,
            columns: [
                {data: null, render: function(data, row, columns, meta) {
                    return meta.row + 1;
                }, searchable: false},
                {data: 'guru_pendidikan_label'},
                {data: null, render: function(data, row, columns, meta){
                    var dt_btn_utils = $('#dt_btn_utils').clone();
                    dt_btn_utils.find('.dt-edit').attr({'target-label':data.guru_pendidikan_label, 'target-id': data.guru_pendidikan_id, 'onclick': 'dt_edit(this)'});
                    dt_btn_utils.find('.dt-delete').attr({'target-label':data.guru_pendidikan_label, 'target-id': data.guru_pendidikan_id, 'onclick': 'dt_delete(this)'});
                    return dt_btn_utils.html();
                }, searchable: false},
            ],
        });

        $('#form-md-manage').submit(function(event) {
            $.post('<?php echo base_url('guru/daftarbeaguru_save') ?>', $(this).serialize(), function(response, textStatus, xhr) {
                if (response.status == true) {
                    toastr.success(response.msg);
                    $('#tabel').DataTable().ajax.reload();
                    $('#modal_md').modal('hide');
                } else {
                    toastr.error(response.msg);
                }
            }, "json");
            return false;
        });

        $('#form-md-delete').submit(function(event) {
            $.post('<?php echo base_url('guru/daftarbeaguru_delete') ?>', $(this).serialize(), function(response, textStatus, xhr) {
                if (response.status == true) {
                    toastr.success(response.msg);
                     $('#tabel').DataTable().ajax.reload();
                     $('#modal_delete').modal('hide');
                } else {
                    toastr.error(response.msg);
                }
            }, "json");
            return false;
        });

    });

    function dt_add(t) {
        $('#form-md-manage').trigger('reset');
        $('input[name="guru_pendidikan_id"]').prop('disabled', true);
        $('#modal_md').modal('show');
    }

    function dt_edit(t) {
        $('input[name="guru_pendidikan_id"]').prop('disabled', false);
        $('input[name="guru_pendidikan_id"]').val($(t).attr('target-id'));
        $('input[name="guru_pendidikan_label"]').val($(t).attr('target-label'));
        $('#modal_md').modal('show');
    }

    function dt_delete(t){
       $('input[name="guru_pendidikan_id"]').prop('disabled', false);
       $('input[name="guru_pendidikan_id"]').val($(t).attr('target-id'));
       $('#beaguru').text($(t).attr('target-label'));
       $('#modal_delete').modal('show');
    }
</script>
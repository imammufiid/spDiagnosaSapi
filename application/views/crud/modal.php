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
    <?php echo $this->sys->set_url($url)->btn_dt_edit() ?>
    <?php echo $this->sys->set_url($url)->btn_dt_delete() ?>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#tabel').dataTable({
            ajax:{url:"<?php echo base_url($ajax_url."_fetch/".$primary_val) ?>",dataSrc:"data","type": "POST"},
            processing: true,
            serverSide: true,
            columns: [
                {data: null, render: function(data, row, columns, meta) {
                    return meta.row + 1;
                }, searchable: false},
                <?php echo $table_columns ?>
                {data: null, render: function(data, row, columns, meta){
                    var dt_btn_utils = $('#dt_btn_utils').clone();
                    dt_btn_utils.find('.dt-edit').attr({'target-id': data.<?php echo $target_id ?>, 'onclick': 'dt_edit(this)'});
                    dt_btn_utils.find('.dt-delete').attr({'target-id': data.<?php echo $target_id ?>, 'onclick': 'dt_delete(this)'});
                    return dt_btn_utils.html();
                }, searchable: false},
            ],
        });

        $('#form-md-manage').submit(function(event) {
            $.post('<?php echo base_url($ajax_url.'_save') ?>', $(this).serialize(), function(response, textStatus, xhr) {
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
            $.post('<?php echo base_url($ajax_url.'_delete') ?>', $(this).serialize(), function(response, textStatus, xhr) {
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
        $.get('<?php echo base_url($modal_url.'_add') ?>', {'<?php echo $primary_id ?>':$(t).parent().attr('<?php echo $primary_id ?>')}).done(function(data) {
            $('#modal-body-md').html(data);
            $('#modal_md').modal('show');
        });
    }

    function dt_edit(t) {
        $.get('<?php echo base_url($modal_url.'_edit') ?>', {'<?php echo $primary_id ?>':$(t).attr('<?php echo $primary_id ?>'),'<?php echo $target_id ?>':$(t).attr('target-id')}).done(function(data) {
            $('#modal-body-md').html(data);
            $('#modal_md').modal('show');
        });
    }

    function dt_delete(t){
        $.get('<?php echo base_url($modal_url.'_delete') ?>', {'<?php echo $primary_id ?>':$(t).attr('<?php echo $primary_id ?>'),'<?php echo $target_id ?>':$(t).attr('target-id')}).done(function(data) {
            $('#modal-body-delete').html(data);
            $('#modal_delete').modal('show');
        });
    }
</script>
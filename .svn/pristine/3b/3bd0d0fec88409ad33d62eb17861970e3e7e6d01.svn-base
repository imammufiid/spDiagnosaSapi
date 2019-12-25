<div class="kt-portlet">
    <div class="kt-portlet__head">
        <div class="kt-portlet__head-label">
            <h3 class="kt-portlet__head-title">
                Penghasilan Orang Tua
            </h3>
        </div>
    </div>
    <div class="kt-portlet__body">
        <?php $penghasilan = $this->db->where('penghasilan_ortu_id', $siswa->siswa_penghasilan_ortu_id)->get('penghasilan_ortu')->row() ?>
        <div class="row">
            <div class="p-2 bg-success rounded col-md-5">
                <h3 class="text-white text-center mt-2"><i class="fa fa-money-bill"></i> <span class="ml-2">Penghasilan : <?php echo $penghasilan->penghasilan_ortu_label ?></span></h3>
            </div>
            <div class="col-md-2">
                <button target-id="<?php echo $siswa->siswa_penghasilan_ortu_id ?>" class="btn btn-lg btn-warning text-white" id="btn-edit"><i class="fa fa-edit fa-lg"></i></button>
            </div>
        </div>
    </div>
</div>

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
                    <div id="modal-body-md">
                        <input type="hidden" name="siswa_id" value="<?php echo $siswa->siswa_id ?>">
                        <select class="form-control" name="siswa_penghasilan_ortu_id">
                            <?php foreach ($penghasilan_ortu as $key => $var): ?>
                                <option value="<?php echo $var->penghasilan_ortu_id ?>"><?php echo $var->penghasilan_ortu_label ?></option>
                            <?php endforeach ?>
                        </select>
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

<script type="text/javascript">
    $('#btn-edit').click(function(event) {
        $('select[name="siswa_penghasilan_ortu_id"]').val($(this).attr('target-id')).trigger('change');
        $('#modal_md').modal('show');
    });

    $('#form-md-manage').submit(function(event) {
            $.post('<?php echo base_url('siswa/datadiri_save') ?>', $(this).serialize(), function(response, textStatus, xhr) {
                if (response.status == true) {
                    toastr.success(response.msg);
                    $('#modal_md').modal('hide');
                    setTimeout(function() {
                       $('.nav-pills .nav-link').eq(3).trigger('click');
                    }, 1000);
                } else {
                    toastr.error(response.msg);
                }
            }, "json");
            return false;
        });
</script>
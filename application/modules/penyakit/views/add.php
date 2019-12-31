<div class="row">
    <input type="hidden" name="kode_penyakit">
    <div class="col-md-12">
        <div class="form-group">
            <label>Nama Penyakit</label>
            <input type="text" name="nama_penyakit" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Detail Penyakit</label>
            <textarea name="det_penyakit" id="" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Saran Penyakit</label>
            <textarea name="srn_penyakit" id="" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-md-10">
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
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
    <input type="hidden" name="created_at" value="<?= date('Y-d-m H:i:s'); ?>">
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
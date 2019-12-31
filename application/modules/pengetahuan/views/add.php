<div class="row">
    <input type="hidden" name="kode_pengetahuan">
    <input type="hidden" name="created_at" value="<?= date('Y-d-m H:i:s'); ?>">
    <div class="col-md-12">
        <div class="form-group">
            <label>Penyakit</label>
            <select name="kode_penyakit" id="" class="form-control select-group" style="width: 100%">
                <option value selected disabled>-- Pilih --</option>
                <?php foreach ($penyakit as $key => $var) : ?>
                    <option value="<?php echo $var['kode_penyakit'] ?>"><?php echo $var['nama_penyakit'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Gejala</label>
            <select name="kode_gejala" id="" class="form-control select-group" style="width: 100%">
            <option value selected disabled>-- Pilih --</option>
                <?php foreach ($gejala as $key => $var) : ?>
                    <option value="<?php echo $var['kode_gejala'] ?>"><?php echo $var['nama_gejala'] ?></option>
                <?php endforeach ?>
            </select>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>MB</label>
            <input type="text" name="mb" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>MD</label>
            <input type="text" name="md" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-12">
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
        $('.select-group').select2();
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
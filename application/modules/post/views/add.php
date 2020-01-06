<div class="row">
    <input type="hidden" name="kode_post">
    <input type="hidden" name="created_at" value="<?= date('d-m-Y'); ?>">
    <div class="col-md-12">
        <div class="form-group">
            <label>Nama Post</label>
            <input type="text" name="nama_post" autocomplete="off" class="form-control">
        </div>
    </div>
    <div class="col-md-12">
        <div id="kt-ckeditor-1-toolbar"></div>
        <div class="form-group">
            <label>Detail Post</label>
            <textarea name="det_post" id="editor1" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div id="kt-ckeditor-1-toolbar"></div>
        <div class="form-group">
            <label>Saran Post</label>
            <textarea name="srn_post" id="editor2" class="form-control"></textarea>
        </div>
    </div>
    <div class="col-md-12">
        <div class="form-group">
            <label>Gambar</label>
            <input type="file" name="gambar" id="gambar" class="form-control">
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        CKEDITOR.replace( 'editor1' );
        CKEDITOR.replace( 'editor2' );
    })
</script>
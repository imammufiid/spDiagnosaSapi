<style type="text/css">
.nav {
  white-space: nowrap;
  flex-wrap: nowrap;
  overflow-x: scroll;
}

.nav li {
  display: inline-block;
  padding-bottom: 5px;
}
</style>
<script type="text/javascript" src="<?php echo base_url('assets/plugins/datatables/datatables.min.js') ?>"></script>
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/datatables.min.css') ?>">

<div class="overflow-auto">
<ul class="nav nav-pills" role="tablist">
    <li class="nav-item ">
        <a class="nav-link active" data-toggle="tab" href="jml_siswa_pts_sklh"><i class="fa fa-address-card"></i>Jumlah siswa putus sekolah</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_siswa_berprestasi"><i class="fa fa-book-reader"></i>Jumlah siswa berprestasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_siswa_miskin"><i class="fa fa-book-reader"></i>Jumlah siswa miskin</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_siswa_beasiswa"><i class="fa fa-book-reader"></i>Jumlah siswa penerima beasiswa</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_siswa_domisili"><i class="fa fa-book-reader"></i>Jumlah siswa domisili</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_siswa_berbakat"><i class="fa fa-book-reader"></i>Jumlah siswa berbakat</a>
    </li>
</ul>
</div>
<div id="kt-content">
    
</div>

<script type="text/javascript">
    $('.nav-pills .nav-link').click(function(event) {
        var href = $(this).attr('href');
        $.get('<?php echo base_url('pelaporan/modal/') ?>' + href).done(function(data) {
            $('#kt-content').html(data);
        });
    });

    $('.nav-pills .active').trigger('click');
</script>
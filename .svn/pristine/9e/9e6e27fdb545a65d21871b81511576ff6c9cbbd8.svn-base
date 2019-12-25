<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/datatables.min.js') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/datatables.min.css') ?>">
<div class="overflow-auto">
<ul class="nav nav-pills" role="tablist">
    <li class="nav-item ">
        <a class="nav-link active" data-toggle="tab" href="data_diri_add"><i class="fa fa-address-card"></i>Data Diri</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" data-toggle="tab" href="domisili"><i class="fa fa-book-reader"></i>Domisili</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" data-toggle="tab" href="riwayat_pendidikan"><i class="fa fa-book-reader"></i>Riwayat Pendidikan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" data-toggle="tab" href="penghasilan_orangtua"><i class="fa fa-book-reader"></i>Penghasilan Orang Tua</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" data-toggle="tab" href="daftar_penghargaan"><i class="fa fa-book-reader"></i>Daftar Penghargaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link disabled" data-toggle="tab" href="daftar_beasiswa"><i class="fa fa-book-reader"></i>Daftar Beasiswa</a>
    </li>
</ul>
</div>

<div id="kt-content">
    
</div>

<script type="text/javascript">
    $('.nav-pills .nav-link').click(function(event) {
        var href = $(this).attr('href');
        $.get('<?php echo base_url('siswa/modal/') ?>' + href).done(function(data) {
            $('#kt-content').html(data);
        });
    });

    $('.nav-pills .active').trigger('click');
</script>
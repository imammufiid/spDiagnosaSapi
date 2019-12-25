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
        <a class="nav-link active" data-toggle="tab" href="jml_guru_ymldsuj"><i class="fa fa-address-card"></i>Jumlah guru mengajar > 1 unit kerja</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_ptuk"><i class="fa fa-book-reader"></i>Jumlah guru pada tiap unit kerja</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_kkgptuk"><i class="fa fa-book-reader"></i>Jumlah kelebihan/kekurangan guru</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_pnsnpns"><i class="fa fa-book-reader"></i>Jumlah guru PNS/non PNS</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_bersertifikasi"><i class="fa fa-book-reader"></i>Jumlah guru bersertifikasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_berprestasi"><i class="fa fa-book-reader"></i>Jumlah guru berprestasi</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_berkarya"><i class="fa fa-book-reader"></i>Jumlah guru berkarya</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_pembinaan"><i class="fa fa-book-reader"></i>Jumlah Guru Pembinaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="jml_guru_mutasi"><i class="fa fa-book-reader"></i>Jumlah Guru Mutasi</a>
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
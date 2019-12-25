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
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/datatables.min.js') ?>">
<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/plugins/datatables/datatables.min.css') ?>">
<div>
<ul class="nav nav-pills" role="tablist">
    <li class="nav-item ">
        <a class="nav-link active" data-toggle="tab" href="data_diri"><i class="fa fa-address-card"></i>Data Diri</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_pendidikan"><i class="fa fa-book-reader"></i>Riwayat Pendidikan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_unit_kerja"><i class="fa fa-book-reader"></i>Riwayat Unit Kerja</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_mengajar"><i class="fa fa-book-reader"></i>Riwayat Mengajar</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_jabatan"><i class="fa fa-book-reader"></i>Riwayat Jabatan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_kepangkatan"><i class="fa fa-book-reader"></i>Riwayat Kepangkatan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_diklat"><i class="fa fa-book-reader"></i>Riwayat Diklat/Seminar/Workshop</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_pembinaan"><i class="fa fa-book-reader"></i>Riwayat Pembinaan Perilaku</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="riwayat_permasalahan"><i class="fa fa-book-reader"></i>Riwayat Permasalahan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="daftar_penghargaan"><i class="fa fa-book-reader"></i>Daftar Penghargaan</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="daftar_karya_tulis"><i class="fa fa-book-reader"></i>Daftar Karya Tulis</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="status_kepegawaian"><i class="fa fa-book-reader"></i>Status Kepegawaian</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="status_sertifikasi"><i class="fa fa-book-reader"></i>Status Sertifikasi</a>
    </li>
</ul>
</div>
<div id="kt-content">
    
</div>

<script type="text/javascript">
    $('.nav-pills .nav-link').click(function(event) {
        var href = $(this).attr('href');
        $.get('<?php echo base_url('guru/modal/') ?>' + href, {'guru_nip':<?php echo $this->uri->segment(3) ?>}).done(function(data) {
            $('#kt-content').html(data);
        });
    });

    $('.nav-pills .active').trigger('click');
</script>
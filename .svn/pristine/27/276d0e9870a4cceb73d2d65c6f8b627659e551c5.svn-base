<!--begin:: Widgets/Download Files-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				Jumlah Siswa Putus Sekolah
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="mt-3 table-responsive">
			<table id="tabel-data" class="table table-bordered table-inverse table-hover">
				<thead>
					<tr>
						<th>NISN</th>
						<th>Nama</th>
						<th>T/TL</th>
						<th>Alamat</th>
						<th>Sekolah</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
</div>
<!--end:: Widgets/Download Files-->

<script type="text/javascript">
	$(document).ready(function() {
		$('#tabel-data').dataTable({
			ajax:{url:"<?php echo base_url('siswa/fetch') ?>",dataSrc:"data","type": "POST"},
			processing: true,
        	serverSide: true,
			columns: [
				{data: null, render: function(data, row, columns, meta){
					return '<a href="<?php echo(base_url('siswa/show').'/') ?>'+data.siswa_nisn+'">'+data.siswa_nisn+'</a>';
				}},
				{data: 'siswa_nama'},
				{data: 'siswa_tptg_lahir', searchable: false},
				{data: 'siswa_alamat'},
				{data: 'schools_name'},
			],
		});
	});
</script>
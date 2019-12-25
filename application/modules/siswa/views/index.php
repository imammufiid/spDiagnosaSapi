<!--begin:: Widgets/Download Files-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				<?php echo $_render_menu_label ?>
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<?php echo $this->sys->btn_dt_add('dt_add(this)', 'Tambah') ?>
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
						<th width="30px">Aksi</th>
					</tr>
				</thead>
				<tbody>

				</tbody>
			</table>
		</div>
	</div>
</div>
<!--end:: Widgets/Download Files-->

<!-- datatable utils -->

<div id="dt_btn_utils" class="d-none">
	<?php echo $this->sys->btn_dt_delete() ?>
</div>

<!--begin::Modal Manage-->
<div class="modal fade" id="modal_md" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="form-md-manage" method="post">
	            <div class="modal-body">
	            	<div id="modal-body-md">
	            		
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
    <div class="modal-dialog modal-md" role="document">
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
				{data: null, render: function(data, row, columns, meta){
					var dt_btn_utils = $('#dt_btn_utils').clone();
					dt_btn_utils.find('.dt-delete').attr({'target-id': data.md_id, 'onclick': 'dt_delete(this)'});
					return dt_btn_utils.html();
				}, searchable: false},
			],
		});

		$('#form-md-manage').submit(function(event) {
			$.post('<?php echo base_url('siswa/datadiri_save') ?>', $(this).serialize(), function(response, textStatus, xhr) {
				if (response.status == true) {
					toastr.success(response.msg);
					setTimeout(function() {
						window.location.reload();
					}, 2000);
				} else {
					toastr.error(response.msg);
				}
			}, "json");
			return false;
		});

		$('#form-md-delete').submit(function(event) {
			$.post('<?php echo base_url('core/md_delete') ?>', $(this).serialize(), function(response, textStatus, xhr) {
				if (response.status == true) {
					toastr.success(response.msg);
					setTimeout(function() {
						window.location.reload();
					}, 2000);
				} else {
					toastr.error(response.msg);
				}
			}, "json");
			return false;
		});
	});

	function dt_add(t) {
		$.get('<?php echo base_url('siswa/modal/add') ?>').done(function(data) {
			$('#modal-body-md').html(data);
			$('#modal_md').modal('show');
		});
	}

	function dt_delete(t){
		$.get('<?php echo base_url('core/md_modal/modal_delete') ?>', {'md_id':$(t).attr('target-id')}).done(function(data) {
			$('#modal-body-delete').html(data);
			$('#modal_delete').modal('show');
		});
	}
</script>
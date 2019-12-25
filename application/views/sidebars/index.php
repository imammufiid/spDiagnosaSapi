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
						<th>No</th>
						<th>Parent</th>
						<th>Label</th>
						<th>Href</th>
						<th>Icon</th>
						<th>Status</th>
						<th>Aksi</th>
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
	<?php echo $this->sys->btn_dt_edit() ?>
	<?php echo $this->sys->btn_dt_delete() ?>
</div>

<!--begin::Modal Manage-->
<div class="modal fade" id="modal_sidebar" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Form</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                </button>
            </div>
            <form id="form-sidebar-manage" method="post">
	            <div class="modal-body">
	            	<div id="modal-body-sidebar">
	            		
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
            <form id="form-sidebar-delete" method="post">
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
			ajax:{url:"<?php echo base_url('core/sidebars_fetch') ?>",dataSrc:"data","type": "POST"},
			processing: true,
        	serverSide: true,
			columns: [
				{data: null, render: function(data, row, columns, meta) {
					return meta.row + 1;
				}, searchable: false},
				{data: 'sidebar_parent_label'},
				{data: 'sidebar_label'},
				{data: 'sidebar_href'},
				{data: null, render(data, row, columns, meta){
					return '<i class="'+data.sidebar_icon+'"></i>';
				}, searchable: false},
				{data: 'status_label'},
				{data: null, render: function(data, row, columns, meta){
					var dt_btn_utils = $('#dt_btn_utils').clone();
					dt_btn_utils.find('.dt-edit').attr({'target-id': data.sidebar_id, 'onclick': 'dt_edit(this)'});
					dt_btn_utils.find('.dt-delete').attr({'target-id': data.sidebar_id, 'onclick': 'dt_delete(this)'});
					return dt_btn_utils.html();
				}, searchable: false},
			],
		});

		$('#form-sidebar-manage').submit(function(event) {
			$.post('<?php echo base_url('core/sidebars_save') ?>', $(this).serialize(), function(response, textStatus, xhr) {
				if (response.status == true) {
					toastr.success(response.msg);
					$('#modal_sidebar').modal('hide');
					$('#tabel-data').DataTable().ajax.reload();
				} else {
					toastr.error(response.msg);
				}
			}, "json");
			return false;
		});

		$('#form-sidebar-delete').submit(function(event) {
			$.post('<?php echo base_url('core/sidebars_delete') ?>', $(this).serialize(), function(response, textStatus, xhr) {
				if (response.status == true) {
					toastr.success(response.msg);
					$('#modal_delete').modal('hide');
					$('#tabel-data').DataTable().ajax.reload();
				} else {
					toastr.error(response.msg);
				}
			}, "json");
			return false;
		});

	});

	function dt_add(t) {
		$.get('<?php echo base_url('core/sidebars_modal/modal_add') ?>').done(function(data) {
			$('#modal-body-sidebar').html(data);
			$('#modal_sidebar').modal('show');
		});
	}

	function dt_edit(t) {
		$.get('<?php echo base_url('core/sidebars_modal/modal_edit') ?>', {'sidebar_id':$(t).attr('target-id')}).done(function(data) {
			$('#modal-body-sidebar').html(data);
			$('#modal_sidebar').modal('show');
		});
	}

	function dt_delete(t){
		$.get('<?php echo base_url('core/sidebars_modal/modal_delete') ?>', {'sidebar_id':$(t).attr('target-id')}).done(function(data) {
			$('#modal-body-delete').html(data);
			$('#modal_delete').modal('show');
		});
	}
</script>
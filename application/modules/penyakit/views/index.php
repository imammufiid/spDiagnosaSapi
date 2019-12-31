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
						<th>#</th>
						<th>Nama Penyakit</th>
						<th>Detail Penyakit</th>
						<th>Saran Penyakit</th>
						<th width="80">Status</th>
						<th width="50">Aksi</th>
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
<div class="modal fade" id="modal_md" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-lg" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Form</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				</button>
			</div>
			<form id="form-md-manage" method="post" enctype="multipart/form-data">
				<div class="modal-body">
					<div id="modal-body-md">

					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
					<button type="submit" id="btn-add" class="btn btn-success">Simpan</button>
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
				<h5 class="modal-title" id="exampleModalLabel2">Delete Data</h5>
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
		var tabel = $('#tabel-data').DataTable({
			ajax: {
				url: "<?php echo base_url('penyakit/fetch') ?>",
				dataSrc: "data",
				"type": "POST",
				'dataType': 'json',
			},
			processing: true,
			serverSide: true,
			columns: [{
				data: null,
					render: function(data, row, columns, meta) {
						return meta.row + 1;
					},

				},
				{
					data: 'nama_penyakit',
				},
				{
					data: 'det_penyakit',
				},
				{
					data: 'srn_penyakit'
				},
				{
					data: 'status',
					render: function(data, type, row, meta) {
						if (data == 1) {
							return "<span class='kt-badge kt-badge--success kt-badge--lg kt-badge--inline'>Aktif</span>";
						} else {
							return '<span class="kt-badge kt-badge--warning kt-badge--lg kt-badge--inline">Non-Aktif</span>';
						}
					},
					searchable: false
				},
				{
					data: null,
					render: function(data, row, columns, meta) {
						var dt_btn_utils = $('#dt_btn_utils').clone();
						dt_btn_utils.find('.dt-edit').attr({
							'target-id': data.kode_penyakit,
							'onclick': 'dt_edit(this)'
						});
						dt_btn_utils.find('.dt-delete').attr({
							'target-id': data.kode_penyakit,
							'onclick': 'dt_delete(this)'
						});
						return dt_btn_utils.html();
					},
					searchable: false
				},
			],
		});

		
		$('#btn-add').click(function(event) {
			event.preventDefault();
			var form = $('#form-md-manage')[0];
			var data = new FormData(form);
			$.ajax({
				url: '<?php echo base_url('penyakit/save') ?>',
				type: "POST",
				enctype: 'multipart/form-data',
				data: data,
				contentType: false,
				cache: false,
				processData: false,
				dataType: 'json',
				success: function(response) {
					tabel.ajax.reload();
					if (response.status == true) {
						toastr.success(response.msg);
						$('#modal_md').modal('hide');
					} else {
						toastr.error(response.msg);
					}
				}
			});
			return false;
		});

		$('#form-md-delete').submit(function(event) {
			$.post('<?php echo base_url('penyakit/delete') ?>', $(this).serialize(), function(response, textStatus, xhr) {
				tabel.ajax.reload();
				if (response.status == true) {
					toastr.success(response.msg);
					$('#modal_delete').modal('hide');
				} else {
					toastr.error(response.msg);
				}
			}, "json");
			return false;
		});
	});

	function dt_add(t) {
		$.get('<?php echo base_url('penyakit/modal/add') ?>').done(function(data) {
			$('#exampleModalLabel').html('Tambah Data');
			$('#modal-body-md').html(data);
			$('#modal_md').modal('show');
		});
	}

	function dt_edit(t) {
		$.get('<?php echo base_url('/penyakit/modal/edit') ?>', {
			'kode_penyakit': $(t).attr('target-id')
		}).done(function(data) {
			$('#exampleModalLabel').html('Edit Data');
			$('#modal-body-md').html(data);
			$('#modal_md').modal('show');
		});
	}

	function dt_delete(t) {
		$.get('<?php echo base_url('penyakit/modal/delete') ?>', {
			'kode_penyakit': $(t).attr('target-id')
		}).done(function(data) {
			$('#modal-body-delete').html(data);
			$('#modal_delete').modal('show');
		});
	}
</script>
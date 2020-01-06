<!--begin:: Widgets/Download Files-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				<?php echo $_render_menu_label ?>
			</h3>
		</div>
		<div class="kt-portlet__head-toolbar">
			<?php //echo $this->sys->btn_dt_add('dt_add(this)', 'Tambah') 
			?>
		</div>
	</div>
	<div class="kt-portlet__body">
		<?php if ($this->session->flashdata('msg') != null) : ?>
			<div id="msg">
				<div class="alert alert-danger alert-dismissible">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
					<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>
					<?= $this->session->flashdata('msg'); ?>
				</div>
			</div>
		<?php endif; ?>
		<form action="<?= base_url('diagnosa/submit') ?>" method="POST">
			<div class="table-responsive">
				<table id="tabel-data" class="table table-bordered table-inverse table-hover">
					<thead>
						<tr>
							<th width="50px">#</th>
							<th width="100px">Kode Gejala</th>
							<th>Gejala</th>
							<th width="200px">Kondisi</th>
						</tr>
					</thead>
					<tbody>

					</tbody>
				</table>
			</div>
			<button class='float' type=submit data-toggle='tooltip' data-placement='top' title='Klik disini untuk melihat hasil diagnosa' name=submit value='&#xf00e;'><i class="fa fa-search-plus"></i></button>
		</form>
	</div>
</div>
<!--end:: Widgets/Download Files-->

<!-- datatable utils -->

<div id="dt_btn_utils" class="d-none">
	<?php //echo $this->sys->btn_dt_edit() 
	?>
	<?php //echo $this->sys->btn_dt_delete() 
	?>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		var tabel = $('#tabel-data').DataTable({
			processing: false,
			serverSide: true,
			searching: false,
			lengthChange: false,
			paging: false,
			ordering: false,
			order: [],
			ajax: {
				"url": "<?php echo base_url('diagnosa/get') ?>",
				"type": "POST"
			},

			columnDefs: [{
				"targets": "_all",
				"defaultContent": "-",
				"orderable": false
			}],
			resposive: true
		});

		$('#form-md-manage').submit(function(event) {
			$.post('<?php echo base_url('gejala/save') ?>', $(this).serialize(), function(response, textStatus, xhr) {

				tabel.ajax.reload();
				if (response.status == true) {
					toastr.success(response.msg);
					$('#modal_md').modal('hide');
				} else {
					toastr.error(response.msg);
				}
			}, "json");
			return false;
		});
	});
</script>
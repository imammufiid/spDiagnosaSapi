<?php 
	$var = $this->db->where('group_id', $_GET['group_id'])->get('_sys_group')->row();
?>

<style type="text/css">
	#modal-delete-tabel tr td {
		white-space: nowrap;
		padding-right: 10px;
	}
</style>
<div class="form-group">
	<input type="hidden" name="group_id" value="<?php echo $var->group_id ?>">
	<table id="modal-delete-tabel">
		<tr>
			<td>Nama Grup</td>
			<td>:</td>
			<td><?php echo $var->group_label ?></td>
		</tr>
	</table>
</div>
<?php 
	$var = $this->db->where('sidebar_id', $_GET['sidebar_id'])->get('_v_sys_sidebar')->row();
?>

<style type="text/css">
	#modal-delete-tabel tr td {
		white-space: nowrap;
		padding-right: 10px;
	}
</style>
<div class="form-group">
	<input type="hidden" name="sidebar_id" value="<?php echo $var->sidebar_id ?>">
	<table id="modal-delete-tabel">
		<tr>
			<td>Parent</td>
			<td>:</td>
			<td><?php echo $var->sidebar_parent_label ?></td>
		</tr>
		<tr>
			<td>Label</td>
			<td>:</td>
			<td><?php echo $var->sidebar_label ?></td>
		</tr>
		<tr>
			<td>Href</td>
			<td>:</td>
			<td><?php echo $var->sidebar_href ?></td>
		</tr>
	</table>
</div>
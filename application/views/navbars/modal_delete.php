<?php 
	$var = $this->db->where('navbar_id', $_GET['navbar_id'])->get('_v_sys_navbar')->row();
?>

<style type="text/css">
	#modal-delete-tabel tr td {
		white-space: nowrap;
		padding-right: 10px;
	}
</style>
<div class="form-group">
	<input type="hidden" name="navbar_id" value="<?php echo $var->navbar_id ?>">
	<table id="modal-delete-tabel">
		<tr>
			<td>Parent</td>
			<td>:</td>
			<td><?php echo $var->navbar_parent_label ?></td>
		</tr>
		<tr>
			<td>Label</td>
			<td>:</td>
			<td><?php echo $var->navbar_label ?></td>
		</tr>
		<tr>
			<td>Href</td>
			<td>:</td>
			<td><?php echo $var->navbar_href ?></td>
		</tr>
	</table>
</div>
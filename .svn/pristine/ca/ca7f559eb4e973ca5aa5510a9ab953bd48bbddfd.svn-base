<?php
	$var = $this->db->where('user_id', $_GET['user_id'])->get('_v_sys_user')->row();
?>
<style type="text/css">
	#modal-delete-tabel tr td {
		white-space: nowrap;
		padding-right: 10px;
	}
</style>
<div class="form-group">
	<input type="hidden" name="user_id" value="<?php echo $var->user_id ?>">
	<table id="modal-delete-tabel">
		<tr>
			<td>Grup</td>
			<td>:</td>
			<td><?php echo $var->group_label ?></td>
		</tr>
		<tr>
			<td>Nama Depan</td>
			<td>:</td>
			<td><?php echo $var->user_firstname ?></td>
		</tr>
		<tr>
			<td>Nama Belakang</td>
			<td>:</td>
			<td><?php echo $var->user_lastname ?></td>
		</tr>
		<tr>
			<td>User</td>
			<td>:</td>
			<td><?php echo $var->user_username ?></td>
		</tr>
		<tr>
			<td>Email</td>
			<td>:</td>
			<td><?php echo $var->user_email ?></td>
		</tr>
	</table>
</div>
<?php $pendidikan = $this->db->get('pendidikan')->result() ?>
<?php $riwayat = $this->db->where('siswa_pendidikan_id', $_GET['siswa_pendidikan_id'])->get('v_siswa_pendidikan')->row() ?>

<table>
	<tr>
		<td>Jenjang</td>
		<td>:</td>
		<td><?php echo $riwayat->pendidikan_label ?></td>
	</tr>
	<tr>
		<td>Nama</td>
		<td>:</td>
		<td><?php echo $riwayat->siswa_pendidikan_label ?></td>
	</tr>
</table>

<input type="hidden" autocomplete="off" name="siswa_pendidikan_id" value="<?php echo $riwayat->siswa_pendidikan_id ?>">

<script type="text/javascript">
	$(document).ready(function() {
		$('select[name="pendidikan_id"]').select2({
			width: '100%',
		});
	});
</script>
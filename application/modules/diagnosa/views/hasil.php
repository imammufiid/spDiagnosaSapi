<!--begin:: Widgets/Download Files-->
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head" style="background-color: #d2d6de">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title">
				<?php echo 'Inputan' ?>
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<div class="mt-3 table-responsive">
			<table id="tabel-data" class="table table-inverse table-hover">
				<thead>
					<tr>
						<th width="50px">#</th>
						<th width="200px">Kode Gejala</th>
						<th>Gejala yang Dialami</th>
						<th width="200px">Pilihan</th>
					</tr>
				</thead>
				<tbody>
					<?php $no = 0; ?>
					<?php foreach ($argejala as $key => $value) : ?>
						<?php
						$kondisi = $value;
						$no++;
						$gejala = $key;
						$sqlgjl = $this->db->get_where('gejala', ['kode_gejala' => $key])->result_array();
						?>
						<tr>
							<td><?= $no; ?></td>
							<td>G<?= str_pad($sqlgjl[0]['kode_gejala'], 3, '0', STR_PAD_LEFT) ?></td>
							<td><?= $sqlgjl[0]['nama_gejala'] ?></td>
							<td><?= $kondisitext[$kondisi]; ?></td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>
</div>
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head" style="background-color: #3c8dbc">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title" style="color: #fff">
				<?php echo 'Hasil Diagnosis' ?>
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<?php
		$np = 0;
		// var_dump($arpenyakit);die();
		foreach ($arpenyakit as $key => $value) {
			$np++;
			$idpkt[$np] = $key;
			$nmpkt[$np] = $arpkt[$key];
			$vlpkt[$np] = $value;
		}
		if ($argpkt[$idpkt[1]]) {
			$gambar = base_url('assets/media/penyakit/') . $argpkt[$idpkt[1]];
		} else {
			$gambar = base_url('assets/media/penyakit/noimage.png');
		}
		?>
		<div class='well well-small'>
			<img class='img img-thumbnail' style='float:right; margin-left:15px;' src='<?= $gambar ?>' height='200px'>
			<!-- <h3>Hasil Diagnosa</h3> -->
			<div class='callout callout-default'>Jenis penyakit yang diderita adalah
				<b>
					<h3 class='text text-success'><?= $nmpkt[1] ?>
				</b> / <?= round($vlpkt[1], 2) ?> % (<?= $vlpkt[1] ?>)<br></h3>
			</div>
		</div>
	</div>
</div>
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head" style="background-color: #00c0ef">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title" style="color: #fff">
				<?php echo 'Detail' ?>
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<h5><?= $ardpkt[$idpkt[1]] ?></h5>
	</div>
</div>
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head" style="background-color: #00a65a">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title" style="color: #fff">
				<?php echo 'Saran' ?>
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<h5><?= $arspkt[$idpkt[1]] ?></h5>
	</div>
</div>
<div class="kt-portlet kt-portlet--height-fluid">
	<div class="kt-portlet__head" style="background-color: #f39c12">
		<div class="kt-portlet__head-label">
			<h3 class="kt-portlet__head-title" style="color: #fff">
				<?php echo 'Kemungkinan Lain' ?>
			</h3>
		</div>
	</div>
	<div class="kt-portlet__body">
		<?php for ($ipl = 2; $ipl < count($idpkt); $ipl++) : ?>
			<h5>
				<i class="la la-arrow-circle-o-right"></i>
				<?= $nmpkt[$ipl] . ' /' . round($vlpkt[$ipl], 2) . '% (' .  $vlpkt[$ipl] . ')' ?>
				<br>
			</h5>
		<?php endfor ?>
	</div>
</div>
<!--end:: Widgets/Download Files-->
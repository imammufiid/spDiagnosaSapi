<?php if ($this->session->userdata('user_id') != 4) : ?>
	<div class="row">
		<div class="col-md-4 col-lg-4 col-xl-4">
			<a href="<?= base_url('penyakit') ?>">
				<div class="kt-portlet">
					<div class="kt-portlet__body  kt-portlet__body--fit">
						<!--begin::Total Profit-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										<span class="fa fa-bug"></span> <span class="ml-2">Penyakit</span>
									</h4>
									<span class="kt-widget24__desc">
										Total
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-brand">
									<?php $peny = $this->db->get('penyakit')->num_rows();
									echo $peny;
									$bar_peny = ($peny / 100) * 100;
									?>
								</span>
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-brand" role="progressbar" style="width: <?= $bar_peny ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<!--end::Total Profit-->
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-lg-4 col-xl-4">
			<a href="<?= base_url('gejala') ?>">
				<div class="kt-portlet">
					<div class="kt-portlet__body  kt-portlet__body--fit">
						<!--begin::Total Profit-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										<span class="fa fa-ghost"></span> <span class="ml-2">Gejala</span>
									</h4>
									<span class="kt-widget24__desc">
										Total
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-warning">
									<?php $gjl = $this->db->get('gejala')->num_rows();
									echo $gjl;
									$bar_gjl = ($gjl / 200) * 100;
									?>
								</span>
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-warning" role="progressbar" style="width: <?= $bar_gjl ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<!--end::Total Profit-->
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-lg-4 col-xl-4">
			<a href="<?= base_url('pengetahuan') ?>">
				<div class="kt-portlet">
					<div class="kt-portlet__body  kt-portlet__body--fit">
						<!--begin::Total Profit-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										<span class="flaticon2-checking"></span> <span class="ml-2">Basis Pengetahuan</span>
									</h4>
									<span class="kt-widget24__desc">
										Total
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-success">
									<?php $peng = $this->db->get('basis_pengetahuan')->num_rows();
									echo $peng;
									$bar_peng = ($peng / 500) * 100;
									?>
								</span>
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-success" role="progressbar" style="width: <?= $bar_peng ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<!--end::Total Profit-->
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-lg-4 col-xl-4">
			<a href="<?= base_url('post') ?>">
				<div class="kt-portlet">
					<div class="kt-portlet__body  kt-portlet__body--fit">
						<!--begin::Total Profit-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										<span class="flaticon2-list-1"></span> <span class="ml-2">Post Keterangan</span>
									</h4>
									<span class="kt-widget24__desc">
										Total
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-success">
									<?php $post = $this->db->get('post')->num_rows();
									echo $post;
									$bar_post = ($post / 100) * 100;
									?>
								</span>
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-success" role="progressbar" style="width: <?= $bar_post ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<!--end::Total Profit-->
					</div>
				</div>
			</a>
		</div>
		<div class="col-md-4 col-lg-4 col-xl-4">
			<a href="<?= base_url('aktifitas') ?>">
				<div class="kt-portlet">
					<div class="kt-portlet__body  kt-portlet__body--fit">
						<!--begin::Total Profit-->
						<div class="kt-widget24">
							<div class="kt-widget24__details">
								<div class="kt-widget24__info">
									<h4 class="kt-widget24__title">
										<span class="flaticon2-poll-symbol"></span> <span class="ml-2">Log Aktifitas</span>
									</h4>
									<span class="kt-widget24__desc">
										Total
									</span>
								</div>
								<span class="kt-widget24__stats kt-font-primary">
									<?php $log = $this->db->get('hasil')->num_rows();
									echo $log;
									$bar_log = ($log / 1000) * 100; ?>
								</span>
							</div>
							<div class="progress progress--sm">
								<div class="progress-bar kt-bg-primary" role="progressbar" style="width: <?= $bar_log ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
							</div>
						</div>
						<!--end::Total Profit-->
					</div>
				</div>
			</a>
		</div>
		<?php if ($this->session->userdata('user_id') == 1) : ?>
			<div class="col-md-4 col-lg-4 col-xl-4">
				<a href="<?= base_url('core/users') ?>">
					<div class="kt-portlet">
						<div class="kt-portlet__body  kt-portlet__body--fit">
							<!--begin::Total Profit-->
							<div class="kt-widget24">
								<div class="kt-widget24__details">
									<div class="kt-widget24__info">
										<h4 class="kt-widget24__title">
											<span class="flaticon2-user"></span> <span class="ml-2">User</span>
										</h4>
										<span class="kt-widget24__desc">
											Total
										</span>
									</div>
									<span class="kt-widget24__stats kt-font-warning">
										<?php $user = $this->db->get('_sys_user')->num_rows();
										echo $user;
										$bar_user = ($user / 200) * 100;
										?>
									</span>
								</div>
								<div class="progress progress--sm">
									<div class="progress-bar kt-bg-warning" role="progressbar" style="width: <?= $bar_user ?>%;" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
								</div>
							</div>
							<!--end::Total Profit-->
						</div>
					</div>
				</a>
			</div>
		<?php endif; ?>
	</div>
<?php endif; ?>
<div class="row">
	<div class="col-md-12 col-lg-12 col-xl-12">
		<div class="kt-portlet kt-portlet--height-fluid">
			<figure class="highcharts-figure">
				<div id="container"></div>
			</figure>
		</div>
	</div>
</div>
<div class="clearfix"></div>
<script>
	$(document).ready(function() {
		// Create the chart
		Highcharts.chart('container', {
			chart: {
				type: 'column'
			},
			title: {
				text: 'Grafik Total Sapi yang Terjangkit Penyakit Bulan <?= strftime("%B") . ' Tahun ' . date('Y') ?>'
			},
			subtitle: {
				text: 'Berdasarkan peternak sapi yang menggunakan sistem pakar ini'
			},
			accessibility: {
				announceNewData: {
					enabled: true
				}
			},
			xAxis: {
				// type: 'category',
				categories: <?= $namapkt ?>,
				title: {
					text: 'Jenis Penyakit'
				}
			},
			yAxis: {
				title: {
					text: 'Total Sapi'
				}

			},
			legend: {
				enabled: false
			},
			plotOptions: {
				series: {
					borderWidth: 0,
					dataLabels: {
						enabled: true,
						format: '{point.y}'
					}
				}
			},

			tooltip: {
				headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
				pointFormat: '<span style="color:{point.color}"></span><b>{point.y}</b> of total<br/>'
			},

			series: [{
				name: "Total Sapi",
				colorByPoint: true,
				data: [
					<?php foreach ($penyakit as $key => $val) : ?> {
							nama: "<?= $val['nama_penyakit'] ?>",
							y: <?= $count[$val['kode_penyakit']] ?>,
						},
					<?php endforeach; ?>
				],
			}],
			drilldown: {
				series: [{
						name: "Chrome",
						id: "Chrome",
						data: [
							[
								"v65.0",
								0.1
							],
							[
								"v64.0",
								1.3
							],
							[
								"v63.0",
								53.02
							],
							[
								"v62.0",
								1.4
							],
							[
								"v61.0",
								0.88
							],
							[
								"v60.0",
								0.56
							],
							[
								"v59.0",
								0.45
							],
							[
								"v58.0",
								0.49
							],
							[
								"v57.0",
								0.32
							],
							[
								"v56.0",
								0.29
							],
							[
								"v55.0",
								0.79
							],
							[
								"v54.0",
								0.18
							],
							[
								"v51.0",
								0.13
							],
							[
								"v49.0",
								2.16
							],
							[
								"v48.0",
								0.13
							],
							[
								"v47.0",
								0.11
							],
							[
								"v43.0",
								0.17
							],
							[
								"v29.0",
								0.26
							]
						]
					},
					{
						name: "Firefox",
						id: "Firefox",
						data: [
							[
								"v58.0",
								1.02
							],
							[
								"v57.0",
								7.36
							],
							[
								"v56.0",
								0.35
							],
							[
								"v55.0",
								0.11
							],
							[
								"v54.0",
								0.1
							],
							[
								"v52.0",
								0.95
							],
							[
								"v51.0",
								0.15
							],
							[
								"v50.0",
								0.1
							],
							[
								"v48.0",
								0.31
							],
							[
								"v47.0",
								0.12
							]
						]
					},
					{
						name: "Internet Explorer",
						id: "Internet Explorer",
						data: [
							[
								"v11.0",
								6.2
							],
							[
								"v10.0",
								0.29
							],
							[
								"v9.0",
								0.27
							],
							[
								"v8.0",
								0.47
							]
						]
					},
					{
						name: "Safari",
						id: "Safari",
						data: [
							[
								"v11.0",
								3.39
							],
							[
								"v10.1",
								0.96
							],
							[
								"v10.0",
								0.36
							],
							[
								"v9.1",
								0.54
							],
							[
								"v9.0",
								0.13
							],
							[
								"v5.1",
								0.2
							]
						]
					},
					{
						name: "Edge",
						id: "Edge",
						data: [
							[
								"v16",
								2.6
							],
							[
								"v15",
								0.92
							],
							[
								"v14",
								0.4
							],
							[
								"v13",
								0.1
							]
						]
					},
					{
						name: "Opera",
						id: "Opera",
						data: [
							[
								"v50.0",
								0.96
							],
							[
								"v49.0",
								0.82
							],
							[
								"v12.1",
								0.14
							]
						]
					}
				]
			}
		});
	})
</script>
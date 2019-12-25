<?php 
	$_sys_setting = $this->db->get('_sys_setting')->row();
?>
<!DOCTYPE html>

<!-- 
Template Name: Metronic - Responsive Admin Dashboard Template build with Twitter Bootstrap 4 & Angular 7
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
Renew Support: http://themeforest.net/item/metronic-responsive-admin-dashboard-template/4021469?ref=keenthemes
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">

	<!-- begin::Head -->
	<head>

		<!--end::Base Path -->
		<meta charset="utf-8" />
		<title><?php echo $_sys_setting->setting_web_name ?> | Login Page</title>
		<meta name="description" content="Login page example">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
				google: {
					"families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
				},
				active: function() {
					sessionStorage.fonts = true;
				}
			});
		</script>

		<style type="text/css">
			.pace {
			  -webkit-pointer-events: none;
			  pointer-events: none;

			  -webkit-user-select: none;
			  -moz-user-select: none;
			  user-select: none;
			}

			.pace-inactive {
			  display: none;
			}

			.pace .pace-progress {
			  background: #29d;
			  position: fixed;
			  z-index: 2000;
			  top: 0;
			  right: 100%;
			  width: 100%;
			  height: 2px;
			}

		</style>

		<link href="<?= base_url() ?>assets/css/pages/general/login/login-3.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url() ?>assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url() ?>assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />
		<link href="<?= base_url() ?>assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<link rel="shortcut icon" href="<?= base_url($_sys_setting->setting_web_icon) ?>" />
		<script src="<?= base_url() ?>assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<?= base_url() ?>assets/js/pace.min.js" type="text/javascript"></script>
		<script src="<?= base_url() ?>assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
		<div class="kt-grid kt-grid--ver kt-grid--root">
			<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v3 kt-login--signin" id="kt_login">
				<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<?= base_url() ?>assets/media//bg/bg-3.jpg);">
					<div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
						<div class="kt-login__container">
							<div class="kt-login__logo">
								<a href="#">
									<img class="img-fluid w-25" src="<?= base_url($_sys_setting->setting_web_logo) ?>">
								</a>
							</div>
							<div class="kt-login__signin">
								<div class="kt-login__head">
									<h3 class="kt-login__title">Sign In To Application</h3>
								</div>
								<form id="form" class="kt-form" action="<?php echo base_url('auth/check_login') ?>">
									<div class="input-group">
										<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
									</div>
									<div class="input-group">
										<input class="form-control" type="password" placeholder="Password" name="password">
									</div>
									<div class="row kt-login__extra">
										<div class="col">
											<label class="kt-checkbox">
												<input type="checkbox" name="remember"> Remember me
												<span></span>
											</label>
										</div>
									</div>
									<div class="kt-login__actions">
										<button id="kt_login_signin_submit" class="btn btn-brand btn-elevate kt-login__btn-primary">Login</button>
										<button type="reset" class="btn btn-google btn-elevate kt-login__btn-primary">Setel Ulang</button>
									</div>
								</form>
							</div>
							<div class="kt-login__account">
								<span class="kt-login__account-msg">
									<span class="mr-2"><?php echo $_sys_setting->setting_web_name ?></span> <?php echo date('Y') ?>&nbsp;&copy;&nbsp; <span class="ml-1"> support by:</span> <a href="<?php echo $_sys_setting->setting_web_credit_href ?>" target="_blank" class="ml-2 kt-link"><?php echo $_sys_setting->setting_web_credit ?></a>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- end:: Page -->
	</body>

	<script type="text/javascript">
		$('#form').submit(function(event) {
			$.post($(this).attr('action'), $(this).serialize(), function(response, textStatus, xhr) {
				if (response.status == true) {
					toastr.success(response.msg);
					setTimeout(function() {
						window.location.href = "<?php echo base_url('dashboard') ?>";
					}, 2000);
				} else {
					toastr.error(response.msg);
				}
			}, "json");
			return false;
		});
	</script>

	<script type="text/javascript">
		$(document).ajaxStart(function() { 
		       Pace.restart(); 
		});
	</script>

	<!-- end::Body -->
</html>
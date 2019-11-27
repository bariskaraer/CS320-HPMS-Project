
<?php
    include('bootstrap.php');
    $url=BASE_URL;
?>
<head>
<link href="<?php echo $url; ?>/linkrel.php" rel="stylesheet" type="text/css" />
</head>

    <body  class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading"  >


    	<!-- begin:: Page -->
              	<div class="kt-grid kt-grid--ver kt-grid--root">
              		<div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v1" id="kt_login">
              	<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--desktop kt-grid--ver-desktop kt-grid--hor-tablet-and-mobile">
              		<!--begin::Aside-->
              		<div class="kt-grid__item kt-grid__item--order-tablet-and-mobile-2 kt-grid kt-grid--hor kt-login__aside" style="background-image: url(<?php echo $url; ?>/assets/media//bg/bg-4.jpg);">
              			<div class="kt-grid__item">
              				<a href="#" class="kt-login__logo">
              					<img src="<?php echo $url; ?>/assets/media/logos/logo-4.png">
              				</a>
              			</div>
              			<div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--ver">
              				<div class="kt-grid__item kt-grid__item--middle">
              					<h3 class="kt-login__title">HPMS-PROJECT</h3>
              					<h4 class="kt-login__subtitle">This is a group project for CS320. Our project is called HPMS(Hospital Patient Management System). The names of the participants (coders) are Barış Karaer, Mustafa Alper Sayan and Erdem Gönül.</h4>
              				</div>
              			</div>
              		</div>
              		<!--begin::Aside-->

              		<!--begin::Content-->
              		<div class="kt-grid__item kt-grid__item--fluid  kt-grid__item--order-tablet-and-mobile-1  kt-login__wrapper">
              			<!--begin::Head-->
              			<div class="kt-login__head">
              				<span class="kt-login__signup-label">Don't have an account yet?</span>&nbsp;&nbsp;
              				<a href="#" class="kt-link kt-login__signup-link">Sign Up!</a>
              			</div>
              			<!--end::Head-->

              			<!--begin::Body-->
              			<div class="kt-login__body">

              				<!--begin::Signin-->
              				<div class="kt-login__form">
              					<div class="kt-login__title">
              						<h3>Sign In</h3>
              					</div>

              					<!--begin::Form-->
              					<form class="kt-form" action="" novalidate="novalidate">
              						<div class="form-group">
              							<input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
              						</div>
              						<div class="form-group">
              							<input class="form-control" type="password" placeholder="Password" name="password">
              						</div>
              						<!--begin::Action-->
              						<div class="kt-login__actions">
              							<a href="#" class="kt-link kt-login__link-forgot">
              								Forgot Password ?
              							</a>
              							<button id="kt_login_signin_submit" class="btn btn-primary btn-elevate kt-login__btn-primary">Sign In</button>
              						</div>
              						<!--end::Action-->
              					</form>
              					<!--end::Form-->

              					<!--begin::Divider-->
              					<div class="kt-login__divider">
              						<div class="kt-divider">
              							<span></span>
              							<span>OR</span>
              							<span></span>
              						</div>
              					</div>
              					<!--end::Divider-->

              					<!--begin::Options-->
              					<div class="kt-login__options">
              						<a href="#" class="btn btn-primary kt-btn">
              							<i class="fab fa-facebook-f"></i>
              							Facebook
              						</a>

              						<a href="#" class="btn btn-info kt-btn">
              							<i class="fab fa-twitter"></i>
              							Twitter
              						</a>

              						<a href="#" class="btn btn-danger kt-btn">
              							<i class="fab fa-google"></i>
              							Google
              						</a>
              					</div>
              					<!--end::Options-->
              				</div>
              				<!--end::Signin-->
              			</div>
              			<!--end::Body-->
              		</div>
              		<!--end::Content-->
              	</div>
              </div>



              </div>
              <script src="<?php echo $url; ?>/assets/js/demo1/pages/login/login-1.js" type="text/javascript"></script>
              <script src="<?php echo $url; ?>/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>
              <script src="<?php echo $url; ?>/assets/js/demo1/pages/login/login-1.js" type="text/javascript"></script>
</body>



    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">        <!--end::Fonts -->
    <link href="<?php echo $url; ?>/assets/css/demo1/pages/login/login-1.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />


    <link href="<?php echo $url; ?>/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/quill/dist/quill.snow.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/dual-listbox/dist/dual-listbox.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo $url; ?>/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />        <!--end::Layout Skins -->
    <link rel="shortcut icon" href="<?php echo $url; ?>/assets/media/logos/favicon.ico" />
</html>

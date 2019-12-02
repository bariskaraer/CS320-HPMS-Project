<?php 
 include('../../bootstrap.php');
$url=BASE_URL;
if (empty($_SESSION['course_adminID'])){Header ("Location: ".$url."/minor/login.php");}?>
 <?
	
if ($_POST){
	
	
	
	$doctorName 				= $_POST['doctorName'];
	$doctorSurname 				= $_POST['doctorSurname'];
	$dateofbirth 				= $_POST['dateofbirth'];
	$address 					= $_POST['address'];
	$telephoneNumber 			= $_POST['telephoneNumber'];
	$patients 					= $_POST['patients'];
	$identityNumber 			= $_POST['identityNumber'];


$regDate=date("Y/m/d");

$queryss = $db->prepare("INSERT INTO doctors(doctorName,doctorSurname,dateBirth,address,telephoneNumber,patients,identityNumber) values (?,?,?,?,?,?,?)");
$insertss=$queryss->execute(array($doctorName,$doctorSurname,$dateofbirth,$address,$telephoneNumber,$patients,$identityNumber));




}
if (isset($error))
{
setcookie("error",$error,time()+2);
Header ("Location: ".$_SERVER['HTTP_REFERER']);
}	
	
?>
<!DOCTYPE html>

<html lang="en">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title>Metronic | Wizard v2</title>
		<meta name="description" content="Wizard examples">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--begin::Fonts -->
		<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
		<script>
			WebFont.load({
                google: {"families":["Poppins:300,400,500,600,700","Roboto:300,400,500,600,700"]},
                active: function() {
                    sessionStorage.fonts = true;
                }
            });
        </script>

		<!--end::Fonts -->

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
		
		<style>
	  .dn{ display:none;}
	  </style>
		</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- end:: Header -->
					<? require 'minor/header.php'; ?>
						<!-- end:: Content Head -->
						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid kt-wizard-v3 kt-wizard-v3--white" id="kt_wizard_v3" data-ktwizard-state="step-first">
										<div class="kt-grid__item">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v3__nav">
												<div class="kt-wizard-v3__nav-items">
													<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>1</span> Öğrenci Bilgileri
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</a>
													
													
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v3__wrapper">

											<!--begin: Form Wizard Form-->
						 <?php if (isset($_COOKIE["error"]))	{echo '<div class="alert alert-danger" role="alert">'.alertError($_COOKIE["error"]).'</div>';}?>
                         <?php if (isset($_COOKIE["msg"]))	{echo '<div class="alert alert-black" role="alert">'.alertMsg($_COOKIE["msg"]).'</div>';}?>
											<form class="kt-form" id="kt_form"  method="post"  enctype="multipart/form-data">

												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Please Fill in the Patient Form</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="row"> 
	                                        <div class="col-md-6">   
	                                        	<div class="form-group">
													<label for="complaintinput1">Patient Name : <span class="danger">*</span></label>
													<input type="text" id="complaintinput1" class="form-control " name="patientName" >
													
												</div>
											</div>
	                                        <div class="col-md-6">   
		                                        <div class="form-group">
													<label for="complaintinput2">Patient Surname : <span class="danger">*</span></label>
													<input type="text" id="complaintinput2" class="form-control "  name="patientSurname">
												</div>
											</div>
										</div>
										
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												

												<!--end: Form Wizard Step 4-->

												<!--begin: Form Wizard Step 5-->
												
												<!--end: Form Wizard Step 5-->

												<!--begin: Form Actions -->
												<div class="kt-form__actions">
													<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
														Geri
													</div>
													
													<div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"   data-ktwizard-type="action-submit" onclick="myFunction()">
														Kaydet
													</div>
													
													<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
														İleri
													</div>
												</div>

												<!--end: Form Actions -->
											</form>

											<!--end: Form Wizard Form-->
										</div>
									</div>
								</div>
							</div>
						</div>

						<!-- end:: Content -->
					</div>

					<!-- begin:: Footer -->
					<? require 'minor/footer.php'; ?>

					<!-- end:: Footer -->
				</div>
			</div>
		</div>

		<!-- end:: Page -->

		<!-- begin::Quick Panel -->
		

		<!-- end::Quick Panel -->

		<!-- begin::Scrolltop -->
		<div id="kt_scrolltop" class="kt-scrolltop">
			<i class="fa fa-arrow-up"></i>
		</div>

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->


		<!-- end::Sticky Toolbar -->

		<!-- begin::Demo Panel -->
		
		<!-- end::Demo Panel -->

		<!-- begin::Global Config(global config for global JS sciprts) -->
		<script>
			var KTAppOptions = {
				"colors": {
					"state": {
						"brand": "#5d78ff",
						"dark": "#282a3c",
						"light": "#ffffff",
						"primary": "#5867dd",
						"success": "#34bfa3",
						"info": "#36a3f7",
						"warning": "#ffb822",
						"danger": "#fd3995"
					},
					"base": {
						"label": ["#c5cbe3", "#a1a8c3", "#3d4465", "#3e4466"],
						"shape": ["#f0f3ff", "#d9dffa", "#afb4d4", "#646c9a"]
					}
				}
			};
		</script>

		<!-- end::Global Config -->

	
		<script>
function myFunction() {
Swal.fire(
  'Tebrikler!',
  'Kayıt İşleminiz Gerçekleşti!',
  'success'
)

   var interview_status = $( "#interview_status").val();
			      
 if(interview_status =="Beklemede"){
			          window.location.replace("<? echo $url?>/interview/list/Beklemede");
     		}
     		else if(interview_status =="Olumsuz"){
	     		
	     		window.location.replace("<? echo $url?>/interview/list/Olumsuz");
	     		
     		}else if(interview_status =="DevamEdiyor"){
	     		
	     		window.location.replace("<? echo $url?>/interview/list/DevamEdiyor");
	     		
     		}
}
</script>
		   
    <script> 
	  function ge(a) { return document.getElementById(a); }
    </script>

	</body>

	<!-- end::Body -->
</html>
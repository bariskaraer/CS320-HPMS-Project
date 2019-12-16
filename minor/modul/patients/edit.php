<?php if (empty($_SESSION['adminID'])){Header ("Location: ".$url."/login");}?>
 <?
	
if ($_POST){
	
	
	
	$patientName 				= $_POST['patientName'];
	$patientSurname 			= $_POST['patientSurname'];
	$dateofbirth 				= $_POST['dateOfBirth'];
	$patientAge 				= $_POST['patientAge'];
	$address 					= $_POST['address'];
	$telephoneNumber 			= $_POST['telephoneNumber'];
	$treatmentPlan 				= $_POST['treatmentPlan'];
	$bloodType 					= $_POST['bloodType'];
	$medicineProblems 			= $_POST['medicineProblems'];
	$identityNumber 			= $_POST['identityNumber'];


$regDate=date("Y/m/d");


$queryss = $db->prepare("UPDATE patients SET patientName=?,patientSurname=?,patientAge=?,dateOfBirth=?,bloodType=?,patientAddress=?,telephoneNumber=?,patientTreatmentPlan=?,medicineProblems=?,identityNumber=? ");
$queryss->execute(array($patientName,$patientSurname,$patientAge,$dateofbirth,$bloodType,$address,$telephoneNumber,$treatmentPlan,$medicineProblems,$identityNumber));
Header ("Location: $url/patients/list");






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

		<!--begin::Page Custom Styles(used by this page) -->
		<link href="<? echo $url ?>/assets/css/demo1/pages/general/wizard/wizard-3.css" rel="stylesheet" type="text/css" />

		<!--end::Page Custom Styles -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<? echo $url ?>/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<? echo $url ?>/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<? echo $url ?>/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<? echo $url ?>/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<? echo $url ?>/assets/media/logos/favicon.ico" />	
		
		<style>
	  .dn{ display:none;}
	  </style>
		</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->
        <?

$patientsID=$r3;
$query = $db->prepare("Select * from doctors where doctorsID=?");
$query->execute(array($patientsID));
if($row = $query->fetch())
{
    
    $patientName 				= $row['patientName'];
	$patientSurname 				= $row['patientSurname'];

	$patientAge 					= $row['patientAge'];
	$dateOfBirth 					= $row['dateOfBirth'];

	$bloodType 				= $row['bloodType'];
	$patientAddress 					= $row['patientAddress'];
	$telephoneNumber 			= $row['telephoneNumber'];
	$patientTreatmentPlan 					= $row['patientTreatmentPlan'];
    $medicineProblems 			= $row['medicineProblems'];
    $identityNumber 			= $row['identityNumber'];
    
}											
    ?>
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
																<span>1</span> Patient Information
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</a>

													<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>2</span> Personal Information
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</a>

													<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>3</span> Medical Information
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
															<input type="text" id="complaintinput1" class="form-control " name="patientName" value="<? echo $patientName ?>">
															
														</div>
													</div>

													<div class="col-md-6">   
														<div class="form-group">
															<label for="complaintinput2">Patient Surname : <span class="danger">*</span></label>
															<input type="text" id="complaintinput2" class="form-control "  name="patientSurname" value="<? echo $patientSurname ?>">
														</div>
													</div>
										</div>
										
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Please Fill in the Patient Form</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="row"> 
															
													<div class="col-md-6">   
														<div class="form-group">
															<label for="complaintinput1">Date of Birth : <span class="danger">*</span></label>
															<input type="date" id="complaintinput1" class="form-control " name="dateOfBirth" value="<? echo $dateOfBirth ?>">
															
														</div>
													</div>

													<div class="col-md-6">   
														<div class="form-group">
															<label for="complaintinput1">Age : <span class="danger">*</span></label>
															<input type="number" id="complaintinput1" class="form-control " name="patientAge" value="<? echo $patientAge ?>">
															
														</div>
													</div>

													
															</div>
															<div class="row"> 
															
													<div class="col-md-6">   
														<div class="form-group">
															<label for="complaintinput1">Address : <span class="danger">*</span></label>
															<input type="text" id="complaintinput1" class="form-control " name="address" value="<? echo $patientAddress ?>">
															
														</div>
													</div>

													<div class="col-md-6">   
														<div class="form-group">
															<label for="complaintinput2">Telephone Number : <span class="danger">*</span></label>
															<input type="number" id="complaintinput2" class="form-control "  name="telephoneNumber" value="<? echo $telephoneNumber ?>">
														</div>
													</div>
															</div>
															
										
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Please Fill in the Patient Form</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">

															<div class="row"> 
															
															<div class="col-md-6">   
																<div class="form-group">
																	<label for="complaintinput1">Treatment Plan : <span class="danger">*</span></label>
																	<input type="text" id="complaintinput1" class="form-control " name="treatmentPlan" value="<? echo $patientTreatmentPlan ?>">
																	
																</div>
															</div>
		
															<div class="col-md-6">   
																<div class="form-group">
																	<label for="complaintinput2">Medicine Problems : <span class="danger">*</span></label>
																	<input type="text" id="complaintinput2" class="form-control "  name="medicineProblems" value="<? echo $medicineProblems ?>">
																</div>
															</div>
															
															</div>


															<div class="row"> 

															<div class="col-md-6">   
																<div class="form-group">
																	<label for="wlocation2"><span style="color: red">*</span>Blood Type : <span class="danger">*</span> </label>

										                                   <select class="custom-select form-control required" name="bloodType" >

																					<option value="<? echo $bloodType ?>"><? echo $bloodType ?></option> 

																					<option value="A+">A+</option> 

																					<option value="A-">A-</option> 

																					<option value="B+">B+</option> 

																					<option value="B-">B-</option>

																					<option value="0+">0+</option> 

																					<option value="0-">0-</option>

																					<option value="AB+">AB+</option> 

																					<option value="AB-">AB-</option>

																				

																			</select>
																</div>
															</div>

															</div>
															
															
										
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 3-->

												<!--begin: Form Wizard Step 4-->
												

												<!--end: Form Wizard Step 4-->

												<!--begin: Form Wizard Step 5-->
												
												<!--end: Form Wizard Step 5-->

												<!--begin: Form Actions -->
												<div class="kt-form__actions">
													<div class="btn btn-secondary btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-prev">
														Backwards
													</div>
													
													<div class="btn btn-success btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u"   data-ktwizard-type="action-submit" onclick="myFunction()">
														Submit
													</div>
													
													<div class="btn btn-brand btn-md btn-tall btn-wide kt-font-bold kt-font-transform-u" data-ktwizard-type="action-next">
														Forwards
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

		<!--begin:: Global Mandatory Vendors -->
<script src="<? echo $url ?>/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<script src="<? echo $url ?>/assets/vendors/general/jquery-form/dist/jquery.form.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/block-ui/jquery.blockUI.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/js/vendors/bootstrap-datepicker.init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/js/vendors/bootstrap-timepicker.init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/js/vendors/bootstrap-switch.init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/select2/dist/js/select2.full.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/ion-rangeslider/js/ion.rangeSlider.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/typeahead.js/dist/typeahead.bundle.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/handlebars/dist/handlebars.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/inputmask/dist/jquery.inputmask.bundle.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/inputmask/dist/inputmask/inputmask.date.extensions.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/inputmask/dist/inputmask/inputmask.numeric.extensions.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/nouislider/distribute/nouislider.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/owl.carousel/dist/owl.carousel.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/autosize/dist/autosize.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/clipboard/dist/clipboard.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/dropzone/dist/dropzone.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/summernote/dist/summernote.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/markdown/lib/markdown.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-markdown/js/bootstrap-markdown.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/js/vendors/bootstrap-markdown.init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/js/vendors/bootstrap-notify.init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/js/vendors/jquery-validation.init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/toastr/build/toastr.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/raphael/raphael.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/morris.js/morris.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/chart.js/dist/Chart.bundle.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/vendors/bootstrap-session-timeout/dist/bootstrap-session-timeout.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/vendors/jquery-idletimer/idle-timer.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/waypoints/lib/jquery.waypoints.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/counterup/jquery.counterup.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/es6-promise-polyfill/promise.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/sweetalert2/dist/sweetalert2.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/js/vendors/sweetalert2.init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<? echo $url ?>/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<? echo $url ?>/assets/js/demo1/pages/wizard/wizard-3.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
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
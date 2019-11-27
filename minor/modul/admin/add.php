<?php if (empty($_SESSION['course_adminID'])){Header ("Location: ".$url."/giris");}?>
<?php

if ($_POST){

$name  		= $_POST["name"];
$surname  	= $_POST["surname"];
$phone		=$_POST["phone"];
$email		=$_POST["email"];
$password	=$_POST["password"];
$authorization		=$_POST["authorization"];
$courseID		=$_POST["courseID"];


    
// image mime to be checked against
    $imagetype = array(image_type_to_mime_type(IMAGETYPE_GIF), image_type_to_mime_type(IMAGETYPE_JPEG),
        image_type_to_mime_type(IMAGETYPE_PNG), image_type_to_mime_type(IMAGETYPE_BMP));
 
    $error_msg = "";
    $imageUploadERROR = FALSE;
    $myfile = $_FILES["f"];
    $allimg=null;
  $base64 = "";
    $css = "";
    $tag = "";
    
    //multiple image convert to base64 and save mysql
    for ($i = 0; $i < count($myfile["name"]); $i++) {
 
        if ($myfile["name"][$i] <> "" && $myfile["error"][$i] == 0) {
            // uploaded file is OK
 
            if (in_array($myfile["type"][$i], $imagetype)) {
                // get the extention of the file
              
        $file = rand(0, 10000000).$myfile['name'][$i];
        if (move_uploaded_file($myfile['tmp_name'][$i], $file)) {
            if($fp = fopen($file,"rb", 0))
            {
               $picture = fread($fp,filesize($file));
               fclose($fp);
               // base64 encode the binary data, then break it
               // into chunks according to RFC 2045 semantics
               $base64 = base64_encode($picture);
               
            }
        }
                    
               
            } 
        }
 
     
        
    }
		
$iparr []=$base64;

$resimler="";
  foreach ($iparr as $key => $resim){ 
	  
		  $resimler.=strval($resim);
		  $resimler.="|";
	 
  }

$logo=rtrim($resimler,"|");




	
		// Kontroller
if (empty($name) || empty($surname) || empty($phone) || empty($email) || empty($password) || empty($authorization) )
{
	$error= 'Boş alan bırakılamaz. Lütfen tekrar deneyin.';
}
elseif(mb_strlen($name) > 30)	{ $error= 'Ad Soyad 30 karakterden fazla olamaz.';}
elseif(mb_strlen($name) < 2)	{ $error= 'Ad Soyad 2 karakterden az olamaz.';}
elseif(mb_strlen($phone) < 11)		{ $error= 'Telefon Numranız 11 haneden az olamaz.';}
elseif(mb_strlen($phone) > 11)		{ $error= 'Telefon Numranız 11 haneden fazla olamaz.';}

	else
	{
		
		
		$regDate=date("Y/m/d H:m:s");
					
	$query = $db->prepare("INSERT INTO course_admin(courseID, name, surname, phone, email, password, status, regDate, authorization, image ) 
	values (?,?,?,?,?,?,?,?,?,?)");
	
$insert=$query->execute(array($courseID,ucfirst($name),ucfirst($surname),$phone,$email,sha1(md5($password)),1,$regDate,$authorization,$logo));
		


	Header ("Location: $url/admins/add");


	
	}
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
		<title><? echo $wpName ?></title>
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
		<link href="<? echo $url ?>/assets/app/custom/wizard/wizard-v2.default.css" rel="stylesheet" type="text/css" />

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
		<link href="<? echo $url ?>/assets/vendors/custom/vendors/fontawesome5/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<? echo $url ?>/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<? echo $url ?>/assets/demo/default/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/demo/default/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/demo/default/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="<? echo $url ?>/assets/demo/default/skins/aside/dark.css" rel="stylesheet" type="text/css" />

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

		<!-- end:: Header -->
					<? require 'minor/header.php'; ?>
						<!-- end:: Content Head -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							<div class="kt-portlet">
								<div class="kt-portlet__body kt-portlet__body--fit">
									<div class="kt-grid  kt-wizard-v2 kt-wizard-v2--white" id="kt_wizard_v2" data-ktwizard-state="step-first">
										<div class="kt-grid__item kt-wizard-v2__aside">

											<!--begin: Form Wizard Nav -->
											<div class="kt-wizard-v2__nav">
												<div class="kt-wizard-v2__nav-items">
													<a class="kt-wizard-v2__nav-item" href="#" data-ktwizard-type="step" data-ktwizard-state="current">
														<div class="kt-wizard-v2__nav-body">
															<div class="kt-wizard-v2__nav-icon">
																<i class="flaticon-book"></i>
															</div>
															<div class="kt-wizard-v2__nav-label">
																<div class="kt-wizard-v2__nav-label-title">
																	Yönetici Bilgileri
																</div>
															</div>
														</div>
													</a>
													
												</div>
											</div>

											<!--end: Form Wizard Nav -->
										</div>
										<div class="kt-grid__item kt-grid__item--fluid kt-wizard-v2__wrapper">

											<!--begin: Form Wizard Form-->
						 <?php if (isset($_COOKIE["error"]))	{echo '<div class="alert alert-danger" role="alert">'.alertError($_COOKIE["error"]).'</div>';}?>
                         <?php if (isset($_COOKIE["msg"]))	{echo '<div class="alert alert-black" role="alert">'.alertMsg($_COOKIE["msg"]).'</div>';}?>
											<form class="kt-form" method="post"  enctype="multipart/form-data">
									

												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v2__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Personel Bilgilerini Giriniz</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v2__form">
  
															<div class="form-group row">
																<label class="col-md-3 label-control">Resim Seç</label>
																<div class="col-md-9">
																	<label id="projectinput8" class="file center-block">
																		<input type="file" name="f[]" id="file">
																		<span class="file-custom"></span>
																	</label>
																</div>
															</div>
															<div class="form-group">
																<label for="complaintinput1">İsim</label>
																<input type="text"  class="form-control round" name="name">
																<input type="hidden"  class="form-control round" name="courseID" value="<? echo $dt_courseID ?>">
															</div>
							
															<div class="form-group">
																<label for="complaintinput2">Soyisim</label>
																<input type="text" id="complaintinput2" class="form-control round"  name="surname">
															</div>
															
															<div class="form-group">
																<label for="complaintinput2">Telefon Numarası</label>
																<input type="text" id="complaintinput2" class="form-control round" placeholder="05XXXXXXXX" name="phone">
															</div>
							
															<div class="form-group">
																<label for="complaintinput2">Email</label>
																<input type="text" id="complaintinput2" class="form-control round"  name="email" value="@kurscrm.com">
															</div>
							
															<div class="form-group">
																<label for="complaintinput2">Şifre</label>
																<input type="text" id="complaintinput2" class="form-control round" name="password">
															</div>
							
							
															<div class="form-group ">
																<label for="projectinput5">Yetkilendirme</label>
																<select id="projectinput5"  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Görüşme Durumu" data-original-title="" title="" name="authorization">
																	<option value="">Lütfen Seçip Yapınız</option>
																	<option value="1">Yönetici</option>
																	<option value="2">Eğitim Uzmanı</option>
																	<option value="3">Eğitim Koordinatorü</option>
																	<option value="4">Mali İşler Sorumlusu</option>
																	<option value="5">Öğretmen</option>
																</select>
															</div>										
															
															
															
															
															
															
														</div>
													</div>
												</div>

													<button type="submit" class="btn btn-success">
														<i class="la la-check-square-o"></i> Kaydet
													</button>
												
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
		

		<!-- end::Scrolltop -->

		<!-- begin::Sticky Toolbar -->
		

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

<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<? echo $url ?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Scripts(used by this page) -->

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>
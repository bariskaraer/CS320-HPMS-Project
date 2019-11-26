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
		<title><? echo $wpName ?></title>
		<meta name="description" content="View contact example">
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

		<!--end::Fonts -->

		<!--begin:: Global Mandatory Vendors -->
		<link href="<? echo  $url ?>/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Mandatory Vendors -->

		<!--begin:: Global Optional Vendors -->
		<link href="<? echo  $url ?>/assets/vendors/general/tether/dist/css/tether.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-datepicker/dist/css/bootstrap-datepicker3.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-datetime-picker/css/bootstrap-datetimepicker.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-select/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-switch/dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/select2/dist/css/select2.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/ion-rangeslider/css/ion.rangeSlider.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/nouislider/distribute/nouislider.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/owl.carousel/dist/assets/owl.carousel.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/owl.carousel/dist/assets/owl.theme.default.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/dropzone/dist/dropzone.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/summernote/dist/summernote.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/bootstrap-markdown/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/animate.css/animate.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/toastr/build/toastr.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/morris.js/morris.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/sweetalert2/dist/sweetalert2.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/socicon/css/socicon.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/custom/vendors/line-awesome/css/line-awesome.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/custom/vendors/flaticon/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/custom/vendors/flaticon2/flaticon.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/vendors/general/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css" />

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Styles(used by all pages) -->
		<link href="<? echo  $url ?>/assets/css/demo1/style.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Global Theme Styles -->

		<!--begin::Layout Skins(used by all pages) -->
		<link href="<? echo  $url ?>/assets/css/demo1/skins/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/css/demo1/skins/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/css/demo1/skins/brand/dark.css" rel="stylesheet" type="text/css" />
		<link href="<? echo  $url ?>/assets/css/demo1/skins/aside/dark.css" rel="stylesheet" type="text/css" />

		<!--end::Layout Skins -->
		<link rel="shortcut icon" href="<? echo  $url ?>/assets/media/logos/favicon.ico" />
		<style>
	  .dn{ display:none;}
	  
	  
/* sticky button */	
	
#feedback1 {
    height: 0px;
    width: 85px;
    position: fixed;
    right: 0;
    top: 30%;
    z-index: 1000;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}

#feedback1 a {
	display: block;
	background:url(pc.png) no-repeat;
	height: 52px;
	width: 155px;	
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;

}
#feedback1 a:hover {
	background:url(pc-over.png) no-repeat;
}

#feedback {
	height: 0px;
	width: 85px;
	position: fixed;
	right: 0;
	top: 50%;
	z-index: 1000;
	transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
#feedback a {
	display: block;
	background:#000;
	height: 52px;
	padding-top: 10px;
	width: 155px;
	text-align: center;
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;
}
#feedback a:hover {
	background:#00495d;
}
	  
/* sticky button */	
	
#message1 {
    height: 0px;
    width: 85px;
    position: fixed;
    right: 0;
    top: 60%;
    z-index: 1000;
    transform: rotate(-90deg);
    -webkit-transform: rotate(-90deg);
    -moz-transform: rotate(-90deg);
    -o-transform: rotate(-90deg);
    filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}

##message1 a {
	display: block;
	background:url(pc.png) no-repeat;
	height: 52px;
	width: 155px;	
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;

}
#message1 a:hover {
	background:url(pc-over.png) no-repeat;
}

#message {
	height: 0px;
	width: 85px;
	position: fixed;
	right: 0;
	top: 80%;
	z-index: 1000;
	transform: rotate(-90deg);
	-webkit-transform: rotate(-90deg);
	-moz-transform: rotate(-90deg);
	-o-transform: rotate(-90deg);
	filter: progid:DXImageTransform.Microsoft.BasicImage(rotation=3);
}
#message a {
	display: block;
	background:#f90;
	height: 52px;
	padding-top: 10px;
	width: 155px;
	text-align: center;
	color: #fff;
	font-family: Arial, sans-serif;
	font-size: 17px;
	font-weight: bold;
	text-decoration: none;
}
#message a:hover {
	background:#f90;
}

/* enquiry form */
	  </style>
	</head>

	<!-- end::Head -->

	<!-- begin::Body -->
	<body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--fixed kt-subheader--enabled kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

		<!-- begin:: Page -->

		<!-- begin:: Header Mobile -->
		<? require 'minor/header.php'; ?>

					
						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">
							
							  	<div id="feedback">

			<a data-id="<? echo $userID ?>"   class="btn btn-label-success btn-sm btn-upper sticky ">Kalite</a>
		</div>
  
    	<div id="message">

			<a data-id="<? echo $userID ?>"   class="btn btn-label-primary btn-sm btn-upper sms ">SMS</a>
		</div>
	        <?

		
	
	$students_id=$r3;
	$query = $db->prepare("Select * from students where students_id=?");
	$query->execute(array($students_id));
	if($row = $query->fetch())
	{
		
		
			$students_no 		= $row['student_number'];
			$students_name 		= $row['name'];
			$students_surname 	= $row['surname'];
			$students_tckn		= $row['tckn'];
			$students_bDate		= $row['bDate'];
			$students_phone 	= $row['phone'];
			$students_emegerncy = $row['emergency_phone'];
			$students_email		= $row['email'];
			$students_home 		= $row['home_phone'];
			$students_cell 		= $row['cell_phone'];
			$students_city 		= $row['city'];
			$students_district	= $row['district'];
			$students_address	= $row['address'];
			$interviewer		= $row['interviewer'];
			$registerer			= $row['registerer'];
			$branch_name		= $row['branch_name'];
			$gender				= $row['gender'];
					
			$image	=$row["image"];
																
						
			$image = split ("\|", $image);					
												
		}


	$query = $db->prepare("Select * from interview where students_id=?");
	$query->execute(array($students_id));
	if($row = $query->fetch())
	{
		
		
			$edu_type =$row["edu_type"];
			$edu_course =$row["edu_course"];
			$course_package =$row["course_package"];
			$edu_season =$row["edu_season"];
			$edu_level =$row["edu_level"];
			$interview_status =$row["interview_status"];	
			$interview_type =$row["interview_type"];	
			$interview_date =$row["interview_date"];	
			$education_desc =$row["education_desc"];
			
			
			$interview_reason =$row["interview_reason"];
			$appoDate =$row["appoDate"];			
			$newinterview_type =$row["newinterview_type"];
			$interview_detail =$row["interview_detail"];		
												
		}


	$query = $db->prepare("Select * from custodians where students_id=?");
	$query->execute(array($students_id));
	if($row = $query->fetch())
	{
		
		
			$custodian_name		= $row['custodian_name'];
			$custodian_surname	= $row['custodian_surname'];
			$custodian_phone	= $row['custodian_phone'];
			$custodian_tckn		= $row['custodian_tckn'];
			$custodian_mail		= $row['custodian_mail'];
			$custodian_job		= $row['custodian_job'];
			$proximity			= $row['proximity'];
			$custodian_sms		= $row['custodian_sms'];
									
												
		}
?>

							<!--Begin:: Portlet-->
							<div class="kt-portlet">
								<div class="kt-portlet__body">
									<div class="kt-widget kt-widget--user-profile-3">
										<div class="kt-widget__top">
											<div class="kt-widget__media">
											<?		
										if ($gender=='Kadın'){echo '<img src="'.$url.'/assets/media/users/100_4.jpg"  >';}
										elseif ( $gender=='Erkek'){echo '<img src="'.$url.'/assets/media/users/100_1.jpg"  >';}
										?>
											</div>
											<div class="kt-widget__content">
												<div class="kt-widget__head">
													<div class="kt-widget__user">
														<a  class="kt-widget__username">
																<? echo $students_name ?> <? echo $students_surname ?>
														</a>
													</div>
													<div class="kt-widget__action">
														
														<a href="<? echo $url ?>/interview/new/<? echo $students_id ?>" class="btn btn-label-brand btn-sm btn-upper " >Yeni Görüşme</a>
														
														<input type="hidden" id="course_adminID" value="<? echo $_SESSION['course_adminID'] ?>">
														<a  href="<? echo $url ?>/users/register/<? echo $students_id ?>"class="btn btn-label-success btn-sm btn-upper">Kayıt Et</a>
														<a class="btn btn-label-danger btn-sm btn-upper">Aday Sil</a>
														
													</div>
												</div>
												<div class="kt-widget__subhead">
													<a style="font-size: 16px"><i class="flaticon2-new-email"></i><? echo $students_email ?> </a>
													<a style="font-size: 16px"><i class="flaticon2-calendar-3"></i><? echo $students_phone ?> </a>
													
													<input type="hidden" id="phone" value="<? echo $students_phone ?>">
												</div>
												
											</div>
										</div>
									</div>
								</div>
							</div>

							<!--End:: Portlet-->
							<div class="row">
								
								
								<div class="col-xl-4">
								<? if ($interview_status !='DevamEdiyor'){ ?>
									<!--Begin:: Portlet-->
									<div class="kt-portlet kt-portlet--head-noborder">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title  kt-font-danger">
													Durum Notu
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--success"><? echo $interview_status ?></span>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-top">
											<div class="kt-section kt-section--space-sm">
												<? echo  $interview_reason ?>
											</div>
										</div>
									</div>
									
								<?} elseif ($interview_status =='DevamEdiyor'){ ?>
									<!--Begin:: Portlet-->
									<div class="kt-portlet kt-portlet--head-noborder">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title  kt-font-danger">
													En Son Verilen Görüşme Süreci
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<span class="kt-badge kt-badge--bolder kt-badge kt-badge--inline kt-badge--success"><? echo $interview_status ?></span>
											</div>
										</div>
										<div class="kt-portlet__body kt-portlet__body--fit-top">
											<div class="kt-section kt-section--space-sm">
												Görüşme Tarihi : <? echo  $appoDate ?>
											</div>
											<div class="kt-section kt-section--space-sm">
												Görüşme Türü : <? echo  $newinterview_type ?>
											</div>
											<div class="kt-section kt-section--space-sm">
												Görüşme Notu : <? echo  $interview_detail ?>
											</div>
										</div>
									</div>
									<? } ?>
									
									<!--End:: Portlet-->

									<!--Begin:: Portlet-->
									

									<!--End:: Portlet-->

									<!--Begin:: Portlet-->
									<div class="kt-portlet">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Veli Bilgileri
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
										</div>
										</div>
										<div class="kt-form kt-form--label-right">
											<div class="kt-portlet__body">
												<div class="form-group form-group-xs row">
													<label class="col-4 col-form-label">Ad Soyad:</label>
													<div class="col-8">
														<span class="form-control-plaintext kt-font-bolder"><? echo $custodian_name ?> <? echo $custodian_surname ?></span>
													</div>
												</div>
												<div class="form-group form-group-xs row">
													<label class="col-4 col-form-label">Email:</label>
													<div class="col-8">
														<span class="form-control-plaintext kt-font-bolder"><? echo $custodian_mail ?></span>
													</div>
												</div>
												<div class="form-group form-group-xs row">
													<label class="col-4 col-form-label">Telefon:</label>
													<div class="col-8">
														<span class="form-control-plaintext"><span class="kt-font-bolder"><? echo $custodian_phone ?></span></span>
													</div>
												</div>
												<div class="form-group form-group-xs row">
													<label class="col-4 col-form-label">SMS Telefonu:</label>
													<div class="col-8">
														<span class="form-control-plaintext kt-font-bolder"><? echo $custodian_sms ?></span>
													</div>
												</div>
												<div class="form-group form-group-xs row">
													<label class="col-4 col-form-label">Yakınlık:</label>
													<div class="col-8">
														<span class="form-control-plaintext kt-font-bolder">
															<? echo $proximity ?>
														</span>
													</div>
												</div>
												<div class="form-group form-group-xs row">
													<label class="col-4 col-form-label">TCKN:</label>
													<div class="col-8">
														<span class="form-control-plaintext kt-font-bolder">
															<? echo $custodian_tckn ?>
														</span>
													</div>
												</div>
											</div>
											<div class="kt-portlet__foot">
												<div class="kt-form__actions kt-space-between">
													<a href="#" class="btn btn-label-brand btn-sm btn-bold">SMS Gönder</a>
													<a href="#" class="btn btn-label-danger btn-sm btn-bold">Bildirim Gönder</a>
												</div>
											</div>
										</div>
									</div>

									<!--End:: Portlet-->
								</div>
								<div class="col-xl-8">

									<!--Begin:: Portlet-->
									<div class="kt-portlet kt-portlet--tabs">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-space-lg nav-tabs-line nav-tabs-bold nav-tabs-line-3x nav-tabs-line-brand" role="tablist">
													
													<li class="nav-item">
														<a class="nav-link" data-toggle="tab" href="#kt_apps_contacts_view_tab_2" role="tab">
															<i class="flaticon2-note"></i> Görüşme Bilgileri
														</a>
													</li>
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_apps_contacts_view_tab_1" role="tab">
															<i class="flaticon2-time"></i> Öğrenci Randevu Günlüğü
														</a>
													</li>
													
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content kt-margin-t-20">

												<!--Begin:: Tab Content-->
												<div class="tab-pane active" id="kt_apps_contacts_view_tab_1" role="tabpanel">
													
													<div class="kt-notes kt-scroll kt-scroll--pull" data-scroll="true" style="height: 700px;">
														
														<?
															$students_id =$r3;
			                      $query = $db->prepare("SELECT * FROM interview_log where students_id=?  order by interview_logID DESC" );
			                      $query->execute(array($students_id));
			                      if ( $query->rowCount() ){
			                      foreach( $query as $row ){
				                      
				                      
				                      $course_adminID=$row['course_adminID'];
				                      $intStatus=$row['interview_status'];
				                      $intReason=$row['interview_reason'];
				                      $intDetail=$row['interview_detail'];
				                      $intSeazon=$row['interview_season'];
				                      $intType=$row['interview_type'];
				                      
				                      
				                      $appoDates=$row['appoDate'];
				                      $newinterview_types=$row['newinterview_type'];
				                      $status=$row['status'];
				                      $addDate=$row['addDate'];
				                      
									if($intReason==""){$intReason="Belirtilmemiş";}
									if($intReason!=""){$intReason=$intReason;}
									
									if($appoDates==""){$appoDate="Belirtilmemiş";}
									if($appoDates!=""){$appoDates=$appoDates;}
									                 
				              
										
									if($newinterview_types==""){$newinterview_types="Belirtilmemiş";}
									if($newinterview_types!=""){$$newinterview_types=$newinterview_type;}
										
										
										
										
										
										  $querys = $db->prepare("SELECT * FROM course_admin where course_adminID=? " );
			                      $querys->execute(array($course_adminID));
			                      if ( $querys->rowCount() ){
			                      foreach( $querys as $rows ){
				                      
				                     	$names 		=$rows["name"];
										$surnames 	=$rows["surname"];
										$image 	=$rows["image"];
										
										$images = split ("\|", $image);
										
											}
										}
										
										
									?>
														
														
														
														<div class="kt-notes__items">
															<div class="kt-notes__item">
																<div class="kt-notes__media">
																	<img class="kt-hidden-" src="data:image/jpg;base64,<? echo $images[0] ?>"  alt="image">
																	<span class="kt-notes__icon kt-font-boldest kt-hidden">
																		<i class="flaticon2-cup"></i>
																	</span>
																	<h3 class="kt-notes__user kt-font-boldest kt-hidden">
																		
																	</h3>
																</div>
																<div class="kt-notes__content">
																	<div class="kt-notes__section">
																		<div class="kt-notes__info">
																			<a href="<? $url ?>/admins/profile/<? echo $course_adminID ?>" class="kt-notes__title">
																				Yetkili : <? echo $names ?> <? echo $surnames ?>
																			</a>
																			<span class="kt-notes__desc">
																				<? echo $addDate ?>
																			</span>
																			<span class="kt-badge kt-badge--success kt-badge--inline"><? echo $intStatus ?></span>
																		</div>
																		
																	</div>
																	
																	
																	
																	
																	
																	
														<? if($interview_status == 'DevamEdiyor') {?>
														
														
														<span class="kt-notes__body">
																		Bir Sonraki	Görüşme Tarihi : <? echo $appoDates ?>
																	</span>
																	<span class="kt-notes__body">
																		Bir Sonraki	Görüşme Türü   : <? echo $newinterview_types ?>
																	</span>
																	<span class="kt-notes__body">
																		Bir Sonraki	Görüşme Notu   : <? echo $intDetail ?>
																	</span>
														<? } elseif($interview_status == 'Bekelemede') {?>
														
															
														<span class="kt-notes__body">
																		Bekleme Sebebi : <? echo $intReason ?>
																	</span>
																	
													<? } elseif($interview_status == 'Olumsuz') {?>
													
														
														<span class="kt-notes__body">
																		Olumsuzluk Sebebi : <? echo $intReason ?>
																	</span>
														
													<? } ?>
																	
																	
																</div>
															</div>
															
														</div>
														
														
                                        <?php };}else {echo '<tr><td colspan="9" class="null">Henüz Görüşme Bulunmamaktadır.</td></tr>';} ?>
													</div>
												</div>

												<!--End:: Tab Content-->

												<!--Begin:: Tab Content-->
												<div class="tab-pane" id="kt_apps_contacts_view_tab_2" role="tabpanel">
													<div class="kt-notification">
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Şube
																</div>
																<div class="kt-notification__item-time">
																	<? echo $branch_name ?>
																</div>
															</div>
														</a>
														<a  class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Sezon
																</div>
																<div class="kt-notification__item-time">
																	<? echo $edu_season ?>
																</div>
															</div>
														</a>
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Kurs Türü
																</div>
																<div class="kt-notification__item-time">
																	<? echo $edu_type ?>
																</div>
															</div>
														</a>
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Kurs
																</div>
																<div class="kt-notification__item-time">
																	<? echo $edu_course ?>
																</div>
															</div>
														</a>
														<a  class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Seviye
																</div>
																<div class="kt-notification__item-time">
																	<? echo $edu_level ?>
																</div>
															</div>
														</a>
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Görüşme Türü
																</div>
																<div class="kt-notification__item-time">
																	<? echo $interview_type ?>
																</div>
															</div>
														</a>
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Görüşme Tarihi
																</div>
																<div class="kt-notification__item-time">
																	<? echo $interview_date ?>
																</div>
															</div>
														</a>
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																	Görüşme Durumu
																</div>
																<div class="kt-notification__item-time">
																	<? echo $interview_status ?>
																</div>
															</div>
														</a>
														
														<? if($interview_status == 'DevamEdiyor') {?>
														
														
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																Bir Sonraki	Görüşme Tarihi
																</div>
																<div class="kt-notification__item-time">
																	<? echo $appoDate ?>
																</div>
															</div>
														</a>
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																Bir Sonraki	Görüşme Türü
																</div>
																<div class="kt-notification__item-time">
																	<? echo $newinterview_type ?>
																</div>
															</div>
														</a>
														
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																Bir Sonraki	Görüşme Notu
																</div>
																<div class="kt-notification__item-time">
																	<? echo $interview_detail ?>
																</div>
															</div>
														</a>
														<? } elseif($interview_status == 'Bekelemede') {?>
														
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																Bekleme Sebebi
																</div>
																<div class="kt-notification__item-time">
																	<? echo $interview_reason ?>
																</div>
															</div>
														</a>
														
													<? } elseif($interview_status == 'Olumsuz') {?>
													
														<a class="kt-notification__item">
														
															<div class="kt-notification__item-details">
																<div class="kt-notification__item-title">
																Olumsuzluk Sebebi
																</div>
																<div class="kt-notification__item-time">
																	<? echo $interview_reason ?>
																</div>
															</div>
														</a>
														
													<? } ?>
													</div>
												</div>

												<!--End:: Tab Content-->

												<!--Begin:: Tab Content-->
												

												<!--End:: Tab Content-->
											</div>
										</div>
									</div>

									<!--End:: Portlet-->
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
		

		<!--ENd:: Chat-->

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
		<script src="<? echo  $url ?>/assets/vendors/general/jquery/dist/jquery.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/popper.js/dist/umd/popper.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/js-cookie/src/js.cookie.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/moment/min/moment.min.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/tooltip.js/dist/umd/tooltip.min.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/perfect-scrollbar/dist/perfect-scrollbar.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/sticky-js/dist/sticky.min.js" type="text/javascript"></script>
		<script src="<? echo  $url ?>/assets/vendors/general/wnumb/wNumb.js" type="text/javascript"></script>


		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<? echo  $url ?>/assets/js/demo1/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

	

  <script type="text/javascript">
    (function () {
	    
	   
		  var phone = "90"+$( "#phone" ).val();	 

	    
        var options = {
            whatsapp: phone, // WhatsApp numaranızı buraya girin
            call_to_action: "Merhaba.", // Görünecek metin
            position: "right", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
		<!--end::Page Scripts -->
	</body>

	<!-- end::Body -->
</html>
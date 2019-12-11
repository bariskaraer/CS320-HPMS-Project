<?php if (empty($_SESSION['course_adminID'])){Header ("Location: ".$url."/giris");}?>
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
		<meta charset="utf-8" />
		<title>Metronic | Row Details</title>
		<meta name="description" content="Row details examples">
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
							<div class="alert alert-light alert-elevate" role="alert">
								<div class="alert-icon"><i class="flaticon-warning kt-font-brand"></i></div>
								<div class="alert-text">
									The foundation for DataTables is progressive enhancement, so it is very adept at reading table information directly from the DOM. This example shows how easy it is to add searching, ordering and paging to your HTML table by simply
									running DataTables on it.
									See official documentation <a class="kt-link kt-font-bold" href="https://datatables.net/examples/data_sources/dom.html" target="_blank">here</a>.
								</div>
							</div>
							
							<?  if($r3=='DevamEdiyor'){ ?>
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Görüşmesi Devam Eden Aday Öğrenci Listesi
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												
												<a href="<? echo $url ?>/interview/add" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													Yeni Aday Ekle
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
					<div class="kt-section">
												<div class="kt-section__content">
													<table class="table table-bordered">
														<thead>
															<tr>
																<th>complaintID</th>
																<th>complaintPatientNo</th>
																<th>header</th>
																<th>message</th>
																				
															</tr>
														</thead>
														<tbody>
															<?
																
																
																$query = $db->prepare("SELECT * from complaints");
																$query->execute(array());
																if ( $query->rowCount() ){
																foreach( $query as $rows ){
																	
																	$complaintID		= $rows['complaintID'];
																	$complaintPatientNo		= $rows['complaintPatientNo'];
																	$header= $rows['header'];
																	$message	= $rows['message'];
																?>
															<tr >
																<td><? echo $complaintID ?></td>
																<td><? echo $complaintPatientNo ?> </td>
																<td ><? echo $header ?></td>
																<td ><? echo $message ?></td>
																
															</tr>
															
															
														<?php };}else{echo '<td colspan="4">There are no complaints at the moment.</td>';}?>	
														
														</tbody>
													</table>
												</div>
											</div>
		<!--end: Datatable -->
								</div>
							</div>
							<? } if($r3=='Beklemede'){ ?>
							
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Görüşmesi Devam Eden Aday Öğrenci Listesi
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												
												<a href="<? echo $url ?>/interview/add" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													Yeni Aday Ekle
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
											<th>Ad</th>
											<th>Soyad</th>
											<th>Telefon</th>
											<th>Şube</th>
											<th>Görüşme Durumu</th>
											<th>Görüşme Tipi</th>
											<th>Randevu Tarihi</th>
											<th>Kurs Türü</th>
											<th>Kurs Seviye</th>
											<th>İncele</th>
											</tr>
										</thead>
										<tbody>
											  <?
			                   
								
							
						
										
										
											
										  $querysf = $db->prepare("SELECT * FROM interview where  interview_status='Beklemede' " );
					                      $querysf->execute(array($students_id));
					                      if ( $querysf->rowCount() ){
					                      foreach( $querysf as $rowsf ){
				                      
				                     
										$interview_status	=$rowsf['interview_status'];
										$interview_type	=$rowsf['newinterview_type'];
										$edu_course=$rowsf['edu_course'];
										$edu_level=$rowsf['edu_level'];
										$appoDate	=$rowsf['appoDate'];
										$students_id	=$rowsf['students_id'];
										
										
										
												$query = $db->prepare("SELECT * FROM students order by students_id ASC " );
			                      $query->execute(array($students_id));
			                      if ( $query->rowCount() ){
			                      foreach( $query as $row ){
				                      
				                     	$students_name 		=$row["name"];
										$students_surname 	=$row["surname"];
										$students_phone		=$row['phone'];
										
										$students_id		=$row['students_id'];
										$course_adminID	=$row['course_adminID'];
										$branch_name	=$row['branch_name'];
										
											}
										}
										
										
										
										
										  $querys = $db->prepare("SELECT * FROM course_admin where course_adminID=? " );
			                      $querys->execute(array($course_adminID));
			                      if ( $querys->rowCount() ){
			                      foreach( $querys as $rows ){
				                      
				                     	$names 		=$rows["name"];
										$surnames 	=$rows["surname"];
										
										
											}
										}

										
										
								
										
									?>
											<tr>
												<td >
												<? echo $students_name ?>
												</td>
												<td >
												<? echo $students_surname ?>
												</td>
												<td >
												<? echo $students_phone ?>	
												</td>
												<td >
												<? echo $branch_name ?>
												</td>
												<td >
													
												<? echo $interview_status ?>
																											
												</td>
												<td >
												<? echo $interview_type ?>
												</td>
												<td >
												<? echo $appoDate ?>
												</td>
												
												
												<td >
												<? echo $edu_course ?>
												</td>
												<td >
												<? echo $edu_level ?>	
												</td>
																					
												
												<td >
												<a href="<? echo $url ?>/interview/profile/<? echo $students_id; ?>" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10 ">İncele</a>	
												</td>
												
												</tr>
								
                                        <?php };}else {echo '<tr><td colspan="10" class="null">Henüz Görüşme Bulunmamaktadır.</td></tr>';} ?>
												
											</tr>
											
										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
							<? } if($r3=='Olumsuz'){ ?>
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Görüşmesi Devam Eden Aday Öğrenci Listesi
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												
												<a href="<? echo $url ?>/interview/add" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													Yeni Aday Ekle
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
											<th>Ad</th>
											<th>Soyad</th>
											<th>Telefon</th>
											<th>Şube</th>
											<th>Görüşme Durumu</th>
											<th>Görüşme Tipi</th>
											<th>Randevu Tarihi</th>
											<th>Kurs Türü</th>
											<th>Kurs Seviye</th>
											<th>İncele</th>
											</tr>
										</thead>
										<tbody>
											  <?
			                   
								
							
						
										
										
											
										  $querysf = $db->prepare("SELECT * FROM interview where  interview_status='Olumsuz' " );
					                      $querysf->execute(array($students_id));
					                      if ( $querysf->rowCount() ){
					                      foreach( $querysf as $rowsf ){
				                      
				                     
										$interview_status	=$rowsf['interview_status'];
										$interview_type	=$rowsf['newinterview_type'];
										$edu_course=$rowsf['edu_course'];
										$edu_level=$rowsf['edu_level'];
										$appoDate	=$rowsf['appoDate'];
										$students_id	=$rowsf['students_id'];
										
										
										
												$query = $db->prepare("SELECT * FROM students order by students_id ASC " );
			                      $query->execute(array($students_id));
			                      if ( $query->rowCount() ){
			                      foreach( $query as $row ){
				                      
				                     	$students_name 		=$row["name"];
										$students_surname 	=$row["surname"];
										$students_phone		=$row['phone'];
										
										$students_id		=$row['students_id'];
										$course_adminID	=$row['course_adminID'];
										$branch_name	=$row['branch_name'];
										
											}
										}
										
										
										
										
										  $querys = $db->prepare("SELECT * FROM course_admin where course_adminID=? " );
			                      $querys->execute(array($course_adminID));
			                      if ( $querys->rowCount() ){
			                      foreach( $querys as $rows ){
				                      
				                     	$names 		=$rows["name"];
										$surnames 	=$rows["surname"];
										
										
											}
										}

										
										
								
										
									?>
											<tr>
												<td >
												<? echo $students_name ?>
												</td>
												<td >
												<? echo $students_surname ?>
												</td>
												<td >
												<? echo $students_phone ?>	
												</td>
												<td >
												<? echo $branch_name ?>
												</td>
												<td >
													
												<? echo $interview_status ?>
																											
												</td>
												<td >
												<? echo $interview_type ?>
												</td>
												<td >
												<? echo $appoDate ?>
												</td>
												
												
												<td >
												<? echo $edu_course ?>
												</td>
												<td >
												<? echo $edu_level ?>	
												</td>
																					
												
												<td >
												<a href="<? echo $url ?>/interview/profile/<? echo $students_id; ?>" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10 ">İncele</a>	
												</td>
												
												<td nowrap></td>
												</tr>
								
                                        <?php };}else {echo '<tr><td colspan="11" class="null">Henüz Görüşme Bulunmamaktadır.</td></tr>';} ?>
												
											</tr>
											
										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
							<? }  elseif($r3==''){?>
							<div class="kt-portlet kt-portlet--mobile">
								<div class="kt-portlet__head kt-portlet__head--lg">
									<div class="kt-portlet__head-label">
										<span class="kt-portlet__head-icon">
											<i class="kt-font-brand flaticon2-line-chart"></i>
										</span>
										<h3 class="kt-portlet__head-title">
											Görüşmesi Devam Eden Aday Öğrenci Listesi
										</h3>
									</div>
									<div class="kt-portlet__head-toolbar">
										<div class="kt-portlet__head-wrapper">
											<div class="kt-portlet__head-actions">
												
												<a href="<? echo $url ?>/interview/add" class="btn btn-brand btn-elevate btn-icon-sm">
													<i class="la la-plus"></i>
													Yeni Aday Ekle
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="kt-portlet__body">

									<!--begin: Datatable -->
									<table class="table table-striped- table-bordered table-hover table-checkable" id="kt_table_1">
										<thead>
											<tr>
											<th>Ad</th>
											<th>Soyad</th>
											<th>Telefon</th>
											<th>Şube</th>
											<th>Görüşme Durumu</th>
											<th>Görüşme Tipi</th>
											<th>Randevu Tarihi</th>
											<th>Kurs Türü</th>
											<th>Kurs Seviye</th>
											<th>İncele</th>
											</tr>
										</thead>
										<tbody>
											  <?
			                   
								
							
						
										
										
											
										  $querysf = $db->prepare("SELECT * FROM interview where  interview_status!='Kayıt' " );
					                      $querysf->execute(array($students_id));
					                      if ( $querysf->rowCount() ){
					                      foreach( $querysf as $rowsf ){
				                      
				                     
										$interview_status	=$rowsf['interview_status'];
										$interview_type	=$rowsf['newinterview_type'];
										$edu_course=$rowsf['edu_course'];
										$edu_level=$rowsf['edu_level'];
										$appoDate	=$rowsf['appoDate'];
										$students_id	=$rowsf['students_id'];
										
										
										
												$query = $db->prepare("SELECT * FROM students order by students_id ASC " );
			                      $query->execute(array($students_id));
			                      if ( $query->rowCount() ){
			                      foreach( $query as $row ){
				                      
				                     	$students_name 		=$row["name"];
										$students_surname 	=$row["surname"];
										$students_phone		=$row['phone'];
										
										$students_id		=$row['students_id'];
										$course_adminID	=$row['course_adminID'];
										$branch_name	=$row['branch_name'];
										
											}
										}
										
										
										
										
										  $querys = $db->prepare("SELECT * FROM course_admin where course_adminID=? " );
			                      $querys->execute(array($course_adminID));
			                      if ( $querys->rowCount() ){
			                      foreach( $querys as $rows ){
				                      
				                     	$names 		=$rows["name"];
										$surnames 	=$rows["surname"];
										
										
											}
										}

										
										
								
										
									?>
											<tr>
												<td >
												<? echo $students_name ?>
												</td>
												<td >
												<? echo $students_surname ?>
												</td>
												<td >
												<? echo $students_phone ?>	
												</td>
												<td >
												<? echo $branch_name ?>
												</td>
												<td >
													
												<? echo $interview_status ?>
																											
												</td>
												<td >
												<? echo $interview_type ?>
												</td>
												<td >
												<? echo $appoDate ?>
												</td>
												
												
												<td >
												<? echo $edu_course ?>
												</td>
												<td >
												<? echo $edu_level ?>	
												</td>
																					
												
												<td >
												<a href="<? echo $url ?>/interview/profile/<? echo $students_id; ?>" class="btn btn-label-warning btn-bold btn-sm btn-icon-h kt-margin-l-10 ">İncele</a>	
												</td>
												
												<td nowrap></td>
												</tr>
								
                                        <?php };}else {echo '<tr><td colspan="11" class="null">Henüz Görüşme Bulunmamaktadır.</td></tr>';} ?>
												
											</tr>
											
										</tbody>
									</table>

									<!--end: Datatable -->
								</div>
							</div>
							<? }  ?>
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

		<!--begin::Page Vendors(used by this page) -->
		<script src="<? echo $url ?>/assets/vendors/custom/datatables/datatables.bundle.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<? echo $url ?>/assets/js/demo1/pages/crud/datatables/data-sources/html.js" type="text/javascript"></script>

		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>
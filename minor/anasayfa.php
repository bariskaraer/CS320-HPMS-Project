<?php  if (empty($_SESSION['adminID'])){Header ("Location: ".$url."/giris");}?>
<!DOCTYPE html>


<html lang="tr">

	<!-- begin::Head -->
	<head>
		<meta charset="utf-8" />
		<title><? echo $wpName ?></title>
		<meta name="description" content="Updates and statistics">
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

		<!--begin::Page Vendors Styles(used by this page) -->
		<link href="<? echo $url ?>/assets/vendors/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

		<!--end::Page Vendors Styles -->

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

		<!-- begin:: Header Mobile -->
		
		<!-- end:: Header Mobile -->
		

					<!-- end:: Header -->
					<? require 'minor/header.php'; ?>
						<!-- end:: Content Head -->

						<!-- begin:: Content -->
						<div class="kt-content  kt-grid__item kt-grid__item--fluid" id="kt_content">

							<!--Begin::Dashboard 1-->
								<?
                               $product = $db->query("SELECT * FROM interview where interview_status='Kayıt'");
                               $kayit = $product->rowCount();
                               
                               $product = $db->query("SELECT * FROM interview where interview_status='DevamEdiyor'");
                               $devam = $product->rowCount();
                               
                               $product = $db->query("SELECT * FROM interview where interview_status='Beklemede'");
                               $bekleme = $product->rowCount();
                               
                               $product = $db->query("SELECT * FROM class where  branchID=".$dt_courseID);
                               $class = $product->rowCount();
                               
                               
                               $product = $db->query("SELECT * FROM branch where courseID=".$dt_courseID);
                               $banch = $product->rowCount();
                               
                               
                               
                               $product = $db->query("SELECT * FROM seasons where branchID=".$dt_courseID);
                               $season = $product->rowCount();
                               
                               ?>

							<div class="row row-full-height">
										<div class="col-sm-12 col-md-12 col-lg-4">
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-brand">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number"><? echo $kayit ?></span>
															<span class="kt-widget26__desc">Kayıtlı Öğrenci</span>
														</div>
														
													</div>
												</div>
											</div>
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-danger">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number"><? echo $class ?></span>
															<span class="kt-widget26__desc">Sınıflar</span>
														</div>
													
													</div>
												</div>
											</div>
										</div>
										<div class="col-sm-12 col-md-12 col-lg-4">
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number"><? echo $banch ?></span>
															<span class="kt-widget26__desc">Şube</span>
														</div>
														
													</div>
												</div>
											</div>
											<div class="kt-space-20"></div>
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-warning">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number"><? echo $season ?></span>
															<span class="kt-widget26__desc">Sezonlar</span>
														</div>
														
													</div>
												</div>
											</div>
										</div>
<div class="col-sm-12 col-md-12 col-lg-4">
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-success">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number"><? echo $devam ?></span>
															<span class="kt-widget26__desc">Devam Eden Görüşmeler</span>
														</div>
														
													</div>
												</div>
											</div>
											<div class="kt-space-20"></div>
											<div class="kt-portlet kt-portlet--height-fluid-half kt-portlet--border-bottom-warning">
												<div class="kt-portlet__body kt-portlet__body--fluid">
													<div class="kt-widget26">
														<div class="kt-widget26__content">
															<span class="kt-widget26__number"><? echo $bekleme ?></span>
															<span class="kt-widget26__desc">Beklemede Olan Görüşmeler</span>
														</div>
														
													</div>
												</div>
											</div>
										</div>
									</div>
					
							<!--Begin::Section-->
							<div class="row">
								
								<div class="col-xl-4">

									<!--begin:: Widgets/New Users-->
									<div class="kt-portlet kt-portlet--tabs kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Kayıt Olan Öğrenciler
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<ul class="nav nav-tabs nav-tabs-line nav-tabs-bold nav-tabs-line-brand" role="tablist">
													<li class="nav-item">
														<a class="nav-link active" data-toggle="tab" href="#kt_widget4_tab1_content" role="tab">
															Günlük
														</a>
													</li>
												</ul>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="tab-content">
												<div class="tab-pane active" id="kt_widget4_tab1_content">
													<div class="kt-widget4">
														
													<?
			                      $query = $db->prepare("SELECT * FROM students, interview where students.students_id=interview.students_id and interview.interview_status='Kayıt' LIMIT 3" );
			                      $query->execute(array());
			                      if ( $query->rowCount() ){
			                      foreach( $query as $row ){
				                      
				                     	
												$students_name 		= $row['name'];
												$students_surname 	= $row['surname'];
												$students_phone 	= $row['phone'];
												$students_email		= $row['email'];
												$gender				= $row['gender'];
												
												$edu_type			= $row['edu_type'];
												$edu_season			= $row['edu_season'];
												$edu_course			= $row['edu_course'];
												
												
												
												$students_id	= $row['students_id'];
										
										
									?>	
														
														
														
														
														
														<div class="kt-widget4__item">
															<div class="kt-widget4__pic kt-widget4__pic--pic">
															<?php 
																if ($gender=='Kadın'){echo '<img src="'.$url.'/assets/media/users/100_4.jpg"  >';}
																elseif ( $gender=='Erkek'){echo '<img src="'.$url.'/assets/media/users/100_1.jpg"  >';}
															?>
															</div>
															<div class="kt-widget4__info">
																<a href="#" class="kt-widget4__username">
																	<? echo $students_name ?> <? echo $students_surname ?>
																</a>
																<p class="kt-widget4__text">
																	<? echo $edu_course ?>
																</p>
															</div>
															<a href="<? echo $url ?>/users/profile/<? echo $students_id ?>" class="btn btn-sm btn-label-brand btn-bold">Profil</a>
														</div>
														
														
                                        <?php };}else {echo '<tr><td colspan="10" class="null">Henüz Görüşme Bulunmamaktadır.</td></tr>';} ?>
														
														
														
													</div>
												</div>
												
											</div>
										</div>
									</div>

									<!--end:: Widgets/New Users-->
								</div>
						
									
									<div class="col-xl-4">

								<?
                               $product = $db->query("SELECT * FROM students where gender='Kadın'");
                               $kadin = $product->rowCount();
                               
                               
                               $product = $db->query("SELECT * FROM students where gender='Erkek'");
                               $erkek = $product->rowCount();
                               
                           
                               
                               $product = $db->query("SELECT * FROM students ");
                               $toplam = $product->rowCount();
                               
                               ?>
									<!--begin:: Widgets/Revenue Change-->
									<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-widget14">
													<div class="kt-widget14__header">
														<h3 class="kt-widget14__title">
															Cinsiyete Göre Dağılım
														</h3>
														<span class="kt-widget14__desc">
															Kayıtlı öğrencilere göre düzenlenmiştir.
														</span>
													</div>
													<div class="kt-widget14__content">
														<div class="kt-widget14__chart"><div class="chartjs-size-monitor"><div class="chartjs-size-monitor-expand"><div class=""></div></div><div class="chartjs-size-monitor-shrink"><div class=""></div></div></div>
															<div class="kt-widget14__stat"><? echo $toplam ?></div>
															<canvas id="kt_chart_profit_share" style="height: 140px; width: 140px; display: block;" width="140" height="140" class="chartjs-render-monitor"></canvas>
														</div>
														<div class="kt-widget14__legends">
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-success"></span>
																<span class="kt-widget14__stats"><? echo $kadin ?>% Kadın Öğrenci</span>
															</div>
															<div class="kt-widget14__legend">
																<span class="kt-widget14__bullet kt-bg-warning"></span>
																<span class="kt-widget14__stats"><? echo $erkek ?>% Erkek Öğrenci</span>
															</div>
														</div>
													</div>
												</div>
											</div>
									<!--end:: Widgets/Revenue Change-->
									</div>
								</div>
							<!--Begin::Section-->
							<div class="row">
								<div class="col-xl-4">

									<!--begin:: Widgets/Tasks -->
									<div class="kt-portlet kt-portlet--fit kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__space-x">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title kt-font-light">
													Toplam Kasa Turarı 
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-outline-light btn-sm btn-bold dropdown-toggle" data-toggle="dropdown">
													<?php
											            setlocale(LC_ALL, 'tr_TR.UTF-8');
											            echo strftime("%e %B ", time());
											          ?>
												</a>
												<div class="dropdown-menu dropdown-menu-fit dropdown-menu-right">
													<ul class="kt-nav">
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																<span class="kt-nav__link-text">Raporlar</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-send"></i>
																<span class="kt-nav__link-text">Kasa Günlükleri</span>
															</a>
														</li>
														<li class="kt-nav__item">
															<a href="#" class="kt-nav__link">
																<i class="kt-nav__link-icon flaticon2-settings"></i>
																<span class="kt-nav__link-text">Ayarlar</span>
															</a>
														</li>
													</ul>
												</div>
											</div>
										</div>
										<?
                               $product = $db->query("SELECT * FROM cases where courseID=".$dt_courseID);
                               $case = $product->rowCount();
                               
                               
                               ?>
										<div class="kt-portlet__body">
											<div class="kt-widget27">
												<div class="kt-widget27__visual">
													<img src="<? echo  $url ?>/assets/media//bg/bg-4.jpg" alt="">
													<h3 class="kt-widget27__title">
														<span><span>₺</span><? echo $case ?></span>
													</h3>
													<div class="kt-widget27__btn">
														<a href="#" class="btn btn-pill btn-light btn-elevate btn-bold">Tüm Kasaları Gör</a>
													</div>
												</div>
												<div class="kt-widget27__container kt-portlet__space-x">
													<ul class="nav nav-pills nav-fill" role="tablist">
														<li class="nav-item">
															<a class="nav-link active" data-toggle="pill" href="#kt_personal_income_quater_1">Havale</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_2">Sanal Pos</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_3">Kredi Kartı</a>
														</li>
														<li class="nav-item">
															<a class="nav-link" data-toggle="pill" href="#kt_personal_income_quater_4">Çek</a>
														</li>
													</ul>
													<div class="tab-content">
														<div id="kt_personal_income_quater_1" class="tab-pane active">
															<div class="kt-widget11">
																<div class="table-responsive">

																	<!--begin::Table-->
																	<table class="table">

																		<!--begin::Thead-->
																		<thead>
																			<tr>
																				<td>Application</td>
																				<td>Status</td>
																				<td class="kt-align-right">Total</td>
																			</tr>
																		</thead>

																		<!--end::Thead-->

																		<!--begin::Tbody-->
																		<tbody>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Vertex 2.0</a>
																					<span class="kt-widget11__sub">Vertex To By Again</span>
																				</td>
																				<td><span class="kt-badge kt-badge--success kt-badge--inline">pending</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Metronic</a>
																					<span class="kt-widget11__sub">Powerful Admin Theme</span>
																				</td>
																				<td><span class="kt-badge kt-badge--brand kt-badge--inline">new</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
																			</tr>
																		</tbody>

																		<!--end::Tbody-->
																	</table>

																	<!--end::Table-->
																</div>
															</div>
														</div>
														<div id="kt_personal_income_quater_2" class="tab-pane fade">
															<div class="kt-widget11">
																<div class="table-responsive">

																	<!--begin::Table-->
																	<table class="table">

																		<!--begin::Thead-->
																		<thead>
																			<tr>
																				<td>Application</td>
																				<td>Status</td>
																				<td class="kt-align-right">Total</td>
																			</tr>
																		</thead>

																		<!--end::Thead-->

																		<!--begin::Tbody-->
																		<tbody>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Vertex 2.0</a>
																					<span class="kt-widget11__sub">Vertex To By Again</span>
																				</td>
																				<td><span class="kt-badge kt-badge--success kt-badge--inline">pending</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Apex</a>
																					<span class="kt-widget11__sub">The Best Selling App</span>
																				</td>
																				<td><span class="kt-badge kt-badge--warning kt-badge--inline">in process</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
																			</tr>
																		</tbody>

																		<!--end::Tbody-->
																	</table>

																	<!--end::Table-->
																</div>
															</div>
														</div>
														<div id="kt_personal_income_quater_3" class="tab-pane fade">
															<div class="kt-widget11">
																<div class="table-responsive">

																	<!--begin::Table-->
																	<table class="table">

																		<!--begin::Thead-->
																		<thead>
																			<tr>
																				<td>Application</td>
																				<td>Status</td>
																				<td class="kt-align-right">Total</td>
																			</tr>
																		</thead>

																		<!--end::Thead-->

																		<!--begin::Tbody-->
																		<tbody>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Metronic</a>
																					<span class="kt-widget11__sub">Powerful Admin Theme</span>
																				</td>
																				<td><span class="kt-badge kt-badge--brand kt-badge--inline">new</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Apex</a>
																					<span class="kt-widget11__sub">The Best Selling App</span>
																				</td>
																				<td><span class="kt-badge kt-badge--warning kt-badge--inline">in process</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$37,200</td>
																			</tr>
																		</tbody>

																		<!--end::Tbody-->
																	</table>

																	<!--end::Table-->
																</div>
															</div>
														</div>
														<div id="kt_personal_income_quater_4" class="tab-pane fade">
															<div class="kt-widget11">
																<div class="table-responsive">

																	<!--begin::Table-->
																	<table class="table">

																		<!--begin::Thead-->
																		<thead>
																			<tr>
																				<td>Application</td>
																				<td>Status</td>
																				<td class="kt-align-right">Total</td>
																			</tr>
																		</thead>

																		<!--end::Thead-->

																		<!--begin::Tbody-->
																		<tbody>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Vertex 2.0</a>
																					<span class="kt-widget11__sub">Vertex To By Again</span>
																				</td>
																				<td><span class="kt-badge kt-badge--success kt-badge--inline">pending</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$14,740</td>
																			</tr>
																			<tr>
																				<td>
																					<a href="#" class="kt-widget11__title">Metronic</a>
																					<span class="kt-widget11__sub">Powerful Admin Theme</span>
																				</td>
																				<td><span class="kt-badge kt-badge--brand kt-badge--inline">new</span></td>
																				<td class="kt-align-right kt-font-brand kt-font-bold">$16,010</td>
																			</tr>
																		</tbody>

																		<!--end::Tbody-->
																	</table>

																	<!--end::Table-->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									<!--end:: Widgets/Tasks -->
								</div>
								<div class="col-xl-4">

									<!--begin:: Packages-->
									<div class="kt-portlet kt-portlet--skin-solid kt-portlet--solid-warning kt-portlet--head-lg kt-portlet--head-overlay kt-portlet--height-fluid">
										<div class="kt-portlet__head kt-portlet__head--noborder">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title kt-font-light">
													Bankalar
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<a href="#" class="btn btn-outline-light btn-sm btn-hover-light btn-bold " >
													<?php
											            setlocale(LC_ALL, 'tr_TR.UTF-8');
											            echo strftime("%B %Y", time());
											          ?>
												</a>
												
											</div>
										</div>
										<div class="kt-portlet__body kt-margin-t-0 kt-padding-t-0">
											<div class="kt-widget29">

			                   
														
										
										
											 <?
										  $querysf = $db->prepare("SELECT * FROM cases where courseID =?" );
					                      $querysf->execute(array($dt_courseID));
					                      if ( $querysf->rowCount() ){
					                      foreach( $querysf as $rowsf ){
				                      
				                     
										  		$bank	=$rowsf['bank'];
											?>
											<!--begin::Widget 29-->
											
												<div class="kt-widget29__content">
													<h3 class="kt-widget29__title"><? echo $bank ?></h3>
													<div class="kt-widget29__item">
														<div class="kt-widget29__info">
															<span class="kt-widget29__subtitle">Total</span>
															<span class="kt-widget29__stats kt-font-success">$680</span>
														</div>
														<div class="kt-widget29__info">
															<span class="kt-widget29__subtitle">Change</span>
															<span class="kt-widget29__stats kt-font-brand">+15%</span>
														</div>
														<div class="kt-widget29__info">
															<span class="kt-widget29__subtitle">Licenses</span>
															<span class="kt-widget29__stats kt-font-danger">29</span>
														</div>
													</div>
												</div>
												
												
                                        <?php };}else {echo '<tr><td colspan="11" class="null">Henüz Banka Bulunmamaktadır.</td></tr>';} ?>
												
												<? if($bank !='') {?>
												<div class="kt-widget29__actions kt-align-right">
													<a href="#" class="btn btn-brand">Tüm Detayları Gör</a>
												</div>
												<? } ?>
											</div>

											<!--end::Widget 29-->
										</div>
									</div>

									<!--end:: Packages-->
								</div>
								<div class="col-xl-4">

									<!--begin:: Widgets/Support Tickets -->
									<div class="kt-portlet kt-portlet--height-fluid">
										<div class="kt-portlet__head">
											<div class="kt-portlet__head-label">
												<h3 class="kt-portlet__head-title">
													Kalite Sorunları
												</h3>
											</div>
											<div class="kt-portlet__head-toolbar">
												<div class="dropdown dropdown-inline">
													<button type="button" class="btn btn-clean btn-sm btn-icon-md btn-icon" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
														<i class="flaticon-more-1"></i>
													</button>
													<div class="dropdown-menu dropdown-menu-right">
														<ul class="kt-nav">
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-line-chart"></i>
																	<span class="kt-nav__link-text">Reports</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-send"></i>
																	<span class="kt-nav__link-text">Messages</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-pie-chart-1"></i>
																	<span class="kt-nav__link-text">Charts</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-avatar"></i>
																	<span class="kt-nav__link-text">Members</span>
																</a>
															</li>
															<li class="kt-nav__item">
																<a href="#" class="kt-nav__link">
																	<i class="kt-nav__link-icon flaticon2-settings"></i>
																	<span class="kt-nav__link-text">Settings</span>
																</a>
															</li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<div class="kt-portlet__body">
											<div class="kt-widget3">
												<div class="kt-widget3__item">
													<div class="kt-widget3__header">
														<div class="kt-widget3__user-img">
															<img class="kt-widget3__img" src="<? echo $url ?>/assets/media/users/user1.jpg" alt="">
														</div>
														<div class="kt-widget3__info">
															<a href="#" class="kt-widget3__username">
																Melania Trump
															</a><br>
															<span class="kt-widget3__time">
																2 day ago
															</span>
														</div>
														<span class="kt-widget3__status kt-font-info">
															Pending
														</span>
													</div>
													<div class="kt-widget3__body">
														<p class="kt-widget3__text">
															Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
														</p>
													</div>
												</div>
												<div class="kt-widget3__item">
													<div class="kt-widget3__header">
														<div class="kt-widget3__user-img">
															<img class="kt-widget3__img" src="<? echo $url ?>/assets/media/users/user4.jpg" alt="">
														</div>
														<div class="kt-widget3__info">
															<a href="#" class="kt-widget3__username">
																Lebron King James
															</a><br>
															<span class="kt-widget3__time">
																1 day ago
															</span>
														</div>
														<span class="kt-widget3__status kt-font-brand">
															Open
														</span>
													</div>
													<div class="kt-widget3__body">
														<p class="kt-widget3__text">
															Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.Ut wisi enim ad minim veniam,quis nostrud exerci tation ullamcorper.
														</p>
													</div>
												</div>
												<div class="kt-widget3__item">
													<div class="kt-widget3__header">
														<div class="kt-widget3__user-img">
															<img class="kt-widget3__img" src="<? echo $url ?>/assets/media/users/user5.jpg" alt="">
														</div>
														<div class="kt-widget3__info">
															<a href="#" class="kt-widget3__username">
																Deb Gibson
															</a><br>
															<span class="kt-widget3__time">
																3 weeks ago
															</span>
														</div>
														<span class="kt-widget3__status kt-font-success">
															Closed
														</span>
													</div>
													<div class="kt-widget3__body">
														<p class="kt-widget3__text">
															Lorem ipsum dolor sit amet,consectetuer edipiscing elit,sed diam nonummy nibh euismod tinciduntut laoreet doloremagna aliquam erat volutpat.
														</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<!--end:: Widgets/Support Tickets -->
								</div>
								
							</div>
							
							<!--End::Section-->

						

							<!--End::Section-->

							<!--End::Dashboard 1-->
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
		<script src="<? echo $url ?>/assets/vendors/custom/components/vendors/bootstrap-datepicker/init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-datetime-picker/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-timepicker/js/bootstrap-timepicker.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/components/vendors/bootstrap-timepicker/init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-daterangepicker/daterangepicker.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-maxlength/src/bootstrap-maxlength.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/vendors/bootstrap-multiselectsplitter/bootstrap-multiselectsplitter.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-select/dist/js/bootstrap-select.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-switch/dist/js/bootstrap-switch.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/components/vendors/bootstrap-switch/init.js" type="text/javascript"></script>
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
		<script src="<? echo $url ?>/assets/vendors/custom/components/vendors/bootstrap-markdown/init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/bootstrap-notify/bootstrap-notify.min.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/components/vendors/bootstrap-notify/init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery-validation/dist/jquery.validate.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery-validation/dist/additional-methods.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/components/vendors/jquery-validation/init.js" type="text/javascript"></script>
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
		<script src="<? echo $url ?>/assets/vendors/custom/components/vendors/sweetalert2/init.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery.repeater/src/lib.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery.repeater/src/jquery.input.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/jquery.repeater/src/repeater.js" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/general/dompurify/dist/purify.js" type="text/javascript"></script>

		<!--end:: Global Optional Vendors -->

		<!--begin::Global Theme Bundle(used by all pages) -->
		<script src="<? echo $url ?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

		<!--end::Global Theme Bundle -->

		<!--begin::Page Vendors(used by this page) -->
		<script src="<? echo $url ?>/assets/vendors/custom/fullcalendar/fullcalendar.bundle.js" type="text/javascript"></script>
		<script src="//maps.google.com/maps/api/js?key=AIzaSyBTGnKT7dt597vo9QgeQ7BFhvSRP4eiMSM" type="text/javascript"></script>
		<script src="<? echo $url ?>/assets/vendors/custom/gmaps/gmaps.js" type="text/javascript"></script>

		<!--end::Page Vendors -->

		<!--begin::Page Scripts(used by this page) -->
		<script src="<? echo $url ?>/assets/app/custom/general/dashboard.js" type="text/javascript"></script>

		<!--end::Page Scripts -->

		<!--begin::Global App Bundle(used by all pages) -->
		<script src="<? echo $url ?>/assets/app/bundle/app.bundle.js" type="text/javascript"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-firestore.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-functions.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-messaging.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-storage.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-performance.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-database.js"></script>



    <script src="OneSignalSDKUpdaterWorker.js"></script>
    <script src="OneSignalSDKWorker.js"></script>
    <link rel="manifest" href="manifest.json">

		
 		
	


		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>



















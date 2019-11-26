<?php if (empty($_SESSION['course_adminID'])){Header ("Location: ".$url."/giris");}?>
 <?
	
if ($_POST){
	
	
	
	$students_name 			= $_POST['student_name'];
	$students_surname 		= $_POST['student_surname'];
	$students_bDate			= $_POST['student_bDate'];
	$students_phone 		= $_POST['student_phone'];
	$students_email			= $_POST['student_email'];
	$gender					= $_POST['gender'];
	$students_no			= $_POST['students_no'];
	
	$appoDate				=$_POST["appoDate"];
	
	$interview_type			=$_POST["interview_type"];
	$edu_course				=$_POST["edu_course"];
	$edu_type				=$_POST["edu_type"];
	$edu_level				=$_POST["edu_level"];
	$edu_season				=$_POST["edu_season"];
	
	$newinterview_type		=$_POST["newinterview_type"];
	$interview_status		=$_POST["interview_status"];
	$interview_reason		=$_POST["interview_reason"];
	$interview_date			=$_POST["interview_date"];
	

	$custodian_name			= $_POST['custodian_name'];
	$custodian_surname		= $_POST['custodian_surname'];
	$custodian_phone		= $_POST['custodian_phone'];
	$custodian_tckn			= $_POST['custodian_tckn'];
	$custodian_mail			= $_POST['custodian_mail'];
	$proximity				= $_POST['proximity'];

	
	$courseID 				= $_POST['courseID']; 
	

	$students_id 			= $_POST['students_id']; 




		$student = $db->prepare("UPDATE students SET  name=?, surname=?, email=?, bDate=?, phone=? ,gender=?, course_adminID=?  WHERE students_id=?");
		$student->execute(array($students_name, $students_surname, $students_email, $students_bDate, $students_phone,$gender,$_SESSION['course_adminID'],$students_id));



		$interview = $db->prepare("UPDATE interview SET  interview_status=?, interview_reason=?,  interview_type=?, edu_course=?, edu_type=?, edu_level=?, edu_season=?, newinterview_type=?, appoDate=?,  course_adminID=?, interview_date=?  WHERE students_id=?");
		$interview->execute(array($interview_status, $interview_reason,  $interview_type, $edu_course, $edu_type, $edu_level, $edu_season, $newinterview_type, $appoDate,  $_SESSION['course_adminID'],$interview_date,$students_id));


		$custodian = $db->prepare("UPDATE custodians SET  custodian_name=?, custodian_surname=?, custodian_tckn=?, custodian_phone=?, custodian_mail=?,course_adminID  WHERE students_id=?");
		$custodian->execute(array($custodian_name, $custodian_surname, $custodian_tckn, $custodian_phone, $custodian_mail, $_SESSION['course_adminID'],$students_id));


		
		



		

$addDate=date("Y/m/d H:m:s");
$queryss = $db->prepare("INSERT INTO students_log( students_id,student_number, name, surname, email, bDate, phone ,gender, course_adminID, courseID,addDate) values (?,?,?,?,?,?,?,?,?,?,?)");
$insertss=$queryss->execute(array($r3,$students_no, $students_name, $students_surname, $students_email, $students_bDate, $students_phone,$gender,$_SESSION['course_adminID'],$courseID,$addDate));

if($queryss){
		

	
		$query = $db->prepare("INSERT INTO interview_log(interview_status, interview_reason,  interview_type, edu_course, edu_type, edu_level, edu_season, newinterview_type, appoDate, students_id, course_adminID, interview_date,addDate) values (?,?,?,?,?,?,?,?,?,?,?,?,?)");
		$insert=$query->execute(array($interview_status, $interview_reason,  $interview_type, $edu_course, $edu_type, $edu_level, $edu_season, $newinterview_type, $appoDate, $r3, $_SESSION['course_adminID'],$interview_date,$addDate));
		

		$query1 = $db->prepare("INSERT INTO custodians_log(students_id,custodian_name, custodian_surname, custodian_tckn, custodian_phone, custodian_mail,   students_id, course_adminID,addDate) values (?,?,?,?,?,?,?,?)");
		$insert1=$query1->execute(array( $custodian_name, $custodian_surname, $custodian_tckn, $custodian_phone, $custodian_mail, $r3, $_SESSION['course_adminID'],$addDate));

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
																<span>1</span> Aday Bilgileri
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</a>
													<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>2</span> Aday Veli Bilgileri
															</div>
															<div class="kt-wizard-v3__nav-bar"></div>
														</div>
													</a>
													<a class="kt-wizard-v3__nav-item" href="#" data-ktwizard-type="step">
														<div class="kt-wizard-v3__nav-body">
															<div class="kt-wizard-v3__nav-label">
																<span>3</span> Görüşme Bilgileri
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
			$students_bPlace	= $row['bPlace'];
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
												<!--begin: Form Wizard Step 1-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content" data-ktwizard-state="current">
													<div class="kt-heading kt-heading--md">Öğrenci Bilgilerini Giriniz</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="row"> 
	                                        <div class="col-md-6">   
	                                        	<div class="form-group">
													<label for="complaintinput1">Öğrenci Adı : <span class="danger">*</span></label>
													<input type="text" id="complaintinput1" class="form-control " name="student_name"  value="<? echo $students_name ?>" >
													<input type="hidden" class="form-control " name="student_number" value="<? echo rand(0, 100000) ?>">
														<input type="hidden"  class="form-control " name="courseID" value="<? echo $dt_courseID ?>">
														<input type="hidden"  class="form-control " name="students_no" value="<? echo $students_no ?>">
														<input type="hidden"  class="form-control " name="students_id" value="<? echo $students_id ?>">
												</div>
											</div>
	                                        <div class="col-md-6">   
		                                        <div class="form-group">
													<label for="complaintinput2">Öğrenci Soyadı : <span class="danger">*</span></label>
													<input type="text" id="complaintinput2" class="form-control "  name="student_surname" value="<? echo $students_surname ?>">
												</div>
											</div>
										</div>
										<div class="row"> 
	                                        <div class="col-md-6">   
												<div class="form-group">
													<label for="complaintinput2">Öğrenci Telefon Numarası : <span class="danger">*</span></label>
													<input type="text" id="complaintinput2" class="form-control " placeholder="05XXXXXXXX" name="student_phone"  value="<? echo $students_phone ?>" >
												</div>
											</div>
	                                       
											<div class="col-md-6">   
												<div class="form-group">
													<label for="complaintinput4">E-posta : </label>
													<input type="text" id="complaintinput4" class="form-control " name="student_email" 	value="<? echo $students_email ?>">
												</div>
											</div>
										</div>
										<div class="row"> 
	                                        <div class="col-md-6">   
												<div class="form-group">
													<label for="complaintinput4">Görüşmeci :</label>
													<input type="text" id="complaintinput4" class="form-control " placeholder="<? echo $dt_name ?> <? echo $dt_surname ?>"	disabled>
												</div>
											</div>
	                                        <div class="col-md-6">   
											<div class="form-group">
												<label for="complaintinput5">Cinsiyet : <span class="danger">*</span></label>
													<select id="projectinput6"  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Cinsiyet" data-original-title="" title="" name="gender">
														<option value="<? echo $gender ?>"><? echo $gender ?></option>
														<option value="Kadın">Kadın</option>
														<option value="Erkek">Erkek</option>
													</select>
											</div>
											</div>
										</div>
										
										<div class="row"> 
											 <div class="col-md-6">   
												<div class="form-group">
													<label for="complaintinput3">Doğum Yeri : <span class="danger">*</span></label>
													<input type="text" id="complaintinput1" class="form-control " name="bPlace" value="<? echo $students_bPlace ?>" >
												</div>
											</div>
											 <div class="col-md-6">   
												<div class="form-group">
													<label for="complaintinput3">Doğum Tarihi :</label>
													<input type="date"  class="form-control " name="bDate"  value="<? echo $students_bDate ?>"  >
												</div>
											</div>
                                        
										</div>
														</div>
													</div>
												</div>

												<!--end: Form Wizard Step 1-->

												<!--begin: Form Wizard Step 2-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Veli Bilgilerini Giriniz.</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
														
														                 
                                        <div class="row"> 
	                                        <div class="col-md-6">   
	                                        	<div class="form-group">
													<label for="complaintinput1">Veli Adı : <span class="danger">*</span></label>
													<input type="text" id="complaintinput1" class="form-control " name="custodian_name" value="<? echo $custodian_name ?>">
												</div>
											</div>
	                                        <div class="col-md-6">   
		                                        <div class="form-group">
													<label for="complaintinput2">Veli Soyadı : <span class="danger">*</span></label>
													<input type="text" id="complaintinput2" class="form-control "  name="custodian_surname" value="<? echo $custodian_name ?>">
												</div>
											</div>
										</div>
										          
                                        <div class="row"> 
	                                        <div class="col-md-6">   
	                                        	<div class="form-group">
													<label for="complaintinput1">Veli TCKN : <span class="danger">*</span></label>
													<input type="text" id="complaintinput1" class="form-control " name="custodian_tckn" value="<? echo $custodian_tckn ?>">
												</div>
											</div>
	                                        <div class="col-md-6">   
							                                        <div class="form-group">
																	<label for="projectinput7">Yakınlık Derecesi</label>
																		<select id="projectinput7"  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Şube" data-original-title="" title="" name="proximity" >
																			<option value="<? echo $proximity ?>"><? echo $proximity ?></option>
																			<?
														                                  $query = $db->prepare("SELECT * FROM family_ship where courseID =?");
																	                      $query->execute(array($dt_courseID));
																	                      if ( $query->rowCount() ){
																	                      foreach( $query as $row ){
																	
																							
																						   
																						  $title=  $row['title'];
									                           
															                            ?>
															                            
															                            
																					<option  value="<? echo  $title ?>"><? echo $title ?></option>
																		
																		
																					
																					<? } } ?>
									
																		</select>
																	</div>
																</div>

										</div>
										
								
                                        <div class="row"> 
	                                        <div class="col-md-6">   
	                                        	<div class="form-group">
													<label for="complaintinput1">Veli Telefon No : <span class="danger">*</span></label>
													<input type="text" id="complaintinput2" class="form-control " placeholder="05XXXXXXXX" name="custodian_phone"  value="<? echo $custodian_phone ?>">
												</div>
											</div>
	                                        <div class="col-md-6">   
		                                        <div class="form-group">
													<label for="complaintinput2">Sms Numarası : <span class="danger">*</span></label>
													<input type="text" id="complaintinput2" class="form-control " placeholder="05XXXXXXXX" name="custodian_sms" value="<? echo $custodian_sms ?>">
												</div>
											</div>
										</div>
										
														
														</div>	
													</div>
												</div>

												<!--end: Form Wizard Step 2-->

												<!--begin: Form Wizard Step 3-->
												<div class="kt-wizard-v3__content" data-ktwizard-type="step-content">
													<div class="kt-heading kt-heading--md">Görüşme Bilgilerini Giriniz.</div>
													<div class="kt-form__section kt-form__section--first">
														<div class="kt-wizard-v3__form">
															<div class="row">
																<div class="col-md-6">
																	<div class="form-group ">
																		<label for="projectinput7">Şube</label>
																		
									                                   <select class="form-control required" name="branchID" id="branchID" onChange="sezon(this);">
																			<?php $listS = $db->prepare("SELECT * FROM branch where courseID=?"); 
																				 $listS->execute(array($dt_courseID));
																			?>
																			<option value="0" selected>Şube Seçin 
																			<?php foreach ($listS as $list) { ?>
																				<option value="<?php echo $list['branchID']; ?>"><?php echo $list['branch_name']; ?></option> 
																				<?php } ?>
																		</select>
																	</div>
																</div>
						                                       	<div class="col-md-6">
																	<div class="form-group ">
																		<label for="projectinput7">Sezon</label>
																		
																		    <select class="form-control " name="edu_season" id="sezonlar" onChange="kurs_type(this);"> 
																					<option value="0" selected>Lütfen önce şube seçin!</option>
																			</select>
									
																		</select>
																	</div>
																</div>
											
															</div>		
															<div class="row">
						                                        <div class="col-md-6">
																		<div class="form-group ">
																		<label for="projectinput7">Kurs Türü</label>
																		
																		    <select class="form-control " name="edu_type" id="kurs_types" onChange="kurs(this);"> 
																					<option value="0" selected>Lütfen önce sezon seçin!</option>
																			</select>
									
																		</select>
																	</div>
															</div>
						                                       	<div class="col-md-6">
																	<div class="form-group ">
																		<label for="projectinput7">Kurs</label>
																		
																		    <select class="form-control " name="edu_course" id="kurslar" > 
																					<option value="0" selected>Lütfen kurs türü şube seçin!</option>
																			</select>
									
																		</select>
																	</div>
					
																</div>
											
															</div>		
															<div class="row">
																<div class="col-md-6">	
																	<div class="form-group ">
																		<label for="projectinput7">Seviye</label>
																		
																		    <select class="form-control " name="edu_level" id="level" > 
																					<option value="0" selected>Lütfen önce kurs seçin!</option>
																			</select>
									
																		</select>
																	</div>
																</div>
																
															</div>		
										<div class="row">	
											
											<div class="col-md-6">		
												<div class="form-group ">
													<label for="projectinput7">Görüşme Tipi</label>
													<select id="projectinput7"  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Görüşme Tipi" data-original-title="" title="" name="interview_type" >
														<option value="">Lütfen Seçim Yapınız</option>
														<?
									                                  $query = $db->prepare("SELECT * FROM interviewHow where courseID=? order by title ASC");
												                      $query->execute(array($dt_courseID));
												                      if ( $query->rowCount() ){
												                      foreach( $query as $row ){
												
																		
																	   
																	  $title = $row['title'];
				                           
																
										                            ?>
										                            
										                            
																<option  value="<? echo  $title ?>"><? echo $title ?></option>
													
													
																
																<? } } ?>
				
													</select>
												</div>
											</div>	
											<div class="col-md-6">   
		                                        <div class="form-group">
													<label for="complaintinput2">Görüşme Tarihi: </label>
													<input type="text" name="interview_date" class="form-control "   value="<? echo date("Y/m/d h:m:s") ?>" disabled>
												</div>
											</div>
										</div>		
										<div class="row">
											<div class="col-md-6">
												<div class="form-group ">
													<label for="projectinput6">Görüşme Durumu</label>
													<select id="projectinput6"  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Görüşme Durumu" data-original-title="" title="" name="interview_status"  onchange="secim(this)">
														<option value="">Lütfen Seçim Yapınız</option>
														<option value="DevamEdiyor">Devam Ediyor</option>
														<option value="Olumsuz">Olumsuz</option>
														<option value="Beklemede">Beklemede</option>
													</select>
												</div>
											</div>
										</div>
										<div class="row">
											
											<div class="col-md-6">
												<div class="form-group olumsuz dn">
													<label for="projectinput7">Neden Olumsuz ?</label>
													<select  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Durum Sebebi" data-original-title="" title="" name="interview_reason">
													<option value="">Lütfen Seçim Yapınız</option>
													<?
													$query = $db->prepare("SELECT * FROM dynamic_sub where dynamicID=? order by subTitle ASC");
													$query->execute(array(3));
													if ( $query->rowCount() ){
													foreach( $query as $row ){
													
													
													
													$subTitle = $row['subTitle'];
													
													
													?>
													
													
													<option  value="<? echo  $subTitle ?>"><? echo $subTitle ?></option>
													
													
													
													<? } } ?>
													
													</select>
												</div>
											</div>
											<div class="col-md-6">
												<div class="form-group reason dn">
													<label for="projectinput7">Bekleme Sebebi</label>
													<select  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Durum Sebebi" data-original-title="" title="" name="interview_reason" >
													<option value="">Lütfen Seçim Yapınız</option>
													<?
													$query = $db->prepare("SELECT * FROM dynamic_sub where dynamicID=? order by subTitle ASC");
													$query->execute(array(2));
													if ( $query->rowCount() ){
													foreach( $query as $row ){
													
													
													
													$subTitle = $row['subTitle'];
													
													
													?>
													
													
													<option  value="<? echo  $subTitle ?>"><? echo $subTitle ?></option>
													
													
													
													<? } } ?>
													
													</select>
												</div>
											</div>
											
											
											<div class="col-md-6">
												<div class="form-group appo dn">
													<label for="complaintinput8">Randevu Tarihi</label>
													
													<input type="date" id="complaintinput3" class="form-control " name="appoDate" >
												</div>
											</div>
											
											<div class="col-md-6">
												<div class="form-group appo dn">
													<label for="projectinput7">Bir Sonra ki Görüşme Tipi</label>
													<select id="projectinput7"  class="form-control" data-toggle="tooltip" data-trigger="hover" data-placement="top" data-title="Görüşme Tipi" data-original-title="" title="" name="newinterview_type" >
													<option value="">Lütfen Seçim Yapınız</option>
																	<?
									                                  $query = $db->prepare("SELECT * FROM interviewHow where courseID=? order by title ASC");
												                      $query->execute(array($dt_courseID));
												                      if ( $query->rowCount() ){
												                      foreach( $query as $row ){
												
																		
																	   
																	  $title = $row['title'];
				                           
																
										                            ?>
										                            
										                            
																<option  value="<? echo  $title ?>"><? echo $title ?></option>
													
													
																
																<? } } ?>

													</select>
													
												
												
												</div>											
											</div>
											<div class="col-md-12">
												<div class="form-group  appo dn">
													<label for="complaintinput5">Görüşme Detayı</label>
													<textarea id="complaintinput5" rows="5" class="form-control" name="" placeholder="Açıklama Metni"></textarea>
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
  window.location.replace("<? echo $url?>/interview/profile/<? echo $r3 ?>");
			         
}
</script>
		   <script>
	function ilceGetir(val) {
	$.ajax({
		type: "POST",
		url: "<? $url ?>/setting/smtr",
		data:'country_id='+val,
		success: function(data){
			$("#sehirler").html(data);
		}
	});
}
</script>
  
        <script>
	        
	  function ge(a) { return document.getElementById(a); }

function tckimlikkontorolu(tcno)
{
   var tckontrol,toplam;
   tckontrol = tcno;
   tcno = tcno.value;
   toplam = Number(tcno.substring(0,1)) + Number(tcno.substring(1,2)) + Number(tcno.substring(2,3)) + Number(tcno.substring(3,4)) + Number(tcno.substring(4,5)) + Number(tcno.substring(5,6)) + Number(tcno.substring(6,7)) + Number(tcno.substring(7,8)) + Number(tcno.substring(8,9)) + Number(tcno.substring(9,10));
   
    strtoplam = String(toplam);
    
    onunbirlerbas = strtoplam.substring(strtoplam.length, strtoplam.length-1);
var sonuc = ge("sonuc");
  
    if(onunbirlerbas == tcno.substring(10,11))
    {
        sonuc.className = "dogru";
    sonuc.innerHTML  = "Doğru";
    }
    else{
        sonuc.className = " ";
    sonuc.innerHTML  = "Yanlış";
    }
}      
	   

		   

    function secim(s)
    {
    	var q = s.value;
    	if(q=="Olumsuz"  && q!="" ){$('.olumsuz').show();}
    	else{$('.olumsuz').hide();}
    	    
    	if(q=="Beklemede"  && q!=""  ){$('.reason').show();}
    	else{$('.reason').hide();}
    	
    	
    	if(q=="DevamEdiyor" && q!="" ){$('.appo').show();}
    	else{$('.appo').hide();}
    	
     	if(q=="DevamEdiyor" && q!="" ){$('.onetype').show();}
    	else{$('.onetype').hide();}	
    	
    	
    }

    function okul(s)
    {
    	var q = s.value;
    	if(q!="diger"  ){$('.okulbilgi').show();}
    	else{$('.okulbilgi').hide();}
    	    
    	
    	
    }
   

    </script>
    <script>
	function sezon(val) {
		
	var branchID = $( "#branchID" ).val();
	$.ajax({
		type: "POST",
		url: "<? $url ?>/setting/sezon",
		data:{'sube':branchID},
		success: function(data){
			$("#sezonlar").html(data);
		}
	});
	
}
	function kurs_type(val) {
		
	var branchID = $( "#branchID" ).val();
    var sezonlar = $( "#sezonlar" ).val();
	$.ajax({
	type: "POST",
	url: "<? $url ?>/setting/kurs_type",
	data:{'sezon':sezonlar,'sube':branchID},
	success: function(data){
		$("#kurs_types").html(data);
	}
	});
	
}
	function kurs(val) {
		
	var branchID = $( "#branchID" ).val();
    var sezonlar = $( "#sezonlar" ).val();
	$.ajax({
	type: "POST",
	url: "<? $url ?>/setting/kurs",
	data:{'sezon':sezonlar,'sube':branchID},
	success: function(data){
		$("#kurslar").html(data);
	}
	});
	
	
	$.ajax({
	type: "POST",
	url: "<? $url ?>/setting/level",
	data:{'sezon':sezonlar,'sube':branchID},
	success: function(data){
		$("#level").html(data);
	}
	});

}


</script>

	</body>

	<!-- end::Body -->
</html>
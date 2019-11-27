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
		<title><? echo $wpName ?></title>
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

							<!--Begin::App-->
							<div class="kt-grid kt-grid--desktop kt-grid--ver kt-grid--ver-desktop kt-app">

								<!--Begin:: App Aside Mobile Toggle-->
								<button class="kt-app__aside-close" id="kt_contact_aside_close">
									<i class="la la-close"></i>
								</button>

								<!--End:: App Aside Mobile Toggle-->
							
								<!--Begin:: App Aside-->
								
								<!--End:: App Aside-->

								<!--Begin:: App Content-->
								<div class="kt-grid__item kt-grid__item--fluid kt-app__content">

									<!--Begin::Section-->
									<div class="row">
										 <?
											 	
														
			                      $query = $db->prepare("SELECT * FROM class where status=1 and  branchID=? order by classID ASC " );
			                      $query->execute(array($dt_courseID));
			                      if ( $query->rowCount() ){
			                      foreach( $query as $row ){
				                      
										$class_name		=$row['class_name'];
										$season		=$row['season'];
										$course_type		=$row['course_type'];
										$courses		=$row['courses'];
										$timing		=$row['timing'];
										$classroom		=$row['classroom'];
										$classID		=$row['classID'];
										
										
									?>
										
										<div class="col-xl-4">

											<!--Begin::Portlet-->
											<div class="kt-portlet kt-portlet--height-fluid">
												<div class="kt-portlet__head kt-portlet__head--noborder">
													<div class="kt-portlet__head-label">
														
													</div>
													
												</div>
												<div class="kt-portlet__body">

													<!--begin::Widget -->
													<div class="kt-widget kt-widget--user-profile-2">
														<div class="kt-widget__head">
															
															<div class="kt-widget__info">
																<a href="#" class="kt-widget__username">
																	Sınıf Adı : <? echo $class_name ?> 
																</a>
															</div>
														</div>
														<div class="kt-widget__body">
															<div class="kt-widget__item">
																<div class="kt-widget__contact">
																	<span class="kt-widget__label">Sezon :</span>
																	<a href="#" class="kt-widget__data"><? echo $season ?></a>
																</div>
																<div class="kt-widget__contact">
																	<span class="kt-widget__label">Kurs Türü :</span>
																	<a href="#" class="kt-widget__data"><? echo $course_type ?></a>
																</div>
																<div class="kt-widget__contact">
																	<span class="kt-widget__label">Kurs	:</span>
																	<a href="#" class="kt-widget__data"><? echo $courses ?></a>
																</div>
																<div class="kt-widget__contact">
																	<span class="kt-widget__label">Seans :</span>
																	<a href="#" class="kt-widget__data"><? echo $timing ?></a>
																</div>
																<div class="kt-widget__contact">
																	<span class="kt-widget__label">Derslik :</span>
																	<a href="#" class="kt-widget__data"><? echo $classroom ?></a>
																</div>
															</div>
														</div>
														<div class="kt-widget__footer">
															<a href="<? echo $url ?>/class/detail/<? echo $classID ?>" class="btn btn-label-success btn-sm btn-upper">Detay</a>
														</div>
													</div>

													<!--end::Widget -->
												</div>
											</div>

											<!--End::Portlet-->
										</div>
										
                                        <?php };}else {echo '<tr><td colspan="9" class="null">Henüz Yönetici Bulunmamaktadır.</td></tr>';} ?>
										
									</div>

									<!--End::Section-->

									<!--Begin::Section-->
									

								</div>

								<!--End:: App Content-->
							</div>

							<!--End::App-->
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
<div class="modal fade- modal-sticky-bottom-right" id="kt_chat_modal" role="dialog" data-backdrop="false">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="kt-chat">
						<div class="kt-portlet kt-portlet--last">
							<div class="kt-portlet__head">
								<div class="kt-chat__head ">
									<div class="kt-chat__left">
										<div class="kt-chat__label">
											<a href="#" class="kt-chat__title">Jason Muller</a>
											<span class="kt-chat__status">
												<span class="kt-badge kt-badge--dot kt-badge--success"></span> Active
											</span>
										</div>
									</div>
									<div class="kt-chat__right">
										<div class="dropdown dropdown-inline">
											<button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
												<i class="flaticon-more-1"></i>
											</button>
											
										</div>
										<button type="button" class="btn btn-clean btn-sm btn-icon" data-dismiss="modal">
											<i class="flaticon2-cross"></i>
										</button>
									</div>
								</div>
							</div>
							<div class="kt-portlet__body">
								<div class="kt-scroll kt-scroll--pull" data-height="410" data-mobile-height="300">
									<div class="kt-chat__messages kt-chat__messages kt-chat__messages--modal">
									   <ol class="mesaj"> </ol>
									</div>
								</div>
							</div>
							<div class="kt-portlet__foot">
								<div class="kt-chat__input">
									
												<form class="msgForm" id="asd" method="post" enctype="multipart/form-data">
									<div class="kt-chat__editor">
														<input type="text" hidden="true" name="web" value="<? echo $web ?>">
														<input type="text" hidden="true" name="gondereninID" value="<? echo $_SESSION['course_adminID'] ?>">
														<input type="text" hidden="true" name="gonderenadi" value="<? echo $dt_name ?>">
														<textarea style="height: 50px"  id="textarea"  placeholder="Mesaj yaz" name="mesaj" required></textarea>
									</div>
									<div class="kt-chat__toolbar">
										<div class="kt_chat__tools">
										</div>
										<div class="kt_chat__actions">
															<button type="submit" class="btn btn-brand btn-md btn-upper btn-bold gokhanAq">Gönder</button>
										</div>
									</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		

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
						document.getElementById("asd").onkeypress = function(e) {
  var key = e.charCode || e.keyCode || 0;     
  if (key == 13) {
    e.preventDefault();
  }
}
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
		<script src="<? echo $url ?>/assets/js/demo1/pages/custom/apps/chat/chat.js" type="text/javascript"></script>
<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-app.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-auth.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-firestore.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-functions.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-messaging.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-storage.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-performance.js"></script>

<script src="https://www.gstatic.com/firebasejs/6.2.2/firebase-database.js"></script>
<script type="text/javascript">



            $(document).ready(function(){

			var mesaj = "";
            var gonderen = "<?php echo $dt_email ?>";
            var name = "<?php echo $dt_name ?>";
            var userid = "<?php echo $_SESSION['course_adminID'] ?>";
            var userid2 = $( "#you" ).val();
            var roomName;


                if (userid < userid2)
                    roomName = userid + "-" + userid2;
                else
                    roomName = userid2 + "-" + userid;
                
                
        

              var bakicimRef = firebase.database().ref("Chats/").child(roomName);

                bakicimRef.on("child_added", function(data) {
                  
                    
                    if(data.val().gonderen== gonderen)
                    $('.mesaj').append('<div class="kt-chat__message kt-chat__message--right"><div class="kt-chat__user"><span class="kt-chat__datetime">'+data.val().zaman+'</span><a  class="kt-chat__username">Ben</span></a><span class="kt-userpic kt-userpic--circle kt-userpic--sm"><img src="data:image/jpg;base64,<? echo $meimage[0] ?>" alt="image"></span></div><div class="kt-chat__text kt-bg-light-brand">'+data.val().mesaj+'</div></div>');
                    else
                    $('.mesaj').append('<div class="kt-chat__message"><div class="kt-chat__user"><span class="kt-userpic kt-userpic--circle kt-userpic--sm"><img src="data:image/jpg;base64,<? echo $youimage[0] ?>" alt="image"></span><a  class="kt-chat__username"><? echo $younames ?> <? echo $yousurnames ?></span></a><span class="kt-chat__datetime">'+data.val().zaman+'</span></div><div class="kt-chat__text kt-bg-light-success">'+data.val().mesaj+'</div></div>');
                    
                    
                });

                $('.msgForm').submit(function(e){
                    e.preventDefault();

                    var values = $(this).serialize();

                    $.ajax({
                        url: "<? echo $url ?>/admins/oneSignal",
                        type: "post",
                        data: values ,
                        success: function (response) {
								mesaj = $('#textarea').val();

                              var d = new Date();   
                              var zaman = d.toLocaleString();
							
							var d = new Date(); 
							var zaman = d.getDate() + "-"
							                + (d.getMonth()+1)  + "-" 
							                + d.getFullYear() + " ("  
							                + d.getHours() + ":"  
							                + d.getMinutes() + ":" 
							                + d.getSeconds()+")";
							                                    
                              firebase.database().ref('Chats/').child(roomName).push().set({
                                gonderen: gonderen,
                                mesaj: mesaj,
                                userID: userid,
                                name: name,
                                zaman: zaman
                                  
                              });

                              $('#textarea').val("");
                           // you will get response from your php page (what you echo or print)                 

                        },
                        error: function(jqXHR, textStatus, errorThrown) {
                           console.log(textStatus, errorThrown);
                        }


                    });
                });
            });
		
 		 var config = {
  apiKey: "AIzaSyDBRf4ovxCm6pdtyUH0twkoyfEYAgRz9W4",
  authDomain: "crms-adac7.firebaseapp.com",
  databaseURL: "https://crms-adac7.firebaseio.com",
  projectId: "crms-adac7",
  storageBucket: "crms-adac7.appspot.com",
  messagingSenderId: "890687676781",
  appId: "1:890687676781:web:5eb07781c8d02f97"
  };
  firebase.initializeApp(config);
	console.log(firebase.app()); 
			


			
			

	
	</script>
		<!--end::Global App Bundle -->
	</body>

	<!-- end::Body -->
</html>
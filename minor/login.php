<?
   if ($_POST){
Header ("Location: $url/home");

  $email  = sc($_POST["email"]);
  $password = sc($_POST["password"]);

  $query = $db->prepare("SELECT * FROM admins WHERE adminEmail = ? and adminPassword=?  ");
  $query->execute(array($email,$password));
  if($row = $query->fetch())
  {

      $_SESSION['adminID'] = $row['adminID'];
      $visitDate = $db->prepare("UPDATE admins SET visitDate = ? WHERE adminID = ?");
      $visitDate->execute(array(date("Y/m/d G:i:s"), $row['adminID']));
      Header ("Location: $url/home");




  }
  else
  {
    $errorr= 'Geçersiz E-posta / Şifre.';
    if (isset($errorr)){setcookie("errorr",$errorr,time()+3);}
    Header ("Location: $url/giris");
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
    <title>HPMS | Login Page</title>
    <meta name="description" content="Login page example">
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
    <link href="<? echo $url ?>/assets/app/custom/login/login-v2.default.css" rel="stylesheet" type="text/css" />

    <!--end::Page Custom Styles -->

    <!--begin:: Global Mandatory Vendors -->
    <link href="<? echo $url ?>/assets/vendors/general/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" type="text/css" />



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
    <div class="kt-grid kt-grid--ver kt-grid--root">
      <div class="kt-grid kt-grid--hor kt-grid--root kt-login kt-login--v2 kt-login--signin" id="kt_login">
        <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url(<? echo $url ?>/assets/media//bg/bg-1.jpg);">
          <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
            <div class="kt-login__container">
              <div class="kt-login__logo">
                <a href="#">
                  <img src="<? echo $url ?>/assets/media/logos/logo-mini-2-md.png">
                </a>
              </div>
              <div class="kt-login__signin">
                <div class="kt-login__head">
                  <h3 class="kt-login__title">Sign In To Admin</h3>
                </div>
                   <?php if (isset($_COOKIE["error"]))  {echo alertError($_COOKIE["error"]);}?>
                                    <?php if (isset($_COOKIE["msg"])) {echo alertMsg($_COOKIE["msg"]);}?>
                                    <form   method="post" class="kt-form" name="login" onsubmit="return " >
                  <div class="input-group">
                    <input class="form-control" type="text" placeholder="Email" name="email" autocomplete="off">
                  </div>
                  <div class="input-group">
                    <input class="form-control" type="password" placeholder="Password" name="password">
                  </div>
                  
                  <div class="kt-login__actions">
                    <button id="kt_login_signin_submit" class="btn btn-pill kt-login__btn-primary">Sign In</button>
                  </div>
                </form>
              </div>
              
              
              
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- end:: Page -->

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



    <!--begin::Global Theme Bundle(used by all pages) -->
    <script src="<? echo $url ?>/assets/demo/default/base/scripts.bundle.js" type="text/javascript"></script>

    <!--end::Global Theme Bundle -->

    <!--begin::Page Scripts(used by this page) -->
    <script src="<? echo $url ?>/assets/app/custom/login/login-general.js" type="text/javascript"></script>

    <!--end::Page Scripts -->

    <!--begin::Global App Bundle(used by all pages) -->
    <script src="<? echo $url ?>/assets/app/bundle/app.bundle.js" type="text/javascript"></script>

    <!--end::Global App Bundle -->
  </body>

  <!-- end::Body -->
</html>

<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    
    <title>Login</title>
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon-32x32.png">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="css/materialicons.css" rel="stylesheet">
    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/vendors.min.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/themes/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/pages/login.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/custom/custom.css">
    <link href="vendors/sweetalert2/sweetalert.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="../vendor/fakeLoader.js-master/demo/css/fakeLoader.min.css">

    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 1-column login-bg   blank-page blank-page" data-open="click" data-menu="vertical-modern-menu" data-col="1-column">
    <div class="row">
      <div class="col s12">
        <div class="container"><div id="login-page" class="row">
  <div class="col s12 m6 l4 z-depth-4 card-panel border-radius-6 login-card bg-opacity-8">
    <form class="login-form" id="login">
      <div id="error" class="row ml-4 mr-4" style="display: none">
                <div class="card-alert card gradient-45deg-red-pink">
                  <div class="card-content white-text center">
                    <p>
                      <i class="material-icons">error</i>  : Username or password is invalid</p>
                  </div>
                </div>
              </div>
              <div id="success" class="row ml-4 mr-4 pt-5" style="display: none">
                <div class="" style="background-color: rgba(255,255,255,.8);">
                  <div class="card-content white-text center">
                    <p>
                      <!-- <i class="material-icons">done</i>   Login...</p> -->
                  </div>
                </div>
              </div>
              <div id="empty" class="row ml-4 mr-4" style="display: none">
                <div class="card-alert card gradient-45deg-red-pink">
                  <div class="card-content white-text center">
                    <p>
                      <i class="material-icons">error</i>  : Username or password empty</p>
                  </div>
                </div>
              </div>
              <div class="row l_area">
                <div class="input-field col s12">
                  <h5 class="ml-4">Log in</h5>
                </div>
              </div>
              <div class="row margin l_area">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">person_outline</i>
                  <input id="username" type="text" name="username">
                  <label for="username" class="center-align">Username</label>
                </div>
              </div>
              <div class="row margin l_area">
                <div class="input-field col s12">
                  <i class="material-icons prefix pt-2">lock_outline</i>
                  <input id="password" type="password" name="password">
                  <input id="" type="hidden" name="login">
                  <label for="password">Password</label>
                </div>
              </div>
              
              <div id="sub_btn" class="row">
                <div class="input-field col s12">
                  <button type="submit" class="btn waves-effect waves-light border-round gradient-45deg-purple-deep-orange col s12">Login</button>
                </div>

              </div>
              <div id="login_preloader" class="row" style="display: none">
                <div class="col s12 m12 center">
                  <div class="preloader-wrapper active">
                    <div class="spinner-layer spinner-blue">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                        <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                    <div class="spinner-layer spinner-red">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                        <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                    <div class="spinner-layer spinner-yellow">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                        <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                    <div class="spinner-layer spinner-green">
                      <div class="circle-clipper left">
                        <div class="circle"></div>
                      </div>
                      <div class="gap-patch">
                        <div class="circle"></div>
                      </div>
                      <div class="circle-clipper right">
                        <div class="circle"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="input-field col s6 m6 l6">
                  <!-- <p class="margin medium-small"><a href="user-register.html">Register Now!</a></p> -->
                </div>
                <div class="input-field col s6 m6 l6">
                </div>
              </div>
    </form>
  </div>
</div>
        </div>
        <div class="content-overlay"></div>
      </div>
    </div>
   <!-- <div class="fakeLoader" style="opacity: 100%"></div>-->
    <!-- BEGIN VENDOR JS-->
    <script src="js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="js/plugins.min.js"></script>
    <script src="js/search.min.js"></script>
    <script src="js/custom/custom-script.min.js"></script>
    <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <!-- END PAGE LEVEL JS-->
    <script src="../vendor/fakeLoader.js-master/demo/js/fakeLoader.min.js"></script>
        <script>
          
            // $(document).ready(function(){
                $.fakeLoader({
                    timeToHide:1500,
                    bgColor:"#34495e",
                    spinner:"spinner3"
                });
            // });
          
        </script>
         <script src="js/js-cookie-latest/js.cookie.js"></script>
            <script src="get-post/js/user.js">
          </script>

  </body>

</html>
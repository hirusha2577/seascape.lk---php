<?php include '../class/include.php'; 
if (!User::authenticate()) {
    header('Location: login.php');
    }
    $active = 'slider';
?>
<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">

        <title>Seascape Hotel Dashboard</title>
        <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon-152x152.png">
        <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon-32x32.png">
        <link href="css/materialicons.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="vendors/vendors.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/animate-css/animate.css">
        <link rel="stylesheet" type="text/css" href="vendors/chartist-js/chartist.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/chartist-js/chartist-plugin-tooltip.css">
        <link rel="stylesheet" type="text/css" href="css/themes/vertical-modern-menu-template/materialize.min.css">
        <link rel="stylesheet" type="text/css" href="css/themes/vertical-modern-menu-template/style.min.css">
        <link rel="stylesheet" type="text/css" href="css/pages/dashboard-modern.css">
        <link rel="stylesheet" type="text/css" href="css/pages/intro.min.css">
        <link rel="stylesheet" type="text/css" href="css/pages/dashboard.min.css">
        <link rel="stylesheet" type="text/css" href="css/custom/custom.css">
        <link rel="stylesheet" type="text/css" href="vendors/dropify/css/dropify.min.css">
        <link href="vendors/hover-effects/media-hover-effects.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" type="text/css" href="vendors/magnific-popup/magnific-popup.css">
        <link href="vendors/sweetalert2/sweetalert.css" rel="stylesheet" type="text/css"/>
      <style>
      #overlay {
  position: fixed; /* Sit on top of the page content */
  /*display: none;  Hidden by default */
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.1); /* Black background with opacity */
  z-index: 999999; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}
      </style>
    </head>
    <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

        <!-- BEGIN: Header-->
        <?php include 'include/header.php'; ?>
        <!-- END: Header-->

        <!-- BEGIN: SideNav-->
        <?php include 'include/sidebar.php'; ?>
        <!-- END: SideNav-->
   
        
          
        
       


        <!-- BEGIN: Page Main-->
        <div id="main" class="animate fadeLeft <?php if ($_COOKIE['seascapenavlock'] == 1) {
                                echo ' main-full';
                                // echo $_COOKIE['navlock'];
                            } else {
                                echo ' ';
                            }; ?>">

          
           <!-- <div class="row">
  <div id="simple-circular" class="card card-tabs center " style="z-index:9999999;width: 33.33%;border-radius:5px;
  height: 15%;
  position: sticky;
  top: 40%;
  left: 33.33333%;">
  <div class="card-content">
    <div class="card-title">
      <div class="row">
        <center>
        <div class="col s12 m12 l10" style="width: 100%">

          <div class="preloader-wrapper big active">
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
        </center>
      </div>
    </div>
  </div>
</div>-->
              
                    <div class="container">
                        <div class="section">
                            <div class="row">
                                <!--<div class="col s12 m1 l1"></div>-->
                                <div class="col s12 m12 l12">
                                    <div id="basic-form" class="card card card-default scrollspy">
                                        <div class="card-content">
                                            <h3 class="card-title cyan-text">Create Slider</h3>
                                            <form method="post" id="create_form">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="title" name="title">
                                                        <label for="title">Title :</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="sub_title" name="sub_title" type="text">
                                                        <label for="sub_title">Sub Title :</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="description" name="description" class="materialize-textarea"></textarea>
                                                                <label for="description">Description :</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row section">
                                                    <div class="col s12 m5 l5">
                                                        <input type="file" id="input-file-now-custom-2" name="image" class="dropify"  />
                                                    </div>
                                                    <div class="col s12 m5 l5">
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="hidden" name="create">             
                                                            <button class="btn gradient-45deg-purple-deep-purple waves-effect waves-light left ml-1" type="submit" id="btn-slider" name="action" >Create
                                                                <i class="material-icons right">send</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!--<div class="col s12 m1 l1"></div>-->
                            </div>

                        </div>
                        <div class="row">
                            <!--<div class="col s12 m1 l1"></div>-->

                            <div class="col s12 m12 l12">
                                <div class="row">
                                    <?php
                                    $SLIDER = new Slider(null);
                                    $result = $SLIDER->all();

                                    foreach ($result as $key => $value) {
                                        ?>
                                        <div class="col s12 m3 l3">
                                            <div class="card card-border z-depth-2">
                                                <div class="card-image">
                                                    <img src="<?php echo "../upload/slider/" . $value['image_name']; ?>" alt="">
                                                </div>
                                                <div class="card-content">
                                                    <div class="row">
                                                        <div class="col s4 m4 l4 center" style="border-right: 2px solid #f1f1f1;">
                                                            <a href="update-slider.php?id=<?php echo $value['id']; ?>" class=" btn-floating  waves-effect waves-light gradient-45deg-light-blue-cyan">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                        </div>
<!--                                                        <div class="col s4 m4 l4 center" style="border-right: 2px solid #f1f1f1;">
                                                            <a class=" btn-floating  waves-effect waves-light gradient-45deg-cyan-light-green">
                                                                <i class="material-icons">all_inclusive</i>
                                                            </a>

                                                        </div>-->
                                                        <div class="col s4 m4 l4 center">
                                                            <button class=" btn-floating  waves-effect waves-light gradient-45deg-purple-deep-orange slider_delete" value="<?php echo $value['id']; ?>">
                                                                <i class="material-icons">delete</i>
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            </div>

                            <!--<div class="col s12 m1 l1"></div>-->
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
        <script src="js/vendors.min.js"></script>
        <script src="vendors/chartjs/chart.min.js"></script>
        <script src="vendors/chartist-js/chartist.min.js"></script>
        <!-- <script src="vendors/chartist-js/chartist-plugin-tooltip.js"></script> -->
        <script src="vendors/chartist-js/chartist-plugin-fill-donut.min.js"></script>
        <script src="js/plugins.min.js"></script>
       <!--  <script src="js/search.min.js"></script> -->
        <script src="js/custom/custom-script.min.js"></script>
        <script src="js/scripts/customizer.min.js"></script>
        <script src="js/scripts/dashboard-modern.js"></script>
        <script src="js/scripts/intro.min.js"></script>
        <script src="vendors/sparkline/jquery.sparkline.min.js"></script>
        <script src="js/scripts/dashboard-analytics.min.js"></script>
        <!-- <script src="vendors/tinymce/js/tinymce/tinymce.min.js" type="text/javascript"></script> -->
        <script src="vendors/dropify/js/dropify.min.js"></script>
        <script src="js/scripts/form-file-uploads.min.js"></script>
        <script src="js/scripts/media-hover-effects.min.js"></script>
        <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
        <script src="get-post/js/slider.js" type="text/javascript"></script>
        <script src="js/js-cookie-latest/js.cookie.js"></script>
        <script src="get-post/js/user.js" type="text/javascript"></script>
        <!-- <script>
            tinymce.init({
                selector: 'textarea#tiny'
            });
        </script> -->
    </body>

</html>
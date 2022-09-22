<?php require '../class/include.php';
if (!User::authenticate()) {
    header('Location: login.php');
    }
    $active = 'slider';
$id = '';
$id =$_GET['id'];
$SLIDER = new Slider($id);
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
        <link href="vendors/sweetalert2/sweetalert.css" rel="stylesheet" type="text/css"/>
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

            <div class="row">
               
                <div class="col s12">
                    <div class="container">
                        <div class="section">
                            <div class="row">
                                <!--<div class="col s12 m1 l1"></div>-->
                                <div class="col s12 m12 l12">
                                    <div id="basic-form" class="card card card-default scrollspy">
                                        <div class="card-content">
                                            <h3 class="card-title cyan-text">Update Slider</h3>
                                            <form method="post" id="update_form">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="update_title" type="text" name="title" value="<?php echo $SLIDER->title;?>">
                                                        <label for="fn">Title :</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input id="update_sub_title" name="update_sub_title" type="text" value="<?php echo $SLIDER->sub_title?>">
                                                        <label for="email">Sub Title :</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="update_description" name="description" class="materialize-textarea"><?php echo $SLIDER->description; ?></textarea>
                                                                <label for="textarea2">Description :</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row section">
                                                    <div class="col s12 m12 l12">
                                                        <input type="file" id="input-file-now-custom-2" name="update_image" class="dropify" data-default-file="../upload/slider/<?php echo $SLIDER->image_name; ?>" />
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="row">
                                                        <input type="hidden" name="old_image" id="old_image_name" value="<?php echo $SLIDER->image_name; ?>">
                                                        <input type="hidden" id="update_id" name="update_id" value="<?php echo $id; ?>">
                                                        <input type="hidden" name="update" value="update">
                                                        <div class="input-field col s12">
                                                            <button class="btn gradient-45deg-cyan-light-green waves-effect waves-light left ml-1" type="submit" name="action">Update
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
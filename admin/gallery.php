<?php include '../class/include.php'; 
if (!User::authenticate()) {
    header('Location: login.php');
    }
    $active = 'gallery';
    
$GALLERY = new Gallery(null);
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
        <link rel="stylesheet" type="text/css" href="vendors/hover-effects/media-hover-effects.css">
        <link rel="stylesheet" type="text/css" href="vendors/magnific-popup/magnific-popup.css">
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

            <div class="row mt-3">

                <div class="col s12 m12 l12">
                    <div class="container">
                        <div class="section">
                            <div class="row">
                                <!--<div class="col s12 m1 l1"></div>-->
                                <div class="col s12 m6 l4">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" style="width: 400px;height: 300px" src="../upload/gallery/Cover/room.jpg" alt=""></a>
                                        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Accommodation</a></h6>
                                        <span>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories, makeup, hairstyle
                                            and body.</span>
                                        <div class="display-flex justify-content-between flex-wrap mt-4">
                                            <?php
                                                $result = $GALLERY->count("Accomodation");
                                                
                                            ?>
                                            <div class="display-flex align-items-center mt-1">
                                                <span class="pt-2"><?php echo $result." Imagers"; ?></span>
                                            </div>
                                            <div class="display-flex mt-3 right-align social-icon">
                                                <a href="update-gallery.php?title=Accomodation" class="waves-effect waves-light btn gradient-45deg-light-blue-cyan z-depth-4 border-round mr-1 mb-2">Add</a>                                   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" style="width: 400px;height: 300px" src="../upload/gallery/Cover/dining.jpg" alt=""></a>
                                        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Dining</a></h6>
                                        <span>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories, makeup, hairstyle
                                            and body.</span>
                                        <div class="display-flex justify-content-between flex-wrap mt-4">
                                            <?php
                                                $result = $GALLERY->count("Dining");
                                                
                                            ?>
                                            <div class="display-flex align-items-center mt-1">
                                                <span class="pt-2"><?php echo $result." Imagers"; ?></span>
                                            </div>
                                            <div class="display-flex mt-3 right-align social-icon">
                                                <a href="update-gallery.php?title=Dining" class="waves-effect waves-light btn gradient-45deg-purple-amber z-depth-4 border-round mr-1 mb-2">Add</a>                                
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" style="width: 400px;height: 300px" src="../upload/gallery/Cover/event.jpg" alt=""></a>
                                        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Event</a></h6>
                                        <span>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories, makeup, hairstyle
                                            and body.</span>
                                        <div class="display-flex justify-content-between flex-wrap mt-4">
                                            <?php
                                                $result = $GALLERY->count("Event");
                                                
                                            ?>
                                            <div class="display-flex align-items-center mt-1">
                                                <span class="pt-2"><?php echo $result." Imagers"; ?></span>
                                            </div>
                                            <div class="display-flex mt-3 right-align social-icon">
                                                <a href="update-gallery.php?title=Event" class="waves-effect waves-light btn gradient-45deg-cyan-light-green z-depth-4 border-round mr-1 mb-2">Add</a>                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col s12 m6 l4">
                                    <div class="card-panel border-radius-6 mt-10 card-animation-1">
                                        <a href="#"><img class="responsive-img border-radius-8 z-depth-4 image-n-margin" style="width: 400px;height: 300px" src="../upload/gallery/Cover/excursion.jpg" alt=""></a>
                                        <h6 class="deep-purple-text text-darken-3 mt-5"><a href="#">Excursion</a></h6>
                                        <span>Fashion is a popular style, especially in clothing, footwear, lifestyle, accessories, makeup, hairstyle
                                            and body.</span>
                                        <div class="display-flex justify-content-between flex-wrap mt-4">
                                            <?php
                                                $result = $GALLERY->count("Excursion");
                                                
                                            ?>
                                            <div class="display-flex align-items-center mt-1">
                                                <span class="pt-2"><?php echo $result." Imagers"; ?></span>
                                            </div>
                                            <div class="display-flex mt-3 right-align social-icon">
                                                <a href="update-gallery.php?title=Excursion" class="waves-effect waves-light btn gradient-45deg-purple-deep-purple z-depth-4 border-round mr-1 mb-2">Add</a>                                            </div>
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
        <script src="js/scripts/media-hover-effects.min.js"></script>
        <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
        <script src="js/js-cookie-latest/js.cookie.js"></script>
        <script src="get-post/js/user.js" type="text/javascript"></script>
        <!-- <script>
            tinymce.init({
                selector: 'textarea#tiny'
            });
        </script> -->
    </body>

</html>
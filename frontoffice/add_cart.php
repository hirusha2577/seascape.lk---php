<?php include '../class/include.php'; 
if (!UserO::authenticate()) {
    header('Location: login.php');
    }
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
        <div id="main" class="animate fadeLeft">

            <div class="row">

                <div class="col s12">
                    <div class="container">
                        <div class="section">
                            <div class="row">
                                <!--<div class="col s12 m1 l1"></div>-->
                                <div class="col s12 m12 l12">
                                    <div id="basic-form" class="card card card-default scrollspy">
                                        <div class="card-content">
                                            <h3 class="card-title cyan-text">Add Cart</h3>
                                            <form method="post" id="room_create_form">

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="room_name" name="room_name">
                                                        <label for="fn">Payment Id :</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="room_name" name="room_name">
                                                        <label for="fn">Name :</label>
                                                    </div>
                                                </div>

                                                
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <select tabindex="-1" id="adults" name="adults">
                                                            <option value="" disabled="" selected="">Select Product
                                                            </option>
                                                            <option value="1">1</option>
                                                            <option value="2">2</option>
                                                        </select></div>
                                                </div>
                                              <div class="row">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="hidden"  name="room_create">
                                                            <button class="btn gradient-45deg-purple-deep-purple waves-effect waves-light left ml-1" type="submit" id="room_create" name="room_create">Add
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
                                    
                                    $ROOM = new Room(null);
                                    //var_dump($ROOM);
                                    $result = $ROOM->all();
                                    
                                    foreach($result as $key => $value) {
                                        //var_dump($result);
                                        
                                    ?>
                                    <div class="col s12 m3 l3">
                                        <div class="card card-border z-depth-2">
                                            <div class="card-image">
                                                <img src="<?php echo "../upload/room/".$value['room_main_image_name']; ?>" alt="">
                                            </div>
                                            <div class="card-content">

                                                <div class="row">
                                                    <div class="col s6 m6 l6 center" style="border-right: 2px solid #f1f1f1;">
                                                        <a href="update-accommodation.php?id=<?php echo $value['room_id']; ?>" class=" btn-floating  waves-effect waves-light gradient-45deg-light-blue-cyan">
                                                            <i class="material-icons">edit</i>
                                                        </a>
                                                    </div>



                                                    <div class="col s6 m6 l6 center">
                                                        <input type="hidden" id="get_r_name" value="<?php echo $value['room_main_image_name']; ?>">
                                                               <input type="hidden" value="<?php echo $value['room_id']; ?>" id="get_r_id">
                                                        <button class=" btn-floating  waves-effect waves-light gradient-45deg-purple-deep-orange room_delete" >
                                                            <i class="material-icons">delete</i>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <?php } ?>

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
            <script src="get-post/js/room.js" type="text/javascript"></script>
            <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
            <script src="get-post/js/user.js" type="text/javascript"></script>

        <!-- <script>
            tinymce.init({
                selector: 'textarea#tiny'
            });
        </script> -->
    </body>

</html>
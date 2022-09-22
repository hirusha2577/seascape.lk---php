<?php require '../class/include.php'; 
$active = 'accommodation';
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


        <?php
        $ROOM = new Room($_GET['id']);
        ?>

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
                                            <h3 class="card-title cyan-text">Update Accommodation</h3>
                                            <form method="post" id="room_update_form">
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="update_name" name="room_name" value="<?php echo $ROOM->room_name; ?>">
                                                        <label for="update_name">Name :</label>
                                                    </div>
                                                </div>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <div class="row">
                                                            <div class="input-field col s12">
                                                                <textarea id="update_description" name="room_description" class="materialize-textarea"><?php echo $ROOM->room_description; ?></textarea>
                                                                <label for="update_description">Description :</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <label for="update_category" class="ml-1">Category :</label>
                                                    <div class="input-field col s12">
                                                        <select tabindex="-1" id="update_category" name="room_category">
                                                            <?php
                                                            $category = $ROOM->room_category;

                                                            if ($category == "single") {
                                                                ?>
                                                                <option value="single">Single Room</option>
                                                                <option value="double">Double Room</option>
                                                                <option value="family">Family Room</option>
                                                                <?php
                                                            } else if ($category == "double") {
                                                                ?>
                                                                <option value="double">Double Room</option>
                                                                <option value="single">Single Room</option>
                                                                <option value="family">Family Room</option>
                                                                <?php
                                                            } else if ($category == "family") {
                                                                ?>
                                                                <option value="family">Family Room</option>
                                                                <option value="single">Single Room</option>
                                                                <option value="double">Double Room</option>
                                                                <?php
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                </div>

                                                <?php
                                                if ($ROOM->ac == 1) {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" id="update_ac" name="ac" checked="checked">
                                                                <span>Air Condition</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" id="update_ac" name="ac">
                                                                <span>Air Condition</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($ROOM->hot_water == 1) {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="hot_water" id="update_hot_water" checked="checked">
                                                                <span>Hot Water</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="hot_water" id="update_hot_water">
                                                                <span>Hot Water</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($ROOM->rain_shower == 1) {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="rain_shower" id="update_rain_shower" checked="checked">
                                                                <span>Rain Shower</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="rain_shower" id="update_rain_shower">
                                                                <span>Rain Shower</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($ROOM->seating_area == 1) {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="seating_area" id="update_seating_area" checked="checked">
                                                                <span>Rain Shower</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="seating_area" id="update_seating_area">
                                                                <span>Rain Shower</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($ROOM->iron == 1) {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="iron" id="update_iron_and_pad" checked="checked">
                                                                <span>Iron & Iron Pad</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else {
                                                    ?>
                                                    <div class="row">
                                                        <div class="col s12">
                                                            <label>
                                                                <input type="checkbox" name="iron" id="update_iron_and_pad">
                                                                <span>Iron & Iron Pad</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <?php
                                                if ($ROOM->adults == 1) {
                                                    ?>
                                                    <div class="row mt-3">
                                                        <label for="update_max_adults" class="ml-1">Select Max Adults</label>
                                                        <div class="input-field col s12">
                                                            <select tabindex="-1" id="update_max_adults" name="adults">
                                                                <option value="1">1</option>
                                                                <option value="2">2</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php
                                                } else if ($ROOM->adults == 2) {
                                                    ?>
                                                    <div class="row mt-3">
                                                        <label for="update_max_adults" class="ml-1">Select Max Adults</label>
                                                        <div class="input-field col s12">
                                                            <select tabindex="-1" id="update_max_adults" name="adults">                          
                                                                <option value="2">2</option>
                                                                <option value="1">1</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <?php
                                                }
                                                ?>

                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="update-max_childs" name="childs" value="<?php echo $ROOM->childs ?>">
                                                        <label for="max_childs">Max Child :</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="update_room_size" name="room_size" id="room_size" value="<?php echo $ROOM->room_size; ?>">
                                                        <label for="room_size">Room Size :</label>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="input-field col s12">
                                                        <input type="text" id="update_room_price" name="room_price" value="<?php echo $ROOM->room_price; ?>">
                                                        <label for="room_price">Room Price :</label>
                                                    </div>
                                                </div>
                                                <div class="row section">
                                                    <div class="col s12 m12 l12">
                                                        <input type="file" id="update_main_image" name="room_main_image" class="dropify"  data-default-file="<?php echo "../upload/room/" . $ROOM->room_main_image; ?>"/>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="row">
                                                        <div class="input-field col s12">
                                                            <input type="hidden" name="update_room">
                                                            <input type="hidden" name="room_id" value="<?php echo $ROOM->room_id; ?>" id="room_id">
                                                            <input type="hidden" id="room_old_image" name="room_old_image" value="<?php echo $ROOM->room_main_image; ?>">
                                                            <button class="btn gradient-45deg-cyan-light-green waves-effect waves-light left ml-1" type="submit" name="btn_room_update" value="update">Update
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
                            <div class="col s12 m12 l12">
                                <div id="basic-form" class="card card card-default scrollspy">
                                    <div class="card-content">
                                        <h3 class="card-title cyan-text">Add Images for Room.</h3>
                                        <form method="post" id="inside_image_form">
                                            <div class="row">
                                                <div class="col s12 m12 l12">
                                                    <div class="file-field input-field">
                                                        <div class="btn">
                                                            <span>File</span>
                                                            <input type="hidden" name="set_inside_image">
                                                            <input type="hidden" id="inside_id" name="room_id" value="<?php echo $ROOM->room_id; ?>">
                                                            <input type="file" name="inside_image" id="inside_image">
                                                        </div>
                                                        <div class="file-path-wrapper">
                                                            <input class="file-path validate" type="text" placeholder="Upload one or more files">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>



                                            <div class="row">
                                                <div class="input-field col s12 m12 l12">
                                                    <button class="btn gradient-45deg-deep-purple-blue waves-effect waves-light left " type="submit" name="action">Add
                                                        <i class="material-icons right">send</i>
                                                    </button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <!--<div class="col s12 m1 l1"></div>-->
                            <div class="col s12 m12 l12">
                                <div class="row">
                                    <?php
                                    $result = $ROOM->get_inside_imagers($_GET['id']);
                                    //Helper::dd($result);
                                    foreach ($result as $key => $value) {
                                        ?>
                                        <div class="col s12 m3 l3">
                                            <div class="card card-border z-depth-2">
                                                <div class="card-image">
                                                    <img src="<?php echo "../upload/room/" . $value['room_image_name']; ?>" alt="">
                                                </div>
                                                <div class="card-content">

                                                    <div class="row">
                                                        <div class="col s6 m6 l6 center" style="border-right: 2px solid #f1f1f1;">
                                                            <a href="update-accommodation_image.php?id=<?php echo $value['room_image_id']; ?>" class=" btn-floating  waves-effect waves-light gradient-45deg-light-blue-cyan">
                                                                <i class="material-icons">edit</i>
                                                            </a>
                                                        </div>



                                                        <div class="col s6 m6 l6 center">

                                                            <input type="hidden" id="old_inside_name" value="<?php echo $value['room_image_name']; ?>">
                                                            <button class=" btn-floating  waves-effect waves-light gradient-45deg-purple-deep-orange delete_inside_image" value="<?php echo $value['room_image_id']; ?>">
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
        <!-- <script>
            tinymce.init({
                selector: 'textarea#tiny'
            });
        </script> -->
    </body>

</html>
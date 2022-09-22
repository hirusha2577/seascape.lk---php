<?php
require '../class/include.php';
if (!UserO::authenticate()) {
   header('Location: login.php');
   }
   $active = 'request';
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




        <link rel="stylesheet" type="text/css" href="vendors/flag-icon/css/flag-icon.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/data-tables/css/jquery.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/data-tables/css/select.dataTables.min.css">
        <link rel="stylesheet" type="text/css" href="css/pages/data-tables.min.css">
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
                        <!-- Page Length Options "page-length-option-->
                        <div class="row">
                            <div class="col s12">
                              
                              <div class="card-alert card gradient-45deg-green-teal" style="display:none;">
                <div class="card-content white-text">
                  <p>
                    <i class="material-icons">check</i> SUCCESS : The page has been added.</p>
                </div>
                <button type="button" class="close white-text" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">×</span>
                </button>
              </div>
                              
                                <div class="card">
                                    <div class="card-content">
                                        <div class="row">
                                            <div class="col m6">
                                                <h4 class="card-title">Manage Request</h4>

                                            </div>
                                            <div class="col m6">
                                                <a href="manage_booking_list.php" class="mb-6 btn waves-effect waves-light gradient-45deg-blue-indigo" style="float: right;">Booking list</a>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col s12">
                                                <table id="page-length-option" class="display">
                                                    <thead>
                                                        <tr>
                                                            <th>Option</th>
                                                            <th>Booking Id</th>
                                                          <th>Token</th>
                                                            <th>Room Name</th>
                                                            <th>Type</th>
                                                            <th>First Name</th>
                                                            <th>Last Name</th>
                                                            <th>Email</th>
                                                            <th>Tel</th>
                                                            <th>Room Price</th>
                                                            <th>Customer Type</th>
                                                            <th>Service Type</th>
                                                            <th>Check in</th>
                                                            <th>Check out</th>
                                                            <th>Request Date</th>
                                                            <th>Request Time</th>
                                                            <th>NIC</th>

                                                        </tr>
                                                        <!--   `booking_id`, `room_id`, `type`, `f_name`, `l_name`, `NIC`, `email`, `tel`, `check_in`, `check_out`, `status`, `request_date`, `request_time`, `booking_date`, `booking_time` -->
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $BOOKING = new Booking();
                                                        $result = $BOOKING->get_request_list();

                                                        if (mysqli_num_rows($result) > 0) {
                                                            $array = array();
                                                            while ($row = mysqli_fetch_array($result)) {
                                                                array_push($array, $row);
                                                            }

                                                            foreach ($array as $key => $value) {
                                                                ?>
                                                                <tr>
                                                                    <td><button class="mb-6 btn waves-effect waves-light gradient-45deg-cyan-light-green btn_confirm" value="<?php echo $value['booking_id']; ?>">Confirm</button>&nbsp;<button class="mb-6 btn waves-effect waves-light gradient-45deg-deep-orange-orange btn_discard_booking" value="<?php echo $value['booking_id']; ?>">Discard</button></td>
                                                                    <td><?php echo $value['booking_id']; ?></td>
                                                                  <td><?php echo $value['b_token']; ?></td>
                                                                    <td><?php echo $value['room_name']; ?></td>
                                                                    <td><?php echo $value['type']; ?></td>
                                                                    <td><?php echo $value['f_name']; ?></td>
                                                                    <td><?php echo $value['l_name']; ?></td>
                                                                    <td><?php echo $value['email']; ?>.com</td>
                                                                    <td><?php echo $value['tel']; ?></td>
                                                                    <td><?php echo $value['room_price']; ?></td>
                                                                    <td><?php echo $value['customer_type']; ?></td>
                                                                    <td><?php echo $value['service_type']; ?></td>
                                                                    <td><?php echo $value['check_in']; ?></td>
                                                                    <td><?php echo $value['check_out']; ?></td>
                                                                    <td><?php echo $value['request_date']; ?></td>
                                                                    <td><?php echo $value['request_time']; ?></td>
                                                                    <td><?php echo $value['NIC']; ?></td>
                                                                </tr>
                                                                <?php
                                                            }
                                                        }
                                                        ?>
                                                        </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include 'include/footer.php'; ?>
        <script src="js/jquery-2.2.0.min.js" type="text/javascript"></script>
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



        <script src="vendors/data-tables/js/jquery.dataTables.min.js"></script>
        <script src="vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
        <script src="vendors/data-tables/js/dataTables.select.min.js"></script>

        <script src="js/scripts/data-tables.min.js"></script>
        <script src="js/js-cookie-latest/js.cookie.js"></script>
        <script src="get-post/js/user.js" type="text/javascript"></script>
        <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
        <script src="get-post/js/booking.js" type="text/javascript"></script>


        <!-- <script>
            tinymce.init({
                selector: 'textarea#tiny'
            });
        </script> -->
    </body>

</html>
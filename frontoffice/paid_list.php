<?php require '../class/include.php'; 
// if(!isset($_SESSION)){
//   session_start();
// }
// Helper::dd($_SESSION);
if (!UserO::authenticate()) {
    header('Location: login.php');
    }
    $active = '';
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



           <link rel="stylesheet" type="text/css" href="vendors/flag-icon/css/flag-icon.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/data-tables/css/select.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="css/pages/data-tables.min.css">



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
      <div class="card">
        <div class="card-content">
           <div class="row">
     
        <h4 class="card-title">Paid list</h4>

          <div class="row">
            <div class="col s12">
              <table id="page-length-option" class="display">
                <thead>
                  <tr>
                    <th>Booking Id</th>
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
                    <th>Booking Date</th>
                    <th>Booking Time</th>
                    <th>NIC</th>
                    <th>Status</th>
                  </tr>
                <!--   `booking_id`, `room_id`, `type`, `f_name`, `l_name`, `NIC`, `email`, `tel`, `check_in`, `check_out`, `status`, `request_date`, `request_time`, `booking_date`, `booking_time` -->
                </thead>
                <tbody>
                  <tr>
                     <td>01</td>
                    <td>R08</td>
                    <td>Single</td>
                    <td>Tiger</td>
                    <td>Tiger</td>
                    <td>tiger@gmail.com</td>
                    <td>1788417414</td>
                    <td>55</td>
                    <td>Foreign</td>
                    <td>HB</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td>2011/04/25</td>
                    <td>5.55</td>
                    <td>12554512225</td>
                    <td>
                        <!-- <a href="#" class="mb-6 btn waves-effect waves-light gradient-45deg-cyan-light-green">Confirm</a>&nbsp; -->
                        <!-- <a href="#" class="mb-6 btn waves-effect waves-light gradient-45deg-deep-orange-orange">Check out</a></td> -->
                        Today
                  </tr> 
                  
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
        <script src="get-post/js/dining.js" type="text/javascript"></script>



        <script src="vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/data-tables/js/dataTables.select.min.js"></script>

    <script src="js/scripts/data-tables.min.js"></script>
    <script src="get-post/js/user.js" type="text/javascript"></script>



        <!-- <script>
            tinymce.init({
                selector: 'textarea#tiny'
            });
        </script> -->
    </body>

</html>
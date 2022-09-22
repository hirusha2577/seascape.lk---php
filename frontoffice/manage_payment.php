<?php
require '../class/include.php';
if (!UserO::authenticate()) {
   header('Location: login.php');
   }
   $active = 'payment';

  //  Helper::dd(Helper::random_p_id());
?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">
  
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
    <meta name="keywords" content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
    <meta name="author" content="ThemeSelect">
    <title>Seascape Hotel Dashboard</title>
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon-152x152.png">
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon-32x32.png">
    <link href="css/materialicons.css" rel="stylesheet">    <!-- BEGIN: VENDOR CSS-->
    <link rel="stylesheet" type="text/css" href="vendors/vendors.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/data-tables/css/jquery.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css">
    <link rel="stylesheet" type="text/css" href="vendors/data-tables/css/dataTables.checkboxes.css">
    <!-- END: VENDOR CSS-->
    <!-- BEGIN: Page Level CSS-->
    <link rel="stylesheet" type="text/css" href="css/themes/vertical-modern-menu-template/materialize.min.css">
    <link rel="stylesheet" type="text/css" href="css/themes/vertical-modern-menu-template/style.min.css">
    <link rel="stylesheet" type="text/css" href="css/pages/app-invoice.min.css">
    <!-- END: Page Level CSS-->
    <!-- BEGIN: Custom CSS-->
    <link rel="stylesheet" type="text/css" href="css/custom/custom.css">
    <link href="vendors/sweetalert2/sweetalert.css" rel="stylesheet" type="text/css"/>

    <!-- END: Custom CSS-->
    <style>
      #main .content-wrapper-before{
        top: 0px;
      }
    </style>
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
            <?php include 'include/header.php'; ?>

 



    <!-- BEGIN: SideNav-->
           <?php include 'include/sidebar.php'; ?>

    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main" class="<?php if ($_COOKIE['seascapenavlock'] == 1) {
                                echo ' main-full';
                                // echo $_COOKIE['navlock'];
                            } else {
                                echo ' ';
                            }; ?>">
      <div class="row">
        <div style="" class="content-wrapper-before gradient-45deg-indigo-purple" ></div>
        <div class="col s12">
          <div class="container">
            <!-- invoice list -->
<section class="invoice-list-wrapper section">

  <!-- <div class="filter-btn"> -->
    <!-- Dropdown Trigger -->
    <!-- <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
      data-target='btn-filter'>
      <span class="hide-on-small-only">Filter Invoice</span>
      <i class="material-icons">keyboard_arrow_down</i>
    </a> -->
    <!-- Dropdown Structure -->
    <!-- <ul id='btn-filter' class='dropdown-content'>
      <li><a href="#!">Paid</a></li>
      <li><a href="#!">Unpaid</a></li>
      <li><a href="#!">Partial Payment</a></li>
    </ul>
  </div> -->

  
  <div class="responsive-table">
    <table class="table invoice-data-table white border-radius-4 pt-1">
      <thead>
        <tr>
          <!-- data table responsive icons -->
          <th></th>
          <!-- data table checkbox -->
          <th></th>
          <th>
            <span>Invoice#</span>
          </th>
          <th>Sub Amount</th>
          <th>Date</th>
          <th>Customer</th>
          <th>Type</th>
          <th>Email</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>

<?php 
$PAYMENT = new Payment();

foreach ($PAYMENT->all() as $key => $payment) {
$total = $PAYMENT->total($payment['payment_id'],$payment['room_price'],$payment['additional']);
if ($payment['customer_type'] !== 'foreign') {
  $currency = "LKR ";
 }else{
 $currency = "$ ";
 }

if ($payment['paid']==1) {
 $color = 'green';
 $text = 'PAID';
}else{
 $color = 'red';
 $text = 'UNPAID';
}
?>
        <tr>
          <td></td>
          <td></td>
          <td>
            <a href="view_invoice.php?id=<?php echo $payment['payment_id']; ?>"><?php echo $payment['payment_id']; ?></a>
          </td>
          <td><span class="invoice-amount"><?php echo $currency.$total; ?></span></td>
          <td><small><?php echo $payment['booking_date']; ?></small></td>
          <td><span class="invoice-customer"><?php echo $payment['f_name'].' '.$payment['l_name']; ?></span></td>
          <td>
            <span class="bullet green"></span>
            <small><?php echo $payment['customer_type']; ?></small>
          </td>
          <td>
            
            <small><?php echo $payment['email']; ?></small>
          </td>
          <td>
            <span class="chip lighten-5 <?php echo $color; ?> <?php echo $color; ?>-text"><?php echo $text; ?></span>
          </td>
          <td>
            <div class="invoice-action">
              <!-- <a href="view_invoice.php" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a> -->
              <a href="view_invoice.php?id=<?php echo $payment['payment_id']; ?>" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
  
        
  <?php } ?>

      </tbody>
    </table>
  </div>
</section><!-- START RIGHT SIDEBAR NAV -->

<!-- END RIGHT SIDEBAR NAV -->
          </div>
          <div class="content-overlay"></div>
        </div>
      </div>
    </div>
    <!-- END: Page Main-->

    <!-- Theme Customizer -->



<!--/ Theme Customizer -->


    
    <!-- BEGIN: Footer-->

  

    <!-- END: Footer-->
    <!-- BEGIN VENDOR JS-->
    <script src="js/vendors.min.js"></script>
    <!-- BEGIN VENDOR JS-->
    <!-- BEGIN PAGE VENDOR JS-->
    <script src="vendors/data-tables/js/jquery.dataTables.min.js"></script>
    <script src="vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js"></script>
    <script src="vendors/data-tables/js/datatables.checkboxes.min.js"></script>
    <!-- END PAGE VENDOR JS-->
    <!-- BEGIN THEME  JS-->
    <script src="js/plugins.min.js"></script>
    <script src="js/search.min.js"></script>
    <script src="js/custom/custom-script.min.js"></script>
    <script src="js/scripts/customizer.min.js"></script>
    <!-- END THEME  JS-->
    <!-- BEGIN PAGE LEVEL JS-->
    <script src="js/scripts/app-invoice.min.js"></script>
    <script src="js/js-cookie-latest/js.cookie.js"></script>
    <script src="get-post/js/user.js" type="text/javascript"></script>
    <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
    <!-- END PAGE LEVEL JS-->
  </body>

</html>
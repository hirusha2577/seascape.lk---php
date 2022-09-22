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
    <!-- END: Custom CSS-->
  </head>
  <!-- END: Head-->
  <body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns  app-page " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
            <?php include 'include/header.php'; ?>

    <!-- END: Header-->
    <ul class="display-none" id="default-search-main">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">FILES</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Two new item submitted</span><small class="grey-text">Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">17kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file Generator</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
            <div class="status"><small class="grey-text">550kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small class="grey-text">Digital Marketing Manager</small></div>
            </div>
            <div class="status"><small class="grey-text">20kb</small></div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img src="images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
            <div class="status"><small class="grey-text">37kb</small></div>
          </div></a></li>
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">MEMBERS</h6></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="images/avatar/avatar-7.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small class="grey-text">UI designer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="images/avatar/avatar-8.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small class="grey-text">FontEnd Developer</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="images/avatar/avatar-10.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small class="grey-text">Digital Marketing</small></div>
            </div>
          </div></a></li>
      <li class="auto-suggestion"><a class="collection-item" href="#">
          <div class="display-flex">
            <div class="display-flex align-item-center flex-grow-1">
              <div class="avatar"><img class="circle" src="images/avatar/avatar-12.png" width="30" alt="sample image"></div>
              <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small class="grey-text">Web Designer</small></div>
            </div>
          </div></a></li>
    </ul>
    <ul class="display-none" id="page-search-title">
      <li class="auto-suggestion-title"><a class="collection-item" href="#">
          <h6 class="search-title">PAGES</h6></a></li>
    </ul>
    <ul class="display-none" id="search-not-found">
      <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
    </ul>



    <!-- BEGIN: SideNav-->
           <?php include 'include/sidebar.php'; ?>

    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main">
      <div class="row">
        <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
        <div class="col s12">
          <div class="container">
            <!-- invoice list -->
<section class="invoice-list-wrapper section">
  <!-- create invoice button-->
  <!-- Options and filter dropdown button-->
  <div class="invoice-filter-action mr-3">
    <a href="#" class="btn waves-effect waves-light invoice-export border-round z-depth-4">
      <i class="material-icons">picture_as_pdf</i>
      <span class="hide-on-small-only">Export to PDF</span>
    </a>
  </div>
  <!-- create invoice button-->
  <div class="invoice-create-btn">
    <a href="app-invoice-add.html" class="btn waves-effect waves-light invoice-create border-round z-depth-4">
      <i class="material-icons">add</i>
      <span class="hide-on-small-only">Create Invoice</span>
    </a>
  </div>
  <div class="filter-btn">
    <!-- Dropdown Trigger -->
    <a class='dropdown-trigger btn waves-effect waves-light purple darken-1 border-round' href='#'
      data-target='btn-filter'>
      <span class="hide-on-small-only">Filter Invoice</span>
      <i class="material-icons">keyboard_arrow_down</i>
    </a>
    <!-- Dropdown Structure -->
    <ul id='btn-filter' class='dropdown-content'>
      <li><a href="#!">Paid</a></li>
      <li><a href="#!">Unpaid</a></li>
      <li><a href="#!">Partial Payment</a></li>
    </ul>
  </div>
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
          <th>Amount</th>
          <th>Date</th>
          <th>Customer</th>
          <th>Tags</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          <td></td>
          <td></td>
          <td>
            <a href="add_cart.php">INV-00956</a>
          </td>
          <td><span class="invoice-amount">$459.30</span></td>
          <td><small>12-08-19</small></td>
          <td><span class="invoice-customer">Pixinvent PVT. LTD</span></td>
          <td>
            <span class="bullet green"></span>
            <small>Technology</small>
          </td>
          <td>
            <span class="chip lighten-5 red red-text">UNPAID</span>
          </td>
          <td>
            <div class="invoice-action">
              <a href="add_cart.php" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="app-invoice-edit.html" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
     
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="add_cart.php">INV-00123</a>
          </td>
          <td><span class="invoice-amount">$15,900</span></td>
          <td><small>23-07-19</small></td>
          <td><span class="invoice-customer">Toyota Motor</span></td>
          <td>
            <span class="bullet blue"></span>
            <small>Car</small>
          </td>
          <td><span class="chip lighten-5 green green-text">PAID</span></td>
          <td>
            <div class="invoice-action">
              <a href="add_cart.php" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="app-invoice-edit.html" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
 
      
        <tr>
          <td></td>
          <td> </td>
          <td>
            <a href="add_cart.php">INV-00759</a>
          </td>
          <td><span class="invoice-amount">$10,960.20</span></td>
          <td><small>22-05-19</small></td>
          <td><span class="invoice-customer">Ping An Insurance</span></td>
          <td>
            <span class="bullet grey"></span>
            <small>Corporation</small>
          </td>
          <td><span class="chip lighten-5 orange orange-text">Partially Paid</span></td>
          <td>
            <div class="invoice-action">
              <a href="add_cart.php" class="invoice-action-view mr-4">
                <i class="material-icons">remove_red_eye</i>
              </a>
              <a href="app-invoice-edit.html" class="invoice-action-edit">
                <i class="material-icons">edit</i>
              </a>
            </div>
          </td>
        </tr>
       
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
    <!-- END PAGE LEVEL JS-->
  </body>

<!-- Mirrored from pixinvent.com/materialize-material-design-admin-template/html/ltr/vertical-modern-menu-template/app-invoice-list.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 16 Feb 2020 13:55:15 GMT -->
</html>
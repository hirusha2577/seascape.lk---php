<?php 
  require '../class/include.php';
  if (!UserO::authenticate()) {
   header('Location: login.php');
   }
   $active = 'payment';
?>
<!DOCTYPE html>

<html class="loading" lang="en" data-textdirection="ltr">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
  <meta name="description"
    content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google.">
  <meta name="keywords"
    content="materialize, admin template, dashboard template, flat admin template, responsive admin template, eCommerce dashboard, analytic dashboard">
  <meta name="author" content="ThemeSelect">
  <title>Seascape Hotel Dashboard</title>
  <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon-152x152.png">
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon/favicon-32x32.png">
  <link href="css/materialicons.css" rel="stylesheet">
  <!-- BEGIN: VENDOR CSS-->
  <link rel="stylesheet" type="text/css" href="vendors/vendors.min.css">
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
</head>
<!-- END: Head-->

<body
  class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns  app-page "
  data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

  <!-- BEGIN: Header-->
  <?php include 'include/header.php'; ?>

  <!-- END: Header-->
  <ul class="display-none" id="default-search-main">
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
        <h6 class="search-title">FILES</h6>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="images/icon/pdf-image.png" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Two new item
                submitted</span><small class="grey-text">Marketing Manager</small></div>
          </div>
          <div class="status"><small class="grey-text">17kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="images/icon/doc-image.png" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">52 Doc file
                Generator</span><small class="grey-text">FontEnd Developer</small></div>
          </div>
          <div class="status"><small class="grey-text">550kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="images/icon/xls-image.png" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">25 Xls File Uploaded</span><small
                class="grey-text">Digital Marketing Manager</small></div>
          </div>
          <div class="status"><small class="grey-text">20kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img src="images/icon/jpg-image.png" width="24" height="30" alt="sample image"></div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small
                class="grey-text">Web Designer</small></div>
          </div>
          <div class="status"><small class="grey-text">37kb</small></div>
        </div>
      </a></li>
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
        <h6 class="search-title">MEMBERS</h6>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="images/avatar/avatar-7.png" width="30" alt="sample image">
            </div>
            <div class="member-info display-flex flex-column"><span class="black-text">John Doe</span><small
                class="grey-text">UI designer</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="images/avatar/avatar-8.png" width="30" alt="sample image">
            </div>
            <div class="member-info display-flex flex-column"><span class="black-text">Michal Clark</span><small
                class="grey-text">FontEnd Developer</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="images/avatar/avatar-10.png" width="30" alt="sample image">
            </div>
            <div class="member-info display-flex flex-column"><span class="black-text">Milena Gibson</span><small
                class="grey-text">Digital Marketing</small></div>
          </div>
        </div>
      </a></li>
    <li class="auto-suggestion"><a class="collection-item" href="#">
        <div class="display-flex">
          <div class="display-flex align-item-center flex-grow-1">
            <div class="avatar"><img class="circle" src="images/avatar/avatar-12.png" width="30" alt="sample image">
            </div>
            <div class="member-info display-flex flex-column"><span class="black-text">Anna Strong</span><small
                class="grey-text">Web Designer</small></div>
          </div>
        </div>
      </a></li>
  </ul>
  <ul class="display-none" id="page-search-title">
    <li class="auto-suggestion-title"><a class="collection-item" href="#">
        <h6 class="search-title">PAGES</h6>
      </a></li>
  </ul>
  <ul class="display-none" id="search-not-found">
    <li class="auto-suggestion"><a class="collection-item display-flex align-items-center" href="#"><span
          class="material-icons">error_outline</span><span class="member-info">No results found.</span></a></li>
  </ul>



  <!-- BEGIN: SideNav-->
  <?php require 'include/sidebar.php'; ?>

  <!-- END: SideNav-->

  <!-- BEGIN: Page Main-->
  <div id="main"class="<?php if ($_COOKIE['seascapenavlock'] == 1) {
                                echo ' main-full';
                                // echo $_COOKIE['navlock'];
                            } else {
                                echo ' ';
                            }; ?>">
    <div class="row">
      <div class="content-wrapper-before gradient-45deg-indigo-purple"></div>
      <div class="col s12">
        <div class="container">
          <!-- app invoice View Page -->

          <?php 
        $PAYMENT = new Payment();
        $payment = $PAYMENT->one($_GET['id']);
        $total = $PAYMENT->total($payment['payment_id'],$payment['room_price'],$payment['additional']);
        // if (strpos("$",$payment['room_price']) !== false) {
        if ($payment['customer_type'] !== 'foreign') {
         $currency = "LKR ";
        }else{
        $currency = "$ ";
        }

        if ($payment['paid'] == 1) {
          $class = ' disabled';
          $text = 'Paid';
        }else{
          $class = '';
          $text = 'Pay';
        }
        ?>


          <section class="invoice-view-wrapper section">
            <div class="row">
              <!-- invoice view page -->
              <div class="col xl9 m8 s12">
                <div class="card">
                  <div class="card-content invoice-print-area">
                    <!-- header section -->
                    <div class="row invoice-date-number">
                      <div class="col xl4 s12">
                        <span class="invoice-number mr-1">Invoice#</span>
                        <span><?php echo $payment['payment_id']; ?></span>
                      </div>
                      <div class="col xl8 s12">
                        <div class="invoice-date display-flex align-items-center flex-wrap">
                          <div class="mr-3">
                            <small>Check in:</small>
                            <span><?php echo $payment['check_in']; ?></span>
                          </div>
                          <div>
                            <small>Check out:</small>
                            <span><?php echo $payment['check_out']; ?></span>
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- logo and title -->
                    <div class="row mt-3 invoice-logo-title">
                      <div class="col m6 s12 display-flex invoice-logo mt-1 push-m6">
                        <img src="../img/logos/Final Design Seascape VTA_1.png" alt="logo" height="85" width="100">
                      </div>
                      <div class="col m6 s12 pull-m6">
                        <h4 class="indigo-text">Invoice</h4>
                        <span><?php echo $payment['type']; ?> room</span>
                      </div>
                    </div>
                    <div class="divider mb-3 mt-3"></div>
                    <!-- invoice address and contact -->
                    <div class="row invoice-info">
                      <div class="col m6 s12">
                        <h6 class="invoice-from">Bill From</h6>
                        <div class="invoice-address mb-1" >
                          <span>Seascape Hotel VTA</span>
                        </div>
                        <div class="invoice-address mb-1">
                          <span>
                            Ahangama Kanda, Ahangama,
                            Galle, Sri Lanaka. </span>
                        </div>
                        <div class="invoice-address mb-1">
                          <span>info@seascape.lk</span>
                        </div>
                        <div class="invoice-address mb-1">
                          <span>(+94)91 228 2018 / (+94)71 931 3131</span>
                        </div>
                      </div>
                      <div class="col m6 s12">
                        <div class="divider show-on-small hide-on-med-and-up mb-3"></div>
                        <h6 class="invoice-to">Bill To</h6>
                        <div class="invoice-address mb-1">
                          <span><?php echo $payment['f_name']." ".$payment['l_name']; ?></span>
                        </div>
                        <div class="invoice-address mb-1">
                          <span><?php echo $payment['NIC']; ?></span>
                        </div>
                        <div class="invoice-address mb-1">
                          <span><?php echo $payment['email']; ?></span>
                        </div>
                        <div class="invoice-address mb-1">
                          <span><?php echo $payment['tel']; ?></span>
                        </div>
                      </div>
                    </div>
                    <div class="divider mb-3 mt-3"></div>
                    <!-- product details table-->
                    <div class="invoice-product-details">
                      <table class="striped responsive-table">
                        <thead>
                          <tr>
                            <td>Room</td>
                            <td><?php echo $payment['type']; ?></td>
                            <td></td>

                            <td class="indigo-text right-align"><?php echo $payment['room_price']; ?></td>
                          </tr>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>

                            <td class="indigo-text right-align"></td>
                          </tr>
                          <tr>
                            <th>Item</th>
                            <th>Description</th>

                            <th>Qty</th>
                            <th class="right-align">Price</th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php 
               foreach ($PAYMENT->all_item($_GET['id']) as $key => $item) {
              
               ?>
                          <tr>
                            <td><?php echo $item['item']; ?></td>
                            <td></td>

                            <td><?php echo $item['quentity']; ?></td>
                            <td class="indigo-text right-align"><?php echo $currency.$item['total']; ?></td>
                          </tr>

                          <?php } ?>
                        </tbody>
                      </table>
                    </div>
                    <!-- invoice subtotal -->
                    <div class="divider mt-3 mb-3"></div>
                    <div class="invoice-subtotal">
                      <div class="row">
                        <div class="col m5 s12">
                          <p>Thanks for your business.</p>
                        </div>
                        <div class="col xl4 m7 s12 offset-xl3">
                          <ul>
                          <li class="display-flex justify-content-between">
                              <span class="invoice-subtotal-title">additional</span>
                              <h6 class="invoice-subtotal-value"><?php echo $currency.$payment['additional']; ?></h6>
                            </li>
                            <li class="display-flex justify-content-between">

                              <span class="invoice-subtotal-title">Subtotal</span>
                              <h6 class="invoice-subtotal-value"><?php echo $currency.$total; ?></h6>
                            </li>
                            <li class="display-flex justify-content-between">
                              <span class="invoice-subtotal-title">Discount</span>
                              <h6 class="invoice-subtotal-value">- <?php echo $currency.$payment['discount']; ?></h6>
                            </li>
                            
                            <li class="divider mt-2 mb-2"></li>
                            <li class="display-flex justify-content-between">
                              <span class="invoice-subtotal-title">Invoice Total</span>
                              <h6 class="invoice-subtotal-value">
                                <?php echo $currency.($total - $payment['discount']); ?></h6>
                            </li>
                            <!-- <li class="display-flex justify-content-between">
                    <span class="invoice-subtotal-title">Paid to date</span>
                    <h6 class="invoice-subtotal-value">- $ 00.00</h6>
                  </li>
                  <li class="display-flex justify-content-between">
                    <span class="invoice-subtotal-title">Balance (USD)</span>
                    <h6 class="invoice-subtotal-value">$ 10,953</h6>
                  </li> -->
                          </ul>
                          
                        </div>
                        <div>
                            
                            <img src="images/invoice/f.jpg" alt="fgbfd" width="100%">
                          </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- invoice action  -->
              <div class="col xl3 m4 s12">
                <div class="card invoice-action-wrapper">
                  <div class="card-content">
                    
                    <div class="invoice-action-btn">
                      <a href="#" class="btn-block btn btn-light-indigo waves-effect waves-light invoice-print">
                        <span>Print</span>
                      </a>
                    </div>
                   
                    <div class="invoice-action-btn">
                      <a id="paid_btn" href="#"
                        class="btn waves-effect waves-light display-flex align-items-center justify-content-center <?php echo $class; ?>">
                        <i class="material-icons mr-3">attach_money</i>
                        <span id="paid_text" class="text-nowrap"><?php echo $text; ?></span>
                      </a>
                    </div>
                    <div id="done_paid" class="chip green lighten-3" style="display: none">Paid</div>
                    <div id="error_paid" class="chip red white-text lighten-1" style="display: none">Failed</div>

                  </div>

                </div>
                <div class="card invoice-action-wrapper">
                  <div class="card-content">


                    <h3 class="card-title cyan-text">Add Item (<?php echo $currency; ?>)</h3>
                    <form method="post" id="add_item">
                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" id="item" name="item">
                          <label for="item">Item :</label>
                        </div>
                      </div>

                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" id="quentity" name="quentity">
                          <label for="quentity">Qty :</label>
                        </div>
                      </div>
                      
                      <div class="row">
                        <div class="input-field col s12">
                          <div class="row">
                            <div class="input-field col s12">
                              <textarea id="price" name="price"
                                class="materialize-textarea"></textarea>
                              <label for="price">Price : <?php echo $currency; ?></label>
                            </div>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="add_item">
                            <input id="payment_id" type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
                            <button id="add_btn" class="btn gradient-45deg-purple-deep-purple waves-effect waves-light left ml-1 <?php echo $class; ?>"
                              type="submit" name="action">Add
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <div id="done" class="chip green lighten-3" style="display: none">Item Added</div>
                      <div id="error" class="chip red white-text lighten-1" style="display: none">Failed</div>
                      <div id="iteme" class="chip red white-text lighten-1" style="display: none">Enter Item</div>
                      <div id="pricee" class="chip red white-text lighten-1" style="display: none">Enter price</div>
                      <div id="quentitye" class="chip red white-text lighten-1" style="display: none">Enter Qty</div>
                    </form>
                  </div>
                </div>
                <div class="card invoice-action-wrapper">
                  <div class="card-content">


                    <h3 class="card-title cyan-text">Other (<?php echo $currency; ?>)</h3>
                    <form method="post" id="set_discount">
                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" id="discount" name="discount" value="<?php echo $payment['discount']; ?>">
                          <label for="discount">Discount :</label>
                        </div>
                      </div>

                      

                      <div class="row">
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="set_discount">
                            <input id="booking_id" type="hidden" name="id" value="<?php echo $payment['booking_id']; ?>">
                            <button id="add_btn" class="btn gradient-45deg-purple-deep-purple waves-effect waves-light left ml-1 <?php echo $class; ?>"
                              type="submit" name="action">Set Discount
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </div>

                      <!-- <div id="done" class="chip green lighten-3" style="display: none">Item Added</div>
                      <div id="error" class="chip red white-text lighten-1" style="display: none">Failed</div>
                      <div id="iteme" class="chip red white-text lighten-1" style="display: none">Enter Item</div>
                      <div id="pricee" class="chip red white-text lighten-1" style="display: none">Enter price</div>
                      <div id="quentitye" class="chip red white-text lighten-1" style="display: none">Enter Qty</div> -->
                    </form>
                    <form method="post" id="set_additional">
                      <div class="row">
                        <div class="input-field col s12">
                          <input type="text" id="additional" name="additional" value="<?php echo $payment['additional']; ?>">
                          <label for="additional">Additional :</label>
                        </div>
                      </div>

                      

                      <div class="row">
                        <div class="row">
                          <div class="input-field col s12">
                            <input type="hidden" name="set_additional">
                            <input id="booking_id" type="hidden" name="id" value="<?php echo $payment['booking_id']; ?>">
                            <button id="add_btn" class="btn gradient-45deg-purple-deep-purple waves-effect waves-light left ml-1 <?php echo $class; ?>"
                              type="submit" name="action">Set Additional
                              <i class="material-icons right">send</i>
                            </button>
                          </div>
                        </div>
                      </div>

                    
                    </form>
                  </div>

                </div>

              </div>


            </div>
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
  <!-- END PAGE VENDOR JS-->
  <!-- BEGIN THEME  JS-->
  <script src="js/plugins.min.js"></script>
  <script src="js/search.min.js"></script>
  <script src="js/custom/custom-script.min.js"></script>
  <script src="js/scripts/customizer.min.js"></script>
  <!-- END THEME  JS-->
  <!-- BEGIN PAGE LEVEL JS-->
  <script src="js/scripts/app-invoice.min.js"></script>
  <script src="get-post/js/payment.js"></script>
  <script src="js/js-cookie-latest/js.cookie.js"></script>
  <script src="get-post/js/user.js" type="text/javascript"></script>
  <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>

  <!-- END PAGE LEVEL JS-->
</body>


</html>
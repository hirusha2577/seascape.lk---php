<?php require '../class/include.php';

if (!User::authenticate()) {
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
    <link href="vendors/sweetalert2/sweetalert.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../vendor/fakeLoader.js-master/demo/css/fakeLoader.min.css">



</head>

<body class="vertical-layout vertical-menu-collapsible page-header-dark vertical-modern-menu preload-transitions 2-columns   " data-open="click" data-menu="vertical-modern-menu" data-col="2-columns">

    <!-- BEGIN: Header-->
    <?php include 'include/header.php'; ?>
    <!-- END: Header-->

    <!-- BEGIN: SideNav-->
    <?php include 'include/sidebar.php'; ?>
    <!-- END: SideNav-->

    <!-- BEGIN: Page Main-->
    <div id="main" class=" <?php if ($_COOKIE['seascapenavlock'] == 1) {
                                echo ' main-full';
                                // echo $_COOKIE['navlock'];
                            } else {
                                echo ' ';
                            }; ?>">

        <div class="row">

            <div class="col s12">
                <div class="container">
                    <div class="section">
                        <div class="row vertical-modern-dashboard">

                            <div class="col s12 m6 l6 xl3">
                                <div class="card gradient-45deg-light-blue-cyan gradient-shadow min-height-100 white-text animate fadeLeft">
                                    <div class="padding-4">
                                        <div class="row">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5">add_shopping_cart</i>
                                                <p>Orders</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">690</h5>
                                                <p class="no-margin">New</p>
                                                <p>6,00,00</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6 xl3">
                                <div class="card gradient-45deg-red-pink gradient-shadow min-height-100 white-text animate fadeLeft">
                                    <div class="padding-4">
                                        <div class="row">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5">perm_identity</i>
                                                <p>Clients</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">1885</h5>
                                                <p class="no-margin">New</p>
                                                <p>1,12,900</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6 xl3">
                                <div class="card gradient-45deg-amber-amber gradient-shadow min-height-100 white-text animate fadeRight">
                                    <div class="padding-4">
                                        <div class="row">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5">timeline</i>
                                                <p>Sales</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">80%</h5>
                                                <p class="no-margin">Growth</p>
                                                <p>3,42,230</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col s12 m6 l6 xl3">
                                <div class="card gradient-45deg-green-teal gradient-shadow min-height-100 white-text animate fadeRight">
                                    <div class="padding-4">
                                        <div class="row">
                                            <div class="col s7 m7">
                                                <i class="material-icons background-round mt-5">attach_money</i>
                                                <p>Profit</p>
                                            </div>
                                            <div class="col s5 m5 right-align">
                                                <h5 class="mb-0 white-text">$890</h5>
                                                <p class="no-margin">Today</p>
                                                <p>$25,000</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="chart-dashboard">
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="card animate fadeUp">
                                        <div class="card-move-up waves-effect waves-block waves-light">
                                            <div class="move-up cyan darken-1">
                                                <div>
                                                    <span class="chart-title white-text">Revenue</span>
                                                    <div class="chart-revenue cyan darken-2 white-text">
                                                        <p class="chart-revenue-total">$4,500.85</p>
                                                        <p class="chart-revenue-per"><i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                                                    </div>
                                                    <div class="switch chart-revenue-switch right">
                                                        <label class="cyan-text text-lighten-5">
                                                            Month <input type="checkbox" /> <span class="lever"></span> Year
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="trending-line-chart-wrapper"><canvas id="revenue-line-chart" height="70"></canvas>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card-reveal">
                                            <span class="card-title grey-text text-darken-4">Revenue by Month <i class="material-icons right">close</i>
                                            </span>
                                            <table class="responsive-table">
                                                <thead>
                                                    <tr>
                                                        <th data-field="id">ID</th>
                                                        <th data-field="month">Month</th>
                                                        <th data-field="item-sold">Item Sold</th>
                                                        <th data-field="item-price">Item Price</th>
                                                        <th data-field="total-profit">Total Profit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>1</td>
                                                        <td>January</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>2</td>
                                                        <td>February</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>3</td>
                                                        <td>March</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>4</td>
                                                        <td>April</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>5</td>
                                                        <td>May</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>6</td>
                                                        <td>June</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>7</td>
                                                        <td>July</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>8</td>
                                                        <td>August</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>9</td>
                                                        <td>Septmber</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>10</td>
                                                        <td>Octomber</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>11</td>
                                                        <td>November</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>12</td>
                                                        <td>December</td>
                                                        <td>122</td>
                                                        <td>100</td>
                                                        <td>$122,00.00</td>
                                                    </tr>
                                                </tbody>
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
    <!--<div class="fakeLoader"></div>-->
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
    <script src="vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
    
    <script src="../vendor/fakeLoader.js-master/demo/js/fakeLoader.min.js"></script>
    <script src="js/js-cookie-latest/js.cookie.js"></script>
    <script src="get-post/js/user.js" type="text/javascript"></script>
    
    <script>
        // $(document).ready(function() {
            $.fakeLoader({
                timeToHide: 1500,
                bgColor: "#34495e",
                spinner: "spinner3"
            });
        // });
    </script>

</body>

</html>
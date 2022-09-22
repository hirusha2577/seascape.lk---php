<?php
require 'class/include.php';

$DB = new Database();

$room_id = mysqli_real_escape_string($DB->get_connection(), $_GET['id']);

$check_in = mysqli_real_escape_string($DB->get_connection(), $_GET['check_in']);
$check_out = mysqli_real_escape_string($DB->get_connection(), $_GET['check_out']);
$room_type = mysqli_real_escape_string($DB->get_connection(), $_GET['room_type']);
$customer_type = mysqli_real_escape_string($DB->get_connection(), $_GET['customer_type']);
$service_type = mysqli_real_escape_string($DB->get_connection(), $_GET['service_type']);
?>

<?php
$ROOM = new Room($room_id);
$result = $ROOM->get_inside_imagers($room_id);

$result_2 = $ROOM->get_room_price($room_type, $customer_type, $service_type);
?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>accommodation</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <?php
        include './include/links.php';
        ?>
        <link href="admin/vendors/sweetalert2/sweetalert.css" rel="stylesheet" type="text/css"/>
        <link href="css/loading.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        include './include/header.php';
        ?>
        <div class="sub-banner overview-bgi" data-image-src="img/banner/sub-banner.jpg" data-parallax="scroll" data-speed="0.10">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Booking System</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.html">Home</a></li>
                        <li class="active">Booking System</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="booking-flow content-area-10">
            <div class="container">
                <section>
                    <div class="wizard">
                        <div class="tab-pane" role="tabpanel" id="step2">
                            <div class="row">
                                <div class="col-lg-8 col-md-8 col-xs-12 col-md-push-4" id="details">
                                    <div class="contact-form sidebar-widget">
                                        <form method="post" id="personal_info_form">
                                            <h3 class="booking-heading-2 black-color">Personal Info</h3>
                                            <div class="row mb-30">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group firstname">
                                                            <label>First Name</label>
                                                            <input type="text" name="first_name" id="first_name" class="input-text" >
                                                            <p id="error_first_name" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group lastname">
                                                            <label>Last Name</label>
                                                            <input type="text" name="last_name" id="last_name" class="input-text" >
                                                            <p id="error_last_name" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group address-line-1">
                                                            <label>Address Line 1</label>
                                                            <input type="text" name="address_line_1" id="address_line_1" class="input-text" >
                                                            <p id="error_address_line_1" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group address-line-2">
                                                            <label>Address Line 2</label>
                                                            <input type="text" name="address_line_2" id="address_line_2" class="input-text" >
                                                            <p id="error_address_line_2" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group city">
                                                            <label>NIC</label>
                                                            <input type="text" name="nic" id="nic" class="input-text" >
                                                            <p id="error_nic" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group state">
                                                            <label>State/Region</label>
                                                            <input type="text" name="state" id="state" class="input-text" >
                                                            <p id="error_state" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group phone">
                                                            <label>Phone Number</label>
                                                            <input type="text" name="phone_number" id="phone_number" class="input-text" >
                                                            <p id="error_phone_number" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group email">
                                                            <label>Email Address</label>
                                                            <input type="email" name="email" id="email" class="input-text" >
                                                            <p id="error_email" style="padding-left:5px; color: red;"></p>
                                                        </div>
                                                    </div>
                                                </div>










                                                <div class="clearfix"></div>

                                                <input type="hidden" name="room_id" id="room_id" value="<?php echo $room_id; ?>">
                                                <input type="hidden" name="room_name" id="room_name" value="<?php echo $ROOM->room_name; ?>">
                                                <input type="hidden" name="check_in" id="check_in" value="<?php echo $check_in; ?>">
                                                <input type="hidden" name="check_out" id="check_out" value="<?php echo $check_out; ?>">
                                                <input type="hidden" name="room_type" id="room_type" value="<?php echo $room_type; ?>">
                                                <input type="hidden" name="customer_type" id="customer_type" value="<?php echo $customer_type; ?>">
                                                <input type="hidden" name="service_type" id="service_type" value="<?php echo $service_type; ?>">

                                                <?php
                                                if ($customer_type == "foreign") {
                                                    ?>
                                                    <input type="hidden" name="price" id="price" value="<?php echo "$ " . $result_2; ?>">
                                                    <?php
                                                } else {
                                                    ?>
                                                    <input type="hidden" name="price" id="price" value="<?php echo "LKR " . $result_2; ?>">
                                                    <?php
                                                }
                                                ?>
                                                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group email">
                                                        <ul class="list-inline pull-left">
                                                            <input type="hidden" id="g-token" name="g-token">
                                                            <li><button type="submit" class="btn">Request</button></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12 col-md-pull-8">
                                    <div class="booling-details-box">
                                        <h3 class="booking-heading-2">Booking Details</h3>

                                        <!--  Rooms detail slider start -->
                                        <div class="rooms-detail-slider simple-slider ">
                                            <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-outer">
                                                    <!-- Wrapper for slides -->
                                                    <div class="carousel-inner">
                                                        <div class="item active">
                                                            <img src="upload/room/<?php echo $ROOM->room_main_image; ?>" class="thumb-preview" alt="Chevrolet Impala">
                                                        </div>
                                                        <?php
                                                        foreach ($result as $key => $value) {
                                                            ?>

                                                            <div class="item">
                                                                <img src="upload/room/<?php echo $value['room_image_name']; ?>" class="thumb-preview" alt="Chevrolet Impala">
                                                            </div>

                                                            <?php
                                                        }
                                                        ?>
                                                    </div>
                                                    <!-- Controls -->
                                                    <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                                        <span class="slider-mover-left no-bg" aria-hidden="true">
                                                            <i class="fa fa-angle-left"></i>
                                                        </span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                                            <i class="fa fa-angle-right"></i>
                                                        </span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Rooms detail slider end -->

                                        <h4><?php echo $ROOM->room_name; ?></h4>

                                        <ul>
                                            <li>
                                                <span>Check In:</span> <?php echo $check_in; ?>
                                            </li>
                                            <li>
                                                <span>Check Out:</span> <?php echo $check_out; ?>
                                            </li>

                                            <li>
                                                <span>Adults:</span> <?php echo $ROOM->adults; ?>
                                            </li>
                                            <li>
                                                <span>Child:</span> <?php echo $ROOM->childs; ?>
                                            </li>
                                        </ul>

                                        <div class="price">
                                            <?php
                                            if ($customer_type == "foreign") {
                                                echo "Total: $ " . $result_2;
                                            } else {
                                                echo "Total: LKR " . $result_2;
                                            }
                                            ?>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>


                        </div>
                    </div>
                </section>
            </div>
        </div>

    </body>
    <?php
    include './include/footer.php';
    ?>
    <?php
    include './include/script.php';
    ?>
    <script src="admin/vendors/sweetalert2/sweetalert.min.js" type="text/javascript"></script>
    <script src="js/personal_details.js" type="text/javascript"></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6Lf3lrEZAAAAAPwtnlzzMi2ak04yxftmxBDLMG7T"></script>
    <script>

        grecaptcha.ready(function () {
            grecaptcha.execute('6Lf3lrEZAAAAAPwtnlzzMi2ak04yxftmxBDLMG7T', {action: 'submit'}).then(function (token) {

                document.getElementById('g-token').value = token;
                $("#personal_info_form").submit(function (e) {
//                     alert(token);
                    e.preventDefault();

                    var data = new FormData(this);
                    $.ajax({
                        url: "add-request.php",
                        type: "POST",
                        data: data,
                        dataType: "json",
                        async: true,
                        cache: false,
                        contentType: false,
                        processData: false,
                        success: function (data) {

                            $("#error_first_name").html('');
                            $("#error_last_name").html('');
                            $("#error_address_line_1").html('');
                            $("#error_address_line_2").html('');
                            $("#error_nic").html('');
                            $("#error_state").html('');
                            $("#error_phone_number").html('');
                            $("#error_email").html('');
                            if (data.has_errors === true) {

                                if (data.errors.first_name != '') {
                                    $('#error_first_name').html(data.errors.first_name);
                                }
                                if (data.errors.last_name != '') {
                                    $('#error_last_name').html(data.errors.last_name);
                                }
                                if (data.errors.address_line_1 != '') {
                                    $('#error_address_line_1').html(data.errors.address_line_1);
                                }
                                if (data.errors.address_line_2 != '') {
                                    $('#error_address_line_2').html(data.errors.address_line_2);
                                }
                                if (data.errors.nic != '') {
                                    $('#error_nic').html(data.errors.nic);
                                }
                                if (data.errors.state != '') {
                                    $('#error_state').html(data.errors.state);
                                }
                                if (data.errors.phone_number != '') {
                                    $('#error_phone_number').html(data.errors.phone_number);
                                }
                                if (data.errors.email != '') {
                                    $('#error_email').html(data.errors.email);
                                }
                                if (data.errors.auth) {
                                    alert(data.auth);
                                }
                            } else {
                                if (data.status === true) {
                                    alert('success');
                                     window.open('review.php?id='+data.b_token, '_self');
                                } else {
                                    alert('fail');
                                }
                            }
                        }
                    });
//        console.log(data);
                });
            });
        });

    </script>
</html>

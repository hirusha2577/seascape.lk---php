<?php
include_once 'class/Mail.php';
include 'class/include.php';
$BOOKING = new Booking();

$request = $BOOKING->get_one_request($_GET['id']);
//var_dump($request);
$room_id = Room::get_room_id($request['room_name']);
$ROOM = new Room($room_id);


$result = $ROOM->get_inside_imagers($room_id);

if (!empty($request)) {
    $MAIL = new Mail(MHOST, MUSERNAME, MPASSWORD, MTITLE, MPORT);
    $MAIL->set_address($request['email'], $request['f_name'] . " " . $request['l_name']);
    $MAIL->set_content(array('subject' => 'Seascape Hotel', 'body' => 'Request Sending Successfuly'));
    $MAIL->send();
}else{
    header("Location: index.php");
}


//var_dump($_POST);
//$BOOKING = new Booking();
//$BOOKING->set_personal_info($_POST);
//$BOOKING->create_booking();
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
                        <div class="tab-pane" role="tabpanel" id="complete">
                            <div class="booling-details-box booling-details-box-2 mrg-btm-30">
                                <h3 class="booking-heading-2">Booking Details</h3>
                                <div class="row mrg-btm-30">
                                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
                                        <!--  Rooms detail slider start -->
                                        <div class="rooms-detail-slider simple-slider ">
                                            <div id="carousel-custom-3" class="carousel slide" data-ride="carousel">
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
                                                    <a class="left carousel-control" href="#carousel-custom-3" role="button" data-slide="prev">
                                                        <span class="slider-mover-left no-bg" aria-hidden="true">
                                                            <i class="fa fa-angle-left"></i>
                                                        </span>
                                                        <span class="sr-only">Previous</span>
                                                    </a>
                                                    <a class="right carousel-control" href="#carousel-custom-3" role="button" data-slide="next">
                                                        <span class="slider-mover-right no-bg" aria-hidden="true">
                                                            <i class="fa fa-angle-right"></i>
                                                        </span>
                                                        <span class="sr-only">Next</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Rooms detail slider end -->
                                        <p class="hidden-lg hidden-md"><?php echo $ROOM->room_description; ?></p>
                                    </div>
                                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                                        <h4>Your ID: #<?php echo $request['b_token']; ?></h4>

                                        <ul>
                                            <li>
                                                <span>Check In:</span> <?php echo $request['check_in']; ?>
                                            </li>
                                            <li>
                                                <span>Check Out:</span> <?php echo $request['check_out']; ?>
                                            </li>
                                            <!--                                            <li>
                                                                                            <span>Adults:</span> <?php //echo $ROOM->adults;   ?>
                                                                                        </li>
                                                                                        <li>
                                                                                            <span>Child:</span> <?php // echo $ROOM->childs;   ?>
                                                                                        </li>-->
                                        </ul>

                                        <div class="your-address">
                                            <strong>Your Address:</strong>
                                            <address>
                                                <strong><?php echo $request['f_name'] . " " . $request['l_name']; ?></strong>
                                                <br><br>
                                                <?php echo $request['address_line_1'] . "<br>" . $request['address_line_2']; ?>
                                            </address>
                                        </div>

                                        <div class="price">
                                            Total: <?php echo $request['room_price']; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 hidden-sm hidden-xs">
                                        <p><?php echo $ROOM->room_description; ?></p>
                                    </div>
                                </div>
                            </div>
                            <br/>
                            <br/>

                            <ul class="list-inline pull-right">
                                <li><button id="btn_confirm_booking" type="button" class="btn search-button btn-theme next-step">Done</button></li>
                            </ul>


                        </div>

                    </div>
                </section>
            </div>
        </div>



        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
    </body>
    <script>
        $("#btn_confirm_booking").click(function () {
            window.location.replace("index.php");
        });
    </script>
</html>

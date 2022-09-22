<?php
require 'class/include.php';

$DB = new Database();

$c_in = explode("/",mysqli_real_escape_string($DB->get_connection(), $_GET['check_in']));
$check_in = $c_in[2] . "-" . $c_in[0] . "-" . "$c_in[1]";
$c_out = explode("/",mysqli_real_escape_string($DB->get_connection(), $_GET['check_out']));
$check_out = $c_out[2] . "-" . $c_out[0] . "-" . "$c_out[1]";
$room_type = mysqli_real_escape_string($DB->get_connection(), $_GET['room_type']);
$customer_type = mysqli_real_escape_string($DB->get_connection(), $_GET['customer_type']);
$service_type = mysqli_real_escape_string($DB->get_connection(), $_GET['service_type']);

$BOOKING = new Booking();
$BOOKING->set_booking_details($check_in, $check_out, $room_type, $customer_type, $service_type);

$result1 = $BOOKING->search_unbook_room();
$result2 = $BOOKING->search_booked_room();

$ROOM = new Room(null);
$room_price = $ROOM->get_room_price($room_type, $customer_type, $service_type);
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
        <!-- Sub banner start -->
        <div class="sub-banner overview-bgi " data-image-src="img/banner/sub-banner.jpg" data-parallax="scroll" data-speed="0.10">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Accommodation</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Accommodation</li>
                        <li class="active">Booking</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->

        <!-- Rooms section start -->
        <div class="rooms-section content-area">
            <div class="container">

                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <?php
                        
                        if(empty($result1) && empty($result2)){
                            echo "<h5 style='color: red;font-weight:bold'>Not have available Rooms for your request.</h5>";
                        }else {
//                            echo "<h3 style='font-weight: bold'>Available Rooms<h3/>";
                        }
                        
                        if ($result1) {
                            foreach ($result1 as $key => $value) {
                                ?>
                                <div class="hotel-box-list">
                                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-pad">
                                        <a href="booking_room_details.php?id=<?php echo $value['room_id']; ?>"><img src="upload/room/<?php echo $value['room_main_image_name']; ?>" alt="rooms-col-1" class="img-responsive"></a>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 detail" style="padding: 10px 30px">
                                        <div class="heading">
                                            <div class="title pull-left">
                                                <h3>
                                                    <a href="booking_room_details.php?id=<?php echo $value['room_id']; ?>"><?php echo $value['room_name']; ?></a>
                                                </h3>
                                            </div>
                                            <div class="price pull-right">
                                                <?php
                                                if($customer_type == "local"){
                                                    echo "LKR " . $room_price . " / Per Night";
                                                }  else {
                                                    echo "$ " . $room_price . " / Per Night";
                                                }
                                                 ?>
                                            </div>
                                        </div>

                                        <p>A room assigned for one person with interiors that reflects the natural and cultural beauty. A beautiful balcony view towards the ocean.</p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <ul class="fecilities">
                                                    <li>
                                                        <i class="flaticon-bed"></i>
                                                        1 King Beds
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-air-conditioning"></i>
                                                        AC
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-breakfast"></i>
                                                        Breakfast
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="fecilities">
                                                    <li>
                                                        <i class="flaticon-room-service"></i>
                                                        Room Service
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-graph-line-screen"></i>
                                                        TV
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-bath"></i>
                                                        Hot Water
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="fecilities">
                                                    <li>
                                                        <i class="flaticon-phone-receiver"></i>
                                                        Telephone
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                                        Wi-fi
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-parking"></i>
                                                        Parking
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--                                <div class="hiddenmt-15">
                                                                            <a href="room_details1.php" class="read-more-btn">Read more...</a>
                                                                        </div>-->

                                        <div class="footer">  
                                            <div class="col-md-8"></div>
                                            <div class="col-md-4" style="">
                                                <a href="booking_room_details.php?id=<?php echo $value['room_id']; ?>" class="read-more-btn">
                                                    <button class="btn" style="color: #8e1f4a; border: 1px solid #8e1f4a">Read More</button>
                                                </a>
                                                <a href="get_personal_details.php?id=<?php echo $value['room_id']; ?>&check_in=<?php echo $check_in; ?>&check_out=<?php echo $check_out; ?>&room_type=<?php echo $room_type; ?>&customer_type=<?php echo $customer_type; ?>&service_type=<?php echo $service_type; ?>"><button class="btn" style="background: #8e1f4a; color: #fff;">Book Now</button></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php
                            }
                        }

                        if ($result2) {
                            
                            foreach ($result2 as $key => $value) {
                                ?>
                                <div class="hotel-box-list">
                                    <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-pad">
                                        <a href="booking_room_details.php?id=<?php echo $value['room_id']; ?>"><img src="upload/room/<?php echo $value['room_main_image_name']; ?>" alt="rooms-col-1" class="img-responsive"></a>
                                    </div>
                                    <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 detail" style="padding: 10px 30px">
                                        <div class="heading">
                                            <div class="title pull-left">
                                                <h3>
                                                    <a href="booking_room_details.php?id=<?php echo $value['room_id']; ?>"><?php echo $value['room_name']; ?></a>
                                                </h3>
                                            </div>
                                            <div class="price pull-right">
                                                <?php
                                                if($customer_type == "local"){
                                                    echo "LKR " . $room_price . " / Per Night";
                                                }  else {
                                                    echo "$ " . $room_price . " / Per Night";
                                                }
                                                 ?>
                                            </div>
                                        </div>

                                        <p>A room assigned for one person with interiors that reflects the natural and cultural beauty. A beautiful balcony view towards the ocean.</p>
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <ul class="fecilities">
                                                    <li>
                                                        <i class="flaticon-bed"></i>
                                                        1 King Beds
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-air-conditioning"></i>
                                                        AC
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-breakfast"></i>
                                                        Breakfast
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="fecilities">
                                                    <li>
                                                        <i class="flaticon-room-service"></i>
                                                        Room Service
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-graph-line-screen"></i>
                                                        TV
                                                    </li>
                                                    <li>
                                                        <i class="fa fa-bath"></i>
                                                        Hot Water
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="col-sm-4">
                                                <ul class="fecilities">
                                                    <li>
                                                        <i class="flaticon-phone-receiver"></i>
                                                        Telephone
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-wifi-connection-signal-symbol"></i>
                                                        Wi-fi
                                                    </li>
                                                    <li>
                                                        <i class="flaticon-parking"></i>
                                                        Parking
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <!--                                <div class="hiddenmt-15">
                                                                            <a href="room_details1.php" class="read-more-btn">Read more...</a>
                                                                        </div>-->

                                        <div class="footer">  
                                            <div class="col-md-8"></div>
                                            <div class="col-md-4" style="">
                                                <a href="booking_room_details.php?id=<?php echo $value['room_id']; ?>" class="read-more-btn">
                                                    <button class="btn" style="color: #8e1f4a; border: 1px solid #8e1f4a">Read More</button>
                                                </a>
                                                <a href="get_personal_details.php?id=<?php echo $value['room_id']; ?>&check_in=<?php echo $check_in; ?>&check_out=<?php echo $check_out; ?>&room_type=<?php echo $room_type; ?>&customer_type=<?php echo $customer_type; ?>&service_type=<?php echo $service_type; ?>"><button class="btn" style="background: #8e1f4a; color: #fff;">Book Now</button></a>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <?php
                            }
                        }
                        ?>



                    </div>
                </div>
            </div>
        </div>
        <!-- Rooms  section end -->

        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
    </body>
</html>


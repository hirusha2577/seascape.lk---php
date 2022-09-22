<?php
include './class/include.php';
$COMMENT = new Comment(NULL);
$comments = $COMMENT->all_active();
$EXCURSION = new Excursion(NULL);
$excursions = $EXCURSION->all_limit(60);
?>
<html>

    <head>
        <meta charset="UTF-8">
        <title>SeaScape Hotel Home </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="  Experience the tranquil environment and shoreline at Seascape consist enclosed with slim sandy bays and rocky out crops. The breath-taking views and the nature trails surrounded creates your stay at the property in to novel and memorable one. It awaits your arrival to offer a comfortable stay with delicious meals assuring the fullest enjoyment.">
        <meta name="keywords" content="vta ahangama, vta hotel, seascape.lk, seascape, seascape ahangama, hotel in ahangama , boutique hotels in ahangama , luxury hotel in ahangama , accommodation in ahangama , boutique villas in ahangama , luxury villas in ahangama , guest houses in ahangama , hotels in ahangama , hotels in southern sri lanka , seafood restaurants in ahangama , restaurants in ahangama   , best hotel in ahangama">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <style>
            .padd-top {

                margin-top: 10px;
            }
            .wc {
                width: 450px;
            }
            .f{
                width: 100%;
                padding: 10px 17px;
                font-size: 13px;
                border: 1px solid #e8e7e7;
                outline: none;
                color: #6c6c6c;
                height: 45px;
                border-radius: 3px;
            }
            
        </style>
        <?php
        include './include/links.php';
        ?>
    </head>

    <body>
        <?php
        include './include/header.php';
        ?>
        <?php
        include './include/slider.php';
        ?>
        <div class="option-panel option-panel-collased" style="top: 45%;width: 450px;">
            <h2>Testimonial</h2>
            <div class="contact-form">

                <div class="form" >
                    <form  id="comment">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group fullname">
                                    <input type="text" name="txtFullName" id="txtFullName" class="input-text f" placeholder="Full Name" style="width: 100%;">
                                    <p id="error_name" style="padding-left:5px; color: red;"></p>

                                </div>
                                <div class="col-md-12">
                                    <span id="spanFullName"></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="form-group enter-email">
                                    <input type="email" name="txtEmail" id="txtEmail" class="input-text f" placeholder="Enter email">
                                    <p id="error_email" style="padding-left:5px; color: red;"></p>
                                </div>
                                <div class="col-md-12">
                                    <span id="spanEmail"></span>
                                </div>
                            </div>


                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <textarea class="input-text f" name="txtMessage" id="txtMessage" placeholder="Write message"></textarea>
                                    <p id="error_message" style="padding-left:5px; color: red;"></p>
                                </div>
                                <div class="col-md-12">
                                    <span id="spanMessage"></span>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                <div class="form-group message">
                                    <input type="file" name="author" id="txtFullName" class="input-text f" placeholder="Full Name" style="width: 100%;">
                                    <p id="error_message" style="padding-left:5px; color: red;"></p>
                                </div>
                                <div class="col-md-12">
                                    <span id="spanMessage"></span>
                                </div>
                            </div>
                            <!--                                    <div class="col-sm-6 col-xs-12">
                            
                                                                    <input type="text" name="captchacode" id="captchacode" class="form-control input-text input-validater" placeholder="Enter the security code >> ">
                                                                    <span id="capspan" ></span> 
                                                                </div>   
                                                                <div class="col-sm-6 col-xs-12"> 
                            <?php // include("./contact-form/captchacode-widget.php"); ?> 
                                                                </div> -->
                            <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                <input type="hidden" id="g-token" name="g-token">
                                <div class="send-btn mb-0">
                                    <button 


                                        type="submit" 
                                        class="btn-md btn-theme" id="">Send Testimonial</button>
                                </div>

                                <div id="dismessage" align="center"></div>   
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Hotel  start -->
        <div class="hotel-alpha content-area-12 " style="margin-bottom: 5%;">
            <div class="container mb-5">
                <div class="row">
                    <div class="col-lg-6 col-md-6 ">
                        <div class=" ">
                            <h5></h5>
                            <h1>Welcome To Seascape</h1>
                            <p>Experience the tranquil environment and shoreline at Seascape enclosed with slim sandy bays
                                and rocky out crops. The breath-taking views and the nature trails surrounded create your stay at the
                                property into a novel and memorable one. It awaits your arrival to offer a comfortable stay with delicious
                                meals assuring the fullest enjoyment. </p>
                            <br>
                            <p>

                                This is a Training Hotel of Vocational Training Authority's Ahangama Hotel School. This hotel is designed with the concept of a Model Hotel which facilitates On the Job Training (OJT) of approximately 30% Students of the hotel school.
                            </p>
                            <br>
                            <a href="about" class="btn btn-outline2 btn-md" style="margin-bottom: 5%;">View Details</a>
                        </div>
                    </div>
                    <div class="col-lg-5 col-lg-offset-1 col-md-6">
                        <img src="img/well4.jpg" alt="seascape.lk" class="img-responsive">
                    </div>
                </div>
            </div>
        </div>
        <!-- Hotel  end -->
        <!---------------------OWL CAROUSEL------------------------------------------->
        <!-- Hotel section start -->
        <div class="container" style="margin-bottom: 5%;">
            <!-- Main title -->
            <div class="main-title">
                <h1>Accommodation</h1>
                <p>Check out our hotel Accommodation </p>
            </div>
            <div class="row">
                <div class="col-12" style="margin-left: 4%; margin-right: 4%;">
                    <div class="owl-carousel" id="home-slider">

                        <div class="">
                            <div class="hotel-box">
                                <!--header -->
                                <div class="header clearfix">
                                    <a href="room_details.php?room_type=Single">
                                        <img src="img/accommon/fam.jpg" alt="seascape.lk" class="img-responsive">
                                    </a>
                                </div>
                                <!-- Detail -->
                                <div class="detail clearfix">

                                    <h3>
                                        <a href="room_details.php?room_type=Single">Single Rooms</a>
                                    </h3>
                                    <h5>
                                        <!-- Price -->
                                    </h5>
                                    <p style="margin-bottom: 4%; text-align: justify">A room assigned for one person with interiors that reflects the natural cultural beauty. A beautiful balcony view </p>
                                    <a href="room_details.php?room_type=Single" class="read-more-btn">View more...</a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="hotel-box">
                                    <!--header -->
                                    <div class="header clearfix">
                                        <a href="room_details.php?room_type=Double">
                                            <img src="img/accommon/dulux.jpg" alt="seascape.lk" class="img-responsive">
                                        </a>
                                    </div>
                                    <!-- Detail -->
                                    <div class="detail clearfix">

                                        <h3>
                                            <a href="room_details.php?room_type=Double">Double Rooms</a>
                                        </h3>
                                        <h5>
                                            <!-- Price -->
                                        </h5>
                                        <p style="margin-bottom: 4%; text-align: justify">A room assigned for couple washed with the fresh sea air. Garden view from balcony and direct access to pool.</p>
                                        <a href="room_details.php?room_type=Double" class="read-more-btn">View more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="">
                                <div class="hotel-box">
                                    <!--header -->
                                    <div class="header clearfix">
                                        <a href="room_details.php?room_type=Family">
                                            <img src="img/accommon/super.jpg" alt="seascape.lk" class="img-responsive">
                                        </a>
                                    </div>
                                    <!-- Detail -->
                                    <div class="detail clearfix">

                                        <h3>
                                            <a href="room_details.php?room_type=Family">Family Room</a>
                                        </h3>
                                        <h5>
                                            <!-- Price -->
                                        </h5>

                                        <p style="margin-bottom: 4%; text-align: justify">Most suitable for 4 people. Larger than the other room types. Many facilities available with the friendly staff.</p>
                                        <a href="room_details.php?room_type=Family" class="read-more-btn">View more...</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="text-center" style="margin-top: 20px;">
                <a href="accommodation" class="btn btn-outline2 btn-md ">View More</a>
            </div>
        </div>
        <!-- Hotel section end -->
        <!-- Our facilties section start -->
        <div class="our-facilties-section content-area-3" style="margin-top: 20px;">
            <div class="overlay">
                <div class="container">
                    <!-- Main title -->
                    <div class="main-title">
                        <h1>Our Facilities</h1>
                        <p>Check out our hotel facilities </p>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="services-box-2 media">
                                <div class="media-left">
                                    <i class="flaticon-school-call-phone-reception"></i>
                                </div>
                                <div class="media-body">
                                    <h3>General</h3>
                                    <ul>
                                        <li>Airport transfer</li>
                                        <li>Designated smoking area</li>
                                        <li>Air conditioning</li>
                                        <li>Safe</li>
                                        <li>Family room</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="services-box-2 media">
                                <div class="media-left">
                                    <i class="flaticon-balcony-and-door"></i>
                                </div>
                                <div class="media-body">
                                    <h3>Activities</h3>
                                    <ul>
                                        <li>Cooking class </li>
                                        <li>Beach </li>
                                        <li>Bicycle rental </li>
                                        <li>Fishing off-site </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="services-box-2 media">
                                <div class="media-left">
                                    <i class="flaticon-breakfast"></i>
                                </div>
                                <div class="media-body">
                                    <h3>Outdoors</h3>
                                    <ul>
                                        <li>Outdoor Furniture</li>
                                        <li>Beachfront</li>
                                        <li>Sun Deck</li>
                                        <li>Terrace</li>
                                        <li>Garden</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="services-box-2 media">
                                <div class="media-left">
                                    <i class="flaticon-wifi-connection-signal-symbol"></i>
                                </div>
                                <div class="media-body">
                                    <h3>Internet</h3>
                                    <ul>
                                        <li>Wi-Fi is availble in the hotel</li>
                                        <li>rooms and it's free of charge</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="services-box-2 media">
                                <div class="media-left">
                                    <i class="flaticon-room-service"></i>
                                </div>
                                <div class="media-body">
                                    <h3>Cleaning Service</h3>
                                    <ul>
                                        <li>Daily Housekeeping</li>
                                        <li>Ironing Service</li>
                                        <li>Laundry </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp delay-04s">
                            <div class="services-box-2 media">
                                <div class="media-left">
                                    <i class="flaticon-parking"></i>
                                </div>
                                <div class="media-body">
                                    <h3>Parking</h3>
                                    <ul>
                                        <li>Free Private parking is available</li>
                                        <li>on site (Reservation is not needed)</li>
                                        <li>street Parking</li>
                                        <li>Secure Parking</li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Our facilties section end -->


        <!-- Hotel section start -->
        <!-- Hotel section start -->
        <div class="content-area-13 hotel-section">
            <div class="container">
                <!-- Main title -->
                <div class="main-title">
                    <h1> Excursions</h1>
                    <p>Check out our hotel Excursions</p>
                </div>

                <div class="row">
                    <?php
                    foreach ($excursions as $key => $excursion) {
                        ?>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="hotel-box-list-2 clearfix">
                                <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-pad">
                                    <a href="excursions" class="read-more-btn"><img src="upload/excursion/<?php echo $excursion['excursion_main_image']; ?>" alt="seascape.lk" class="img-responsive"></a>
                                </div>
                                <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                                    <div class="heading">
                                        <div class="title">
                                            <h3 style="margin-top: -15px;">
                                                <a href="excursions" class="read-more-btn"><?php echo $excursion['destination']; ?></a>
                                            </h3>
                                            <p style="padding-top: -10px;  margin-bottom: 10px; margin-top: -10px;">
                                                <i class="fa fa-map-marker"></i> &nbsp; <?php echo $excursion['length_and_time']; ?>
                                            </p>
                                        </div>
                                    </div>
                                    <p><?php echo $excursion['description']; ?></p>
                                    <a href="excursions" class="read-more-btn">View Details</a>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <!--                <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="hotel-box-list-2 clearfix">
                                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-pad">
                                                <a href="excursions.php" class="read-more-btn"><img src="img/excurtion/p2.jpg" alt="seascape.lk" class="img-responsive"></a>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h3 style="margin-top: -15px;">
                                                            <a href="excursions.php" class="read-more-btn">Hummanaya Blow Hole</a>
                                                        </h3>
                                                        <p style="padding-top: -10px;  margin-bottom: 10px; margin-top: -10px;">
                                                            <i class="fa fa-map-marker"></i> &nbsp; 50km, 1h 30min
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>The Hummanaya Blow Hole is not only the only natural phenomenon of </p>
                                                <a href="excursions.php" class="read-more-btn">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="hotel-box-list-2 clearfix">
                                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-pad">
                                                <a href="excursions.php" class="read-more-btn"><img src="img/excurtion/whale.jpg" alt="seascape.lk" class="img-responsive"></a>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h3 style="margin-top: -15px;">
                                                            <a href="excursions.php" class="read-more-btn">Whale Watching in Mirissa </a>
                                                        </h3>
                                                        <p style="padding-top: -10px;  margin-bottom: 10px; margin-top: -10px;">
                                                            <i class="fa fa-map-marker"></i> &nbsp; 15km, 30min
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Mirissa Beach whale watching is a spectacular opportunity to witness </p>
                                                <a href="excursions.php" class="read-more-btn">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="hotel-box-list-2 clearfix">
                                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-pad">
                                                <a href="excursions.php" class="read-more-btn"><img src="img/excurtion/p3.jpg" alt="seascape.lk" class="img-responsive"></a>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h3 style="margin-top: -15px;">
                                                            <a href="excursions.php" class="read-more-btn">Surf in Weligama Beach</a>
                                                        </h3>
                                                        <p style="padding-top: -10px;  margin-bottom: 10px; margin-top: -10px;">
                                                            <i class="fa fa-map-marker"></i> &nbsp; 8km, 15min
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>As the pride and joy of the Weligama Village, Weligama Beach is </p>
                                                <a href="excursions.php" class="read-more-btn">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="hotel-box-list-2 clearfix">
                                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-pad">
                                                <a href="excursions.php" class="read-more-btn"><img src="img/excurtion/kanne.jpg" alt="seascape.lk" class="img-responsive"></a>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h3 style="margin-top: -15px;">
                                                            <a href="excursions.php" class="read-more-btn">Kanneliya Rainforest</a>
                                                        </h3>
                                                        <p style="padding-top: -10px;  margin-bottom: 10px; margin-top: -10px;">
                                                            <i class="fa fa-map-marker"></i> &nbsp; 60km, 1h 30min
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Located within easy rech of Galle. the Kanneliya forest can be </p>
                                                <a href="excursions.php" class="read-more-btn">View Details</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                        <div class="hotel-box-list-2 clearfix">
                                            <div class="col-lg-5 col-md-6 col-sm-12 col-xs-12 col-pad">
                                                <a href="excursions.php" class="read-more-btn"><img src="img/excurtion/madu.jpg" alt="seascape.lk" class="img-responsive"></a>
                                            </div>
                                            <div class="col-lg-7 col-md-6 col-sm-12 col-xs-12 detail">
                                                <div class="heading">
                                                    <div class="title">
                                                        <h3 style="margin-top: -15px;">
                                                            <a href="excursions.php" class="read-more-btn">Boat ride in Madol Duwa</a>
                                                        </h3>
                                                        <p style="padding-top: -10px;  margin-bottom: 10px; margin-top: -10px;">
                                                            <i class="fa fa-map-marker"></i> &nbsp; 5km, 10min
                                                        </p>
                                                    </div>
                                                </div>
                                                <p>Well worth boat ride aroud scattered cluster of islands such as </p>
                                                <a href="excursions.php" class="read-more-btn">View Details</a>
                                            </div>
                                        </div>
                                    </div>-->
                </div>
                <div class="text-center" style="margin-top: 20px;">
                    <center> <a href="excursions" class="btn btn-outline2 btn-md ">View More</a></center>
                </div>
            </div>
        </div>
        <!-- Hotel section end -->

        <!-- Testimonial secion start -->
        <div class="testimonials-1">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="text-center">
                            <div id="carouse3-example-generic" class="carousel slide" data-ride="carousel">
                                <h1>Our Testimonial</h1>
                                <div class="carousel-inner" role="listbox">
                                    <?php
                                    if (!empty($comments)) {
                                        foreach ($comments as $key => $comment) {
                                            if ($key == 0) {
                                                $active = ' active';
                                            } else {
                                                $active = '';
                                            }
                                            ?>
                                            <div class="item content clearfix <?php echo $active; ?>">
                                                <div class="item-inner">
                                                    <div class="text">
                                                        <sup>
                                                            <i class="fa fa-quote-left"></i>
                                                        </sup>
                                                        <?php echo $comment['comment']; ?> <sub>
                                                            <i class="fa fa-quote-right"></i>
                                                        </sub>
                                                    </div>
                                                    <div class="avatar">
                                                        <img src="upload/comment/<?php echo $comment['author_image']; ?>" alt="seascape.lk">
                                                    </div>
                                                    <h4><?php echo $comment['author_name']; ?></h4>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                    } else {
                                        echo ' <h4>No Comments</h4>';
                                    }
                                    ?>
                                    <!-- <div class="item content clearfix">
                                        <div class="item-inner">
                                            <div class="text">
                                                <sup>
                                                    <i class="fa fa-quote-left"></i>
                                                </sup>
                                                Specially restaurant foods are very tasty .and it is a panoramic place.actually housekeeping depaetent people are giving good servise for every guests .specially thanked for front office department Tiruni she is very kind and helpfully.then front office bell boys are giving good services.
                                                <sub>
                                                    <i class="fa fa-quote-right"></i>
                                                </sub>
                                            </div>
                                            <div class="avatar">
                                                <img src="img/testimonial/avatar-3.jpg" alt="seascape.lk">
                                            </div>
                                            <h4>Lakshi S </h4>
                                        </div>
                                    </div> -->

                                </div>
                                <!-- Controls -->
                                <a class="left carousel-control" href="#carouse3-example-generic" role="button" data-slide="prev">
                                    <span class="slider-mover-left t-slider-l" aria-hidden="true">
                                        <i class="fa fa-angle-left"></i>
                                    </span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="right carousel-control" href="#carouse3-example-generic" role="button" data-slide="next">
                                    <span class="slider-mover-right t-slider-r" aria-hidden="true">
                                        <i class="fa fa-angle-right"></i>
                                    </span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center" style="margin-top: 6px;">
                        <center> <button id="btncomment" class="btn btn-outline2 btn-md ">Add Testimonial</button></center>
                    </div>
                </div>
            </div>
        </div>



        <!-- Testimonial secion end -->

        <script>
            $(document).ready(function () {
                $(".room").change(function () {

                    var id = $(this).find(":selected").val();

                });

            });

        </script>
        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
        <script src="js/index_booking.js" type="text/javascript"></script>
        <script>
            $('#btncomment').click(function () {
                $('.option-panel').toggleClass('option-panel-collased');
                $('.option-panel').toggleClass('wc');

            });

        </script>
        <script src="https://www.google.com/recaptcha/api.js?render=6Lf3lrEZAAAAAPwtnlzzMi2ak04yxftmxBDLMG7T"></script>
        <script>

            grecaptcha.ready(function () {
                grecaptcha.execute('6Lf3lrEZAAAAAPwtnlzzMi2ak04yxftmxBDLMG7T', {action: 'submit'}).then(function (token) {
//                   alert(token);
                    document.getElementById('g-token').value = token;
                    $("#comment").submit(function (e) {
                        e.preventDefault();

                        var data = new FormData(this);
                        $.ajax({
                            url: "add-comment.php",
                            type: "POST",
                            data: data,
                            dataType: "json",
                            async: true,
                            cache: false,
                            contentType: false,
                            processData: false,
                            success: function (data) {
                                $("#error_name").html('');
                                $("#error_subject").html('');
                                $("#error_message").html('');
                                $("#error_email").html('');
                                if (data.has_errors === true) {

                                    if (data.errors.txtFullName != '') {
                                        $('#error_name').html(data.errors.txtFullName);
                                    }
                                    if (data.errors.txtSubject != '') {
                                        $('#error_subject').html(data.errors.txtSubject);
                                    }
                                    if (data.errors.txtMessage != '') {
                                        $('#error_message').html(data.errors.txtMessage);
                                    }
                                    if (data.errors.txtEmail != '') {
                                        $('#error_email').html(data.errors.txtEmail);
                                    }
                                    if (data.auth) {
                                        alert(data.auth);
                                    }
                                } else {
                                    if (data.status === true) {
                                        alert('success');
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

    </body>
    <script>
        $(window).scroll(function(){
         
              $('.option-panel').addClass('option-panel-collased');
              $('.option-panel').removeClass('wc');
        });
    </script>
</html>
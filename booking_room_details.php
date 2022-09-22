<?php
include './class/include.php';

$id = $_GET['id'];

$ROOM = new Room($id);

?>
<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Room Details</title>
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
                    <h1>Single Room</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Single Room</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->
        <!-- Rooms detail section start -->
        <div class="content-area rooms-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-xs-12"></div>
                    <div class="col-lg-8 col-md-8 col-xs-12">
                        <!-- Heading courses start -->
                        <div class="heading-rooms  clearfix sidebar-widget">
                            <div class="pull-left">
                                <h3><?php echo $ROOM->room_name; ?></h3>
                               
                            </div>
                         <div class="pull-right">
                                <h3><span>LKR <?php echo $ROOM->room_price; ?>/Per Night</span></h3>
                               
                            </div>
                        </div>
                        <!-- Heading courses end --> 

                        <!-- sidebar start -->
                        <div class="rooms-detail-slider sidebar-widget">
                            <!--  Rooms detail slider start -->
                            <div class="rooms-detail-slider simple-slider mb-40 ">
                                <div id="carousel-custom" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-outer">
                                        <!-- Wrapper for slides -->
                                        <div class="carousel-inner">
                                            <div class="item active">
                                                <img src="upload/room/<?php echo $ROOM->room_main_image; ?>" class="thumb-preview">
                                            </div>
                                            <?php
                                                $result = $ROOM->get_inside_imagers($id);
                                                
                                                foreach ($result as $key => $value) {
                                            ?>
                                            <div class="item">
                                                <img src="upload/room/<?php echo $value['room_image_name']; ?>" class="thumb-preview">
                                            </div>
                                            <?php
                                                }
                                            ?>
                                            
                                        </div>
                                        <!-- Controls -->
                                        <a class="left carousel-control" href="#carousel-custom" role="button" data-slide="prev">
                                            <span class="slider-mover-left t-slider-l" aria-hidden="true">
                                                <i class="fa fa-angle-left"></i>
                                            </span>
                                            <span class="sr-only">Previous</span>
                                        </a>
                                        <a class="right carousel-control" href="#carousel-custom" role="button" data-slide="next">
                                            <span class="slider-mover-right t-slider-r" aria-hidden="true">
                                                <i class="fa fa-angle-right"></i>
                                            </span>
                                            <span class="sr-only">Next</span>
                                        </a>
                                    </div>
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators thumbs visible-lg visible-md">
                                        <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="upload/room/<?php echo $ROOM->room_main_image ?>" alt="Chevrolet Impala"></li>
                                        <?php
                                        $result = $ROOM->get_inside_imagers($id);
                                                
                                                foreach ($result as $key => $value) {
                                        ?>
                                        <li data-target="#carousel-custom" data-slide-to="<?php echo $key+1; ?>" class=""><img src="upload/room/<?php echo $value['room_image_name']; ?>" alt="Chevrolet Impala"></li>
                                        <?php
                                                }
                                        ?>
                                        
                         
                                    </ol>
                                </div>
                            </div>
                            

                            <!-- Rooms description start -->
                            <div class="panel-box course-panel-box course-description">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Description</a></li>
                                    <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Features</a></li>
<!--                                    <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Advantages</a></li>
                                    <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Our Staff</a></li>
                                    <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li>-->
                                </ul>
                                <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active in" id="tab1default">
                                                <div class="divv">
                                                    <!-- Title -->
                                                    <h3>Rooms Description</h3>
                                                    <!-- paragraph -->
                                                    <p>A room assigned for one person with interiors that reflects the natural cultural beauty. A beautiful balcony view towards the ocean.</p>
                                                </div>
                                            </div>
                                            <div class="tab-pane fade features" id="tab2default">
                                                <!-- Rooms features start -->
                                                <div class="rooms-features">
                                                    <h3>Rooms Features</h3>
                                                    <div class="row">
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <ul class="condition">
                                                                <li>
                                                                    <i class="flaticon-air-conditioning"></i>Air conditioning
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-balcony-and-door"></i>Balcony
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-weightlifting"></i>Gym
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-parking"></i>Parking
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-sunbed"></i>Beach View
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <ul class="condition">
                                                                <li>
                                                                    <i class="flaticon-bed"></i>2 Bedroom
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-person-learning-by-reading"></i>Free Newspaper
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-swimming-silhouette"></i>Use of pool
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-graph-line-screen"></i>TV
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-no-smoking-sign"></i>No Smoking
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-md-4 col-sm-4 col-xs-12">
                                                            <ul class="condition">
                                                                <li>
                                                                    <i class="flaticon-room-service"></i>Room Service
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-breakfast"></i>Breakfast
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-phone-receiver"></i>Telephone
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-bed"></i>2 Bedroom
                                                                </li>
                                                                <li>
                                                                    <i class="flaticon-wifi-connection-signal-symbol"></i>Free Wi-Fi
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Rooms features end -->
                                            </div>
                                            <div class="tab-pane fade technical" id="tab3default">
                                                <!-- Advantages start -->
                                                <div class="advantages">
                                                    <h3>Advantages</h3>
                                                    <ul>
                                                        <li><span>1</span>Lorem ipsum dolor sit amet consectetuer</li>
                                                        <li><span>2</span>Lorem ipsum dolor sit amet consectetuer</li>
                                                        <li><span>3</span>Lorem ipsum dolor sit amet consectetuer</li>
                                                        <li><span>4</span>Lorem ipsum dolor sit amet consectetuer</li>
                                                        <li><span>5</span>Lorem ipsum dolor sit amet consectetuer</li>
                                                        <li><span>6</span>Lorem ipsum dolor sit amet consectetuer</li>
                                                    </ul>
                                                </div>
                                                <!-- Advantages end -->
                                            </div>
                                            <div class="tab-pane fade" id="tab4default">
                                                <!-- Our teachers start -->
                                                <h3>Our staff</h3>
                                                <div class="row">
                                                    <div class="our-teachers">
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="staff-box-1 ">
                                                                <!-- Staff img -->
                                                                <a href="staff.html" class="teachers-img">
                                                                    <img src="img/staff/staff-1.jpg" alt="staff-1" class="img-responsive">
                                                                </a>
                                                                <!-- Staff content -->
                                                                <div class="content">
                                                                    <!-- title -->
                                                                    <h1 class="title">
                                                                        <a href="staff.html">Dimuthu</a>
                                                                    </h1>
                                                                    <!-- Subject -->
                                                                    <h3 class="subject">Hotel Developer</h3>
                                                                    <!-- Social list -->
                                                                    <ul class="social-list clearfix">
                                                                        <li>
                                                                            <a href="#" class="facebook">
                                                                                <i class="fa fa-facebook"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="twitter">
                                                                                <i class="fa fa-twitter"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="linkedin">
                                                                                <i class="fa fa-linkedin"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="google">
                                                                                <i class="fa fa-google-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="rss">
                                                                                <i class="fa fa-rss"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                            <div class="staff-box-1">
                                                                <!-- Staff img -->
                                                                <a href="staff.html" class="teachers-img">
                                                                    <img src="img/staff/staff-2.jpg" alt="staff-2" class="img-responsive">
                                                                </a>
                                                                <!-- Staff content -->
                                                                <div class="content">
                                                                    <!-- title -->
                                                                    <h1 class="title">
                                                                        <a href="staff.html">Karen Paran</a>
                                                                    </h1>
                                                                    <!-- Subject -->
                                                                    <h3 class="subject">Hotel Director</h3>
                                                                    <!-- Social list -->
                                                                    <ul class="social-list clearfix">
                                                                        <li>
                                                                            <a href="#" class="facebook">
                                                                                <i class="fa fa-facebook"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="twitter">
                                                                                <i class="fa fa-twitter"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="linkedin">
                                                                                <i class="fa fa-linkedin"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="google">
                                                                                <i class="fa fa-google-plus"></i>
                                                                            </a>
                                                                        </li>
                                                                        <li>
                                                                            <a href="#" class="rss">
                                                                                <i class="fa fa-rss"></i>
                                                                            </a>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Our teachers end -->
                                            </div>
                                            <div class="tab-pane fade" id="tab5default">
                                                <!-- Inside video start  -->
                                                <div class="inside-video-2">
                                                    <h3>Video</h3>
                                                    <iframe src="https://www.youtube.com/watch?v=MjWEhz1i6iU" allowfullscreen=""></iframe>
                                                </div>
                                                <!-- Inside video end -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Rooms description end -->
                        </div>
                        <!-- sidebar end -->

                    </div>
                    <div class="col-lg-2 col-md-2 col-xs-12"></div>
                </div>
            </div>
        </div>
        <!-- Rooms detail section end -->
        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
    </body>
</html>
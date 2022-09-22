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
                    <h1>Excursion</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Excursion Details</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->
        <!-- Rooms detail section start -->
        <div class="content-area rooms-detail-section">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 col-md-8 col-xs-12 col-md-push-2 col-lg-push-2">
                        <!-- Heading courses start -->
                        <div class="heading-rooms  clearfix sidebar-widget">
                            <div class="pull-left">
                                <h3>Galle Dutch Fort </h3>
                            </div>
                         <div class="pull-right">
                                <h3><span class="fa fa-map-marker"></span> 20km, 30min </h3>
                               
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
                                            <div class="item">
                                                <img src="img/room/img-2.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                            </div>
                                            <div class="item">
                                                <img src="img/room/img-1.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                            </div>
                                            <div class="item">
                                                <img src="img/room/img-5.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                            </div>
                                            <div class="item">
                                                <img src="img/room/img-6.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                            </div>
                                            <div class="item">
                                                <img src="img/room/img-3.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                            </div>
                                            <div class="item">
                                                <img src="img/room/img-7.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                            </div>
                                            <div class="item active">
                                                <img src="img/room/img-4.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                            </div>
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
                                        <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="img/room/img-2.jpg" alt="Chevrolet Impala"></li>
                                        <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="img/room/img-1.jpg" alt="Chevrolet Impala"></li>
                                        <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="img/room/img-5.jpg" alt="Chevrolet Impala"></li>
                                        <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="img/room/img-6.jpg" alt="Chevrolet Impala"></li>
                                        <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="img/room/img-3.jpg" alt="Chevrolet Impala"></li>
                                        <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="img/room/img-2.jpg" alt="Chevrolet Impala"></li>
                                        <li data-target="#carousel-custom" data-slide-to="6" class=""><img src="img/room/img-4.jpg" alt="Chevrolet Impala"></li>
                                    </ol>
                                </div>
                            </div>
                            <!-- Rooms detail slider end -->

                            <!-- Search area box 2 start -->
                            <!-- <div class="sidebar-widget search-area-box-2 hidden-lg hidden-md clearfix">
                                <div class="text-center">
                                    <h3>Search Your Rooms</h3>
                                    <h1>$260/Night</h1>
                                </div>
                                <div class="search-contents">
                                    <form method="GET">
                                        <div class="row">
                                            <div class="search-your-details">
                                                <div class="col-md-12 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="text" class="btn-default datepicker" placeholder="Check In">
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <input type="text" class="btn-default datepicker" placeholder="Check Out">
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields form-control-2" name="room">
                                                            <option>Room</option>
                                                            <option>Single Room</option>
                                                            <option>Double Room</option>
                                                            <option>Deluxe Room</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields form-control-2" name="beds">
                                                            <option>Beds</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields form-control-2" name="adults">
                                                            <option>Adult</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="form-group">
                                                        <select class="selectpicker search-fields form-control-2" name="children">
                                                            <option>Child</option>
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 col-sm-12 col-xs-12">
                                                    <div class="form-group">
                                                        <button class="search-button btn-theme">Book Now</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div> -->
                            <!-- Search area box 2 end -->

                            <!-- Rooms description start -->
                            <div class="panel-box course-panel-box course-description">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#tab1default" data-toggle="tab" aria-expanded="true">Description</a></li>
                                    <!-- <li class=""><a href="#tab2default" data-toggle="tab" aria-expanded="false">Features</a></li>
                                    <li class=""><a href="#tab3default" data-toggle="tab" aria-expanded="false">Advantages</a></li>
                                    <li class=""><a href="#tab4default" data-toggle="tab" aria-expanded="false">Our Staff</a></li> -->
                                    <li class=""><a href="#tab5default" data-toggle="tab" aria-expanded="false">Video</a></li>
                                </ul>
                                <div class="panel with-nav-tabs panel-default">
                                    <div class="panel-body">
                                        <div class="tab-content">
                                            <div class="tab-pane fade active in" id="tab1default">
                                                <div class="divv">
                                                    <!-- Title -->
                                                    <h3>Excursion Description</h3>
                                                    <!-- paragraph -->
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                                                        tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod
                                                        fringilla. Curabitur lobortis nunc velit,</p>
                                                    <p>Lorem ipsum dolor sit amet, conser adipiscing elit. Maecenas in pulvinar neque. Nulla finibus lobortis pulvinar. Donec a conser nulla. Nulla posuere sapien vitae lectus suscipit, et pulvinar nisi tincidunt. Aliquam erat volutpat. Curabitur convallis fringilla diam sed aliquam. Sed
                                                        tempor iaculis massa faucibus feugiat. In fermentum facilisis massa, a consequat purus viverra a. Aliquam pellentesque nibh et nibh feugiat gravida. Maecenas ultricies, diam vitae semper placerat, velit risus accumsan nisl, eget tempor lacus est vel nunc. Proin accumsan elit sed neque euismod
                                                        fringilla. Curabitur lobortis nunc velit,</p>
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
                    <!--  -->
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
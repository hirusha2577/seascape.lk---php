<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Room Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <?php
    include './include/links.php';
    ?>
    <style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 6px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 8px;
            padding-bottom: 8px;
            text-align: left;
            background-color: #8e1f4a;
            color: white;
        }
    </style>

</head>

<body>
    <?php
    include './include/header.php';
    ?>
    <!-- Sub banner start -->
    <div class="sub-banner overview-bgi " data-image-src="img/banner/sub-banner.jpg" data-parallax="scroll" data-speed="0.10">
        <div class="container">
            <div class="breadcrumb-area">
                <h1>Family Room</h1>
                <ul class="breadcrumbs">
                    <li><a href="index.php">Home</a></li>
                    <li class="active">Family Room</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- Sub Banner end -->
    <!-- Rooms detail section start -->
    <div class="content-area rooms-detail-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <!-- Heading courses start -->
                    <div class="heading-rooms  clearfix sidebar-widget">
                        <div class="pull-left">
                            <h3> Family Room</h3>

                        </div>
                        <div class="pull-right">
                            <h3><span>
                                    <!-- Price --></span></h3>

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
                                            <img src="img/accommon/9.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="img/accommon/2.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="img/accommon/3.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="img/accommon/4.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="img/accommon/5.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="img/accommon/6.jpg" class="thumb-preview" alt="Chevrolet Impala">
                                        </div>
                                        <div class="item">
                                            <img src="img/accommon/7.jpg" class="thumb-preview" alt="Chevrolet Impala">
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
                                    <li data-target="#carousel-custom" data-slide-to="0" class=""><img src="img/accommon/6.jpg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="1" class=""><img src="img/accommon/5.jpg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="2" class=""><img src="img/accommon/4.jpg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="3" class=""><img src="img/accommon/3.jpg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="4" class=""><img src="img/accommon/2.jpg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="5" class=""><img src="img/accommon/1.jpg" alt="Chevrolet Impala"></li>
                                    <li data-target="#carousel-custom" data-slide-to="6" class=""><img src="img/accommon/7.jpg" alt="Chevrolet Impala"></li>
                                </ol>
                            </div>
                        </div>
                        <!-- Rooms detail slider end -->

                        <!-- Search area box 2 start -->
                        <div class="sidebar-widget search-area-box-2 hidden-lg hidden-md clearfix">
                            <div class="text-center">
                                <h3>Search Your Rooms</h3>
                                <h1>
                                    <!-- Price -->
                                </h1>
                            </div>
                            <div class="search-contents">
                                <form method="POST" action="./book-room.php">
                                    <div class="col-lg-12 col-pad col-pad-2">

                                    </div>
                                    <div class="search-your-details">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check In" name="check_in">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check Out" name="check_out">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields room_change form-control-2" name="room_type">
                                                    <option>-- Select Room -- </option>
                                                    <option value="Single Room">Single Room</option>
                                                    <option value="Double Room">Double Room</option>
                                                    <option value="Deluxe Room" selected="selected">Deluxe Room</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields form-control-2" name="adults">
                                                    <option>Adult</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields form-control-2 " name="children">
                                                    <option>Child</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <input type="hidden" name="room_price" id="room_price" value="LKR 7500.00">
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <button class="search-button btn-theme" type="submit">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Search area box 2 end -->

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
                                                <p>Most suitable for 4 people. Larger than the other room types. Many facilities available with the friendly staff.</p>
                                            </div>
                                            <div>
                                                <table id="customers">
                                                    <tr>
                                                        <th>Customer</th>
                                                        <th>Room only</th>
                                                        <th>Bed & Breakfast</th>
                                                        <th>Half board</th>
                                                        <th>Full board</th>
                                                    </tr>
                                                    <tr>
                                                        <td>Foreign</td>
                                                        <td>$55.00</td>
                                                        <td>$60.00</td>
                                                        <td>$80.00</td>
                                                        <td>$95.00</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Local</td>
                                                        <td>Rs.6500.00</td>
                                                        <td>Rs.8900.00</td>
                                                        <td>Rs.12900.00</td>
                                                        <td>Rs.16100.00</td>
                                                    </tr>


                                                </table>
                                                <br />
                                                <p>
                                                    <b>Special rates applicable for government and state sector employees.</b>
                                                </p>
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
                <div class="col-lg-4 col-md-4 col-xs-12">
                    <div class="sidebar">
                        <!-- Search area box 2 start -->
                        <div class="sidebar-widget search-area-box-2 hidden-sm hidden-xs clearfix bg-grey">
                            <h3>Search Your Rooms</h3>
                            <h1>
                                <!-- Price -->
                            </h1>
                            <div class="search-contents">
                                <form method="POST" action="./book-room.php">
                                    <div class="col-lg-12 col-pad col-pad-2">

                                    </div>
                                    <div class="search-your-details">

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check In" name="check_in">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <input type="text" class="btn-default datepicker" placeholder="Check Out" name="check_out">
                                            </div>
                                        </div>
                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields form-control-2" name="room_type">
                                                    <option>-- Select Room -- </option>
                                                    <option value="Single Room">Single Room</option>
                                                    <option value="Double Room">Double Room</option>
                                                    <option value="Deluxe Room" selected="selected">Deluxe Room</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields form-control-2" name="adults">
                                                    <option>Adult</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <select class="selectpicker search-fields form-control-2 " name="children">
                                                    <option>Child</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                            <div class="form-group">
                                                <button class="search-button btn-theme" type="submit">Book Now</button>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Search area box 2 end -->

                        <!-- Recent News start -->
                        <div class="sidebar-widget recent-news">
                            <div class="main-title-2">
                                <h1>Other Room Types</h1>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="img/accommon/super.jpg" alt="small-img">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="room_details1.php">Single Room</a>
                                    </h3>
                                    <p>
                                        <!-- Price -->
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="img/accommon/dulux.jpg" alt="small-img-2">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="room_details2.php">Double Room</a>
                                    </h3>
                                    <p>
                                        <!-- Price -->
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="img/accommon/fam.jpg" alt="small-img-3">
                                </div>
                                <div class="media-body">
                                    <h3 class="media-heading">
                                        <a href="room_details3.php">Family Room</a>
                                    </h3>
                                    <p>
                                        <!-- Price -->
                                    </p>
                                </div>
                            </div>
                        </div>
                        <!-- Recent News end -->
                    </div>
                </div>
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
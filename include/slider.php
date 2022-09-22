<?php include './class/include.php';
$SLIDER = new Slider(NULL);
$sliders = $SLIDER->all();
?>
<!-- Banner start -->
<div class="banner banner-style-3 banner-max-height">
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <?php
            
            foreach ($sliders as $key => $slider) {
                if($key==0){
                    $active = ' active';
                }else{
                    $active = ' ';
                }
            ?>
              <div class="item <?php echo $active; ?>">
                <img src="upload/slider/<?php echo $slider['image_name']; ?>" alt="seascape">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="banner-content banner-content-left text-left">
                        <h1 data-animation="animated fadeInLeft delay-05s" style="text-shadow: 0 2px 5px rgba(0, 0, 0, .5);"><span><?php echo $slider['title']; ?></span> <?php echo $slider['sub_title']; ?></h1>
                        <p data-animation="animated fadeInLeft delay-1s"> <?php echo $slider['description']; ?></p>
                        <a href="accommodation" class="btn btn-md btn-theme" data-animation="animated fadeInLeft delay-15s">Get booked now</a>
                        <a href="about.php" class="btn btn-md border-btn-theme" data-animation="animated fadeInLeft delay-20s">Learn More</a>
                    </div>
                </div>
            </div>
            <?php } ?>
            <!-- <div class="item ">
                <img src="img/banner/slider1.jpg" alt="banner-slider-3">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="banner-content banner-content-left text-left">
                        <h1 data-animation="animated fadeInDown delay-05s" style="text-shadow: 0 2px 5px rgba(0, 0, 0, .5);"><span>Welcome to</span> Hotel Seascape</h1>
                        <p data-animation="animated fadeInUp delay-1s">Experience the tranquil environment and shoreline at Seascape
                            <br/>consist enclosed with slim sandy bays
                               and rocky out crops</p>
                        <a href="book-room.php" class="btn btn-md btn-theme" data-animation="animated fadeInUp delay-15s">Get booked now</a>
                        <a href="about.php" class="btn btn-md border-btn-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="img/banner/slider4.jpg" alt="banner-slider-2">
                <div class="carousel-caption banner-slider-inner banner-top-align">
                    <div class="banner-content banner-content-left text-left">
                        <h1 data-animation="animated fadeInLeft delay-05s" style="text-shadow: 0 2px 5px rgba(0, 0, 0, .5);"><span>Best Place To</span> Find Room</h1>
                        <p data-animation="animated fadeInUp delay-05s">When you’re here for a break, <br>For work, or for a celebration, your comfort becomes our priority.We cherish the time you spend with us.</p>
                        <a href="book-room.php" class="btn btn-md btn-theme" data-animation="animated fadeInUp delay-15s">Get booked now</a>
                        <a href="about.php" class="btn btn-md border-btn-theme" data-animation="animated fadeInUp delay-15s">Learn More</a>
                    </div>
                </div>
            </div> -->
          
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="slider-mover-left" aria-hidden="true">
                <i class="fa fa-angle-left"></i>
            </span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="slider-mover-right" aria-hidden="true">
                <i class="fa fa-angle-right"></i>
            </span>
            <span class="sr-only">Next</span>
        </a>

        <!-- Search area box start -->
        <div class="search-area-box-3 hidden-xs hidden-sm" style="margin-top: -100px;">
            <div class="search-contents">
                <form method="post" id="index_booking"> 
                    <div class="col-lg-12 col-pad col-pad-2">
                        <div class="search-your-rooms">
                            <h2 class="hidden-xs hidden-sm">Book Your <span>Rooms</span></h2>
                        </div>
                    </div> 
                    <div class="search-your-details">

                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="btn-default datepicker" placeholder="Check In" id="check_in" name="check_in">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <input type="text" class="btn-default datepicker" placeholder="Check Out" id="check_out" name="check_out">
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" id="room_type" name="room_type">
                                    <option value="">-- Room Type -- </option>
                                    <option value="single">Single Room</option>
                                    <option value="double">Double Room</option>
                                    <option value="family">Family Room</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" id="customer_type" name="customer_type">
                                    <option value="">-- Customer Type -- </option>
                                    <option value="foreign">Foreign</option>
                                    <option value="local">Local</option>
                                </select>
                            </div>
                        </div>
                        
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="form-group">
                                <select class="selectpicker search-fields form-control-2" id="service_type" name="service_type">
                                    <option value="">-- Service Type -- </option>
                                    <option value="room_only">Room Only</option>
                                    <option value="bed_breakfast">Bed & Breakfast</option>
                                    <option value="half_board">Half Board</option>
                                    <option value="full_board">Full Board</option>
                                </select>
                            </div>
                        </div>
                        <!--alert-->
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="alert alert-danger" role="alert" id="index_booking_alert" style="text-transform: capitalize"></div>
                        </div>
                        <!--end alert-->
                        
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                            <div class="form-group">
                                <button class="search-button btn-theme" type="submit">Book Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <!-- Search area box end -->
    </div>
</div>
<!-- Banner end -->

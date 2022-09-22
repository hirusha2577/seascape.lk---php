<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Book Your Room </title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <?php
        include './include/links.php';
        $check_in = '';
        $check_out = '';
        $room_type = '';
        $adults = '';
        $children = '';
        $price = '';






        if (isset($_POST['check_in'])) {
            $check_in = $_POST['check_in'];
        }

        if (isset($_POST['check_out'])) {
            $check_out = $_POST['check_out'];
        }

        if (isset($_POST['room_type'])) {
            $room_type = $_POST['room_type'];
        }
        if (isset($_POST['adults'])) {
            $adults = $_POST['adults'];
        }
        if (isset($_POST['children'])) {
            $children = $_POST['children'];
        }
        if (isset($_POST['room_price'])) {
            $price = $_POST['room_price'];
        }
       
        ?>
    </head>
    <body>
        <?php
        include './include/header.php';
        ?>
        <link href="book-room/style.css" rel="stylesheet" type="text/css"/>
        <!-- Sub banner start -->
        <div class="sub-banner overview-bgi " data-image-src="img/banner/sub-banner.jpg" data-parallax="scroll" data-speed="0.10">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Book Now - <?php echo $room_type ?> </h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Book Your Room</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->

        <!-- About Institute start -->
        <div class="contact-1 content-area-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                        <!-- Contact form start -->
                        <div class="contact-form">
                            <div class="form" action="" method="GET" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group fullname">
                                            <input type="text" name="txtFullName" id="txtFullName" class="input-text" placeholder="Full Name">
                                            <div class="col-md-12">
                                                <span id="spanFullName"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group enter-email">
                                            <input type="email" name="txtEmail" id="txtEmail" class="input-text" placeholder="Enter email">
                                            <div class="col-md-12">
                                                <span id="spanEmail"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="txtCheckIn" id="txtCheckIn" class="input-text datepicker" placeholder="Check in" value="<?php echo $check_in ?>">
                                            <div class="col-md-12">
                                                <span id="spanCheckIn"></span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="txtCheckOut" id="txtCheckOut"   class="input-text datepicker" placeholder="Check Out" value="  <?php echo $check_out ?>" >
                                        </div>
                                        <div class="col-md-12">
                                            <span id="spanCheckOut"></span>
                                        </div> 
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="text" name="txtRoomType" id="txtRoomType"    class="input-text  " placeholder="Check Out" value=" <?php echo $room_type ?>" >
                                            <div class="col-md-12">
                                                <span id="spanRoomType"></span>
                                            </div> 
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number ">
                                            <input type="number" min="0"  name="txtAdults" id="txtAdults"    class="input-text  " placeholder="Num Adults" value="      <?php echo $adults ?>" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                        <div class="form-group number">
                                            <input type="number" min="0"  name="txtChild" id="txtChild"   class="input-text  " placeholder="Num Child" value=" <?php echo $children ?>" >
                                            <input type="hidden" name="txtPrice" id="txtPrice"   class="input-text"  value=" <?php echo $price ?>" >
                                        </div>
                                    </div>

                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                        <div class="form-group message">
                                            <textarea class="input-text" name="txtMessage" id="txtMessage"    placeholder="Write message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-xs-12">

                                        <input type="text" name="captchacode" id="captchacode" class="form-control input-text input-validater" placeholder="Enter the security code >> ">
                                        <span id="capspan" ></span> 
                                    </div>   
                                    <div class="col-sm-6 col-xs-12"> 
                                        <?php include("./contact-form/captchacode-widget.php"); ?> 
                                    </div>   
                                    <div class="col-lg-12 col-md-6 col-sm-12 col-xs-12">
                                        <div class="send-btn mb-0">
                                            <button type="submit" class="btn-md btn-theme" id="btnSubmit">Send Message</button>
                                        </div>
                                        <div id="dismessage" align="center"></div>      
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Contact form end -->
                    </div>

                </div>
            </div>
        </div>
        <!-- About Institute end -->

        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
        <script src="book-room/scripts.js" type="text/javascript"></script>
    </body>
</html>

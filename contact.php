<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title> Contact </title>
        <link href="contact-form/style.css" rel="stylesheet" type="text/css"/>
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
        <!--sub banner start-->
        <div class="sub-banner overview-bgi " data-image-src="img/banner/sub-banner.jpg" data-parallax="scroll" data-speed="0.10">
            <div class="container">
                <div class="breadcrumb-area">
                    <h1>Contact Us</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Contact Us</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->

        <!-- Contact 1 start -->
        <div class="contact-1 content-area-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12">
                        <!-- Contact form start -->
                        <div class="contact-form">

                            <div class="form" >
                                <form  id="contact_form">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group fullname">
                                                <input type="text" name="txtFullName" id="txtFullName" class="input-text" placeholder="Full Name">
                                                <p id="error_name" style="padding-left:5px; color: red;"></p>
                                            </div>
                                            <div class="col-md-12">
                                                <span id="spanFullName"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                                            <div class="form-group enter-email">
                                                <input type="email" name="txtEmail" id="txtEmail" class="input-text" placeholder="Enter email">
                                                <p id="error_email" style="padding-left:5px; color: red;"></p>
                                            </div>
                                            <div class="col-md-12">
                                                <span id="spanEmail"></span>
                                            </div>
                                        </div>
                                        <div class="col-lg-12   col-md-12 col-sm-12 col-xs-12">
                                            <div class="form-group subject">
                                                <input type="text" name="txtSubject" id="txtSubject" class="input-text" placeholder="Subject">
                                                <p id="error_subject" style="padding-left:5px; color: red;"></p>
                                            </div>
                                            <div class="col-md-12">
                                                <span id="spanSubject"></span>
                                            </div>
                                        </div>

                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 clearfix">
                                            <div class="form-group message">
                                                <textarea class="input-text" name="txtMessage" id="txtMessage" placeholder="Write message"></textarea>
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
                                                    class="btn-md btn-theme" id="">Send Message</button>
                                            </div>

                                            <div id="dismessage" align="center"></div>   
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!-- Contact form end -->
                    </div>
                    <div class="col-lg-4 col-lg-offset-1 col-md-4 col-md-offset-1 col-sm-6 col-xs-12">
                        <!-- Contact details start -->
                        <div class="contact-details">
                            <div class="main-title-2">
                                <h3>Our Address</h3>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-map-marker"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Office Address</h4>
                                    <p>Seascape Hotel De VTA,<br>
                                        Vocational Training Authority,<br>
                                        Ahangama Kanda,
                                        Ahangama,<br>
                                        Galle, Sri Lanaka.
                                    </p>
                                </div>
                            </div>
                            <div class="media">
                                <div class="media-left">
                                    <i class="fa fa-phone"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Phone Number</h4>
                                    <p>
                                        <a href="tel:+94 912282018">office: +94 91 228 2018</a>
                                    </p>
                                    <p>
                                        <a href="tel:(+94) 71 931 3131">Mobile: (+94) 71 931 3131</a>
                                    </p> 
                                </div>
                            </div>
                            <div class="media mb-0">
                                <div class="media-left">
                                    <i class="fa fa-envelope"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Email Address</h4>
                                    <p>
                                        <a href="mailto:info@seascape.lk">info@seascape.lk</a>
                                    </p>

                                </div>
                            </div>
                            <div class="media mb-0">
                                <div class="media-left">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <div class="media-body">
                                    <h4>Open hours</h4>
                                    <p>
                                        Monday to Friday: 8.30 am - 6.00 pm <br>
                                        Saturday and Sunday: 9.00 am - 5.00 pm
                                    </p>
                                    <p>
                                        <a href="" target="_blank"></a>
                                    </p>
                                </div>
                            </div> 

                        </div>
                        <!-- Contact details end -->
                    </div>
                </div>

            </div>
        </div>
        <!-- Contact-1 end -->

        <!-- Google map start -->
        <div class="section">
            <div class="map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15872.769603749479!2d80.372141!3d5.9682186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xed15057d6ecf7ec2!2sHotel%20school%20VTA%2C%20Vocational%20Training%20Center%20-%20Ahangama!5e0!3m2!1sen!2slk!4v1582579735691!5m2!1sen!2slk" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

            </div>
        </div>
        <!-- Google map end -->


        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
<!--        <script src="https://www.google.com/recaptcha/api.js"></script>
        <script>
            function onSubmit(token) {
                document.getElementById("contact_form").submit();
            }
        </script>-->
        <script src="https://www.google.com/recaptcha/api.js?render=6Lf3lrEZAAAAAPwtnlzzMi2ak04yxftmxBDLMG7T"></script>
        <script>

            grecaptcha.ready(function () {
                grecaptcha.execute('6Lf3lrEZAAAAAPwtnlzzMi2ak04yxftmxBDLMG7T', {action: 'submit'}).then(function (token) {
//                    alert(token);
                    document.getElementById('g-token').value = token;
                    $("#contact_form").submit(function (e) {
                        e.preventDefault();

                        var data = new FormData(this);
                        $.ajax({
                            url: "contact-form/ajax.php",
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

        <!--<script src="contact-form/scripts.js" type="text/javascript"></script>-->
    </body>
</html>

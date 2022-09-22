<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Excursions</title>
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
                    <h1>Excursions</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Excursions</li>
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
                        include './class/include.php';
                        $EXCURSION = new Excursion(NULL);
                        $result = $EXCURSION->all_limit(530);
                        foreach ($result as $key => $excursion) {
                            if (fmod($key,2)==1) {
                                $style = 'float: right';   
                                }else{
                                $style = 'float: left';   
                                }
                         ?>
                        
                        <div class="hotel-box-list">
                            <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12 col-pad" style="<?php echo $style; ?>">
                                <a > <img src="upload/excursion/<?php echo $excursion['excursion_main_image']; ?>" alt="rooms-col-1" class="img-responsive"></a>
                            </div>
                            <div class="col-lg-8 col-md-7 col-sm-12 col-xs-12 detail">
                                <div class="heading">
                                    <div class="title pull-left">
                                        <h3 style="margin-top: -15px;">
                                            <a ><?php echo $excursion['destination']; ?> </a>
                                        </h3>
                                        <p style="padding-top: 5px; margin-bottom: -5px;">
                                            <i class="fa fa-map-marker"></i>  &nbsp; <?php echo $excursion['length_and_time']; ?>
                                        </p>
                                    </div>
                                    
                                </div>

                                <p class="text-justify"><?php echo $excursion['description']; ?></p>
                     
                              <!--  <div class="hiddenmt-15">
                                    <a href="blog-details.html" class="read-more-btn">Read more...</a>
                                </div>-->

                            </div>
                        </div>
                    <?php } ?>
                        
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
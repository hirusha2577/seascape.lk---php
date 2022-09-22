<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Dining</title>
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
                    <h1>Dining</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Dining</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->

        <!-- staff section start -->
        <div class="content-area staff-section">
            <div class="container">
                <div class="row">
                    <?php
                    include './class/include.php';
                    $DINING = new Dining(NULL);
                    $result = $DINING->all_limit(100);
                    // Helper::dd($result);
                    foreach ($result as $key => $dining) {                   
                    ?>
                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                        
                        <div class="staff-box-2">
                            <div class="col-lg-5 col-md-5 col-sm-12 col-pad">
                                <img src="upload/dining/<?php echo $dining['dining_main_image_name'] ?>" alt="staff-5" class="img-responsive">  
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-12 content">
                                <!-- Title -->
                                <h1 class="title">
                                    <a href="#"><?php echo $dining['dining_title'] ?></a>
                                </h1>
                                    
                                <!-- paragraph -->
                                <p class="text-justify"><?php echo $dining['description'] ?></p>
                                <!-- btn -->
                                
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>

<!--                <div class="text-center">
                     Page navigation start 
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li><a href="staff.html">1 <span class="sr-only">(current)</span></a></li>
                            <li class="active"><a href="staff-2.html">2</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                     Page navigation end 
                </div>-->
            </div>
        </div>
<?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
    </body>
</html>
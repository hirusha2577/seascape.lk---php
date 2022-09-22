<!DOCTYPE html>
<html lang="zxx">
    <head>
        <title>Event</title>
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
                    <h1>Events</h1>
                    <ul class="breadcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">Events</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Sub Banner end -->

        <!-- Events section 2 start -->
        <div class="events-secion-2 content-area">
            <div class="container">
                <div class="row">
                     <?php
                    include './class/include.php';
                    $EVENT = new Event(NULL);
                    $result = $EVENT->all_limit(160);
                    // Helper::dd($result);
                    foreach ($result as $key => $event) {                   
                    ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="events-box">
                            <div class="recent-news-theme">
                                <img src="upload/event/<?php echo $event['event_main_image']; ?>" alt="events-img-2" class="img-responsive">
                                
                            </div>
                            <div class="events-box-content">
                                <h1><a href=""><?php echo $event['event_title']; ?></a></h1>
                                
                                <p class="text-justify"><?php echo $event['description']; ?> </p>
                               
                            </div>
                        </div>
                    </div>
                   <?php } ?>
                </div>
            </div>
        </div>
        <!-- Events section 2end -->
       
        <?php
        include './include/footer.php';
        ?>
        <?php
        include './include/script.php';
        ?>
    </body>
    <script type="text/javascript">
        $(document).ready(function(){
            $('.carousel-inner .item a').simpleLightbox();
        });
    </script>
</html>



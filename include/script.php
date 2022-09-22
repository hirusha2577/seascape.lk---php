<script  src="js/jquery-2.2.0.min.js"></script>
<script  src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/wow.min.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/bootstrap-datepicker.min.js"></script>
<script  src="js/app.js"></script>
<script src="js/parallax.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script src="vendor/owl/owl.carousel.min.js" type="text/javascript"></script>
<script src="vendor/lightbox/simple-lightbox.min.js" type="text/javascript"></script>
<script src="vendor/lightbox/simple-lightbox.js" type="text/javascript"></script>

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB0N5pbJN10Y1oYFRd0MJ_v2g8W2QT74JE"></script>
<script>

    $(document).ready(function () {
        $(".room_change").change(function () {

            var name = $(this).find(":selected").val();
            var price = '';

            if (name == "Single Room") {
                price = "LKR 6000.00";
            } else if (name == "Double Room") {
                price = "LKR 6500.00";
            } else {
                price = "LKR 7500.00";
            }

            $("#room_price").val();
            $("#room_price").val(price);

        });
    });

    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                        "<div class='map-edu contact-map-content'>" +
                        "<div class='map-content'>" +
                        "<p class='address'>20-21 Kathal St. Tampa, FL</p>" +
                        "<ul class='map-edu-list'> " +
                        "<li><i class='fa fa-phone'></i>  +0477 85X6 552</li> " +
                        "<li><i class='fa fa-envelope'></i>  info@themevessel.com</li> " +
                        "<li><a href='index.html'><i class='fa fa-globe'></i>  http://http://themevessel.com</li></a> " +
                        "</ul>" +
                        "</div>" +
                        "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>


<script>
    var owl = $('#home-slider');

    owl.owlCarousel({
        margin: 30,
        autoplay: true,
        autoplaytimeout: 2500,
        autoplayhoverpause: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3,
                loop: true
            }
        }
    });
//         owl.on('mousewheel', '.owl-stage', function (e) {
//     if (e.deltaY>0) {
//         owl.trigger('next.owl');
//     } else {
//         owl.trigger('prev.owl');
//     }
//     e.preventDefault();
// });
</script>
<script>
    var lightbox1 = $('.gallery1 a').simpleLightbox();
    var lightbox = $('.gallery ul').simpleLightbox();

</script>

<script>

    $(window).scroll(function () {

        wS = $(this).scrollTop();

        if (wS > 40) {
            console.log(wS);
            $('.main-header').addClass('fix_nav');
            //$('li').css('color','red');
            $('#top').css('margin-top', '80px');
        }

        if (wS < 40) {
            console.log(wS);
            $('.main-header').removeClass('fix_nav');
            $('#top').css('margin-top', '0px');
        }

    });
</script>

<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square 
<?php if($_COOKIE['seascapenavlock']==1){
echo ' nav-collapsed';
// echo $_COOKIE['navlock'];
}else{
echo ' ';
}
; ?>
">    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.php"><img class="hide-on-med-and-down" src="images/logo/materialize-logo-color.png" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="images/logo/materialize-logo.png" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Frontscape</span></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">


        <!--        <li class="bold"><a class="waves-effect waves-cyan " href="app-email.php"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Pages</span></a>
   </li>-->
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan <?php if ($active == 'request') {echo 'active';} ?>" href="manage_booking.php"><i class="material-icons">insert_invitation</i><span class="insert_invitation" data-i18n="Chat">Manage Request</span><span title="Request Count" id="count_request" style="padding: 5px; margin-left: 10px;color: #fff; border-radius: 5px;"></span></a>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan <?php if ($active == 'booking') {echo 'active';} ?>" href="manage_booking_list.php"><i class="material-icons">event_available</i><span class="insert_invitation" data-i18n="Chat">Booking List</span><span title="Request Count" id="count_request" style="padding: 5px; margin-left: 10px;color: #fff; border-radius: 5px;"></span></a>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan <?php if ($active == 'payment') {echo 'active';} ?>" href="manage_payment.php"><i class="material-icons">monetization_on</i><span class="insert_invitation" data-i18n="Chat">Manage Payment</span></a>
        </li>
        <hr style="width: 75%; ">
        <li>
            <a class="navbar-toggler1" href="#">
                <i class="material-icons">radio_button_checked</i>
            </a>
        </li>
    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<script src="../js/jquery-2.2.0.min.js" type="text/javascript"></script>
<script>
    get_count();

    function get_count() {
        $.post("get-post/ajax/get_request_count.php", function(data, status) {
            if (status === "success") {
                if (data.status != 0) {
                    $("#count_request").css("background", "red").html(data.status);
                } else {
                    $("#count_request").css("background", "none");
                }
            }
        });
        setTimeout(get_count, 1000);
    }
</script>
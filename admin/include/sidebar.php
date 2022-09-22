<aside class="sidenav-main nav-expanded nav-lock nav-collapsible sidenav-light sidenav-active-square 
<?php if ($_COOKIE['seascapenavlock'] == 1) {
    echo ' nav-collapsed';
    // echo $_COOKIE['navlock'];
} else {
    echo ' ';
}; ?>
">
    <div class="brand-sidebar">
        <h1 class="logo-wrapper"><a class="brand-logo darken-1" href="index.php"><img class="hide-on-med-and-down" src="images/logo/materialize-logo-color.png" alt="materialize logo" /><img class="show-on-medium-and-down hide-on-med-and-up" src="images/logo/materialize-logo.png" alt="materialize logo" /><span class="logo-text hide-on-med-and-down">Seascape</span></a></h1>
    </div>
    <ul class="sidenav sidenav-collapsible leftside-navigation collapsible sidenav-fixed menu-shadow" id="slide-out" data-menu="menu-navigation" data-collapsible="menu-accordion">


        <!--        <li class="bold"><a class="waves-effect waves-cyan " href="app-email.php"><i class="material-icons">mail_outline</i><span class="menu-title" data-i18n="Mail">Pages</span></a>
   </li>-->


        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan <?php if ($active == 'slider') {
                                                                            echo 'active';
                                                                        } ?>" href="slider.php"><i class="material-icons">filter_none</i><span class="menu-title" data-i18n="Chat">Slider</span></a>
        </li>
        <!--  <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan " href="accommodation.php"><i class="material-icons">home</i><span class="menu-title" data-i18n="ToDo">Accommodation</span></a>
        </li> -->
        <li class="bold"><a class="collapsible-header waves-effect waves-cyan  <?php if ($active == 'accommodation') {
                                                                                    echo 'active';
                                                                                } ?>" href="JavaScript:void(0)"><i class="material-icons">home</i><span class="menu-title" data-i18n="Invoice">Accommodation</span></a>
            <div class="collapsible-body">
                <ul class="collapsible collapsible-sub" data-collapsible="accordion">


                    <li><a href="accommodation.php"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Add">Accommodation</span></a>
                    </li>
                    <li><a href="accommodation_price.php"><i class="material-icons">radio_button_unchecked</i><span data-i18n="Invoice Edit">Accommodation Price</span></a>
                    </li>
                </ul>
            </div>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan  <?php if ($active == 'gallery') {
                                                                            echo 'active';
                                                                        } ?>" href="gallery.php"><i class="material-icons">perm_media</i><span class="menu-title" data-i18n="Kanban">Gallery</span></a>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan  <?php if ($active == 'dining') {
                                                                            echo 'active';
                                                                        } ?>" href="dining.php"><i class="material-icons">restaurant</i><span class="menu-title" data-i18n="File Manager">Dining</span></a>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan  <?php if ($active == 'excursion') {
                                                                            echo 'active';
                                                                        } ?>" href="excursion.php"><i class="material-icons">directions_bike</i><span class="menu-title" data-i18n="Contacts">Excursion</span></a>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan  <?php if ($active == 'event') {
                                                                            echo 'active';
                                                                        } ?>" href="event.php"><i class="material-icons">supervisor_account</i><span class="menu-title" data-i18n="Calendar">Event</span></a>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan  <?php if ($active == 'comment') {
                                                                            echo 'active';
                                                                        } ?>" href="comment.php"><i class="material-icons">comment</i><span class="menu-title" data-i18n="User Profile">Comment</span></a>
        </li>
        <li class="bold mt-5 mb-5"><a class="waves-effect waves-cyan  <?php if ($active == 'user') {
                                                                            echo 'active';
                                                                        } ?>" href="user.php"><i class="material-icons">group_add</i><span class="menu-title" data-i18n="User Profile">Users</span></a>
        </li>

        <li>
            <a class="navbar-toggler1" href="#">
                <i class="material-icons">radio_button_checked</i>
            </a>
        </li>



    </ul>
    <div class="navigation-background"></div><a class="sidenav-trigger btn-sidenav-toggle btn-floating btn-medium waves-effect waves-light hide-on-large-only" href="#" data-target="slide-out"><i class="material-icons">menu</i></a>
</aside>
<script src="../js/jquery-2.2.0.min.js" type="text/javascript"></script>
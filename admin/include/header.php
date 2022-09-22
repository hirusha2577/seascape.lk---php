<header class="page-topbar" id="header">
    <div class="navbar navbar-fixed"> 
        <nav class="navbar-main navbar-color nav-collapsible sideNav-lock navbar-dark gradient-45deg-indigo-purple no-shadow">
            <div class="nav-wrapper">
                <div class="header-search-wrapper hide-on-med-and-down">


                </div>
                <ul class="navbar-list right">

                    <!-- <li class="hide-on-med-and-down"><a class="waves-effect waves-block waves-light toggle-fullscreen" href="javascript:void(0);"><i class="material-icons">settings_overscan</i></a></li> -->
                    <li class="hide-on-large-only search-input-wrapper"><a class="waves-effect waves-block waves-light search-button" href="javascript:void(0);"><i class="material-icons">search</i></a></li>
                    <!-- <li><a class="waves-effect waves-block waves-light notification-button" href="javascript:void(0);" data-target="notifications-dropdown"><i class="material-icons">notifications_none<small class="notification-badge">5</small></i></a></li> -->
                    <li><a class="waves-effect waves-block waves-light profile-button" href="javascript:void(0);" data-target="profile-dropdown"><span class="avatar-status avatar-online"><img src="images/avatar/avatar-7.png" alt="avatar"><i></i></span></a></li>
                    <!-- <li><a class="waves-effect waves-block waves-light sidenav-trigger" href="#" data-target="slide-out-right"><i class="material-icons">format_indent_increase</i></a></li> -->
                </ul>

               
                <!-- profile-dropdown-->
                <ul class="dropdown-content" id="profile-dropdown">
                    <li><a class="grey-text text-darken-1" href="#"><i class="material-icons">person_outline</i><?php echo $_SESSION['hhhname']; ?></a></li>
                    <!-- <li><a class="grey-text text-darken-1" href="app-chat.php"><i class="material-icons">chat_bubble_outline</i> Chat</a></li> -->
                    <!-- <li><a class="grey-text text-darken-1" href="page-faq.php"><i class="material-icons">help_outline</i> Help</a></li> -->
                    <li class="divider"></li>
                    <!-- <li><a class="grey-text text-darken-1" href="user-lock-screen.php"><i class="material-icons">lock_outline</i> Lock</a></li> -->
                    <li ><a class="grey-text text-darken-1" id="logout"><i class="material-icons" >keyboard_tab</i> Logout</a></li>
                </ul>
            </div>

        </nav>
    </div>
</header>
<div style="bottom: 50px; right: 19px;" class="fixed-action-btn direction-top"><a class="btn-floating btn-large gradient-45deg-light-blue-cyan gradient-shadow"><i class="material-icons">add</i></a>
    <ul>
        <li><a href="#" class="btn-floating gradient-45deg-blue-indigo tooltipped" data-position="left" data-tooltip="" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">search</i></a></li>
        <li><a href="#" class="btn-floating green tooltipped" data-position="left" data-tooltip="" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">receipt</i></a></li>
        <li><a href="#" class="btn-floating amber tooltipped"  data-position="left" data-tooltip="" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">folder_special</i></a></li>
        <li><a href="#" class="btn-floating red tooltipped" data-position="left" data-tooltip="" style="opacity: 0; transform: scale(0.4) translateY(40px) translateX(0px);"><i class="material-icons">folder</i></a></li>
    </ul>
</div>
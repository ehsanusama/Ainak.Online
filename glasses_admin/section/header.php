


    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href=".../../../shop.php?displayall" class="navbar-brand logo">
                <i class="fa fa-shopping-cart" style="font-size: 22px;color: white"></i>
            </a>
            <a href=".../../../shop.php?displayall" class="logo logo-small">
                <i class="fa fa-shopping-cart" style="font-size: 22px;color: white"></i>
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left" style="color: white"></i>
        </a>

        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">


            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><h3><i class="fa fa-power-off" style="color: white"></i></h3></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                            <h1> <i class="fa fa-user"></i> </h1>
                        </div>
                        <div class="user-text">

                            <h6><?php echo $_SESSION['name'];    ?></h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>
<!--                    <a class="dropdown-item" href="profile.html">My Profile</a>-->
<!--                    <a class="dropdown-item" href="settings.html">Settings</a>-->
                    <a class="dropdown-item" href="?logout">Logout</a>
                    <?php
                    logout();
                    ?>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->

<?php
include ("includes/functions/logout.php");

?>



    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="index.php" class="logo" style="margin-top: 5%">
               <h2><i class="fa fa-home"></i></h2>
            </a>
            <a href="index.php" class="logo logo-small" style="margin-top: 5%">
                <h2><i class="fa fa-home"></i></h2>
            </a>
        </div>
        <!-- /Logo -->

        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fe fe-text-align-left"></i>
        </a>



        <!-- Mobile Menu Toggle -->
        <a class="mobile_btn" id="mobile_btn">
            <i class="fa fa-bars"></i>
        </a>
        <!-- /Mobile Menu Toggle -->

        <!-- Header Right Menu -->
        <ul class="nav user-menu">

            <!-- Notifications -->
            <!-- /Notifications -->

            <!-- User Menu -->
            <li class="nav-item dropdown has-arrow">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><h3><i class="fa fa-power-off"></i></h3></span>
                </a>
                <div class="dropdown-menu">
                    <div class="user-header">
                        <div class="avatar avatar-sm">
                           <h1> <i class="fa fa-user"></i> </h1>
                        </div>
                        <div class="user-text">
                            <h6> <?php echo $_SESSION['name'] ?></h6>
                            <p class="text-muted mb-0">Administrator</p>
                        </div>
                    </div>

                    <a class="dropdown-item" href="?logout">Logout</a>
                    <?php logout();   ?>
                </div>
            </li>
            <!-- /User Menu -->

        </ul>
        <!-- /Header Right Menu -->

    </div>
    <!-- /Header -->

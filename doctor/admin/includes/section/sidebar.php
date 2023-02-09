<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main</span>
                </li>
                <?php if($_SESSION['type'] == 0 &&  $_SESSION['status'] == 0){ ?>
                <li>
                    <a href="book-appoinment.php"><i class="fe fe-layout"></i> <span> Book Appointments</span></a>
                </li>
                <li>
                    <a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                </li>
                <li>
                    <a href="doctor-list.php"><i class="fe fe-user-plus"></i> <span>Doctors</span></a>
                </li>

                <?php }?>

                <?php  if($_SESSION['type'] == 1 && $_SESSION['status'] == 0){ ?>
                <li>
                    <a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                </li>

                <?php }?>

              <?php  if($_SESSION['status'] == 1 && $_SESSION['type'] == 0 ){ ?>

                    <li class="active">
                        <a href="index.php"><i class="fe fe-home"></i> <span>Dashboard</span></a>
                    </li>
                    <li>
                        <a href="book-appoinment.php"><i class="fe fe-edit"></i> <span> Book Appointments</span></a>
                    </li>
                    <li>
                        <a href="appointment-list.php"><i class="fe fe-layout"></i> <span>Appointments</span></a>
                    </li>
                    <li>
                        <a href="doctor-list.php"><i class="fe fe-heart"></i> <span>Doctors</span></a>
                    </li>
                    <li>
                        <a href="patient-list.php"><i class="fe fe-user-plus"></i> <span>Users</span></a>
                    </li>

             <?php }?>
            </ul>
        </div>
    </div>
</div>

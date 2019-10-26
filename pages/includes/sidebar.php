<div class="page-sidebar-wrapper">
    <!-- BEGIN SIDEBAR -->
    <div class="page-sidebar navbar-collapse collapse">
        <!-- BEGIN SIDEBAR MENU -->
        <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
            <li class="sidebar-toggler-wrapper hide">
                <!-- BEGIN SIDEBAR TOGGLER BUTTON -->
                <div class="sidebar-toggler"> </div>
                <!-- END SIDEBAR TOGGLER BUTTON -->
            </li>
            <li class="sidebar-search-wrapper">
                <!-- BEGIN RESPONSIVE QUICK SEARCH FORM -->
                <form class="sidebar-search  " action="#" method="POST">
                    <a href="javascript:;" class="remove">
                                    <i class="icon-close"></i>
                                </a>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search...">
                        <span class="input-group-btn">
                                        <a href="javascript:;" class="btn submit">
                                            <i class="icon-magnifier"></i>
                                        </a>
                                    </span>
                    </div>
                </form>
                <!-- END RESPONSIVE QUICK SEARCH FORM -->
            </li>

            <li class="nav-item start <?php echo ($page=='dashboard'?'open active':'');?>">
                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="icon-home"></i>
                                <span class="title">Dashboard</span>
                                <span class="selected"></span>
                            </a>
            </li>
           
             
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-cubes"></i>
                                <span class="title">Doctor</span>
                                <span class="arrow"></span>
                            </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="add-doctor.php" class="nav-link ">
                                        <span class="title">Add Doctor</span>
                                    </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="manage-doctor.php" class="nav-link ">
                                        <span class="title">Manage Doctor</span>
                                    </a>
                    </li>
                </ul>
            </li>
            
            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-cubes"></i>
                                <span class="title">Assistant</span>
                                <span class="arrow"></span>
                            </a>
                <ul class="sub-menu">
                    <li class="nav-item  ">
                        <a href="add-assistant.php" class="nav-link ">
                                        <span class="title">Add Assistant</span>
                                    </a>
                    </li>
                    <li class="nav-item  ">
                        <a href="manage-assistant.php" class="nav-link ">
                                        <span class="title">Manage Assistant</span>
                                    </a>
                    </li>
                </ul>
            </li>

             <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-cubes"></i>
                                <span class="title">Feedback</span>
                                <span class="arrow"></span>
                            </a>
                <ul class="sub-menu">
                    <
                    <li class="nav-item  ">
                        <a href="manage-assistant.php" class="nav-link ">
                                        <span class="title">View Feedback</span>
                                    </a>
                    </li>
                </ul>
            </li>

            <li class="nav-item  ">
                <a href="javascript:;" class="nav-link nav-toggle">
                                <i class="fa fa-cubes"></i>
                                <span class="title">Appointment</span>
                                <span class="arrow"></span>
                            </a>
                <ul class="sub-menu">
                    <
                    <li class="nav-item  ">
                        <a href="manage-assistant.php" class="nav-link ">
                                        <span class="title">View Appointment</span>
                                    </a>
                    </li>
                </ul>
            </li>
            
            
            
            
        </ul>
        <!-- END SIDEBAR MENU -->
    </div>
    <!-- END SIDEBAR -->
</div>

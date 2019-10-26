<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<?php
$page = "doctor";
$sub_page = "add";
session_start();
require_once("includes/functions.php");
?>
    <html lang="en">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title>Quick medical | Add Doctor</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/uniform/css/uniform.default.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css" />
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="../assets/global/css/components.min.css" rel="stylesheet" id="style_components" type="text/css" />
        <link href="../assets/global/css/plugins.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <link href="../assets/layouts/layout/css/layout.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/layouts/layout/css/themes/darkblue.min.css" rel="stylesheet" type="text/css" id="style_color" />
        <link href="../assets/layouts/layout/css/custom.min.css" rel="stylesheet" type="text/css" />
        <!-- END THEME LAYOUT STYLES -->
        <!--BEGIN PAGE LEVEL PLUGINS-->
        <link rel="stylesheet" href="../assets/global/plugins/bootstrap-toastr/toastr.min.css">
        <link href="../assets/global/plugins/select2/css/select2.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="../assets/global/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css" />
        <link rel="stylesheet" href="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.css">
        <!--END PAG LEVEL PLUGINS-->
        <link rel="shortcut icon" href="favicon.png" /> </head>
    <!-- END HEAD -->

    <body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
        <!--BEGIN HEADER-->
        <?php
            require_once("includes/header.php");
        ?>
            <!--END HEADER-->
            <!-- BEGIN HEADER & CONTENT DIVIDER -->
            <div class="clearfix"> </div>
            <!-- END HEADER & CONTENT DIVIDER -->
            <!-- BEGIN CONTAINER -->
            <div class="page-container">
                <!--SIDEBAR BEGIN-->
                <?php
                require_once("includes/sidebar.php");
            ?>
                    <!--SIDEBAR END-->

                    <!-- BEGIN CONTENT -->
                    <div class="page-content-wrapper">
                        <!-- BEGIN CONTENT BODY -->
                        <div class="page-content">
                            <!-- BEGIN PAGE HEADER-->
                            <!-- BEGIN PAGE BAR -->
                            <div class="page-bar">
                                <ul class="page-breadcrumb">
                                    <li>
                                        <a href="index.html">Home</a>
                                        <i class="fa fa-circle"></i>
                                    </li>
                                    <li>
                                        <span>Add Doctor</span>
                                    </li>
                                </ul>
                            </div>
                            <!-- END PAGE BAR -->
                            <!-- BEGIN PAGE TITLE-->
                            <h3 class="page-title"> Add Doctor
                                <small>Add new Doctor</small>
                            </h3>
                            <!-- END PAGE TITLE-->
                            <!-- END PAGE HEADER-->
                            <!-- BEGIN ADD Doctor FORM-->
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="portlet">
                                        <a href="http://<?php echo BASE_SERVER;?>/medical/pages/manage-doctor.php" class="btn red">
                       <i class="fa fa-list"></i> Manage Doctor</a>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <!-- BEGIN VALIDATION STATES-->
                                    <div class="portlet light portlet-fit portlet-form bordered">
                                        <div class="portlet-title">
                                            <div class="caption">
                                                <i class="icon-settings font-dark"></i>
                                                <span class="caption-subject font-dark sbold uppercase">Add Doctor</span>
                                            </div>
                                        </div>
                                        <div class="portlet-body form">



                                            <!-- BEGIN FORM-->
<form action="scripts/doctor/add.php" id="add_doctor_form" class="form-horizontal" method="post" enctype="multipart/form-data">
    <div class="alert alert-danger display-hide">
        <button class="close" data-close="alert"></button> You have some form errors. Please check below. </div>

    <div class="form-body">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <label class="control-label col-md-4">Doctor Name
<span class="required"> * </span>
</label>
                    <div class="col-md-8">
                        <input type="text" name="doctor_name" class="form-control" placeholder="Doctor Name" /> </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Email Address
                        <span class="required">*</span>

</label>
                    <div class="col-md-8">
                        <input type="email" name="doctor_email" class="form-control" placeholder="Enter Doctor Email" />
                    </div>
                </div>
            </div>


             <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Contact
                        <span class="required">*</span>

</label>
                    <div class="col-md-8">
                        <input type="text" name="doctor_contact" class="form-control" placeholder="Enter Doctor Contact" />
                    </div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Years of Experience
                        <span class="required">*</span>

</label>
                    <div class="col-md-8">
                        <input type="text" name="doctor_experience" class="form-control" placeholder="Enter Doctor Experience" />
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Specialization
                        <span class="required">*</span>

</label>
                    <div class="col-md-8">
                        <input type="text" name="doctor_specialization" class="form-control" placeholder="Specialization" />
                    </div>
                </div>
            </div>



            <div class="col-md-6">
                <div class="form-group">
                    <label class="col-md-4 control-label">Degree
                        <span class="required">*</span>

</label>
                    <div class="col-md-8">
                        <input type="text" name="doctor_degree" class="form-control" placeholder="Degree Obtained" />
                    </div>
                </div>
            </div>


        </div>
           
          
           
        <div class="row">
            <div class="col-md-12">
                <div class="form-group last">
                    <label class="control-label col-md-2">Doctor Image</label>
                    <div class="col-md-10">
                        <div class="fileinput fileinput-new" data-provides="fileinput">
                            <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                <img src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image" alt="no image" /> </div>
                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                            <div>
                                <span class="btn default btn-file">
                                    <span class="fileinput-new"> Select image </span>
                                    <span class="fileinput-exists"> Change </span>
                                    <input type="file" name="doctor_image" accept="image/*"> </span>
                                <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                            </div>
                        </div>
                        <div class="clearfix margin-top-10">
                            <span class="label label-danger">NOTE!</span> Image preview only works in IE10+, FF3.6+, Safari6.0+, Chrome6.0+ and Opera11.1+. In older browsers the filename is shown instead. </div>
                    </div>
                </div>
            </div>
        </div>
   


    </div>
    <div class="form-actions">
        <div class="row">
            <div class="col-md-offset-3 col-md-9">
                <button type="submit" class="btn green" name="add_doctor">Save</button>
            </div>
        </div>
    </div>
</form>
<!-- END FORM-->







                                        </div>
                                        <!-- END VALIDATION STATES-->
                                    </div>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <!-- END ADD CUSTOMER FORM-->
                        </div>
                        <!-- END CONTENT BODY -->
                    </div>
                    <!-- END CONTENT -->
            </div>
            <!-- END CONTAINER -->
            <!-- BEGIN FOOTER -->
            <div class="page-footer">
                <div class="page-footer-inner"> 2018 &copy; by Yogita
                </div>
                <div class="scroll-to-top">
                    <i class="icon-arrow-up"></i>
                </div>
            </div>
            >
            <script src="../assets/global/plugins/jquery.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/uniform/jquery.uniform.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="../assets/global/plugins/bootstrap-toastr/toastr.min.js"></script>
            <script src="../assets/global/plugins/counterup/jquery.waypoints.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/counterup/jquery.counterup.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/select2/js/select2.full.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery-validation/js/jquery.validate.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/jquery-validation/js/additional-methods.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js" type="text/javascript"></script>
            <script src="../assets/global/plugins/bootstrap-fileinput/bootstrap-fileinput.js"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="../assets/global/scripts/app.min.js" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
          
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="../assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
            <script src="../assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->
            <!--BEGIN CUSTOM SCRIPT LOADING-->
            <script src="../assets/pages/scripts/custom.js" type="text/javascript"></script>
            <!--END OF CUSTOM SCRIPT LOADING-->
            
    </body>

    </html>

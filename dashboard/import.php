<?php
include("sessionhandler.php");
include_once("../accessdb.php");
include_once("scriptvalidation.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="../resources/image/png" sizes="16x16" href="../resources/photos/lalawigan ng zambales.png">
    <title>Zambales Information System</title>
    <!-- Bootstrap Core CSS -->
    <link href="../resources/css/lib/bootstrap/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->

    <link href="../resources/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../resources/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../resources/css/helper.css" rel="stylesheet">
    <link href="../resources/css/style.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <style>
    .color-green{
        color: #17B31F;
    }
    .rem-side-pad{
        padding-right: 0;
        padding-left: 0
    }
    .t-a-c{
        text-align: center;
    }
    .t-a-r{
        text-align: right;
    }
    </style>
</head>

<body class="fix-header fix-sidebar">
    <!-- Preloader - style you can find in spinners.css -->
    <div class="preloader">
        <svg class="circular" viewBox="25 25 50 50">
            <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" /> </svg>
    </div>
    <!-- Main wrapper  -->
    <div id="main-wrapper">
        <!-- header header  -->
        <div class="header">
            <?php include("topnav.php");?>
        </div>
        <!-- End header header -->

        <!-- Left Sidebar  -->
        <?php include("leftsidebar.php");?>
        <!-- End Left Sidebar  -->

        <!-- Page wrapper  -->
        <div class="page-wrapper">
            <!-- Bread crumb -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Import</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Settings</a></li>
                        <li class="breadcrumb-item active">Import</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->

            <div>
                <?php //if(isset($_SESSION['accountsNotifications'])){echo $_SESSION['accountsNotifications']; unset($_SESSION['accountsNotifications']);} ?>
            </div>
            <!-- Container fluid  -->
            <div class="container-fluid" style="width: 30rem; margin:auto; padding-left: 10px; padding-right: 10px;">
                <!-- Start Page Content -->

                    <div class="card">
                        <div class="card-title">
                        </div>
                        <div class="card-body">
                            <form class="form-group" action="actions/addimport.php" method="post" name="upload_excel" enctype="multipart/form-data">
                                <legend class="t-a-c">Import CSV/Excel file</legend>
                                    <div class="control-group">
                                        <div class="control-label">
                                            <label>CSV/Excel File:</label>
                                        </div>
                                        <div class="controls">
                                            <input type="file" name="file" id="file" class="input-large">
                                        </div>
                                    </div>
                 
                                    <div class="control-group t-a-r">
                                        <div class="controls">
                                          <button type="submit" id="submit" name="Import" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
        			

                <!-- End PAge Content -->
            </div>
            <!-- End Container fluid  -->
            <!-- footer -->
            <footer class="footer"> © 2018 All rights reserved.</footer>
            <!-- End footer -->
        </div>
        <!-- End Page wrapper  -->
    </div>
    <!-- End Wrapper -->
    <!-- All Jquery -->
    <script src="../resources/js/lib/jquery/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="../resources/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../resources/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../resources/js/jquery.slimscroll.js"></script>
    <!--Menu sidebar -->
    <script src="../resources/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="../resources/js/lib/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <!--Custom JavaScript -->

    <script src="../resources/js/lib/owl-carousel/owl.carousel.min.js"></script>
    <script src="../resources/js/lib/owl-carousel/owl.carousel-init.js"></script>
    <script src="../resources/js/scripts.js"></script>
    <!-- scripit init-->

    
    <script src="../resources/js/lib/datatables/datatables.min.js"></script>
    <script src="../resources/js/lib/datatables/datatables-init.js"></script>

    <!-- form validation -->

    <script src="../resources/js/lib/form-validation/jquery.validate.min.js"></script>
    <script src="../resources/js/lib/form-validation/jquery.validate-init.js"></script>
</body>

</html>
<div class="modal "  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" id="logoutModal">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
                <form action="logout.php" method="post">
                    <div class="modal-header">
                    </div>
                    <div class="modal-body">
                        
                        <div style="text-align:center;"><font size="30px"><span class="fa fa-warning" style="color: red;"><h3>Are You Sure?</h3></span></font></div>

                    </div>
                    <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Logout</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                    </div>
                </form>
          </div>
        </div>
      </div>

      
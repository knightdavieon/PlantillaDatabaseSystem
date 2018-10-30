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
    <link rel="stylesheet" type="text/css" href="../resources/css/jquery.datetimepicker.css"/>

    <link href="../resources/css/lib/owl.carousel.min.css" rel="stylesheet" />
    <link href="../resources/css/lib/owl.theme.default.min.css" rel="stylesheet" />
    <link href="../resources/css/tempusdominus-bootstrap-4.css" rel="stylesheet">
    <link href="../resources/css/helper.css" rel="stylesheet">
    <link href="../resources/css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:** -->
    <!--[if lt IE 9]>
    <script src="https:**oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https:**oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    .color-purple{
        background-color: #5C4AC7;
        color:white;
    }
    .color-green{
        color: #17B31F;
    }
    .rem-side-pad{
        padding-right: 1;
        padding-left: 1;
    }
    .fieldspace{
        padding-top: 2;
        padding-bottom: 2;
    }
    .card-title{
        color:#001A2F;
    }
    h6{
        text-decoration: underline;
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
                    <h3 class="text-primary">Master List</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Master List</a></li>
                        <li class="breadcrumb-item active">Add Record</li>
                    </ol>
                </div>
            </div>
            <!-- End Bread crumb -->

            <div>
                <?php //if(isset($_SESSION['accountsNotifications'])){echo $_SESSION['accountsNotifications']; unset($_SESSION['accountsNotifications']);} ?>
            </div>
            <!-- Container fluid  -->
            <div class="container-fluid" style="margin:0; padding-left: 10px; padding-right: 10px;">
                <!-- Start Page Content -->
                <div class="card card-outline-primary" >
                    <div class="card-title">
                    </div>
                    <div class="card-body">
                        <form action="actions/addemployee.php" method="POST">

                            <div class="form-body">
                                <!--Start Personal Information -->
                                <h4 class="card-title m-t-15">Personal Information</h4>
                                <hr />

                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" name="surname" class="form-control" placeholder="Surname" onkeypress="return restrictCharacters(this, event, alphaOnly);" required>
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" name="firstname" class="form-control" placeholder="First Name" onkeypress="return restrictCharacters(this, event, alphaOnly);" required>
                                    </div>
                                    <div class="col-md-1" style="padding-left: 0; padding-right: 0;">
                                        <input type="text" name="extent" class="form-control" style=" background-color: #ECF4F2;" placeholder="ex. Jr." onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" name="middlename" class="form-control" placeholder="Middle Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                </div>

                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input class="form-control" type="text" id="datetimepicker2" name="dateofbirth" placeholder="Date of Birth" onkeypress="return restrictCharacters(this, event, dateOnly);" required/>

                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" name="birthplace" class="form-control" placeholder="Place of Birth" onkeypress="return restrictCharacters(this, event, alphanumericunderdot);" required>
                                    </div>
                                    <div class="col-md-2 rem-side-pad" style="padding-top: 10; padding-bottom: 10; padding-right: 10; padding-left: 10;">
                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="sex" value="male" checked>Male
                                            </label>
                                        </div>

                                        <div class="form-check-inline">
                                            <label class="form-check-label">
                                                <input type="radio" class="form-check-input" name="sex" value="female">Female
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <select name="civilstatus" class="form-control">
                                            <option value=" ">Civil Status</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="widowed">Widowed</option>
                                            <option value="separated">Separated</option>
                                            <option value="other">Other/s</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="sss" placeholder="SSS">
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="tin" placeholder="TIN">
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="aen" placeholder="AGENCY EMPLOYEE NO">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-3 rem-side-pad">
                                        <select name="citizenship" class="form-control" required>
                                            <option value=" ">Citizenship</option>
                                            <option value="Filipino">Filipino</option>
                                            <option value="dual by birth">Dual - By Birth</option>
                                            <option value="dual by naturalization">Dual - By Naturalization</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="mobile" placeholder="MOBILE">
                                    </div>
                                    <div class="col-md-5 rem-side-pad">
                                        <input type="text" class="form-control" name="email" placeholder="EMAIL">
                                    </div>

                                </div>
                                <hr />
                                <div class="row fieldspace">
                                    <div class="col-md rem-side-pad">
                                        <input type="text" class="form-control" name="residentialadd" placeholder="Residential Lot No. / Street / Subdivision / Barangay / Municipality / Province" onkeypress="return restrictCharacters(this, event, alphanumericunderdot);" >
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="razip" placeholder="Residential Zip Code" onkeypress="return restrictCharacters(this, event, digitsOnly);" >
                                    </div>
                                    <div class="col-md-8 rem-side-pad">
                                        <input type="text" class="form-control" name="ratelno" placeholder="Residential Telephone Number" onkeypress="return restrictCharacters(this, event, phoneOnly);" >
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md rem-side-pad">
                                        <input type="text" class="form-control" name="permanentadd" placeholder="Permanent Lot No. / Street / Subdivision / Barangay / Municipality / Province" onkeypress="return restrictCharacters(this, event, alphanumericunderdot);" required>
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="pazip" placeholder="Permanent Zip Code" onkeypress="return restrictCharacters(this, event, digitsOnly);" required>
                                    </div>
                                    <div class="col-md-8 rem-side-pad">
                                        <input type="text" class="form-control" name="patelno" placeholder="Permanent Telephone Number" onkeypress="return restrictCharacters(this, event, phoneOnly);" required>
                                    </div>
                                </div>






                                <div class="row fieldspace">
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="fathersurname" placeholder="Father's Surname" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-4 rem-side-pad">
                                        <input type="text" class="form-control" name="fatherfirstname" placeholder="Father's First Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-1" style="padding-left: 0; padding-right: 0;">
                                        <input type="text" class="form-control" name="fatherextent" style=" background-color: #ECF4F2;" placeholder="Ex Jr." onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="fathermiddlename" placeholder="Father's Middle Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="mothersmaiden" placeholder="Mothers's Maiden Name" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="motherssurname" placeholder="Mothers's Surname" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="mothersfirstname" placeholder="Mother's Firstname" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="mothersmiddlename" placeholder="Mother's Middlename" onkeypress="return restrictCharacters(this, event, alphaOnly);">
                                    </div>
                                </div>

                                <h4 class="card-title m-t-20">Educational Background</h4>
                                <hr />

                                <h6 class=" m-t-15">Elementary</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="elementaryschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="elementarydegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="elemattendedfrom" id="datetimepicker3" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="elemattendedto" id="datetimepicker4" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="elemunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="elemyeargrad" placeholder="Year Graduated" id="yearpicker1" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="elemscholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">Secondary</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="secondaryschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="secondarydegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="secondattendedfrom" id="datetimepicker5" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="secondattendedto" id="datetimepicker6" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="secondunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="secondyeargrad" placeholder="Year Graduated" onkeypress="return restrictCharacters(this, event, dateOnly);" id="yearpicker2">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="secondscholarship" placeholder="Scholarship / Academic Honors Received">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">Vocational / Trade Course</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="vocationalschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="vocationaldegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="vocattendedfrom" id="datetimepicker7" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="vocattendedto" id="datetimepicker8" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="vocunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="vocyeargrad" placeholder="Year Graduated" onkeypress="return restrictCharacters(this, event, dateOnly);" id="yearpicker3">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="vocscholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">College</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="collegedegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeattendedfrom" id="datetimepicker9" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeattendedto" id="datetimepicker10" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="collegeyeargrad" placeholder="Year Graduated" id="yearpicker4" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="collegescholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

                                <h6 class=" m-t-15">Graduate Studies</h6>
                                <div class="row fieldspace">
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="graduateschool" placeholder="Name of School (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-6 rem-side-pad">
                                        <input type="text" class="form-control" name="graduatedegree" placeholder="Basic Education / Degree / Course (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>
                                <div class="row fieldspace">
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="gradattendedfrom" id="datetimepicker11" placeholder="Attended From" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="gradattendedto" id="datetimepicker12" placeholder="Attended To" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="gradunitslevelearned" placeholder="Highest Level / Units Earned" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                    <div class="col-md-2 rem-side-pad">
                                        <input type="text" class="form-control" name="gradyeargrad" placeholder="Year Graduated" id="yearpicker5" onkeypress="return restrictCharacters(this, event, dateOnly);">
                                    </div>
                                    <div class="col-md-3 rem-side-pad">
                                        <input type="text" class="form-control" name="gradscholarship" placeholder="Scholarship / Academic Honors Received" onkeypress="return restrictCharacters(this, event, alphanumeric);">
                                    </div>
                                </div>

				                <h4 class="card-title m-t-20">Civil Service Eligibility</h4>
                                <hr />
                                 <input type="hidden" name="career[]" value="">
                                  <input type="hidden" name="rating[]" value="">
                                   <input type="hidden" name="dateofexamination[]" value="">
                                   <input type="hidden" name="placeofexamination[]" value="">
                                   <input type="hidden" name="number[]" value="">
                                   <input type="hidden" name="dateofrelease[]" value="">

                                <div class="appendeligi">

                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addeligi" Value="Add Eligibility" style="height: 5%;padding: 0;">

                                <h4 class="card-title m-t-20">Work Experience</h4>
                                <hr />
                                 <input type="hidden" name="workexpinclusivefrom[]" value="">
                                 <input type="hidden" name="workexpinclusiveto[]" value="">
                                 <input type="hidden" name="positiontitle[]" value="">
                                 <input type="hidden" name="department[]" value="">
                                 <input type="hidden" name="monthlysalary[]" value="">
                                 <input type="hidden" name="salarygrade[]" value="">
                                 <input type="hidden" name="statusofappointment[]" value="">
                                 <input type="hidden" name="govtservice[]" value="">
                                <div class="appendworkexp">

                                </div>
                                <input type="button" class="btn btn-default fieldspace" id="Addworkexp" Value="Add Work Experience" style="height: 5%;padding: 0;">


                            <hr />
                            <div class="container">
                            <div class="container text-right">
                                <button class="btn color-purple" type="submit" > ADD</button>
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
    <script src="../resources/dist/js/jquery-3.3.1.min.js"></script>

    <!-- Bootstrap tether Core JavaScript -->
    <script src="../resources/js/lib/bootstrap/js/popper.min.js"></script>
    <script src="../resources/js/lib/bootstrap/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="../resources/js/jquery.datetimepicker.full.js"></script>
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
    <script type="text/javascript">

    </script>
    <script>
    $('#datetimepicker2').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker3').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker4').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker5').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker6').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker7').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker8').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker9').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker10').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker11').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });
    $('#datetimepicker12').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'d/m/Y',
        formatDate:'Y/m/d'

    });

    $('#yearpicker1').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker2').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker3').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker4').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });
    $('#yearpicker5').datetimepicker({
        lang:'en',
        timepicker:false,
        format:'Y',
        formatDate:'Y'

    });




    //append eligibility
    //names = career rating dateofexamination placeofexamination number dateofrelease
    var eligicount = 1;
    $('#Addeligi').click(function(){
       $(".appendeligi").append('<div class="appendedeligii'+eligicount+'"><div class="row fieldspace"><div class="col-md-10 rem-side-pad"><input type="text" class="form-control" name="career[]" placeholder="Career Service / RA 1080 (Board/Bar) Under Special Laws / CSE / CSEE Barangay Eligibility / Drivers License" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="rating[]" placeholder="Rating" onkeypress="return restrictCharacters(this, event, integerOnly);"></div></div><div class="row fieldspace"><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="dateofexamination[]" placeholder="Date of Examination / Conferment" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-5 rem-side-pad"><input type="text" class="form-control" name="placeofexamination[]" placeholder="Place of Examination / Conferment" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="number[]" onkeypress="return restrictCharacters(this, event, digitsOnly);" placeholder="Number"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="dateofrelease[]" placeholder="Date of Release" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-1 rem-side-pad"><input type="button" class="btn btn-danger btn-remove-eligi" name="remove" id="'+eligicount+'" value="X"></div></div></div>');
       eligicount++;
    });
    $(document).on('click', '.btn-remove-eligi',function(){
        var eligi_button_id = $(this).attr('id');
        $(".appendedeligii"+eligi_button_id+"").remove();
    });
    //end append eligibility

    //append work experience
    //append names workexpinclusivefrom workexpinclusiveto positiontitle department monthlysalary salarygrade statusofappointment govtservice
    var workcount = 1;
    $('#Addworkexp').click(function(){
       $(".appendworkexp").append('<div class="appendedwork'+workcount+'"><div class="row fieldspace"><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="workexpinclusivefrom[]" placeholder="From (mm/dd/yyyy)" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-2 rem-side-pad"><input type="text" class="form-control" name="workexpinclusiveto[]" placeholder="To (mm/dd/yyyy)" onkeypress="return restrictCharacters(this, event, dateOnly);"></div><div class="col-md-8 rem-side-pad"><input type="text" class="form-control" name="positiontitle[]" placeholder="Position Title (Write in full)" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div></div><div class="row fieldspace"><div class="col-md-9 rem-side-pad"><input type="text" class="form-control" name="department[]" placeholder="Department / Agency / Office / Company" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-3 rem-side-pad"><input type="text" class="form-control" name="monthlysalary[]" placeholder="Monthly Salary" onkeypress="return restrictCharacters(this, event, moneyOnly);"></div></div><div class="row fieldspace"><div class="col-md-4 rem-side-pad"><input type="text" class="form-control" name="salarygrade[]" placeholder="Salary Grade" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-4 rem-side-pad"><input type="text" class="form-control" name="statusofappointment[]" placeholder="Status of Appointment" onkeypress="return restrictCharacters(this, event, alphanumeric);"></div><div class="col-md-3 rem-side-pad" style="padding-top: 10; padding-bottom: 10; padding-right: 10; padding-left: 10;"><label>Govt Service</label><div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="govtservice[]" value="Y" checked>Y</label></div><div class="form-check-inline"><label class="form-check-label"><input type="radio" class="form-check-input" name="govtservice[]" value="N">N</label></div></div><div class="col-md-1 rem-side-pad"><input type="button" class="btn btn-danger btn-remove-work" name="remove" id="'+workcount+'" value="X"></div></div></div>');
       workcount++;
    });
    $(document).on('click', '.btn-remove-work',function(){
        var work_button_id = $(this).attr('id');
        $(".appendedwork"+work_button_id+"").remove();
    });

    //end append eligibility

    
    </script>


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

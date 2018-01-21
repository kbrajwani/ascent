<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:54 GMT -->

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Best Responsive job portal template build on Latest Bootstrap.">
    <meta name="keywords" content="job, nob board, job portal, job listing">
    <meta name="robots" content="index,follow">
    <title>Job Stock - Responsive Job Portal Bootstrap Template | ThemezHub</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-wysihtml5.css">
    <link rel="stylesheet" type="text/css" href="css/prettify.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/line-font.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/bootsnav.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" id="jssDefault" href="css/colors/green-style.css">
    <link href="css/responsiveness.css" rel="stylesheet">
    <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script> <script src="js/respond.min.js"></script><![endif]-->
</head>


<?php 
session_start();
if(isset($_POST["btsign"])){
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
$_email1="";  
    $_password1="";

$_email1=$_POST["txtemail"];
$_password1=$_POST["txtpass"];
$_flag="";
if(($_email1=="kumar123@gmail.com")&&($_password1=="kumar123"))
{
  header('location:../admin/admin/index.php');
}
else{
require 'loginclass.php';
$obj=new loginclass();
$_result=$obj->getlogin($_email1);
    $row=$_result->fetch_assoc();
    
    if($row["password"]===$_password1){
        $_flag="a"; 
    
    }

if($_flag==="a")
{

    if($row["verify"]==1)
    {
    $_SESSION["email_id"]=$_email1;
header('location:index.php');
    }
    else
    {
    
        echo '<div class="btn btn-success btn-lg btn-block">please look your gmail account we have sent you a verification link ,if you did not get it please <a href="resendemail.php?email='.$_email1.' " class="alert-link">click me</a></div>';
    }
}
else
{
    echo '<button class="btn btn-dark btn-lg btn-block"><h4 class="text-info">username or password invalid<h4></button>';
}
}
}
    }

?>

<body class="simple-bg-screen">
    <div class="wrapper">
        <section class="login-screen-sec">
            <div class="container">
                <div class="login-screen"><a href="index.php"><img src="img/logo.png" class="img-responsive" alt=""></a>
                    <form method="post" action="<?php echo $_SERVER["PHP_SELF"]; ?>">
                    <input type="email" required name="txtemail" class="form-control" placeholder="Useraname">
                    <input type="password" required name="txtpass" class="form-control"  placeholder="Password">
                     <button class="btn btn-login" name="btsign"  type="submit">Login</button>
                     <span>You Have No Account? 
                         <a href="signup.php"> Create An Account</a>
                        </span>
                        <span><a href="lost-password.php"> Forget Password</a></span>
                    </form>
                </div>
            </div>
        </section>
        <div
            class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu"> <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
            <ul id="styleOptions"
                title="switch styling">
                <li><a href="javascript: void(0)" class="cl-box blue" data-theme="colors/blue-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box red" data-theme="colors/red-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box purple" data-theme="colors/purple-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box green" data-theme="colors/green-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box dark-red" data-theme="colors/dark-red-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box orange" data-theme="colors/orange-style"></a></li>
                <li><a href="javascript: void(0)" class="cl-box sea-blue" data-theme="colors/sea-blue-style "></a></li>
                <li><a href="javascript: void(0)" class="cl-box pink" data-theme="colors/pink-style"></a></li>
            </ul>
    </div>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootsnav.js"></script>
    <script src="js/viewportchecker.js"></script>
    <script src="js/bootstrap-select.min.js"></script>
    <script src="js/wysihtml5-0.3.0.js"></script>
    <script src="js/bootstrap-wysihtml5.js"></script>
    <script src="js/jQuery.style.switcher.js"></script>
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>
    <script src="js/custom.js"></script>
    <script type="text/javascript">
        $(document).ready(function () { $('#styleOptions').styleSwitcher(); });
    </script>
    <script>
        function openRightMenu() { document.getElementById("rightMenu").style.display = "block"; } function closeRightMenu() { document.getElementById("rightMenu").style.display = "none"; }
    </script>
    </div>
</body>
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:55 GMT -->

</html>
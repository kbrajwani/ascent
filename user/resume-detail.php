<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/resume-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:28 GMT -->

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
require 'loginclass.php';
$obj=new loginclass();
session_start();
$email=$_SESSION["email_id"];
$_result=$obj->userview($email);
$row=$_result->fetch_assoc();
$emailid=$row["uid"];
$id=$_SERVER["QUERY_STRING"];

if($id==null)
{
    $uid=$row["uid"];
    
}
else
{
    $uid=$id;
}
$_result=$obj->userview1($uid);
$row=$_result->fetch_assoc();
$res=$obj->getresume($uid);
$row1=$res->fetch_assoc();
?>
<body>
    <div class="wrapper">
            <?php require 'header.php'; ?>
    <div class="clearfix"></div>
    <section class="inner-header-title  blank">
        <div class="container">
            <h1>Resume Detail</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="detail-desc">
        <div class="container white-shadow">
            <div class="row">
                <div class="detail-pic"><img src="../image/<?php echo $row["image"] ;?>" class="img" alt="" /><a href="#" class="detail-edit" title="edit"><i class="fa fa-pencil"></i></a></div>
                
        </div>
        <div class="row bottom-mrg">
            <div class="col-md-8 col-sm-8">
                <div class="detail-desc-caption">
                    <h4><?php echo $row["uname"] ;?></h4><span class="designation"><?php 
                    $arr=explode(",",$row1["job_experience"]);
                    echo $arr[0];?></span>
                    
                </div>
                <br>
                <div class="detail-desc-skill">
                <?php 
                    $arr1=explode(",",$row1["skills"]);
                    $length=count($arr1);
                    
                    for($i=0;$i<$length;$i++)
                    {
                  
                
               echo ' <span>'.$arr1[$i].'</span>';
                    }
                ?>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="get-touch">
                    <h4>Get in Touch</h4>
                    <ul>
                        
                        <li><i class="fa fa-envelope"></i><span><?php echo $row["email_id"] ;?></span></li>
                        <li><i class="fa fa-phone"></i><span><?php echo $row["contact_no"] ;?></span></li>
                        <li><i class="fa fa-dribbble"></i><span><?php echo $row1["social_pages"] ;?></span></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-padd">
            <div class="detail pannel-footer">
                
                <div class="col-md-7 col-sm-7">

                    <?php 
                    
                    if($emailid==$uid)
                    {

                        echo '<div class="detail-pannel-footer-btn pull-right"><a href="update_resume.php" class="footer-btn blu-btn" title="">Edit</a></div>';
                    }?>
                    
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="full-detail-description full-detail">
        <div class="container">
            
        <div class="row bottom-mrg extra-mrg">
        
            <h2 class="detail-title">Education</h2>
            <div class="extra-field-box">
                <div class="multi-box">
                    <div class="dublicat-box">
                        
                        <div
                            class="col-md-12 col-sm-12"><input readonly type="text"
                             value="<?php $arr=explode(",",$row1["higher_degree"]);
                               echo $arr[0];?>"
                              class="form-control" name="education" placeholder="Higher Qualification, e.g. Master Of Computer Application"></div>
                    <div
                        class="col-md-6 col-sm-6">
                        <div class="input-group"><span class="input-group-addon">Date From</span><input 
                        value="<?php $arr=explode(",",$row1["higher_degree"]);
                               echo $arr[1];?>"
                        name="ed" readonly type="text" class="form-control" placeholder="10 June 2010">
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="input-group"><span class="input-group-addon">Date To</span><input
                    value="<?php $arr=explode(",",$row1["higher_degree"]);
                               echo $arr[2];?>"
                    readonly name="edf" type="text" class="form-control" placeholder="10 August 2013"></div>
                </div>
                </div>
    </div></div>

</div>
            

<div class="row bottom-mrg extra-mrg">
            
                <h2 class="detail-title">Experience</h2>
                <div class="extra-field-box">
                    <div class="multi-box">
                        <div class="dublicat-box">
                            
                            <div class="col-md-12 col-sm-12"><input type="text"
                            value="<?php $arr=explode(",",$row1["job_experience"]);
                                       echo $arr[0];?>"
                            name="exp" readonly class="form-control" placeholder="Position, e.g. Web Designer"></div>
                            <div
                                class="col-md-6 col-sm-6">
                                <div class="input-group"><span class="input-group-addon">Date From</span><input name="expd" readonly type="text" class="form-control" placeholder="10 June 2010"
                                value="<?php $arr=explode(",",$row1["job_experience"]);
                                       echo $arr[1];?>"
                                ></div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="input-group"><span class="input-group-addon">Date To</span><input 
                            value="<?php $arr=explode(",",$row1["job_experience"]);
                                       echo $arr[2];?>"
                            name="expdf" readonly type="text" class="form-control" placeholder="10 August 2013"></div>
                        </div>
                        </div>
                </div></div>
        
        </div>
            <div class="row row-bottom">
                <h2 class="detail-title">Skills</h2>
                
                <div class="ext-mrg row third-progress">
                    
                        <div class="panel-body">
                        <?php 
                    $arr1=explode(",",$row1["skills"]);
                    $length=count($arr1);
                    
                    for($i=0;$i<$length;$i++)
                    {
                  
                
               echo '
               <div class="col-md-6 col-sm-6">
               <h3 class="progressbar-title"><span>'.$arr1[$i].'</span></h3>';
               echo '
               <div class="progress">
               <div class="progress-bar" style="width: 90%; background: #26a9e1;"><span class="progress-icon fa fa-plus" style="border-color:#26a9e1; color:#26a9e1;"></span>
               
               <div
                   class="progress-value">90%</div>
       </div>
       </div>
   </div>
               ';
                    }
                ?>
                            
                
            </div>
            
        </div>
        </div>
<?php
$num1=null;
$num1=$obj->getfreefeed($uid);
if($num1>0)
{
    $feed=$obj->getfreefeed1($uid);
    $rfeed=$feed->fetch_assoc();
    $comp1=$obj->getcompanybyid($rfeed["comp_id"]);
    $rcomp1=$comp1->fetch_assoc();
echo '
        <div class="row row-bottom">
                <h2 class="detail-title">feedback</h2>
        <a href="company-detail.php?'.$rfeed["comp_id"].'" class="item-click">
            <article>
                <div class="brows-company">
                    <div class="col-md-2 col-sm-2">
                        <div class="brows-company-pic"><img src="../image/'.$rcomp1["image"].'" class="img-responsive" alt="" /></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="brows-company-name">
                            <h4>'.$rcomp1["industry_name"].'</h4><span class="brows-company-tagline">'.$rcomp1["work"].'</span></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="brows-company-location">
                            <p>'.$rfeed["discription"].'</p>
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                        <div class="brows-company-position">
                        <a href="deletefeedback.php?id='.$rfeed["feedback_id"].'"  class="btn btn-primary">delete</a>
                        </div>
                    </div>
                </div>
            </article>
        </a>
                </div>';
                }

                ?>

        </div>
    </section>
    <div class="clearfix"></div>
    <div class="modal fade" id="signup" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tab" role="tabpanel">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#login" role="tab" data-toggle="tab">Sign In</a></li>
                            <li role="presentation"><a href="#register" role="tab" data-toggle="tab">Sign Up</a></li>
                        </ul>
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login"><img src="img/logo.png" class="img-responsive" alt="" />
                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group"><input type="email" name="email" class="form-control" placeholder="Username"
                                                    required=""><input type="password" name="password" class="form-control" placeholder="Password"
                                                    required="">
                                                <div class="center"><button type="submit" id="login-btn" class="submit-btn"> Login </button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="register"><img src="img/logo.png" class="img-responsive" alt="" />
                                <form class="form-inline" method="post">
                                    <div class="col-sm-12">
                                        <div class="form-group"><input type="text" name="email" class="form-control" placeholder="Your Name" required="">
                                            <input
                                                type="email" name="email" class="form-control" placeholder="Your Email" required=""><input type="email" name="email" class="form-control" placeholder="Username"
                                                    required=""><input type="password" name="password" class="form-control" placeholder="Password"
                                                    required="">
                                                <div class="center"><button type="submit" id="subscribe" class="submit-btn"> Create Account </button></div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php require 'footer.php'; ?>
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
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/resume-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:28 GMT -->

</html>
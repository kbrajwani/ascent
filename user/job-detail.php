<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/job-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:28 GMT -->

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
session_start();
$email=$_SESSION["email_id"];
$obj=new loginclass();

$id=$_SERVER["QUERY_STRING"];


$_result=$obj->userview($email);
$row=$_result->fetch_assoc();
$uid=$row["uid"];
$res=$obj->getcompjob($uid);
$r=$res->fetch_assoc();
if($id==null)
{
    $id=$r["job_id"];
    
}
else
{
    $id=$id;
}
$res=$obj->getjobbyid($id);
$row=$res->fetch_assoc();
$uid=$row["fk_uid"];
$comp=$obj->getcompanybyid($uid);
$rcomp=$comp->fetch_assoc();
?>
<body>
    <div class="wrapper">
            <?php require 'header.php'; ?>
        <div class="clearfix"></div>
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Job Detail</h1>
        </div>
    </section>
    <div class="clearfix"></div>
    <section class="detail-desc">
        <div class="container white-shadow">
            <div class="row">
                <div class="detail-pic"><img src="<?php echo "../image/".$rcomp["image"]." "?>" class="img" alt="" /></div>
                <div
                    class="detail-status"><span>2 Days Ago</span></div>
        </div>
        <div class="row bottom-mrg">
            <div class="col-md-8 col-sm-8">
                <div class="detail-desc-caption">
                    <h4><?php echo $row["title"] ?></h4><span class="designation"><?php echo $row["category"] ?></span>
                    <p><?php echo $row["extra_details"] ?></p>
                    <ul>
                    <li><i class="fa fa-flask"></i><span><?php echo $row["dead_line"] ?> deadline</span></li>
                        <li><i class="fa fa-flask"></i><span><?php echo $row["job_experience"] ?> Experience</span></li>
                        <li><i class="fa fa-money"></i><span><?php echo $row["budget"] ?>&nbsp;Budget</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
                <div class="get-touch">
                    <h4>Get in Touch</h4>
                    <ul>
                        <li><i class="fa fa-map-marker"></i><span><?php echo $rcomp["location"] ?></span></li>
                        <li><i class="fa fa-envelope"></i><span><?php echo $rcomp["email_id"] ?></span></li>
                        <li><i class="fa fa-globe"></i><span><?php echo $rcomp["link"] ?></span></li>
                        <li><i class="fa fa-phone"></i><span><?php echo $rcomp["contact_no"] ?></span></li>
                        
                    </ul>
                </div>
            </div>
        </div>
        <div class="row no-padd">
            <div class="detail pannel-footer">
                <div class="col-md-5 col-sm-5">
                    
                </div>
                <div class="col-md-7 col-sm-7">
                    
                   <?php if($email<>null and $email<>$rcomp["email_id"])
                   {
                  echo'  <div class="detail-pannel-footer-btn pull-right"><a href="#" data-toggle="modal" data-target="#bid" class="footer-btn grn-btn" title="">Bid</a>
                  <a href="wishlist.php?id='.$id.' " class="footer-btn blu-btn"
                            title="">Wish List</a></div>';
                   }
                   if($email==$rcomp["email_id"])
                   {
                    echo'  <div class="detail-pannel-footer-btn pull-right">
                    <a href="deleteproject.php?id='.$id.' " class="footer-btn blu-btn"
                              title="">delete</a></div>';
                   }
                   ?>
                </div>
            </div>
        </div>
        </div>
    </section>
<?php
$num=null;
$num=$obj->gethire($id);
$num1=null;
$num1=$obj->getfeed($id);
if($num==1 and $email==$rcomp["email_id"])
{
    $hire=$obj->gethire1($id);
    $rhire=$hire->fetch_assoc();
    $u=$obj->userview1($rhire["fk_uid"]);
    $ru=$u->fetch_assoc();
    echo '  <section class="full-detail-description full-detail">
    <div class="container">
        
    <div class="row bottom-mrg extra-mrg">
    
        <h2 class="detail-title">hire</h2>

        <a href="resume-detail.php?'.$rhire["fk_uid"].'" class="item-click">
        <article>
            <div class="brows-resume">
                <div class="row no-mrg">
                    <div class="col-md-2 col-sm-2">
                        <div class="brows-resume-pic"><img src="../image/'.$ru["image"].'" class="img-responsive" alt="" /></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="brows-resume-name">
                            <h4>'.$ru["uname"].'</h4><span class="brows-resume-designation">';
                            $arr1=explode(",",$rhire["job_experience"]);
                            echo $arr1[0];
                            echo'</span></div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="brows-resume-location">
                        <p><i class="fa fa-dribbble"></i>'. $rhire["social_pages"] .'<br>
                        <i class="fa fa-phone right"></i><span>'. $ru["contact_no"].'</span>
                        </p> 
                        </div>
                    </div>
                    <div class="col-md-2 col-sm-2">
                    ';
                    if($num1<>1)
                    {
                    echo '<a href="" data-toggle="modal" data-target="#feedback" class="btn btn-primary">add feedback</a>';
                    }
                    if($num1==1)
                    {
                        echo '<a href="" data-toggle="modal" data-target="#feedback" class="btn btn-primary">update feedback</a>';  
                    }
                    echo '</div>
                </div>
                <div class="row extra-mrg row-skill">
                    <div class="browse-resume-skills">
                        <div class="col-md-9 col-sm-8">
                            <div class="br-resume">
                            ';
                            $arr1=explode(",",$rhire["skills"]);
                            $length=count($arr1);
                            
                            for($i=0;$i<$length;$i++)
                            {
                          
                        
                       echo  '<span>'.$arr1[$i].'</span>';
                            }
                        echo '
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-4">
                            
                        </div>
                    </div>
                </div>
            </div>
        </article>
    </a>

        </div></div>
        </section>';

}
if($email==$rcomp["email_id"] and $num==null)
{   
    $b=null;
    
 echo '  <section class="full-detail-description full-detail">
        <div class="container">
            
        <div class="row bottom-mrg extra-mrg">
        
            <h2 class="detail-title">bids</h2>';
            $bid=$obj->getbid($id);
            while($rbid=$bid->fetch_assoc())
            {
            $b=1;
           echo ' 
            <a href="resume-detail.php?'.$rbid["uid"].'" class="item-click">
                    <article>
                    <div class="col-md-4 col-sm-6">
                    
                    
                    <div class="brows-job-list">
                    <div class="manage-cndt">
                    <div class="cndt-caption">
                            <div class="col-md-6 col-sm-5">
                                 <div class="brows-job-position">
                                    <h3>'.$rbid["uname"].'</h3>
                                    <p><span>'.$rbid["fk_email_id"].'</span></p>
                                </div>
                            </div>
                            
                            <div>
                            <div class="brows-job-location">
                            <span class="brows-job-sallery"><i class="fa fa-money"></i>'.$rbid["amount"].'</span>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                            <a href="hire.php?id='.$id.'&uid='.$rbid["uid"].'" title="" class="cndt-profile-btn">hire</a>
                            </div>
                            </div>
                        </div>
                        </div>
                    </article>
                </a>';}
                if($b==null)
                {
                    echo 'no bids';
                }
                echo '
    
   </div>
   </div>
   </section>';
    
}
?>
    <div class="clearfix"></div>
    <div class="modal fade" id="feedback" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    
                            
                            <center><h2><?php echo $row["title"] ?></h2></center>
                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" action="<?php  
                                    if($num1<>1)
                                    {
                                        echo 'feedback.php';
                                    }
                                    if($num1==1)
                                    {
                                        echo 'updatefeedback.php';
                                        $feed=$obj->getfeedback($id);
                                        $rfeed=$feed->fetch_assoc();
                                    }                                    
                                    ?>?id=<?php echo $id; ?>&id2=<?php echo $rhire["fk_uid"]; ?>" method="post">
                                        <div class="col-sm-12">
                                        
                                            <div class="form-group"><input type="text" <?php
                                            if($num1==1)
                                            {
                                                echo 'value="'.$rfeed["discription"].'"';
                                            }
                                            ?>name="feedback" class="form-control" placeholder="Enter Your feedback"
                                                    required="">
                                                <div class="center"><button type="submit" id="login-btn" class="submit-btn">Done</button></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            </div>
                            </div>
                            </div>
    
    <div class="modal fade" id="bid" tabindex="-1" role="dialog" aria-labelledby="myModalLabel2" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="tab" role="tabpanel">
                        
                        <div class="tab-content" id="myModalLabel2">
                            <div role="tabpanel" class="tab-pane fade in active" id="login">
                            <center><h2><?php echo $row["title"] ?></h2></center>
                                <div class="subscribe wow fadeInUp">
                                    <form class="form-inline" action="bid.php?id=<?php echo $id ?>" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group"><input type="number"  name="bid" class="form-control" placeholder="Enter Your Bid"
                                                    required="">
                                                <div class="center"><button type="submit" id="login-btn" class="submit-btn">Done</button></div>
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
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/job-detail.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:28 GMT -->

</html>
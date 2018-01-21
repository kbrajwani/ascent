<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/browse-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:26 GMT -->

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

<body>
    <div class="wrapper">
            <?php require 'header.php'; ?>
        <div class="clearfix"></div>
        <section class="inner-header-title blank">
            <div class="container">
                <h1>Browse Jobs</h1>
            </div>
        </section>
        <div class="clearfix"></div>
        <section class="brows-job-category">
            <div class="container">
                <div class="row extra-mrg">
                    <div class="wrap-search-filter">
                        <form>
                            <div class="col-md-4 col-sm-4"><input type="text" class="form-control" placeholder="Keyword: Name, Tag"></div>
                            <div class="col-md-3 col-sm-3"><input type="text" class="form-control" placeholder="Location: City, State, Zip"></div>
                            <div class="col-md-3 col-sm-3"><select class="selectpicker form-control" multiple title="All Categories"> <option>Information Technology</option> <option>Mechanical</option> <option>Hardware</option></select></div>
                            <div class="col-md-2 col-sm-2"><button type="submit" class="btn btn-primary">Filter</button></div>
                        </form>
                    </div>
                </div>
<?php
require 'loginclass.php';
$obj=new loginclass();
$res=$obj->getjob();
while($row=$res->fetch_assoc())
{ 
            echo '    <a href="job-detail.php" class="item-click">
                    <article>
                        <div class="brows-job-list">
                            <div class="col-md-1 col-sm-2 small-padding">
                                <div class="brows-job-company-img"><img src="../image/'.$row["image"].'" class="img-responsive" alt="" /></div>
                            </div>
                            <div class="col-md-6 col-sm-5">
                                <div class="brows-job-position">
                                    <h3>'.$row["title"].'</h3>
                                    <p><span>'.$row["industry_name"].'</span><span class="brows-job-sallery"><i class="fa fa-money"></i>"'.$row["budget"].'"</span></p>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-3">
                                <div class="brows-job-location">
                                    <p><i class="fa fa-map-marker"></i>'.$row["location"].'</p>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-2">
                            </div>
                        </div>
                    </article>
                </a>';
}
?>               
                
                </div>
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
                                                        required=""><input type="password" name="password" class="form-control"
                                                        placeholder="Password" required="">
                                                    <div class="center"><button type="submit" id="login-btn" class="submit-btn"> Login </button></div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane fade" id="register"><img src="img/logo.png" class="img-responsive" alt="" />
                                    <form class="form-inline" method="post">
                                        <div class="col-sm-12">
                                            <div class="form-group"><input type="text" name="email" class="form-control" placeholder="Your Name"
                                                    required="">
                                                <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                                                <input type="email" name="email" class="form-control" placeholder="Username" required="">
                                                <input type="password" name="password" class="form-control" placeholder="Password" required="">
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
        <div class="w3-sidebar w3-bar-block w3-card-2 w3-animate-right" style="display:none;right:0;" id="rightMenu"> <button onclick="closeRightMenu()" class="w3-bar-item w3-button w3-large">Close &times;</button>
            <ul id="styleOptions" title="switch styling">
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
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/browse-jobs.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:26 GMT -->

</html>
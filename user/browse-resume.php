<!DOCTYPE html>
<html class="no-js" lang="zxx">
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/browse-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:45 GMT -->

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
    <link rel="stylesheet" href="DataTables/datatables.min.css"/>
    <link rel="stylesheet" href="DataTables/DataTables-1.10.16/css/jquery.dataTables.min.css"/>
        <!--[if lt IE 9]> <script src="js/html5shiv.min.js"></script> <script src="js/respond.min.js"></script><![endif]-->
</head> 

    

<body>

    <div class="wrapper">
        <?php require 'header.php'; ?>
        
    <div class="clearfix"></div>
    <section class="inner-header-title blank">
        <div class="container">
            <h1>Browse Resume</h1>
        </div>
    </section>
    <div class="clearfix"></div>

    <section class="manage-company">
        <div class="container">
            <div class="row extra-mrg">
                <div class="wrap-search-filter">
                <form method="GET">
                
                 
                 <?php
             
                 require 'loginclass.php';
                 $obj=new loginclass();
                 ?>
                 <div class="col-md-10 col-sm-10"><input name="search" type="text" class="form-control" placeholder="Keyword: Name, Tag"></div>
                 

                        
                        <div
                            class="col-md-2 col-sm-2"><button type="submit"  class="btn btn-primary">Filter</button></div>
                </form>
            </div>
        </div>
        <table width="100%" id="example" class="display">
        <?php


$key=$_SERVER["QUERY_STRING"];
$sid=null;
if($key==null)
{
    $res=$obj->getfreeuser();
}
else
{

    $seacrh=$_GET["search"];
    $res=$obj->getfreeuser1($seacrh);

}


while($row=$res->fetch_assoc())
{       
        $sid=1;
       echo ' <tr>
        <td>
        <a href="resume-detail.php?'.$row["uid"].'" class="item-click">
            <article>
                <div class="brows-resume">
                    <div class="row no-mrg">
                        <div class="col-md-2 col-sm-2">
                            <div class="brows-resume-pic"><img src="../image/'.$row["image"].'" class="img-responsive" alt="" /></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="brows-resume-name">
                                <h4>'.$row["uname"].'</h4><span class="brows-resume-designation">';
                                $arr1=explode(",",$row["job_experience"]);
                                echo $arr1[0];
                                echo'</span></div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="brows-resume-location">
                            <p><i class="fa fa-dribbble"></i>'. $row["social_pages"] .'</p> 
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-2">
                        
                        </div>
                    </div>
                    <div class="row extra-mrg row-skill">
                        <div class="browse-resume-skills">
                            <div class="col-md-9 col-sm-8">
                                <div class="br-resume">
                                ';
                                $arr1=explode(",",$row["skills"]);
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
        </a>';
        } 
        if($sid==null)
        {
            echo 'no record found';
        }
        ?>
        
         
        </table>        <div class="row">
    
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
        <script type="text/javascript" src="DataTables/jQuery-3.2.1/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="DataTables/DataTables-1.10.16/js/jquery.dataTables.js"></script>

        <script type="text/javascript" src="DataTables/jQuery-3.2.1/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="DataTables/datatables.min.js"></script>
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
        <script>
$(document).ready(function() {
    $('#example').DataTable( {
        "paging":   false,
        "ordering": false,
        "info":     false
    } );
} );    
</script>

        </div>
</body>
<!-- Mirrored from live.themezhub.com/job-stock-large-preview/job-stock/browse-resume.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 14 Oct 2017 15:17:45 GMT -->

</html>
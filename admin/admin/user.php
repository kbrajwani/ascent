<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-inverse/editable-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2017 14:54:30 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../plugins/images/favicon.png">
    <title>Ascent Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- Bootstrap Core CSS -->
    <link href="bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="boot/css/bootstrap.min.css">
    <link href="../plugins/bower_components/bootstrap-extension/css/bootstrap-extension.css" rel="stylesheet">
    <!-- Editable CSS -->
    <link rel="stylesheet" href="../plugins/bower_components/jquery-datatables-editable/datatables.css" />
    <!-- Menu CSS -->
    <link href="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.css" rel="stylesheet">
    <!-- animation CSS -->
    <link href="css/animate.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="css/style.css" rel="stylesheet">
    <!-- color CSS -->
    <link href="css/colors/default.css" id="theme" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
    <script>
    (function(i, s, o, g, r, a, m) {
        i['GoogleAnalyticsObject'] = r;
        i[r] = i[r] || function() {
            (i[r].q = i[r].q || []).push(arguments)
        }, i[r].l = 1 * new Date();
        a = s.createElement(o),
            m = s.getElementsByTagName(o)[0];
        a.async = 1;
        a.src = g;
        m.parentNode.insertBefore(a, m)
    })(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-19175540-9', 'auto');
    ga('send', 'pageview');
    </script>
</head>

<body class="fix-sidebar">
    <!-- Preloader -->
    <div class="preloader">
        <div class="cssload-speeding-wheel"></div>
    </div>
    <div id="wrapper">
        <!-- Top Navigation -->
        <nav class="navbar navbar-default navbar-static-top m-b-0">
            <div class="navbar-header"> <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i></a>
        
                <div class="top-left-part"><a class="logo" href="index.php"><b><!--This is dark logo icon--><img src="../plugins/images/eliteadmin-logo.png" alt="home" class="dark-logo" /><!--This is light logo icon--><img src="../plugins/images/eliteadmin-logo-dark.png" alt="home" class="light-logo" /></b><span class="hidden-xs"><!--This is dark logo text--><img src="../plugins/images/eliteadmin-text.png" alt="home" class="dark-logo" /><!--This is light logo text--><img src="../plugins/images/eliteadmin-text-dark.png" alt="home" class="light-logo" /></span></a></div>
                <ul class="nav navbar-top-links navbar-left hidden-xs">
                    <li><a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a></li>
                    <li><h3 align="center">user_table</h3></li>
                    
                </ul>
                <ul class="nav navbar-top-links navbar-right pull-right">
                    
                    <!-- /.dropdown -->
                    
                    <!-- /.dropdown -->
                    <!-- .Megamenu -->
                    
                    <!-- /.Megamenu -->
                   
                    <!-- /.dropdown -->
                </ul>
            </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
        </nav>
        <!-- End Top Navigation -->
        <!-- Left navbar-header -->
        <div class="navbar-default sidebar" role="navigation">
            <div class="sidebar-nav navbar-collapse slimscrollsidebar">
                <div class="user-profile">
                    <div class="dropdown user-pro-body">
                        <div><img src="../plugins/images/users/varun.jpg" alt="user-img" class="img-circle"></div>
                        <a href="#" class="dropdown-toggle u-dropdown" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Assent Admin <span class="caret"></span></a>
                        <ul class="dropdown-menu animated flipInY">
                            
                            <li><a href="../../user/login.php"><i class="fa fa-power-off"></i> Logout</a></li>
                        </ul>
                    </div>
                </div>
                <ul class="nav" id="side-menu">
                    <li class="sidebar-search hidden-sm hidden-md hidden-lg">
                        <!-- input-group -->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
            <button class="btn btn-default" type="button"> <i class="fa fa-search"></i> </button>
            </span> </div>
                        <!-- /input-group -->
                    </li>
                    
                    
                    
                   
                   
                    <li> <a href="tables.php" class="waves-effect"><i data-icon="O" class="linea-icon linea-software fa-fw"></i> <span class="hide-menu">Tables<span class="fa arrow"></span><span class="label label-rouded label-danger pull-right">4</span></span></a>
                    <ul class="nav nav-second-level">
                       
                        <li><a href="user.php">user Table</a></li>
                        <li><a href="project.php">project Table</a></li>
                        <li><a href="category.php">category Table</a></li>
                        <li><a href="feedback.php">feedback Table</a></li>
                        
                    </ul>
                </li>
                    
                                        
                    
                </ul>
            </div>
        </div>
        <!-- Left navbar-header end -->
        <!-- Page Content -->
        <div id="page-wrapper">
            <div class="container-fluid">
                
                <!-- /row -->
               
                <!-- /.row -->
                <!-- .row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="white-box">
                            
                        <button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#insert">insert</button><br>
                            <form method="post" action="userdelete.php">
                            
                            <input class="btn btn-primary btn-lg btn-block" type="submit" value="delete"><br>
                            
                            <table class="table table-striped table-bordered" id="editable-datatable">
                                <thead>
                                    <tr>
                                        <th>Action</th>
                                        <th>email</th>
                                        <th>name</th>
                                        <th>contact</th>
                                        <th>image</th>
                                        <th>type</th>
                                    </tr>
                                   
                                </thead>
                                <tbody>
                                
                                <?php
require 'class.php';
$obj=new database();
$res=$obj->getuser();

?>
<?php
while($row=$res->fetch_assoc())
{
    $conn=mysqli_connect('localhost','root','','ascent');
    $result=$conn->query("select * from freelancer_table where fk_uid='".$row["uid"]."'");
    $result1=$conn->query("select * from company_profile where fk_uid='".$row["uid"]."'");
    
    echo'                               <tr class="gradeX">
                                        <th>
                                        <input type="checkbox" name="chk[]" value="'.$row["uid"].'"> |
                                        <a href="userdelete.php?id='.$row["uid"].'"><span class="glyphicon glyphicon-trash"></span></a> |
                                        <a data-toggle="modal" data-target="#update'.$row["uid"].'"><span class="glyphicon glyphicon-edit"></span></a>
                                        <th>'.$row["email_id"].'</th>
                                        <th>'.$row["uname"].'</th>
                                        <th>'.$row["contact_no"].'</th>';
                                        
echo'                                        <th><a data-toggle="modal" data-target="#image'.$row["uid"].'"><img src="../../image/'.$row["image"].'" height="50" width="50"/></a></th>';


echo '<th>';
if($result->num_rows > 0){
echo '
<a data-toggle="modal" data-target="#free'.$row["uid"].'">freelancer</a> &nbsp;

';                                        
}

if($result1->num_rows > 0){
    echo '
    <a data-toggle="modal" data-target="#comp'.$row["uid"].'">company</a> 
    ';                               
}
                                    echo'</th>
                                    </tr>';
                                }
                                ?>                                    
                                    
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Action</th>
                                        <th>email</th>
                                        <th>name</th>
                                        <th>contact</th>
                                        <th>image</th>
                                        <th>type</th>
                                    </tr>
                                </tfoot>
                            </table>
                            
</form>
                        </div>
                    </div>
                </div>

<?php

$res2=$obj->getuser();
while($row2=$res2->fetch_assoc())
{
   echo ' <div class="modal fade" style="height:700px;margin-top:10%" id="image'.$row2["uid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" style="margin-top:10%">
        <div class="modal-content">
<div class="modal-header">
   <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
   <span itemprop="name"><h3>image of '.$row2["uname"].'</h3> </span>
</div>
<div class="modal-body">
<img src="../../image/'.$row2["image"].'" height="200" width="200"/>
</div>

</div>
</div>
</div>';
}


$res1=$obj->getuser();
while($row1=$res1->fetch_assoc())
{
    echo '
    <div class="modal fade" style="height:700px;margin-top:10%" id="update'.$row1["uid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-top:10%">
            <div class="modal-content">
    <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
       <span itemprop="name"><h3>update user '.$row1["uname"].'</h3> </span>
    </div>
    <div class="modal-body">
    <form class="form_modal_style" method="post" action="userupdate.php?id='.$row1["uid"].'" name="answer" enctype="multipart/form-data">
         <div class="wp-editor-container" class="cols-md-8">
         <table class="table">
         
         <tr><td><input type="text" name="txtname" placeholder="'.$row1["uname"].'" />
         
        <tr><td> <input type="text" name="txtmobile" placeholder="'.$row1["contact_no"].'" />
        <tr><td class="input-group">
        <div >
      verify<span class="input-group-addon" >
        <input type="radio" name="txtverify" value="1" aria-label="...">yes
      </span>
      <span class="input-group-addon">
        <input type="radio" name="txtverify" value="0" aria-label="...">no
      </span>
    </div>
       gender <tr><td class="input-group">
            <div >
          <span class="input-group-addon" >
            <input type="radio" name="txtgender" value="male" aria-label="...">male
          </span>
          <span class="input-group-addon">
            <input type="radio" name="txtgender" value="female" aria-label="...">female
          </span>
        </div>
        <tr><td> <input type="file" name="txtimage" placeholder="'.$row1["image"].'" />
         
         
         </table>  
                    </div>
                    <div class="row submit-wrapper">
                        <div class="col-md-3 col-xs-3">
                        <input type="submit" name="btinsert" value="insert"/>   
                        </div>
                    </div>
    </form>
                
            
    
        </div></div>
                        </div></div>';
    

}

$res4=$obj->getcompany();
while($row4=$res4->fetch_assoc())
{
    echo '
    <div class="modal fade" style="height:700px;margin-top:10%" id="comp'.$row4["fk_uid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-top:10%">
            <div class="modal-content">
    <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
       <span itemprop="name"><h3>company</h3> </span>
    </div>
    <div class="modal-body">
    <form class="form_modal_style" method="post" action="companydelete.php?id='.$row4["fk_uid"].'" name="answer" enctype="multipart/form-data">
         <div class="wp-editor-container" class="cols-md-8">
         <table class="table">
         
         <tr><td>name<td>"'.$row4["industry_name"].'"
         
        <tr><td>established<td> "'.$row4["established"].'" 
        <tr><td>location<td> "'.$row4["location"].'"
        <tr><td>details<td> "'.$row4["company_detail"].'"
        
       
       
       
         
         
         </table>  
                    </div>
                    <div class="row submit-wrapper">
                        <div class="col-md-3 col-xs-3">
                        <input type="submit" name="btinsert" value="delete"/>   
                        </div>
                    </div>
    </form>
                
            
    
        </div></div>
                        </div></div>';
    

}



$res3=$obj->getfreelancer();
while($row3=$res3->fetch_assoc())
{
    echo '
    <div class="modal fade" style="height:700px;margin-top:10%" id="free'.$row3["fk_uid"].'" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" style="margin-top:10%">
            <div class="modal-content">
    <div class="modal-header">
       <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
       <span itemprop="name"><h3>details</h3> </span>
    </div>
    <div class="modal-body">
    <form class="form_modal_style" method="post" action="freedelete.php?id='.$row3["fk_uid"].'" name="answer" enctype="multipart/form-data">
         <div class="wp-editor-container" class="cols-md-8">
         <table class="table">
         
         <tr><td>higher_degree<td>"'.$row3["higher_degree"].'"
         
        <tr><td>skills<td> "'.$row3["skills"].'" 
        <tr><td>experience<td> "'.$row3["job_experience"].'"
        <tr><td>social page<td> "'.$row3["social_pages"].'"
        
       
       
       
         
         
         </table>  
                    </div>
                    <div class="row submit-wrapper">
                        <div class="col-md-3 col-xs-3">
                        <input type="submit" name="btinsert" value="delete"/>   
                        </div>
                    </div>
    </form>
                
            
    
        </div></div>
                        </div></div>';
    

}

echo '
<div class="modal fade" id="insert" style="height:700px;margin-top:10%" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg " style="margin-top:10%">
        <div class="modal-content" >
<div class="modal-header">

	<button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="glyphicon glyphicon-trash"></i></button>
<span itemprop="name"><h3>add user</h3></span>
</div>
<div class="modal-body">
<form class="form_modal_style" method="post" action="useradd.php" name="answer" enctype="multipart/form-data">
	 <div class="wp-editor-container" class="cols-md-12">
     <table class="table">
     <tr><td><input type="text" name="txtemail" placeholder="email" />
     <tr><td><input type="text" name="txtname" placeholder="name" />
     <tr><td><input type="text" name="txtpassword" placeholder="password" />
    <tr><td> <input type="text" name="txtmobile" placeholder="mobile" />
    
    <tr><td class="input-group">
        <div >
      <span class="input-group-addon" >
        <input type="radio" name="txtgender" value="male" aria-label="...">male
      </span>
      <span class="input-group-addon">
        <input type="radio" name="txtgender" value="female" aria-label="...">female
      </span>
    </div>
    <tr><td> <input type="file" name="txtimage" placeholder="image" />
     
     
     </table>
	            </div>
				<div class="row submit-wrapper">
	                <div class="col-md-3 col-xs-3">
                    <input type="submit" name="btinsert" value="insert"/>
	                       
	                </div>
	            </div>
</form>
	        
	    

	</div></div>
					</div></div>';
?>
                <!-- /.row -->
                <!-- .row -->
                <!-- /.row -->
                <!-- .row -->
                <!-- /.row -->
                <!-- .right-sidebar -->
                
                <!-- /.right-sidebar -->
            </div>
            <!-- /.container-fluid -->
            <footer class="footer text-center"> 2017 &copy; Assent Admin brought to you by Assentdesigner.in </footer>
        </div>
        <!-- /#page-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="../plugins/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="bootstrap/dist/js/tether.min.js"></script>
    <script src="bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="../plugins/bower_components/bootstrap-extension/js/bootstrap-extension.min.js"></script>
    <!-- Menu Plugin JavaScript -->
    <script src="../plugins/bower_components/sidebar-nav/dist/sidebar-nav.min.js"></script>
    <!--slimscroll JavaScript -->
    <script src="js/jquery.slimscroll.js"></script>
    <!--Wave Effects -->
    <script src="js/waves.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="js/custom.min.js"></script>
    <!-- Editable -->
    <script src="../plugins/bower_components/jquery-datatables-editable/jquery.dataTables.js"></script>
    <script src="../plugins/bower_components/datatables/dataTables.bootstrap.js"></script>
    <script src="../plugins/bower_components/tiny-editable/mindmup-editabletable.js"></script>
    <script src="../plugins/bower_components/tiny-editable/numeric-input-example.js"></script>
    <script>
    $('#mainTable').editableTableWidget().numericInputExample().find('td:first').focus();
    $('#editable-datatable').editableTableWidget().numericInputExample().find('td:first').focus();
    $(document).ready(function() {
        $('#editable-datatable').DataTable();



    });
    </script>
    <!--Style Switcher -->
    <script src="../plugins/bower_components/styleswitcher/jQuery.style.switcher.js"></script>
</body>


<!-- Mirrored from eliteadmin.themedesigner.in/demos/eliteadmin-inverse/editable-tables.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2017 14:54:35 GMT -->
</html>

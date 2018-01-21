<?php
class database{
private static $con=null;
private static function connect()
{
    self::$con=mysqli_connect('localhost','root','','ascent');
    return self::$con;

}
private static function disconnect()
{
    mysqli_close(self::$con);
     self::$con=null;
    
}

public function getcategory()
{
    $con=database::connect();
    $res=$con->query("select * from jobcat_table ");
    return $res;
    database::disconnect();
}
public function categoryinsert($_cname)
{
    $con=database::connect();
    $res=$con->query("insert into jobcat_table values('". null ."','". $_cname ."' )");
    return $res;
    database::disconnect();

}
public function categorydelete($_id)
{
    $con=database::connect();
    $res=$con->query("delete from jobcat_table where cat_id in($_id)");
    return $res;
    database::disconnect();

}

public function categoryupdate($_id)
{
    $con=database::connect();
    $res=$con->query("select * from jobcat_table where cat_id=" .$_id);
    return $res;
    database::disconnect();

}
public function categoryupdate1($_id,$_cname)
{
    $con=database::connect();
    $res=$con->query("update jobcat_table set cat_name='". $_cname ."' where cat_id=" .$_id);
    return $res;
    database::disconnect();

}
public function getallproject()
{
    $con=database::connect();
    $res=$con->query("select * from jobpost_table");
    return $res;
    database::disconnect();
}
public function getproject($_id)
{
    $con=database::connect();
    $res=$con->query("select * from jobpost_table where job_id=$_id");
    return $res;
    database::disconnect();
}
public function projectupdate($_id,$_title,$_category,$_exp,$_detail,$_budget,$_deadline )
{
    $con=database::connect();
    $res=$con->query("update jobpost_table set title='".$_title."',category='".$_category."',job_experience='".$_exp."',extra_details='". $_detail."',budget='". $_budget ."',dead_line='". $_deadline ."'  where job_id='".$_id."' ");
    
    return $res;
    database::disconnect();
}
public function getfeedback()
{
    $con=database::connect();
    $res=$con->query("select * from feedback_table");
    return $res;
    database::disconnect();
}
public function feedbackdelete($id)
{
    $con=database::connect();


$res=$con->query("delete  from feedback_table where feedback_id in($id)" );

return $res;
database::disconnect();
}

public function freedelete($_id)
{
    $con=database::connect();
    $res=$con->query("delete from freelancer_table where fk_uid in($_id)");
    return $res;
    database::disconnect();

}
public function companydelete($_id)
{
    $con=database::connect();
    $res=$con->query("delete from company_profile where fk_uid in($_id)");
    return $res;
    database::disconnect();

}
public function projectdelete($id)
{
    $con=database::connect();


$res=$con->query("delete  from jobpost_table where job_id in($id)" );

return $res;
database::disconnect();
}
public function userdelete($_id)
{
    $con=database::connect();
    $arr=explode(",",$_id);
    $length=count($arr);
    for($i=0;$i<$length;$i++)
            {
$sql="select * from user_table where uid ='".$arr[$i]."' ";
$res=$con->query($sql);
$row=$res->fetch_assoc();
$image="../../image/".$row["image"];

if($image!="../../image/")
{
unlink($image);
}

    $res=$con->query("delete from user_table where uid ='".$arr[$i]."'"  );
    $conn=mysqli_connect('localhost','root','','ascent');
    $result=$conn->query("select * from freelancer_table where fk_uid='".$row["uid"]."'");
    $result1=$conn->query("select * from company_profile where fk_uid='".$row["uid"]."'");
    
    if($result->num_rows > 0){
    $res1=$con->query("delete from freelancer_table where fk_uid ='".$arr[$i]."'"  );
    }
    if($result1->num_rows > 0){
    $res2=$con->query("delete from company_profile where fk_uid ='".$arr[$i]."'"  );
    }

}
return $res;
database::disconnect();
}
public function getuser()
{
    $con=database::connect();
       $res=$con->query("select * from user_table ");
    return $res;
    database::disconnect();
}
public function getuserbyid($id)
{
    $con=database::connect();
       $res=$con->query('select * from user_table where uid='.$id.'');
    return $res;
    database::disconnect();
}
public function getfreelancer()
{
    $con=database::connect();
       $res=$con->query("select * from freelancer_table ");
    return $res;
    database::disconnect();
}
public function getcompany()
{
    $con=database::connect();
       $res=$con->query("select * from company_profile ");
    return $res;
    database::disconnect();
}
public function userinsert($_email,$_uname, $_password,$_contact,$_gender, $_image )
{
    $con=database::connect();
    $res=$con->query("insert into user_table values('".null."','".$_email."','".$_uname."','". $_password ."' ,'".$_contact."','".$_gender."','". $_image."','". 1 ."','". null ."','". 1 ."'  )");
    return $res;
    database::disconnect();

}

public function userupdate($id)
{
    $con=database::connect();
    $res=$con->query("select * from user_table where uid='".$id."'");
    return $res;
    database::disconnect();
}
public function userupdate1($_email,$_image,$_gender,$_uname,$_contact,$_verify )
{
    $con=database::connect();
    $res=$con->query("update user_table set uname='".$_uname."',contact_no='".$_contact."',gender='".$_gender."',image='". $_image."',token='". null ."',verify='". $_verify ."'  where uid='".$_email."' ");
    return $res;
    database::disconnect();
}
}
?>
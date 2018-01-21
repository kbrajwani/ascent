<?php
class loginclass{
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


public function getcat()
{
    $con=loginclass::connect();
       $res=$con->query("select * from jobcat_table ");
    return $res;
    loginclass::disconnect();
}
public function getfreelancer()
{
    $con=loginclass::connect();
       $res=$con->query("select * from freelancer_table ");
    return $res;
    loginclass::disconnect();
}
public function getfreeuser()
{
    $con=loginclass::connect();
       $res=$con->query("select f.*,u.* from freelancer_table f,user_table u where uid=fk_uid ");
    return $res;
    loginclass::disconnect();
}
public function getfreeuser1($id)
{
    $con=loginclass::connect();
       $res=$con->query('select f.*,u.* from freelancer_table f,user_table u where uid=fk_uid and concat(u.uname,f.job_experience,f.skills,f.social_pages) LIKE "%'.$id.'%" ');
       
    return $res;
    loginclass::disconnect();
}
public function getcomp($_id)
{
    $con=loginclass::connect();
       $res=$con->query("select * from company_profile where fk_uid=".$_id." ");
       
    return $res;
    loginclass::disconnect();
}
public function getcompany()
{
    $con=loginclass::connect();
       $res=$con->query("select c.*,u.* from company_profile c,user_table u where fk_uid=uid ");
    return $res;
    loginclass::disconnect();
}
public function getcompany1($id)
{
    $con=loginclass::connect();
       $res=$con->query('select c.*,u.* from company_profile c,user_table u where fk_uid=uid and work="'.$id.'"');
    return $res;
    loginclass::disconnect();
}
public function wishdelete($id)
{
    $con=loginclass::connect();
$res=$con->query("delete  from wish_table where fk_job_id in($id)" );
return $res;
loginclass::disconnect();
} 
public function hiredelete($id)
{
    $con=loginclass::connect();
$res=$con->query("delete  from hire where hirejob_id in($id)" );
return $res;
loginclass::disconnect();
} 

public function feedbackdelete($id)
{
    $con=loginclass::connect();


$res=$con->query("delete  from feedback_table where feedback_id in($id)" );

return $res;
loginclass::disconnect();
}

public function projectdelete($id)
{
    $con=loginclass::connect();


$res=$con->query("delete  from jobpost_table where job_id in($id)" );

return $res;
loginclass::disconnect();
}
public function getcompanybyid($id)
{
    $con=loginclass::connect();
       $res=$con->query("select c.*,u.* from company_profile c,user_table u where fk_uid=uid and fk_uid=".$id." ");
    return $res;
    loginclass::disconnect();
}
public function getjob()
{
    $con=loginclass::connect();
       $res=$con->query("select u.*,j.* from user_table u,jobpost_table j where uid=fk_uid ");
    return $res;
    loginclass::disconnect();
}
public function getjob1($id)
{
    $con=loginclass::connect();
       $res=$con->query('select u.*,j.* from user_table u,jobpost_table j where uid=fk_uid and category="'.$id.'"');
    return $res;
    loginclass::disconnect();
}
public function getcompjob($email)
{
    $con=loginclass::connect();
       $res=$con->query('select * from jobpost_table where fk_uid="'.$email.'" ');
    return $res;
    loginclass::disconnect();
}
public function getcompjob1($email,$id)
{
    $con=loginclass::connect();
       $res=$con->query('select * from jobpost_table where fk_uid="'.$email.'" and concat(title,category,budget) LIKE "%'.$id.'%" ');
    return $res;
    loginclass::disconnect();
}
public function getjobbyid($id)
{
    $con=loginclass::connect();
       $res=$con->query('select * from jobpost_table where job_id='.$id.' ');
       
    return $res;
    loginclass::disconnect();
}
public function getwishlist($email)
{
    $con=loginclass::connect();
       $res=$con->query('select * from wish_table where fk_email_id="'.$email.'" ');
       
       
    return $res;
    loginclass::disconnect();
} 
public function getbid($id)
{
    $con=loginclass::connect();
       $res=$con->query('select c.*,u.* from bid_table c,user_table u where  fk_email_id=email_id and fk_job_id='.$id.'');
     
    return $res;
    loginclass::disconnect();
}
public function insertwishlist($id,$emailid)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("insert into wish_table values('".null."','". $id ."','".$emailid."')");

 return $res;
 loginclass::disconnect();
}
public function insertfeedback($freeid,$jobid,$emailid,$detail)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("insert into feedback_table values('".null."','".$detail."','".$jobid."','". $emailid ."','".$freeid."')");

 return $res;
 loginclass::disconnect();
}
public function updatefeedback($freeid,$jobid,$emailid,$detail)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("update feedback_table set discription='".$detail."' where fk_job_id='".$jobid."'");

 return $res;
 loginclass::disconnect();
}
public function insertbid($bid,$jobid,$emailid)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("insert into bid_table values('".$bid."','". $jobid ."','".$emailid."')");

 return $res;
 loginclass::disconnect();
}
public function getfreefeed($id)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("select * from feedback_table where free_id='".$id."'");
    
    $num=$res->num_rows;

 return $num;
 loginclass::disconnect();
}
public function getfreefeed1($id)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("select * from feedback_table where free_id='".$id."'");
    
    

 return $res;
 loginclass::disconnect();
}
public function getfeedback($id)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("select * from feedback_table where fk_job_id='".$id."'");
    
    

 return $res;
 loginclass::disconnect();
}
public function getfeed($id)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("select * from feedback_table where fk_job_id='".$id."'");
    $num=$res->num_rows;
    

 return $num;
 loginclass::disconnect();
}
public function gethire($id)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("select * from hire where hirejob_id='".$id."'");
    $num=$res->num_rows;
    

 return $num;
 loginclass::disconnect();
}
public function gethire1($id)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("select h.*,r.* from hire h,freelancer_table r where hirejob_id='".$id."' and hireuid=fk_uid");
    
    

 return $res;
 loginclass::disconnect();
}
public function hire($id,$uid)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("insert into hire values('".$id."','". $uid ."')");

 return $res;
 loginclass::disconnect();
}
public function getresume($uid)
{
    $con=loginclass::connect();
       $res=$con->query("select * from freelancer_table where fk_uid=".$uid." ");
    return $res;
    loginclass::disconnect();
}
public function updatecomp($uid,$cat,$name,$loc,$link,$establish,$detail)
{
    $con=loginclass::connect();
    
    
    $res=$con->query('update company_profile set industry_name="'. $name .'",location="'.$loc.'",established='.$establish.',link="'.$link.'",company_detail="'.$detail.'",work="'.$cat.'" where fk_uid='.$uid.'');
    
 return $res;
 loginclass::disconnect();
}
public function insertresume($uid,$pdf,$link,$education,$ed,$edf,$skill,$exp,$expd,$expdf)
{
    $con=loginclass::connect();
    $degree=$education.",".$ed.",".$edf;
    $experience=$exp.",".$expd.",".$expdf;
    $res=$con->query("insert into freelancer_table values('".$uid."','". $degree ."','".$experience."','".$skill."','".$link."','".$pdf."','".null."' )");
    
    return $res;
    loginclass::disconnect();
}

public function updateresume($uid,$pdf,$link,$education,$ed,$edf,$skill,$exp,$expd,$expdf,$_image)
{
    $con=loginclass::connect();
    $degree=$education.",".$ed.",".$edf;
    $experience=$exp.",".$expd.",".$expdf;
    if($pdf==null)
    {
        $res=$con->query("update freelancer_table set higher_degree='". $degree ."',job_experience='".$experience."',skills='".$skill."',social_pages='".$link."' ");
    }
    else
    {
        unlink($_image);
    $res=$con->query("update freelancer_table set higher_degree='". $degree ."',job_experience='".$experience."',skills='".$skill."',social_pages='".$link."',pdf='".$pdf."' ");
    }
    return $res;
    loginclass::disconnect();
}
public function insertcomp($uid,$cat,$name,$loc,$link,$establish,$detail)
{
    $con=loginclass::connect();
    
     
    $res=$con->query('insert into company_profile values('.$uid.',"'. $name .'","'.$loc.'","'.$establish.'","'.$detail.'","'.$cat.'","'.$link.'" )');
    echo "insert into company_profile values('".$uid."','". $name ."','".$loc."','".$establish."','".$detail."','".$cat."','".$link."' )";
 return $res;
 loginclass::disconnect();
}
public function insertjob($uid,$cat,$title,$budget,$detail,$deadline,$exp)
{
    $con=loginclass::connect();
    
     
    $res=$con->query("insert into jobpost_table values('".$uid."','".null."','". $title ."','".$cat."','".$exp."','".$budget."','".$detail."','".$deadline."' )");
    echo "insert into jobpost_table values('".$uid."','".null."','". $title ."','".$cat."','".$exp."','".$budget."','".$detail."','".$deadline."' )";
    
 return $res;
 loginclass::disconnect();
}
//user function
public function getlogin($_email1)
{
    $con=loginclass::connect();
    $res=$con->query("select * from user_table where email_id='".$_email1."'");
    
    return $res;
    loginclass::disconnect();

}
public function insert($_email,$_name,$_password,$_mobile,$_gender,$_image1,$_token)
{
    $con=loginclass::connect();
    $_sql="insert into user_table values('". null ."','". $_email ."','". $_name ."','". $_password ."','". $_mobile ."','". $_gender ."','". $_image1 ."','". $_token ."','". null ."','". 1 ."')";
    
    $res=$con->query($_sql);
    return $res;
    loginclass::disconnect();

}
public function update($_email,$_name,$_mobile,$_gender,$_image1,$_image)
{
    $con=loginclass::connect();
    if($_image1==null)
    {
        $_sql="update user_table set uname='". $_name ."',contact_no='". $_mobile ."',gender='". $_gender ."' where email_id='".$_email."'";
    }
    else
    {
        unlink($_image);
    $_sql="update user_table set uname='". $_name ."',contact_no='". $_mobile ."',gender='". $_gender ."',image='". $_image1 ."' where email_id='".$_email."'";
    }
    $res=$con->query($_sql);
    return $res;
    loginclass::disconnect();

}
public function updatepass($_email1,$_password,$_newpass)
{
    $con=loginclass::connect();
    $result=$con->query("select * from user_table where email_id= '".$_email1."' and password='".$_password."' ");
    if($result->num_rows==1)
    {
        $_sql="update user_table set password='". $_newpass ."' where email_id='".$_email1."'";
        $res=$con->query($_sql);
    }
    else
    {
    $res="old password is wrong";
    }

    return $res;
    loginclass::disconnect();

}
public function updatepassforgot($_email1,$_newpass,$token)
{
$con=loginclass::connect();
    $result=$con->query("select * from user_table where email_id= '".$_email1."' and token='".$token."'");
    if($result->num_rows==1)
    {
        $_sql="update user_table set password='". $_newpass ."' where email_id='".$_email1."'";
        $res=$con->query($_sql);
    }
    return $res;
    loginclass::disconnect();

}
public function verify($_email1,$token)
{
$con=loginclass::connect();
    $result=$con->query("select * from user_table where email_id= '".$_email1."' and token='".$token."'");
    if($result->num_rows==1)
    {
        $_sql="update user_table set verify=1 where email='".$_email1."'";
        $res=$con->query($_sql);
    }
    return $res;
    loginclass::disconnect();

}
public function userview($_email1)
{
    $con=loginclass::connect();
    $res=$con->query("select * from user_table where email_id=" . "'$_email1'");
    return $res;
    loginclass::disconnect();

}
public function userview1($_email1)
{
    $con=loginclass::connect();
    $res=$con->query("select * from user_table where uid=" . "'$_email1'");
    return $res;
    loginclass::disconnect();

}
}
?>
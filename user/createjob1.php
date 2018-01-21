<?php
session_start();
if($_SESSION["email_id"]==null)
{
header("location:login.php");
}
else{
    
require 'loginclass.php';
$obj=new loginclass();
    $email=$_SESSION["email_id"];
    $_result=$obj->userview($email);
    $row=$_result->fetch_assoc();
    $uid=$row["uid"];
}
$pdf=$exp=$link=$expd=$expdf=$education=$ed=$edf=$skill=null;
$cat=$_POST["cat"];
$title=$_POST["title"];
$budget=$_POST["budget"];
$exp=$_POST["exp"];
$detail=$_POST["desc"];
$deadline=$_POST["deadline"];



$res=$obj->insertjob($uid,$cat,$title,$budget,$detail,$deadline,$exp);

if($res===true)
{
header("location:create-job.php");
}
else
{
echo 'not';
}

?>
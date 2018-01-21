<?php
session_start();
$id=$_GET["id"];
$id1=$_GET["id2"];
$email=$_SESSION["email_id"];
$detail=$_POST["feedback"];
require 'loginclass.php';
$obj=new loginclass();
$comp=$obj->userview($email);
$rcomp=$comp->fetch_assoc();
$res=$obj->insertfeedback($id1,$id,$rcomp["uid"],$detail);
if($res===true)
{
header("location:job-detail.php?".$id."");
}
else
{
echo 'not';
}
?>
<?php
session_start();
$id=$_GET["id"];
$email=$_SESSION["email_id"];
$bid=$_POST["bid"];
require 'loginclass.php';
$obj=new loginclass();
$res=$obj->insertbid($bid,$id,$email);
if($res===true)
{
header("location:job-detail.php?".$id."");
}
else
{
echo 'not';
}
?>
<?php
session_start();
if($_SESSION["email_id"]==null)
{
header("location:login.php");
}
else{
    
require 'loginclass.php';
$obj=new loginclass();
$id=$_GET["id"];
$uid=$_GET["uid"];

$res=$obj->hire($id,$uid);

if($res===true)
{
header("location:job-detail.php");
}
else
{
echo 'not';
}
}
?>
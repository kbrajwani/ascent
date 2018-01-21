<?php
session_start();
$id=$_GET["id"];
$email=$_SESSION["email_id"];
require 'loginclass.php';
$obj=new loginclass();
$res=$obj->insertwishlist($id,$email);
if($res===true)
{
header("location:job-detail.php?".$id."");
}
else
{
echo 'not';
}
?>
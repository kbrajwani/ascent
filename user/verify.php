<?php
$_email=$_GET["email"];
$_token=$_GET["token"];
require 'loginclass.php';
$obj=new loginclass();
$_result=$obj->verify($_email,$_token);
if($_result===true)
{
header('location:login.php');
}
?>
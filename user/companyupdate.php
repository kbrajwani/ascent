<?php
session_start();
if($_SESSION["email_id"]==null)
{
header("location:login.php");
}
else{
    $email=$_SESSION["email_id"];
}
$name=$loc=$link=$detail=$establish=$cat=null;
$name=$_POST["name"];
$loc=$_POST["loc"];
$link=$_POST["link"];
$detail=$_POST["detail"];
$establish=$_POST["establish"];
$cat=$_POST["cat"];
require 'loginclass.php';
$obj=new loginclass();
$_result=$obj->userview($email);
$row=$_result->fetch_assoc();
$uid=$row["uid"];

$res=$obj->updatecomp($uid,$cat,$name,$loc,$link,$establish,$detail);

if($res===true)
{
header("location:company-detail.php");
}
else
{
echo 'not';
}

?>
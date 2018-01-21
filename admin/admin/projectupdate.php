<?php
session_start();
require 'class.php';
$obj=new database();
$title=$_POST["txttitle"];
$cat=$_POST["txtcategory"];
$budget=$_POST["txtbudget"];
$exp=$_POST["txtexperience"];
$deadline=$_POST["txtdead_line"];
$detail=$_POST["txtdetail"];

$id=$_GET["id"];
$res=$obj->projectupdate($id,$title,$cat,$exp,$detail,$budget,$deadline );
if($res===true)
{
    header('location:project.php');
}
else
{
    alert("something went wrong plese try again");
    header('location:project.php');
}
?>
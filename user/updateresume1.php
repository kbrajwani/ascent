<?php
session_start();
if($_SESSION["email_id"]==null)
{
header("location:login.php");
}
else{
    $email=$_SESSION["email_id"];
} 
require 'loginclass.php';
$obj=new loginclass();
$_result=$obj->userview($email);
$row=$_result->fetch_assoc();
$uid=$row["uid"];
$res=$obj->getresume($uid);
$row1=$res->fetch_assoc();
$image="../image/".$row["pdf"];



$pdf=$exp=$link=$expd=$expdf=$education=$ed=$edf=$skill=null;
$pdf=$_POST["pdf"];
$exp=$_POST["exp"];
$link=$_POST["link"];
$expd=$_POST["expd"];
$expdf=$_POST["expdf"];
$education=$_POST["education"];
$ed=$_POST["ed"];
$edf=$_POST["edf"];
$skill=$_POST["skill"];;
$target_dir="../image/";
if($pdf!=NULL)
{
$target_file=$target_dir.basename($_FILES["pdf"]["name"]);

if(move_uploaded_file($_FILES["pdf"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}

}

$_result=$obj->userview($email);
$row=$_result->fetch_assoc();
$uid=$row["uid"];

$res=$obj->updateresume($uid,$pdf,$link,$education,$ed,$edf,$skill,$exp,$expd,$expdf,$image);

if($res===true)
{
header("location:resume-detail.php");
}
else
{
echo 'not';
}

?>
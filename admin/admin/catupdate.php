<?php
session_start();
require 'class.php';
$obj=new database();
$answer=$_POST["cat"];
$id=$_GET["id"];
$res=$obj->categoryupdate1($id,$answer);
if($res===true)
{
    header('location:category.php');
}
else
{
    alert("something went wrong plese try again");
    header('location:category.php');
}
?>
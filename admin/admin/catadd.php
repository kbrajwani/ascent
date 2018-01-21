<?php
session_start();
require 'class.php';
$obj=new database();
$answer=$_POST["cat"];
$res=$obj->categoryinsert($answer);
if($res===true)
{
    header('location:category.php');
}
else
{
    alert('something went wrong plese go back');
    header('location:category.php');
}
?>
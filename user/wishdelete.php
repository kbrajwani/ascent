<?php 
$id=$_GET["id"];
require 'loginclass.php';
$obj=new loginclass();

if($id!=null)
{
$conn=$obj->wishdelete($id);
}
if($conn===true)
{
header('location:wish-jobs.php');
}
?>
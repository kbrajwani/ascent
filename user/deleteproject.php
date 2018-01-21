<?php 
$id=$_GET["id"];
require 'loginclass.php';
$obj=new loginclass();

if($id!=null)
{
$conn=$obj->projectdelete($id);
$c=$obj->wishdelete($id);
$c1=$obj->hiredelete($id);
}
if($conn===true)
{
header('location:manage-jobs.php');
}
?>
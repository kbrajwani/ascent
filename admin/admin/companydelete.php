<?php 
$id=$_GET["id"];


require 'class.php';
$obj=new database();


$conn=$obj->companydelete($id);
if($conn===true)
{
header('location:user.php');
}
?>
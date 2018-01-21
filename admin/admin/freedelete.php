<?php 
$id=$_GET["id"];


require 'class.php';
$obj=new database();


$conn=$obj->freedelete($id);
if($conn===true)
{
header('location:user.php');
}
?>
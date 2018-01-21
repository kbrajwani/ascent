<?php 
$id=$_GET["id"];
require 'loginclass.php';
$obj=new loginclass();

if($id!=null)
{
$conn=$obj->feedbackdelete($id);

}
if($conn===true)
{
header('location:resume-detail.php');
}
?>
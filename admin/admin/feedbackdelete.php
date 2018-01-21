<?php 
$id=$_GET["id"];
$product=implode(",",$_POST["chk"]);
echo $product;
require 'class.php';
$obj=new database();

if($id!=null)
{
    
$conn=$obj->feedbackdelete($id);
}
else
{
    
    $conn=$obj->feedbackdelete($product);
}
if($conn===true)
{
header('location:feedback.php');
}
?>
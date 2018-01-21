<?php 
$id=$_GET["id"];
$product=implode(",",$_POST["chk"]);
echo $product;
require 'class.php';
$obj=new database();

if($id!=null)
{
$conn=$obj->projectdelete($id);
}
else
{
    $conn=$obj->projectdelete($product);
}
if($conn===true)
{
header('location:project.php');
}
?>
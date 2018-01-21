<?php 
$id=$_GET["id"];
$product=implode(",",$_POST["chk"]);
echo $product;
require 'class.php';
$obj=new database();

if($id!=null)
{
$conn=$obj->categorydelete($id);
}
else
{
    $conn=$obj->categorydelete($product);
}
if($conn===true)
{
header('location:category.php');
}
?>
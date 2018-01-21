<?php 
$id=$_GET["id"];
$product=implode(",",$_POST["chk"]);
echo $product;
require 'class.php';
$obj=new database();

if($id!=null)
{
$conn=$obj->userdelete($id);
}
else
{
    $conn=$obj->userdelete($product);
}
if($conn===true)
{
header('location:user.php');
}
?>
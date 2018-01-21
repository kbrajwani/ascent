<?php
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$_email=$_name=$_password=$_mobile=$_address=$_gender=$_image="";


$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_password=$_POST["txtpassword"];
$_mobile=$_POST["txtmobile"];

$_gender=$_POST["txtgender"];
$target_dir="../../image/";
$target_file=$target_dir . basename($_FILES["txtimage"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_image=basename($_FILES["txtimage"]["name"]);;

require 'class.php';
$obj=new database();
$res=$obj->userinsert($_email, $_name , $_password , $_mobile , $_gender , $_image );
if($res===true)
{
        header('location:user.php');
}
else
{
    alert('something went wrong plese go back');
    header('location:category.php');
    
}
}
?>
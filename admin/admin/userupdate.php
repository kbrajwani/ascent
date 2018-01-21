<?php
require 'class.php';
$obj=new database();

$_id=$_GET["id"];

$_name=$_POST["txtname"]; 

 $_mobile = $_POST["txtmobile"];
   $_gender = $_POST["txtgender"];
   $_verify = $_POST["txtverify"];

$_image =basename($_FILES["txtimage"]["name"]); 
    if($_image!=null)
    {
        $res1=$obj->userupdate($_id);
        $row1=$res1->fetch_assoc();
        if($row1["image"]!=null)
        {
        unlink("../../image/".$row1["image"]);
        }
    $target_dir="../../image/";
$target_file=$target_dir . basename($_FILES["txtimage"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_image =basename($_FILES["txtimage"]["name"]);;
    }
$res=$obj->userupdate1($_id, $_image, $_gender ,$_name , $_mobile,$_verify);

if($res===true)
{
    header('location:user.php');
}
else
{
    echo "not successfull";
}

?>
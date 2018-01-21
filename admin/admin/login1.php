<?php 
if($_SERVER["REQUEST_METHOD"]=="POST")
    {
$_email1="";  
    $_password1="";

$_email1=$_POST["uname"];
$_password1=$_POST["pass"];
echo $_email1;
echo $_password1;

if(($_email1=="kumar@gmail.com")&&($_password1=="kumar123"))
{
  header('location:index.php');

}
else
{

    header('location:login.php');
}
}

?>
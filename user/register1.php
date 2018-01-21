<?php

echo !extension_loaded('openssl')?"Not Available":"Available";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $_email="";
    $_name="";
    $_password="";
    $_mobile="";
    $_gender="";
    $_image1="";
$_email=$_POST["txtemail"];
$_name=$_POST["txtname"];
$_password=$_POST["txtpass"];
$_mobile=$_POST["txtphone"];
$_gender=$_POST["txtgender"];
$target_dir="../image/";
$target_file=$target_dir.basename($_FILES["txtimage"]["name"]);
echo $target_file;
if(move_uploaded_file($_FILES["txtimage"]["tmp_name"],$target_file))
{
    echo 'file uploaded';
}
$_image1=$target_file;

$string=md5(rand());
    $token=substr($string,0,10);
require 'loginclass.php';
$obj=new loginclass();
$_result=$obj->insert($_email,$_name,$_password,$_mobile,$_gender,$_image1,$token);

if($_result===true)
{
    
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
require_once "phpmailer/class.phpmailer.php";
$message="localhost/bootstrapdemo/group54/user/verify.php?token=".$token."&email=".$_email."";

// creating the phpmailer object
$mail = new PHPMailer(true);

// telling the class to use SMTP
$mail->IsSMTP();

// enables SMTP debug information (for testing) set 0 turn off debugging mode, 1 to show debug result
$mail->SMTPDebug = 0;

// enable SMTP authentication
$mail->SMTPAuth = true;

// sets the prefix to the server
$mail->SMTPSecure = 'ssl';

// sets GMAIL as the SMTP server
$mail->Host = 'smtp.gmail.com';

// set the SMTP port for the GMAIL server
$mail->Port = 465;

// your gmail address
$mail->Username = 'maildemo254@gmail.com';

// your password must be enclosed in single quotes
$mail->Password = 'maildemo1234';

// add a subject line
$mail->Subject = ' verification ';

// Sender email address and name
$mail->SetFrom('kumarrajwani18@gmail.com', 'verification account link');

$email1=$_email;
// reciever address, person you want to send
$mail->AddAddress($email1);

// if your send to multiple person add this line again
//$mail->AddAddress('tosend@domain.com');

// if you want to send a carbon copy
//$mail->AddCC('tosend@domain.com');


// if you want to send a blind carbon copy
//$mail->AddBCC('tosend@domain.com');

// add message body
$mail->MsgHTML($message);


// add attachment if any
//$mail->AddAttachment('time.png');

try {
    // send mail
	
	//don't forget to enable openssl true from php_extensions
    $mail->Send();
    $msg = 'Mail send successfully please verify your account <a href="mail.gmail.com">click me to verify</a>';
    
} catch (phpmailerException $e) {
    $msg = $e->getMessage();
} catch (Exception $e) {
    $msg = $e->getMessage();
}
echo $msg;

   // header('location:login.php');
}
else
{
    echo "Not Successfull";
}

}

?>
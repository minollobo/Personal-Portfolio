<?php
//get data from form  

$name = $_POST['fullname'];
$email = $_POST['emailaddress'];
$message= $_POST['message'];

$to = "minollobo@gmail.com";
$subject = "Mail From Personal website";
$txt ="Name = ". $name . "\r\n Email = " . $email . "\r\n Message =" . $message;
$headers = "From: minollobo02@gmail.com" . "\r\n" .
"CC: minollobo02@gmail.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thankyou.html");
?>
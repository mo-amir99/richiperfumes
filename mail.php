<?php
//get data from form  
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$phone = $_POST['phone'];
$email= $_POST['email'];
$message= $_POST['message'];
$to = "email2016email@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $fname+" "+$lname . "\r\n  Phone Number = " . $phone . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com" . "\r\n" .
"CC: $email";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:index.html");
?>
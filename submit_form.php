<?php
$to = "hi@decentralsec.io";
//$subject = "Contact Form Message";

$userName  = trim($_POST['name']);
$subject = trim($_POST['subject']);
$userEmail = trim($_POST['email']);
$userMessage = trim($_POST['message']);
$headers = "From: ".$userEmail . "\r\n";
mail($to,$subject,$userMessage,$headers);
echo "done"; 
?>
<!--<html>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="refresh" content="3; url=https://www.syedmazharuddintaj.com/decentralsec ">
</html>-->
<?php 
//Get POST Data
$o1=$_POST['o1'];
$o2=$_POST['o2'];
$o3=$_POST['o3'];
$o4=$_POST['o4'];
$block=$_POST['block'];
$email=$_POST['email'];

// the message
$msg = "To view your Static IP info and customized instructions please visit the link below .\nhttps://kumpe.link/$o1$o2$o3$o4$block";
// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

// Email Headers
$headers = "From: automation@kumpeapps.com" . "\r\n" .
"CC: ";

// Allowance Email
mail("$email","Static IP Info for $o1.$o2.$o3.$o4",$msg,$headers);
?>
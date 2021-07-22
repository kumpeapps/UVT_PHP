<?php
require_once "/home4/angela70/public_html/mobilegroomingbuddy.us/portal/includes/require_login.php";

require_once('/home4/angela70/public_html/mobilegroomingbuddy.us/portal/mysql_user/Web_MGB.php');

$connection = mysqli_connect($host,$user,$pass,'MGB_'.$masterID) or die ("Couldn't connect to server.");  

$data = "UPDATE `calendar` SET `eventDate`='".$_POST['eventDate']."' WHERE `eventID` =".$_POST['eventID'];
$query = mysqli_query($connection, $data) or die("Couldn't execute query. ". mysqli_error($connection));
 echo $_POST['petName']."'s appointment has been re-scheduled for ".$_POST['eventDate'].".";
?>
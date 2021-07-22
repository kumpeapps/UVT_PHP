<?php
session_start();
if (isset($_SESSION['Username'])) {
    	$Username = $_SESSION['Username'];
    	$userID = $_SESSION['userID'];
    	$masterID = $_SESSION['masterID'];
    	$firstName = $_SESSION['firstName'];
    	$lastName = $_SESSION['lastName'];
    	$email = $_SESSION['email'];
    	$acctStatus = $_SESSION['status'];
    
} else {
    header('Location: login.php');
}
?>
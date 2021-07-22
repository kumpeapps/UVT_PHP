<?php

$data = $_POST['data'];
$data2 = $_POST['data2'];
$host = 'vps1.kumpedns.us';
$user = 'test_db';
$password = 'test_db';
$connection = mysqli_connect($host,$user,$password,'test_db') or die ("Couldn't connect to server.");  

$data = "INSERT INTO test (data) VALUES ('".$data.$data2."')";
$query = mysqli_query($connection, $data) or die("Couldn't execute query. ". mysqli_error($connection));

?>
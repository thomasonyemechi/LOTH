<?php 
session_start(); ob_start();
include('mychat.php');
include('../admin/asset/connect.inc.php');
$id = $_SESSION['user_idx'];
$receiver = userName($id, 'category');
$message = $_POST['message'];
$sql = $db2->query("INSERT INTO groupchat(sender, receiver, message, status) VALUES('$id','$receiver','$message','1')");  
 ?> 
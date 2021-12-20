<?php
//session_start(); ob_start();
// include('../admin/asset/connect.inc.php');
// include('mychat.php');

$id = $_SESSION['user_idx'];
$cat = userName($id, 'category');


//$sqlQuery = $db2->query("SELECT * FROM groupchat WHERE sender='$from' AND reciever= $to OR sender=$to	AND reciever=$from ORDER BY created ASC");
$sqlQuery = $db2->query("SELECT * FROM groupchat WHERE receiver= $cat ORDER BY sn ASC");
			
		$conversation = '<ul>';
		while($chat = mysqli_fetch_array($sqlQuery)){
			if($chat["sender"] != $id) {
				$conversation .= '<li class="sent">';
				$conversation .= '<img width="22px" height="22px" alt="" />';
			} else {
				$conversation .= '<li class="replies">';
				$conversation .= '<img width="22px" height="22px" alt="" />';
			}			
			$conversation .= '<p>'.$chat["message"].'</p>';			
			$conversation .= '</li>';
		}		
		$conversation .= '</ul>';
echo $conversation;
 ?>
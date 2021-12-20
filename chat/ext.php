<?php 
 session_start(); ob_start();
 include('../portal/asset/connect.inc.php');
 include('mychat.php');

$id = $_SESSION['user_idx'];
$cat = userName($id, 'category');
 $output = ''; 
 $result = $db2->query("SELECT * FROM groupchat WHERE receiver= $cat ORDER BY sn ASC limit 7"); 

 while($row = mysqli_fetch_array($result)) 
 { 
 $output .= ' 
<div class="messages" id="conversation">	
 		<ul>';
		while($chat = mysqli_fetch_array($result)){
			if($chat["sender"] != $id) {
				$output .= '<li class="sent">';
				$output .= '<img src="../admin/uphoto/'.userName($chat['sender'], 'photo').'" width="22px" height="22px" alt="" />';
			} else {
				$output .= '<li class="replies">';
				$output .= '<img src="../admin/uphoto/'.userName($chat['sender'], 'photo').'" width="22px" height="22px" alt="" />';
			}			
			$output .= '<p>'.$chat['message'].'</p>';			
			$output .= '</li>';
		}		
		$output .= '</ul></div>'; 
 } 
 $output .= '
 <div class="message-input" id="replySection">				
	<div class="message-input" id="replyContainer">
		<div class="wrap">
		<form name="form1">
			<input class="" name="msg" id="message" contenteditable/>
			<button type="button" name="add" id="add">Add</button>	</form>
		</div>
	</div>					
</div>
 ';  
 echo $output; 
 ?>
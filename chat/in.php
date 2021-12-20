<?php 
session_start(); ob_start();
include('../admin/asset/connect.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- jQuery -->
<title>Group Chat</title>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'>
<link href="css/style.css" rel="stylesheet" id="bootstrap-css">
<script src="js/chat.js"></script>
<style>
.modal-dialog {
    width: 400px;
    margin: 30px auto;	
}
</style>
<?php $id=$_SESSION['user_idx'];?>
</head>
<body class="">
<div role="navigation" class="navbar navbar-default navbar-static-top">

    </div>
	
	<div class="container" style="min-height:500px;">
	<div class=''>
	</div>
<div class="container">		
	<?php if(isset($_SESSION['user_idx'])) { ?> 	
		<div class="chat">	
			<div id="frame">		
				<div id="sidepanel">
					<div id="profile">
					<?php
					include ('mychat.php');
					$chat = new Chat();
					//print_r($_SESSION['user_idx']); exit();
					$sqlQuery =$db2->query("SELECT * FROM user WHERE id = '$id' ");
					$user = mysqli_fetch_assoc($sqlQuery);
						//print_r($user); exit();

					echo '<div class="wrap">';
						echo '<img id="profile-img" src="../admin/uphoto/'.$user['photo'].'" class="online" alt="" />';
						echo  '<p>'.$user['username'].'</p>';
							echo '<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>';
							echo '<div id="status-options">';
							echo '<ul>';
								echo '<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>';
								echo '<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>';
								echo '<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>';
								echo '<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>';
							echo '</ul>';
							echo '</div>';
							echo '<div id="expanded">';			
							echo '<a href="logout.php">Logout</a>';
							echo '</div>';
					echo '</div>';
					?>
					</div>
					<div id="search">
						<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
						<input type="text" placeholder="Search contacts..." />					
					</div>
					<div id="contacts">	
					<?php
					echo '<ul>';
					$cat = userName($id, 'category');
					$chatUsers =$db2->query("SELECT * FROM user WHERE category='$cat' AND id !='$id' ");
					while($user = mysqli_fetch_assoc($chatUsers)) {
						$status = 'offline';						
						//if($user['online']) {
							$status = 'online';
						//}
						$activeUser = '';
						//if($user['userid']) {
							$activeUser = "active";
						//}
						echo '<li id="'.$user['id'].'" class="contact '.$activeUser.'" data-touserid="'.$user['id'].'" data-tousername="'.userName($user['id']).'">';
						echo '<div class="wrap">';
						echo '<span id="status_'.userName($user['id']).'" class="contact-status '.$status.'"></span>';
						echo '<img src="../admin/uphoto/'.$user['photo'].'" alt="" />';
						echo '<div class="meta">';
						echo '<p class="name">'.$user['firstname'].'</p>';
						echo '<p class="preview"><span id="isTyping_'.userName($user['id']).'" class="isTyping"></span></p>';
						echo '</div>';
						echo '</div>';
						echo '</li>'; 
					}
					echo '</ul>';
					?>
					</div>
					<div id="bottom-bar">	
						<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
						<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>					
					</div>
				</div>			
				<div class="content" id="content"> 
					<div class="contact-profile" id="userSection">	
					<?php									
						echo '<img src="userpics/user1.jpg" alt="" />';
							echo '<p>Youth Chat Group</p>';
							echo '<div class="social-media">';
								echo '<i class="fa fa-facebook" aria-hidden="true"></i>';
								echo '<i class="fa fa-twitter" aria-hidden="true"></i>';
								 echo '<i class="fa fa-instagram" aria-hidden="true"></i>';
							echo '</div>';
					?>						
					</div>
					<div id="disp_data">	

					</div>
				</div>
			</div>
		</div>	
<?php } ?>

</div>	
<div class="insert-post-ads1" style="margin-top:20px;">

</div>
</div>
</body>
</html>
<script>
    $(document).ready(function() {
        function fetch_data() {
            $.ajax({
                url: "ext.php",
                method: "POST",
                success: function(data) {
                    $('#disp_data').html(data);
                }
            });
        }
        fetch_data();
        $(document).on('click', '#add', function() {
            var message = document.form1.msg.value;
            console.log(message);
          
            $.ajax({
                url: "insert.php",
                method: "POST",
                data: {
                    message: message,
                },
                dataType: "text",
                success: function(data) {
                    //alert(data);
                    fetch_data();
                }
            })
        });
 
        function edit_data(id, text, column_name) {
            $.ajax({
                url: "edit.php",
                method: "POST",
                data: {
                    id: id,
                    text: text,
                    column_name: column_name
                },
                dataType: "text",
                success: function(data) {
                    alert(data);
                }
            });
        }
        $(document).on('blur', '.first_name', function() {
            var id = $(this).data("id1");
            var first_name = $(this).text();
            edit_data(id, first_name, "first_name");
        });
        $(document).on('blur', '.last_name', function() {
            var id = $(this).data("id2");
            var last_name = $(this).text();
            edit_data(id, last_name, "last_name");
        });
        $(document).on('click', '#delete', function() {
            var id = $(this).data("id3");
            if (confirm("Are you sure you want to delete this?")) {
                $.ajax({
                    url: "delete.php",
                    method: "POST",
                    data: {
                        id: id
                    },
                    dataType: "text",
                    success: function(data) {
                        alert(data);
                        fetch_data();
                    }
                });
            }
        });
    });
</script> 


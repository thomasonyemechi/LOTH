<?php


function sqLx($table,$col,$val,$item){
	global $db;
$sql=$db->query("SELECT * FROM $table WHERE $col='$val' ")or die(mysqli_error());	
$row = mysqli_fetch_assoc($sql); 
return $row[$item];
}
function sqLx2($table,$col,$val,$col2,$val2,$item){
	global $db;
$sql=$db->query("SELECT * FROM $table WHERE $col='$val' AND $col2='$val2' ")or die(mysqli_error());	
$row = mysqli_fetch_assoc($sql); 
return $row[$item];
}

function countMessage($id){
	global $db;

	$sql = $db->query("SELECT * FROM msg WHERE senderid='$id' AND active='1'");

	return $sql->num_rows;
}
function readMessage($uid){
    global $db;

    $sql = $db->query("UPDATE msg SET active=0 WHERE receiverid='$uid'");
}
function incentive1($uid,$stage,$level){
	global $db;

	$sql = $db->query("SELECT * FROM incentive WHERE id='$uid' AND stage='$stage' AND level='$level'");
	$row = $sql->fetch_assoc();
	if($sql->num_rows > 0){
		return true;
	}
	else {
		return false;
	}
}
function incentive($uid,$stage,$level){
	global $db;

	$sql = $db->query("SELECT * FROM incentive WHERE id='$uid' AND stage='$stage' AND level='$level'");
	$row = $sql->fetch_assoc();

	return $row['status'];
}
function bcrypt($pass){
    return password_hash($pass,PASSWORD_BCRYPT);
}
function receivedTransfer($uid){
	global $db;

	$sql = $db->query("SELECT SUM(amount) AS sum FROM transfer WHERE id2='$uid'");
	$row = $sql->fetch_assoc();

	return $row['sum'];
}
function shaToKey($sn,$col='sn'){
    global $db;

    $sql = $db->query("SELECT * FROM user WHERE sha1(sn) = '$sn' LIMIT 1");
    $row = $sql->fetch_assoc();
    $val = $row[$col];
    return $val;
}
function get_time_ago($time){
    $time_difference = time()-$time;
    if($time_difference < 1 ){return "less than 1 second ago";}
    $condition = array(12*30*24*60*60 => 'Year',
        30*24*60*60 => 'Month',
        24*60*60 => 'Day',
        60*60 => 'Hour',
        60 => 'Minute'
        );
    foreach($condition as $secs => $str){
        $d = $time_difference / $secs;
        if($d >= 1){
            $t = round($d);
            return $t.' '.$str.($t> 1?'s':'').' ago';
        }
    }
}
function totalTransfer($uid){
	global $db;

	$sql = $db->query("SELECT SUM(amount) AS sum FROM transfer WHERE id='$uid'");
	$row = $sql->fetch_assoc();

	return $row['sum'];
}
function totalWithdraw($uid){
	global $db;

	$sql = $db->query("SELECT SUM(amount) AS sum FROM withdraw WHERE id='$uid'");
	$row = $sql->fetch_assoc();

	return $row['sum'];
}
function IdToSn($id){
	 global $db;

    $sql = $db->query("SELECT * FROM user WHERE id='$id' LIMIT 1");
    $row = $sql->fetch_assoc();
    $val = $row['sn'];
    return $val;
}
function snToName($sn,$col=''){
	 global $db;

    $sql = $db->query("SELECT * FROM user WHERE sn='$sn' LIMIT 1");
    $row = $sql->fetch_assoc();
    $val = ($col=='')?$row['firstname'].' '.$row['lastname']:$row[$col];
    return $val;
}
function userName($id,$col=''){
    global $db;

    $sql = $db->query("SELECT * FROM user WHERE id='$id'");
    $row = $sql->fetch_assoc();
    $val = ($col=='')?$row['firstname'].' '.$row['lastname']:$row[$col];
    return $val;
}

function userNamex($id){
    global $db;

    $sql = $db->query("SELECT * FROM user WHERE id='$id'");
    $row = $sql->fetch_assoc();
    $val = $row['firstname'].' '.$row['lastname'];
    return $val;
}


function sqL1x($table,$col1,$val1,$level=1){
global $db;
$sql=$db->query("select * from $table where $col1='$val1' " )or die(mysqli_error());	
	if($level==1){ return $sql; }
	elseif($level==2){ return mysqli_fetch_assoc($sql); }
	else{return mysqli_num_rows($sql); }
}

function numsqLx($table,$col,$val){
global $db;
$sql=$db->query("select * from $table where $col='$val' " )or die(mysqli_error());
	$num = mysqli_num_rows($sql);	
	return $num;
}

function numsqLx2($table){
global $db;
$sql=$db->query("select * from $table " )or die(mysqli_error());	
	$num = mysqli_num_rows($sql);
	return $num;
}

function numsqLx3($table, $col, $value){
global $db;
$sql=$db->query("select * from $table where $col = '$value' " )or die(mysqli_error());	
	$num = mysqli_num_rows($sql);
	return $num;
}



function arrayForm($names,$places){
	
	//names refers to array of names
	//places refers to array of placeholders
	
	$names = explode(' ',$names);
	$places = explode(' ',$places);
		$n = count($names);
		$a = 0;
		
		while($a<$n){ $b = $a++;
				$input .= '<div style="float:left; padding:10px; width:100%"><input name="'.$names[$b].'" class="form-control" value=""  placeholder="'.$places[$b].'"  required />';	
				}
	
	return $input;
}


///// TABLES

function Table($field,$value,$dbtable){
		//field is an array that needs to be exploaded
		//dbtable is the name of the database table you want to fetch from
		//sumoption make a provision for adding a sum row at the end of the 
		//table and needs to be defined eternally to contain the exact structure of 
		//the table row containing sum of column fields.
		$field = explode(' ',$field);
		$value = explode(' ',$value);
		$n = count($field);
		$a = 0;
	
		
		
		$table .= '<table class="table table-hover" id="dataTables-example">
                    <thead>
                          <tr>';
				while($a<$n){ $b = $a++;
				$table .= '<th>'.strtoupper(str_replace("-"," ",$field[$b])).'</th>';	
				}
		$table .= '   </tr>
                    </thead>
                    <tbody> ';
                           
							//$qu=mysql_query("select * FROM zone ORDER BY zone " )or die(mysql_error());
						

							while($row = sqL($dbtable)){ 
							
                          $table .= '<tr class="odd gradeX">';
						  $a = 0;
						  while($a<$n){ $b = $a++; 
				$table .= '<td class="center">'.$row->$value[$b].' </td>';	}
				$table .= '</tr>';   
							}
				

				$table .= ' </tbody></table>';
                   
				return $table;		  
	}










				
				


/*
		
function getUserLevel($rep){
		global $db,$rep,$user_created;
		$sql = $db->query("SELECT * FROM admin WHERE sn = '$rep' ");
		$row=mysqli_fetch_assoc($sql);
		$user_created = $row['created'];
		 if($row['usertype']==1){$level = 'Ticket Officer';}elseif($row['usertype']==2){$level = 'Administrator';}
		return $level;
	}
	
	function getUserN($rep){
		global $db,$rep,$user_created;
		$sql = $db->query("SELECT * FROM admin WHERE sn = '$rep' ");
		$row=mysqli_fetch_assoc($sql);
		$userN = $row['surname'].' '.$row['othername'];
		return $userN;
	}						
	

*/



function chkLogin(){
	global $db,$userPhoto,$userLevel;
if($_SERVER['SCRIPT_NAME']=='/profile/login.php'){ }
else{
	if(!isset($_SESSION['admin']) OR !isset($_SESSION['rep'])){ header('location: ../'); exit;  } else{
				$user = $_SESSION['rep'];
				 $sql = $db->query("SELECT * FROM user WHERE sn = '$user' ");
		$row=mysqli_fetch_assoc($sql);
		$userPhoto = $row['photo'];
		$userLevel = $row['usertype'];
		
		if($userLevel < 1){ header('location: ../');  }
		 elseif($userLevel > 2){ header('location: ../');  } else{}
		}
	}
	
	return;	
}

function adminAccess(){
	if($_SESSION['userLevel'] != 2){ session_destroy(); }
	return;
}

function checkExtension($end){
    $array = array('jpg','jpeg','gif','png');

    if(in_array($end,$array)){
        return true;
    }
    else { return false; }
}
function checkSize($image_size){
    if($image_size <= 1048576){
        return true;
    }
    else {
        return false;
    }
}
function sanitize($str){
	global $db;
	return mysqli_real_escape_string($db, $str);
}


function selectBank($json,$code=''){
 $code= (string)$code; $res='';
foreach ($json as $key => $value) {
    if (!is_array($value)) {
        echo $key . '=>' . $value . '<br />';
    } else {
        foreach ($value as $key => $val) {
          if($key=='name'){ $sel = (string)$value['code']==$code ? ' selected' : '';
            $res .= '<option value="'. $value['code'] .'"'.$sel.'>' . $value['name'] . '</option><br />';
          }
        }
    }
}
return $res;
}

function campeign($ref,$media){
    global $db;
$sql=$db->query("SELECT * FROM agentlog WHERE ref='$ref' AND media='$media' AND type=0 ")or die(mysqli_error());   
$row = mysqli_num_rows($sql); 

return $row;

}

			
?>
<?php

$uri = basename($_SERVER['REQUEST_URI'], '?' . $_SERVER['QUERY_STRING']);

class Profile
{
  
    //User Array Keys 
    /* Class constructor */
    function __construct()
    {
global $report, $count;
if (array_key_exists('InitialSignup', $_POST)) { $this->signupUserIni(); } 
elseif (array_key_exists('LoginUsers', $_POST)) { $this->LoginUsers();  }
elseif (array_key_exists('addCategory', $_POST)) { $this->addCategory(); } 
elseif (array_key_exists('updateCategory', $_POST)) { $this->updateCategory();     }
elseif (array_key_exists('deleteCategory', $_POST)) { $this->deleteCategory();     }
elseif (array_key_exists('addBlog', $_POST)) { $this->addBlog();     }
elseif (array_key_exists('deleteBlog', $_POST)) { $this->deleteBlog();     }
elseif (array_key_exists('updateBLog', $_POST)) { $this->updateBLog();     }
elseif (array_key_exists('EditProfile', $_POST)) { $this->EditProfile();     }
elseif (array_key_exists('comment', $_POST)) { $this->comment();     }
elseif (array_key_exists('updateCover', $_POST)) { $this->updateCover();     }
elseif (array_key_exists('deleteCover', $_POST)) { $this->deleteCover();     }
elseif (array_key_exists('ChangeUserPassword', $_POST)) { $this->ChangeUserPassword();     }
elseif (array_key_exists('logout', $_POST)) { $this->LogoutUser();     }
elseif (array_key_exists('searchclient', $_POST)) { $this->searchclient();     }
elseif (array_key_exists('newsletter', $_POST)) { $this->newsletter();        } 
elseif (array_key_exists('createnews', $_POST)) { $this->createnews();        } 
elseif (array_key_exists('updatenews', $_POST)) { $this->updatenews();        } 
elseif (array_key_exists('deletenews', $_POST)) { $this->deletenews();        } 
elseif (array_key_exists('createevent', $_POST)) { $this->createevent();        } 
elseif (array_key_exists('updateevent', $_POST)) { $this->updateevent();        } 
elseif (array_key_exists('addMagzine', $_POST)) { $this->addMagzine();        } 
elseif (array_key_exists('addBook', $_POST)) { $this->addBook();        } 
elseif (array_key_exists('insertBook', $_POST)) { $this->insertBook();        } 
elseif (array_key_exists('postStatus', $_POST)) { $this->postStatus();        } 
elseif (array_key_exists('updateMyProfile', $_POST)) { $this->updateMyProfile();        } 
elseif (array_key_exists('ViewComment', $_POST)) { $this->ViewComment();        } 
elseif (array_key_exists('download', $_POST)) { $this->download();        } 
elseif (array_key_exists('mul', $_POST)) { $this->mul();        } 
elseif (array_key_exists('updatePicture', $_POST)) { $this->updatePicture();        } 
elseif(array_key_exists('SendMail', $_POST)){ $this->SendMail(); }  
elseif(array_key_exists('SendMail2', $_POST)){ $this->SendMail2(); } 
elseif(array_key_exists('SendMail3', $_POST)){ $this->SendMail3(); } 
elseif(array_key_exists('forgotpassword', $_POST)){ $this->forgotpassword(); } 
elseif(array_key_exists('passreset', $_POST)){ $this->passreset(); } 
elseif(array_key_exists('deletestatus', $_POST)){ $this->deletestatus(); } 
elseif(array_key_exists('editstatus', $_POST)){ $this->editstatus(); } 
elseif(array_key_exists('mutestatus', $_POST)){ $this->mutestatus(); } 
elseif(array_key_exists('updatecat', $_POST)){ $this->updatecat(); } 
elseif(array_key_exists('updaterole', $_POST)){ $this->updaterole(); } 
elseif(array_key_exists('sharetestimony', $_POST)){ $this->sharetestimony(); } 
elseif(array_key_exists('insertMagzine', $_POST)){ $this->insertMagzine(); }
elseif(array_key_exists('updatetest', $_POST)){ $this->updatetest(); } 
elseif(array_key_exists('update', $_POST)){ $this->update(); } 




        return;
    }

function mul(){
    global $db,$count,$report;
    $pic = $_FILES['files']['name'];
    print_r($_FILES['files']['name']); exit();
   $sql = $db->query("INSERT INTO 'timeline'('photo') VALUES ('$pic') ");
foreach ($pic as $key) {
        if ($error == UPLOAD_ERR_OK) {
             define('upload', 'portal/images/');
            $name = $_FILES["files"]["name"][$key];
            //move_uploaded_file($_FILES["files"]["tmp_name"][$key], "" . $_FILES['files']['name'][$key]);
            //move_uploaded_file($_FILES['files']['tmp_name'], upload.$key); 
            $sql = $db->query("INSERT INTO 'timeline'('photo') VALUES ('" . $name . "')") or die('cannot connect to server');
            echo "The file " . basename($_FILES['multiple_uploaded_files']['name']) . " has been uploaded";
        } else {
            echo "There was an error uploading the file, please try again!";
        }
    }
return;
}


    function EditProfile()
    {
        global $db, $report, $count;

        $id = $_SESSION['user_idx'];
        $surname = sanitize($_POST['surname']);
        $othername = sanitize($_POST['othername']);
        $email = sanitize($_POST['email']);
        $address = sanitize($_POST['address']);
        $phone = sanitize($_POST['phone']);
        $sex = sanitize($_POST['sex']);
        $dob = sanitize($_POST['dob']);
        $bank = sanitize($_POST['bank']);
        $accountno = sanitize($_POST['accountno']);
        $accname = sanitize($_POST['accname']);
        //$officeaddress = sanitize($_POST['officeaddress']);
      //  $country = sanitize($_POST['country']);
        //$state = sanitize($_POST['state']);
       
     $sql = $db->query("UPDATE user SET surname='$surname', othername='$othername', email='$email', address='$address', phone='$phone',
            sex='$sex', birthday='$dob', bank='$bank', accountno='$accountno', accname='$accname' WHERE id='$id'");
        if ($sql) {
            $report = "Updated Successfully";
        } else {
            $count = 1;
            $report = "Error Updating Profile";
        }

    }
function deleteCategory(){
    global $db, $report,$count;

    
        $id=$_SESSION['cid'];
        $con = $db->query("SELECT * FROM blog WHERE category=$id ");
   if(mysqli_num_rows($con)<1){$sql = $db->query("DELETE FROM category WHERE sn='$id'");
        $report = "Deleted Successfully";
        unset($_SESSION['cid']);
    }
    else {
        $count = 1;
        $report = "Cannot Be Deleted";
            unset($_SESSION['cid']);
    }
}



    function ChangeUserPassword()
    {
        global $db, $report, $count;

        $id = $this->Uid();
        $pass = userName($id, 'pass');
        $password = sanitize($_POST['pwd']);
        $new_pass = sanitize($_POST['newpwd']);
        $retype = sanitize($_POST['retype']);

    if ($new_pass != $retype) {
        $report = "Confirm Password Must Be the Same With New Password";
        $count = 1;
    }
        elseif (!password_verify($password, $pass)) {
            $report = "Wrong Password";
            $count = 1;
        } elseif (strlen($new_pass) <= 3) {
            $report = "Sorry Password Must Be More Than 3 Characters";
            $count = 1;
        }  else {
            $original = bcrypt($new_pass);
            $sql = $db->query("UPDATE user SET pass='$original' WHERE id='$id'");
            $report = "Password Changed Successfully";
        }

    }



function deleteBlog(){
    global $db, $report,$count;

    
        $sn=$_SESSION['bsn'];
   if($sql = $db->query("DELETE FROM blog WHERE sn='$sn'")){
        $report = "Deleted Successfully";
        unset($_SESSION['bsn']);
    }
    else {
        $count = 1;
        $report = "Error Deleting Question";
    }
}

function deleteCover(){
    global $db, $report,$count;

    
        $id=$_SESSION['cid'];
   if($sql = $db->query("DELETE FROM cover WHERE id='$id'")){
        $report = "Deleted Successfully";
        unset($_SESSION['cid']);
    }
    else {
        $count = 1;
        $report = "Error Deleting Question";
    }
}
function updateCategory(){
    global $db, $report,$count;

    
        $csn=$_SESSION['cid'];
         $title=$this->valEmpty($_POST['title'], 'Title');
   if(!isset($count)){$sql = $db->query("UPDATE category SET title='$title' WHERE  sn='$csn' ");
        $report = "Updated Successfully";
            unset($_SESSION['cid']);
    }
    else {
        $count = 1;
        $report = "Error Updating Category";
    }
        
}

function updateBLog(){
    global $db, $report,$count;


        $sn=$_SESSION['bsn'];
         $title=$this->valEmpty($_POST['title'], 'Title');
         $cat=$_POST['category'];
         $detail=$this->valEmpty($_POST['detail'], 'Detail');

   if(!isset($count)){$sql = $db->query("UPDATE blog SET title='$title',category='$cat',detail='$detail' WHERE  sn='$sn'");
        $report = "Updated Successfully";
        unset($_SESSION['bsn']);
    }
    else {
        $count = 1;
        $report = "Error Updating";
    }

}

function searchclient(){
    global $db, $pro, $report, $count;
    $email = $this->valEmpty($_POST['email'], 'E-mail');
    $sql = $db->query("SELECT * FROM user WHERE email='$email' ");
    $row = mysqli_fetch_array($sql);
    $id  = $row['id'];
    if($id==$this->Uid()){
        $count = 1; $report = 'You Cannot Validate Your Self';
    }
    elseif(mysqli_num_rows($sql)==1){
        $_SESSION['seachclient'] = $id;
        $report = 'Reslut Found For Search';
    }else{
        $count = 1; $report = 'No Result Found For This Search';
    }
    return ;

}

function updateCover(){
    global $db, $report,$count;


        $id=$_SESSION['cid'];
         $title=$_POST['title'];
         $detail=$_POST['intro'];
         $price=$_POST['price'];

   if($sql = $db->query("UPDATE cover SET title='$title',detail='$detail',price='$price' WHERE  id='$id'")){
        $report = "Updated Successfully";
        unset($_SESSION['cid']);
    }
    else {
        $count = 1;
        $report = "Error Updating Cover";
    }

}

function snToName($id){
    global $db;

    $sql = $db->query("SELECT * FROM user WHERE id='$id' ");
    $row = $sql->fetch_assoc();

    return $row['email'];
}

       function userName($col='')
    {
        global $db;
        $id =  $_SESSION['user_idx'];
        $que = $db->query("SELECT * FROM user WHERE id = '$id' ") or die(mysqli_error());
        $ro = mysqli_fetch_array($que);
        $val = $ro[$col];
        return $val;
    }


function addBlog(){   
 global $db, $count, $report;
     //$id=$this->win_hashs(40);
 print_r($_POST); exit();
     $rep = $_SESSION['user_idx'];
    $cat=$_POST['category'];
    $title= $this->valEmpty($_POST['title'], 'Title');
    $subtitle = $this->valEmpty($_POST['subtitle'], 'Summary');
    $detail= $this->valEmpty(addslashes($_POST['detail']), 'Detail');
    $ctime = time();
    $slug = $this->slug($title);
    $photo=$_FILES['photo']['name'];
    $target1 = "images/".basename($photo); 
    define('upload', 'images/');

if($this->fileExt($photo)==TRUE){
     $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload.$photo); 
 if(!isset($count)){$quess = $db->query("INSERT INTO blog (category,title,detail,photo,rep,ctime,slug,subtitle) VALUES ('$cat','$title','$detail','$photo','$rep','$ctime','$slug','$subtitle')") or die('Cannot connect to server');
        $report  = "Submited Successfully";
    }
    else{$count = 1; $report="Error Submitting";} }
    else{$count = 1; $report = 'This file is not a picture';}

return;
}
 
 function addCover(){   
 global $db, $count, $report;
     //$id=$this->win_hashs(40);
     $id = $this->win_hashs(10);
    $title=$_POST['title'];
    $intro=$_POST['intro'];
    $price= addslashes($_POST['price']);
    $photo=$_FILES['photo']['name'];
    $target1 = "images/".basename($photo); 
    define('upload', 'images/');

if($this->fileExt($photo)==TRUE){
     $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload.$photo); 
 if($quess = $db->query("INSERT INTO cover (id,title,detail,price,photo) VALUES ('$id','$title','$intro','$price','$photo')") or die('Cannot connect to server')){
        $report  = "Successfully Submitted";
    }
    else {$count = 1; $report="Error Submitting";}

  }
return;
}
 
 function fileExt($name){
    $ext = strtolower(substr($name, strpos($name,'.'), strlen($name)-1));
if($ext=='.jpg' OR $ext=='.jpeg' OR $ext=='.png'){ $res = TRUE; }else{$res= FALSE; }
return $res;
}

    function signupUserIni()
    {
        global $db,$report,$count;

        $email = strtolower($this->valEmpty(sanitize($_POST['email']), 'E-mail'));
        $firstname = strtolower($this->valEmpty(sanitize($_POST['firstname']), 'Firstname'));
        $phone = strtolower($this->valEmpty(sanitize($_POST['phone']), 'Phone Number'));
        $lastname = strtolower($this->valEmpty(sanitize($_POST['lastname']), 'Lastname'));
        $age = $_POST['age'];
        $password  = $this->valPass($_POST['password']);
        $password2 = $_POST['password2'];
        $ctime = time();
        if ($password != $password2) {
            $report .= "<br>Password Mismatch";
            $count = 1;
        } elseif ($this->emailExist($email) == TRUE) {
            $report .= "A user with this Email already exist. Try another.";
            $count = 1;
        } elseif (!isset($count)) {

            $id = $this->win_hashs(10);
            $pwd = password_hash($password, PASSWORD_BCRYPT);
            $sql = $db->query("INSERT INTO user (id,firstname,lastname,email,pass,phone,category,ctime)
VALUES('$id','$firstname','$lastname','$email','$pwd','$phone','$age','$ctime')") or die('Cannot Connect to Server');
            $report = "<br>User account successfully created.";
            

            if ($this->emailExist($email) == TRUE) {$_SESSION['user_idx'] = $id;
                if($_SERVER['REQUEST_URI']=='/light/signup'){ header('location: group.php'); }else{}
             }
            else{$report = 'Signup not successful, try again'; $count=1;}
         
        }
        return;
    }

    function valEmpty($field, $fname)
    {
        global $report, $count;
        $field = sanitize(trim($field));
        if ($field == '') {
            $report .= "<br>" . $fname . " field is required! ";
            $count = 1;
            return;
        } elseif (strlen($field) < 3) {
            $report .= "<br>" . $fname . " entered is too short! ";
            $count = 1;
            return;
        } else {
            return $field;
        }
    }

    function emailExist($email)
    {
        global $db, $report, $count;
        $sql = $db->query("SELECT * FROM user WHERE email = '$email' ") or die(mysqli_error());
        $num = mysqli_num_rows($sql);
        if ($num == 0) {
            $res = FALSE;
         } else {
            $res = TRUE;
        }
        return $res;
    }


    function valPhone($field)
    {
        global $report, $count;
        $field = sanitize(trim($field));
        if ($field == '') {
            $report .= "<br>Phone Number field is required! ";
            $count = 1;
            return;
        } elseif (strlen($field) < 11) {
            $report .= "<br>Phone Number entered is invalid! ";
            $count = 1;
            return;
        } else {
            return $field;
        }
    }

    function valPass($field)
    {
        global $report, $count;
        if ($field == '') {
            $report .= "<br>Password field is required! ";
            $count = 1;
            return;
        } elseif (strlen($field) < 6) {
            $report .= "<br>Password cannot be less than 6 characters! ";
            $count = 1;
            return;
        } else {
            return sanitize($field);
        }
    }

    function val($field)
    {
        global $report, $count;
        if ($field == ''
        ) {
            $report .= "field is required! ";
            $count = 1;
            return;
        } else {
            return sanitize($field);
        }
    }



  

    function win_hash($length)
    {
        return substr(str_shuffle(str_repeat('123456789', $length)), 0, $length);
    }

    function win_hashs($length)
    {
        return substr(str_shuffle(str_repeat('123456789abcdefghijklmnopqrstuvwxyz', $length)), 0, $length);
    }

  //         $sqll = $db->query("SELECT * FROM blog");
  // while ($r=mysqli_fetch_assoc($sqll)) {
  //   $sn=$r['sn']; $nid= win_hashs(10);
  //   $db->query("UPDATE blog SET id='$nid' WHERE sn='$sn");
  // } 

    function resetPass()
    {//
        global $db, $report, $count;
        $email = strtolower(trim(sanitize($_POST['emailreset'])));
        $sql = $db->query("SELECT * FROM user WHERE email = '$email' ") or die('Could not initiate password reset');
        $row = mysqli_fetch_array($sql);
        $reset_order = $this->win_hash(41);
        $find = mysqli_num_rows($sql);
        if ($find == 0) {
            $report = 'This email does not exist in our system, check and try again';
            $count = 1;
        } elseif ($find == 1) {
            $sql = $db->query("UPDATE user SET code='$reset_order' WHERE email = '$email' ") or die('Could not initiate password reset');
            $message = 'You have requested for a password reset. Follow the link below to reset your password:<br>';
            $message .= 'https://www.livepetal.com/accountreset.php?request-index=' . $reset_order;
            $subject = 'Livepetal Password Recovery';
            $this->emailerAll($email, $message, $subject);
            $report = 'We have sent you an e-mail containing your password reset link. Follow the link to reset your password';
        }

        return;
    }

    function forgotpassword()
    {//
        global $db, $report, $count;
        $email = strtolower(trim(sanitize($_POST['emailreset'])));
        $sql = $db->query("SELECT * FROM user WHERE email = '$email' ") or die('Could not initiate password reset');
        $row = mysqli_fetch_array($sql);
        $find = mysqli_num_rows($sql);
        if ($find == 0) {
            $report = 'This email does not exist in our system, check and try again';
            $count = 1;
        } elseif ($find == 1) {
            $reset_order = $this->win_hash(41);
            $tim = time()+1800; $id = $row['id'];
            $s = $db->query("UPDATE user SET code='$reset_order', extime='$tim' WHERE id='$id' ") or die('Could not initiate password reset');

            $message = 'You have requested for a password reset. Follow the link below to reset your password:<br>';
            $message .= 'https://www.light/accountreset.php?request-index=' . $reset_order;
            $subject = 'Light On the hill Top Password Recovery';
            $this->emailerAll($email, $message, $subject);
            $report = 'A pasword Reset link has Been sent to your mail';
        }

        return;
    }


    function passreset()
    {
        global $db, $report, $count;
        $key = $_GET['reset_order'];
        $ch = $db->query("SELECT * FROM user WHERE code='$key' ");
         $row = mysqli_fetch_assoc($ch);
         $id = $row['id'];

         $ex = $row['extime'];

        $password = $this->valEmpty($_POST['password'], 'Password');
        $cpass = $this->valEmpty($_POST['confirmpassword'], 'COnfirm Password');
        if($ex <= time()){
            if($password==$cpass){

                $pass = password_hash($password, PASSWORD_BCRYPT);
                $up = $db->query("UPDATE user SET pass='$pass' WHERE id='$id' ");
                $report = 'Password Reset Sucessfull';
                $_SESSION['user_idx'] = $id;
                header('location: timeline.php');
            }else{
                $count=1; $report = 'Password Mismatch';
            }
        }
        return;
    }



 function updateUserBank()
    {
        global $db, $report, $count;
        $id=$this->Uid();
       
        $bank = ucwords(strtolower($this->valEmpty($_POST['bank'], 'Bank')));
        $accountno = $this->valEmpty($_POST['accountno'], 'Account Number');
        $accname = $this->valEmpty($_POST['accname'], 'Account Name');

        $db->query("UPDATE user SET bank='$bank', accountno='$accountno', accname='$accname' WHERE id = '$id' ");
        $report = 'User Account Information Successfully Updated!';
        return;
    }


  

    function Alert()
    {
        global $report, $count;
        if ($count > 0) {

            echo '<div class="alert alert-danger alert-dismissible" style="position:fixed; top:10px; right:10px; z-index:100000; background-color: #fafafa; border-color: red;">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-ban"></i>   &nbsp;&nbsp;<b style="color: red;">' . $report . ' </b>&nbsp;&nbsp;&nbsp;
              </div>';


        } else {
            echo '<div class="alert alert-success alert-dismissible" style="position:fixed; top:10px; right:10px; z-index:100000; background-color: #fafafa; border-color: green;"">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <i class="icon fa fa-check"></i>  &nbsp;&nbsp;<b style="color: green;">' . $report . '</b>&nbsp;&nbsp;&nbsp;&nbsp;
              </div>';
        }

//if(isset($report)){   unset($_SESSION['report']);  }
        return;
    }

 function addCategory(){
    global $db,$report,$count;
        
      
    $rep= $_SESSION['user_idx'];
    $ctime = time();
    $title = $this->valEmpty($_POST['title'], 'Title');

    if(!isset($count)){$examtable = $db->query("INSERT INTO category (
        ctime,title,rep) VALUES ('$ctime','$title','$rep')") or die('Cannot connect to server');
    $report="Category Successfully Added";}else{ $report = 'Error Submitting'; $count = 1;}
    return;
}

 function createnews(){
    global $db,$report,$count;
      
    $rep= $_SESSION['user_idx'];
    $ctime = time();
    $title = $this->valEmpty($_POST['title'], 'Title');
    $photo = $this->valEmpty($_FILES['photo']['name'],'Photo');
    $detail = $this->valEmpty($_POST['detail'], 'Detail');
        $subtitle = $this->valEmpty($_POST['subtitle'], 'Summary');
    
    if(!isset($count)){
            define('upload', 'images/');
            if ($this->fileExt($photo) == TRUE) {
                $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload . $photo); 
        $sql = $db->query("INSERT INTO news (
        ctime,title,detail,rep,subtitle,photo) VALUES ('$ctime','$title','$detail','$rep','$subtitle','$photo')") or die('Cannot connect to server');
    $report="News Successfully Added";}else{$count=1; $report='Selected File is not an Image';} }
    return;
}


 function createevent(){
    global $db,$report,$count;
    //date and time settings
    $starttime = $_POST['starttime'];
    $endtime = $_POST['endtime'];
    $startdate = $_POST['startdate']; 
    $enddate = $_POST['enddate'];
    //
    $rep= $_SESSION['user_idx'];
    $ctime = time();
    $title = $this->valEmpty($_POST['title'], 'Name');
    $photo = $this->valEmpty($_FILES['photo']['name'], 'Photo');
    $location = $this->valEmpty($_POST['location'], 'Location');
    $subtitle = $this->valEmpty($_POST['subtitle'], 'Summary');
    $detail = $this->valEmpty($_POST['detail'], 'Detail');
    
    if(!isset($count)){
            define('upload', 'images/');
            if ($this->fileExt($photo) == TRUE) {
                $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload . $photo); 
        $sql = $db->query("INSERT INTO event (
        ctime,title,flyer,location,rep,subtitle,detail,startdate,enddate,starttime,endtime) VALUES ('$ctime','$title','$photo','$location','$rep','$subtitle','$detail','$startdate','$enddate','$starttime','$endtime')") or die('Cannot connect to server');
    $report="Event Successfully Added";}else{$count=1; $report='Selected File is not an Image';} }
    return;
}

     function download(){
         global $db, $count, $report;
           // $sqw=$db->query("SELECT * FROM download WHERE token='$tok'" );
           //    $cou = mysqli_num_rows($sqw); if($cou<=1){ 
         $cat = 1;
     if(isset($_GET['book'])){
        $id = $_SESSION['user_idx'];
        $tok = $_GET['book'];
        $sl1=$db->query("INSERT INTO download (userid,category,book) VALUES ('$id','1','$tok')") or die('Cannot connect to server');
        $query = "SELECT * FROM book WHERE id = '$tok' ";
         $results = $db->query($query);
        $file = $results->fetch_assoc();

        $filepath = 'portal/images/'.$file['filename'];
        // print_r($filepath); exit();
         if($filepath){
             header('Content-Type: application/octet-stream');

            header('Content-Description: File Transfer');

            header('Content-Disposition: attachment; filename="'.$file["filename"].'"');

            header('Expires: 0');

            header('Cache-Control: must-revalidate');

            header('Program:Public');

           header('Content-Length:' . filesize($filepath));
           ob_clean();
           flush();
           readfile($filepath);  }
       }

       return;
      
       }

        function insertBook(){   
 global $db, $count, $report;
     //$id=$this->win_hashs(40);
     $id = $this->win_hashs(10);
    $title=$_POST['title'];
    $subtitle = $_POST['subtitle'];
    $intro=addslashes($_POST['detail']);
    $photo=$_FILES['photo']['name'];
    $file=$_FILES['file']['name'];
    $file =rand(111,999).htmlspecialchars($file);
   //adding picture
    define('upload', 'images/');


     $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload.$photo); 
          $success = move_uploaded_file($_FILES['file']['tmp_name'], upload.$file); 
 if($quess = $db->query("INSERT INTO book (id,title,detail,photo,filename,subtitle) VALUES ('$id','$title','$intro','$photo','$file','$subtitle')") or die('Cannot connect to server')){
        $report  = "Successfully Submitted";
    }
    else {$count = 1; $report="Error Submitting";}


return;
}


function insertMagzine(){   
 global $db, $count, $report;
     //$id=$this->win_hashs(40);
     $id = $this->win_hashs(10);
    $title=$_POST['title'];
    $subtitle = $_POST['subtitle'];
    $intro=addslashes($_POST['detail']);
    $photo=$_FILES['photo']['name'];
    $file=$_FILES['file']['name'];
    $file =rand(111,999).htmlspecialchars($file);
   //adding picture
    define('upload', 'images/');

     $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload.$photo); 
          $success = move_uploaded_file($_FILES['file']['tmp_name'], upload.$file); 
 if($quess = $db->query("INSERT INTO magzine (id,title,detail,photo,filename,subtitle) VALUES ('$id','$title','$intro','$photo','$file','$subtitle')") or die('Cannot connect to server')){
        $report  = "Successfully Submitted";
    }
    else {$count = 1; $report="Error Submitting";}


return;
}
 

 function addMagzine(){
    global $db,$report,$count;
      
    $rep= $_SESSION['user_idx'];
    $ctime = time();
    $title = $this->valEmpty($_POST['title'], 'Title');
    $photo = $this->valEmpty($_FILES['photo']['name'], 'Photo');
    $file = $this->valEmpty($_FILES['magzine']['name'], 'File');
    $subtitle = $this->valEmpty($_POST['subtitle'], 'Summary');
    $detail = $this->valEmpty($_POST['detail'], 'Detail');
    
    if(!isset($count)){
            define('upload', 'images/');
            define('upload2', 'books/');
           
            if ($this->fileExt($photo) == TRUE) {
                $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload . $photo); 
                 move_uploaded_file($_FILES['magzine']['tmp_name'], upload . $file); 
        $sql = $db->query("INSERT INTO magzine (
            title,subtitle,detail,photo,filename,rep) VALUES ('$title','$subtitle','$detail','$photo','$file','$rep')") or die('Cannot connect to server');
    $report="Magzine Successfully Added";}else{$count=1; $report='Selected Picture is not an Image';} }
    return;
}

 function addBook(){
    global $db,$report,$count;
      
    $rep= $_SESSION['user_idx'];
    $ctime = time();
    $title = $this->valEmpty($_POST['title'], 'Title');
    $photo = $this->valEmpty($_FILES['photo']['name'], 'Photo');
    $file = $this->valEmpty($_FILES['magzine']['name'], 'File');
    $subtitle = $this->valEmpty($_POST['subtitle'], 'Summary');
    $detail = $this->valEmpty($_POST['detail'], 'Detail');
    
    if(!isset($count)){
            define('upload', 'images/');
            define('upload2', 'books/');
           
            if ($this->fileExt($photo) == TRUE) {
                $success = move_uploaded_file($_FILES['photo']['tmp_name'], upload . $photo); 
                 move_uploaded_file($_FILES['magzine']['tmp_name'], upload . $file); 
        $sql = $db->query("INSERT INTO book (
            title,subtitle,detail,photo,filename,rep) VALUES ('$title','$subtitle','$detail','$photo','$file','$rep')") or die('Cannot connect to server');
    $report="Book Successfully Added";}else{$count=1; $report='Selected Picture is not an Image';} }
    return;
}

 function updateevent(){
    global $db,$report,$count;
      $sn = $_SESSION['esn'];
    $title = $this->valEmpty($_POST['title'], 'Name');
    $location = $this->valEmpty($_POST['location'], 'Location');
    //$date = $_POST['date'];
        $subtitle = $this->valEmpty($_POST['subtitle'], 'Summary');
        $detail = $this->valEmpty($_POST['detail'], 'Detail');

    if(!isset($count)){
        $sql = $db->query("UPDATE event SET title='title', location='$location', edate='$date', subtitle='$subtitle', detail='$detail'  WHERE sn='$sn'  ") or die('Cannot connect to server');
    $report="Event Successfully Updated";
unset($_SESSION['esn']); 
} 
    return;
}


 function updatenews(){
    global $db,$report,$count;
      $sn = $_SESSION['nsn'];
    $title = $this->valEmpty($_POST['title'], 'Title');
    $detail = $this->valEmpty($_POST['detail'], 'Detail');
    $subtitle = $this->valEmpty($_POST['subtitle'], 'Summary');
    
    if(!isset($count)){
        $sql = $db->query("UPDATE news SET title='$title', detail='$detail', subtitle='$subtitle' WHERE sn='$sn' ")  or die('Cannot connect to server');
    $report="News Successfully Updated";
    unset($_SESSION['nsn']);
    }
    return;
}

 function deletenews(){
    global $db,$report,$count;

    $sn = $_SESSION['nsn'];
   if($sql = $db->query("DELETE FROM news WHERE sn='$sn'")){
        $report = "Deleted Successfully";
        unset($_SESSION['nsn']);
    }
    else {
        $count = 1;
        $report = "Error Deleting Question";
    }
    return;
}
     
  function LoginUsers()
{
        global $db, $report, $count;
        $email = strtolower($this->val($_POST['email']));
        $password = $this->val($_POST['password']);
        $sql = $db->query("SELECT * FROM user WHERE email='$email' ");


        if (mysqli_num_rows($sql) == 1) {
            $row = mysqli_fetch_array($sql);
            $status = $row['status'];
            $type = $row['type'];

                if (password_verify($password, $row['pass'])) {
                    if ($status == 1) {
                        $_SESSION['user_idx'] = $row['id']; 
                            if($_SERVER['REQUEST_URI']=='/light/login'){ header('location: group.php'); }else{}
                    } else {
                        $report = 'Your user account has been deactivated, contact the system administrator ';
                        $count = 1;
                    }
                } else {
                    $report = 'Incorrect Login details, try again';
                    $count = 1;
                }
        } else {
            $report = 'Incorrect Login details, try again';
            $count = 1;
        }
        return;
    }


        function checkLogin(){

if (!empty($this->Uid()) AND $this->userExist2($this->Uid())==TRUE) {} 
    else {  $this->LogoutUser();   }
        return;
    }

  function userExist2($id)
    {
        global $db, $report, $count;
        $sql = $db->query("SELECT * FROM user WHERE id = '$id' ") or die(mysqli_error());
        $num = mysqli_num_rows($sql);
        if ($num == 1) {
            $res = TRUE;
        } else {
            $res = FALSE;
        }
        return $res;
    }
        function LogoutUser()
    {
if(isset($_SESSION['user_idx'])){
        $_SESSION['user_idx'] == ''; }
        
        session_destroy();
        header('location: ../login.php');
        return;
    }

 
   function Uid()
    {
        $uid = isset($_SESSION['user_idx']) ? $_SESSION['user_idx'] : 0;
        return $uid;
    }
    function check()
    {
        if(isset($_SESSION['user_idx'])){return TRUE;}else{return FALSE;}
    }

function idTo($table,$id,$row,$col){
 global $db ;
  $sqll=$db->query("SELECT * FROM $table WHERE $row='$id'")or die(mysqli_error());  
  $ro=mysqli_fetch_assoc($sqll); 
  return $ro[$col];
}


function adminlevel()
{
    global $db, $pro;
    $id = $pro->Uid();
    $sqll = $db->query("SELECT * FROM user WHERE id='$id'") or die(mysqli_error());
    $row = mysqli_fetch_assoc($sqll);
    if($row['type']>1 OR $row['id']== 'buf1dfnylr'){return TRUE;}else{return FALSE;}
}

function status($id)
{
    global $db, $pro;
    $sqll = $db->query("SELECT * FROM user WHERE id='$id'") or die(mysqli_error());
    $row = mysqli_fetch_assoc($sqll);
    if($row['status']==1){return TRUE;}else{return FALSE;}
}

    function checkAdmin($rep)
    {
        global $db, $pro;
        $iid = $pro->Uid();
        if ($iid = 'buf1dfnylr') {
            return TRUE;
        } elseif($iid = $rep){
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function checkspace($string){
        
    }

    function slug($string)
    {
        $string = strtolower($string);
        $string = preg_replace('/\s+/', ' ', $string);
        $string = trim($string);
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '-', $string);

        return rand(11111, 9999) . '-' . $slug;
    }

        function slug2($string)
    {
        $string = strtolower($string);
        $string = preg_replace('/\s+/', ' ', $string);
        $string = trim($string);
        $slug = preg_replace('/[^A-Za-z0-9-]+/', '.', $string);

        return $slug;
    }

    function gsqLx($table, $col, $val, $item)
    {
        global $db;
        $sql = $db->query("SELECT * FROM $table WHERE $col='$val' ") or die(mysqli_error());
        $row = mysqli_fetch_assoc($sql);
        return $row[$item];
    }

    function newsletter()
    {
        global $db, $pro, $count, $report;
        $email = $this->valEmpty($_POST['email'], 'E-mail');
        $ctime = time();
        if(!isset($count)){
            $ch = $db->query("SELECT * FROM newsletter WHERE email='$email' ");
            if(mysqli_num_rows($ch)==0){
                $sql = $db->query("INSERT INTO newsletter (email,ctime) VALUES ('$email','$ctime') ");
                $report = 'Subscribtion Successfull';
            }else{$count = 1; $report = 'You have once subscribe to our newsletter';};
        }
    }

    function comment()
    {
        global $db, $count, $report, $pro;
        //$id=$this->win_hashs(40);
        $userid = $this->Uid();
        $blo = $_GET['blog'];
        $blogid = $this->gsqLx('blog', 'slug', $blo, 'sn');
        $comment = $this->valEmpty($_POST['message'], 'Message');
        $ctime = time();
       
        if ($this->Uid()) {
            $firstname = $this->gsqLx('user', 'id', $userid, 'firstname');
            $lastname =
                $this->gsqLx('user', 'id', $userid, 'lastname');
            $username = $firstname . ' ' . $lastname;
            $email = $this->gsqLx('user', 'id', $userid, 'email');
            if ($quess = $db->query("INSERT INTO blogcomment (blogid,username,userid,ctime,comment,email) VALUES ('$blogid','$username','$userid','$ctime','$comment','$email')") or die('Cannot connect to server')) {
                $report  = "Comment Successfully Submited";
            } else {
                $count = 1;
                $report = "Error Submiting Comment";
            }
        } elseif (!$this->Uid()) {
             $email = $this->valEmpty($_POST['email'], 'Email');
            $username = $this->valEmpty($_POST['name'], 'Name');
            if ($quess = $db->query("INSERT INTO blogcomment (blogid,username,userid,ctime,comment,email) VALUES ('$blogid','$username','$userid','$ctime','$comment','$email')") or die('Cannot connect to server')) {
                $report  = "Comment Successfully Submited";
            } else {
                $count = 1;
                $report = "Error Submiting Comment";
            }
        }



        return;
    }

function updateMyProfile(){
    global $db, $count, $report;
    $id = $this->Uid();
    $firstname = strtolower($this->ValEmpty($_POST['firstname'] , 'First Name'));
    $lastname = strtolower($this->ValEmpty($_POST['lastname'], 'Last Name'));
    $phone = strtolower($this->ValEmpty($_POST['phone'], 'Phone'));
    $country = strtolower($this->ValEmpty($_POST['country'], 'Country'));
    $city = strtolower($this->ValEmpty($_POST['city'], 'City'));
    $address = addslashes(strtolower($this->ValEmpty($_POST['address'], 'Address')));
    $dob = $this->ValEmpty($_POST['dob'], 'Date Of Birth');
    $sex = $this->ValEmpty($_POST['sex'], 'Gender');
    $bio = addslashes(strtolower($this->ValEmpty($_POST['bio'], 'Biography')));

    if(!isset($count)){
        $sql = $db->query("UPDATE user SET firstname='$firstname', lastname='$lastname', phone='$phone', 
        country='$country', city='$city', address='$address', bio='$bio', dob='$dob', sex='$sex' WHERE id='$id' ")or die('cannot connect to server');
        $report = 'Profile Sucessfully Updated';
    }
    return;
}

function ViewComment(){
	$_SESSION['blogsn'] = $_POST['ViewComment']; header('location: blogcomment.php');
}

   function isActive($uid){

        global $db, $report, $count;
        $sql = $db->query("SELECT * FROM user WHERE id = '$uid' ") or die(mysqli_error());
        $row = mysqli_fetch_array($sql);
        if ($row['status'] == 1) {return TRUE; } else { return FALSE; }

    } 

        function emailerAll($email, $message, $subject)
    {
        global $surname;
        $headers = 'From: LIVEPETAL <admin@loth.com>' . "\r\n";
        $headers .= 'Reply-To: admin@loth.com' . "\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

        $send = mail($email, $subject, $message, $headers);
        return;
    }

function SendMail(){
    global $db, $report,$signup;
$message=$_POST['msg'];
$subject=$_POST['subject'];
$rec = $_POST['rec'];

$i=1; 
//$sql = $db->query("SELECT * FROM user WHERE active = 2 ");
$sql = $db->query("SELECT * FROM user WHERE sn>20044 ");

    while($row = mysqli_fetch_assoc($sql)){$email = $row['email'];
if($rec==2){$this->emailerAll($email,$message,$subject); $e=$i++; } 
elseif($rec==1 AND $this->isActive($row['id'])==TRUE){ $this->emailerAll($email,$message,$subject);  $e=$i++;  }
elseif($rec==3 AND $this->isActive($row['id'])==FALSE){ $this->emailerAll($email,$message,$subject);  $e=$i++;  }

}
$report='Your message was successfully sent: '.$e.' contacts';
return; 
}


   

function SendMail2(){
    global $db, $report,$signup;
$message=$_POST['msg'];
$subject=$_POST['subject'];
$rec = $_POST['rec'];
$rec2 = explode(',', $rec);
$count = count($rec2);

$i=0; 

    while($i<$count){$e=$i++;    $email = trim($rec2[$e]);
if($email !=''){$this->emailerAll($email,$message,$subject);  }

}
$report='Your message was successfully sent: '.$count.' contacts';
return; 
}


function SendMail3(){
    global $db, $report,$signup;
$message=$_POST['msg'];
$subject=$_POST['subject'];

$i=1; 
//$sql = $db->query("SELECT * FROM user WHERE active = 2 ");
$sql = $db->query("SELECT * FROM newsletter ");

    while($row = mysqli_fetch_assoc($sql)){
     $e=$i++;
        $email = $row['email'];
        //print_r($row); exit();
        $this->emailerAll($email,$message,$subject);
            $report='Your message was successfully sent: '.$e.' contacts'; 
    }

return; 
}

function chat(){
    global $db,$report,$count;

    $userid = $_SESSION['user_idx'];
    $cat = sqLx('user','id',$userid,'category');
    $msg = $_POST['msg'];

    $sql = $db->query("INSERT INTO chat (senderid,category,message) VALUES ('$userid','$cat','$msg') ");
    header('location: groupchat.php#last');
    return ;
}


function postStatus(){
    global $db,$report,$count;


    $userid = $_SESSION['user_idx'];
    $stausid = $this->win_hash(40);
    $content = addslashes($_POST['note']);
    $category = sqLx('user','id',$userid,'category');
    $ctime = time();
    $photo = $_FILES['photo']['name'];
    define('upload', 'portal/timeline/');
           
    if(!isset($count)){

        //if($photo!=''){}else{
            move_uploaded_file($_FILES['photo']['tmp_name'], upload.$photo); 
        //s}
        $sql =$db->query("INSERT INTO  timeline (id,userid,category,note,ctime,photo) 
        VALUES ('$stausid','$userid','$category','$content','$ctime','$photo') ");
    }
    return ;
}


function deletestatus(){
    global $db,$report,$count;
    $sn = $_POST['deletestatus'];
    $sql =  $db->query(" DELETE FROM timeline WHERE id='$sn' ");
    return ;
}


function editstatus(){
    global $db,$report,$count;
    $sn = $_POST['editstatus'];
    $note = $_POST['note']; 
    $photo = $_FILES['photo']['name'];
    if($photo==''){ $sql=$db->query("UPDATE timeline SET note='$note' WHERE sn='$sn' ");}else{
    define('upload', 'portal/timeline/');
            move_uploaded_file($_FILES['photo']['tmp_name'], upload.$photo); 
            $sql=$db->query("UPDATE timeline SET note='$note', photo='$photo' WHERE id='$sn' ");
    }
   


    return ;
}

function mutestatus(){
    global $db,$report,$count;
    $sn = $_POST['mutestatus'];
    $sql=$db->query("UPDATE timeline SET status=0 WHERE id='$sn' ");

    $report = 'Muted successfully';


    return ;
}

function updatecat(){
    global $db,$report,$count;
    $fid = $_SESSION['seachclient'];
    $sn = $_POST['updatecat'];
    $cat= $_POST['rec'];
    $sql=$db->query("UPDATE user SET category=$cat WHERE id='$fid' ");
    $report = 'Category Sucessfully Updated';
    return ;
}


function category($sn){
    if($sn==1){$t = 'teenager';}
    elseif($sn==2){$t = 'youth';}
    elseif($sn==3){$t = 'adult';}
    return $t;
}



function updaterole(){
    global $db,$report,$count;
    $id = $_POST['updaterole'];
    $ty= $_POST['rec'];
    $sql=$db->query("UPDATE user SET type='$ty' WHERE id='$id' ");
    $report = 'Role Sucessfully Updated';
    return ;
}


function type($sn){
    if($sn==1){$t = 'User';}
    elseif($sn==2){$t = 'Blogger';}
    elseif($sn==3){$t = 'Administrator';}
    elseif($sn==5){$t = 'Super Administrator';}
    return $t;
}

function updatePicture(){
    global $db,$report,$count;

    $userid = $_SESSION['user_idx'];
    $photo = $_FILES['photo']['name'];
    define('upload', 'portal/uphoto/');
           
    if(!isset($count)){
        if($this->fileExt($photo)==TRUE){
            move_uploaded_file($_FILES['photo']['tmp_name'], upload.$photo); 
            $sql =$db->query("UPDATE user SET photo='$photo' WHERE id='$userid' ");
            $report = 'Profile Picture Successfully Updated';
        }else{}
    }
    return ;
}

function sharetestimony(){
    global $db,$report,$count;

    $fullname = $this->valEmpty($_POST['fullname'],'Full Name');
    $email = $this->valEmpty($_POST['email'], 'Email');
    $msg = $this->valEmpty($_POST['message'], 'Message');
           
    if(!isset($count)){
        $sql =$db->query("INSERT INTO testimony (fullname, email, message) VALUES('$fullname','$email','$msg') ") or die('cannot connect');
        $report = 'You shared a testimony successfully';
    }
    return ;
}

function updatetest(){
    global $db,$report,$count;
        $sn = $_POST['updatetest'];
    $q = $db->query("UPDATE testimony set status=0 WHERE sn=$sn ");
    $report = 'Marked as read';
    return;
    }


function update(){
    global $db,$report,$count;
        $sn = $_POST['update'];
    $q = $db->query("UPDATE support set status=0 WHERE sn=$sn ");
    $report = 'Marked as read';
    return;
    }







}







$pro = new Profile; 
$uid = $pro->Uid();



?>

<?php session_start(); ob_start(); ?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <?php include('link.php'); ?>
</head>
<body>
    <form method="post" enctype="multipart/form-data">  
    <input type="file" name="files" multiple />
    <br /><br />
    <button type="submit" name="mul">Upload selected files</button> 
</form>
</body>
</html>